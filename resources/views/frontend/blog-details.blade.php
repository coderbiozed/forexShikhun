@extends('layouts.frontend')

  @section('content')  
  <?php
$currentURL = request()->path();
$routeName = \Request::route()->getName();
if ($routeName == "blog-details") {
    $slug = str_replace('blog/', '', $currentURL);
    $blog = DB::table('table_blog')->Where('slug',  $slug)->first();
    $image = asset('images/' . json_decode($blog->image)[0]);
   
} 


?>
    <section class="sec_blog_det spt_cust sec_default">
       <div class="container">
           <div class="row">
               <div class="col-lg-8">
                   <div class="b_det_main">
                       <div class="b_det_pub">
                           <div class="pub_ow">
                               <a href="#">
                                   <div class="pub_img_inn">
                                        <span class="pub_img"><img src="https://ceytechsystemsolutions.com/wp-content/uploads/2021/10/favpng_avatar-user-profile-recommender-system.png" alt="img"></span>
                                   </div>                                  
                                   <span>{{ $blog->author}} </span>                               
                               </a>
                           </div>
                           <div class="pub_time">
                                <span class="far fa-clock c_orange"></span>
                                <span>{{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</span>
                           </div>                         
                       </div>                      
                        <div class="b_det_title">
                            <h2>
                          {{ $blog->title }}
                            </h2>
                            <p class="b_det_des">{!! Str::limit(strip_tags($blog->description), 100) !!}</p>
                        </div>
                        <div class="b_meta_det">
                            <div class="b_meta"><span class="far fa-eye c_blue"></span><span>24.5k</span></div>
                                {{--🥰🥰 Like view and count 🥰🥰 --}}
                                <?php if (isset((Auth::guard('member'))->user()->name)) {?>
                                <div class="b_meta">
                                    <a href="#" onclick="document.getElementById('like-from-{{$blog->id}}').submit();">
                                        <i class="fa-solid fa-heart" aria-hidden="true" style="color:{{Auth::guard('member')->user()->likedBlogs()->where('blog_id', $blog->id )->count() > 0 ? '#e0245e': '#adbcbf'}}"></i>
                                        @php $likes = DB::table('blog_member')->get('member_id', $blog->id)->count();@endphp
                                        {{--👉👇 {{$blog->likedMembers->where('member_id', $blog->id)->count()}} --}}
                                    <span>{{$likes}}</span>
                                    </a>
                                </div>
                                <form action="{{route('blog.like', $blog->id)}}" method="POST" style="display:hidden" id="like-from-{{$blog->id}}">
                                @csrf
                                </form>
                                <?php } else {?>
                                    <div class="b_meta">
                                        <i class="far fa-heart"> </i>10
                                    </div>
                                <?php } ?>   
                                  {{--🥰🥰 Like view and count 🥰🥰 --}}
                            @php  $commentall = DB::table('comments')->Where('post_id', $blog->id)->count();@endphp
                            <div class="b_meta"><a href="#sc_p_c"><span class="far fa-comment c_dark_cy"></span><span>{{$commentall}}</span></a></div> 
                            <div class="b_meta">
                                <div class="bt_sha_tog_main">
                                    <span class="fas fa-share c_violet c_pointer"></span>
                                    <span class="bt_sha_tog_con">
                                        <div class="social  d-flex">
                                                {{-- Social Icon --}}
                                        </div> 
                                    </span>                    
                                </div> 
                                <span >Share</span>                         
                            </div>                                               
                        </div>                    
                        <div class="b_det_img">
                            <img src="{{ asset('images/' . json_decode($blog->image)[0]) }}" alt="">
                        </div>
                        <div class="blog_description">
                            <div class="description-icon less_description">
                                <p class="b_det_des ">{!! $blog->description !!}</p>   
                            </div>
                        </div>

                        {{-- 🥰 blog Next and Prev button 🥰 --}}
                        <div class="post_navs">
                        @if(!empty($previous))
                                  <a href="{{ URL::to ('blog/'.$previous)}}" id="p_n_prev" class="cust_btn">Prev</a>
                          @endif
                          <span class="c_blue">╺ ╺ &nbsp;</span>
                          @if(!empty($next))
                          <a href="{{ URL::to ('blog/'.$next)}}" id="p_n_next" class="cust_btn">Next</a>
                          @endif
                        </div>
                        {{-- comment Strat --}}
                        <hr class="c_divider">
                        <div class="b_det_p_co_sec" id="sc_p_c">     
                            <?php
                            //   $blog_details = DB::table('table_blog')->Where('slug',  $slug)->first();
                                $commentall = DB::table('comments')->Where('post_id', $blog->id)->count();                               
                            ?>                      
                            <h2 class="b_det_p_co_title">See all comments <span class="b_det_p_co_count">{{$commentall}}</span></h2>
                          @foreach ($comment as $comment)
                         {{-- 😎😎😍 Show Comment Area  😍😎😋 --}}                    
                            <div class="b_det_com_main">
                                <div class="b_det_com">
                                    <div class="sign_user">
                                        <a href="#" title="Mark Kyle">
                                            <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                        </a>
                                    </div>
                                    <div class="b_det_com_bo">
                                        <div class="b_det_com_cont">
                                            <span class="b_det_com_au">{{ $comment->name }}</span>
                                            <span>{!! Str::limit(strip_tags($comment->comment), 35) !!}</span>
                                        </div>
                                        <div class="b_det_com_bo_meta">                                            
                                            <a href="#" class="bo_meta bo_meta_like">
                                                <span class="far fa-heart c_pink"></span>
                                                <span>5</span>
                                            </a>
                                            <a href="#" class="bo_meta">
                                                <span class="far fa-clock c_orange"></span>
                                                <span>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</span>
                                            </a>                                                        
                                                    {{-- 😎😎Replay Comment Icon Start 😍😍 --}}
                                            <a href="#collapseExample" onclick="replay(this)" dataCommentId="{{ $comment->id }}" 
                                                    class="bo_meta" 
                                                    data-bs-toggle="collapse" 
                                                    role="button" 
                                                    aria-expanded="false" 
                                                    aria-controls="collapseExample">
                                                <span class="fas fa-reply ft_reply"></span>
                                                <span class="bo_reply">reply</span>
                                            </a>                                            
                                                     {{-- 😎😎ReplayComment Icon End😍😍 --}}
                                            <div href="#" class="bo_meta">
                                                <span class="fas fa-ellipsis-h c_blue tg_ep"></span>
                                                <div class="com_ep_main_cont">
                                                    <div class="com_ep_main_inner">
                                                        <p class="com_ep_main_it">Edit</p>
                                                        <p class="com_ep_main_it">Delete</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                   
                                        <div class="view_reply"><a href="#met_rep_1" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="met_rep_1"><span class="fas fa-level-up-alt c_blue v_rep"></span><span class="c_blue">2</span> replies</a></div>                                        
                                    </div>
                                </div> 
                                 {{-- 😀😀View Replay Start😀😀 --}}
                                @foreach($replay as $rep)    
                                    @if($rep->comment_id==$comment->id)                                 
                                    <div class="coll_reply">
                                        <div class="collapse" id="met_rep_1">
                                            <div class="b_det_com_met_rep">                                      
                                                <div class="b_det_com b_det_com_reply">
                                                    <div class="sign_user">
                                                        <a href="#" title="Mahmud Shejan">
                                                            <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                        </a>
                                                    </div>
                                                    <div class="b_det_com_bo">
                                                        <div class="b_det_com_cont">
                                                            <span class="b_det_com_au">{{$rep->name}}</span>
                                                            <span>{{$rep->reply}}</span>
                                                        </div>
                                                        <div class="b_det_com_bo_meta">
                                                            <a href="#" class="bo_meta bo_meta_like">
                                                                <span class="far fa-heart c_pink"></span>
                                                                <span>5</span>
                                                            </a>
                                                            <a href="#" class="bo_meta">
                                                                <span class="far fa-clock c_orange"></span>
                                                               @php
                                                                $time = \Carbon\Carbon::now()->subMinutes(1)->diffForHumans(null, true);
                                                                @endphp
                                                                <span>
                                                                 {{str_replace(['hours', 'minutes'], ['h', 'mins'], $time)}} </span>
                                                            </a>
                                                            {{-- 😎😎Replay Comment Icon  Start😍😍 --}}
                                                            <a href="#collapseExample"
                                                                 onclick="replay(this)"
                                                                 dataCommentId="{{ $comment->id }}"
                                                                 class="bo_meta" 
                                                                 data-bs-toggle="collapse"
                                                                 role="button" 
                                                                 aria-expanded="false"
                                                                 aria-controls="collapseExample">
                                                                <span class="fas fa-reply ft_reply"></span>
                                                                <span class="bo_reply">reply</span>
                                                            </a>
                                                            {{-- 😎😎Replay Comment Icon End😍😍 --}}
                                                            <div href="#" class="bo_meta">
                                                                <span class="fas fa-ellipsis-h c_blue tg_ep"></span>
                                                                <div class="com_ep_main_cont">
                                                                    <div class="com_ep_main_inner">
                                                                        <p class="com_ep_main_it">Edit</p>
                                                                        <p class="com_ep_main_it">Delete</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            {{-- 😀😀View Replay End😀😀 --}}
                                            </div>
                                        </div>
                                    </div>  
                                    @endif
                                @endforeach
                                {{-- 😍😍 End Replay😍😍  --}}
                            </div>  
                            @endforeach
                                   {{-- 😍😍😎 Comment Submit Area  Start😎😋😋 --}}
                                    <h2 class="b_det_c_ti_main">Leave a comment!</h2>
                                    <form action="{{url('add_comment')}}" class="b_det_com_fo" method="POST">
                                        @csrf
                                        <input type="hidden" value ="{{ $blog->id }}" name="post_id">
                                        <div class="sign_user">
                                            {{-- <a href="#" title="Mahmud Shejan">
                                                <span class="sign_user_img"><img src="images/avater/{{(Auth::guard('member'))->user()->avater}}" alt="img"></span>                            
                                            </a> --}}
                                        </div>
                                
                                        <div class="b_det_com_t_main">
                                            <textarea name="comment" id="" class="b_det_us_com" placeholder="comment.."></textarea>
                                            <button class="b_det_com_sh" type="submit" value="Comment" >➤</button>
                                        </div>                               
                                    </form>  
                                    {{-- 😍😍😎 Comment Submit Area End 😎😋😋 --}}               
                        </div>
                   </div>
               </div>
               <div class="col-lg-4 c_det_art_col">
                   <div class="b_det_main b_det_main_sticky">                       
                        <div class="b_det_si_sc">
                                <div>
                                    <h3>Get news on social media!</h3>
                                    <p>Read our latest news on any of these social networks!</p>
                                </div>
                                <div class="b_det_so">                    
                                    <a href="https://facebook.com/" target="_blank"  class="b_det_so_li" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://linkedin.com/" target="_blank"  class="b_det_so_li" title="Linked-in"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://twitter.com/"  target="_blank" class="b_det_so_li" title="Twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/" target="_blank" class="b_det_so_li" title="Instagram"><i class="fab fa-instagram"></i></a>
                                </div>
                        </div>
                        <div class="b_det_si_new">
                                <h3>Get our latest news daily!</h3>
                                <p>Daily we will send you the breaking newses right to your inbox!</p>
                                {{-- <form action="#" class="">
                                    <input type="email" name="email" id="email" placeholder="email">
                                    <input type="submit" value="Subscribe" class="cust_btn"></input>
                                </form> --}}
                                {!! Form::open(['route' => 'subscribes.store']) !!}
                                <div class="b_det_si_for">
                                    
                                     @csrf
                                     <input type="email" name="email" id="email" placeholder="jhon@email.com" class="cust_btn">
                                     {!! Form::submit('Subscribe', ['class' => 'cust_btn']) !!}  
                                </div>
                                {!! Form::close() !!}
                        </div> 
                        <div class="b_det_si_pa">
                            <h3 class="m_b">Latest Articles</h3>
                            <div class="c_det_rec_ar">
                            @foreach($blogs as $blog)
                                <div class="re_art">
                                    <div class="re_art_img">
                                        <img src="{{ asset('images/' . json_decode($blog->image)[0]) }}" alt="">
                                    </div>
                                    <div class="re_ar_title">
                                        <a href="{{ URL::to ('blog/'.$blog->slug)}}"><span>{!! Str::limit(strip_tags($blog->title), 35) !!}</span></a>
                                    </div>
                                </div>
                            @endforeach
                               
                            </div>
                        </div>                      
                   </div>
               </div>
           </div>
       </div>
    </section>
      {{-- 😍😍 Replay Submit Area Start 😎😋😊 --}}
      <div class="coll_reply replayDiv" style="display: none;">                                
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form action="{{url('add_replay')}}" class="b_det_com_fo" method="POST">
                    @csrf
                    <input type="hidden" id="commentId" name="commentId" value="{isset($comment->id)}}">
                    <div class="sign_user">
                        <a href="#" title="Mahmud Shejan" data-Commentid ="{{isset($comment->id)}}">
                            <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                        </a>
                    </div>
                    <div class="b_det_com_t_main" >
                        <textarea name="replay" id="" class="b_det_us_com" placeholder="reply"></textarea>
                        <button class="b_det_com_sh" type="submit">➤</button>
                    </div>  
                </form>
            </div>
        </div>
    </div>
       {{-- 😍😍Replay Submit Area  End😎😋😊 --}}

    <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });
        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>

    <script type="text/javascript">
        function replay(caller){
            document.getElementById('commentId').value=$(caller).attr('dataCommentId');
                $('.replayDiv').insertAfter($(caller));
                $('.replayDiv').show();
        }
    </script>

    @endsection
