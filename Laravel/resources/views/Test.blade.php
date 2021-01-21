<!DOCTYPE html>
<html lang="en">
<head>
	
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}
		
		.wrapper {
			width: 1170px;
			margin: 0 auto;
		}
		section{
			position: fixed;
		}
		header {
			height: 60px;
			background: #333;
			width: 100%;
			z-index: 10;
			position: fixed;
		}
		.top-name {
			width: 30%;
			float: left;
			line-height: 60px;
		}
		.top-name a {
			text-decoration: none;
			font-size: 30px;
			color: #fff;
			letter-spacing: 5px;
		}
		nav {
			float: right;
			line-height: 60px;
		}
		nav a {
			text-decoration: none;
			letter-spacing: 4px;
			font-size: 20px;
			margin: 0 10px;
			color: #fff;
		}
		.index-body{
            position:absolute;
            left:0px;
            top:110px;
            width:100%;
            height:600px;   
        }
        #intro1{
            left:178px;
            top:30px;
            font-family:verdana;
            font-size:20px;
            color:black;
            height:75px;
            width:550px;
        } 
        #intro2{
            left:750px;
            top:30px;
            font-family:verdana;
            font-size:30px;
            color:#000;
            font-weight:bold;
            height:75px;
            width:500px;
        }
        #img{
            top:80px;
            left:178px;
            width:537px;
            height:195px;
        }
        img{
        	width: 500px;
        	height: 300px;
        	background-color: #555;
        }
        #form1{
            top:80px;
            left:750px;
            font-family:verdana;
            font-size:20px;
            color:black;
            width:500px;
            height:495px;  
          }
        footer{
            position: fixed;
            background-color: #333;
            left: 0;
            bottom: 0;
            padding-top: 20px;
            width: 100%;
            height: 40px;
            color: #f2f2f2;
            text-align: center;
        }
	</style>
</head>
<body>
	<div class="box-area">
		<header>
			<div class="wrapper">
				<div class="top-name">
					<a href="#">Fighter Code</a>
				</div>
				<nav>
					<a class="navbar-brand" href="web.php">
                            Home
                        </a>
                        <a class="nav-link active" href="about.php">
                            About
                        </a>
                        <a class="nav-link" href="#">
                            Contact
                        </a>
                        <a class="nav-link" href="#">
                            Services
                        </a>
				</nav>
			</div>
		</header>
		<div class="index-body">
                   <div id="intro1" class="index-body"><h2>text here</h2></div>
                    <div id="intro2" class="index-body">Sign Up</div>
                    <div id="img" class="index-body"><br><br>
                        <img src="" title="image section " color="white">
             		</div><br>
            <section>
              <div id="form1" class="index-body">
	                <label>Name</label><br>
	                <input placeholder="First Name" type="text" id="namebox" name="fname" />
	                <input placeholder="Last Name" type="text" id="namebox"  name="lname" /> <br><br>
	                <label>address</label><br>
	                <input placeholder="street" type="text" id="mailbox" name="address" />
	                <input placeholder="city" type="text" id="mailbox" name="address" /><br>
	                <input placeholder="postcode" type="text" id="mailbox" name="address" />
	                <input placeholder="country" type="text" id="mailbox" name="address" /><br><br>
	                <label>contact information</label><br>
	                <input placeholder="Contact" type="text" id="mailbox" name="Contact" />
	                <input placeholder="email" type="text" id="mailbox" name="email" /><br><br>
	                <label>date</label><br>
	                <input type="Date" name="date"><br><br>
	                <button class="submit" type="submit" name="submit">Submit</button>
                </div> 
            </section>
                    
            <footer class="fixed-bottom container">
	            <span class="footer">
	                 <p>Fighter Code</p>
	            </span>
            </footer> 
		</div>
	</div>
</body>
</html>
