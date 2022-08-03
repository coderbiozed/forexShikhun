@extends('layouts.frontend')
@section('content')

<section class="sec_log_sign sec_default spt_cust">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h1 class="sec_heading">Signup</h1>
                </div>
                <div class="col-lg-8 col-10">
                    <div class="sign_login_main">               
                        <form method="post" action="{{ route('signup') }}"  class="sign_form_main">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form_group sign_fo_gr">
                                        <label for="name" class="c_m_label c_light_gray">Your Name</label>
                                        <div class="inp_gro">
                                            <div class="inp_gro_ico"><span class="far fa-user-circle c_orange"></span></div>
                                            <input class="inp_gro_fo" id="" placeholder="Bonnie Green" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_group sign_fo_gr">
                                        <label for="name" class="c_m_label c_light_gray">Your Nick-name</label>
                                        <div class="inp_gro">
                                            <div class="inp_gro_ico"><span class="far fa-user-circle c_violet"></span></div>
                                            <input class="inp_gro_fo" id="" placeholder="Bonnie Green" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_group sign_fo_gr">
                                        <label for="name" class="c_m_label c_light_gray">Your email</label>
                                        <div class="inp_gro">
                                            <div class="inp_gro_ico"><span class="far fa-envelope-open c_green"></span></div>
                                            <input class="inp_gro_fo" id="" placeholder="bonniegreen@gmail.com" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_group sign_fo_gr">
                                        <label for="location" class="c_m_label c_light_gray">Your Location</label>
                                        <div class="inp_gro">
                                            <div class="inp_gro_ico"><span class="fas fa-map-marker-alt c_blue"></span></div>
                                            <input class="inp_gro_fo" id="" placeholder="Bonnie Green" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_group sign_fo_gr">
                                        <label for="password" class="c_m_label c_light_gray">Password</label>
                                        <div class="inp_gro">
                                            <div class="inp_gro_ico"><span class="fas fa-unlock c_li"></span></div>
                                            <input class="inp_gro_fo" id="" placeholder="Bonnie Green" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_group sign_fo_gr">
                                        <label for="confirm-password" class="c_m_label c_light_gray">Confirm Password</label>
                                        <div class="inp_gro">
                                            <div class="inp_gro_ico"><span class="fas fa-lock c_li"></span></div>
                                            <input class="inp_gro_fo" id="" placeholder="Bonnie Green" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="profile-picture" class="c_m_label c_light_gray">Profile Picture</label>
                                    <div class="log_img">
                                        <a href="#" class="cust_btn">Choose</a>                                       
                                        <div class="sign_user">
                                            <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/log_user.png" alt="img"></span> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="profile-picture" class="c_m_label c_light_gray">About Yourself</label>
                                    <div class="log_abo">
                                        <textarea name="" id="" class="log_txt_ar" rows="3"></textarea>
                                    </div>                                   
                                </div>
                                <div class="col-12">
                                    <div class="lo_si_btn">
                                        <button class="cust_btn sign_btn_main">Signup</button> or <a href="{{route('login')}}" class="c_blue">Login</a>
                                    </div>                                  
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </section>

@endsection


 



   