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
                            <div class="b_meta"><a href="#"><span class="far fa-heart c_pink"></span><span>9.5k</span></a></div>
                            <div class="b_meta"><a href="#sc_p_c"><span class="far fa-comment c_dark_cy"></span><span>15 comments</span></a></div> 
                            <div class="b_meta">
                                <div class="bt_sha_tog_main">
                                   <div class="d-flex">
                                    <span class=" c_violet c_pointer"></span>
                                    <div class="social  d-flex">
                                            {{-- Social Icon --}}
                                    </div>  
                                    </div>                        
                                </div>                          
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
                                $commentall = DB::table('comments')->count(); 
                                ?>                      
                            <h2 class="b_det_p_co_title">See all comments <span class="b_det_p_co_count">{{$commentall}}</span></h2>
                          @foreach ($comment as $comment)
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
                                            <span>{{ $comment->comment}}</span>
                                        </div>
                                        <div class="b_det_com_bo_meta">                                            
                                            <a href="#" class="bo_meta bo_meta_like"><span class="far fa-heart c_pink"></span><span>5</span></a>
                                            <a href="#collapseExample" class="bo_meta" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample"><span class="fas fa-reply ft_reply"></span><span class="bo_reply">reply</span></a>
                                            <a href="#" class="bo_meta"><span class="far fa-clock c_orange"></span><span>2hrs</span></a>                                           
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
                                        <div class="coll_reply">  
                                            <div class="collapse" id="collapseExample">
                                                <div class="card card-body">
                                                    <form action="#" class="b_det_com_fo">
                                                        <div class="sign_user">
                                                            <a href="#" title="Mahmud Shejan" data-Commentid ="{{$comment->id}}">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="b_det_com_t_main">
                                                            <textarea name="" id="" class="b_det_us_com" placeholder="reply"></textarea>
                                                            <button class="b_det_com_sh">➤</button>
                                                        </div>                               
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="view_reply"><a href="#met_rep_1" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="met_rep_1"><span class="fas fa-level-up-alt c_blue v_rep"></span><span class="c_blue">2</span> replies</a></div>                                        
                                    </div>
                                </div>
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
                                                        <span class="b_det_com_au">Mahmud Shejan</span>
                                                        <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, beatae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non inventore ipsa fuga distinctio quidem doloribus.</span>
                                                    </div>
                                                    <div class="b_det_com_bo_meta">
                                                        <a href="#" class="bo_meta bo_meta_like"><span class="far fa-heart c_pink"></span><span>5</span></a>
                                                        <a href="#collapseExample1" class="bo_meta" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample1"><span class="fas fa-reply ft_reply"></span><span class="bo_reply">reply</span></a>
                                                        <a href="#" class="bo_meta"><span class="far fa-clock c_orange"></span><span>2hrs</span></a>
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
                                                    <div class="coll_reply">  
                                                        <div class="collapse" id="collapseExample1">
                                                            <div class="card card-body">
                                                                <form action="#" class="b_det_com_fo">
                                                                    <div class="sign_user">
                                                                        <a href="#" title="Mahmud Shejan">
                                                                            <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                                        </a>
                                                                    </div>
                                                                    <div class="b_det_com_t_main">
                                                                        <textarea name="" id="" class="b_det_us_com" placeholder="reply"></textarea>
                                                                        <button class="b_det_com_sh">➤</button>
                                                                    </div>                               
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="b_det_com b_det_com_reply">
                                                <div class="sign_user">
                                                    <a href="#" title="Lewis Micah">
                                                        <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt="img"></span>                            
                                                    </a>
                                                </div>
                                                <div class="b_det_com_bo">
                                                    <div class="b_det_com_cont">
                                                        <span class="b_det_com_au">Lewis Micah</span>
                                                        <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, beatae! Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                                    </div>
                                                    <div class="b_det_com_bo_meta">
                                                        <a href="#" class="bo_meta bo_meta_like"><span class="far fa-heart c_pink"></span><span>5</span></a>
                                                        <a href="#collapseExample5" class="bo_meta" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample5"><span class="fas fa-reply ft_reply"></span><span class="bo_reply">reply</span></a>
                                                        <a href="#" class="bo_meta"><span class="far fa-clock c_orange"></span><span>2hrs</span></a>
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
                                                    <div class="coll_reply">  
                                                        <div class="collapse" id="collapseExample5">
                                                            <div class="card card-body">
                                                                <form action="#" class="b_det_com_fo">
                                                                    <div class="sign_user">
                                                                        <a href="#" title="Mahmud Shejan">
                                                                            <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                                        </a>
                                                                    </div>
                                                                    <div class="b_det_com_t_main">
                                                                        <textarea name="" id="" class="b_det_us_com" placeholder="reply"></textarea>
                                                                        <button class="b_det_com_sh">➤</button>
                                                                    </div>                               
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                               
                            </div>  
                            @endforeach
                            {{-- <div class="b_det_com_main">
                                <div class="b_det_com">
                                    <div class="sign_user">
                                        <a href="#" title="Corey Scott">
                                            <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt="img"></span>                            
                                        </a>
                                    </div>
                                    <div class="b_det_com_bo">
                                        <div class="b_det_com_cont"> 
                                            <span class="b_det_com_au">Corey Scott</span>                                           
                                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, beatae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non inventore ipsa fuga distinctio quidem doloribus.</span>
                                        </div>
                                        <div class="b_det_com_bo_meta">
                                            <a href="#" class="bo_meta bo_meta_like"><span class="far fa-heart c_pink"></span><span>5</span></a>
                                            <a href="#collapseExample2" class="bo_meta" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample2"><span class="fas fa-reply ft_reply"></span><span class="bo_reply">reply</span></a>
                                            <a href="#" class="bo_meta"><span class="far fa-clock c_orange"></span><span>2hrs</span></a>
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
                                        <div class="coll_reply">  
                                            <div class="collapse" id="collapseExample2">
                                                <div class="card card-body">
                                                    <form action="#" class="b_det_com_fo">
                                                        <div class="sign_user">
                                                            <a href="#" title="Mahmud Shejan">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="b_det_com_t_main">
                                                            <textarea name="" id="" class="b_det_us_com" placeholder="reply"></textarea>
                                                            <button class="b_det_com_sh">➤</button>
                                                        </div>                               
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="view_reply"><a href="#met_rep_2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="met_rep_2"><span class="fas fa-level-up-alt c_blue v_rep"></span><span class="c_blue">1</span> replies</a></div> 
                                    </div>
                                </div>
                                <div class="coll_reply">
                                    <div class="collapse" id="met_rep_2">
                                        <div class="b_det_com_met_rep">
                                            <div class="b_det_com b_det_com_reply">
                                                <div class="sign_user">
                                                    <a href="#" title="Mahmud Shejan">
                                                        <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                    </a>
                                                </div>
                                                <div class="b_det_com_bo">
                                                    <div class="b_det_com_cont">
                                                        <span class="b_det_com_au">Mahmud Shejan</span>
                                                        <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, beatae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non inventore ipsa fuga distinctio quidem doloribus.</span>
                                                    </div>
                                                    <div class="b_det_com_bo_meta">
                                                        <a href="#" class="bo_meta bo_meta_like"><span class="far fa-heart c_pink"></span><span>5</span></a>
                                                        <a href="#collapseExample3" class="bo_meta" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample3"><span class="fas fa-reply ft_reply"></span><span class="bo_reply">reply</span></a>
                                                        <a href="#" class="bo_meta"><span class="far fa-clock c_orange"></span><span>2hrs</span></a>
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
                                                    <div class="coll_reply">  
                                                        <div class="collapse" id="collapseExample3">
                                                            <div class="card card-body">
                                                                <form action="#" class="b_det_com_fo">
                                                                    <div class="sign_user">
                                                                        <a href="#" title="Mahmud Shejan">
                                                                            <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                                        </a>
                                                                    </div>
                                                                    <div class="b_det_com_t_main">
                                                                        <textarea name="" id="" class="b_det_us_com" placeholder="reply"></textarea>
                                                                        <button class="b_det_com_sh">➤</button>
                                                                    </div>                               
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                       
                                    </div>
                                </div>                            
                            </div>
                            <div class="b_det_com_main">
                                <div class="b_det_com">
                                    <div class="sign_user">
                                        <a href="#" title="Lewis Micah">
                                            <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt="img"></span>                            
                                        </a>
                                    </div>
                                    <div class="b_det_com_bo">
                                        <div class="b_det_com_cont">
                                            <span class="b_det_com_au">Lewis Micah</span> 
                                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, beatae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non inventore ipsa fuga distinctio quidem doloribus.</span>
                                        </div>
                                        <div class="b_det_com_bo_meta">
                                            <a href="#" class="bo_meta bo_meta_like"><span class="far fa-heart c_pink"></span><span>5</span></a>
                                            <a href="#collapseExample4" class="bo_meta" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample4"><span class="fas fa-reply ft_reply"></span><span class="bo_reply">reply</span></a>
                                            <a href="#" class="bo_meta"><span class="far fa-clock c_orange"></span><span>2hrs</span></a>
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
                                        <div class="coll_reply">  
                                            <div class="collapse" id="collapseExample4">
                                                <div class="card card-body">
                                                    <form action="#" class="b_det_com_fo">
                                                        <div class="sign_user">
                                                            <a href="#"  title="Mahmud Shejan">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="b_det_com_t_main">
                                                            <textarea name="" id="" class="b_det_us_com" placeholder="reply"></textarea>
                                                            <button class="b_det_com_sh">➤</button>
                                                        </div>                               
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <h2 class="b_det_c_ti_main">Leave a comment!</h2>
                            <form action="{{url('add_comment')}}" class="b_det_com_fo" method="POST">
                                @csrf
                                <div class="sign_user">
                                    <a href="#" title="Mahmud Shejan">
                                        <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                    </a>
                                </div>
                               
                                <div class="b_det_com_t_main">
                                    <textarea name="comment" id="" class="b_det_us_com" placeholder="comment.."></textarea>
                                    <button class="b_det_com_sh" type="submit" value="Comment" >➤</button>
                                </div>                               
                            </form>                                                                                                                            
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
                                     <input type="email" name="email" id="email" placeholder="email" class="cust_new">
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

    @endsection
