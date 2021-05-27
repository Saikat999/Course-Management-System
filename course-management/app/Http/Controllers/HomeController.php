<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function logout()
    {
       Auth::logout();
       $notification=array(
           'message' => 'Successfully Logout',
           'alert-type' => 'success'
       );
       return redirect()->route('welcome.page')->with($notification);
    }

    public function show()
    {
        
        return view('show_course',compact('course'));
    }
}
