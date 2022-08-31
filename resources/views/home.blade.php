@extends('layouts.app')

@section('content')
    <div class="container-fluid">
       <div class="row">
        <div class="col-12">
      
          <h2 class="text-center p-3 sec_heading animate-charcter c_f-family" > Welcome  Your  Forex Shikhun Dashboard</h2>
        </div>
       </div>
    </div>

 <div class="container-fluid">
    <div class="row">
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box cust_shadow">
              <div class="inner">
                <?php
                $blogall = DB::table('table_blog')->count(); 
                ?>
                <h3 class="c_violet">{{ $blogall}}</h3>

                <p>Total Blogs</p>
              </div>
              <div class="icon">
                <i class="fa fa-blog"></i>
              </div>
              <a href="{{ route('blogs.index') }}" class="small-box-footer inset_shadow">More info <i class="fas fa-arrow-circle-right c_violet"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box cust_shadow">
              <div class="inner">
                <?php
                $courseall = DB::table('course')->count(); 
                ?>
                <h3 class="c_green">{{ $courseall}}</h3>

                <p>Total Courses</p>
              </div>
              <div class="icon">
                <i class="fa fa-book-open"></i>
              </div>
              <a href="{{ route('courses.index') }}" class="small-box-footer inset_shadow">More info <i class="fas fa-arrow-circle-right c_green"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box cust_shadow">
              <div class="inner">
                <?php
                $lessonsall = DB::table('lessons')->count(); 
                ?>
                <h3 class="c_orange">{{ $lessonsall }}</h3>

                <p>Total Lessons</p>
              </div>
              <div class="icon">
                <i class="nav-icon fa fa-chalkboard "></i>
              </div>
              <a href="{{ route('Lessons.index') }}" class="small-box-footer inset_shadow">More info <i class="fas fa-arrow-circle-right c_orange"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box cust_shadow">
              <div class="inner">
                <?php
                $videosall = DB::table('videos')->count(); 
                ?>
                <h3 class="c_dark_cy">{{ $videosall }}</h3>

                <p>Total Videos</p>
              </div>
              <div class="icon">
                <i class="fa fa-video"></i>
              </div>
              <a href="{{ route('videos.index') }}" class="small-box-footer inset_shadow">More info <i class="fas fa-arrow-circle-right c_dark_cy"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box cust_shadow">
              <div class="inner">
                <?php
                $subscriberall = DB::table('subscribe')->count(); 
                ?>
                <h3 class="c_de_re">{{ $subscriberall}}</h3>

                <p>Total Subscriber</p>
              </div>
              <div class="icon">
                <i class="fa fa-bell"></i>
              </div>
              <a href="{{ route('subscribes.index') }}" class="small-box-footer inset_shadow">More info <i class="fas fa-arrow-circle-right c_de_re"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box cust_shadow">
              <div class="inner">
                <?php
                $quoteall = DB::table('quote')->count(); 
                ?>
                <h3 class="c_pink">{{ $quoteall }}</h3>

                <p>Total Quotes</p>
              </div>
              <div class="icon">
             <i class="fa fa-comment"></i>
              </div>
              <a href="{{ route('quotes.index') }}" class="small-box-footer inset_shadow">More info <i class="fas fa-arrow-circle-right c_pink"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box cust_shadow">
              <div class="inner">
                <?php
                $user = DB::table('users')->count(); 
                ?>
                <h3 class="text-dark">{{ $user }}</h3>

                <p>Total Registered Users</p>
              </div>
              <div class="icon">
             <i class="nav-icon fas fa-user-plus"></i>
              </div>
              <a href="{{ route('users')}} " class="small-box-footer inset_shadow">More info <i class="fas fa-arrow-circle-right text-dark"></i></a>
            </div>
          </div>
    </div>
 </div>
 


@endsection
