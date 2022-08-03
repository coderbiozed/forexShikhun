@extends('layouts.frontend')    
@section('content')


    <section class="sec_contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="sec_heading">Contact us now!</h1>
                    <!-- <h1 class="s_cont_header">Contact us now!</h1>
                    <p class="s_cont_des">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam dolorum iste aut nesciunt ipsa, maiores, quaerat animi inventore dolorem numquam deserunt necessitatibus vel aspernatur recusandae?
                    </p> -->
                </div>
                <div class="col-lg-12">
                    <div class="row">                            
                        <div class="col-sm-6 col-lg-3 d-flex align-items-center flex-column">
                            <div class="cont_meta_info c_blue">
                                <span class="fas fa-map-marker-alt"></span>
                            </div>
                            <div class="cont_meta_info_bo">
                                <h5>Our address</h5>
                                <p>M A Bari St, Khulna 9100</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 d-flex align-items-center flex-column">
                            <div class="cont_meta_info">
                                <span class="fas fa-headphones-alt c_violet"></span>
                            </div>
                            <div class="cont_meta_info_bo">
                                <h5>Our number</h5>
                                <p>+123 549481578</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 d-flex align-items-center flex-column">
                            <div class="cont_meta_info">
                                <span class="far fa-paper-plane c_green"></span>
                            </div>
                            <div class="cont_meta_info_bo">
                                <h5>Our mail</h5>
                                <p>forexshikhun@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 d-flex align-items-center flex-column">
                            <div class="cont_meta_info">
                                <span class="far fa-clock c_orange"></span>
                            </div>
                            <div class="cont_meta_info_bo">
                                <h5>Office hour</h5>
                                <p>Mon - Fri, 9AM - 7PM</p>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-12">
                    <div class="cont_inner_main">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="c_sub_newsletter">
                                            <h4>Subscribe us!</h4>
                                            <form action="#" class="c_newsletter">
                                                <input type="text" placeholder="email">
                                                <button class="cust_btn">Suscribe</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="c_so">
                                            <h4>Contact on social!</h4>
                                            <div class="b_det_so">                    
                                                <a href="#" class="b_det_so_li" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#" class="b_det_so_li" title="Linked-in"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#" class="b_det_so_li" title="Twitter"><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="b_det_so_li" title="Instagram"><i class="fab fa-instagram"></i></a>
                                            </div> 
                                        </div> 
                                    </div>
                                </div> 
                            </div>
                            <div class="col-lg-6">                                                                                                                    
                                <div class="c_map">                                
                                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.950307946291!2d89.53877535898883!3d22.804305112702302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9aaa83158fe3%3A0xeb2d28b2fc31c5ae!2sSow%20Dream!5e0!3m2!1sen!2sbd!4v1650253368011!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>                                                              
                            </div>                        
                            <div class="col-lg-6">
                                <div class="cont_main">
                                    <form action="#" class="cont_main_fo">
                                        <div class="form_group">
                                            <label for="name" class="c_m_label c_blue">Your Name</label>
                                            <div class="inp_gro">
                                                <div class="inp_gro_ico"><span class="far fa-user-circle c_orange"></span></div>
                                                <input class="inp_gro_fo" id="" placeholder="Bonnie Green" type="text">
                                            </div>
                                        </div>
                                        <div class="form_group">
                                            <label for="name" class="c_m_label c_blue">Your phone</label>
                                            <div class="inp_gro">
                                                <div class="inp_gro_ico"><span class="fas fa-phone-alt c_violet"></span></div>
                                                <input class="inp_gro_fo" id="" placeholder="+123 978888812" type="text">
                                            </div>
                                        </div>
                                        <div class="form_group">
                                            <label for="name" class="c_m_label c_blue">Your email</label>
                                            <div class="inp_gro">
                                                <div class="inp_gro_ico"><span class="far fa-envelope-open c_green"></span></div>
                                                <input class="inp_gro_fo" id="" placeholder="bonniegreen@gmail.com" type="text">
                                            </div>
                                        </div>
                                        <div class="form_group">
                                            <label for="name" class="c_m_label c_blue">Your message</label>
                                            <div class="inp_gro">
                                                <textarea class="inp_gro_fo" placeholder="Enter your message..." id="" rows="5"></textarea>
                                            </div>                               
                                        </div>
                                        <div class="c_form_btn">
                                            <button class="cust_btn">Send message</button>
                                        </div>
                                    </form>                                 
                                </div>
                            </div>                                                                                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

@endsection