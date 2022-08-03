<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\SiteController::class, 'aboutUs'])->name('about');
Route::get('/video', [App\Http\Controllers\SiteController::class, 'video'])->name('video');
Route::get('/blog', [App\Http\Controllers\SiteController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [App\Http\Controllers\SiteController::class, 'blogDetails'])->name('blog-details');
Route::get('/course', [App\Http\Controllers\SiteController::class, 'course'])->name('course');
Route::get('/course/{course_slug}', [App\Http\Controllers\SiteController::class, 'courseDetails'])->name('course-details');
Route::get('/forum', [App\Http\Controllers\SiteController::class, 'forum'])->name('forum');
Route::get('/forum/forum-category-details', [App\Http\Controllers\SiteController::class, 'forumCategoryDetails'])->name('forum.category.details');
Route::get('/forum/forum-category-discussion', [App\Http\Controllers\SiteController::class, 'forumCategoryDiscussion'])->name('forum.category.discussion');
Route::get('/user-login', [App\Http\Controllers\SiteController::class, 'userLogin'])->name('user-login');
Route::get('/user-profile', [App\Http\Controllers\SiteController::class, 'userProfile'])->name('user-profile');
Route::get('/my-profile', [App\Http\Controllers\SiteController::class, 'myProfile'])->name('my-profile');
Route::get('/contact', [App\Http\Controllers\SiteController::class, 'contact'])->name('contact');
Route::get('/calender', [App\Http\Controllers\SiteController::class, 'calender'])->name('calender');
Route::get('/faq', [App\Http\Controllers\SiteController::class, 'faq'])->name('faq');
Route::get('/signup', [App\Http\Controllers\SiteController::class, 'signup'])->name('signup');
Route::get('/terms', [App\Http\Controllers\SiteController::class, 'terms'])->name('terms');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');
Route::resource('blogs', App\Http\Controllers\BlogController::class)->middleware('auth');
Route::resource('courses', App\Http\Controllers\CourseController::class)->middleware('auth');
Route::resource('Lessons', App\Http\Controllers\LessonController::class)->middleware('auth');
Route::resource('videos', App\Http\Controllers\VideosController::class)->middleware('auth');
Route::resource('subscribes', App\Http\Controllers\SubscribeController::class);
Route::resource('abouts', App\Http\Controllers\aboutController::class)->middleware('auth');
Route::resource('quotes', App\Http\Controllers\QuoteController::class)->middleware('auth');


Route::resource('faqcats', App\Http\Controllers\FaqcatController::class);


Route::resource('faqs', App\Http\Controllers\FaqsController::class);
