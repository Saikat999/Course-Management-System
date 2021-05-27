<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $course = Course::get();
        return view('admin.courses.view_course',compact('course'));
    }


    public function create()
    {
        return view('admin.courses.add_course');
    }

     public function store(Request $req)
    {
        $validateData = $req->validate([
            'thumbnails' => 'required|mimes:jpeg,jpg,png|max:1000',
           ]);
    

       $course = new Course();
       $course->code = $req->code;
       $course->title = $req->title;
       $course->description = $req->description;

       if($req->hasfile('thumbnails')){
           $file = $req->file('thumbnails');
           $ext = $file->getClientOriginalExtension();
           $filename = time().'.'.$ext;
           $file->move('images/thumbnails/',$filename);
           $course->thumbnails=$filename;
       }else{
           return $req;
            $course->thumbnails='';
       }
       $course->save();

       return back();
    }

    
}
