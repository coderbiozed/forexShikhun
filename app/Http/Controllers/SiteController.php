<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\SessionGuard;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Videos;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\Member;
use App\Models\Review;
use App\Models\Alluser;
use Illuminate\Http\Request;
use Session;
use Image;
use App\Http\Requests\CreateReviewRequest;
use Illuminate\Support\Facades\Hash;



class SiteController extends Controller
{
    public function index(){
       $blogs = DB::table('table_blog')->orderBy('id', 'desc')->paginate(8);
       $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
       $course= DB::table('course')->orderBy('id', 'desc')->paginate(8);
       $videos= DB::table('videos')->orderBy('id', 'desc')->paginate(8);
       $about = DB::table('about')->first();  
       $reviews =DB::table('review')->orderBy('id', 'desc')->paginate(8);
       return view('frontend.index')
       ->with('blogs', $blogs)
       ->with('recentblog', $recentblog)
       ->with('course', $course)
       ->with('videos', $videos)
       ->with('about', $about)
       ->with('reviews',$reviews);
          
    }

    # 👉 About Us page 🤔🤔
    public function aboutUs(){       
        $about = DB::table('about')->first();
        $quote = DB::table('quote')->orderBy('id', 'desc')->get();
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.about')
        ->with('about', $about)
        ->with('quote', $quote)
        ->with('recentblog', $recentblog);
    }

    # 👉 Course page 🤔🤔
    public function course(){
        $course=DB::table('course')->orderBy('id', 'desc')->paginate(6);
        $blogs = DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.course')
        ->with('course', $course)
        ->with('blogs', $blogs)
        ->with('recentblog', $recentblog);
    }

    # 👉 Course Details page 🤔🤔
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

    # 👉 Video page 🤔🤔
    public function video(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        $videos= DB::table('videos')->orderBy('id', 'desc')->get();
        return view('frontend.video')
        ->with('recentblog', $recentblog)
        ->with('videos', $videos);
    }

    # 👉 Blog page 🤔🤔
    public function blog(){
        $blogs = DB::table('table_blog')->orderBy('id', 'desc')->paginate(9);
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.blog')
        ->with('blogs', $blogs)
        ->with('recentblog', $recentblog);
        
    }
    # 👉 Blog Details page 🤔🤔
    public function blogDetails($slug){
        $blogs = DB::table('table_blog')->orderBy('id', 'desc')->paginate(3);
        $subscribes= DB::table('subscribe')->get();
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        $blog_details = DB::table('table_blog')->Where('slug',  $slug)->first();
        $next = Blog::where('id', '<', $blog_details->id)->max('slug');
        $previous_blog = Blog::where('id', '>', $blog_details->id)->orderBy('id', 'asc')->first();
        $previous = isset($previous_blog) ? $previous_blog['slug'] : '';
        $comment = DB::table('comments')->Where('post_id', $blog_details->id)->orderBy('id', 'desc')->paginate(3);
        $replay = DB::table('replies')->orderBy('id', 'desc')->paginate(2);
        return view('frontend.blog-details')
        ->with('replay', $replay)
        ->with('comment', $comment)
        ->with('blogs', $blogs)
        ->with('recentblog', $recentblog)
        ->with('subscribes', $subscribes)
        ->with('table_blog', $blog_details)
        ->with('previous', $previous)
        ->with('next', $next);
    }
    # 👉Forum page 🤔🤔
    public function forum(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.forum')
        ->with('recentblog', $recentblog);
    }
    # 👉Forum Category Discussion page 🤔🤔
    public function forumCategoryDiscussion(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.forum-category-discussion')
        ->with('recentblog', $recentblog);
    }

    # 👉 Forum Category Details page 🤔🤔
    public function forumCategoryDetails(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.forum-category-details')
        ->with('recentblog', $recentblog);
    }
  
    # 👉User Profile page 🤔🤔
    public function userProfile(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.user-profile')
        ->with('recentblog', $recentblog);
    }
    
    # 👉 Contact page 🤔🤔
    public function contact(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        $subscribes= DB::table('subscribe')->get();
        return view('frontend.contact')
        ->with('recentblog', $recentblog)
        ->with('subscribes', $subscribes);
    }
    # 👉 Calender page 🤔🤔
    public function calender(){   
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.calender')
        ->with('recentblog', $recentblog);
    }
    # 👉 Course Rating page 🤔🤔
    public function courseRating(){   
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        $subscribes= DB::table('subscribe')->get();
        $blogs = DB::table('table_blog')->orderBy('id', 'desc')->paginate(3);
        $reviews=DB::table('review')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.course-rating')
        ->with('recentblog', $recentblog)
        ->with('blogs', $blogs)
        ->with('reviews', $reviews)
        ->with('subscribes', $subscribes);
    }

    # 👉 Faq page 🤔🤔  
    public function faq(){ 
        $faqcats=DB::table('faq_cat')->first();
        $faqs = DB::table('faqs')->first();
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.faq')
        ->with('faqs', $faqs)
        ->with('faqcats', $faqcats)
        ->with('recentblog', $recentblog);
    }
    
    # 👉 Terms page 🤔🤔
    public function terms(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.terms-conditions')
        ->with('recentblog', $recentblog);
    }

    # 👉 Change password
    public function change_password(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.change-password')
        ->with('recentblog', $recentblog);
    }

    # 👉 Update Password 
    public function update_password(Request $request){
        #validation
        $request->validate([
            'old_password'=>'required',
            'new_password'=>'required|confirmed|min:8',
        ]);
        #match the old password
        $password = Auth::guard('member')->user()->password;
        if(!Hash::check($request->old_password, $password)){
            return back()->with("error", "Old password not matched");
        }
        #update new password
        Member::whereId(Auth::guard('member')->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with("status", "Successfully Changed Password");
    }

    # 👉change user Preferences 🧐❤🧐🧐

    public function update_Preferences(Request $request){
        #validation
        $alluser = DB::table('member')->where('id', Auth::guard('member')->user()->id)->get();
        #update user details 
         if($request->hasfile('images')) {           
            $request->validate([
            'images' => 'required',
            'images.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf,svg|max:2048',            
            ]);
            foreach(json_decode($alluser[0]->image, true) as $images)
            {
                $image_path = public_path().'/images/alluser'.$images;
                if(file_exists($image_path)){
                    unlink($image_path);
                }
            } 
            foreach($request->file('images') as $file)
            {
                $file_extension = $file->getClientOriginalExtension();
                $name = time().'.'.$file_extension;
                $file->move(public_path().'/images/alluser', $name);  
                $imgData[] = $name;  
            }   
            $new_images = json_encode($imgData);                  
        }
        #update user details  
        Member::whereId(Auth::guard('member')->user()->id)->update([
            'name' => $request->name,
            'email' =>  $request->email,
            'username' =>  $request->username,
            'location' =>  $request->location,
            'linkedin' =>  $request->linkedin,
            'twitter' =>  $request->twitter,
            'instagram' =>  $request->instagram,
            'facebook' =>  $request->facebook,
            'image' =>  $new_images,
            'about' =>  $request->about,
        ]);       
        return back()->with("status", "Successfully Update your information");            
    }

    # 👉 Comment add 🧐🧐

    public function addComment(Request $request ){
        if(Auth::guard('member')->id()){
            $comment = new comment;
            $comment->name= Auth::guard('member')->user()->name;
            $comment->user_id= Auth::guard('member')->user()->id;
            $comment->post_id= $request->post_id;
            $comment->comment= $request->comment;
            $comment->save();           
            return redirect()->back();
        }
        else{
            return redirect('member/login');
        }      
    }

    # 👉 Add Comment Replay🧐🧐

    public function addReplay(Request $request){
        if(Auth::guard('member')->id()){
            $replay = new reply;
            $replay->name=Auth::guard('member')->user()->name;
            $replay->user_id=Auth::guard('member')->user()->id;
            $replay->comment_id= $request->commentId;
            $replay->reply=$request->replay;
            $replay->save();
            return redirect()->back();
        }else{
            return redirect('member/login');
        }
    }


    // 🧑👨 addReview  Function start 🧑👨
    // 🧑👨 addReview  Function end 🧑👨


    # 👉 Like and dislike function ❤❤
    public function likeBlog($blog){
        $member= Auth::guard('member')->user();
        $likeBlog = $member->likedBlogs()->where('blog_id', $blog )->count();
        if($likeBlog == 0){
            $member->likedBlogs()->attach($blog);        
        }else{
            $member->likedBlogs()->detach($blog);
        }     
        return redirect()->back();
    }
   
    # 👉 Forget password page 🤔🤔
    public function forgetpassword(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.forgetpass')
        ->with('recentblog', $recentblog);
    }
    # 👉 passcode Submit page 🤔🤔
    public function passcode(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.pass-code')
        ->with('recentblog', $recentblog);
    }
     # 👉 Create a new password if forget 🤔🤔
    public function newpassword(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.new-password')
        ->with('recentblog', $recentblog);
    }


    #Forum
    public function createForumPost(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.forumcreate')
        ->with('recentblog', $recentblog);
    }

}


