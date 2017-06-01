<?php echo'<!-- Footer -->
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
									<li><input type="submit" name="submit" id="submit" value="Send Message" />&nbsp;&nbsp;&nbsp;';
									if (isset($_GET["msg"])) {echo $_GET["msg"];}
									echo '</li>
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
</html>';
?>