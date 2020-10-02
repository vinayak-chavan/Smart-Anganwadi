function my_password() 
{

    var psw = $("#psw").val();
    var pass_pattern=/^(?=.*[0-9])(?=.*[!@#$%^&_*])[a-zA-Z0-9!@#$%^_&*]{5,15}$/;

    if (psw == "") 
    {
        $("#password").html("**please fill the password");
        return false;
    }
    else if (psw.length<8) 
    {
        $("#password").html("**password must be in 8 digits");
        return false;
    }
    else if (!psw.match(pass_pattern)) 
    {
        $("#password").html("** pass must be 1 uppercase, 1 lowercase, 1 number and one special cherectar");
        return false;
    }    
    else 
    {
        $("#password").html("");
        return true;
    }
}
function my_email() 
    {
    var email = $('#mail').val();

    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");

    if (email == "") 
    {
        $("#email").html("**Plese Enter Email");
        return false;
    }
    else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) 
    {
        $("#email").html("**Plese Enter Email Like : sam@xyz.com");
        return false;
    }
    else
    {
        $("#email").html(" ");
        return true;
    }
}

$(document).ready(function()
{
    $('#submit').click(function()
    {
        var email = $('#mail').val();
        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");
        var psw = $('#psw').val();
        var pass_pattern=/^(?=.*[0-9])(?=.*[!@#$%^&_*])[a-zA-Z0-9!@#$%^_&*]{5,15}$/;

        if (email == "") 
        {
            $("#email").html("**Please fill the Email");
            $("#mail").focus();
            return false;
        }
        else if ( atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) 
        {
            $("#email").html("**please enter email like sam@xyz.com");
            $("#mail").focus();
            return false;
        } 
        if (psw == "") 
        {
            $("#password").html("**Please fill the Password");
            $("#psw").focus();
            return false;
        }
        else if (psw.length < 8) 
        {
            $("#password").html("**password must be in 8 Digits");
            $("#psw").focus();
            return false;
        }
        else if (!psw.match(pass_pattern)) 
        {
            $("#password").html("** pass must be 1 uppercase, 1 lowercase, 1 number and one special cherectar");
            $("#psw").focus(); 
            return false;
        }
    });
});