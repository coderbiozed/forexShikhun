@extends('layouts.frontend')
@section('content')


    <section class="my_pro_dash_sec spt_cust sec_default">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="my_pro_dash">
                        <div class="my_pro_det">
                            <div class="my_pro_lm">
                                <div class="my_pro_img">
                                    <span class="my_pro_i_inn"><img src="{{ asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>
                                </div>
                                <div class="m_p_lo">
                                    <span class="fas fa-map-marker-alt c_blue"></span><span>Khulna, Bangladesh</span>
                                </div>
                                <div class="m_p_lo">
                                    <span>Joined :</span><span class="c_blue">05/12/2022</span>
                                </div>
                                <div class="m_p_lo">
                                    <span>Status :</span><span class="c_blue" role="">4hrs</span>
                                </div>
                                <div class="m_p_lo">
                                    <div class="cust_btn fl_btn">
                                        <span class="fas fa-user-plus c_blue"></span>
                                        <span class="u_p">Follow</span>
                                    </div>
                                    <div class="up_epi_main">
                                        <span class="fas fa-ellipsis-h c_blue up_epi"></span>
                                        <span class="up_epi_con"><span class="mb-2 active"><i class="far fa-bell c_blue me-2"></i>Active</span><span><i class="far fa-bell-slash c_blue me-2"></i>Mute</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="my_pro_meta">
                                <div>
                                    <h4><span>Mark Kyle</span><span class="c_blue n_d">||</span><span class="my_pro_nic">@_mark111</span></h4>
                                    <p>Introducing yourself can be one of the interesting as well as the most tricky task in itself. We all are unique and writing about ourselves is an essential aspect to discover our qualities more reliably. Discovering our qualities helps us a lot to know about ourselves.
                                    </p>                                
                                </div>
                                <div class="m_p_meta_bo">                                   
                                    <div class="m_p_bm_inn">
                                        <p>Total Posts: <span class="c_blue">25</span></p>                                      
                                    </div>
                                    <div class="m_p_bm_inn">
                                        <p>Posts Likes: <span class="c_blue">51</span></p>
                                    </div>
                                    <div class="m_p_bm_inn">
                                        <p>Profile Views: <span class="c_blue">13</span></p>
                                    </div>
                                    <div class="m_p_bm_inn">
                                        <p>Title: <span class="c_blue">Senior</span></p>
                                    </div>
                                </div>                               
                                {{-- <div class="my_pro_top_act">
                                    <h4 class="m-0">Most activities</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mp_to_ac row">
                                                <a href="#" class="fo_tag col-6 col-xxl-5"><span class="c_orange">■</span> Trading Discussion</a>
                                                <div class="col-6 col-xxl-7">
                                                    <div class="mptacts">
                                                        <div class="mtat">
                                                            <p>posts</p>
                                                            <p class="c_orange">120</p>
                                                        </div>
                                                        <div class="mtat">
                                                            <p>replies</p>
                                                            <p class="c_orange">189</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mp_to_ac row">
                                                <a href="#" class="fo_tag col-6 col-xxl-5"><span class="c_blue">■</span> Global Market</a>
                                                <div class="col-6 col-xxl-7">
                                                    <div class="mptacts">
                                                        <div class="mtat">
                                                            <p>posts</p>
                                                            <p class="c_blue">51</p>
                                                        </div>
                                                        <div class="mtat">
                                                            <p>replies</p>
                                                            <p class="c_blue">76</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mp_to_ac row">
                                                <a href="#" class="fo_tag col-6 col-xxl-5"><span class="c_violet">■</span> Trading System</a>
                                                <div class="col-6 col-xxl-7">
                                                    <div class="mptacts">
                                                        <div class="mtat">
                                                            <p>posts</p>
                                                            <p class="c_violet">25</p>
                                                        </div>
                                                        <div class="mtat">
                                                            <p>replies</p>
                                                            <p class="c_violet">41</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mp_to_ac row">
                                                <a href="#" class="fo_tag col-6 col-xxl-5"><span class="c_green">■</span> Beginner Questions</a>
                                                <div class="col-6 col-xxl-7">
                                                    <div class="mptacts">
                                                        <div class="mtat">
                                                            <p>posts</p>
                                                            <p class="c_green">2</p>
                                                        </div>
                                                        <div class="mtat">
                                                            <p>replies</p>
                                                            <p class="c_green">35</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div> --}}
                            </div>
                            
                        </div>
                        <div class="my_pro_act_main">
                            <div class="my_pro_act_navs">   
                                <div class="mp_cea">
                                    <span class="my_pro_nav">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </span>                                                                                                                                                
                                </div>
                                <div class="my_pro_nav_co">
                                    <div class="nav nav-pills" id="v-pills-tab">                            
                                        
                                        <div class="nav-link cust_btn active" id="pro_act-tab" data-bs-toggle="pill" data-bs-target="#pro_act" role="tab" aria-controls="pro_act" aria-selected="false">
                                            <span class="fa-solid fa-chart-line c_green me-2"></span><span>Activities</span>
                                        </div>
                                        <div class="nav-link cust_btn" id="pro_sum-tab" data-bs-toggle="pill" data-bs-target="#pro_sum" role="tab" aria-controls="pro_sum" aria-selected="false">
                                            <span class="fa-solid fa-chart-pie me-2 c_violet"></span><span>Summary</span>
                                        </div>
                                        
                                        <div class="nav-link cust_btn" id="pro_fol-tab" data-bs-toggle="pill" data-bs-target="#pro_fol" role="tab" aria-controls="pro_fol" aria-selected="false">
                                            <span class="fa-solid fa-users-gear me-2 c_orange"></span><span>Follows</span>
                                        </div>                                  
                                    </div>
                                </div>                                                   
                            </div>
                            <div class="my_pro_act_tabs">
                                <div class="tab-content" id="v-pills-tabContent">                                                           
                                    <div class="tab-pane fade show active" id="pro_act" role="tabpanel" aria-labelledby="pro_act-tab">
                                        <div class="my_to_po_acts">
                                            <div class="my_to_act">
                                                <a href="#" class="fo_tag"><span class="c_green">■</span> Beginner
                                                    Questions</a>
                                                <a href="forum-category-discussion.html" class="my_to_po_title">
                                                    This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                </a>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea maiores
                                                    quas vero tempora magni mollitia?
                                                </p>
    
                                                <div class="my_to_po_meta">
                                                    <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                                    <div><a href="#" title="Reply"><span
                                                                class="fas fa-reply-all ft_reply"></span>
                                                            <span>0.5k</span></a></div>
                                                    <div>
                                                        <span class="far fa-clock c_orange"></span>
                                                        <span>3hrs</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="my_to_act">
                                                <a href="#" class="fo_tag"><span class="c_orange">■</span> Trading</a>
                                                <a href="forum-category-discussion.html" class="my_to_po_title">
                                                    This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                </a>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea maiores
                                                    quas vero tempora magni mollitia?
                                                </p>
    
                                                <div class="my_to_po_meta">
                                                    <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                                    <div><a href="#" title="Reply"><span
                                                                class="fas fa-reply-all ft_reply"></span>
                                                            <span>0.5k</span></a></div>
                                                    <div>
                                                        <span class="far fa-clock c_orange"></span>
                                                        <span>3hrs</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="my_to_act">
                                                <a href="#" class="fo_tag"><span class="c_violet">■</span> Trading System</a>
                                                <a href="forum-category-discussion.html" class="my_to_po_title">
                                                    This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                </a>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea maiores
                                                    quas vero tempora magni mollitia?
                                                </p>
    
                                                <div class="my_to_po_meta">
                                                    <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                                    <div><a href="#" title="Reply"><span
                                                                class="fas fa-reply-all ft_reply"></span>
                                                            <span>0.5k</span></a></div>
                                                    <div>
                                                        <span class="far fa-clock c_orange"></span>
                                                        <span>3hrs</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="my_to_act">
                                                <a href="#" class="fo_tag"><span class="c_blue">■</span> Global Market</a>
                                                <a href="forum-category-discussion.html" class="my_to_po_title">
                                                    This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                </a>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea maiores
                                                    quas vero tempora magni mollitia?
                                                </p>
    
                                                <div class="my_to_po_meta">
                                                    <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                                    <div><a href="#" title="Reply"><span
                                                                class="fas fa-reply-all ft_reply"></span>
                                                            <span>0.5k</span></a></div>
                                                    <div>
                                                        <span class="far fa-clock c_orange"></span>
                                                        <span>3hrs</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                     
                                    </div>

                                    <div class="tab-pane fade" id="pro_sum" role="tabpanel" aria-labelledby="pro_sum-tab">
                                        <div class="my_pro_sum_main">
                                            <div class="row">
                                                <div class="col-6 col-md-4 col-lg-3">
                                                    <div class="my_pro_sum_tos">
                                                        <p class="sum_head ">Days visited</p>
                                                        <div class="sum_val">
                                                            <span class="c_blue sum_vi">35d</span>
                                                        </div>
                                                    </div>                                                   
                                                </div>
                                                <div class="col-6 col-md-4 col-lg-3">
                                                    <div class="my_pro_sum_tos">
                                                        <p class="sum_head ">Total readtime</p>
                                                        <div class="sum_val">
                                                            <span class="c_pink sum_rt">25hrs</span>
                                                        </div>
                                                    </div>                                                   
                                                </div>
                                                <div class="col-6 col-md-4 col-lg-3">
                                                    <div class="my_pro_sum_tos">
                                                        <p class="sum_head ">Topics viewed</p>
                                                        <div class="sum_val">
                                                            <span class="c_dark_cy sum_tv">81</span>
                                                        </div>
                                                    </div>                                                  
                                                </div>
                                                <div class="col-6 col-md-4 col-lg-3">
                                                    <div class="my_pro_sum_tos">
                                                        <p class="sum_head ">Topic replied</p>
                                                        <div class="sum_val">
                                                            <span class="c_orange sum_tr">45</span>
                                                        </div>
                                                    </div>                                                   
                                                </div>
                                                <div class="col-6 col-md-4 col-lg-3">
                                                    <div class="my_pro_sum_tos">
                                                        <p class="sum_head  ">Total reacted</p>
                                                        <div class="sum_val">
                                                            <span class="c_pg_book sum_re">95</span>
                                                        </div>
                                                    </div>                                                   
                                                </div>
                                                <div class="col-6 col-md-4 col-lg-3">
                                                    <div class="my_pro_sum_tos">
                                                        <p class="sum_head ">Post created</p>
                                                        <div class="sum_val">
                                                            <span class="c_violet sum_pc">19</span>
                                                        </div>
                                                    </div>                                                   
                                                </div>
                                                <div class="col-6 col-md-4 col-lg-3">
                                                    <div class="my_pro_sum_tos">
                                                        <p class="sum_head ">Got reacted</p>
                                                        <div class="sum_val">
                                                            <span class="c_de_re sum_gr">65</span>
                                                        </div>
                                                    </div>                                                    
                                                </div>                                               
                                                <div class="col-6 col-md-4 col-lg-3">
                                                    <div class="my_pro_sum_tos">
                                                        <p class="sum_head ">Got replied</p>
                                                        <div class="sum_val">
                                                            <span class="c_green sum_tgre">29</span>
                                                        </div>
                                                    </div>                                                   
                                                </div>
                                            </div>                                           
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pro_fol" role="tabpanel" aria-labelledby="pro_fol-tab">
                                        <div class="my_pro_fol_main">
                                            <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">                                               
                                                <button class="nav-link cust_btn active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab"    aria-controls="v-pills-profile" aria-selected="false">Followers
                                                </button>
                                                <button class="nav-link cust_btn" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Follwing
                                                </button>
                                            </div>
                                            <div class="tab-content" id="v-pills-tabContent">                                               
                                                <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <div class="my_pro_fols">
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                    <div class="my_pro_fols">
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
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
                </div>
            </div>
        </div>
    </section>


  @endsection