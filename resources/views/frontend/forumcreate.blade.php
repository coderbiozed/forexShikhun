@extends('layouts.frontend')
@section('content')


    <section class="sec_forum spt_cust sec_default">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="sec_heading">Create a new post</h1>
                        <div class="cat_easy_acc">
                            <div class="acc_items nav nav-pills" id="v-pills-tab">                           
                                <div class="nav-link active" id="cat_1-tab" data-bs-toggle="pill" data-bs-target="#cat_1" role="tab" aria-controls="cat_1" aria-selected="true">
                                    <div class="acc_item">
                                        <a href="#" class="acc_it_a active"><span class="fas fa-th-list me-2 c_blue"></span><span> <label for="cat" class="acc_item"> Categories</label>  </span></a>
                                                                     
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
                                    <span class="fo_na_se">
                                        <i class="fas fa-search c_blue"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="cat_se_ad">
                               
                                <div class="fo_acc_search">
                                    <form class="fo_acc_form">
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                        <button type="submit"><i class="fas fa-search c_blue"></i></button>
                                    </form>
                                </div>
                            </div>                                          
                        </div>
                        <div class="tab-pane fade show active" id="cat_1" role="tabpanel" aria-labelledby="cat_1-tab">
                            <div class="fo_categories">
                                <div class="row">
                                    <div class="col-lg-7 col-xl-8">
                                       <!-- Create the editor container -->
                                       <div class="edit_aria">
                                        <div id="editor">
                                            <p>This is some sample content.</p>
                                        </div>
                                       </div>
                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#editor' ) )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>
                                        <div class="topic_submit-area d-flex gap-3">
                                            <div class="cust_btn mt-2">
                                                <i class="fas fa-plus"></i>  <span>Create topic</span>    
                                            </div>
                                            <div class="cust_btn mt-2 cancel_btn">
                                               <span> <a href="">Cancel</a></span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="col-lg-5 col-xl-4">
                                        <div class="fo_side">
                                            <div class="fo_side_bar_head">
                                                <h3><span class="border_b">Latest Discussion</span><span class="fo_top_ico fas fa-comments c_blue"></span></h3>
                                            </div>
                                            <div class="fo_la_dis">
                                                <div class="fo_la_to">
                                                    <div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="la_title">
                                                            This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                        </a>
                                                        <div class="la_meta">
                                                            <a href="#"><span class="c_green">■</span> Beginner Questions</a>
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
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="la_title">
                                                            Welcome to The Forex Shikhun. Forex Trading Forum!
                                                        </a>
                                                        <div class="la_meta">
                                                            <a href="#"><span class="c_orange">■</span>Trading Discussion</a>
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
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="la_title">
                                                            This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                        </a>
                                                        <div class="la_meta">
                                                            <a href="#"><span class="c_violet">■</span> Trading System</a>
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
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="la_title">
                                                            This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                        </a>
                                                        <div class="la_meta">
                                                            <a href="#"><span class="c_blue">■</span> Global Market</a>
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
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="la_title">
                                                            Welcome to The Forex Shikhun. Forex Trading Forum!
                                                        </a>
                                                        <div class="la_meta">
                                                            <a href="#"><span class="c_orange">■</span>Trading Discussion</a>
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
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="la_title">
                                                            This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                        </a>
                                                        <div class="la_meta">
                                                            <a href="#"><span class="c_green">■</span> Beginner Questions</a>
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
        </div>
    </section>



    @endsection