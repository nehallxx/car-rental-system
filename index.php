<?php include('loginCustomer.php')?>
<?php include('loginAdmin.php')?>

<html>
<head>
<link rel="stylesheet" media="screen" href="bootstrap.min.css">


<script type = "text/javascript">
   function do_login()
   {

      var email = document.forms["form1"]["email"].value;
      var pass = document.forms["form1"]["pwd"].value;

      if(required())
      {

         $.ajax
            ({
            type:'post',
            url:'index.php',
            data:{
               do_login:"do_login",
               email:email,
               password:pass
            },
            success:function(response)
            {
               if(response=="success")
               {
                  var check_box = document.getElementsByName("user");
                  if(check_box[0].value == "customer"){
                     window.location.href="loginCustomer.php";
                  }else if(check_box[0].value == "customer"){
                     window.location.href="loginAdmin.php";
                  }
               }
               else
               {

                     alert("Wrong Details");
               }
            }
         });
      }

      else
      {
         alert("Please Fill All The Details");
      }

      return false;
   }
   function required()
   {
      var empt1 = document.forms["form1"]["email"].value;
      var empt2 = document.forms["form1"]["pwd"].value;
      if (empt1.trim() == "" || empt2.trim()=="")
      {
         return false;
      }
      else
      {
         return true;
      }
   }


</script>

</head>
<body class="modal-body">
<style>
body {
  background-image: url('cool4.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  overflow-x: hidden;

}
.btn {
  position: absolute;
  top: 43.5%;
  left: 34%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 15px;
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
<main  class="container" style="margin-top: 1%;margin-left:20%">
<h1 style="color:white;margin-top:1%;margin-left:10%;font-family: Cambria ">Log in<h1>
<form action='#' method='post' onsubmit="return do_login();" id="form1">
<div class="form-group">
<label style="color:white;font-size:20;margin-top:0.5%" class="form-control-plaintext" >Email:</label>
<input style="width:30% ;margin-top:0.5%" type='text' class="form-control" name='email' id='email'/>
<label style="color:white;font-size:20;margin-top:0.5%" class="form-control-plaintext" >Password:</label>
<input style="width:30% ;margin-top:0.5%" type='password' class="form-control" class="form-control"  name='pwd' id='password'/>

</div>
<div style="margin-top: 1">
<button class ="btn"><input type='submit' name='submit' class="btn btn-success" value='Log in'/></button>

<input type="checkbox" name="user" id="admin" value="admin" onclick="return ValidateSelection();">
<label style="color:white;font-size:13;margin-top:0.25%" for="admin">ADMIN</label>
<input form="myForm" type="checkbox" name="user" id="customer"  value="customer" onclick="return ValidateSelection();">
<label style="color:white;font-size:13;margin-top:0.25%" for="customer">CUSTOMER</label>


</div>
</form>

<a href="signup.php"style=" color:white;margin-left:1%; margin-top:2%; font-size: 15px">Create an account</a><br>


</form>
</main>
</body>
</html>
