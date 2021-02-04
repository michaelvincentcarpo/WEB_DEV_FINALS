<!DOCTYPE html>
<html>
<head>
	<title> ADMIN </title>
</head>
<link rel="stylesheet" type="text/css" href="css/adminv2.css">	
<body>
	<div class="head" id="navbar">
			<div class="search">

				

				<label class="admintext"> DB Admin</label>
			</div>
		</div>
	</form>
		<br>
		<br>
		<div class="form">
			<div>
				<center>
					<img src="img/logo.png" class="profile">
				</center>
			</div>
			<div id="booking">
				<center><label class="booking">CLIENT INFORMATION</label></center>
			<table border = 1>
		<th>LAST_NAME</th>
		<th>FIRST_NAME</th>
		<th>BARANGAY</th>
		<th>Action</th>
		@foreach($users as $profile)
			<tr>
				<td> {{ $profile->lname}}</td>
				<td> {{ $profile->fname}}</td>
				<td> {{ $profile->barangay}}</td>
				<td><a href="/delete/{{$profile->id}}">DELETE</a>
				<a href="/edit/{{$profile->id}}">EDIT</a>
			</td>
			</tr>

		@endforeach

	</table>
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