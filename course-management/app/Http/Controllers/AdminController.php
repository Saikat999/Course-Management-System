<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
      return view('admin.home');
    }

     public function logout()
    {
       Auth::logout();
       $notification=array(
           'message' => 'Admin Logout Successfully',
           'alert-type' => 'success'
       );
       return redirect()->route('welcome.page')->with($notification);
    }


}
