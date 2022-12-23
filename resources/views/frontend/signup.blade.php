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
                        <form method="post" action="{{ route('signup') }}"  class="sign_form_main" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form_group sign_fo_gr">
                                        <label for="name" class="c_m_label c_light_gray">Name</label>
                                        <div class="inp_gro">
                                            <div class="inp_gro_ico"><span class="far fa-user-circle c_orange"></span></div>
                                            <input class="inp_gro_fo" id="" placeholder="Bonnie Green" type="text" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_group sign_fo_gr">
                                        <label for="name" class="c_m_label c_light_gray">User Name</label>
                                        <div class="inp_gro">
                                            <div class="inp_gro_ico"><span class="far fa-user-circle c_violet"></span></div>
                                            <input class="inp_gro_fo" id="" placeholder="@bonniegreen" type="text"  name="username">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_group sign_fo_gr">
                                        <label for="name" class="c_m_label c_light_gray">Your email</label>
                                        <div class="inp_gro">
                                            <div class="inp_gro_ico"><span class="far fa-envelope-open c_green"></span></div>
                                            <input class="inp_gro_fo" id="" placeholder="bonniegreen@gmail.com" type="text" name="email">
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form_group sign_fo_gr">
                                        <label for="location" class="c_m_label c_light_gray">Your Location</label>
                                        <div class="inp_gro">
                                            <div class="inp_gro_ico"><span class="fas fa-map-marker-alt c_blue"></span></div>
                                            <input class="inp_gro_fo" id="" placeholder="Bonnie Green" type="text" name="location">
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="form_group sign_fo_gr">
                                        <label for="password" class="c_m_label c_light_gray">Password</label>
                                        <div class="inp_gro">
                                            <div class="inp_gro_ico"><span class="fas fa-unlock c_li"></span></div>
                                            <input class="inp_gro_fo" id="" placeholder="password" type="password" name="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_group sign_fo_gr">
                                        <label for="confirm-password" class="c_m_label c_light_gray">Confirm Password</label>
                                        <div class="inp_gro">
                                            <div class="inp_gro_ico"><span class="fas fa-lock c_li"></span></div>
                                            <input class="inp_gro_fo" id="" placeholder="Bonnie Green" type="password" name="password">
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-12">
                                    <label for="profile-picture" class="c_m_label c_light_gray">Profile Picture</label>
                                    <div class="log_img">
                                 <a href="#" class="cust_btn">Choose</a>                                        
                                        <div class="sign_user">
                                            <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/log_user.png" alt="img"></span> 
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-lg-12">
                                    <div class="my_pro_item">
                                        <div class="my_pr_it_ti">
                                            <h4>Profile picture</h4>                                                    
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
                                 {{-- <div class="col-md-12">
                                    <label for="profile-picture" class="c_m_label c_light_gray">About Yourself</label>
                                    <div class="log_abo">
                                        <textarea name="" id="" class="log_txt_ar" rows="3" name="about"></textarea>
                                    </div>                                   
                                </div> --}}
                                <div class="col-12">
                                    <div class="lo_si_btn">
                                        <button class="cust_btn sign_btn_main" type="submit">Signup</button> or <a href="{{url('/member/login')}}" class="c_blue">Login</a>
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


 



   