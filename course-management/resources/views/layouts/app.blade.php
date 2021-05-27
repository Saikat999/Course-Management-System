<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="panel/assets/images/favicon.png" >
        <!--Page title-->
        <title>Student Dashboard</title>
        <!--bootstrap-->
        <link rel="stylesheet" href="panel/assets/css/bootstrap.min.css">
        <!--font awesome-->
        <link rel="stylesheet" href="panel/assets/css/all.min.css">
        <!-- metis menu -->
        <link rel="stylesheet" href="panel/assets/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css">
        <link rel="stylesheet" href="panel/assets/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css">
        <!-- chart -->
        {{-- Toastr CDN --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
   
        <!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
        <!--Custom CSS-->
        <link rel="stylesheet" href="panel/assets/css/style.css">
    </head>
    <body id="page-top">
        <!-- preloader -->
        <div class="preloader">
            <img src="panel/assets/images/preloader.gif" alt="">
        </div>
        <!-- wrapper -->
        <div class="wrapper">
         
          @guest

          @else  

            <!-- header area -->
            <header class="header_area">
                <!-- logo -->
                <div class="sidebar_logo">
                    <a href="index.html">
                        <h5 class="text-white">Course Management</h5>
  {{-- <img src="panel/assets/images/logo.png" alt="" class="img-fluid logo1">
   <img src="panel/assets/images/logo_small.png" alt="" class="img-fluid logo2"> --}}
                    </a>
                </div>
                <div class="sidebar_btn">
                    <button class="sidbar-toggler-btn"><i class="fas fa-bars"></i></button>
                </div>
                <ul class="header_menu">
                    <li><a href="#" class="search_btn" data-toggle="modal" data-target="#myModal"><i class="fas fa-search"></i></a>
                        <div class="modal fade search_box" id="myModal">
                              <button type="button" class="close m-2 text-white float-right" data-dismiss="modal">&times;</button>
                              <form action="#" class="modal-dialog modal-lg">
                                
                                <div class="modal-content bg-transparent">
                                      <!-- Modal body -->
                                      <div class="modal-body">
                                        <input class="form-control bg-transparent text-white form-control-lg"  type="text" placeholder="Search...">
                                        <button class="btn btn-lg submit-btn" type="submit">Search</button>
                                      </div>
                                </div>
                                 
                              </form>
                        </div>
                    </li>
                    <li><a data-toggle="dropdown" href="#"><i class="far fa-envelope"></i><span>4</span></a>
                        <div class="dropdown_wrapper messages_item dropdown-menu dropdown-menu-right">
                            <div class="dropdown_header">
                                <p>you have 4 messages</p>
                            </div>
                            <ul class="dropdown_body nice_scroll scrollbar">
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <img src="panel/assets/images/user1.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-part">
                                            <h6>Madelyn <span><i class="far fa-clock"></i> today</span></h6>
                                            <p>Hello Sam...</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <img src="panel/assets/images/user2.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-part">
                                            <h6>Melvin <span><i class="far fa-clock"></i> today</span></h6>
                                            <p>Hello jhon...</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <img src="panel/assets/images/user3.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-part">
                                            <h6>Olinda <span><i class="far fa-clock"></i> today</span></h6>
                                            <p>Hello jhon...</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <img src="panel/assets/images/user1.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-part">
                                            <h6>Johnson <span><i class="far fa-clock"></i> today</span></h6>
                                            <p>Hello Olinda...</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <img src="panel/assets/images/user3.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-part">
                                            <h6>Madelyn <span><i class="far fa-clock"></i> today</span></h6>
                                            <p>Hello Sam...</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <img src="panel/assets/images/user2.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-part">
                                            <h6>Melvin <span><i class="far fa-clock"></i> today</span></h6>
                                            <p>Hello jhon...</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <img src="panel/assets/images/user3.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-part">
                                            <h6>Olinda <span><i class="far fa-clock"></i> today</span></h6>
                                            <p>Hello jhon...</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <img src="panel/assets/images/user1.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-part">
                                            <h6>Johnson <span><i class="far fa-clock"></i> today</span></h6>
                                            <p>Hello Olinda...</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown_footer">
                                <a href="#">See All Messages</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="#" data-toggle="dropdown"><i class="far fa-bell"></i><span>9</span></a>
                        <div class="dropdown_wrapper notification_item dropdown-menu dropdown-menu-right">
                            <div class="dropdown_header">
                                <p>You have 9 notifications</p>
                            </div>
                            <ul class="dropdown_body scrollbar nice_scroll">
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <span class="text-success"><i class="fas fa-users"></i></span>
                                        </div>
                                        <div class="text-part">
                                            <p>5 new members joined</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <span class="text-danger"><i class="fas fa-exclamation-triangle"></i></span>
                                        </div>
                                        <div class="text-part">
                                            <p> Very long description here that may...</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <span class="text-success"><i class="fas fa-cart-plus"></i></span>
                                        </div>
                                        <div class="text-part">
                                            <p> 25 sales made</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <span class="text-warning"><i class="fas fa-user"></i></span>
                                        </div>
                                        <div class="text-part">
                                            <p> You changed your username</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <span class="text-success"><i class="fas fa-users"></i></span>
                                        </div>
                                        <div class="text-part">
                                            <p>5 new members joined</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <span class="text-danger"><i class="fas fa-exclamation-triangle"></i></span>
                                        </div>
                                        <div class="text-part">
                                            <p> Very long description here that may...</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <span class="text-success"><i class="fas fa-cart-plus"></i></span>
                                        </div>
                                        <div class="text-part">
                                            <p> 25 sales made</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-part">
                                            <span class="text-warning"><i class="fas fa-user"></i></span>
                                        </div>
                                        <div class="text-part">
                                            <p> You changed your username</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown_footer">
                                <a href="#">view All</a>
                            </div>
                        </div>
                    </li>
                    <li><a data-toggle="dropdown" href="#"><i class="far fa-user"></i></a>
                            <div class="user_item dropdown-menu dropdown-menu-right">
                                <div class="admin">
                                    <a href="#" class="user_link"><img src="panel/assets/images/admin.png" alt=""></a>
                                </div>
                            <ul>
                                
                                <li><a href="#"><span><i class="fas fa-user"></i></span> User Profile</a></li>
                                <li><a href=" "><span><i class="fas fa-cogs"></i></span>  Password Change</a></li>
                                <li>

                                    <a href="{{route('user.logout')}}"><span><i class="fas fa-unlock-alt"></i></span> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>

                        <a class="responsive_menu_toggle" href="#"><i class="fas fa-bars"></i></a></li>
                </ul>
            </header><!-- / header area -->
            <!-- sidebar area -->
            <aside class="sidebar-wrapper ">
              <nav class="sidebar-nav">
                 <ul class="metismenu" id="menu1">
                    <li class="single-nav-wrapper">
                        <a href="{{route('admin.home')}}" class="menu-item">
                            <span class="left-icon"><i class="fas fa-home"></i></span>
                            <span class="menu-text">Home</span>
                        </a>
                      </li>
                      <li class="single-nav-wrapper">
                          <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-table"></i></span>
                              <span class="menu-text">Course List</span>
                          </a>
                            <ul class="dashboard-menu">
                              <li><a href="{{route('student.course')}}">All course</a></li>
                              
                            </ul>
                      </li>
                      <li class="single-nav-wrapper">
                          <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-chart-line"></i></span>
                            <span class="menu-text">Course Unit</span>
                          </a>
                            <ul class="dashboard-menu">
                              <li><a href="#">Unit 1</a></li>
                              <li><a href="#">Unit 2</a></li>
                              <li><a href="#">Unit 3</a></li>
                           </ul>
                      </li>
                      <li class="single-nav-wrapper">
                          <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-sort-alpha-down-alt"></i></span>
                            <span class="menu-text">Enrolled Courses</span>
                          </a>
                            <ul class="dashboard-menu">
                                <li><a href="#">Course 1</a></li>
                                <li><a href="#">Course 2</a></li>
                                <li><a href="#">Course 3</a></li>
                              
                           </ul>
                      </li>
                      
                    </ul>
              </nav>
            </aside><!-- /sidebar Area-->


        
   @endguest

   @yield('content')



        </div><!--/ wrapper -->


        
        <!-- jquery -->
        <script src="panel/assets/js/jquery.min.js"></script>
        <!-- popper Min Js -->
        <script src="panel/assets/js/popper.min.js"></script>
        <!-- Bootstrap Min Js -->
        <script src="panel/assets/js/bootstrap.min.js"></script>
        <!-- Fontawesome-->
        <script src="panel/assets/js/all.min.js"></script>
        <!-- metis menu -->
        <script src="panel/assets/plugins/metismenu-3.0.4/assets/js/metismenu.js"></script>
        <script src="panel/assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js"></script>
        <!-- nice scroll bar -->
        <script src="panel/assets/plugins/scrollbar/jquery.nicescroll.min.js"></script>
        <script src="panel/assets/plugins/scrollbar/scroll.active.js"></script>
        <!-- counter -->
        <script src="panel/assets/plugins/counter/js/counter.js"></script>
        <!-- chart -->
   <script src="panel/assets/plugins/chartjs-bar-chart/Chart.min.js"></script>
        <script src="panel/assets/plugins/chartjs-bar-chart/chart.js"></script>
        <!-- pie chart -->
        <script src="panel/assets/plugins/pie_chart/chart.loader.js"></script>
        <script src="panel/assets/plugins/pie_chart/pie.active.js"></script>
 
 
        <!-- Main js -->
        <script src="panel/assets/js/main.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
       <script>
           @if(Session::has('message'))
           var type = "{{Session::get('alert-type','info')}}"
           switch(type){
               case 'info':
                   toastr.info("{{Session::get('message')}}");
                   break;

                case 'success':
                   toastr.success("{{Session::get('message')}}");
                   break;

                case 'warning':
                   toastr.warning("{{Session::get('message')}}");
                   break;

                case 'error':
                   toastr.error("{{Session::get('message')}}");
                   break;
           }

           @endif
       </script>
    
     


    </body>
</html>