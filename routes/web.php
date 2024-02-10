<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\IndexController;

//password reset
Route::get('forget-password', [ForgotPasswordController::class, 'ForgetPassword'])->name('ForgetPasswordGet');
Route::post('forget-password', [ForgotPasswordController::class, 'ForgetPasswordStore'])->name('ForgetPasswordPost');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'ResetPassword'])->name('ResetPasswordGet');
Route::post('reset-password', [ForgotPasswordController::class, 'ResetPasswordStore'])->name('ResetPasswordPost');


Route::get('/', 'IndexController@index');
Route::get('/about', function () {
    return view('website.about');
});
Route::get('/faq', function () {
    return view('website.faq');
});
Route::get('/contact', function () {
    return view('website.contact');
});
Route::get('/privacy', function () {
    return view('website.privacy');
});
Route::get('/terms', function () {
    return view('website.terms');
});


Route::get('/register', 'Auth\RegisterController@create')->name('register');
Route::post('/sign-up', 'Auth\RegisterController@signUp')->name('sign-up');
// user after login
Auth::routes([
    'verify' => true
]);

Route::get('/home', 'IndexController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend', 'VerificationController@resend')->name('verification.resend');

    Route::group(['middleware' => ['verified']], function () {
        Route::get('/user-dashboard', 'HomeController@dashboard')->name('user-dashboard');
        Route::post('/user-dashboard', 'HomeController@dashboardUpdate')->name('user-dashboard');

        Route::get('/user-profile', 'HomeController@userProfile')->name('user-profile');
        Route::post('/profileUpdate', 'HomeController@profileUpdate')->name('profileUpdate');
    });
});

Route::get('/login/moderator', 'ModeratorLoginController@showModeratorLoginForm');
Route::post('/login/moderator', 'ModeratorLoginController@moderatorLogin');

Route::group(['middleware' => 'auth:moderator'], function () {
    //Route::view('/moderator', 'moderator');
    Route::get('/moderator', 'SuperAdmin\HomeController@index')->name('moderator');
    Route::get('/moderatorDashboard', 'SuperAdmin\HomeController@index')->name('dashboard');

    Route::get('/moderatorProfile', 'SuperAdmin\HomeController@adminProfile')->name('moderatorProfile');
    Route::post('/moderatorProfileUpdate', 'SuperAdmin\HomeController@adminProfileUpdate')->name('moderatorProfileUpdate');
});


Route::get('/login/admin', 'AdminLoginController@showAdminLoginForm');
Route::post('/login/admin', 'AdminLoginController@adminLogin');
//after admin login
Route::group(['middleware' => 'auth:admin'], function () {
    //Route::view('/admin', 'admin');
    Route::get('/admin', 'SuperAdmin\HomeController@index')->name('admin');
    Route::get('/dashboard', 'SuperAdmin\HomeController@index')->name('dashboard');

    //handle moderator 
    Route::resource('handleModerator', 'SuperAdmin\ModeratorController');

    // Route::get('/user-list', 'SuperAdmin\HomeController@userList')->name('user-list');
    // Route::delete('/delete-user/{id}', 'SuperAdmin\HomeController@deleteUser')->name('delete-user');

    //handle profile
    Route::get('/adminProfile', 'SuperAdmin\HomeController@adminProfile')->name('adminProfile');
    Route::post('/adminProfileUpdate', 'SuperAdmin\HomeController@adminProfileUpdate')->name('adminProfileUpdate');
});
