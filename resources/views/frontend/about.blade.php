@extends('layouts.frontend')


@section('content')
    <section class="sec_about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_img">
                        <img src="{{asset('assets/frontend')}}/images/homepage/ab_1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 d-flex">
                    <div class="about_content">
                        <h1 class="ab_c_title">{{$about->hero_title}}</h1>
                        <p class="ab_c_des">{{$about->hero_des}}</p>
                        <p class="ab_c_des">{{$about->hero_des_small}}</p>
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
            <img src="{{asset('assets/frontend')}}/images/homepage/small-shape-4.png" alt="image" class="shape_7 sh_7">
        </div>
    </section>



    <section class="as_sec_us">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="ab_exp">
                        <div class="exp_ic c_blue"><span class="far fa-smile-beam"></span> </div>
                        <div class="exp_tx">We have almost <br> <span class="c_blue">{{$about->round_first}}+</span> years Experience</div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="ab_exp">
                        <div class="exp_ic c_orange"><span class="far fa-smile-beam"></span> </div>
                        <div class="exp_tx">We have almost <br> <span class="c_orange">{{$about->round_second}}+</span> success stories</div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="ab_exp">
                        <div class="exp_ic c_green"><span class="far fa-smile-beam"></span> </div>
                        <div class="exp_tx">We have almost <br> <span class="c_green">{{$about->round_third}}+</span>registered users</div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="sec_us as_sec_us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="sec_heading"><span class="sec_hed_span">Why would you choose us ?</span></h1>
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
                            <h4><span class="c_green">{{$courseall }}</span> Online Courses</h4>
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
                            <p>{{$about->sec_card_desc_four}}</p>
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


    <section class="sec_about sa_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex order-2 order-lg-1">
                    <div class="about_content">
                        <h1 class="ab_c_title">{{$about->sec_title}}</h1>
                        <p class="ab_c_des">{{$about->sec_des}}</p>
                        <p class="ab_c_des">{{$about->sec_des_small}}.</p>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="about_img ai_1">
                        <img src="{{asset('assets/frontend')}}/images/homepage/ab_2.jpg" alt="">
                    </div>
                </div>               
            </div>
        </div>
        <div class="hero_shapes sc_hs">
            <img src="{{asset('assets/frontend')}}/images/homepage/hero-1-circle-2.png" alt="image" class="shape_1">
            <img src="{{asset('assets/frontend')}}/images/homepage/hero-1-circle.png" alt="image" class="shape_2">
            <img src="{{asset('assets/frontend')}}/images/homepage/hero-1-dot-2.png" alt="image" class="shape_3">
            <img src="{{asset('assets/frontend')}}/images/homepage/small-shape-1.png" alt="image" class="shape_4">
            <img src="{{asset('assets/frontend')}}/images/homepage/small-shape-2.png" alt="image" class="shape_5">
            <img src="{{asset('assets/frontend')}}/images/homepage/small-shape-3.png" alt="image" class="shape_6">
            <img src="{{asset('assets/frontend')}}/images/homepage/small-shape-4.png" alt="image" class="shape_7">
        </div>
    </section>


    <section class="sec_quote">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="owl-carousel owl-theme quote_slider">
                        @foreach($quote as $quotes)
                        <div class="item">
                            <p><i class="fas fa-quote-left"></i>{{ $quotes->quate_des }}</p>
                            <h5>{{ $quotes->author_name }}- <span class="c_blue">{{ $quotes->author_title }}</span></h5>
                        </div>
                        @endforeach                       
                    </div>               
                </div>
            </div>
        </div>
        <div class="article_shapes">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-2.png" alt="image" class="art_shp_1">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-6.png" alt="image" class="art_shp_2">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-3.png" alt="image" class="art_shp_3">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-4.png" alt="image" class="art_shp_4">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-3.png" alt="image" class="art_shp_8">
        </div>
    </section>
@endsection

   

  