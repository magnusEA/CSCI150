<!DOCTYPE HTML>
<!--
The homepage. Contains some premade stories to demonstrate the main purposes of the website
-->
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<style>
		
		<!-- Contains css functions that allow the dropdown button to persist. Can be moved to css file 
			  but leaving here for now incase anything breaks-->
			.dropbtn {
				background-color: transparent;
				color: white;
				padding: 0px;
				font-size: 25px;
				border: none;
				cursor: pointer;
			}

			.dropdown {
				position: relative;
				display: inline-block;
			}

			.dropdown-content {
				display: none;
				color: white;
				font-size: 20px;
				position: absolute;
				list-style-type: none;
				background-color: gray;
				min-width: 160px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			}

			.dropdown-content a {
				color: white;
				font-size: 20px;
				padding: 12px 16px;
				text-decoration: none;

				display: block;
			}

			.dropdown-content a:hover {background-color: #f1f1f1}

			.dropdown:hover .dropdown-content {
				display: block;
			}

			.dropdown:hover .dropbtn {
				background-color: transparent;
			}
</style>


	</head>

	<body>

		<!-- Wrapper -->
			<div id="wrapper" class="dropdown"  >
				<button class="dropbtn">Menu</button>

				<!-- Header contains dropdown menu and links to other web pages-->
					<header >

						<div class="dropdown-content">
							<! Menu bubbles>
							<li><a href="http://localhost/indexweb.php">Home </a></li>
							<li><a href="http://localhost/enterinfo.html">Make A Story</a></li>
							<li><a href="http://localhost/retrievestory.php">Stories</a></li>
							<li><a href="http://localhost/reading.html">Contact Us</a></li>	
						</div>
					</header>
			</div>
				<!-- Main -->
	
				
					<section id="main">

						<!-- Thumbnails for home page and links to each story -->
							<section class="thumbnails">
								<div>
									<a href="http://localhost/displaytemplate.php?rowid=1">
										<img src="images/thumbs/pbj.jpg" alt="" /> </a>
										<a href="http://localhost/displaytemplate.php?rowid=1" class="button"> Make Your PBJ Sandwich</a>

									<a href="http://localhost/displaytemplate.php?rowid=43">
										<img src="images/thumbs/olddog.jpg" alt="" />
										<a href="http://localhost/displaytemplate.php?rowid=43" class="button"> Celebrate the Dog's Birthday </a>
									</a>
								</div>

								<div>
									<a href="http://localhost/displaytemplate.php?rowid=49">
										<img src="images/thumbs/momsurprised.jpg" alt="" />
										<a href="http://localhost/displaytemplate.php?rowid=49" class="button"> What Did You Get Caught Doing? </a>
									</a>
									<a href="http://localhost/displaytemplate.php?rowid=44">
										<img src="images/thumbs/drivethru.jpg" alt="" />
										<a href="http://localhost/displaytemplate.php?rowid=44" class="button"> What's On the Menu? </a>
									</a>
									<a href="http://localhost/displaytemplate.php?rowid=45">
										<img src="images/thumbs/pc.jpg" alt="" />
										<a href="http://localhost/displaytemplate.php?rowid=45" class="button"> Build Your PC </a>
									</a>
								</div>

								<div>
									<a href="http://localhost/displaytemplate.php?rowid=46">
										<img src="images/thumbs/askout.jpg" alt="" />
										<a href="http://localhost/displaytemplate.php?rowid=46" class="button"> Ask A Girl Out </a>
									</a>
									<a href="http://localhost/displaytemplate.php?rowid=47">
										<img src="images/thumbs/friends.jpg" alt="" />
										<a href="http://localhost/displaytemplate.php?rowid=47" class="button"> Make Some Friends </a>
									</a>
								</div>

							</section>

					</section>

				<!-- Footer -->
					<footer id="footer">

					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
