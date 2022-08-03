
// navbar-starts

$('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").fadeToggle();
    $('body').toggleClass('overflow-hidden');
});


$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
        $('.nav_cust').addClass('affix');
        console.log("OK");
    } else {
        $('.nav_cust').removeClass('affix');
    }
});

// navbar-ends



// scroll-top-btn-starts


var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// scroll-top-btn-starts



// homepage-review-slider-starts

var owl = $('.sec_reviews .owl-carousel');
owl.owlCarousel({
    loop: true,
    nav: false,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 2000,
    smartSpeed: 900,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2
        },            
        992:{
            items:2
        },
        1200:{
            items:3
        }
    }
});
owl.on('mousewheel', '.sec_reviews .owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});

// homepage-review-slider-ends



// course-details-page-starts

$(document).ready(function(){

    $("#next").click(function(){
        $(".c_menu .active").next().addClass('active').prev().removeClass('active');
        $(".loop_main .active").next().addClass('active show').prev().removeClass('active show');      
        return false;
        
    });

    $("#prev").click(function(){
        $(".c_menu .active").prev().addClass('active').next().removeClass('active');
        $(".loop_main .active").prev().addClass('active show').next().removeClass('active show');
        return false;
    });


});


function openNav() {
  document.getElementById("mySidenav").style.width = "280px";
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

$('.close_btn').click(function(){
  $('body').removeClass('overflow-hidden');
});


$('.oc_btn').click(function(){
  $('body').addClass('overflow-hidden');
});



// course-details-page-ends



// about page carousel start


$('.sec_quote .owl-carousel').owlCarousel({
    animateOut: 'fadeOut',
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    items:1,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 3000,
});


// about page carousel end



// forum nav start 

$('.fo_na_tr').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $(".acc_items_sm .acc_items").fadeToggle();
    $('body').toggleClass('overflow-hidden');
});

// forum nav end


// toggle-note-editor-start

$('.f_ac_rep').click(function () {
    $('.note-editor').toggleClass('show_tx_ar');
});

$(".tg_ep").click(function (){
  $('.com_ep_main_cont').fadeToggle();
});

// toggle-note-editor-end


// like animation starts

$('.heart').click((e) => {
    const $this = $(e.currentTarget);
    const currX = $this.css('background-position-x').replace('px', '');
    
    if ($this.hasClass('clicked')) {
      for(let i = 0; i < 28; i++) {
        setTimeout(() => {
          $this.css({
            'background-position-x': `0`,
          });
          console.log('frame');
        }, 15 * i);
      }
      $('.l_co').html('0');
      $('.f_ac_bl .fa-heart, .f_c_li').removeClass('fas');
      $('.f_ac_bl .fa-heart, .f_c_li').addClass('far');
    } else {
      for(let i = 0; i < 29; i++) {
        setTimeout(() => {
          $this.css({
            'background-position-x': `${parseInt(currX) - (i * 45)}px`,
          });
          console.log('frame');
        }, 33 * i);
      }
      $('.l_co').html('1');
      $('.f_ac_bl .fa-heart, .f_c_li').addClass('fas');
      $('.f_ac_bl .fa-heart, .f_c_li').removeClass('far');
    }   
    $this.toggleClass('clicked');
  });

  // like animation ends


  // my-profile-pass-hide-show starts

  $('.mp_h_s_pas i').click(function () {
    $(".mp_h_s_pas .fa-eye-slash, .mp_h_s_pas .fa-eye").toggleClass("mp_h_s_pas fa-eye-slash mp_h_s_pas fa-eye");
  });

 // my-profile-pass-hide-show ends


 // my-profile-dash-menu-starts

 $('.my_pro_nav').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $(".my_pro_nav_co").fadeToggle();
    $('body').toggleClass('overflow-hidden');
});

 // my-profile-dash-menu-ends

 // user-profile-follow-btn-start


 $('.m_p_lo .fl_btn').click(function () {
    $(".fl_btn .fa-user-plus, .fl_btn .fa-user-check").toggleClass("fl_btn fa-user-plus fl_btn fa-user-check");
    $(".u_p, .u_c").toggleClass("u_p u_c");
    $('.m_p_lo .fl_btn .u_p').html("Follow");
    $('.m_p_lo .fl_btn .u_c').html("Unfollow");
    $('.up_epi').fadeToggle();
    $(this).toggleClass('active');
 });

 $(".up_epi_main").click(function (){
    $('.up_epi_con').fadeToggle();
 });

 // user-profile-follow-btn-end
 
 // Blog Share Link Function

 $(".bt_sha_tog_main").click(function (){
  $('.bt_sha_tog_con').fadeToggle();
 });


// Load More 
$('.loadmore').simpleLoadMore({
  item: '.load-item',
  count: 8,
  itemsToLoad: 4,
  btnHTML: '<div class="col-12"><div class="load_more_articles"><a href="#" class="cust_btn load-more__btn">Load More</a></div></div>'                   
});
$('.loadmore-two').simpleLoadMore({
  item: '.load-item-two',
  count: 8,
  itemsToLoad: 4,
  btnHTML: '<div class="col-12"><div class="load_more_articles"><a href="#" class="cust_btn load-more__btn">Load More</a></div></div>'
});

//View More 
$('.loadmore').simpleLoadMore({
  item: '.load-item',
  count: 8,
  itemsToLoad: 4,
  btnHTML: '<div class="col-12"><div class="load_more_videos"><a href="#" class="cust_btn load-more__btn">View More</a></div></div>'                   
});
$('.loadmore-one').simpleLoadMore({
  item: '.load-item-two',
  count: 8,
  itemsToLoad: 4,
  btnHTML: '<div class="col-12"><div class="load_more_videos"><a href="#" class="cust_btn load-more__btn">View More</a></div></div>'
});


