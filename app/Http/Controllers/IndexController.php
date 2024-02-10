<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\User;
use App\Models\Offers;
use App\Models\Service;
use App\Models\EasySteps;

use DB;
use Str;
use Auth;
use File;
use Helper;

class IndexController extends Controller
{

    public function index()
    {
        $data = [];
        return view('website.home', $data);
    }

}
