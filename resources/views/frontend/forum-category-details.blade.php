@extends('layouts.frontend')
@section('content')
    

    <section class="sec_fo_cat_det spt_cust sec_default">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="sec_heading">Our Forum</h1>
                </div>
                <div class="col-lg-12">
                    <div class="cat_easy_acc">
                        <div class="acc_items nav nav-pills" id="v-pills-tab">                                                   
                            <div class="nav-link active" id="cat_2-tab" data-bs-toggle="pill" data-bs-target="#cat_2" role="tab" aria-controls="cat_2" aria-selected="false">
                                <div class="acc_item">
                                    <a href="#" class="acc_it_a"><span class="fa-solid fa-certificate me-2 c_violet"></span><span>New(25)</span></a>
                                </div>
                            </div>
                            <div class="nav-link" id="cat_3-tab" data-bs-toggle="pill" data-bs-target="#cat_3" role="tab" aria-controls="cat_3" aria-selected="false">
                                <div class="acc_item">
                                    <a href="#" class="acc_it_a"><span class="far fa-clock me-2 c_orange"></span><span>Recent(10)</span></a>
                                </div>
                            </div>
                            <div class="nav-link" id="cat_4-tab" data-bs-toggle="pill" data-bs-target="#cat_4" role="tab" aria-controls="cat_4" aria-selected="false">
                                <div class="acc_item">
                                    <a href="#" class="acc_it_a"><span class="far fa-star me-1 c_green"></span><span>Top</span></a>
                                </div>
                            </div>                                                                                                            
                        </div>
                        <div class="acc_items_sm">
                            <div class="ac_i_sm_nav">
                                <span class="fo_na_tr">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </span>
                                <!-- <span class="fo_na_se">
                                    <i class="fas fa-search c_blue"></i>
                                </span> -->
                            </div>
                        </div>
                        <div class="cat_se_ad">
                            <div class="add_cat">
                                <a href="#" title="Add New Topic"><i class="fas fa-plus"></i></a>
                            </div>
                            <!-- <div class="fo_acc_search">
                                <form class="fo_acc_form">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    <button type="submit"><i class="fas fa-search c_blue"></i></button>
                                </form>
                            </div> -->
                        </div>                                          
                    </div>
                    <div class="acc_items_sm">
                        <div class="acc_items cd_ai nav nav-pills" id="v-pills-tab">                            
                            <div class="nav-link active" id="cat_2-tab" data-bs-toggle="pill" data-bs-target="#cat_2" role="tab" aria-controls="cat_2" aria-selected="false">
                                <div class="acc_item">
                                    <a href="" class="acc_it_a"><span class="fa-solid fa-certificate me-2 c_violet"></span><span>New(25)</span></a>
                                </div>
                            </div>
                            <div class="nav-link" id="cat_3-tab" data-bs-toggle="pill" data-bs-target="#cat_3" role="tab" aria-controls="cat_3" aria-selected="false">
                                <div class="acc_item">
                                    <a href="" class="acc_it_a"><span class="far fa-clock me-2 c_orange"></span><span>Recent(10)</span></a>
                                </div>
                            </div>
                            <div class="nav-link" id="cat_4-tab" data-bs-toggle="pill" data-bs-target="#cat_4" role="tab" aria-controls="cat_4" aria-selected="false">
                                <div class="acc_item">
                                    <a href="" class="acc_it_a"><span class="far fa-star me-1 c_green"></span><span>Top</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tab-content" id="v-pills-tabContent">                        
                        <div class="tab-pane fade show active" id="cat_2" role="tabpanel" aria-labelledby="cat_2-tab">
                            <div class="fo_new">
                                <div class="fo_new_main">
                                    <div class="fo_new_head fo_cat_top">
                                        <h3><span class="border_v">Candlesticks, Chart Patterns, and Price Action</span><span class="fa-solid fa-certificate c_violet"></span></h3>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime deleniti, accusamus molestias qui veritatis quibusdam hic quisquam ab quo! Id.</p>
                                        <div class="topic_path"><span class="to_ma">Beginner Questions</span><span class="fas fa-angle-right tp_i"></span><span class="to_ma_cat">Candlesticks, Chart Patterns, and Price Action</span></div>
                                    </div>
                                    <div class="fo_la_dis">
                                        <div class="fo_la_to">
                                            <div>
                                                <div class="sign_user">
                                                    <a href="#" title="Corey Scott">
                                                        <span class="sign_user_img"><img src="{{asset('assets/site')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="{{route('forum-category-discussion')}}" class="fo_tag"><span class="c_green">■</span> Beginner Questions</a>
                                                <a href="{{route('forum-category-discussion')}}" class="la_title">
                                                    This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                </a>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea maiores quas vero tempora magni mollitia?
                                                </p>
                                                
                                                <div class="la_meta">                                                        
                                                    <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                                    <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                                    <div>
                                                        <span class="far fa-clock c_orange"></span>
                                                        <span>3hrs</span>
                                                    </div>
                                                </div>                                                       
                                            </div>
                                        </div>
                                        <div class="fo_la_to">
                                            <div>
                                                <div class="sign_user">
                                                    <a href="#" title="Corey Scott">
                                                        <span class="sign_user_img"><img src="{{asset('assets/site')}}/images/homepage/person-2.png" alt="img"></span>                            
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="fo_tag"><span class="c_orange">■</span> Trading Discussion</a>
                                                <a href="forum-category-discussion.html" class="la_title">
                                                    Welcome to The Forex Shikhun. Forex Trading Forum!
                                                </a>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea maiores quas vero tempora magni mollitia?
                                                </p>
                                                <div class="la_meta">                                                           
                                                    <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                                    <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                                    <div>
                                                        <span class="far fa-clock c_orange"></span>
                                                        <span>6hrs</span>
                                                    </div>
                                                </div>
                                            </div>                             
                                        </div>
                                        <div class="fo_la_to">
                                            <div>
                                                <div class="sign_user">
                                                    <a href="#" title="Corey Scott">
                                                        <span class="sign_user_img"><img src="{{asset('assets/site')}}/images/homepage/person-3.jpg" alt="img"></span>                            
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="fo_tag"><span class="c_violet">■</span> Trading System</a>
                                                <a href="forum-category-discussion.html" class="la_title">
                                                    This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                </a>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea maiores quas vero tempora magni mollitia?
                                                </p>
                                                <div class="la_meta">                                                           
                                                    <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                                    <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                                    <div>
                                                        <span class="far fa-clock c_orange"></span>
                                                        <span>3hrs</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fo_la_to">
                                            <div>
                                                <div class="sign_user">
                                                    <a href="#" title="Corey Scott">
                                                        <span class="sign_user_img"><img src="{{asset('assets/site')}}/images/homepage/me.png" alt="img"></span>                            
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="fo_tag"><span class="c_blue">■</span> Global Market</a>
                                                <a href="forum-category-discussion.html" class="la_title">
                                                    This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                </a>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea maiores quas vero tempora magni mollitia?
                                                </p>
                                                <div class="la_meta">                                                          
                                                    <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                                    <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                                    <div>
                                                        <span class="far fa-clock c_orange"></span>
                                                        <span>3hrs</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cat_3" role="tabpanel" aria-labelledby="cat_3-tab">
                            <div class="fo_recent">
                                <div class="fo_re_main">
                                    <div class="fo_re_head fo_cat_top">
                                        <h3><span class="border_o">Candlesticks, Chart Patterns, and Price Action</span><span class="far fa-clock c_orange"></span></h3>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime deleniti, accusamus molestias qui veritatis quibusdam hic quisquam ab quo! Id.</p>
                                        <div class="topic_path"><span class="to_ma">Beginner Questions</span><span class="fas fa-angle-right tp_i"></span><span class="to_ma_cat">Candlesticks, Chart Patterns, and Price Action</span></div>
                                    </div>
                                    <div class="fo_la_dis">
                                        <div class="fo_la_to">
                                            <div>
                                                <div class="sign_user">
                                                    <a href="#" title="Corey Scott">
                                                        <span class="sign_user_img"><img src="{{asset('assets/site')}}/images/homepage/me.png" alt="img"></span>                            
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="fo_tag"><span class="c_blue">■</span> Global Market</a>
                                                <a href="forum-category-discussion.html" class="la_title">
                                                    This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                </a>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea maiores quas vero tempora magni mollitia?
                                                </p>
                                                <div class="la_meta">                                                          
                                                    <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                                    <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                                    <div>
                                                        <span class="far fa-clock c_orange"></span>
                                                        <span>3hrs</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="fo_la_to">
                                            <div>
                                                <div class="sign_user">
                                                    <a href="#" title="Corey Scott">
                                                        <span class="sign_user_img"><img src="{{asset('assets/site')}}/images/homepage/person-3.jpg" alt="img"></span>                            
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="fo_tag"><span class="c_violet">■</span> Trading System</a>
                                                <a href="forum-category-discussion.html" class="la_title">
                                                    This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                </a>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea maiores quas vero tempora magni mollitia?
                                                </p>
                                                <div class="la_meta">                                                           
                                                    <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                                    <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                                    <div>
                                                        <span class="far fa-clock c_orange"></span>
                                                        <span>3hrs</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="fo_la_to">
                                            <div>
                                                <div class="sign_user">
                                                    <a href="#" title="Corey Scott">
                                                        <span class="sign_user_img"><img src="{{asset('assets/site')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="fo_tag"><span class="c_green">■</span> Beginner Questions</a>
                                                <a href="forum-category-discussion.html" class="la_title">
                                                    This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                </a>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea maiores quas vero tempora magni mollitia?
                                                </p>
                                                
                                                <div class="la_meta">                                                        
                                                    <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                                    <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                                    <div>
                                                        <span class="far fa-clock c_orange"></span>
                                                        <span>3hrs</span>
                                                    </div>
                                                </div>                                                       
                                            </div>
                                        </div>
                                        <div class="fo_la_to">
                                            <div>
                                                <div class="sign_user">
                                                    <a href="#" title="Corey Scott">
                                                        <span class="sign_user_img"><img src="{{asset('assets/site')}}/images/homepage/person-2.png" alt="img"></span>                            
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="fo_tag"><span class="c_orange">■</span> Trading Discussion</a>
                                                <a href="forum-category-discussion.html" class="la_title">
                                                    Welcome to The Forex Shikhun. Forex Trading Forum!
                                                </a>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea maiores quas vero tempora magni mollitia?
                                                </p>
                                                <div class="la_meta">                                                           
                                                    <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                                    <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                                    <div>
                                                        <span class="far fa-clock c_orange"></span>
                                                        <span>6hrs</span>
                                                    </div>
                                                </div>
                                            </div>                             
                                        </div>                                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cat_4" role="tabpanel" aria-labelledby="cat_4-tab">
                            <div class="fo_top">
                                <div class="fo_to_main">
                                    <div class="fo_to_head fo_cat_top">
                                        <h3><span class="border_g">Candlesticks, Chart Patterns, and Price Action</span><span class="far fa-star c_green"></span></h3>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime deleniti, accusamus molestias qui veritatis quibusdam hic quisquam ab quo! Id.</p>
                                        <div class="topic_path"><span class="to_ma">Beginner Questions</span><span class="fas fa-angle-right tp_i"></span><span class="to_ma_cat">Candlesticks, Chart Patterns, and Price Action</span></div>
                                    </div>
                                    <div class="fo_la_dis">
                                        <div class="fo_la_to">
                                            <div>
                                                <div class="sign_user">
                                                    <a href="#" title="Corey Scott">
                                                        <span class="sign_user_img"><img src="{{asset('assets/site')}}/images/homepage/person-2.png" alt="img"></span>                            
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="fo_tag"><span class="c_orange">■</span> Trading Discussion</a>
                                                <a href="forum-category-discussion.html" class="la_title">
                                                    Welcome to The Forex Shikhun. Forex Trading Forum!
                                                </a>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea maiores quas vero tempora magni mollitia?
                                                </p>
                                                <div class="la_meta">                                                           
                                                    <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                                    <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                                    <div>
                                                        <span class="far fa-clock c_orange"></span>
                                                        <span>6hrs</span>
                                                    </div>
                                                </div>
                                            </div>                             
                                        </div>
                                        <div class="fo_la_to">
                                            <div>
                                                <div class="sign_user">
                                                    <a href="#" title="Corey Scott">
                                                        <span class="sign_user_img"><img src="{{asset('assets/site')}}/images/homepage/person-3.jpg" alt="img"></span>                            
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="fo_tag"><span class="c_violet">■</span> Trading System</a>
                                                <a href="forum-category-discussion.html" class="la_title">
                                                    This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                </a>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea maiores quas vero tempora magni mollitia?
                                                </p>
                                                <div class="la_meta">                                                           
                                                    <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                                    <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                                    <div>
                                                        <span class="far fa-clock c_orange"></span>
                                                        <span>3hrs</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fo_la_to">
                                            <div>
                                                <div class="sign_user">
                                                    <a href="#" title="Corey Scott">
                                                        <span class="sign_user_img"><img src="{{asset('assets/site')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="fo_tag"><span class="c_green">■</span> Beginner Questions</a>
                                                <a href="forum-category-discussion.html" class="la_title">
                                                    This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                </a>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea maiores quas vero tempora magni mollitia?
                                                </p>
                                                
                                                <div class="la_meta">                                                        
                                                    <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                                    <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                                    <div>
                                                        <span class="far fa-clock c_orange"></span>
                                                        <span>3hrs</span>
                                                    </div>
                                                </div>                                                       
                                            </div>
                                        </div>                                                                                              
                                        <div class="fo_la_to">
                                            <div>
                                                <div class="sign_user">
                                                    <a href="#" title="Corey Scott">
                                                        <span class="sign_user_img"><img src="{{asset('assets/site')}}/images/homepage/me.png" alt="img"></span>                            
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="fo_tag"><span class="c_blue">■</span> Global Market</a>
                                                <a href="forum-category-discussion.html" class="la_title">
                                                    This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                </a>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea maiores quas vero tempora magni mollitia?
                                                </p>
                                                <div class="la_meta">                                                          
                                                    <div><span class="far fa-eye ft_eye"></span> <span>10k</span></div>
                                                    <div><a href="#" title="Reply"><span class="fas fa-reply-all ft_reply"></span> <span>0.5k</span></a></div>
                                                    <div>
                                                        <span class="far fa-clock c_orange"></span>
                                                        <span>3hrs</span>
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
 