<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title>Booking System</title>

<link rel="stylesheet" type="text/css" href="css/login-register.css">
</head>
<body>
   <div class="hero"> 
   		<div class="log-box">
   			<div class="button-box">
   				<div id="btn"></div>
         			<button type="button" class="toggle-btn" onclick="login()"> Log In</button>
         			<button type="button" class="toggle-btn" onclick="Register()">Register</button>
   		    </div>

   				<div class="logo">
   					<img src="/img/anim.gif">
   				</div>	

   				<form id="login" class="input" method="GET" class="/login-register">
                  @csrf
   					<input type="text" name="txtem" class="input-field" placeholder="Email: "  required>
   					<input type="password" name="txtpa" class="input-field" placeholder="Password:" id="password"  required>
                  <div id="toggle" onclick="showhide();"></div>
                  <div class="regtxt">If you don't have Account top the <b>REGISTER</b> buttont on top!
               </div>

                  <br>
                  <br>
   					<input type="submit" class="submit" name="login" value="Login">
   				</form>
   				<form id="register" class="input" method="POST" class="/Login_Register">
                  @csrf
   					<input type="text" name="uname" class="input-field" placeholder="Username: " required>
   					<input type="text" name="email" class="input-field" placeholder="Email: " required>
   					<input type="password" name="pass" class="input-field" placeholder="Password:" id="password" required>
                  <div id="toggle" onclick="showhide();"></div>
                  <br>
                  <br>
   					<input type="submit" class="submit" name="reg" value="Signup">
   				</form>
   		</div>
   </div>
<!-- Function of login and Register-->      
<script>
	var x = document.getElementById("login");
   var y = document.getElementById("register");
	var z = document.getElementById("btn");

	function Register(){
		x.style.left="-480px";
		y.style.left="50px";
		z.style.left="110px";
	}
   function login(){
      x.style.left="50px";
      y.style.left="450px";
      z.style.left="0px";
   }
</script>


<!-- Function of Show Password--> 

<script type="text/javascript">
   const password = document.getElementById('password');
   const toggle = document.getElementById('toggle');

   function showhide(){
      if (password.type === 'password'){
         password.setAttribute('type', 'text');
         toggle.classList.add('hide')
      }
      else {
         password.setAttribute('type', 'password');
         toggle.classList.remove('hide')
      }
   }
</script>

</body>
</html>