@extends('layouts.frontend')
@section('content')


    <section class="forum_dis_sec spt_cust sec_default">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="sec_heading">Our Forum</h1>
                </div>
                <div class="col-lg-8">
                    <div class="forum_dis_main">
                        <div class="f_pub">
                            <div class="b_det_pub">
                                <div class="pub_ow">
                                    <a href="#">
                                        <div class="pub_img_inn">
                                             <span class="pub_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>
                                        </div>                                  
                                        <span class="fo_pub_o_ti">Mahmud Shejan</span>                               
                                    </a>
                                </div>
                                <div class="pub_time">
                                     <span class="far fa-clock c_orange"></span>
                                     <span>3h</span>
                                </div>                         
                            </div>
                        </div>
                        <div class="fo_d_top">
                            <h4 class="fo_di_ti">This Week’s Question: Where are You in This Trader’s Journey Graph?</h4>
                            <div class="topic_path"><span class="to_ma">Beginner Questions</span><span class="fas fa-angle-right tp_i"></span><span class="to_ma_cat">Candlesticks, Chart Patterns, and Price Action</span></div>
                            <div class="b_meta_det f_d_meta">
                                <div class="b_meta"><span class="far fa-eye c_blue"></span><span>24.5k</span></div>
                                <div class="b_meta"><a><span class="far fa-heart c_pink f_c_li"></span><span>9.5k</span></a></div>
                                <div class="b_meta"><a href="#"><span class="far fa-comment c_dark_cy"></span><span>15 comments</span></a></div> 
                                <div class="b_meta"><a href="#"><span class="fas fa-share c_violet"></span><span>Share</span></a></div>                                                     
                            </div>
                        </div>
                        <div class="f_ac_topic">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab ad officiis aspernatur atque ea, modi ducimus veniam rem facere nostrum tempore, dolore inventore corporis esse consequuntur iure architecto asperiores dicta suscipit. Perferendis esse nostrum quidem repudiandae quod, error dignissimos nam. Laborum eos neque error aliquam, quidem nam maxime numquam? Voluptatum!</p>
                            <div><img src="{{asset('assets/frontend')}}/images/homepage/360_F.jpg" alt="" class="c_cont_imgs"></div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab ad officiis aspernatur atque ea, modi ducimus veniam rem facere nostrum tempore, dolore inventore corporis esse consequuntur iure architecto asperiores dicta suscipit. Perferendis esse nostrum quidem repudiandae quod, error dignissimos nam. Laborum eos neque error aliquam, quidem nam maxime numquam? Voluptatum!</p>
                        </div>  
                        <div class="f_ac_b_meta">
                            <div class="f_ac_b_ml">
                                <div class="f_ac_bl"><span class="heart"></span><span class="l_co">0</span></div>                           
                                <div class="f_ac_rep"><span class="fas fa-reply ft_reply"></span><span>reply</span></div>                                        
                                <div class="com_ep_main">
                                    <span class="fas fa-ellipsis-h c_blue tg_ep"></span>
                                    <div class="com_ep_main_cont">
                                        <div class="com_ep_main_inner">
                                            <p class="com_ep_main_it">Edit</p>
                                            <p class="com_ep_main_it">Delete</p>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <div class="f_ac_b_mr">                              
                                                              
                            </div>                                                                                                                      
                        </div>                                                                                                    
                    </div>

                    <div class="fo_ac_replies">
                        <div class="f_pub">
                            <div class="b_det_pub">
                                <div class="pub_ow f_pub_o">
                                    <a href="#">
                                        <div class="pub_img_inn">
                                             <span class="pub_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt="img"></span>
                                        </div>                                  
                                        <span class="fo_pub_o_ti"><span>Mark Kylee</span></span>                               
                                    </a>
                                    <span class="fas fa-angle-right tp_i"></span><span class="fo_pub_o_ti">Mahmud Shejan</span>
                                </div>
                                <div class="pub_time">
                                     <span class="far fa-clock c_orange"></span>
                                     <span>3h</span>
                                </div>                         
                            </div>
                        </div>
                        <div class="f_r_con">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, est sed voluptas consequatur laboriosam, molestias velit numquam vel aliquid incidunt illum expedita ducimus dolores illo atque beatae sapiente animi aliquam ex repellat quae! Perferendis fugiat earum asperiores maiores possimus fugit quas dolorum harum nam ea! Sit soluta tenetur dolore sequi.
                        </div>
                        <div class="f_ac_b_meta">
                            <div class="f_ac_b_ml">
                                <div class="f_ac_bl"><span class="heart"></span><span class="l_co">0</span></div>                           
                                <div class="f_ac_rep"><span class="fas fa-reply ft_reply"></span><span>reply</span></div>                                        
                                <div class="com_ep_main">
                                    <span class="fas fa-ellipsis-h c_blue"></span>
                                    <div class="com_ep_main_cont">
                                        <div class="com_ep_main_inner">
                                            <p class="com_ep_main_it">Report</p>
                                            <p class="com_ep_main_it">Delete</p>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <div class="f_ac_b_mr">
                                <a data-bs-toggle="collapse" href="#f_r_col" role="button" aria-expanded="false">
                                    <span class="fas fa-level-up-alt c_blue v_rep"></span><span class="c_blue">1</span> replies
                                </a>
                            </div>                                                                                              
                        </div>
                        <div class="collapse" id="f_r_col">
                            <div class="fo_ac_replies">
                                <div class="f_pub">
                                    <div class="b_det_pub">
                                        <div class="pub_ow f_pub_o">
                                            <a href="#">
                                                <div class="pub_img_inn">
                                                     <span class="pub_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>
                                                </div>                                  
                                                <span class="fo_pub_o_ti">Mark Kyle</span>                               
                                            </a>
                                            <span class="fas fa-angle-right tp_i"></span><span class="fo_pub_o_ti">Mahmud Shejan</span>
                                        </div>
                                        <div class="pub_time">
                                             <span class="far fa-clock c_orange"></span>
                                             <span>3h</span>
                                        </div>                         
                                    </div>
                                </div>
                                <div class="f_r_con">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, est sed voluptas consequatur laboriosam, molestias velit numquam vel aliquid incidunt illum expedita ducimus dolores illo atque beatae sapiente animi aliquam ex repellat quae! Perferendis fugiat earum asperiores maiores possimus fugit quas dolorum harum nam ea! Sit soluta tenetur dolore sequi.
                                </div>
                                <div class="f_ac_b_meta">
                                    <div class="f_ac_b_ml">
                                        <div class="f_ac_bl"><span class="heart"></span><span class="l_co">0</span></div>                           
                                        <div class="f_ac_rep"><span class="fas fa-reply ft_reply"></span><span>reply</span></div>                                        
                                        <div class="com_ep_main">
                                            <span class="fas fa-ellipsis-h c_blue"></span>
                                            <div class="com_ep_main_cont" style="display: none;">
                                                <div class="com_ep_main_inner">
                                                    <p class="com_ep_main_it">Report</p>
                                                    <p class="com_ep_main_it">Delete</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="f_ac_b_mr">
                                        <!-- <a href="" ><span class="fas fa-level-up-alt c_blue v_rep"></span><span class="c_blue">1</span> replies</a> -->
                                    </div>                                                                                              
                                </div>
                            </div> 
                        </div>
                    </div> 

                    <div class="fo_ac_replies">
                        <div class="f_pub">
                            <div class="b_det_pub">
                                <div class="pub_ow f_pub_o">
                                    <a href="#">
                                        <div class="pub_img_inn">
                                             <span class="pub_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>
                                        </div>                                  
                                        <span class="fo_pub_o_ti">Mark Kyle</span>                               
                                    </a>
                                    <span class="fas fa-angle-right tp_i"></span><span class="fo_pub_o_ti">Mahmud Shejan</span>
                                </div>
                                <div class="pub_time">
                                     <span class="far fa-clock c_orange"></span>
                                     <span>3h</span>
                                </div>                         
                            </div>
                        </div>
                        <div class="f_r_con">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, est sed voluptas consequatur laboriosam, molestias velit numquam vel aliquid incidunt illum expedita ducimus dolores illo atque beatae sapiente animi aliquam ex repellat quae! Perferendis fugiat earum asperiores maiores possimus fugit quas dolorum harum nam ea! Sit soluta tenetur dolore sequi.
                        </div>
                        <div class="f_ac_b_meta">
                            <div class="f_ac_b_ml">
                                <div class="f_ac_bl"><span class="heart"></span><span class="l_co">0</span></div>                           
                                <div class="f_ac_rep"><span class="fas fa-reply ft_reply"></span><span>reply</span></div>                                        
                                <a href="#" class=""><span class="fas fa-ellipsis-h c_blue"></span></a>
                            </div>  
                            <div class="f_ac_b_mr">
                                <!-- <a href="" ><span class="fas fa-level-up-alt c_blue v_rep"></span><span class="c_blue">1</span> replies</a> -->
                            </div>                                                                                              
                        </div>
                    </div>                   

                    <div class="fo_ac_replies">
                        <div class="f_pub">
                            <div class="b_det_pub">
                                <div class="pub_ow f_pub_o">
                                    <a href="#">
                                        <div class="pub_img_inn">
                                             <span class="pub_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt="img"></span>
                                        </div>                                  
                                        <span class="fo_pub_o_ti"><span>Mark Kyle</span></span>                               
                                    </a>
                                    <span class="fas fa-angle-right tp_i"></span><span class="fo_pub_o_ti">Mahmud Shejan</span>
                                </div>
                                <div class="pub_time">
                                     <span class="far fa-clock c_orange"></span>
                                     <span>3h</span>
                                </div>                         
                            </div>
                        </div>
                        <div class="f_r_con">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, est sed voluptas consequatur laboriosam, molestias velit numquam vel aliquid incidunt illum expedita ducimus dolores illo atque beatae sapiente animi aliquam ex repellat quae! Perferendis fugiat earum asperiores maiores possimus fugit quas dolorum harum nam ea! Sit soluta tenetur dolore sequi.
                        </div>
                        <div class="f_ac_b_meta">
                            <div class="f_ac_b_ml">
                                <div class="f_ac_bl"><span class="heart"></span><span class="l_co">0</span></div>                           
                                <div class="f_ac_rep"><span class="fas fa-reply ft_reply"></span><span>reply</span></div>                                        
                                <a href="#" class=""><span class="fas fa-ellipsis-h c_blue"></span></a>
                            </div>  
                            <div class="f_ac_b_mr">
                                <a data-bs-toggle="collapse" href="#f_r_col_1" role="button" aria-expanded="false">
                                    <span class="fas fa-level-up-alt c_blue v_rep"></span><span class="c_blue">1</span> replies
                                </a>
                            </div>                                                                                              
                        </div>
                        <div class="collapse" id="f_r_col_1">
                            <div class="fo_ac_replies">
                                <div class="f_pub">
                                    <div class="b_det_pub">
                                        <div class="pub_ow f_pub_o">
                                            <a href="#">
                                                <div class="pub_img_inn">
                                                     <span class="pub_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>
                                                </div>                                  
                                                <span class="fo_pub_o_ti">Mark Kyle</span>                               
                                            </a>
                                            <span class="fas fa-angle-right tp_i"></span><span class="fo_pub_o_ti">Mahmud Shejan</span>
                                        </div>
                                        <div class="pub_time">
                                             <span class="far fa-clock c_orange"></span>
                                             <span>3h</span>
                                        </div>                         
                                    </div>
                                </div>
                                <div class="f_r_con">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, est sed voluptas consequatur laboriosam, molestias velit numquam vel aliquid incidunt illum expedita ducimus dolores illo atque beatae sapiente animi aliquam ex repellat quae! Perferendis fugiat earum asperiores maiores possimus fugit quas dolorum harum nam ea! Sit soluta tenetur dolore sequi.
                                </div>
                                <div class="f_ac_b_meta">
                                    <div class="f_ac_b_ml">
                                        <div class="f_ac_bl"><span class="heart"></span><span class="l_co">0</span></div>                           
                                        <div class="f_ac_rep"><span class="fas fa-reply ft_reply"></span><span>reply</span></div>                                        
                                        <a href="#" class=""><span class="fas fa-ellipsis-h c_blue"></span></a>
                                    </div>  
                                    <div class="f_ac_b_mr">
                                        <!-- <a href="" ><span class="fas fa-level-up-alt c_blue v_rep"></span><span class="c_blue">1</span> replies</a> -->
                                    </div>                                                                                              
                                </div>
                            </div> 
                        </div>
                    </div> 

                    <div class="sum_field">
                        <div id="summernote"></div>
                        <script>
                            $('#summernote').summernote({
                                placeholder: 'your comment...',
                                // tabsize: 2,
                                height: 250,
                                toolbar: [
                                    ['style', ['style']],
                                    ['font', ['bold', 'underline', 'clear']],
                                    ['color', ['color']],
                                    ['para', ['ul', 'ol', 'paragraph']],
                                    ['table', ['table']],
                                    ['insert', ['link', 'picture', 'video']],
                                    ['view', ['fullscreen', 'codeview', 'help']]
                                ]
                            });
                        </script>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="forum_dis_main fo_dis_side">
                        <div class="fo_post_o">
                            <div class="f_p_o_img">
                                <span class="f_p_o_i_inn"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>
                           </div>
                           <h4 class="f_p_o_name">Mahmud Shejan</h4>
                           <span class="f_p_o_ti"><span class="c_blue">Senior</span></span>
                           <div class="f_p_o_meta">
                                <div class="f_p_o_m_in"><span>Posts:</span><span class="c_blue">578.</span></div>
                               <div class="f_p_o_m_in"><span>Joined:</span><span class="c_blue">23/02/2021.</span></div>
                               <div class="f_p_o_m_in"><span>Location:</span><span class="c_blue">Khulna, Bangladesh.</span></div>                                                                                       
                           </div>
                           <div class="f_p_o_btn">
                               <div class="cust_btn">
                                    Follow
                               </div>
                               <div class="cust_btn">
                                    Profile
                               </div>
                           </div>
                        </div>
                       
              

                        <h4 class="f_p_o_rp_title"><span class="c_blue">Mahmud's</span> Recent Posts</h4>
                        <div class="fo_post_o_rp">                           
                            <div class="f_p_o_r_posts">                             
                                <div class="f_p_o_r_p">
                                    <a href="#" class="la_title f_a_la_t">
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
    
                                <div class="f_p_o_r_p">
                                    <a href="#" class="la_title f_a_la_t">
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
    
                                <div class="f_p_o_r_p">
                                    <a href="#" class="la_title f_a_la_t">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection