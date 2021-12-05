<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class viewController extends Controller
{
    //

     public static function viewcom()
    {
        $data=DB::select('select*from company');
        return $data;
    }

    

     public static function viewvac()
    {
        $data=DB::select('select*from addvac');
        return $data;
    }

    public static function myapp(){
        $uid=session('uid');
        $data=DB::select("select*from apply where uid='$uid'");
        return $data;
    }

    public static function notifyapp(){
        $data=DB::select("select*from apply order by id DESC");
        return $data;
    }

    public static function adminapp(){
        $data=DB::select("select*from apply");
        return $data;
    }

    public static function countReg(){
        $data = DB::select("select*from userreg");
        return $data;
    }

    public static function countApply(){
        $data = DB::select("select*from apply");
        return $data;
    }

    public static function countCom(){
        $data = DB::select("select*from company");
        return $data;
    }

     public static function countVac(){
        $data = DB::select("select*from addvac");
        return $data;
    }

    public static function regUser(){
        $data = DB::select("select*from userreg");
        return $data;
    }

    public static function fetchfeedback(){
        $data = DB::select("select*from feedback");
        return $data;
    }

} 
