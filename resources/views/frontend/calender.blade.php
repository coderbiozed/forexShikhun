
@extends('layouts.frontend')    
@section('content')

    <section class="sec_ec spt_cust sec_default">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="sec_heading"><span class="sec_hed_span">Our Calender</span></h1>
                </div>
                <div class="col-12">
                    <div class="forum_thumb_inner ec_th_in">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="forum_thumb_heading"><span class="forum_blue_span">3/20</span>'s Calendar</h3>
                            </div>
                            <div class="col-12">
                                <div>
                                    <div class="tradingview-widget-container">
                                        <div class="tradingview-widget-container__widget"></div>                                              
                                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
                                            {
                                                "colorTheme": "light",
                                                "isTransparent": true,
                                                "width": "100%",
                                                "height": "100%",
                                                "locale": "en",
                                                "importanceFilter": "-1,0,1"                                                      
                                            }
                                        </script>
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