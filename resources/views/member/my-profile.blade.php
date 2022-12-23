
@extends('layouts.frontend')
@section('content')

@php $member = DB::table('member')->first(); @endphp
    <section class="my_pro_dash_sec spt_cust sec_default">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="my_pro_dash">
                        <div class="my_pro_det">
                            <div class="my_pro_lm">
                                <div class="my_pro_img">
                                    <span class="my_pro_i_inn">
                                       
                                        <img src="images/alluser/<?=json_decode((Auth::guard('member'))->user()->image)[0]?>"  alt="img">
                                       
                                    </span>
                                </div>
                                <div class="m_p_lo">
                                    <span class="fas fa-map-marker-alt c_blue"></span><span>Khulna, Bangladesh</span>
                                </div>
                                <div class="m_p_lo">
                                    <span>Joined :</span><span class="c_blue">
                                        {{-- {{ (Auth::guard('member'))->user()->created_at->format('d/m/y')}} --}}
                                        {{-- {{\Carbon\Carbon::parse((Auth::guard('member'))->user()->created_at)->diffForHumans()}} --}}
                                    </span>
                                </div>
                                <div class="m_p_lo">
                                    <span>Status :</span><span class="c_blue" role="">active</span>
                                </div>
                                <div class="m_p_lo">
                                    <div class="cust_btn">
                                        <form action="">
                                            @csrf
                                            <span class="fas fa-sign-out-alt "></span><span class="u_p"> <a href="{{ url('member-logout')}}">
                                                Logout
                                            </a> </span>
                                       </form>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="my_pro_meta">
                                <div>
                                   @if (Auth::guard('member'))
                                    <h4><span>{{ (Auth::guard('member'))->user()->name}} </span><span class="c_blue n_d">||</span><span class="my_pro_nic"><span>@</span>{{ (Auth::guard('member'))->user()->username}}  </span></h4>
                                    <p>{{ (Auth::guard('member'))->user()->about}} 
                                    </p>  
                                    @endif                              
                                </div>
                                <div class="m_p_meta_bo">                                   
                                    <div class="m_p_bm_inn">
                                        <p>Total Posts: <span class="c_blue">0</span></p>                                      
                                    </div>
                                    <div class="m_p_bm_inn">
                                        <p>Posts Likes: <span class="c_blue">0</span></p>
                                    </div>
                                    <div class="m_p_bm_inn">
                                        <p>Profile Views: <span class="c_blue">0</span></p>
                                    </div>
                                    <div class="m_p_bm_inn">
                                        <p>Title: <span class="c_blue">{{(Auth::guard('member')->user()->user_title)}}</span></p>
                                    </div> 
                                    <div class="cust_btn">
                                        <span class="fa-solid fa-key">
                                        </span><span class="u_p"> 
                                        <a href="{{route('changepassword')}}">Change password</a>                                    
                                        </span>
                                    </div> 
                                    {{-- <div class="m_p_bm_inn pro_sc_plats">
                                        <p><a href="#" class="pro_sc_plat" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></p>
                                        <p><a href="#" class="pro_sc_plat" target="_blank" title="Linked-in"><i class="fab fa-linkedin-in"></i></a></p>
                                        <p><a href="#" class="pro_sc_plat" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></p>
                                        <p><a href="#" class="pro_sc_plat" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></p>
                                    </div>  --}}
                                </div>                               
                                <div class="my_pro_top_act">
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
                                </div>
                                <div class="my_pro_lm">
                                    
                                        
                                   
                                    
                                </div>
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
                                        <div class="nav-link cust_btn active" id="pro_pre-tab" data-bs-toggle="pill" data-bs-target="#pro_pre" role="tab" aria-controls="pro_pre" aria-selected="false">
                                            <span class="fa-solid fa-gears c_blue me-2"></span><span>Preferences</span>
                                        </div>
                                        <div class="nav-link cust_btn" id="pro_act-tab" data-bs-toggle="pill" data-bs-target="#pro_act" role="tab" aria-controls="pro_act" aria-selected="false">
                                            <span class="fa-solid fa-chart-line c_green me-2"></span><span>Activities</span>
                                        </div>
                                        <div class="nav-link cust_btn" id="pro_sum-tab" data-bs-toggle="pill" data-bs-target="#pro_sum" role="tab" aria-controls="pro_sum" aria-selected="false">
                                            <span class="fa-solid fa-chart-pie me-2 c_violet"></span><span>Summary</span>
                                        </div>
                                        <div class="nav-link cust_btn" id="pro_noti-tab" data-bs-toggle="pill" data-bs-target="#pro_noti" role="tab" aria-controls="pro_noti" aria-selected="false">
                                            <span class="fa-solid fa-bell me-2 c_light_gray"></span><span>Notification</span>
                                        </div>
                                        <div class="nav-link cust_btn" id="pro_fol-tab" data-bs-toggle="pill" data-bs-target="#pro_fol" role="tab" aria-controls="pro_fol" aria-selected="false">
                                            <span class="fa-solid fa-users-gear me-2 c_orange"></span><span>Follows</span>
                                        </div>                                  
                                    </div>
                                </div>                                                   
                            </div>
                            <div class="my_pro_act_tabs">
                                <div class="tab-content" id="v-pills-tabContent">                        
                                    <div class="tab-pane fade show active" id="pro_pre" role="tabpanel" aria-labelledby="pro_pre-tab">
                                        <div class="my_prof_items">
                                           
                                            <form action="{{ route('updatePreferences') }}" class="my_pro_it_fo" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @if (Auth::guard('member'))
                                                @if (session('status'))                               
                                                        <div class="alert alert-success" role="alert">
                                                            {{ session('status')}}
                                                        </div>
                                                     @endif
                                                <div class="row">                                                   
                                                    <div class="col-md-6">
                                                        <div class="my_pro_item">
                                                            <div class="my_pr_it_ti">
                                                                <h4>Name</h4>
                                                                <div class="cust_btn"><i class="fa-solid fa-user-pen c_blue"></i></div>                                                       
                                                            </div>                                                 
                                                            <input type="text" name="name" value='{{(Auth::guard('member')->user()->name)}}'>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="my_pro_item">
                                                            <div class="my_pr_it_ti">
                                                                <h4>Username</h4>
                                                                <div class="cust_btn"><i class="fa-solid fa-user-pen c_blue"></i></div>                                                       
                                                            </div>
                                                            <input type="text" placeholder="Unique User Name" name="username" value='{{(Auth::guard('member')->user()->username)}}'>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="my_pro_item">
                                                            <div class="my_pr_it_ti">
                                                                <h4>Email</h4>
                                                                <div class="cust_btn"><i class="fa-solid fa-user-pen c_blue"></i></div>                                                       
                                                            </div>                                                  
                                                            <input type="email" placeholder="email" name="email" value='{{(Auth::guard('member')->user()->email)}}' >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="my_pro_item">
                                                            <div class="my_pr_it_ti">
                                                                <h4>Location</h4>
                                                                <div class="cust_btn"><i class="fa-solid fa-user-pen c_blue"></i></div>                                                       
                                                            </div>                                                  
                                                            <input type="text"  name="location" value='{{(Auth::guard('member')->user()->location)}} '>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="my_pro_item">
                                                            <div class="my_pr_it_ti">
                                                                <h4>Linked-in</h4>
                                                                <div class="cust_btn"><i class="fa-solid fa-user-pen c_blue"></i></div>                                                       
                                                            </div>                                                  
                                                            <input type="text" name="linkedin" value='{{(Auth::guard('member')->user()->linkedin)}} '>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="my_pro_item">
                                                            <div class="my_pr_it_ti">
                                                                <h4>Twitter</h4>
                                                                <div class="cust_btn"><i class="fa-solid fa-user-pen c_blue"></i></div>                                                       
                                                            </div>                                                  
                                                            <input type="text" name="twitter" value='{{(Auth::guard('member')->user()->twitter)}} '>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="my_pro_item">
                                                            <div class="my_pr_it_ti">
                                                                <h4>Instagram</h4>
                                                                <div class="cust_btn"><i class="fa-solid fa-user-pen c_blue"></i></div>                                                       
                                                            </div>                                                  
                                                            <input type="text" name="instagram" value='{{(Auth::guard('member')->user()->instagram)}} '>
                                                        </div>
                                                    </div><div class="col-md-6">
                                                        <div class="my_pro_item">
                                                            <div class="my_pr_it_ti">
                                                                <h4>Facebook</h4>
                                                                <div class="cust_btn"><i class="fa-solid fa-user-pen c_blue"></i></div>                                                       
                                                            </div>                                                  
                                                            <input type="text" name="facebook" value='{{(Auth::guard('member')->user()->facebook)}} '>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-lg-6">
                                                        <div class="my_pro_item">
                                                            <div class="my_pr_it_ti">
                                                                <h4>Password</h4>
                                                                <a data-bs-toggle="collapse" href="#mp_con_pas" role="button" aria-expanded="false" aria-controls="mp_con_pas" value="{{(Auth::guard('member')->user()->password)}}">
                                                                    <div class="cust_btn"><i class="fa-solid fa-user-pen c_blue"></i></div>
                                                                </a>    
                                           
                                                            </div>                                                  
                                                            <div class="mp_pass_ins">
                                                                <div class="mp_h_s_pas">
                                                                    <input type="password" name="password" id="password"  class="from-control" value="{{(Auth::guard('member')->user()->password)}} "/>
                                                                    <div class="mpi">
                                                                    <i class="bi bi-eye-slash c_blue" id="togglePassword" type="button"></i>
                                                                </div>                                                           
                                                                    <script>
                                                                           const togglePassword = document.querySelector('#togglePassword');
                                                                            const password = document.querySelector('#password');togglePassword.addEventListener('click', function (e) {
                                                                                // toggle the type attribute
                                                                                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                                                                                password.setAttribute('type', type);
                                                                                // toggle the eye / eye slash icon
                                                                                this.classList.toggle('bi-eye');
                                                                            });
                                                                    </script>
                                                                                                
                                                                </div>                                                           
                                                               
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                    <div class="col-lg-12">
                                                        <div class="my_pro_item">
                                                            <div class="my_pr_it_ti">
                                                                <h4>Profile picture</h4>
                                                                <div class="sign_user mpi_c_mt">                                                              
                                                                    <a href="#" title="Corey Scott">
                                                                        <span class="sign_user_img"><img src="images/alluser/<?=json_decode((Auth::guard('member'))->user()->image)[0]?>"  alt="img"></span>                            
                                                                    </a> 
                                                                </div>                                                    
                                                            </div>
                                                            <div class="image_edit_icon" >
                                                                @if ($message = Session::get('success'))
                                                                    <div class="alert alert-success">
                                                                        <strong>{{ $message }}</strong>
                                                                    </div>
                                                                @endif
                                                    
                                                                @if (count($errors) > 0)
                                                                    <div class="alert alert-danger">
                                                                        <ul>
                                                                            @foreach ($errors->all() as $error)
                                                                            <li>{{ $error }}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                @endif
                                                    
                                                                <div class="user-image mb-3 text-center">
                                                                    <div class="imgPreview"> </div>
                                                                </div>            
                                                    
                                                                <div class="custom-file" id="allusers">
                                                                    <label class="custom-file-label" for="images">Choose image (Size: 100x100)</label>
                                                                    <input type="file" name="images[]" class="custom-file-input">
                                                                   
                                                                    <div class="cust_btn">
                                                                        <i class="fa-solid fa-user-pen c_blue"></i>
                                                                    </div> 
                                                                </div>
                                                            </div>                                                                       
                                                        </div>                                                    
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="my_pro_item">
                                                            <div class="my_pr_it_ti">
                                                                <h4>About me</h4>
                                                                <div class="cust_btn"><i class="fa-solid fa-user-pen c_blue"></i></div>                                                       
                                                            </div>
                                                         <p class="mpi_c_mt">Introducing yourself can be one of the interesting as well as the most tricky task in itself. We all are unique and writing about ourselves is an essential aspect to discover our qualities more reliably. Discovering our qualities helps us a lot to know about ourselves.
                                                            </p>
                                                            <textarea name="about" id="" class="mpi_c_mt" rows="3" value="">{{(Auth::guard('member')->user()->about)}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="cust_btn my_pro_ch_btn">
                                                    Save changes
                                                </button>
                                            </form>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pro_act" role="tabpanel" aria-labelledby="pro_act-tab">
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

                                    <div class="tab-pane fade" id="pro_noti" role="tabpanel" aria-labelledby="pro_noti-tab">
                                        <div class="my_pro_fol_main">
                                            <div class="nav nav-pills" id="v-pills-tab"
                                                    role="tablist" aria-orientation="vertical">
                                                    <button class="nav-link active cust_btn" id="v-pills-all-tab" data-bs-toggle="pill" data-bs-target="#v-pills-all" type="button" role="tab"  aria-controls="v-pills-all" aria-selected="true">All
                                                    </button>
                                                    <button class="nav-link cust_btn" id="v-pills-react-tab" data-bs-toggle="pill" data-bs-target="#v-pills-react" type="button" role="tab"    aria-controls="v-pills-react" aria-selected="false">Reacted
                                                    </button>
                                                    <button class="nav-link cust_btn" id="v-pills-rep-tab" data-bs-toggle="pill" data-bs-target="#v-pills-rep" type="button" role="tab" aria-controls="v-pills-rep" aria-selected="false">Replied
                                                    </button>
                                                    <button class="nav-link cust_btn" id="v-pills-mention-tab" data-bs-toggle="pill" data-bs-target="#v-pills-mention" type="button" role="tab"    aria-controls="v-pills-mention" aria-selected="false">Mentions
                                                    </button>
                                                    <button class="nav-link cust_btn" id="v-pills-activities-tab" data-bs-toggle="pill" data-bs-target="#v-pills-activities" type="button" role="tab" aria-controls="v-pills-activities" aria-selected="false">Activities
                                                    </button>
                                            </div>
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                                                    <div class="noti_al_it">
                                                        <div class="noti_it_ma">
                                                            <div class="pub_ow">
                                                                <a href="#">
                                                                    <div class="pub_img_inn">
                                                                         <span class="pub_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt="img"></span>
                                                                    </div>                                  
                                                                </a>
                                                                <span>Lewis Micah replied to your comment. <a href="" class="no_vi_ac">view</a></span>
                                                            </div>
                                                        </div>
                                                        <div class="noti_it_ma">
                                                            <div class="pub_ow">
                                                                <a href="#">
                                                                    <div class="pub_img_inn">
                                                                         <span class="pub_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt="img"></span>
                                                                    </div>                                  
                                                                </a>
                                                                <span>Corey Scott mentioned you in a comment. <a href="" class="no_vi_ac">view</a></span>
                                                            </div>
                                                        </div>
                                                        <div class="noti_it_ma">
                                                            <div class="pub_ow">
                                                                <a href="#">
                                                                    <div class="pub_img_inn">
                                                                         <span class="pub_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>
                                                                    </div>                                                                 
                                                                </a>
                                                                <span>Mark Kyle reacted to your post. <a href="" class="no_vi_ac">view</a></span>
                                                            </div>
                                                        </div>
                                                        <div class="noti_it_ma">
                                                            <div class="pub_ow">
                                                                <a href="#">
                                                                    <div class="pub_img_inn">
                                                                         <span class="pub_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt="img"></span>
                                                                    </div>                                                             
                                                                </a>
                                                                <span>Corey Scott commented on your post. <a href="" class="no_vi_ac">view</a></span>
                                                            </div>
                                                        </div>
                                                        <div class="noti_it_ma">
                                                            <div class="pub_ow">
                                                                <a href="#">
                                                                    <div class="pub_img_inn">
                                                                         <span class="pub_img"><img src="{{asset('assets/frontend')}}/images/homepage/fav.ico" alt="img"></span>
                                                                    </div>                                                                
                                                                </a>
                                                                <span>FS Bot welcomed you to <a href="index.html" class="no_vi_ac">Forex Shikhun</a> forum.</span>
                                                            </div>
                                                        </div>
                                                    </div>                                                   
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-react" role="tabpanel" aria-labelledby="v-pills-react-tab">
                                                    <div class="noti_al_it">                                                      
                                                        <div class="noti_it_ma">
                                                            <div class="pub_ow">
                                                                <a href="#">
                                                                    <div class="pub_img_inn">
                                                                         <span class="pub_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>
                                                                    </div>                                                                 
                                                                </a>
                                                                <span>Mark Kyle reacted to your post. <a href="" class="no_vi_ac">view</a></span>
                                                            </div>
                                                        </div>                                                      
                                                    </div> 
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-rep" role="tabpanel" aria-labelledby="v-pills-rep-tab">
                                                    <div class="noti_al_it">
                                                        <div class="noti_it_ma">
                                                            <div class="pub_ow">
                                                                <a href="#">
                                                                    <div class="pub_img_inn">
                                                                         <span class="pub_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt="img"></span>
                                                                    </div>                                  
                                                                </a>
                                                                <span>Lewis Micah replied to your comment. <a href="" class="no_vi_ac">view</a></span>
                                                            </div>
                                                        </div>                                                      
                                                    </div> 
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-mention" role="tabpanel" aria-labelledby="v-pills-mention-tab">
                                                    <div class="noti_al_it">                                                       
                                                        <div class="noti_it_ma">
                                                            <div class="pub_ow">
                                                                <a href="#">
                                                                    <div class="pub_img_inn">
                                                                         <span class="pub_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt="img"></span>
                                                                    </div>                                  
                                                                </a>
                                                                <span>Corey Scott mentioned you in a comment. <a href="" class="no_vi_ac">view</a></span>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-activities" role="tabpanel" aria-labelledby="v-pills-activities-tab">
                                                    <div class="noti_al_it">                                                       
                                                        <div class="noti_it_ma">
                                                            <div class="pub_ow">
                                                                <a href="#">
                                                                    <div class="pub_img_inn">
                                                                         <span class="pub_img"><img src="{{asset('assets/frontend')}}/images/homepage/fav.ico" alt="img"></span>
                                                                    </div>                                                                
                                                                </a>
                                                                <span>FS Bot welcomed you to <a href="index.html" class="no_vi_ac">Forex Shikhun</a> forum.</span>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pro_fol" role="tabpanel" aria-labelledby="pro_fol-tab">
                                        <div class="my_pro_fol_main">
                                            <div class="nav nav-pills" id="v-pills-tab"
                                                role="tablist" aria-orientation="vertical">
                                                <button class="nav-link active cust_btn" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab"  aria-controls="v-pills-home" aria-selected="true">News Feed
                                                </button>
                                                <button class="nav-link cust_btn" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab"    aria-controls="v-pills-profile" aria-selected="false">Followers
                                                </button>
                                                <button class="nav-link cust_btn" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Follwing
                                                </button>
                                            </div>
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
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
                                                                        <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt="img"></span>                            
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
                                                                        <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt="img"></span>                            
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
                                                                        <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
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

                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <div class="my_pro_fols">
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                    <div class="my_pro_fols">
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-2.png" alt="img"></span>                            
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


    <style>
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .imgPreview img {
            padding: 8px;
            max-width: 100px;
        } 
        .imgPreview-main img {
            padding: 8px;
            max-width: 100px;
        }
        .imgPreview-logo img {
            padding: 8px;
            max-width: 100px;
        }
        .imgPreview-banner img {
            padding: 8px;
            max-width: 100px;
        }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>

        $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#images').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
        $('#main_image').on('change', function() {
            multiImgPreview(this, 'div.imgPreview-main');
        });
        $('#logo_image').on('change', function() {
            multiImgPreview(this, 'div.imgPreview-logo');
        });
        $('#image').on('change', function() {
            multiImgPreview(this, 'div.imgPreview-banner');
        });
        });    
    </script>
    @endsection