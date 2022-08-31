<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Middleware;
use Session;
use App\Models\Member;


class MemberController extends Controller
{
    
    public function memberLoginForm(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('member.login')
        ->with('recentblog', $recentblog);
    }


    
    public function memberLogin(Request $request){

        $request->validate([
            'email' =>'required',
            'password' =>'required',
        ]);

        if(Auth::guard('member')->attempt(['email' =>$request->email, 'password' =>$request->password])){
            return redirect('member-profile');
        }
        else{
            $request->session()->flash('error-msg', 'Invalid Key or Password');
            return redirect()->back();
        }
    }
    public function memberLogout(){
        Auth::guard('member')->logout();
        return redirect('/');

    }

    public function signup(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.signup')
        ->with('recentblog', $recentblog);
    }

    public function signup_create( Request $request){
        // Validator
        $request->validate([
            'name' =>'required',
            'email' => 'required', 'email', 'max:255', 'unique:member',
            'password' => 'required', 'string', 'min:8', 'confirmed',
        ]);

        Member::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>\Hash::make($request->password)
        ]);
        if(\Auth::guard('member')->attempt($request->only('email','password'))){
            return redirect('member-profile');
        }
       
        // return redirect('frontend.signup')->withError('Error');
        
        return view('frontend.signup')
        ->with('recentblog', $recentblog);
    }  
    
}
