<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class insertController extends Controller
{
   function addcom(Request $req) {
        $cname=$req->input("cname");
        $clogo=$req->input("clogo");


        if ($req->hasfile('clogo')) {
            $image=$req->file('clogo');
            $name = time().'.'.$image->getClientoriginalExtension();
            $destinationPath = public_path('/clogo');
            $image->move($destinationPath,$name);
        }
        
        $data=array('cname'=>$cname,'clogo'=>$name);
        DB::table('company')->insert($data);
        // echo"successfully saved";
        return redirect()->back();
    }

    function addvac(Request $req)
     {
        $cname=$req->input("cname");
        $pn=$req->input("pn");
        $qu=$req->input("qu");  
        $jd=$req->input("jd");
        $nov=$req->input("nov");       
        $loc=$req->input("loc");
       
       $data1=DB::select("select*from company where cname='$cname'");
       foreach ($data1 as $value) {
           $clogo=$value->clogo;
       }

        //DB::insert("insert into addvac values('$cname','$pn','$jd','$nov','')");

        $data=array('cname'=>$cname,'pn'=>$pn,'qu'=>$qu,'jd'=>$jd,'nov'=>$nov,'loc'=>$loc,'clogo'=>$clogo);
        DB::table('addvac')->insert($data);
        return redirect()->back();
    }


    public function apply (Request $req){
        $id=$req->id;
        $data1=DB::select("select*from addvac where id='$id'");
       foreach ($data1 as $value) {
           $cname=$value->cname;
           $pname=$value->pn;
           $qual=$value->qu;
           $jod=$value->jd;
           $nov=$value->nov;
           $dt=date("d-m-Y");
           $uid=session('uid');

           $data2=DB::insert("insert into apply values('$uid','$cname','$pname','$qual','$jod','$nov','$dt','0')");

           return redirect('/success');
       }
    }

}
