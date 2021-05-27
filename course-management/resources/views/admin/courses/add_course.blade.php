@extends('admin.admin_layout')

@section('admin_content')
     
<div class="container mt-3">
    <div class="row">
        <div class="col-md-2"></div>
      <div class="col-md-8">
          <div class="card-header text-center font-weight-bold">
            Add Course
          </div>
        <div class="card">

         <div class="card-body">
             <form action="{{route('admin.course.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                 <div class="form-group">
                     <label for="title">Course Code</label>
                     <input type="text" class="form-control" name="code" id="exampleInputEmail1"
                         aria-describedby="emailHelp" placeholder="Course code">
                 </div>
                 <div class="form-group">
                     <label for="title">Course Title</label>
                     <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                         aria-describedby="emailHelp" placeholder="Course title">
                 </div>
                 <div class="form-group">
                     <label for="description">Course Description</label>
                     <textarea name="description" rows="5" cols="80" class="form-control"
                         placeholder="Course description"></textarea>
                 </div>
                 <div class="form-group">
                     <label for="productImage">Course Thumbnails</label>
                     <div class="row">
                         <div class="col-md-4">
                         <input type="file" class="form-control" name="thumbnails" id="exampleInputEmail1">
                         </div>
                     </div>
                 </div>
  
                 <button type="submit" class="btn btn-primary">Add Course</button>
             </form>
         </div>
     </div>

    </div>
     <div class="col-md-2"></div>

    </div>
     
     

</div>

@endsection