<?php include('register.php') ?>

<html>
<head>
<link rel="stylesheet" media="screen" href="bootstrap.min.css">

<script type = "text/javascript">
   function signup()
   {
      var email = document.forms["form2"]["email"].value;
      var pass = document.forms["form2"]["pwd"].value;
      var phone = document.forms["form2"]["phone"].value;
      var ssn = document.forms["form2"]["ssn"].value;
      if(reg()&& emailValidation(email)&&ssnValidation(ssn)&&phoneValidation(phone))

      {

         $.ajax
            ({
            type:'post',
            url:'index.php',
            data:{
               signup
            :"signup",
               email:email,
               password:pass,
               phone: phone ,
               ssn:ssn,
            },
            success:function(response)
            {
               if(response=="success")
               {
                  window.location.href="index.php";
               }
               else
               {

                     alert("Wrong Details");
               }
            }
         });
      }
         return false;
   }


   function reg()
   {
      var var1 = document.forms["form2"]["Fname"].value;
      var var2 = document.forms["form2"]["email"].value;
      var var3 = document.forms["form2"]["pwd"].value;
      var var4 = document.forms["form2"]["cpwd"].value;
      var var5 = document.forms["form2"]["Lname"].value;
      var var6 = document.forms["form2"]["phone"].value;
      var var7 = document.forms["form2"]["birth"].value;
      var var8 = document.forms["form2"]["address"].value;
      var var9 = document.forms["form2"]["ssn"].value;
      var var10 = document.forms["form2"]["Gender"].value;

      if (var1.trim() == "" || var2.trim()=="" || var3.trim()=="" || var4.trim()=="" || var5.trim()==""|| var6.trim()==""|| var7.trim()==""|| var8.trim()=="" || var9.trim()==""|| var10.trim()=="")
      {
         alert("Please fill all fields");
         return false;
      }
      else if(var3 !=var4)
      {
         alert("password and confirm password don't match");
         return false;
      }
      else
      {
         return true;
      }
   }

   function ssnValidation(ssn)
{
//ssn = document.forms["form2"]["ssn"].value
  var ssnPattern = /^\d{14}$/;
  if(ssnPattern.test(ssn))
        {
      return true;
        }
      else
        {
        alert("SSN must be 14 digit");
        return false;
        }
}

   function phoneValidation(phone){
  // phone = document.forms["form2"]["phone"].value
   var phonePattern = /^\d{11}$/;
   if( phonePattern.test(phone))
        {
      return true;
        }
      else
        {
        alert("Phone Number must be 11 digit");
        return false;
        }
}


   function emailValidation(email){
 //  email =document.forms["form2"]["email"].value
   var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
   if( emailPattern.test(email))
   {
      return true;
   }
   else
   {
      alert("Please enter correct email address");
      return false;
   }
 }
   </script>
</head>
<body class="modal-body">
<style>
body {
  background-image: url('sig1.jfif');
  background-repeat: no-repeat;
  background-attachment:fixed;
  background-size:cover;
  overflow-x: hidden;
}
.btn {
  position: absolute;
  top: 92%;
  left: 73%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 4px 24px;
  border: none;
  cursor: pointer;
  border-radius: 3px;
  text-align: center;
}

.container .btn:hover {
  background-color: black;
}
</style>

<h1 style="color:white; margin-left:45%; font-family: Cambria ">Sign up<h1>
<form action='#' method='post' onsubmit="return signup();" id="form2">
<div class="form-group">
<label style="width:20%;font-size:17;color:white;margin-left:55%;; font-family: Cambria" class="form-control-plaintext" >First name:</label>
<input style="width:20%;font-size:15;color:black;margin-left:55%;; font-family: Cambria"type='text' class="form-control" name='Fname'/>
<label style="width:20%;font-size:17;color:white;margin-left:55%;; font-family: Cambria" class="form-control-plaintext" >Last name:</label>
<input style="width:20%;font-size:15;color:black;margin-left:55%;; font-family: Cambria"type='text' class="form-control" name='Lname'/>
<label style="width:20%;font-size:17;color:white;margin-left:55%;; font-family: Cambria" class="form-control-plaintext" >SSN:</label>
<input style="width:20%;font-size:15;color:black;margin-left:55%;; font-family: Cambria"type='text' class="form-control" name='ssn'/>
<label style="width:20%;font-size:17;color:white;margin-left:55%;; font-family: Cambria"class="form-control-plaintext" >Email:</label>
<input style="width:20%;font-size:15;color:black;margin-left:55%;; font-family: Cambria"type='text' class="form-control" name='email'/>
<label style="width:20%;font-size:17;color:white;margin-left:55%;; font-family: Cambria" class="form-control-plaintext" >Password:</label>
<input style="width:20%;font-size:15;color:black;margin-left:55%;; font-family: Cambria"type='password' class="form-control" name='pwd'/>
<label style="width:20%;font-size:17;color:white;margin-left:55%;; font-family: Cambria" class="form-control-plaintext" >Confirm Password:</label>
<input style="width:20%;font-size:15;;margin-left:55%;; font-family: Cambria"type='password' class="form-control" name='cpwd'/>
<label style="width:20%;font-size:17;color:white;margin-left:55%;; font-family: Cambria" class="form-control-plaintext" >Phone:</label>
<input style="width:20%;font-size:15;color:black;margin-left:55%;; font-family: Cambria"type='text' class="form-control" name='phone'/>
<label style="width:20%;font-size:17;color:white;margin-left:55%;; font-family: Cambria" class="form-control-plaintext" >Address:</label>
<input style="width:20%;font-size:15;color:black;margin-left:55%;; font-family: Cambria"type='text' class="form-control " name='address'/>
<label style="width:20%;font-size:17;color:white;margin-left:55%;; font-family: Cambria" class="form-control-plaintext" >Gender:</label>

<select style="margin-left:55%;; font-family: Cambria;font-size:20" name="Gender" id="Gender">
<option style="margin-left:55%;; font-family: Cambria;font-size:20" class="form-control-plaintext"  value="">F/M</option>
<option class="form-control-plaintext" value="f">female</option>
<option  class="form-control-plaintext" value="m">male</option>
</select>

<label style="font-size:20;color:white;margin-left:55%;; font-family: Cambria" class="form-control-plaintext" for="birth_date">Birth Date:</label>
<input style="width:15%; font-size:20;color:black;margin-left:55%;; font-family: Cambria"  type="date" id="birth_date" name="birth">


</div>
<div style="margin-top: 1">
<button class ="btn"><input type='submit' name='reg_user' class="btn btn-success" value='Sign Up' /></button>
</div>
</form>
<a href="index.php" style="margin-left:55%;; font-family: Cambria; color:white ; font-size: 18px;margin-left:55%;; font-family: Cambria">Already have an account ?</a>

<!-- </main> -->
</body>
</html>
