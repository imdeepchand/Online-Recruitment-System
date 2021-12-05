<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class updateController extends Controller
{
    //
    public function updatePhone(Request $req){
        $uid=session("uid");
        $pno=$req->pno;        
        DB::update("update userreg set pno='$pno' where email='$uid'");
        echo"
            <script type='text/javascript'>
                alert('Successfully Update Phone Number');
                window.location='/profile';
            </script>
        ";
        /*return redirect('/profile');       */
    }

     public function updatePass(Request $req){
        $uid=session("uid");
        $pass=$req->pass; 
        $repass=$req->repass;
        DB::update("update userreg set pass='$pass', repass='$repass' where email='$uid'");
        echo"
            <script type='text/javascript'>
                alert('Successfully change the password');
                window.location='/profile';
            </script>
        ";
        /*return redirect('/profile');       */
    }

    public function updateQual(Request $req){
        $uid=session("uid");
        $qual=$req->qual; 
        DB::update("update userreg set qual='$qual' where email='$uid'");
        echo"
            <script type='text/javascript'>
                alert('Successfully add Your Qualification');
                window.location='/profile';
            </script>
        ";
        /*return redirect('/profile');       */
    }
}
