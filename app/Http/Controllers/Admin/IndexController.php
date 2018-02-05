<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function login(){
    	return view('Admin.Index.login');
    }
    public function lockscreen(){
    	return view('Admin.Index.lockscreen');
    }
}
