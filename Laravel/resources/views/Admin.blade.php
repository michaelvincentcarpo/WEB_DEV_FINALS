<!DOCTYPE html>
<html>
<head>
	<title> ADMIN </title>
</head>
<link rel="stylesheet" type="text/css" href="css/admin.css">	
<body>
	<form action="/search" method="GET" >
	<div class="head" id="navbar">
			<div class="search">

				<label class="searchtext">Enter Client Code &nbsp;&nbsp;</label>
				<input type="text" placeholder="Search" name="id" class="inputsearch">
				<input type="submit" class="sub" value="Search" name="search"> 

				<label class="admintext"> DB Admin</label>
			</div>
		</div>
	</form>
		<br>
		<br>


	
<form method="POST" action="Update.php">
	@csrf
		<div class="form">
			<div>
				<center>
					<img src="img/logo.png" class="profile">
				</center>
			</div>
			<div id="booking">
				<center><label class="booking">CLIENT INFORMATION</label></center>
			</div>
			<br>
			<div>
				<label class="name">NAME:</label>
				
				<input type="text" name="lname" placeholder="Last Name:"  class="Lname"  value="">
				<input type="text" name="fname" placeholder="First Name:" class="Fname" value="">
			</div>
			<br>
			<br>
			<div>
				<label class="address">ADDRESS:</label>
				<input type="text" name="barangay" placeholder="Barangay"     class="brg" value="">
				<input type="text" name="municipality" placeholder="Municipality" class="add" value="">
				<input type="text" name="province" placeholder="Province" 	  class="add" value="">
			</div>
			<br>
			<br>
			<div>
				<label class="Phone">Phone No:</label>
				<input type="number" name="phone" placeholder="Number" class="num" value="">
			</div>
			<br>
			<br>
			<div>
				<label class="gmail">Email:</label>
				<input type="text" name="email" placeholder="Email" class="email" value="">
			</div>
			<br>
			<br>
			<div id="booking">
				<center><label class="booking">BOOKING & COTTAGES</label></center>
			</div>
			<br>
			<div>
				<label class="cottage">COTTAGE NO:</label>
				<input type="text" name="cottage_no" placeholder="" class="cot" value="">
			</div>
			<br>
			<br>
			<div>
				<label class="">NO. OF PERSON:</label>
			</div>
			<br><center>
			<div id="icon">
				
					<img src="img/kids.png"   class="icon">
					<img src="img/adults.png" class="icon">
					<img src="img/old.jpg"    class="icon">

			</div>
			</center>
			<div>
				<label  class="kid">₱100</label>
				<label  class="adult">₱150</label>
				<label  class="senior">₱100</label>
			</div>
			<br>
			<div>
				<label class="cottage">KIDS:</label>
				<input type="text" name="kids" placeholder="" class="dis" value="">
				<label class="cottage">ADULTS:</label>
				<input type="text" name="adult" placeholder="" class="dis" value="">
				<label class="cottage">SENIOR:</label>
				<input type="text" name="senior" placeholder="" class="dis" value="">
			</div>
			<br>
			<br>
			<div>
				<label class="datereg">DATE OF REGISTRATION:</label>
				<input type="date" name="date_of_reg" value="">
			</div>
			<br>
			<div>
				<label id="time">TIME:</label>
				<input  name="time_" class="time" value="">
			</div>
			<br>
			<div>
				<label class="start">START:</label>
				<input type="date" name="start" value="">
			</div>
			<br>
			<div>
				<label class="end">END:</label>
				<input type="date" name="end_" value="">
			</div>
			<br>
			<br>
			<div id="booking">
				<center><label class="booking">COTTAGES</label></center>
			</div>
			<br>
			<div>
				<label  class="kid">SMALL</label>
				<label  class="adult">MEDIUM</label>
				<label  class="senior">LARGE</label>
			</div>
			<div id="cottages">
				
					<img src="img/small1.jpg"   class="cottageS">
					<img src="img/medium.jpg" class="cottageM">
					<img src="img/large.jpg"    class="cottageL">
			</div>
			<div>
				<label  class="cotpriceS">₱450 (8-10)</label>
				<label  class="cotpriceM">₱700 (11-15)</label>
				<label  class="cotpriceL">₱1000 (15-20)</label>
			</div>
			<br>
			<div>
				<label class="cottage">SMALL:</label>
				<input type="number" name="cottage_s" placeholder="" class="dis" value="">
				<label class="cottage">MEDIUM:</label>
				<input type="number" name="cottage_m" placeholder="" class="dis" value="">
				<label class="cottage">LARGE:</label>
				<input type="number" name="cottage_l" placeholder="" class="dis" value="">
			</div>
			<br>
			<br>
			<br>
			<div id="booking">
				<center><label class="booking">VENUE</label></center>
			</div>
			<br>
			<div>
				<label  class="kid">SMALL</label>
				<label  class="adult">MEDIUM</label>
				<label  class="senior">LARGE</label>
			</div>
			<div id="cottages">
				
					<img src="img/V1.jpg"   class="cottageS">
					<img src="img/V2.jpg" class="cottageM">
					<img src="img/V3.jpg"    class="cottageL">
			</div>
			<div>
				<label  class="venpriceS">₱5,000 (30-50)</label>
				<label  class="venpriceM">₱8,000 (51-80)</label>
				<label  class="venpriceL">₱15,000 (81-120)</label>
			</div>

			 <label>VENUE:</label>
			 <input type="" name="venue" value="">
			<br>
			<br>
			<br>
			<center>
			<button type="submit" value="editmit" name="edit" class="Book"> <a href="Update">Edit </a></button>
			</center>


</div>
</form>


<script>
	
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");

var sticky = navbar.offsetTop;
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>