function validate() {
    if (document.lg.email.value == "") {
        $("#err-email").html("enter email *"); 
         $("#err-email").show();
        setTimeout(function(){
            $("#err-email").hide();
        },3000);
        document.lg.email.focus();
        return false;
    }

    if(!(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(lg.email.value))){
        $("#err-email").html("enter currect email *");
        $("#err-email").show();
        setTimeout(function(){
            $("#err-email").hide();
        },3000);
        document.lg.email.focus();
        return false;
    }

    var pass = document.lg.pass.value;
    if (pass == "") {
        $("#err-pass").html("enter password *");
         $("#err-pass").show();
        setTimeout(function(){
            $("#err-pass").hide();
        },3000);
        document.lg.pass.focus();
        return false;
    }
}