<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Offers;

use Illuminate\Support\Facades\Validator;
use DB;
use Str;
use Auth;
use File;
use Helper;

class WebsiteController extends Controller
{
    public function aboutUs()
    {
        $data['activeMenu'] = "about-us";
        $data['about_us_seetings'] = DB::table('home_aobut_content')->where('id', 1)->first();

        return view('super-admin.website.about-us', $data);
    }

    public function aboutUsSave(Request $request)
    {
        DB::table('home_aobut_content')->where('id', 1)->update([
            'we_do_content' => $request->we_do_content,
            'candidates_content' => $request->candidates_content,
            'employers_content' => $request->employers_content,
        ]);
        return back()->withInput()->with('message', 'Update successfully');
    }
}
