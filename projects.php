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
							<li class="active"><a href="projects.php">Projects</a></li>
							<li><a href="getinvolved.php">Get Involved</a></li>
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
									<h1>Major Projects</h1>
									<p>Catch up on the big things Just For Kidz has been up to!</p>
								</header>
								
								<div class="table-wrapper">
									<table>
										<tbody>
											<tr>
												<td>Item 2</td>
												<td>Arusha, Tanzania (2016-Present)</td>
												<td>According to the World Literacy Foundation, 1 in 5 people in the world cannot read or write. Amnesty International has named education a fundemental right and one of the top-priority children's rights to fight for. In efforts to expand our international impact and advance children's educational rights, Just For Kidz has selected Good Hope Orphanage as the beneficiary of our next project term. We are fundraising to build a secondary school (8th-12th grade) for 716 orphans and poor kids in the village so that they can escape the cycle of poverty and receive a college education. The orphanage will provide accomodations, shelter, and care for about 217 more orphans.</td>
											</tr>
											<tr>
												<td>Item 3</td>
												<td>Port-au-Prince, Haiti (2014-15)</td>
												<td>Just For Kidz collected clothing and shoes to donate to an orphanage in Port-au-Prince that helps about 30 boys and girls. Collecting a total of 4 boxes of clothes and shoes, the Founder personally delivered the clothes and shoes and distributed it among the children as their Christmas presents!</td>
											</tr>
											<tr>
												<td>Item 4</td>
												<td>Chennai, India (2011-16)</td>
												<td>Just For Kidz held bake sales, garage sales, jewelry sales, and talent shows at local community events to fundraise a one-month supply of medication for children with spastic needs at The Spastics Society of Tamilnadu.<br />Just For Kidz is currently working on a mini-project to fundraise for a sewing machine and other basic utilities for Aalayam, an orphanage that provides for 19 orphan boys and girls.</td>
											</tr>
											<tr>
												<td>Item 1</td>
												<td>Walajapet, India (2010-11)</td>
												<td>Just For Kidz fundraised $1,200 dollars to change the asbestos roof of Dheenabandu Ashram, a small orphanage that houses, teaches, and protects about 200 orphans and poor children in the village. The leaky roof prevented the students from attending class, caused heat stroke, and put them at risk for mesothelioma. Volunteers and donations completely maintain the orphanage, as the government only grants 10 cents per child per day.</td>
											</tr>
										</tbody>
									</table>
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