@extends('layouts.app')

@section('content')
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
                              
                       </table>
                    </div>
         </div>
     </div>

    </div>
     <div class="col-md-2"></div>

    </div>
     
     

</div>
@endsection