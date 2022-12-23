@extends('layouts.frontend')
@section('content')
<section class="sec_hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center hero_content">
                    <div class="d-flex flex-column">
                        <h1 class="hero_heading">
                            WELCOME <br>TO FOREX SHIKHUN
                        </h1>
                        <p class="hero_des">
                            Unlimited access to all courses and all 60+ instructors.
                        </p>
                        <P class="hero_des">
                            Learn with our expertise!
                        </P> 
                        <div>
                            <a href="#" class="cust_btn hero_btn">Request a demo</a>
                        </div>                     
                    </div>                  
                </div>
                <div class="col-lg-6 hero_media">
                    <div class="hero_main">
                        <img src="{{asset('assets/frontend')}}/images/homepage/illu-2-2x.png" alt="" class="hero_img">
                            <img src="{{asset('assets/frontend')}}/images/homepage/hero-shape-purple.png" alt="" class="hero_shape">                                         
                            <img src="{{asset('assets/frontend')}}/images/homepage/illu-1-2x.png" alt="" class="hero_img_1">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero_shapes">
            <img src="{{asset('assets/frontend')}}/images/homepage/hero-1-circle-2.png" alt="image" class="shape_1">
            <img src="{{asset('assets/frontend')}}/images/homepage/hero-1-circle.png" alt="image" class="shape_2">
            <img src="{{asset('assets/frontend')}}/images/homepage/hero-1-dot-2.png" alt="image" class="shape_3">
            <img src="{{asset('assets/frontend')}}/images/homepage/small-shape-1.png" alt="image" class="shape_4">
            <img src="{{asset('assets/frontend')}}/images/homepage/small-shape-2.png" alt="image" class="shape_5">
            <img src="{{asset('assets/frontend')}}/images/homepage/small-shape-3.png" alt="image" class="shape_6">
            <img src="{{asset('assets/frontend')}}/images/homepage/small-shape-4.png" alt="image" class="shape_7">
        </div>
    </section>
    <section class="sec_articles sec_default">
        <div class="container sec_main_cont">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="sec_heading"><span class="sec_hed_span">Latest published articles</span></h2>
                </div>
                     <!-- Blog Card Area -->
                    @foreach($blogs as $blog)
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="l_articles">
                            <div class="l_articles_img">
                                <a href="{{ URL::to ('blog/'.$blog->slug)}}"><img src="{{ asset('images/' . json_decode($blog->image)[0]) }}" alt=""></a>
                            </div>
                            <div class="l_articles_cont">
                                <a href="{{ URL::to ('blog/'.$blog->slug)}}"><h4 class="l_articles_cont_hed"> {!! Str::limit(strip_tags($blog->title), 30) !!}</h4></a>
                                <p class="l_articles_cont_des"> {!! Str::limit(strip_tags($blog->description), 50) !!}</p>
                                <hr class="articles_divider">  
                                <div class="l_articles_bottom_cont">
                                   {{-- <div class="bottom_cont_parts"><a href="#"><span class="far fa-heart c_pink"></span></a><span>9.5k</span></div> --}}
                                     <div class="bottom_cont_parts"><span class="far fa-eye c_blue"></span><span>0.0k</span></div> 
                                     {{--🥰🥰 Like view and count start 🥰🥰 --}}
                                @php $likes = DB::table('blog_member')->where('member_id', $blog->id)->count();@endphp
                                <div class="bottom_cont_parts"><a href="#"><span class="fa-solid fa-heart c_pink"></span></a><span>{{$likes}}</span></div>
                               
                                {{--👉👇 {{$blog->likedMembers->count()}} --}}
                                  {{--🥰🥰 Like view and count end 🥰🥰 --}}

                                    {{-- 🥰🥰share icon daynamic🥰🥰 --}}
                                    <div class="bottom_cont_parts">
                                        <a href="#collapseExample"
                                        onclick="replay(this)"
                                        class="share_blog"
                                        dataBlogId="{{ $blog->id }}"
                                        aria-expanded="false"
                                        aria-controls="collapseExample">
                                        <span class="fas fa-share c_violet"></span>                                
                                       </a><span>Share</span>
                                    </div>
                                    {{-- 🥰🥰share icon daynamic🥰🥰 --}}
                                    <div class="bottom_cont_parts"><span class="far fa-clock c_orange"></span><span>{{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans()  }}</span></div>                            
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- 🥰🥰share icon daynamic🥰🥰--}}
                    <div class="b_meta" style="display:none;">
                        <input type="hidden" id="blogId" name="blogId" value="{{isset($blog->id)}}">
                        <div class="bt_sha_tog_main shareDiv" style="position: relative;">
                            <span class="bt_sha_tog_co" style="display:none; position:absolute">
                                <div class="social d-flex" id="blog-social">
                                        {{-- Social Icon --}}
                                </div> 
                            </span>                    
                        </div>                     
                    </div>
                    {{-- 🥰🥰share icon daynamic🥰🥰--}}
                    <!-- View More Area -->
                <div class="col-12">
                    <div class="load_more_articles">
                        <a href="{{ route('blog')}}" class="cust_btn">
                            View More!
                        </a>
                    </div>
                </div>
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


    <section class="sec_courses sec_default">
        <div class="container sec_main_cont">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="sec_heading"><span class="sec_hed_span">Our Courses</span></h2>
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
                            <h4 class="courses_main_heading">{!! Str::limit(strip_tags($course->course_title), 30) !!}</h4>
                            <div class="courses_main_bottom_cont">
                                <div class="course_count">
                                    <i class="fas fa-book c_pg_book"></i>
                                    <?php
                                    $lessonall = DB::table('lessons')->Where('course_id',  $course->id)->count(); 
                                    ?>
                                    <span>{{ $lessonall}} Lessons</span>
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


    <section class="sec_forum sec_default">
        <div class="container sec_main_cont">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="sec_heading"><span class="sec_hed_span">Our Forum</span></h2>
                </div>
                <div class="col-lg-12 col-xl-8">
                    <div class="forum_thumb_inner">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="forum_thumb_heading"><span class="forum_blue_span">Latest</span> Activities</h3>
                                <p class="forum_thumb_des">Share Your Market Perspective With Other Fellow Traders!</p>
                            </div>
                            <div class="col-lg-6">
                                <div class="forum_thumb_main">
                                    <div class="forum_thumb">
                                        <div><a href="#"><p class="fp_heading">New to Trading and Ready to Learn</p></a></div>
                                        <div class="ft_tag"><span title="Beginner Questions" class="c_green">■</span></div>
                                    </div>
                                    <div class="forum_thumb align_c">
                                        <div><a href="#" class="forum_po"><span class="forum_po_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt=""></span><span>Shejan</span></a></div>
                                        <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                        <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                        <div><span class="far fa-clock ft_clock"> </span>3h</div>
                                    </div>
                                </div>
                                <hr class="ft_divider">
                            </div>
                            <div class="col-lg-6">
                                <div class="forum_thumb_main">
                                    <div class="forum_thumb">
                                        <div><a href="#"><p class="fp_heading">New to Trading and Ready to Learn</p></a></div>
                                        <div class="ft_tag"><span title="Trading Discussion" class="c_orange">■</span></div>
                                    </div>
                                    <div class="forum_thumb align_c">
                                        <div><a href="#" class="forum_po"><span class="forum_po_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt=""></span><span>Shejan</span></a></div>
                                        <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                        <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                        <div><span class="far fa-clock ft_clock"> </span>3h</div>
                                    </div>
                                </div>
                                <hr class="ft_divider">
                            </div>
                            <div class="col-lg-6">
                                <div class="forum_thumb_main">
                                    <div class="forum_thumb">
                                        <div><a href="#"><p class="fp_heading">New to Trading and Ready to Learn</p></a></div>
                                        <div class="ft_tag"><span title="Trading System" class="c_violet">■</span></div>
                                    </div>
                                    <div class="forum_thumb align_c">
                                        <div><a href="#" class="forum_po"><span class="forum_po_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt=""></span><span>Shejan</span></a></div>
                                        <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                        <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                        <div><span class="far fa-clock ft_clock"> </span>3h</div>
                                    </div>
                                </div>
                                <hr class="ft_divider">
                            </div>
                            <div class="col-lg-6">
                                <div class="forum_thumb_main">
                                    <div class="forum_thumb">
                                        <div><a href="#"><p class="fp_heading">New to Trading and Ready to Learn</p></a></div>
                                        <div class="ft_tag"><span title="Community Features" class="c_dark_cy">■</span></div>
                                    </div>
                                    <div class="forum_thumb align_c">
                                        <div><a href="#" class="forum_po"><span class="forum_po_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt=""></span><span>Shejan</span></a></div>
                                        <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                        <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                        <div><span class="far fa-clock ft_clock"> </span>3h</div>
                                    </div>
                                </div>
                                <hr class="ft_divider">
                            </div>
                            <div class="col-lg-6">
                                <div class="forum_thumb_main">
                                    <div class="forum_thumb">
                                        <div><a href="#"><p class="fp_heading">New to Trading and Ready to Learn</p></a></div>
                                        <div class="ft_tag"><span title="Broker Discussion" class="c_light_gray">■</span></div>
                                    </div>
                                    <div class="forum_thumb align_c">
                                        <div><a href="#" class="forum_po"><span class="forum_po_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt=""></span><span>Shejan</span></a></div>
                                        <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                        <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                        <div><span class="far fa-clock ft_clock"> </span>3h</div>
                                    </div>
                                </div>
                                <hr class="ft_divider">
                            </div>
                            <div class="col-lg-6">
                                <div class="forum_thumb_main">
                                    <div class="forum_thumb">
                                        <div><a href="#"><p class="fp_heading">New to Trading and Ready to Learn</p></a></div>
                                        <div class="ft_tag"><span title="Trading Tech and Tools" class="c_pink">■</span></div>
                                    </div>
                                    <div class="forum_thumb align_c">
                                        <div><a href="#" class="forum_po"><span class="forum_po_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt=""></span><span>Shejan</span></a></div>
                                        <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                        <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                        <div><span class="far fa-clock ft_clock"> </span>3h</div>
                                    </div>
                                </div>
                                <hr class="ft_divider">
                            </div>
                            <div class="col-lg-6">
                                <div class="forum_thumb_main">
                                    <div class="forum_thumb">
                                        <div><a href="#"><p class="fp_heading">New to Trading and Ready to Learn</p></a></div>
                                        <div class="ft_tag"><span title="Cryptocurrencies and Discussion" class="c_li">■</span></div>
                                    </div>
                                    <div class="forum_thumb align_c">
                                        <div><a href="#" class="forum_po"><span class="forum_po_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt=""></span><span>Shejan</span></a></div>
                                        <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                        <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                        <div><span class="far fa-clock ft_clock"> </span>3h</div>
                                    </div>
                                </div>
                                <hr class="ft_divider">
                            </div>
                            <div class="col-lg-6">
                                <div class="forum_thumb_main">
                                    <div class="forum_thumb">
                                        <div><a href="#"><p class="fp_heading">New to Trading and Ready to Learn</p></a></div>
                                        <div class="ft_tag"><span title="Commercial Content" class="c_re">■</span></div>
                                    </div>
                                    <div class="forum_thumb align_c">
                                        <div><a href="#" class="forum_po"><span class="forum_po_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt=""></span><span>Shejan</span></a></div>
                                        <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                        <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                        <div><span class="far fa-clock ft_clock"> </span>3h</div>
                                    </div>
                                </div>
                                <hr class="ft_divider">
                            </div>
                            <div class="col-12">
                                <a href="forum.html" class="cust_btn visit_forum">Visit Our Forums !</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-4" id="cal">
                    <div class="row">                     
                        <div class="col-12">
                            <div class="forum_thumb_inner">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="forum_thumb_heading"><span class="forum_blue_span">3/20</span>'s Calendar</h3>
                                    </div>
                                    <div class="col-12">
                                        <div>
                                            <div class="tradingview-widget-container">
                                                <div class="tradingview-widget-container__widget"></div>                                              
                                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
                                                    {
                                                        "colorTheme": "light",
                                                        "isTransparent": true,
                                                        "width": "100%",
                                                        "height": "100%",
                                                        "locale": "en",
                                                        "importanceFilter": "-1,0,1"                                                      
                                                    }
                                                </script>
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


    <section class="sec_videos sec_default">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="sec_heading"><span class="sec_hed_span">Get The Things With More Details !</span></h2>
                </div>
                @foreach($videos as $videos)
                <div class="col-lg-4 col-md-6">
                   
                    <div class="video_col">
                        <div class="video_iframe">
                            {!! ($videos->video) !!}
                        </div>
                        <div class="video_title">
                            <h4>
                                {!! Str::limit(strip_tags($videos->title), 40) !!}
                            </h4>
                        </div>
                    </div>                                                   
                </div>
                @endforeach    
           
           
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="video_col">
                        <div class="video_iframe">
                        
                        </div> 
                        <div class="video_title">
                            <h4>
                             
                            </h4>
                        </div>                   
                    </div>                  
                </div> --}}
                
                <div class="col-12">
                    <div class="load_more_videos">
                        <a href="{{route('video')}}" class="cust_btn">
                            View More!
                        </a>
                    </div>
                </div>
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


    <section class="sec_us sec_default">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="sec_heading"><span class="sec_hed_span">Why would you choose us ?</span></h2>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choose_us">
                        <div class="choose_top">
                            <div class="choose_top_inner">
                                <i class="fas fa-book c_green"></i>
                            </div>
                        </div>
                        <div class="choose_bottom">
                            <?php
                            $courseall = DB::table('course')->count(); 
                            ?>
                            <h4><span class="c_green">{{$courseall}} </span> Online Courses</h4>
                            <p>{{$about->sec_card_desc_one}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choose_us">
                        <div class="choose_top">
                            <div class="choose_top_inner">
                                <i class="far fa-user c_blue"></i>
                            </div>
                        </div>
                        <div class="choose_bottom">
                            <h4><span class="c_blue">Expert</span> Instructors</h4>
                            <p>{{$about->sec_card_desc_two}}!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choose_us">
                        <div class="choose_top">
                            <div class="choose_top_inner">
                                <i class="far fa-clock c_orange"></i>
                            </div>
                        </div>
                        <div class="choose_bottom">
                            <h4><span class="c_orange">Lifetime</span> Access</h4>
                            <p>{{$about->sec_card_desc_three}}!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choose_us">
                        <div class="choose_top">
                            <div class="choose_top_inner">
                                <i class="fas fa-headset c_violet"></i>
                            </div>
                        </div>
                        <div class="choose_bottom">
                            <h4><span class="c_violet">Friendly</span> Support</h4>
                            <p>{{$about->sec_card_desc_four}}!</p>
                        </div>
                    </div>
                </div>
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


    <section class="sec_reviews sec_default">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="sec_heading"><span class="sec_hed_span">Let's See What Our Students Says !</span></h2>
                </div>
                <div class="col-12">
                    <div class="owl-carousel owl-theme">
                        @foreach($reviews as $reviews)
                        <div class="item">
                            <a href="{{route('course-rating') }}">
                                <div class="review_main">
                                    <div class="review_top">
                                        <div class="review_quote">
                                            <p class="review_des"><span class="fas fa-quote-left review_quote_i"></span>{!! Str::limit(strip_tags($reviews->description), 200) !!}</p>
                                        </div>
                                        <div class="review_rating_social">
                                            <div class="review_rating">
                                                <div class="ri_sha">
                                                    <span class="far fa-star c_dark_cy"></span>
                                                    <span>{{ $reviews->rating}}</span>
                                                </div>
                                            </div>
                                            <div class="review_owner_social">
                                                <div class="ri_sha">
                                                    <a href="#" class="review_owner_li"><i class="fab fa-linkedin-in"></i></a>
                                                    <a href="#" class="review_owner_tw"><i class="fab fa-twitter"></i></a>
                                                    <a href="#" class="review_owner_ig"><i class="fab fa-instagram"></i></a>
                                                    <a href="#" class="review_owner_fb"><i class="fab fa-facebook-f"></i></a>
                                                </div>                                          
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review_bottom">
                                        <div class="review_owner_det">
                                            <div class="re_ow_img_inn">
                                                <div class="review_owner_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt=""></div>
                                            </div>                                       
                                            <div class="review_owner_name"><a href="#">{{ $reviews->author}}</a></div>
                                        </div>
                                        <div class="review_date">
                                            <div>03/17/2022</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        
                        {{-- <div class="item">
                            <div class="review_main">
                                <div class="review_top">
                                    <div class="review_quote">
                                        <p class="review_des"><span class="fas fa-quote-left review_quote_i"></span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero iste tempore modi, quibusdam debitis earum esse perferendis voluptatibus voluptate qui.</p>
                                    </div>
                                    <div class="review_rating_social">
                                        <div class="review_rating">
                                            <div class="ri_sha">
                                                <span class="far fa-star c_dark_cy"></span>
                                                <span>4.5</span>
                                            </div>
                                        </div>
                                        <div class="review_owner_social">
                                            <div class="ri_sha">
                                                <a href="#" class="review_owner_li"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#" class="review_owner_tw"><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="review_owner_ig"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="review_owner_fb"><i class="fab fa-facebook-f"></i></a>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="review_bottom">
                                    <div class="review_owner_det">
                                        <div class="review_owner_det">
                                            <div class="re_ow_img_inn">
                                                <div class="review_owner_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt=""></div>
                                            </div>                                       
                                            <div class="review_owner_name"><a href="#">Mahmud Shejan</a></div>
                                        </div>                                       
                                    </div>
                                    <div class="review_date">
                                        <div>03/17/2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="review_main">
                                <div class="review_top">
                                    <div class="review_quote">
                                        <p class="review_des"><span class="fas fa-quote-left review_quote_i"></span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero iste tempore modi, quibusdam debitis earum esse perferendis voluptatibus voluptate qui.</p>
                                    </div>
                                    <div class="review_rating_social">
                                        <div class="review_rating">
                                            <div class="ri_sha">
                                                <span class="far fa-star c_dark_cy"></span>
                                                <span>4.5</span>
                                            </div>
                                        </div>
                                        <div class="review_owner_social">
                                            <div class="ri_sha">
                                                <a href="#" class="review_owner_li"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#" class="review_owner_tw"><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="review_owner_ig"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="review_owner_fb"><i class="fab fa-facebook-f"></i></a>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="review_bottom">
                                    <div class="review_owner_det">
                                        <div class="review_owner_det">
                                            <div class="re_ow_img_inn">
                                                <div class="review_owner_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt=""></div>
                                            </div>                                       
                                            <div class="review_owner_name"><a href="#">Mahmud Shejan</a></div>
                                        </div>                                        
                                    </div>
                                    <div class="review_date">
                                        <div>03/17/2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="review_main">
                                <div class="review_top">
                                    <div class="review_quote">
                                        <p class="review_des"><span class="fas fa-quote-left review_quote_i"></span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero iste tempore modi, quibusdam debitis earum esse perferendis voluptatibus voluptate qui.</p>
                                    </div>
                                    <div class="review_rating_social">
                                        <div class="review_rating">
                                            <div class="ri_sha">
                                                <span class="far fa-star c_dark_cy"></span>
                                                <span>4.5</span>
                                            </div>
                                        </div>
                                        <div class="review_owner_social">
                                            <div class="ri_sha">
                                                <a href="#" class="review_owner_li"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#" class="review_owner_tw"><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="review_owner_ig"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="review_owner_fb"><i class="fab fa-facebook-f"></i></a>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="review_bottom">
                                    <div class="review_owner_det">
                                        <div class="review_owner_det">
                                            <div class="re_ow_img_inn">
                                                <div class="review_owner_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt=""></div>
                                            </div>                                       
                                            <div class="review_owner_name"><a href="#">Mahmud Shejan</a></div>
                                        </div>
                                    </div>
                                    <div class="review_date">
                                        <div>03/17/2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="review_main">
                                <div class="review_top">
                                    <div class="review_quote">
                                        <p class="review_des"><span class="fas fa-quote-left review_quote_i"></span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero iste tempore modi, quibusdam debitis earum esse perferendis voluptatibus voluptate qui.</p>
                                    </div>
                                    <div class="review_rating_social">
                                        <div class="review_rating">
                                            <div class="ri_sha">
                                                <span class="far fa-star c_dark_cy"></span>
                                                <span>4.5</span>
                                            </div>
                                        </div>
                                        <div class="review_owner_social">
                                            <div class="ri_sha">
                                                <a href="#" class="review_owner_li"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#" class="review_owner_tw"><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="review_owner_ig"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="review_owner_fb"><i class="fab fa-facebook-f"></i></a>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="review_bottom">
                                    <div class="review_owner_det">
                                        <div class="review_owner_det">
                                            <div class="re_ow_img_inn">
                                                <div class="review_owner_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt=""></div>
                                            </div>                                       
                                            <div class="review_owner_name"><a href="#">Mahmud Shejan</a></div>
                                        </div>
                                    </div>
                                    <div class="review_date">
                                        <div>03/17/2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="review_main">
                                <div class="review_top">
                                    <div class="review_quote">
                                        <p class="review_des"><span class="fas fa-quote-left review_quote_i"></span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero iste tempore modi, quibusdam debitis earum esse perferendis voluptatibus voluptate qui.</p>
                                    </div>
                                    <div class="review_rating_social">
                                        <div class="review_rating">
                                            <div class="ri_sha">
                                                <span class="far fa-star c_dark_cy"></span>
                                                <span>4.5</span>
                                            </div>
                                        </div>
                                        <div class="review_owner_social">
                                            <div class="ri_sha">
                                                <a href="#" class="review_owner_li"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#" class="review_owner_tw"><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="review_owner_ig"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="review_owner_fb"><i class="fab fa-facebook-f"></i></a>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="review_bottom">
                                    <div class="review_owner_det">
                                        <div class="review_owner_det">
                                            <div class="re_ow_img_inn">
                                                <div class="review_owner_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt=""></div>
                                            </div>                                       
                                            <div class="review_owner_name"><a href="#">Mahmud Shejan</a></div>
                                        </div>
                                    </div>
                                    <div class="review_date">
                                        <div>03/17/2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="item">
                            <div class="review_main">
                                <div class="review_top">
                                    <div class="review_quote">
                                        <p class="review_des"><span class="fas fa-quote-left review_quote_i"></span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero iste tempore modi, quibusdam debitis earum esse perferendis voluptatibus voluptate qui.</p>
                                    </div>
                                    <div class="review_rating_social">
                                        <div class="review_rating">
                                            <div class="ri_sha">
                                                <span class="far fa-star c_dark_cy"></span>
                                                <span>4.5</span>
                                            </div>
                                        </div>
                                        <div class="review_owner_social">
                                            <div class="ri_sha">
                                                <a href="#" class="review_owner_li"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#" class="review_owner_tw"><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="review_owner_ig"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="review_owner_fb"><i class="fab fa-facebook-f"></i></a>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="review_bottom">
                                    <div class="review_owner_det">
                                        <div class="review_owner_det">
                                            <div class="re_ow_img_inn">
                                                <div class="review_owner_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt=""></div>
                                            </div>                                       
                                            <div class="review_owner_name"><a href="#">Mahmud Shejan</a></div>
                                        </div>
                                    </div>
                                    <div class="review_date">
                                        <div>03/17/2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="review_main">
                                <div class="review_top">
                                    <div class="review_quote">
                                        <p class="review_des"><span class="fas fa-quote-left review_quote_i"></span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero iste tempore modi, quibusdam debitis earum esse perferendis voluptatibus voluptate qui.</p>
                                    </div>
                                    <div class="review_rating_social">
                                        <div class="review_rating">
                                            <div class="ri_sha">
                                                <span class="far fa-star c_dark_cy"></span>
                                                <span>4.5</span>
                                            </div>
                                        </div>
                                        <div class="review_owner_social">
                                            <div class="ri_sha">
                                                <a href="#" class="review_owner_li"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#" class="review_owner_tw"><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="review_owner_ig"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="review_owner_fb"><i class="fab fa-facebook-f"></i></a>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="review_bottom">
                                    <div class="review_owner_det">
                                        <div class="review_owner_det">
                                            <div class="re_ow_img_inn">
                                                <div class="review_owner_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt=""></div>
                                            </div>                                       
                                            <div class="review_owner_name"><a href="#">Mahmud Shejan</a></div>
                                        </div>
                                    </div>
                                    <div class="review_date">
                                        <div>03/17/2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="review_main">
                                <div class="review_top">
                                    <div class="review_quote">
                                        <p class="review_des"><span class="fas fa-quote-left review_quote_i"></span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero iste tempore modi, quibusdam debitis earum esse perferendis voluptatibus voluptate qui.</p>
                                    </div>
                                    <div class="review_rating_social">
                                        <div class="review_rating">
                                            <div class="ri_sha">
                                                <span class="far fa-star c_dark_cy"></span>
                                                <span>4.5</span>
                                            </div>
                                        </div>
                                        <div class="review_owner_social">
                                            <div class="ri_sha">
                                                <a href="#" class="review_owner_li"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#" class="review_owner_tw"><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="review_owner_ig"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="review_owner_fb"><i class="fab fa-facebook-f"></i></a>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="review_bottom">
                                    <div class="review_owner_det">
                                        <div class="review_owner_det">
                                            <div class="re_ow_img_inn">
                                                <div class="review_owner_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt=""></div>
                                            </div>                                       
                                            <div class="review_owner_name"><a href="#">Mahmud Shejan</a></div>
                                        </div>
                                    </div>
                                    <div class="review_date">
                                        <div>03/17/2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>                --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="article_shapes">
            
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-2.png" alt="image" class="art_shp_2">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-3.png" alt="image" class="art_shp_3">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-2.png" alt="image" class="art_shp_7">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-3.png" alt="image" class="art_shp_8">
        </div>
    </section>
    <script type="text/javascript">
        function replay(caller){
            document.getElementById('blogId').value=$(caller).attr('dataBlogId');
                $('.shareDiv').insertAfter($(caller));
                $('.shareDiv').show();
        }
    </script>
    @endsection