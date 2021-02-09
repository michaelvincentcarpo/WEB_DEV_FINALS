<!DOCTYPE html>
<html>
<head>
	<title> ADMIN </title>
<link rel="stylesheet" type="text/css" href="css/adminv2.css">	
</head>
<div class="head" id="navbar">
			<div class="search">
				<label class="searchtext">Enter Client Code &nbsp;&nbsp;</label>
				<input type="text" placeholder="Search" name="id" class="inputsearch">
				<input type="submit" class="sub" value="Search" name="search"> 
				<label class="admintext"> DB Admin</label>
				<a href="/Admin">Admin</a>
			</div>
		</div>
<body> 
		<table border = 1>
		<th>id</th>	
		<th>lname</th>
		<th>fname</th>
		<th>barangay</th>
		<th>municipality</th>
		<th>province</th>
		<th>number</th>
		<th>email</th>
		<!-- <th>cottage_no</th>
		<th>kids</th>
		<th>adults</th>
		<th>senior</th> -->
		<th>date_of_reg</th>
		<!-- <th>time_</th>
		<th>start</th>
		<th>end_</th>
		<th>cottage_s</th>
		<th>cottage_m</th>
		<th>cottage_l</th>
		<th>venue</th> -->
		<th>Action</th>

		@foreach($users as $profile)
			<tr>
				<td> {{ $profile->id}}</td>
				<td> {{ $profile->lname}}</td>
				<td> {{ $profile->fname}}</td>
				<td> {{ $profile->barangay}}</td>
				<td> {{ $profile->municipality}}</td>
				<td> {{ $profile->province}}</td>
				<td> {{ $profile->phone}}</td>
				<td> {{ $profile->email}}</td>
				<!-- <td> {{ $profile->cottage_no}}</td>
				<td> {{ $profile->kids}}</td>
				<td> {{ $profile->adult}}</td> 
				<td> {{ $profile->senior}}</td> -->
				<td> {{ $profile->date_of_reg}}</td>
				<!-- <td> {{ $profile->time_}}</td>
				<td> {{ $profile->start}}</td>
				<td> {{ $profile->end_}}</td>
				<td> {{ $profile->cottage_s}}</td>
				<td> {{ $profile->cottage_m}}</td>
				<td> {{ $profile->cottage_l}}</td>
				<td> {{ $profile->venue}}</td> -->
				<td>
				<a href="/Update_v2/{{$profile->id}}">UPDATE/DETAILS</a>
			</td>
			</tr>
		@endforeach
			

	</table>
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