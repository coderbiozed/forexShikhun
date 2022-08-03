@extends('layouts.frontend')
@section('content')
    <section class="sec_courses sec_default spt_cust">
        <div class="container sec_main_cont">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="sec_heading"><span class="sec_hed_span">Our Courses</span></h1>
                </div>
            @foreach($course as $course)
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="courses_main">
                        <div class="courses_main_img">
                            <a href="{{ URL::to ('course/'.$course->course_slug)}}"><img src="{{ asset('images/courses/' . json_decode($course->image)[0]) }}" alt=""></a>
                        </div>
                        <div class="courses_main_cont">
                            <div class="courses_main_top_cont">
                                <div>
                                    <a href="#" class="courses_main_top_pub">
                                        <img src="{{asset('assets/frontend')}}/images/homepage/fav.ico" alt="" class="courses_main_top_pub_img">
                                        <span>Forex Shikhun</span>
                                    </a>
                                </div>
                                <div class="course_rating">
                                    <i class="far fa-star c_dark_cy"></i>
                                    <span>{{ $course->rating}}</span>
                                </div>
                            </div>                    
                            <h4 class="courses_main_heading">{{$course->course_title}}</h4>
                            <div class="courses_main_bottom_cont">
                                <div class="course_count">
                                    <i class="fas fa-book c_pg_book"></i>
                                    <?php
                                    $lessonall = DB::table('lessons')->Where('course_id',  $course->id)->count(); 
                                    ?>
                                    <span>{{$lessonall}}</span>
                                </div>
                                <div class="course_det">
                                    <a href="{{ URL::to ('course/'.$course->course_slug)}}" class="course_det_btn">Details <span class="arrow_1"><i class="fas fa-arrow-right"></i></span><span class="arrow_2"><i class="fas fa-arrow-right"></i></span></a>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="article_shapes">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-1.png" alt="image" class="art_shp_1">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-2.png" alt="image" class="art_shp_2">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-3.png" alt="image" class="art_shp_3">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-4.png" alt="image" class="art_shp_4">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-5.png" alt="image" class="art_shp_5">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-6.png" alt="image" class="art_shp_6">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-2.png" alt="image" class="art_shp_7">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-3.png" alt="image" class="art_shp_8">
        </div>
    </section>
@endsection
    
