<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/homestyle.css">
<head>
	<title>Home</title>
</head>
<body>

<div id="covertop">
	
	<div><img src="img/cover2.jpg" class="cover"></div>
	<div><img src="img/logo.png" class="profile"></div>
	<div class="resortN">Cozy Place Resort</div>
	
</div>


<div id="navbar">
		<a href="Resort_Booking"><input class="out" type="submit" name="" value="log Out"></a>
		<a href="Form"><input class="Book" type="submit" name="" value="Book Now"></a>
		<a href="About">ABOUT</a>		
</div>

<div id="videoback">
		<div id="video">
			<video width="135" height="240" autoplay loop muted class="vidL"> 
			  	<source src="img/vid2.mp4" type="video/mp4">
			 	<source src="movie.ogg" type="video/ogg">
			</video>

			<video width="200" height="240" autoplay loop muted>
			 	<source src="img/vid4.mp4" type="video/mp4">
			  	<source src="movie.ogg" type="video/ogg">
			</video>

			<video width="550" height="240" autoplay loop muted>
			  	<source src="img/vid3.mp4" type="video/mp4">
			  	<source src="movie.ogg" type="video/ogg">
			</video>

			<video width="200" height="240" autoplay loop muted>
			  	<source src="img/vid1.mp4" type="video/mp4">
			  	<source src="movie.ogg" type="video/ogg">
			</video>

			<video width="135" height="240" autoplay loop muted class="vidR">
				<source src="img/vid5.mp4" type="video/mp4">
				<source src="movie.ogg" type="video/ogg">
			</video>
		</div>
</div>
<div id="pool">
	<div class="pool">
		<label>Cottage & Pool</label>
	</div>
</div>


<div id="imgGallary" class="container">
    <img src="img/cot1.png" alt="" width="100%" height="300" class="cottage" />
    <img src="img/cot2.jpg" alt="" width="100%" height="300" />
    <img src="img/cot3.jpg" alt="" width="100%" height="300" />
</div>

<div id="imgGallar" class="container2">
    <img src="img/pool1.jpg" alt="" width="100%" height="300" />
    <img src="img/pool2.jpg" alt="" width="100%" height="300" />
    <img src="img/pool3.jpg" alt="" width="100%" height="300" />
    
</div>

<div id="venue">
	<div class="venue">
		<label>Events Venue</label>
	</div>
</div>


<div id="imgback">
		<div>
			<img src="img/1.jpg" class="image" style="margin-right: 62px;">
			<img src="img/5.jpg" class="image" style="margin-right: 62px;">
			<img src="img/3.jpg" class="image">
			<br>
			<br>
			<img src="img/2.jpg" class="image2" style="margin-left: 30px">
			<img src="img/4.jpg" class="image2" style="margin-right: 30px; margin-left: 30px;">
			<img src="img/6.jpg" class="image2" >
		</div>
</div>

<script>
(function(){
        var imgLen = document.getElementById('imgGallary');
        var images = imgLen.getElementsByTagName('img');
        var counter = 1;

        if(counter <= images.length){
            setInterval(function(){
                images[0].src = images[counter].src;
                console.log(images[counter].src);
                counter++;

                if(counter === images.length){
                    counter = 1;
                }
            },4000);
        }
})();
</script>
<script>
(function(){
        var imgLen = document.getElementById('imgGallar');
        var images = imgLen.getElementsByTagName('img');
        var counter = 1;

        if(counter <= images.length){
            setInterval(function(){
                images[0].src = images[counter].src;
                console.log(images[counter].src);
                counter++;

                if(counter === images.length){
                    counter = 1;
                }
            },4000);
        }
})();
</script>
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