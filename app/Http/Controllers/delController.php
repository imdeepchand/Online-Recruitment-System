<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class delController extends Controller
{
    //
    function delvac(Request $req) {
        $id=$req->id;
     $data=DB::select("delete from addvac where id='$id'");
     return redirect()->back();   
    }

    function delcom(Request $req) {
        $cid=$req->cid;
     $data=DB::select("delete from company where cid='$cid'");
     return redirect()->back();   
    }
}
?>