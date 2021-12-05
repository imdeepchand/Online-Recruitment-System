<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class candidateController extends Controller
{
   //user login

    function chkuser(Request $req)
    {
    	$email=$req->email;
    	$pass=$req->pass;

    	$data=DB::select("select*from userreg where email='$email' and pass='$pass'");
        
      foreach ($data as  $value) {
          $uname=$value->uname;
      }
    	$found=count($data);

    	if($found==1)
    	{
    		session(['uname'=>$uname]);
            session(['uid'=>$email]);
            return redirect('/');
    	}
    	else
    	{
            echo"
            <script type='text/javascript'>
            alert('Incurrect password')
                window.location='/userlog';
            </script>
        ";
    		// return redirect()->back();
    	}
    }

    function userreg(Request $req)
    {
        $uname=$req->input("uname");
        $fname=$req->input("fname");
        $mname=$req->input("mname");
        $email=$req->input("email");
        $pno=$req->input("pno");
        $dob=$req->input("dob");
        $gen=$req->input("gen");
        $pass=$req->input("pass");
        $repass=$req->input("repass");
        $data=array('uname'=>$uname,'fname'=>$fname,'mname'=>$mname,'email'=>$email,'pno'=>$pno,'dob'=>$dob,'gen'=>$gen,'pass'=>$pass,'repass'=>$repass);
        DB::table('userreg')->insert($data);
        echo"
            <script type='text/javascript'>
            alert('successfully registered')
                window.location='/userlog';
            </script>
        ";
        /* return redirect('/userlog');*/
    }

    public function logout() {
        session(['uid'=>null]);
        session(['uname'=>null]);
         return redirect('/userlog');
    }

     public static function viewuser() {
        $uid=session("uid");
        $data=DB::select("select*from userreg where email='$uid'");
        return $data;
    }

    public function addresume(Request $req)
    {
        $uid=session("uid");
        $resume=$req->resume;
         if ($req->hasfile('resume')) {
            $image=$req->file('resume');
            $name = time().'.'.$image->getClientoriginalExtension();
            $destinationPath = public_path('/Canresume');
            $image->move($destinationPath,$name);
        }
         DB::update("update userreg set resume='$name' where email='$uid'");
         echo"
            <script type='text/javascript'>
            alert('successfully Added Resume')
                window.location='/addresume';
            </script>
        ";
         /*return redirect()->back();*/
    }

     public function addpic(Request $req)
    {
        $uid=session("uid");
        $dp=$req->dp;
        if ($req->hasfile('dp')) {
            $image=$req->file('dp');
            $name = time().'.'.$image->getClientoriginalExtension();
            $destinationPath = public_path('/Canpicture');
            $image->move($destinationPath,$name);
        }
        DB::update("update userreg set dp='$name' where email='$uid'");
         echo"
            <script type='text/javascript'>
            alert('successfully Added Picture');
                window.location='/addresume';
            </script>
        ";
        /*return redirect()->back();*/
    }

    
}
