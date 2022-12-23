
@extends('layouts.frontend')
@section('content')
   <section class="sec_log_sign sec_default spt_cust">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h1 class="sec_heading">A code sent to your mail!</h1>
                </div>
                <div class="col-lg-4 col-10">
                    <div class="sign_login_main">
                        <form action="#" class="sign_form_main">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form_group sign_fo_gr">
                                        <label for="name" class="c_m_label c_light_gray">Enter your code</label>
                                        <div class="inp_gro">
                                            <div class="inp_gro_ico"><span class="fas fa-code c_orange"></span></div>
                                            <input class="inp_gro_fo" id="" placeholder="code" type="text">
                                        </div>
                                    </div>
                                </div>                              
                                <div class="col-12">
                                    <div class="lo_si_btn">
                                        <button class="cust_btn sign_btn_main">Next</button>
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