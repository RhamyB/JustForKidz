<!DOCTYPE HTML>
<html>
	<head>
		<title>Just For Kidz</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

		<link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="icon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
		<link rel="manifest" href="icon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="icon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo">Just For Kidz</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li><a href="index.php">About</a></li>
							<li><a href="projects.php">Projects</a></li>
							<li class="active"><a href="getinvolved.php">Get Involved</a></li>
							<li><a href="#">Donate</a></li>
							<li><a href="#">Team</a></li>
						  	<li><a href="blog.php">Blog</a></li>
						  	<li><a href="elements.html">Elements</a></li>
						</ul>
						<ul class="icons">
						  	<li><a href="https://twitter.com/just__for__kidz" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/jfkorg/" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/jfkorg/" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
								<header class="major">
									<h1>Get Involved</h1>
								</header>
								
								<div class="box alt">
									<div class="row 50% uniform">
										<div class="4u"><h2 style="text-align: center;">Volunteering</h2></div>
										<div class="4u"><h2 style="text-align: center;">Educate &amp; Advocate</h2></div>
										<div class="4u$"><h2 style="text-align: center;">Start a Chapter</h2></div>
										<!-- Break -->
										<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
										<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
										<div class="4u$"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
										<!-- Break -->
										<div class="4u" style="padding: 25px;"><p style="text-align: left;">We welcome all youth volunteers interested in making a positive impact in the world and facilitating kids around the world acheive their fullest potential! Fill out an application today to become an official volunteer and start fundraising and volunteering at fundraisers in your area! Use the <a href="#footer">contact form</a> below to let us know you'd like to volunteer and we'll get back to you with more details.</p></div>
										<div class="4u" style="padding: 25px;"><p style="text-align: left;">Fundraising and volunteering not really your thing? Educate yourself and others on global issues impacting children and children's rights violations across the globe. Advocate for change using your social media and tag us on Facebook (@jfkorg) and on Instagram (@jfkorg) and on Twitter (@just__for__kidz). We'd love to hear about what matters to you and why!</p></div>
										<div class="4u$" style="padding: 25px;"><p style="text-align: left;">Sponsor a school chapter and encourage students in your school to get involved! Resources like Amnesty International and Child Right's Campaign can be used to education students and make them aware of children's issues and children's human rights violations across the world! Use the <a href="#footer">contact form</a> below to let us know you want to get started and we'll go from there.</p></div>
									</div>
								</div>
							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="email/">
								<div class="field">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" />
								</div>
								<div class="field">
									<label for="email">Email</label>
									<input type="text" name="email" id="email" />
								</div>
								<div class="field">
									<label for="message">Message</label>
									<textarea name="message" id="message" rows="3"></textarea>
								</div>
								<ul class="actions">
									<li><input type="submit" name="submit" id="submit" value="Send Message" />&nbsp;&nbsp;&nbsp;<?php if (isset($_GET['msg'])) {echo $_GET['msg'];} ?></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p>16205 Wynncrest Ridge Ct<br />
									Wildwood, MO 63005</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="tel:6364481119">(636) 448-1119</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="mailto:info.jfkorg@gmail.com">info.jfkorg@gmail.com</a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="https://twitter.com/just__for__kidz" target="_blank" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/jfkorg/" target="_blank" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/jfkorg/" target="_blank" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy;&nbsp;
							<script type="text/javascript">
                    		var d = new Date()
                     		document.write(d.getFullYear())
                    		</script>&nbsp;
                    		Just For Kidz Org</li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>