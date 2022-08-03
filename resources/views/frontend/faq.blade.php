@extends('layouts.frontend')
@section('content')


   <section class="sec_faq sec_default spt_cust">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="sec_heading"><span class="sec_hed_span">FAQ's</span></h1>
                </div>
                <div class="col-lg-12">
                  
                    <h3 class="faq_item_header"></h3>
                  
                    <div class="accordion">   
                       
                        <div class="accordion-item">
                            
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#item_1" aria-expanded="true" aria-controls="item_1">
                                    <span class="acc_it_he">{{ $faqs->question }}</span>
                                </button>
                            </h2>
                            <div id="item_1" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the though the transition does limit overflow.                                
                                </div>
                            </div>
                        </div>
                      
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item_2" aria-expanded="false" aria-controls="item_2">
                                    <span class="acc_it_he"> I want to learn forex. How do I get started?</span>
                                </button>
                            </h2>
                            <div id="item_2" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item_3" aria-expanded="false"
                                    aria-controls="item_3">
                                    <span class="acc_it_he">How do I join the forexshikhun community?</span>
                                </button>
                            </h2>
                            <div id="item_3" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item_4" aria-expanded="false"
                                    aria-controls="item_4">
                                    <span class="acc_it_he">Do I need an account to use forexshikhun.com?</span>
                                </button>
                            </h2>
                            <div id="item_4" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the though the transition does limit overflow.
                                    It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>               
            </div>
        </div>
        <div class="article_shapes">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-1.png" alt="image" class="art_shp_1">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-2.png" alt="image" class="art_shp_2">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-3.png" alt="image" class="art_shp_3">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-4.png" alt="image" class="art_shp_4">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-5.png" alt="image" class="art_shp_5">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-6.png" alt="image" class="art_shp_6">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-2.png" alt="image" class="art_shp_7">
            <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-3.png" alt="image" class="art_shp_8">
        </div>
   </section>


   <section class="sec_faq sec_default spt_cust">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="faq_item_header">General Trading Questions</h3>
                <div class="accordion">                      
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#item_5" aria-expanded="true" aria-controls="item_5">
                                <span class="acc_it_he ">What is forex trading?</span>
                            </button>
                        </h2>
                        <div id="item_5" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                It is shown by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and
                                hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                our default variables. It's also worth noting that just about any HTML can go within
                                the though the transition does limit overflow.                                
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item_6" aria-expanded="false" aria-controls="item_6">
                                <span class="acc_it_he "> What are currency pairs?</span>
                            </button>
                        </h2>
                        <div id="item_6" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and
                                hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                our default variables. It's also worth noting that just about any HTML can go within
                                the though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item_7" aria-expanded="false"
                                aria-controls="item_7">
                                <span class="acc_it_he">What are major pairs?</span>
                            </button>
                        </h2>
                        <div id="item_7" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and
                                hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                our default variables. It's also worth noting that just about any HTML can go within
                                the though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item_8" aria-expanded="false"
                                aria-controls="item_8">
                                <span class="acc_it_he">What are major pairs?</span>
                            </button>
                        </h2>
                        <div id="item_8" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and
                                hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                our default variables. It's also worth noting that just about any HTML can go within
                                the though the transition does limit overflow.
                                It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and
                                hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                our default variables. It's also worth noting that just about any HTML can go within
                                the though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>               
        </div>
    </div>
    <div class="article_shapes">
        <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-1.png" alt="image" class="art_shp_1">
        <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-2.png" alt="image" class="art_shp_2">
        <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-3.png" alt="image" class="art_shp_3">
        <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-4.png" alt="image" class="art_shp_4">
        <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-5.png" alt="image" class="art_shp_5">
        <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-6.png" alt="image" class="art_shp_6">
        <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-2.png" alt="image" class="art_shp_7">
        <img src="{{asset('assets/frontend')}}/images/homepage/de-shape-3.png" alt="image" class="art_shp_8">
    </div>
   </section>


   <section class="sec_faq spt_cust">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-dismissible fade show" role="alert">
                    If you don't any of your answer then you can <a href="contact.html" class="no_vi_ac"> contact us.</a>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
   </section> 
@endsection

  