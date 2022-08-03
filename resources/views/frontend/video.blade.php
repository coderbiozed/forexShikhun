@extends('layouts.frontend')
@section('content')

    <section class="sec_videos sec_default spt_cust">
        <div class="container">
            <div class="row loadmore-one">
                <div class="col-lg-12">
                    <h1 class="sec_heading"><span class="sec_hed_span">Get The Things With More Details !</span></h1>
                </div>
                @foreach($videos as $videos)
                <div class="col-lg-4 col-md-6 load-item-two">
                    <div class="video_col">
                        <div class="video_iframe">
                            {!! $videos->video !!}
                        </div>
                        <div class="video_title">
                            <h4>
                               {{ $videos->title }}
                            </h4>
                        </div>
                    </div>                 
                </div>
                @endforeach
                
                
       
                
            </div>
        </div>
        <div class="article_shapes">
            <img src=" {{asset('assets/frontend')}}/images/homepage/de-shape-1.png" alt="image" class="art_shp_1">
            <img src=" {{asset('assets/frontend')}}/images/homepage/de-shape-2.png" alt="image" class="art_shp_2">
            <img src=" {{asset('assets/frontend')}}/images/homepage/de-shape-3.png" alt="image" class="art_shp_3">
            <img src=" {{asset('assets/frontend')}}/images/homepage/de-shape-4.png" alt="image" class="art_shp_4">
            <img src=" {{asset('assets/frontend')}}/images/homepage/de-shape-5.png" alt="image" class="art_shp_5">
            <img src=" {{asset('assets/frontend')}}/images/homepage/de-shape-6.png" alt="image" class="art_shp_6">
            <img src=" {{asset('assets/frontend')}}/images/homepage/de-shape-2.png" alt="image" class="art_shp_7">
            <img src=" {{asset('assets/frontend')}}/images/homepage/de-shape-3.png" alt="image" class="art_shp_8">
        </div>
    </section>

    
  @endsection