<!DOCTYPE html>
<html>
    <head>
        <title>
            Cottage Booking 
        </title>
    </head>
    
        <style type="text/css">
            *{
        margin: 0;
        }
        .navbar{
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }
        .navbar a{
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar a:hover{
            background: #ddd;
            color: #111;
        }
        .nav-header{
            width:100%;
            height:80px;
            position:absolute;
            background:#3d5b99;
            top:0;
            left:0;
            color:white;
            z-index:7;
            font-family:verdana;
        }
        section{
            position: fixed;
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
        .fb-body{
            position:absolute;
            left:0px;
            top:90px;
            width:100%;
            height:600px;   
        }
        #intro1{
            left:178px;
            top:10px;
            font-family:verdana;
            font-size:20px;
            color:black;
            height:75px;
            width:550px;
        } 
        #intro2{
            left:750px;
            top:10px;
            font-family:verdana;
            font-size:30px;
            color:#000;
            font-weight:bold;
            height:75px;
            width:500px;
        }
        #intro3{
            top:80px;
            left:178px;
            width:537px;
            height:195px;
        }
        #form1{
            top:60px;
            left:750px;
            font-family:verdana;
            font-size:20px;
            color:black;
            width:500px;
            height:495px;  
          }
 
        </style>
     <body>
        <header>
            <div class="fixed-top container">
                <div class="wrapper">
                    <div class="logo">
                        
                    </div>
                    
                
                    <nav class="navbar">
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
                <section>
                    <div class="fb-body">
                        <div id="intro1" class="fb-body"><h2>Connect with friends and the world around you on Facebook.</h2></div>
                        <div id="intro2" class="fb-body">Sign Up</div>
                        <div id="intro3" class="fb-body"><br><br>
                            <p><b>See photos and updates</b> from friends in News Feed.</p><br><br>
                            <p><b>Share what's new</b> in your life on your Timeline.</p><br><br>
                            <p><b>Find more</b> of what you're looking for with Facebook Search.</p>
                     </div><br>

                    <div id="form1" class="fb-body">
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
        </body>
    </link>
</html>