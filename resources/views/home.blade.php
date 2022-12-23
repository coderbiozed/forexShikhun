@extends('layouts.app')

@section('content')
    <div class="container-fluid">
       <div class="row">
        <div class="col-12">
      
          <h2 class="text-center p-3 sec_heading animate-charcter c_f-family" > Welcome  Your  Forex Shikhun Dashboard</h2>
        </div>
       </div>
    </div>

    <div class="row">
      <div class="col-lg-9">
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
                  <p>Total Admin</p>
                </div>
                <div class="icon">
              <i class="nav-icon fas fa-user-plus"></i>
                </div>
                <a href="{{ route('users')}} " class="small-box-footer inset_shadow">More info <i class="fas fa-arrow-circle-right text-dark"></i></a>
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
                  <p>Total Admin</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-user-plus"></i>
                </div>
                <a href="{{ route('users')}} " class="small-box-footer inset_shadow">More info <i class="fas fa-arrow-circle-right text-dark"></i></a>
              </div>
            </div>
          </div>
      </div>
      <div class="col-lg-3 ">
          <div class="row">
            <div class="info-box mb-3 cust_shadow">
              <span class="info-box-icon bg-warning elevation-1 cust_shadow">
                    <i class="fas fa-users"></i>
              </span>
              <div class="info-box-content">
                  <?php
                  $allmember = DB::table('member')->count(); 
                  ?>
                  <span class="info-box-text">New Members 👩‍🦰👩‍🦰👩</span>
                  <span class="info-box-number">{{$allmember}}</span>
              </div>
            </div>
            <div class="info-box mb-3 cust_shadow">
                  <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
                  <div class="info-box-content">
                    <?php
                    $likes = DB::table('blog_member')->count(); 
                    ?>
                      <span class="info-box-text">Total Likes ❤ </span>
                      <span class="info-box-number">{{$likes}}</span>
                  </div>    
            </div>
            <div class="clearfix hidden-md-up"></div>
            <div class="info-box mb-3 cust_shadow">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                    <div class="info-box-content">
                            <span class="info-box-text">Course Sales</span>
                            <span class="info-box-number">0</span>
                    </div>
              </div>
          </div>
      </div>
    </div>
    {{-- ❤👍🧐 chip-card Start❤👍🧐 --}}
    <div class="chip-card">
      <div class="row">
          <div class="col-md-3">
            <div class="info-box mb-3 bg-transparent cust_shadow">       
                <span class="info-box-icon">
                  <i class="fas fa-tag text-red"></i>
                </span>                
                <div class="info-box-content">
                <span class="info-box-text"></span>
                <span class="info-box-number">00</span>
                </div>         
            </div>
          </div>
          <div class="col-md-3">
            <div class="info-box mb-3 bg-transparent cust_shadow">
                <span class="info-box-icon"><i class="fas fa-tag text-pink"></i></span>
                <div class="info-box-content">
                <span class="info-box-text">Inventory</span>
                <span class="info-box-number">00</span>
                </div>         
            </div>
          </div>
          <div class="col-md-3">
            <div class="info-box mb-3 bg-transparent cust_shadow">
              <span class="info-box-icon"><i class="far fa-heart text-red"></i></span>
              <div class="info-box-content">
              <span class="info-box-text">Mentions</span>
              <span class="info-box-number">00</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info-box mb-3 bg-transparent cust_shadow">
              <span class="info-box-icon"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
              <span class="info-box-text">Visitors</span>
              <span class="info-box-number">00</span>
              </div>
            </div>
          </div>
      </div>
    </div>
    {{-- ❤👍🧐 chip-card End❤👍🧐 --}}

    {{-- ❤🥰👇 Drop-Down-card Row Strat❤🥰👇 --}}
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Recently Purchased </h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0 inset_shadow">
            <ul class="products-list product-list-in-card pl-2 pr-2">
              <li class="item inset_shadow bg-transparent">
                <div class="product-img">
                  <img src="https://cdn.pixabay.com/photo/2022/08/17/15/45/agility-7392837__340.jpg" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info ">
                  <a href="javascript:void(0)" class="product-title">New Course
                    <span class="badge badge-warning float-right">$1800</span>
                  </a>
                    <span class="product-description">
                    Forex Primium
                    </span>
                </div>
              </li>
            
              <li class="item bg-transparent inset_shadow">
                <div class="product-img">
                  <img src="https://cdn.pixabay.com/photo/2020/12/08/20/37/hand-5815508_960_720.jpg" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">Copy Trade
                    <span class="badge badge-info float-right">$700</span>
                  </a>
                    <span class="product-description">
                    Top Forex Analisiest
                    </span>
                </div>
              </li>
              <li class="item bg-transparent inset_shadow">
                <div class="product-img">
                  <img src="https://cdn.pixabay.com/photo/2020/12/08/20/37/hand-5815508_960_720.jpg" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">Support
                    <span class="badge badge-info float-right">$700</span>
                  </a>
                    <span class="product-description">
                    Teligrum Primium
                    </span>
                </div>
              </li>
            </ul>
          </div>
          
          <div class="card-footer text-center">
            <a href="javascript:void(0)" class="uppercase">View All Products</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Most Active Members</h3>
            <div class="card-tools">
              @php  $allusers = DB::table('member')->count();  @endphp
              <span class="badge badge-danger">{{$allusers}}New Members</span>
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>   
          @php  $allusers = DB::table('member')->orderBy('id', 'desc')->paginate(4)  @endphp
                 
          <div class="card-body p-0">  
            <ul class="users-list clearfix">
              @foreach ($allusers as $allusers) 
              <li>
                <img src="{{ asset('images/alluser/' .json_decode($allusers->image)[0]) }}" width="70" height="70" alt="User Image">
                <a class="users-list-name" href="#">{{$allusers->name}}</a>
                <span class="users-list-date">Today</span>
                <span class="users-list-date">{{$allusers->user_title}}</span>
              </li>
              @endforeach  
            </ul>
          </div> 
                 
          <div class="card-footer text-center">
          <a href="{{ url('/allusers') }}">View All Users</a>
          </div>
        </div>
      </div>
    </div>  
 {{-- ❤🥰👇 Drop-Down-card Row End ❤🥰👇 --}}
@endsection
      
      
      
      
      