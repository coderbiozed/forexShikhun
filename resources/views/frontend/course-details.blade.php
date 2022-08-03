

@extends('layouts.frontend')
@section('content')
<?php
$currentURL = request()->path();
$routeName = \Request::route()->getName();
if ($routeName == "course-details") {
    $course_slug = str_replace('course/', '', $currentURL);
    $course = DB::table('course')->Where('course_slug',  $course_slug)->first();
    $image = asset('images/' . json_decode($course->image)[0]);
}

    $lessonall = DB::table('lessons')->Where('course_id',  $course->id)->count(); 
    
?>
    <section class="c_det_hero sec_default spt_cust">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="c_det_hero_inner">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="cou_det_her_cont">
                                    <div class="cou_det_her_img">
                                        <img src="{{ asset('images/courses/' . json_decode($course->image)[0]) }}" alt="">
                                    </div>
                                    <div class="cou_det_her_text">
                                        <h2 class="cou_det_her_head">{{strip_tags ($course->course_title)}}</h2>
                                        <div class="cou_meta_det">                                  
                                            <div class="c_count">Lessons - <span class="c_blue">{{  $lessonall  }}</span></div>
                                            <div class="course_rating">
                                                <i class="far fa-star c_dark_cy"></i>
                                                <span>{{ $course->rating}}</span>
                                            </div>
                                        </div>
                                        <div class="course_des">
                                            <p>{{strip_tags ($course->course_des)}}</p>                        
                                        </div>                                                              
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 c_det_art_col">
                                <div class="cou_det_her_cont">
                                    <div>
                                        <h2 class="cou_det_her_head">Recent Articles</h2>
                                    </div>                                   
                                    <div class="c_det_rec_ar">
                                        @foreach($blogs as $blog)
                                        <div class="re_art">
                                            <div class="re_art_img">
                                                <img src="{{ asset('images/' . json_decode($blog->image)[0]) }}" alt="">
                                            </div>
                                            <div class="re_ar_title">
                                                <a href="{{ URL::to ('blog/'.$blog->slug)}}"><p>{!! Str::limit(strip_tags($blog->title), 50) !!}</p></a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>                   
                            </div>
                            <div class="col-lg-12">
                                <div class="c_bt_des_main">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="c_bt_des">
                                                <h4>Who is this course for ?</h4>                                               
                                                        {!! $course->who_learn !!}                                                                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="c_bt_des checkin">
                                                <h4>What you will learn ?</h4>
                                                {!! $course->what_learn !!}
                                               
                                                                                                                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="cou_det_bt_navs">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5 class="c_det_sh_title">Share :</h5>
                                            <div class="c_det_share">
                                                <div class="cust_btn"><a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin-in"></i></a></div>
                                                <div class="cust_btn"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></div> 
                                                <div class="cust_btn"><a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a></div> 
                                                <div class="cust_btn"><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></div>
                                                <div class="cust_btn"><a href="https://www.reddit.com/"><i class="fab fa-reddit-alien"></i></a></div>                                           
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="c_nav_title">Course List :</h5>
                                            <div class="c_navs">    
                                                    @if(!empty($previous))
                                                <a href="{{ URL::to ('course/'.$previous)}}" id="p_n_prev" class="cust_btn">Prev</a>
                                                    @endif                               
                                                    @if(!empty($next))
                                                <a href="{{ URL::to ('course/'.$next)}}" id="p_n_next" class="cust_btn">Next</a>
                                                    @endif                     
                                            </div>
                                        </div>                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       {{-- <div class="article_shapes">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-1.png" alt="image" class="art_shp_1">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-2.png" alt="image" class="art_shp_2">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-3.png" alt="image" class="art_shp_3">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-4.png" alt="image" class="art_shp_4">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-5.png" alt="image" class="art_shp_5">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-6.png" alt="image" class="art_shp_6">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-2.png" alt="image" class="art_shp_7">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-3.png" alt="image" class="art_shp_8">
        </div>  --}}
    </section>

    
    <section class="course_menu sec_default">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-3 c_side_col">
                    <div class="c_menu_sidebar">
                        <div class="c_menu_header">
                            <h4>{{strip_tags ($course->course_title)}}</h4>
                        </div>
                        <div class="nav flex-column nav-pills c_menu" id="v-pills-tab" role="tablist" aria-orientation="vertical">       
                            @foreach($lessons as $lesson)                
                            <button class="nav-link {{ $loop->first ?  'active' : '' }} c_menu_item" id="tab_1-tab{{$lesson->id}}" data-bs-toggle="pill" data-bs-target="#tab_1{{$lesson->id}}" type="button" role="tab" aria-controls="tab_1" aria-selected="true">
                                <span class="c_menu_icon"><i class="fas fa-chevron-right c_blue"></i></span>
                             <span>{{ $lesson->title}}</span>                               
                            </button>
                            @endforeach
                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="c_cont_main">
                        <div class="c_cont_sm_menu">
                            <div>
                                <h3 class="m-0">Course menu</h3>
                            </div>
                            <button class="oc_btn" type="button" onclick="openNav()">                              
                                <div>
                                    <i class="fas fa-ellipsis-v"></i>
                                </div>
                            </button>                           
                        </div>
                        <div id="mySidenav" class="sidenav">
                            <div class="c_co_sm_side">
                                <h3 class="m-0">Course menu</h3>
                                <a href="javascript:void(0)" class="close_btn" onclick="closeNav()"><i class="fas fa-times"></i></a>                          
                            </div>                           
                            <div class="nav flex-column nav-pills c_menu" id="v-pills-tab" role="tablist" aria-orientation="vertical">     
                                @foreach($lessons as $lesson)               
                                <button class="nav-link  c_menu_item" id="tab_1-tab{{$lesson->id}}" data-bs-toggle="pill" data-bs-target="#tab_1{{$lesson->id}}" type="button" role="tab" aria-controls="tab_1{{$lesson->id}}" aria-selected="true">
                                    <span class="c_menu_icon"><i class="fas fa-chevron-right c_blue"></i></span>
                                    <span>{{ $lesson->title}}</span>                               
                                </button>
                                @endforeach                
                            </div>
                        </div>
                                                                
                        <div class="tab-content loop_main c_content" id="v-pills-tabContent">
                            @foreach($lessons as $lesson)   
                            <div class="tab-pane fade show {{ $loop->first ?  'active' : '' }} loop_item" id="tab_1{{$lesson->id}}" role="tabpanel" aria-labelledby="tab_1-tab{{$lesson->id}}">
                                <div class="c_count_main">
                                    <div class="c_count">Lesson - <span class="c_blue">{{ $lesson->lesson_no }}</span></div>
                                    <span class="c_blue">╺ ╺ &nbsp;</span>
                                    <div class="c_count">Lessons - <span class="c_blue">{{ $lessonall}}</span></div>
                                </div>                               
                                <div class="c_cont_top">                                        
                                    <h1 class="c_cont_heading">{{ $lesson->title}}</h1>                                 
                                    <p class="c_cont_path"><a href="{{ URL::to ('course/'.$course->course_slug)}}">{{ $course->course_title }}</a> <span class="c_light_gray">/</span> <a href="#" class="active_title">{{ $lesson->title}}</a></p>
                                    <p class="c_cont_top_des">{!! $lesson->short_des !!} </p>                                    
                                </div>
                                <hr class="c_divider">                               
                               <div class="less_description">
                                    <p class="c_cont_p">
                                        {!! $lesson->description !!}
                                    </p>                                
                               </div>                                                                                                                               
                            </div>
                            @endforeach
                        </div>
                        <hr class="c_divider">
                        <div class="c_content_navs">
                            <a id="prev" class="cust_btn">Prev</a>
                            <a href="" class="cust_btn">
                                <i class="far fa-star c_dark_cy"></i>
                                <span>4.5</span>
                            </a>
                            <a id="next" class="cust_btn">Next</a>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
        <!-- <div class="article_shapes">
            <img src="{{asset('assets/site')}}/images/homepage/de-shape-1.png" alt="image" class="art_shp_1">
            <img src="{{asset('assets/site')}}/images/homepage/de-shape-2.png" alt="image" class="art_shp_2">
            <img src="{{asset('assets/site')}}/images/homepage/de-shape-3.png" alt="image" class="art_shp_3">
            <img src="{{asset('assets/site')}}/images/homepage/de-shape-4.png" alt="image" class="art_shp_4">
            <img src="{{asset('assets/site')}}/images/homepage/de-shape-5.png" alt="image" class="art_shp_5">
            <img src="{{asset('assets/site')}}/images/homepage/de-shape-6.png" alt="image" class="art_shp_6">
            <img src="{{asset('assets/site')}}/images/homepage/de-shape-2.png" alt="image" class="art_shp_7">
            <img src="{{asset('assets/site')}}/images/homepage/de-shape-3.png" alt="image" class="art_shp_8">
        </div> -->
    </section>
 @endsection