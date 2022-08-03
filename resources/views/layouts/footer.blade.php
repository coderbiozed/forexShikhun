<section class="sec_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 footer_cust_mar">
                    <div class="footer_logo">
                        <a href="{{route('index')}}">
                            <img src="{{asset('assets/frontend/images/homepage/logo-2.png')}}" alt="">
                        </a>
                    </div>
                    <div class="footer_brand_des">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, cum illum. Nihil inventore totam ab laborum saepe atque architecto.</p>
                    </div>
                    <div class="footer_social">                    
                        <a href="#" class="footer_sc_links" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="footer_sc_links" title="Linked-in"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="footer_sc_links" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="footer_sc_links" title="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>  
                <div class="col-lg-3 col-md-6 col-sm-6 footer_cust_mar">
                    <div class="footer_header">
                        <h4>Get In Touch</h4>
                    </div>
                    <div class="in_touch_info">
                        <div>
                            <span><i class="fas fa-map-marker-alt c_blue"></i></span>
                            <span>M A Bari St, Khulna 9100</span>
                        </div>
                        <div>
                            <span><i class="fas fa-phone-alt c_violet"></i></span>
                            <span>+123 549481578</span>
                        </div>
                        <div>
                            <span><i class="far fa-envelope-open c_green"></i></span>
                            <span>forexshikhun@gmail.com</span>
                        </div>
                        <div>
                            <span><i class="far fa-clock c_orange"></i></span>
                            <span>Mon - Fri, 9AM - 7PM</span>
                        </div>
                    </div>
                </div>              
                <div class="col-lg-3 col-md-6 col-sm-6 footer_cust_mar">
                    <div class="footer_header">
                        <h4>Useful Links</h4>
                    </div>
                    <div class="useful_links">
                        <div class="ul_parent">
                            <a href="{{route('about')}}">
                                <span class="ul_arrow_1"><i class="fas fa-chevron-right c_blue"></i></span>
                                <span class="ul_text">About</span>
                            </a>
                        </div>
                        <div class="ul_parent">
                            <a href="{{route('contact')}}">
                                <span class="ul_arrow_1"><i class="fas fa-chevron-right c_violet"></i></span>
                                <span class="ul_text">Contact</span>
                            </a>
                        </div>
                        <div class="ul_parent">
                            <a href="{{route('calender')}}">
                                <span class="ul_arrow_1"><i class="fas fa-chevron-right c_green"></i></span>
                                <span class="ul_text">Calendar</span>
                            </a>
                        </div>
                        <div class="ul_parent">
                            <a href="{{route('faq')}}">
                                <span class="ul_arrow_1"><i class="fas fa-chevron-right c_orange"></i></span>
                                <span class="ul_text">FAQ's</span>
                            </a>
                        </div>
                    </div>                
                </div>               
                <div class="col-lg-3 col-md-6 col-sm-6 footer_cust_mar">
                    <div class="footer_header">
                        <h4>Recent Articles</h4>
                    </div>
                    <div class="footer_rec_arti">
                        @foreach($recentblog as $blog)
                        <a href="{{ URL::to ('blog/'.$blog->slug)}}">
                            <img src="{{ asset('images/' . json_decode($blog->image)[0]) }}" alt="">
                            <p> {!! Str::limit(strip_tags($blog->title), 18) !!}</p>
                        </a>
                        @endforeach                     
                    </div> 
                </div>                                                            
                <div class="col-12">
                    <hr class="ft_divider">
                    <div class="footer_header newsletter_hed">
                        <h4>Subscribe Our Newsletter !</h4>
                    </div>
                    <div class="newsletter_des">
                        <p>Reliable and in-depth trading courses, the latest market news- analysis, informative discussions & threads are just one step away! <br>

                           Subscribe to our newsletter and gain the UPPER hand. </p>
                    </div>
                    <div class="sub_newsletter">
                       
                        {!! Form::open(['route' => 'subscribes.store']) !!}

                         @csrf
                            <div class="sub_news_form">                          
                                <input type="text" placeholder="email" name="email">
                                {!! Form::submit('Subscribe', ['class' => 'cust_btn']) !!}                                               
                            </div>      

                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-12">
                    <div class="footer_copyright_sec">
                        <div class="footer_copyright">
                            <span><i class="far fa-copyright"></i></span>
                            <span><a href="{{route('index')}}" class="copy_link">Forex Shikhun.</a></span>
                            <span>All Rights Reserved</span>
                        </div>
                        <div class="footer_copy_useful_link">
                            <a href="{{route('terms')}}">Terms & Conditions</a>
                            <a href="help-support.html">Help & Support</a>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="article_shapes">
            <img src="{{asset('assets/frontend/images/homepage/de-shape-1.png')}}" alt="image" class="art_shp_1">
            <img src="{{asset('assets/frontend/images/homepage/de-shape-2.png')}}" alt="image" class="art_shp_2">
            <img src="{{asset('assets/frontend/images/homepage/de-shape-3.png')}}" alt="image" class="art_shp_3">
            <img src="{{asset('assets/frontend/images/homepage/de-shape-4.png')}}" alt="image" class="art_shp_4">
            <img src="{{asset('assets/frontend/images/homepage/de-shape-5.png')}}" alt="image" class="art_shp_5">
            <img src="{{asset('assets/frontend/images/homepage/de-shape-6.png')}}" alt="image" class="art_shp_6">
            <img src="{{asset('assets/frontend/images/homepage/de-shape-2.png')}}" alt="image" class="art_shp_7">
            <img src="{{asset('assets/frontend/images/homepage/de-shape-3.png')}}" alt="image" class="art_shp_8">
        </div>
    </section>




    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>   
     <script src="{{asset('assets/frontend/js/jquery.slim.min.js')}}"></script>
    <!-- jquery.simpleLoadMore.min  -->
    <script src="{{asset('assets/frontend/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.simpleLoadMore.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.mousewheel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>     
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>
    
    

    <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>
</body>

</html>