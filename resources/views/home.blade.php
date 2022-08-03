@extends('layouts.app')

@section('content')
    <div class="container-fluid">
       <div class="row">
        <div class="col-12">
         {{-- <h1 class="waviy sec_heading">
          <span style="--i:1"> W</span>
          <span style="--i:2"> e</span>
          <span style="--i:3"> l</span>
          <span style="--i:4"> c</span>
          <span style="--i:5"> o</span>
          <span style="--i:6"> m</span>
          <span style="--i:7"> -</span>
          <span style="--i:8"> Y</span>
          <span style="--i:9"> o</span>
          <span style="--i:10"> u</span>
          <span style="--i:11"> r</span>
          <span style="--i:12"> -</span>
          <span style="--i:13"> F</span>
          <span style="--i:14"> o</span>
          <span style="--i:15"> r</span>
          <span style="--i:16"> x</span>
          <span style="--i:17"> -</span>
          <span style="--i:18"> S</span>
          <span style="--i:19"> h</span>
          <span style="--i:20"> i</span>
          <span style="--i:21"> k</span>
          <span style="--i:22"> h</span>
          <span style="--i:23"> u</span>
          <span style="--i:24"> n</span>
          <span style="--i:25"> -</span>
          <span style="--i:26"> A</span>
          <span style="--i:27"> d</span>
          <span style="--i:28"> m</span>
          <span style="--i:29"> i</span>
          <span style="--i:30"> n</span> --}}
        

  
        
          <h1 class="text-center p-3 sec_heading animate-charcter c_f-family" ><span class="c_green"> W</span>elcome <span class="c_pink"> Y</span>our <span class="c_blue"> F</span>orex <span class="c_orange">S</span>hikhun <span class="c_violet"> D</span>ashboard</h1>
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
                <i class="fa fa-graduation-cap"></i>
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
                <i class="fa fa-book"></i>
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
          {{-- <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box cust_shadow">
              <div class="inner">
                <?php
                $videosall = DB::table('videos')->count(); 
                ?>
                <h3 class="c_orange">{{ $videosall }}</h3>

                <p>Total Videos</p>
              </div>
              <div class="icon">
                <i class="fa fa-video"></i>
              </div>
              <a href="{{ route('videos.index') }}" class="small-box-footer inset_shadow">More info <i class="fas fa-arrow-circle-right c_orange"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box cust_shadow">
              <div class="inner">
                <?php
                $videosall = DB::table('videos')->count(); 
                ?>
                <h3 class="c_orange">{{ $videosall }}</h3>

                <p>Total Videos</p>
              </div>
              <div class="icon">
                <i class="fa fa-video"></i>
              </div>
              <a href="{{ route('videos.index') }}" class="small-box-footer inset_shadow">More info <i class="fas fa-arrow-circle-right c_orange"></i></a>
            </div>
          </div> --}}
    </div>
 </div>


@endsection
