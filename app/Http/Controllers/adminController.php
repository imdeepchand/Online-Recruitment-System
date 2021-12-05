<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class adminController extends Controller
{
    //admin login
    function chklog(Request $req)
    {
    	$uname=$req->un;
    	$pass=$req->ps;

    	$data=DB::select("select*from admin where uname='$uname' and pass='$pass'");

    	$found=count($data);

    	if($found==1)
    	{
    		session(['uname'=>$uname]);
    		return redirect('/admindash');
    	}
    	else
    	{
    		return redirect()->back();
    	}
    }
//--------admin session clear
        public function adminlogout() {
             session(['uname'=>null]);
             return redirect('/admin');
        }  

    function readmore(Request $req) {
        $id=$req->id;
        $data=DB::select("select*from addvac where id='$id'");
        return view('readmore',['data'=>$data]);
    }


    public function userprofile(Request $req)
    {
        $uid=$req->uid;
        $data=DB::select("select*from userreg where email='$uid'");
        return view('admin.adminViewProfile',['data'=>$data]);
    }

    function feedback(Request $req){
         $email=$req->input("email");
        $feedback=$req->input("feedback");
        $data=array('email'=>$email,'feedback'=>$feedback);
        DB::table('feedback')->insert($data);
        return redirect()->back();
    }

}
