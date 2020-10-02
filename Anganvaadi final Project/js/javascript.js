/*----------------------------------------------- for onblur event --------------------------------------------------------*/
function my_user() 
{

    var user = $("#username").val();
    if (user == "") 
    {
        $("#user").html("**please fill the blank");
        return false;
    }
    else if (!isNaN(user)) 
    {
        $("#user").html("**please enter only chercter");
        return false;
    }
    else 
    {
        $("#user").html("");
        return true;
    }
}

function AvoidSpace(event)
{

    var username= event ? event.which : window.event.keycode;
    if (username == 32) 
    {
        $("user").html("");
        return false;
    }
}

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

function mobileNumber() 
{

    var mobileN = $("#mno1").val();
    if  (mobileN == "") 
    {
        $("#mno").html("**please fill the phone nummber");
        return false;
    }
    else if (isNaN(mobileN)) 
    {
        $("#mno").html("**please fill the digits like 123");
        return false;
    }
    else if (mobileN.length<10) 
    {
        $("#mno").html("**please fill the 10 digits nummber");
        return false;
    }
    else if (mobileN.length>12) 
    {
        $("#mno").html("**The nummber is more than 12 digits");
        return false;
    }
    else 
    {
        $("#mno").html("");
        return true;
    }
}

function phone(event,mobile) 
{
    var val = mno1.value;
    var re = /^([0-9]+[\.]?[0-9]?[0-9]?|[0-9]+)$/g;
    var re1 = /^([0-9]+[\.]?[0-9]?[0-9]?|[0-9]+)/g;
    if (re.test(val)) {
        $("#mno").html("");
        
    } 
    else 
    {
        val = re1.exec(val);
        if (val) 
        {
            mno1.value = val[0];
        } 
        else 
        {
            mno1.value = "";
        }
        $("#mno").html("Enter nummbers only");
    }
}

function myAddress()
{

    var addr = $("#address").val();
    if (addr == "")
    {
        $("#adr").html("**please fill the address field");
        return false;
    }
    else
    {
        $("#adr").html("");
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

function filename(img) 
{
    var fileInput = document.getElementById("file");
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;


    if (filePath == "") 
    {
        $("#files").html("**please select file");
        return false;
    }
    else if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpg/.jpeg/.png only.');
        fileInput.value = '';
        return false;
    }
}

function Fname(city) 
{
        
    var city = $('#city').val();

    if (city == "Select") 
    {
    $("#select").html("please select the City .");
    return false;
    }
    else
    {
    $("#select").html(" ");
    }
}
    


/*------------------------------------------------- for submit Button --------------------------------------------------*/                              

$(document).ready(function()
{
    $('#submit').click(function()
    {

        var username = $('#username').val();
        var email = $('#mail').val();
        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");
        var psw = $('#psw').val();
        var pass_pattern=/^(?=.*[0-9])(?=.*[!@#$%^&_*])[a-zA-Z0-9!@#$%^_&*]{5,15}$/;
        var mobileN = $('#mno1').val();
        var addr = $('#address').val();
        var dob = $('#dob').val();
        var myDate = new Date(dob);
        var today = new Date();
        var age = today.getFullYear() - myDate.getFullYear();
        var fileInput = $('#file').val();
        var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
        var val = $('#mno1').val();
        var re = /^([0-9]+[\.]?[0-9]?[0-9]?|[0-9]+)$/g;
        var re1 = /^([0-9]+[\.]?[0-9]?[0-9]?|[0-9]+)/g;
        var city = $('#city').val();

        if (username == "" ) 
        {
            $("#user").html("please fill the username");
            $('#username').focus();
            return false;
        }
        else if (!isNaN(username)) 
        {
            $("#user").html("**Please fill Only Charcter");
            $('#username').focus();
            return false;
        }
        else if (username.length < 6) 
        {
            $("#user").html("**Name must contain 6 letters");
            $("username").focus();
            return false;
        }
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
        if (mobileN == "") 
        {
            $("#mno").html("**Please fill the Phone Number");
            $("#mno1").focus();
            return false;
        }
        else if (isNaN(mobileN)) 
        {
            $("#mno").html("**Please fill the Digits like123");
            $("#mno1").focus();
            return false;
        }
        else if (mobileN.length < 10) 
        {
            $("#mno").html("**Please fill the 10 digit number");
            $("#mno1").focus();
            return false;
        }
        else if (mobileN.length > 12)  
        {

            $("#mno").html("**The number is not more than 12 digit");
            $("#mno1").focus();
            return false;
        }
        if (dob == "") 
        {  
            $("#dob1").html("**required");
            $("#dob").focus();
            return false;
        }
        else if ( myDate > today ) 
        { 
            $("#dob1").html("**You Can not Select Further Date");
            $("#dob").focus();
            return false;
        }
        else if (age < 10) 
        {

            $("#dob1").html("**You are not eligible");
            $("#dob").focus();
            return false;
        }
        else
        {
            $("#dob1").html("");
        }
        if ( form.gender[0].checked == false && form.gender[1].checked == false ) 
        {
            $("#genders").html("**gender must be choosen");
            return false;
        }
        else
        {
            $("#genders").html("");
        }
        if (addr.trim()  === "") 
        {
            $("#adr").html("**Please fill the address field");
            $("#address").focus();
            return false;
        }
        if ( ( form.hobbies[0].checked == false )  && ( form.hobbies[1].checked == false ) && ( form.hobbies[2].checked == false ) ) 
        {
            $("#hobbies").html(" **Please choose your Hobby");
            return false;
        }
        else
        {
            $("#hobbies").html("");
        }
        if(city == "Select")
        {
            $("#select").html("please select the city");
            $("#city").focus();
            return false;
        }
        if (fileInput == "") 
        {
            $("#files").html("**please select file");
            $("#file").focus();
            return false;
        }
    });
});