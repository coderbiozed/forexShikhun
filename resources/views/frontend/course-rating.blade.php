@extends('layouts.frontend')    
@section('content')
<section class="sec_c_reviews sec_default spt_cust">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="sec_heading"><span class="sec_hed_span">Let's See What Our Students Says !</span></h1>
            </div>
            <div class="col-lg-8">
                <div class="course_reviews">
                    <div class="add_cou_reviews">
                        <div>
                            <h4 class="m-0">Everything about Forex Trading.</h4>
                            <!-- <div class="pub_ow f_pub_o">
                                <a href="#">
                                    <div class="pub_img_inn">
                                         <span class="pub_img"><img src="images/homepage/me.png" alt="img"></span>
                                    </div>                                  
                                    <span class="fo_pub_o_ti">Mahmud Shejan</span>                               
                                </a>
                            </div> -->
                        </div>
                        {{-- 👍👍 review area start 👍👍 --}}
                        <div>                           
                            <a href="#pop_up1" class="add_review" title="Add review"><i class="fas fa-plus"></i></a>
                            <div id="pop_up1" class="over_lay">
                                <div class="pop_up">
                                    <h3>Your Experience Really Helps Other Students.</h3>
                                    <div class="inset_shadow p-3">                                         
                                        {!! Form::open(['route' => 'reviews.store']) !!}
                                            @csrf
                                                @if($errors->any())
                                                    @foreach($errors->all as $error)
                                                        <div class="alert alert-danger">
                                                        {{ $error }}
                                                        </div>
                                                    @endforeach
                                                @endif
                                            <div class="my_pro_item mt-0">
                                                <div class="my_pr_it_ti re_pop_head">
                                                    <h4>Write your review</h4> 
                                                    <a class="re_close" href="#">&times;</a>                                                                                                       
                                                </div> 
                                                <trix-editor input="x">                                             
                                                    <textarea name="description" id="" class="mpi_c_mt" rows="3"></textarea>
                                                </trix-editor>
                                            </div>

                                            
                                            <div class="my_pro_item c_g_rating">
                                                <h4>Rate us</h4>
                                                <div class="g_ra_sec">
                                                    <i class="far fa-star c_dark_cy" data-star="1"></i>
                                                    <i class="far fa-star c_dark_cy" data-star="2"></i>
                                                    <i class="far fa-star c_dark_cy" data-star="3"></i>
                                                    <i class="far fa-star c_dark_cy" data-star="4"></i>
                                                    <i class="far fa-star c_dark_cy" data-star="5"></i>
                                                </div>                                                                                                   
                                            </div>
                                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                            {{-- <button type="submit" name="save" class="cust_btn mt-4 add_re_btn">Add</button> --}}
                                    {!! Form::close() !!}
                                    </div>
                                
                                </div>                                 
                            </div>
                        </div>
                        {{-- 👍👍 review area end👍👍 --}}
                    </div>
                    @foreach($reviews as $review)
                    <div class="cou_reviews">
                        <div class="f_pub">
                            <div class="b_det_pub">
                                <div class="pub_ow f_pub_o">
                                    <a href="#">
                                        <div class="pub_img_inn">
                                             <span class="pub_img"><img src="images/homepage/person-1.jpg" alt="img"></span>
                                        </div>                                  
                                        <span class="fo_pub_o_ti">Mark Kyle</span>                               
                                    </a>
                                </div>
                                <div class="pub_time">
                                     <span class="far fa-clock c_orange"></span>
                                     <span>{{ \Carbon\Carbon::parse($review->created_at)->diffForHumans( )   }}</span>
                                </div>                         
                            </div>
                        </div>
                        <div class="f_r_con">
                            <span>{{$review->description}}</span>
                            <div class="co_re_b_meta">
                                <div class="f_ac_b_ml">
                                    <div class="cust_btn">
                                        <i class="far fa-star c_dark_cy"></i>
                                        <span>{{$review->rating}}</span>
                                    </div>
                                </div>  
                                <div class="f_ac_b_mrr">
                                    <div class="cr_sc_d">                    
                                        <a href="#" class="cust_btn" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="cust_btn" target="_blank" title="Linked-in"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#" class="cust_btn" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="cust_btn" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>                                                                                              
                            </div>
                        </div>
                        
                    </div>
                    @endforeach
                    {{-- <div class="cou_reviews">
                        <div class="f_pub">
                            <div class="b_det_pub">
                                <div class="pub_ow f_pub_o">
                                    <a href="#">
                                        <div class="pub_img_inn">
                                             <span class="pub_img"><img src="images/homepage/person-2.png" alt="img"></span>
                                        </div>                                  
                                        <span class="fo_pub_o_ti">Corey Scott</span>                               
                                    </a>
                                </div>
                                <div class="pub_time">
                                     <span class="far fa-clock c_orange"></span>
                                     <span>9/12/2022</span>
                                </div>                         
                            </div>
                        </div>
                        <div class="f_r_con">
                            <span class="c_review_desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, est sed voluptas consequatur laboriosam, molestias velit numquam vel aliquid incidunt illum expedita ducimus dolores illo atque beatae sapiente animi aliquam ex repellat quae! Perferendis fugiat earum asperiores maiores possimus fugit quas dolorum harum nam ea! Sit soluta tenetur dolore sequi.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, est sed voluptas consequatur laboriosam, molestias velit numquam vel aliquid incidunt illum expedita ducimus dolores illo atque beatae sapiente animi aliquam ex repellat quae! Perferendis fugiat earum asperiores maiores possimus fugit quas dolorum harum nam ea! Sit soluta tenetur dolore sequi.</span>
                            <div class="co_re_b_meta">
                                <div class="f_ac_b_ml">
                                    <div class="cust_btn">
                                        <i class="far fa-star c_dark_cy"></i>
                                        <span>4.5</span>
                                    </div>
                                </div>  
                                <div class="f_ac_b_mrr">
                                    <div class="cr_sc_d">                    
                                        <a href="#" class="cust_btn" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="cust_btn" target="_blank" title="Linked-in"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#" class="cust_btn" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="cust_btn" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>                                                                                              
                            </div>
                        </div>
                        
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-4 c_det_art_col">
                <div class="b_det_main b_det_main_sticky mt-0">                       
                     <div class="b_det_si_sc">
                        <div>
                            <h3>Get news on social media!</h3>
                            <p>Read our latest news on any of these social networks!</p>
                        </div>
                        <div class="b_det_so">                    
                            <a href="#" class="b_det_so_li" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="b_det_so_li" title="Linked-in"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="b_det_so_li" title="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="b_det_so_li" title="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                     </div>
                     <div class="b_det_si_new">
                             <h3>Get our latest news daily!</h3>
                             <p>Daily we will send you the breaking newses right to your inbox!</p>
                             {{-- <form action="#" class="b_det_si_for">
                                 <input type="email" name="email" id="email" placeholder="email">
                                 <input type="submit" value="Subscribe" class="cust_btn">
                             </form> --}}
                             {!! Form::open(['route' => 'subscribes.store']) !!}
                             <div class="b_det_si_for">
                                 
                                  @csrf
                                  <input  type="email" name="email" id="email" placeholder="john@email.com" class="cust_btn">
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