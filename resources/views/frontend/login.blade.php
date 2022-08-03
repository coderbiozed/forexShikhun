@extends('layouts.frontend')
@section('content')


   <section class="sec_log_sign sec_default spt_cust">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h1 class="sec_heading">Login</h1>
                </div>
                <div class="col-lg-4 col-10">
                    <div class="sign_login_main">
                        <form action="#" class="sign_form_main">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form_group sign_fo_gr">
                                        <label for="name" class="c_m_label c_light_gray">Username</label>
                                        <div class="inp_gro">
                                            <div class="inp_gro_ico"><span class="far fa-user-circle c_orange"></span></div>
                                            <input class="inp_gro_fo" id="" placeholder="name or email" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form_group sign_fo_gr">
                                        <label for="password" class="c_m_label c_light_gray">Password</label>
                                        <div class="inp_gro">
                                            <div class="inp_gro_ico"><span class="fas fa-lock c_li"></span></div>
                                            <input class="inp_gro_fo" id="" placeholder="password" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="lo_si_btn">
                                        <button class="cust_btn sign_btn_main">Login</button> or <a href="{{route('signup')}}" class="c_blue">Signup</a> / <a href="forgetpass.html" class="c_blue">Forgot password?</a>
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