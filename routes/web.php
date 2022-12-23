<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name('index');

Route::get('/about', [App\Http\Controllers\SiteController::class, 'aboutUs'])->name('about');

Route::get('/video', [App\Http\Controllers\SiteController::class, 'video'])->name('video');

Route::get('/blog', [App\Http\Controllers\SiteController::class, 'blog'])->name('blog');

Route::get('/blog/{slug}', [App\Http\Controllers\SiteController::class, 'blogDetails'])->name('blog-details');

Route::get('/course', [App\Http\Controllers\SiteController::class, 'course'])->name('course');

Route::get('/course/{course_slug}', [App\Http\Controllers\SiteController::class, 'courseDetails'])->name('course-details');

Route::get('/forum', [App\Http\Controllers\SiteController::class, 'forum'])->name('forum');

Route::get('/forum-category-details', [App\Http\Controllers\SiteController::class, 'forumCategoryDetails'])->name('forum-category-details');

Route::get('/forum-category-discussion', [App\Http\Controllers\SiteController::class, 'forumCategoryDiscussion'])->name('forum-category-discussion');

Route::get('/user-profile', [App\Http\Controllers\SiteController::class, 'userProfile'])->name('user-profile');

Route::get('/contact', [App\Http\Controllers\SiteController::class, 'contact'])->name('contact');

Route::get('/course-rating', [App\Http\Controllers\SiteController::class, 'courseRating'])->name('course-rating');

Route::get('/calender', [App\Http\Controllers\SiteController::class, 'calender'])->name('calender');

Route::get('/faq', [App\Http\Controllers\SiteController::class, 'faq'])->name('faq');

Route::get('/terms', [App\Http\Controllers\SiteController::class, 'terms'])->name('terms');

Route::post('/add_comment', [App\Http\Controllers\SiteController::class, 'addComment'])->name('comment');

Route::post('/add_replay', [App\Http\Controllers\SiteController::class, 'addReplay'])->name('replay');

Route::post('reviews', [App\Http\Controllers\ReviewController::class, 'store'])->name('review.store');

//Forum

Route::get('create-forum-post', [App\Http\Controllers\SiteController::class, 'createForumPost'])->name('create.forum.post');



// Member Auth Route

Route::get('/member/login', [App\Http\Controllers\MemberController::class, 'memberLoginForm'])->name('memberLogin');

Route::post('member-login', [App\Http\Controllers\MemberController::class, 'memberLogin'])->name('member.login');

Route::get('/signup', [App\Http\Controllers\MemberController::class, 'signup'])->name('signup');

Route::post('/signup', [App\Http\Controllers\MemberController::class, 'signup_create'])->name('signup');

Route::get('/forgetpassword', [App\Http\Controllers\SiteController::class, 'forgetpassword'])->name('forgetpassword');

Route::get('/passcode', [App\Http\Controllers\SiteController::class, 'passcode'])->name('passcode');

Route::get('/newpassword', [App\Http\Controllers\SiteController::class, 'newpassword'])->name('newpassword');

//Member middleware Route

Route::group(['middleware' =>'member'] , function(){ 
    
    Route::get('/member-profile', [App\Http\Controllers\MemberDashboardController::class, 'memberProfile'])->name('member-profile');

    Route::post('/member-profile', [App\Http\Controllers\SiteController::class, 'update_Preferences'])->name('updatePreferences');

    Route::get('/member-logout', [App\Http\Controllers\MemberController::class, 'memberLogout'])->name('member.logout');

    Route::post('/like-blog/{blog}', [App\Http\Controllers\SiteController::class, 'likeBlog'])->name('blog.like');

    Route::get('/changepassword', [App\Http\Controllers\SiteController::class, 'change_password'])->name('changepassword');

    Route::post('/changepassword', [App\Http\Controllers\SiteController::class, 'update_password'])->name('updatepassword');

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users')->middleware('auth');

Route::delete('/user-delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');

Route::resource('blogs', App\Http\Controllers\BlogController::class)->middleware('auth');

Route::resource('courses', App\Http\Controllers\CourseController::class)->middleware('auth');

Route::resource('Lessons', App\Http\Controllers\LessonController::class)->middleware('auth');

Route::resource('videos', App\Http\Controllers\VideosController::class)->middleware('auth');

Route::resource('subscribes', App\Http\Controllers\SubscribeController::class);

Route::resource('abouts', App\Http\Controllers\aboutController::class)->middleware('auth');

Route::resource('quotes', App\Http\Controllers\QuoteController::class)->middleware('auth');

Route::resource('faqcats', App\Http\Controllers\FaqcatController::class)->middleware('auth');

Route::resource('faqs', App\Http\Controllers\FaqsController::class)->middleware('auth');

Route::resource('comments', App\Http\Controllers\CommentController::class)->middleware('auth');

Route::resource('members', App\Http\Controllers\MemberController::class)->middleware('auth');

Route::resource('allusers', App\Http\Controllers\AlluserController::class)->middleware('auth');

Route::resource('reviews', App\Http\Controllers\ReviewController::class);
