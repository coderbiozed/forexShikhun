@extends('layouts.frontend')
@section('content')


<section class="sec_log_sign sec_default spt_cust">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h1 class="sec_heading">Change password?</h1>
            </div>
            <div class="col-lg-4 col-10">
                <div class="sign_login_main">
                    <form action="{{ route('updatepassword') }}" class="sign_form_main" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                @if (session('status'))                               
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status')}}
                                    </div>
                                @endif
                                @if (session('error'))                               
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error')}}
                                    </div>
                                @endif
                                <div class="form_group sign_fo_gr">
                                    <label for="name" class="c_m_label c_light_gray">Old Password</label>
                                    <div class="inp_gro">
                                        <div class="inp_gro_ico"><span class="fa-solid fa-lock c_green"></span></div>
                                        <input class="inp_gro_fo @error ('old_password') is invalid @enderror"   id="" placeholder="Old Password" name="old_password" type="password" >
                                    </div>
                                    @error ('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form_group sign_fo_gr">
                                    <label for="name" class="c_m_label c_light_gray">New Password</label>
                                    <div class="inp_gro">
                                        <div class="inp_gro_ico"><span class="fa-solid fa-lock"></span></div>
                                        <input class="inp_gro_fo @error ('new_password') is invalid @enderror" id="" placeholder="New Password" name="new_password" type="password">
                                    </div>
                                    @error ('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form_group sign_fo_gr">
                                    <label for="name" class="c_m_label c_light_gray">Confirm Password</label>
                                    <div class="inp_gro">
                                        <div class="inp_gro_ico"><span class="fa-solid fa-key"></span></div>
                                        <input class="inp_gro_fo @error ('old_password') is invalid @enderror" id="" placeholder="Confirm Password" name="new_password_confirmation" type="password">
                                    </div>
                                </div>
                            </div>    

                            <div class="col-12">
                                <div class="lo_si_btn">
                                    <button class="cust_btn sign_btn_main" type="submit">Reset</button> or <a href="{{route('member-profile')}}" class="c_blue">Back to Profile</a>
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

  