
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('assets/frontend')}}/images/img/fav/Forex-shikhun-fav.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/fontawesome.min.css">   
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/owl.theme.green.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css">
    {{-- <!-- Quil editor -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"> --}}
   
        
        
     
    <title>Forex Shikhun - Learn with our expertise</title>
     <style>
    </style>
</head>

<body>
    <nav class="nav_cust">
        <div class="container">
            <div class="main_nav">
                <a class="navbar_brand" href="{{route('index')}}"><img src="{{asset('assets/frontend')}}/images/homepage/logo-2.png" alt=""></a>
                <div id="mainListDiv" class="main_list">
                    <ul class="navlinks">
                        <li class="nav_item"><a href="{{route('index')}}" class="nav_link {{ request()-> is ('/')  ? 'active':'' }}">Home</a></li>
                        <li class="nav_item"><a href="{{route('course')}}" class="nav_link {{ request()-> is ('course')  ? 'active':'' }}">Courses</a></li>
                        <li class="nav_item"><a href="{{route('video')}}" class="nav_link {{ request()-> is ('video')  ? 'active':'' }}">Videos</a></li>
                        <li class="nav_item"><a href="{{route('blog')}}" class="nav_link {{ request()-> is ('blog')  ? 'active':'' }}">Blogs</a></li>
                        <li class="nav_item"><a href="{{route('forum')}}" class="nav_link {{ request()-> is ('forum')  ? 'active':'' }}">Forum</a></li> 
                        <?php if (isset((Auth::guard('member'))->user()->name)) {?>
                            <li class="nav_item">
                                <a href="{{route('member-profile')}}">
                                <div class="nav_sign_us rounded d-flex">
                                    <!-- <div class="auth-img">
                                        <span class="nav_sign_us_in"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"> </span>
                                    </div> -->

                                    <!-- 👀23-9- Here I did some code 👀 -->
                                    <a href="{{url('/member-profile')}}">
                                        <div class="auth-name  nav-link dropdown-toggle" tada-toggle="dropdown">
                                        {{ Auth::guard('member')->user()->name ?? ''}}
                                       </div>
                                    </a>
                                </div>
                                </a>
                               
                            </li>  
                            {{-- <li>
                                <form action="">
                                    @csrf
                                    <span class="fas fa-sign-out-alt "></span><span class="u_p"> <a href="{{ url('member-logout')}}">
                                        Logout
                                    </a> </span>
                               </form>
                            </li> --}}
                         <?php } else {?>
                        
                         <li class="nav_item"><a href="{{ url('member/login') }}" class="nav_link">Login</a></li> 
                           
                         <li class="nav_item"><a href="{{route('signup')}}">Sign Up</a></li>    
                        <?php } ?>       
               
                    </ul>
                </div>
                <span class="navTrigger">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </div>        
        </div>
    </nav>
    <div class="message">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                                @include('flash::message')
                    </div>
                </div>
            </div>
        </section>
    </div>
