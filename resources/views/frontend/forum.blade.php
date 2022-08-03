@extends('layouts.frontend')
@section('content')


    <section class="sec_forum spt_cust sec_default">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="sec_heading">Our Forum</h1>
                </div>
                <div class="col-lg-12">
                    <div class="cat_easy_acc">
                        <div class="acc_items nav nav-pills" id="v-pills-tab">                           
                            <div class="nav-link active" id="cat_1-tab" data-bs-toggle="pill" data-bs-target="#cat_1" role="tab" aria-controls="cat_1" aria-selected="true">
                                <div class="acc_item">
                                    <a href="" class="acc_it_a active"><span class="fas fa-th-list me-2 c_blue"></span><span>Categories</span></a>                               
                                </div>
                            </div>
                            <div class="nav-link " id="cat_2-tab" data-bs-toggle="pill" data-bs-target="#cat_2" role="tab" aria-controls="cat_2" aria-selected="false">
                                <div class="acc_item">
                                    <a href="#" class="acc_it_a"><span class="fa-solid fa-certificate me-2 c_violet"></span><span>New(25)</span></a>
                                </div>
                            </div>
                            <div class="nav-link" id="cat_3-tab" data-bs-toggle="pill" data-bs-target="#cat_3" role="tab" aria-controls="cat_3" aria-selected="false">
                                <div class="acc_item">
                                    <a href="#" class="acc_it_a"><span class="far fa-clock me-2 c_orange"></span><span>Recent(10)</span></a>
                                </div>
                            </div>
                            <div class="nav-link" id="cat_4-tab" data-bs-toggle="pill" data-bs-target="#cat_4" role="tab" aria-controls="cat_4" aria-selected="false">
                                <div class="acc_item">
                                    <a href="#" class="acc_it_a"><span class="far fa-star me-1 c_green"></span><span>Top</span></a>
                                </div>
                            </div>                                                                                                            
                        </div>
                        <div class="acc_items_sm">
                            <div class="ac_i_sm_nav">
                                <span class="fo_na_tr">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </span>
                                <span class="fo_na_se">
                                    <i class="fas fa-search c_blue"></i>
                                </span>
                            </div>
                        </div>
                        <div class="cat_se_ad">
                            <div class="add_cat">
                                <a href="#" title="Add New Topic"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="fo_acc_search">
                                <form class="fo_acc_form">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    <button type="submit"><i class="fas fa-search c_blue"></i></button>
                                </form>
                            </div>
                        </div>                                          
                    </div>
                    <div class="acc_items_sm">
                        <div class="acc_items nav nav-pills" id="v-pills-tab">
                            <div class="nav-link active" id="cat_1-tab" data-bs-toggle="pill" data-bs-target="#cat_1" role="tab" aria-controls="cat_1" aria-selected="true">
                                <div class="acc_item">
                                    <a href="#" class="acc_it_a active"><span class="fas fa-th-list me-2 c_blue"></span><span>Categories</span></a>                               
                                </div>
                            </div>
                            <div class="nav-link " id="cat_2-tab" data-bs-toggle="pill" data-bs-target="#cat_2" role="tab" aria-controls="cat_2" aria-selected="false">
                                <div class="acc_item">
                                    <a href="#" class="acc_it_a"><span class="fa-solid fa-certificate me-2 c_violet"></span><span>New(25)</span></a>
                                </div>
                            </div>
                            <div class="nav-link" id="cat_3-tab" data-bs-toggle="pill" data-bs-target="#cat_3" role="tab" aria-controls="cat_3" aria-selected="false">
                                <div class="acc_item">
                                    <a href="#" class="acc_it_a"><span class="far fa-clock me-2 c_orange"></span><span>Recent(10)</span></a>
                                </div>
                            </div>
                            <div class="nav-link" id="cat_4-tab" data-bs-toggle="pill" data-bs-target="#cat_4" role="tab" aria-controls="cat_4" aria-selected="false">
                                <div class="acc_item">
                                    <a href="#" class="acc_it_a"><span class="far fa-star me-1 c_green"></span><span>Top</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">                   
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="cat_1" role="tabpanel" aria-labelledby="cat_1-tab">
                            <div class="fo_categories">
                                <div class="row">
                                    <div class="col-lg-7 col-xl-8">
                                        <div class="fo_cat_main">
                                            <div class="fo_cat">
                                                <div class="fo_cat_top">
                                                    <h3><span class="border_g">Beginner Questions</span><span class="fo_top_ico fas fa-question c_green"></span></h3>
                                                    <p>This forum is for forex beginners. If you are new to forex and have a question, this
                                                        is the best place to ask it. If you're looking to learn forex, get your training and
                                                        education at <a href="course.html" class="c_blue">our courses.</a>.</p>
                                                    <div class="fo_top_meta">
                                                        <div><i class="fa-solid fa-certificate c_green"></i>6 new</div>
                                                        <div><i class="fa-solid fa-message c_green"></i>15/week</div>
                                                    </div>
                                                </div>
                                                <div class="fo_cat_bot">
                                                    <div class="fcb_it">
                                                        <a href="#" class="fw-bold"><span class="c_blue me-2">➤</span>Candlesticks, Chart Patterns, and Price Action</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="#" class="fw-bold"><span class="c_blue me-2">➤</span>Trading Psychology</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fo_cat_main">
                                            <div class="fo_cat">
                                                <div class="fo_cat_top">
                                                    <h3><span class="border_o">Trading Discussion</span><span class="fo_top_ico fas fa-comments c_orange"></span></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ea, nihil iusto dolore
                                                        dicta laborum eius maiores asperiores, totam similique tenetur voluptate vero amet
                                                        molestiae. Ipsum esse blanditiis incidunt deserunt!</p>
                                                    <div class="fo_top_meta">
                                                        <div><i class="fa-solid fa-certificate c_orange"></i>8 new</div>
                                                        <div><i class="fa-solid fa-message c_orange"></i>20/week</div>
                                                    </div>
                                                </div>
                                                <div class="fo_cat_bot">
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Currencies</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Economics</a>
                                                        </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Risk Management Practices</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Trade Journals</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Trading Lifestyle</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Binary Options</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fo_cat_main">
                                            <div class="fo_cat">
                                                <div class="fo_cat_top">
                                                    <h3><span class="border_v">Trading System</span><sapn class="fo_top_ico fas fa-solid fa-gears c_violet"></sapn></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ea, nihil iusto dolore
                                                        dicta laborum eius maiores asperiores, totam similique tenetur voluptate vero amet
                                                        molestiae. Ipsum esse blanditiis incidunt deserunt!</p>
                                                    <div class="fo_top_meta">
                                                        <div><i class="fa-solid fa-certificate c_violet"></i>8 new</div>
                                                        <div><i class="fa-solid fa-message c_violet"></i>20/week</div>
                                                    </div>
                                                </div>
                                                <div class="fo_cat_bot">
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Free Forex Trading Systems</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Expert Advisors and Automated Trading</a>
                                                    </div>                              
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fo_cat_main">
                                            <div class="fo_cat">
                                                <div class="fo_cat_top">
                                                    <h3><span class="border_dc">Community Features</span><span class="fo_top_ico fas fa-solid fa-face-smile c_dark_cy"></span></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ea, nihil iusto dolore
                                                        dicta laborum eius maiores asperiores, totam similique tenetur voluptate vero amet
                                                        molestiae. Ipsum esse blanditiis incidunt deserunt!</p>
                                                    <div class="fo_top_meta">
                                                        <div><i class="fa-solid fa-certificate c_dark_cy"></i>12 new</div>
                                                        <div><i class="fa-solid fa-message c_dark_cy"></i>25/week</div>
                                                    </div>
                                                </div>
                                                <div class="fo_cat_bot">
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Introduce Yourself</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Member Spotlight</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Trader Q&As</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>The Honorary Members’ Club</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Announcements</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Community Feedback</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Trader Meetups</a>
                                                    </div>                                 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fo_cat_main">
                                            <div class="fo_cat">
                                                <div class="fo_cat_top">
                                                    <h3><span class="border_lg">Broker Discussion</span><span class="fo_top_ico fas fa-comments c_light_gray"></span></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ea, nihil iusto dolore
                                                        dicta laborum eius maiores asperiores, totam similique tenetur voluptate vero amet
                                                        molestiae. Ipsum esse blanditiis incidunt deserunt!</p>
                                                    <div class="fo_top_meta">
                                                        <div><i class="fa-solid fa-certificate c_light_gray"></i>5 new</div>
                                                        <div><i class="fa-solid fa-message c_light_gray"></i>16/week</div>
                                                    </div>
                                                </div>
                                                <div class="fo_cat_bot">
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Forex Brokers</a>
                                                    </div>                             
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fo_cat_main">
                                            <div class="fo_cat">
                                                <div class="fo_cat_top">
                                                    <h3><span class="border_p">Trading Tech and Tools</span><span class="fo_top_ico fa-solid fa-chart-column c_pink"></span></h3>
                                                    <p>This is the place to discuss the many different trading platforms and software packages out there, as well as all the different tools used to make you better traders, like economic calendars, calculators, nerdy spreadsheets, special computer setups or sweet mobile apps.</p>
                                                    <div class="fo_top_meta">
                                                        <div><i class="fa-solid fa-certificate c_pink"></i>5 new</div>
                                                        <div><i class="fa-solid fa-message c_pink"></i>16/week</div>
                                                    </div>
                                                </div>
                                                <div class="fo_cat_bot">
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>MarketMilk</a>
                                                    </div>                             
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fo_cat_main">
                                            <div class="fo_cat">
                                                <div class="fo_cat_top">
                                                    <h3><span class="border_li">Cryptocurrencies and Discussion</span><span class="fo_top_ico fa-solid fa-bitcoin-sign c_li"></span></h3>
                                                    <p>This is the place to discuss the many different trading platforms and software packages out there, as well as all the different tools used to make you better traders, like economic calendars, calculators, nerdy spreadsheets, special computer setups or sweet mobile apps.</p>
                                                    <div class="fo_top_meta">
                                                        <div><i class="fa-solid fa-certificate c_li"></i>5 new</div>
                                                        <div><i class="fa-solid fa-message c_li"></i>16/week</div>
                                                    </div>
                                                </div>
                                                <div class="fo_cat_bot">
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Cryptocurrency In the News</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Bitcoin Discussion</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Altcoin Discussion</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Crypto Exchanges</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Crypto Gaming and NFTs</a>
                                                    </div>                              
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fo_cat_main">
                                            <div class="fo_cat">
                                                <div class="fo_cat_top">
                                                    <h3><span class="border_re">Commercial Content</span><span class="fo_top_ico fa-brands fa-creative-commons-share c_re"></span></h3>
                                                    <p>This is the place to discuss the many different trading platforms and software packages out there, as well as all the different tools used to make you better traders, like economic calendars, calculators, nerdy spreadsheets, special computer setups or sweet mobile apps.</p>
                                                    <div class="fo_top_meta">
                                                        <div><i class="fa-solid fa-certificate c_re"></i>5 new</div>
                                                        <div><i class="fa-solid fa-message c_re"></i>16/week</div>
                                                    </div>
                                                </div>
                                                <div class="fo_cat_bot">
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Press Release</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Broker Support</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Analysts</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Trading Signals</a>
                                                    </div> 
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Scam Stories</a>
                                                    </div>                          
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fo_cat_main">
                                            <div class="fo_cat">
                                                <div class="fo_cat_top">
                                                    <h3><span class="border_b">Global Market</span><span class="fo_top_ico fa-solid fa-earth-asia c_blue"></span></h3>
                                                    <p>This is the place to discuss the many different trading platforms and software packages out there, as well as all the different tools used to make you better traders, like economic calendars, calculators, nerdy spreadsheets, special computer setups or sweet mobile apps.</p>
                                                    <div class="fo_top_meta">
                                                        <div><i class="fa-solid fa-certificate c_blue"></i>5 new</div>
                                                        <div><i class="fa-solid fa-message c_blue"></i>16/week</div>
                                                    </div>
                                                </div>
                                                <div class="fo_cat_bot">
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Commodities Oil and Gold</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Stocks and Indexes</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Bonds and Interest Rates</a>
                                                    </div>                              
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fo_cat_main">
                                            <div class="fo_cat">
                                                <div class="fo_cat_top">
                                                    <h3><span class="border_pb">Free Discussion</span><span class="fo_top_ico fa-solid fa-arrow-right-to-bracket c_pg_book"></span></h3>
                                                    <p>This is the place to discuss the many different trading platforms and software packages out there, as well as all the different tools used to make you better traders, like economic calendars, calculators, nerdy spreadsheets, special computer setups or sweet mobile apps.</p>
                                                    <div class="fo_top_meta">
                                                        <div><i class="fa-solid fa-certificate c_pg_book"></i>5 new</div>
                                                        <div><i class="fa-solid fa-message c_pg_book"></i>16/week</div>
                                                    </div>
                                                </div>
                                                <div class="fo_cat_bot">
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Economy and politics</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Technology</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Show Business, Fashion, Star</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Sports</a>
                                                    </div>
                                                    <div class="fcb_it">
                                                        <a href="forum-category-details.html" class="fw-bold"><span class="c_blue me-2">➤</span>Hobbies</a>
                                                    </div>                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-xl-4">
                                        <div class="fo_side">
                                            <div class="fo_side_bar_head">
                                                <h3><span class="border_b">Latest Discussion</span><span class="fo_top_ico fas fa-comments c_blue"></span></h3>
                                            </div>
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
                                                        <a href="#" class="la_title">
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
                                                        <a href="#" class="la_title">
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
                                                        <a href="#" class="la_title">
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
                                                <div class="fo_la_to">
                                                    <div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="la_title">
                                                            This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                        </a>
                                                        <div class="la_meta">
                                                            <a href="#"><span class="c_blue">■</span> Global Market</a>
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
                                                        <a href="#" class="la_title">
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
                                                </div>
                                                <div class="fo_la_to">
                                                    <div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="la_title">
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
                                                        <a href="#" class="la_title">
                                                            Welcome to The Forex Shikhun. Forex Trading Forum!
                                                        </a>
                                                        <div class="la_meta">
                                                            <a href="#"><span class="c_violet">■</span> Trading System</a>
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
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="la_title">
                                                            This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                        </a>
                                                        <div class="la_meta">
                                                            <a href="#"><span class="c_blue">■</span> Global Market</a>
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
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="la_title">
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
                                                        <a href="#" class="la_title">
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
                                                        <a href="#" class="la_title">
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
                                                <div class="fo_la_to">
                                                    <div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="la_title">
                                                            This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                        </a>
                                                        <div class="la_meta">
                                                            <a href="#"><span class="c_blue">■</span> Global Market</a>
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
                                                        <a href="#" class="la_title">
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
                                                </div>
                                                <div class="fo_la_to">
                                                    <div>
                                                        <div class="sign_user">
                                                            <a href="#" title="Corey Scott">
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="la_title">
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
                                                        <a href="#" class="la_title">
                                                            Welcome to The Forex Shikhun. Forex Trading Forum!
                                                        </a>
                                                        <div class="la_meta">
                                                            <a href="#"><span class="c_violet">■</span> Trading System</a>
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
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/me.png" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="la_title">
                                                            This Week’s Question: Where are You in This Trader’s Journey Graph?
                                                        </a>
                                                        <div class="la_meta">
                                                            <a href="#"><span class="c_blue">■</span> Global Market</a>
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
                        </div>
                        <div class="tab-pane fade " id="cat_2" role="tabpanel" aria-labelledby="cat_2-tab">
                            <div class="fo_new">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="fo_new_main">
                                            <div class="fo_new_head fo_cat_top">
                                                <h3><span class="border_v">New Discussions</span><span class="fa-solid fa-certificate c_violet"></span></h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime deleniti, accusamus molestias qui veritatis quibusdam hic quisquam ab quo! Id.</p>
                                            </div>
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
                                                        <a href="#" class="la_title">
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
                                                        <a href="#" class="la_title">
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
                                                        <a href="#" class="la_title">
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
                                                        <a href="#" class="la_title">
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
                                    </div>
                                    <div class="col-lg-4 c_det_art_col">
                                        <div class="b_det_main b_det_main_sticky">                       
                                             <div class="b_det_si_sc">
                                                     <div>
                                                         <h3>Get news on social media!</h3>
                                                         <p>Read our latest news on any of these social networks!</p>
                                                     </div>
                                                     <div class="b_det_so">                    
                                                         <a href="#" class="b_det_so_li" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                         <a href="#" class="b_det_so_li" title="Linked-in"><i class="fab fa-linkedin-in"></i></a>
                                                         <a href="#" class="b_det_so_li" title="Twitter"><i class="fab fa-twitter"></i></a>
                                                         <a href="#" class="b_det_so_li" title="Instagram"><i class="fab fa-instagram"></i></a>
                                                     </div>
                                             </div>
                                             <div class="b_det_si_new">
                                                     <h3>Get our latest news daily!</h3>
                                                     <p>Daily we will send you the breaking newses right to your inbox!</p>
                                                     <form action="#" class="b_det_si_for">
                                                         <input type="email" name="email" id="email" placeholder="email">
                                                         <input type="submit" value="Subscribe" class="cust_btn">
                                                     </form>
                                             </div> 
                                             <div class="b_det_si_pa">
                                                 <h3 class="m_b">Latest Articles</h3>
                                                 <div class="c_det_rec_ar">
                                                     <div class="re_art">
                                                         <div class="re_art_img">
                                                             <img src="{{asset('assets/frontend')}}/images/homepage/course-1.jpg" alt="">
                                                         </div>
                                                         <div class="re_ar_title">
                                                             <a href="#"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="re_art">
                                                         <div class="re_art_img">
                                                             <img src="{{asset('assets/frontend')}}/images/homepage/course-2.jpg" alt="">
                                                         </div>
                                                         <div class="re_ar_title">
                                                             <a href="#"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="re_art">
                                                         <div class="re_art_img">
                                                             <img src="{{asset('assets/frontend')}}/images/homepage/course-3.jpg" alt="">
                                                         </div>
                                                         <div class="re_ar_title">
                                                             <a href="#"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="re_art">
                                                         <div class="re_art_img">
                                                             <img src="{{asset('assets/frontend')}}/images/homepage/course-4.jpg" alt="">
                                                         </div>
                                                         <div class="re_ar_title">
                                                             <a href="#"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cat_3" role="tabpanel" aria-labelledby="cat_3-tab">
                            <div class="fo_recent">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="fo_re_main">
                                            <div class="fo_re_head fo_cat_top">
                                                <h3><span class="border_o">Recent Discussions</span><span class="far fa-clock c_orange"></span></h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime deleniti, accusamus molestias qui veritatis quibusdam hic quisquam ab quo! Id.</p>
                                            </div>
                                            <div class="fo_la_dis">
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
                                                        <a href="#" class="la_title">
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
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-3.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="fo_tag"><span class="c_violet">■</span> Trading System</a>
                                                        <a href="#" class="la_title">
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
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="fo_tag"><span class="c_green">■</span> Beginner Questions</a>
                                                        <a href="#" class="la_title">
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
                                                        <a href="#" class="la_title">
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 c_det_art_col">
                                        <div class="b_det_main b_det_main_sticky">                       
                                             <div class="b_det_si_sc">
                                                     <div>
                                                         <h3>Get news on social media!</h3>
                                                         <p>Read our latest news on any of these social networks!</p>
                                                     </div>
                                                     <div class="b_det_so">                    
                                                         <a href="#" class="b_det_so_li" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                         <a href="#" class="b_det_so_li" title="Linked-in"><i class="fab fa-linkedin-in"></i></a>
                                                         <a href="#" class="b_det_so_li" title="Twitter"><i class="fab fa-twitter"></i></a>
                                                         <a href="#" class="b_det_so_li" title="Instagram"><i class="fab fa-instagram"></i></a>
                                                     </div>
                                             </div>
                                             <div class="b_det_si_new">
                                                     <h3>Get our latest news daily!</h3>
                                                     <p>Daily we will send you the breaking newses right to your inbox!</p>
                                                     <form action="#" class="b_det_si_for">
                                                         <input type="email" name="email" id="email" placeholder="email">
                                                         <input type="submit" value="Subscribe" class="cust_btn">
                                                     </form>
                                             </div> 
                                             <div class="b_det_si_pa">
                                                 <h3 class="m_b">Latest Articles</h3>
                                                 <div class="c_det_rec_ar">
                                                     <div class="re_art">
                                                         <div class="re_art_img">
                                                             <img src="{{asset('assets/frontend')}}/images/homepage/course-1.jpg" alt="">
                                                         </div>
                                                         <div class="re_ar_title">
                                                             <a href="#"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="re_art">
                                                         <div class="re_art_img">
                                                             <img src="{{asset('assets/frontend')}}/images/homepage/course-2.jpg" alt="">
                                                         </div>
                                                         <div class="re_ar_title">
                                                             <a href="#"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="re_art">
                                                         <div class="re_art_img">
                                                             <img src="{{asset('assets/frontend')}}/images/homepage/course-3.jpg" alt="">
                                                         </div>
                                                         <div class="re_ar_title">
                                                             <a href="#"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="re_art">
                                                         <div class="re_art_img">
                                                             <img src="{{asset('assets/frontend')}}/images/homepage/course-4.jpg" alt="">
                                                         </div>
                                                         <div class="re_ar_title">
                                                             <a href="#"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cat_4" role="tabpanel" aria-labelledby="cat_4-tab">
                            <div class="fo_top">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="fo_to_main">
                                            <div class="fo_to_head fo_cat_top">
                                                <h3><span class="border_g">Top Discussions</span><span class="far fa-star c_green"></span></h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime deleniti, accusamus molestias qui veritatis quibusdam hic quisquam ab quo! Id.</p>
                                            </div>
                                            <div class="fo_la_dis">
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
                                                        <a href="#" class="la_title">
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
                                                        <a href="#" class="la_title">
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
                                                                <span class="sign_user_img"><img src="{{asset('assets/frontend')}}/images/homepage/person-1.jpg" alt="img"></span>                            
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="fo_tag"><span class="c_green">■</span> Beginner Questions</a>
                                                        <a href="#" class="la_title">
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
                                                        <a href="#" class="la_title">
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
                                    </div>
                                    <div class="col-lg-4 c_det_art_col">
                                        <div class="b_det_main b_det_main_sticky">                       
                                             <div class="b_det_si_sc">
                                                     <div>
                                                         <h3>Get news on social media!</h3>
                                                         <p>Read our latest news on any of these social networks!</p>
                                                     </div>
                                                     <div class="b_det_so">                    
                                                         <a href="#" class="b_det_so_li" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                         <a href="#" class="b_det_so_li" title="Linked-in"><i class="fab fa-linkedin-in"></i></a>
                                                         <a href="#" class="b_det_so_li" title="Twitter"><i class="fab fa-twitter"></i></a>
                                                         <a href="#" class="b_det_so_li" title="Instagram"><i class="fab fa-instagram"></i></a>
                                                     </div>
                                             </div>
                                             <div class="b_det_si_new">
                                                     <h3>Get our latest news daily!</h3>
                                                     <p>Daily we will send you the breaking newses right to your inbox!</p>
                                                     <form action="#" class="b_det_si_for">
                                                         <input type="email" name="email" id="email" placeholder="email">
                                                         <input type="submit" value="Subscribe" class="cust_btn">
                                                     </form>
                                             </div> 
                                             <div class="b_det_si_pa">
                                                 <h3 class="m_b">Latest Articles</h3>
                                                 <div class="c_det_rec_ar">
                                                     <div class="re_art">
                                                         <div class="re_art_img">
                                                             <img src="{{asset('assets/frontend')}}/images/homepage/course-1.jpg" alt="">
                                                         </div>
                                                         <div class="re_ar_title">
                                                             <a href="#"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="re_art">
                                                         <div class="re_art_img">
                                                             <img src="{{asset('assets/frontend')}}/images/homepage/course-2.jpg" alt="">
                                                         </div>
                                                         <div class="re_ar_title">
                                                             <a href="#"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="re_art">
                                                         <div class="re_art_img">
                                                             <img src="{{asset('assets/frontend')}}/images/homepage/course-3.jpg" alt="">
                                                         </div>
                                                         <div class="re_ar_title">
                                                             <a href="#"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></a>
                                                         </div>
                                                     </div>
                                                     <div class="re_art">
                                                         <div class="re_art_img">
                                                             <img src="{{asset('assets/frontend')}}/images/homepage/course-4.jpg" alt="">
                                                         </div>
                                                         <div class="re_ar_title">
                                                             <a href="#"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></a>
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



    @endsection