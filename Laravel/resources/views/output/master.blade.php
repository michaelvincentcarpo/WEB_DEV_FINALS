<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		@yield('Title')
	</title>
	
	<link rel="stylesheet" href="css/style.css" />
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

		<section>
				@yield('section')
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
