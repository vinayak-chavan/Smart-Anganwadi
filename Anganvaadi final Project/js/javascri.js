
function my_user() 
{

    var user = document.getElementById("username").value;
    if (user == "") 
    {
        document.getElementById("user").innerHTML = "**please fill the blank";
        return false;
    }
    else if (!isNaN(user)) 
    {
        document.getElementById("user").innerHTML = "**please enter only chercter";
        return false;
    }
    else 
    {
        document.getElementById("user").innerHTML = "";
        return true;
    }
}

function AvoidSpace(event)
{

    var username= event ? event.which : window.event.keycode;
    if (username == 32) 
    {
        document.getElementById("user").innerHTML = "";
        return false;
    }
}

function my_password() 
{

    var psw = document.getElementById("psw").value;
    var pass_pattern=/^(?=.*[0-9])(?=.*[!@#$%^&_*])[a-zA-Z0-9!@#$%^_&*]{5,15}$/;

    if (psw == "") 
    {
        document.getElementById("password").innerHTML = "**please fill the password";
        return false;
    }
    else if (psw.length<8) 
    {
        document.getElementById("password").innerHTML = "**password must be in 8 digits";
        return false;
    }
    else if (!psw.match(pass_pattern)) 
    {
        document.getElementById("password").innerHTML = "** pass must be 1 uppercase, 1 lowercase, 1 number and one special cherectar"; 
        return false;
    }    
    else 
    {
        document.getElementById("password").innerHTML = "";
        return true;
    }
}

function mobileNumber() 
{

    var mobileN = document.getElementById("mno1").value;
    if  (mobileN == "") 
    {
        document.getElementById("mno").innerHTML = "**please fill the phone nummber";
        return false;
    }
    else if (isNaN(mobileN)) 
    {
        document.getElementById("mno").innerHTML = "**please fill the digits like 123";
        return false;
    }
    else if (mobileN.length<10) 
    {
        document.getElementById("mno").innerHTML = "**please fill the 10 digits nummber";
        return false;
    }
    else if (mobileN.length>12) 
    {
        document.getElementById("mno").innerHTML = "**The nummber is more than 12 digits";
        return false;
    }
    else 
    {
        document.getElementById("mno").innerHTML = "";
        return true;
    }
}

function phone(event,mobile) 
{
    var val = mno1.value;
    var re = /^([0-9]+[\.]?[0-9]?[0-9]?|[0-9]+)$/g;
    var re1 = /^([0-9]+[\.]?[0-9]?[0-9]?|[0-9]+)/g;
    if (re.test(val)) {
        document.getElementById("mno").innerHTML = "";
        
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
        document.getElementById("mno").innerHTML = "enter nummbers only";
    }
}

function myAddress()
{

    var addr = document.getElementById("address").value;
    if (addr == "")
    {
        document.getElementById("adr").innerHTML = "**please fill the address field";
        return false;
    }
    else
    {
        document.getElementById("adr").innerHTML = "";
        return true;
    }
}

function mydob() 
{
    var dob = document.getElementById("dob").value;
    var myDate = new Date(dob);
    var today = new Date();
    var age = today.getFullYear() - myDate.getFullYear();
    if (dob == "")  
    {
        document.getElementById("dob1").innerHTML = "**Required";
        return false;
    }
   
    else if ( myDate > today ) 
    { 
        document.getElementById('dob1').innerHTML= "**You Can not Select Futer Date";
        return false;
    }
    else if (age < 10) 
    {

      document.getElementById('dob1').innerHTML= "**You are not eligible";
      return false;
    }
    else 
    {
    document.getElementById("dob1").innerHTML = "";
    return true;
    }
}

function my_email() 
{
    var email = document.forms["form"]["mail"].value;

    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");

    if (email == "") 
    {
        document.getElementById('email').innerHTML= "**Plese Enter Email";
        return false;
    }
    else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) 
    {
        document.getElementById('email').innerHTML= "**Plese Enter Email Like : sam@xyz.com";
        return false;
    }
    else
    {
        document.getElementById('email').innerHTML= " ";
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
        document.getElementById("files").innerHTML = "**please select file";
        return false;
    }
    else if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpg/.jpeg/.png only.');
        fileInput.value = '';
        return false;
    }
}

function validation() 
{
    var user = document.getElementById('username').value;
    var email = document.getElementById('mail').value;
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    var psw = document.getElementById('psw').value;
    var mobileN = document.getElementById('mno1').value;
    var addr = document.getElementById('address').value;
    var dob = document.getElementById('dob').value;
    var myDate = new Date(dob1);
    var today = new Date();
    var age = today.getFullYear() - myDate.getFullYear();
    var fileInput = document.getElementById("file");
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
    var val = document.getElementById("mno1").value;
    var re = /^([0-9]+[\.]?[0-9]?[0-9]?|[0-9]+)$/g;
    var re1 = /^([0-9]+[\.]?[0-9]?[0-9]?|[0-9]+)/g;
    var e = document.getElementById("city");
    var strUser = e.options[e.selectedIndex].value;
    var strUser1 = e.options[e.selectedIndex].text;


    
    if (user == "" ) 
    {
        document.getElementById("user").innerHTML = "**Please fill UserName";
        return false;
    }
    else if (!isNaN(user)) 
    {
        document.getElementById("user").innerHTML = "**Please fill Only Charcter";
        return false;
    }
    if (email == "") 
    {
        document.getElementById("email").innerHTML = "**Please fill the Email";
        return false;
    }
    else if ( atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) 
    {
        document.getElementById("email").innerHTML = "**please enter email like sam@xyz.com";
        return false;
    } 
    if (psw == "") 
    {
        document.getElementById("password").innerHTML = "**Please fill the Password";
        return false;
    }
    else if (psw.length < 8) 
    {
        document.getElementById("password").innerHTML = "**password must be in 8 Digits";
        return false;
    }
    if (mobileN == "") 
    {
        document.getElementById("mno").innerHTML = "**Please fill the Phone Number";
        return false;
    }
    else if (isNaN(mobileN)) 
    {
        document.getElementById("mno").innerHTML = "**Please fill the Digits like123";
        return false;
    }
    else if (mobileN.length < 10) 
    {
        document.getElementById("mno").innerHTML = "**Please fill the 10 digit number";
        return false;
    }
    else if (mobileN.length > 12)  
    {

        document.getElementById("mno").innerHTML = "**The number is not more than 12 digit";
       return false;
    }
    
    if (re.test(val)) 
    {
        document.getElementById("mno").innerHTML = "";
        
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
        
        document.getElementById("mno").innerHTML = "enter nummbers only";
    }
    
    if (dob == "") 
    {
       document.getElementById("dob1").innerHTML = "**required";
       return false;
    }

    else if ( myDate > today ) 
    { 
        document.getElementById('dob1').innerHTML = "**You Can not Select Futer Date";
        return false;
    }
    else if (age < 10) 
    {

      document.getElementById('dob1').innerHTML= "**You are not eligible";
      return false;
    }

    if ( form.gender[0].checked == false && form.gender[1].checked == false ) 
    {
        document.getElementById("genders").innerHTML = "**gender must be choosen";
        return false;
    }
    else
    {
        document.getElementById("genders").innerHTML= " ";
    }
    if (addr.trim()  === "") 
    {
        document.getElementById("adr").innerHTML = "**Please fill the address field";
        return false;
    }

    if ( ( form.hobbies[0].checked == false )  && ( form.hobbies[1].checked == false ) && ( form.hobbies[2].checked == false ) ) 
    {
        document.getElementById("hobbies").innerHTML= " **Please choose your Hobby";
        return false;
    }
    else
    {
        document.getElementById("hobbies").innerHTML= " ";
    }
    if(strUser==0)
    {
    document.getElementById("select").innerHTML = "please select the city";
    return false;
    }
    if (filePath == "") 
    {
        document.getElementById("files").innerHTML = "**please select file";
        return false;
    }
}


