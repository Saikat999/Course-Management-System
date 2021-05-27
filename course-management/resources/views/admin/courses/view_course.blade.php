@extends('admin.admin_layout')

@section('admin_content')
     
<div class="container mt-3">
    <div class="row">
        <div class="col-md-2"></div>
      <div class="col-md-8">
          <div class="card-header text-center font-weight-bold">
            ALL Courses
          </div>
        <div class="card">

         <div class="card-body">
              <div class="card-body">
                       <table class="table table-striped">
                           <thead>
                               <tr>
                                   <th>Code</th>
                                   <th>Title</th>
                                   <th>Description</th>
                                   <th>Thumbnails</th>
                                   <th>Action</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($course as $course)
                                   <tr>
                                       <td>{{$course->code}}</td>
                                       <td>{{$course->title}}</td>
                                       <td>{{$course->description}}</td>
                                       <td><img src="{{asset('images/thumbnails/'.$course->thumbnails)}}" style="width: 50px; height:50px;" alt="image"></td>
                                       <td>
                                           <a href="#" class="btn btn-info">Details</a>
                                       </td>
                                   </tr>
                               @endforeach
                           </tbody>
                       </table>
                    </div>
         </div>
     </div>

    </div>
     <div class="col-md-2"></div>

    </div>
     
     

</div>

@endsection