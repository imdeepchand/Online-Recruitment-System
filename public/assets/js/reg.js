function validate()
{
    if(document.reg.uname.value == ""){
         $("#error_nm").html("Please Enter Name *");
          $("#error_nm").show();
         setTimeout(function(){
            $("#error_nm").hide();
        },3000);
        document.reg.uname.focus();
        return false;
    }
    if(document.reg.fname.value == ""){
        $("#error_fnm").html("Please Enter Father Name *");
         $("#error_fnm").show();
        setTimeout(function(){
            $("#error_fnm").hide();
        },3000);
        document.reg.fname.focus();
        return false;
    }
    if(document.reg.mname.value == ""){
        $("#error_mnm").html("Please Enter Mother Name *");
         $("#error_mnm").show();
        setTimeout(function(){
            $("#error_mnm").hide();
        },3000);
        document.reg.mname.focus();
        return false;
    }
    if(document.reg.email.value == ""){
        $("#error_em").html("Please Enter Email ID *");
         $("#error_em").show();
        setTimeout(function(){
            $("#error_em").hide();
        },3000);
        document.reg.email.focus();
        return false;
    }
    if(!(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(reg.email.value))){
        $("#error_em").html("enter currect email *");
        $("#error_em").show();
        setTimeout(function(){
            $("#error_em").hide();
        },3000);
        document.reg.email.focus();
        return false;
    }
    if(document.reg.pno.value == ""){
        $("#error_pn").html("Please Enter Contact No. *");
         $("#error_pn").show();
        setTimeout(function(){
            $("#error_pn").hide();
        },3000);
        document.reg.pno.focus();
        return false;
    }
    if(document.reg.dob.value == ""){
        $("#error_dob").html("Please Enter date of birth *");
         $("#error_dob").show();
        setTimeout(function(){
            $("#error_dob").hide();
        },3000);
        document.reg.dob.focus();
        return false;
    }
    const ps = document.reg.pass.value;
    if(ps == ""){
        $("#error_ps").html("Please Enter Password *");
         $("#error_ps").show();
        setTimeout(function(){
            $("#error_ps").hide();
        },3000);
        document.reg.pass.focus();
        return false;
    }
    const reps = document.reg.repass.value;
    if(reps == ""){
        $("#error_reps").html("Please Enter re-enter Password *");
         $("#error_reps").show();
        setTimeout(function(){
            $("#error_reps").hide();
        },3000);
        document.reg.repass.focus();
        return false;
    }
    if(document.reg.pass.value != document.reg.repass.value){
        $("#error_reps").html("not match the Password *");
        $("#error_reps").show();
        setTimeout(function(){
            $("#error_reps").hide();
        },3000);
        document.reg.repass.focus();
        return false;
    }
    if(!(/[^a-zA-Z0-9\-\/]/.test(reg.pass.value)))
    {
        $("#error_ps").html("Password should be special character and alphanumeric value only *");
        $("#error_ps").show();
        setTimeout(function(){
            $("#error_ps").hide();
        },3000);
        document.reg.pass.focus();
        return false;
    }
    if(!(/[^a-zA-Z0-9\-\/]/.test(reg.repass.value)))
    {
        $("#error_ps").html("Password should be special character and alphanumeric value only *");
        $("#error_ps").show();
        setTimeout(function(){
            $("#error_ps").hide();
        },3000);
        document.reg.repass.focus();
        return false;
    }
}