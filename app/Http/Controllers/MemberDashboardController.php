<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Middleware;
use App\Models\Member;
use Session;


class MemberDashboardController extends Controller
{
 
    public function memberProfile(){
        $member =  Member::all();
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        
        return view('member.my-profile')
        ->with('recentblog', $recentblog);

    }
  
}
