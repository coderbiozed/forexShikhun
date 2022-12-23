@extends('layouts.frontend')    
@section('content')
    <section class="sec_articles sec_default spt_cust">
        <div class="container sec_main_cont">
            <div class="row loadmore-two">
                <div class="col-lg-12 ">
                    <h1 class="sec_heading"><span class="sec_hed_span">Latest published articles</span></h1>
                </div>
                @foreach($blogs as $blog)
                <div class="col-xxl-3 col-lg-4 col-md-6 load-item-two">
                    <div class="l_articles">
                        <div class="l_articles_img">
                            <a href="{{ URL::to ('blog/'.$blog->slug)}}"><img src="{{ asset('images/' . json_decode($blog->image)[0]) }}" alt=""></a> 
                        </div>
                        <div class="l_articles_cont">
                            <a href="{{ URL::to ('blog/'.$blog->slug)}}"><h4 class="l_articles_cont_hed">{!! Str::limit(strip_tags($blog->title), 35) !!} </h4></a>
                            <p class="l_articles_cont_des">{!! Str::limit(strip_tags($blog->description), 50) !!}</p>
                            <hr class="articles_divider">    
                            <div class="l_articles_bottom_cont">
                                <div class="bottom_cont_parts"><span class="far fa-eye c_blue"></span><span>0</span></div>
                                 {{--🥰🥰 Like view and count 🥰🥰 --}}
                                @php $likes = DB::table('blog_member')->where('member_id', $blog->id)->count();@endphp
                               <div class="bottom_cont_parts"><a href="#"><span class="fa-solid fa-heart c_pink"></span></a><span>{{$likes}}</span></div>
                              
                               {{--👉👇 {{$blog->likedMembers->count()}} --}}
                                 {{--🥰🥰 Like view and count 🥰🥰 --}}
                                
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
                                
                                {{-- <div class="bottom_cont_parts"><a href="#"><span class="fas fa-share c_violet"></span></a><span>Share</span></div>  --}}
                                <div class="bottom_cont_parts"><span class="far fa-clock c_orange"></span><span>{{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans( )   }}</span></div>                            
                            </div> 
                        </div>
                    </div>
                </div>
                @endforeach
                    {{-- sharebutton --}}
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


           <!-- Load More Button -->
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

    <script type="text/javascript">
        function replay(caller){
            document.getElementById('blogId').value=$(caller).attr('dataBlogId');
                $('.shareDiv').insertAfter($(caller));
                $('.shareDiv').show();
        }
    </script>
  @endsection