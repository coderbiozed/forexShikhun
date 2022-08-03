<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Videos;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
       $blogs = DB::table('table_blog')->orderBy('id', 'desc')->paginate(8);
       $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
       $course= DB::table('course')->orderBy('id', 'desc')->paginate(8);
       $videos= DB::table('videos')->orderBy('id', 'desc')->paginate(8);
       $about = DB::table('about')->first();
    

  
        return view('frontend.index')
        ->with('blogs', $blogs)
        ->with('recentblog', $recentblog)
        ->with('course', $course)
        ->with('videos', $videos)
        ->with('about', $about);
        
        
    }
    public function aboutUs(){
        $about = DB::table('about')->first();
        $quote = DB::table('quote')->orderBy('id', 'desc')->get();
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);

        return view('frontend.about')
        ->with('about', $about)
        ->with('quote', $quote)
        ->with('recentblog', $recentblog);
    }

    public function course(){
        $course=DB::table('course')->orderBy('id', 'desc')->paginate(6);
        $blogs = DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.course')
        ->with('course', $course)
        ->with('blogs', $blogs)
        ->with('recentblog', $recentblog);
    }

    public  function courseDetails($course_slug){
        
        $course = DB::table('course')->Where('course_slug',  $course_slug)->first();
        $blogs = DB::table('table_blog')->orderBy('id', 'desc')->paginate(3);
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        $course_details = DB::table('course')->Where('course_slug',  $course_slug)->first();
        $lessons= DB::table('lessons')->Where('course_id', $course_details->id)->get();

        $next =  Course::where('id', '<', $course_details->id)->max('course_slug');
        $previous_course = Course::where('id', '>', $course_details->id)->orderBy('id', 'asc')->first();
        $previous = isset($previous_course) ? $previous_course['course_slug'] : '';

        return view('frontend.course-details')
        ->with('course', $course)
        ->with('course', $course_details)
        ->with('previous', $previous)
        ->with('next', $next)
        ->with('recentblog', $recentblog)
        ->with('blogs', $blogs)
        ->with('lessons', $lessons);
        

     
    }



    public function video(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        $videos= DB::table('videos')->orderBy('id', 'desc')->paginate(9);


        return view('frontend.video')
        ->with('recentblog', $recentblog)
        ->with('videos', $videos);
    }


    public function blog(){
        $blogs = DB::table('table_blog')->orderBy('id', 'desc')->paginate(9);
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);

        return view('frontend.blog')
        ->with('blogs', $blogs)
        ->with('recentblog', $recentblog);
        
    }


    public function blogDetails($slug){

        $blogs = DB::table('table_blog')->orderBy('id', 'desc')->paginate(3);
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        $blog_details = DB::table('table_blog')->Where('slug',  $slug)->first();
        $next = Blog::where('id', '<', $blog_details->id)->max('slug');
        $previous_blog = Blog::where('id', '>', $blog_details->id)->orderBy('id', 'asc')->first();
        $previous = isset($previous_blog) ? $previous_blog['slug'] : '';
       
        return view('frontend.blog-details')
        ->with('blogs', $blogs)
        ->with('recentblog', $recentblog)
        ->with('table_blog', $blog_details)
        ->with('previous', $previous)
        ->with('next', $next);
    }
    public function forum(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);

        return view('frontend.forum')
        ->with('recentblog', $recentblog);

    }
    public function myProfile(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);

        return view('frontend.my-profile')
        ->with('recentblog', $recentblog);
    }

    public function userProfile(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);

        return view('frontend.user-profile')
        ->with('recentblog', $recentblog);
    }


    public function userLogin(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.login')
        ->with('recentblog', $recentblog);
    }


    public function signup(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.signup')
        ->with('recentblog', $recentblog);
    }


    public function contact(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.contact')
        ->with('recentblog', $recentblog);;
        
    }


    public function calender(){   
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.calender')
        ->with('recentblog', $recentblog);
    }


    public function faq(){ 
        $faqcats=DB::table('faq_cat')->first();
        $faqs = DB::table('faqs')->first();
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        
        return view('frontend.faq')
        ->with('faqs', $faqs)
        ->with('faqcats', $faqcats)
        ->with('recentblog', $recentblog);
    }
    public function forumCategoryDetails(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        
        return view('frontend.forum-category-details')
        ->with('recentblog', $recentblog);
    }
    public function terms(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        
        return view('frontend.terms-conditions')
        ->with('recentblog', $recentblog);
    }
    
    
}
