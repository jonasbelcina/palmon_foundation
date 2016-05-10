<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

	<footer>
		<div class="container">
			<div class="row">
				<div class="footer-top">
					<ul class="footer-nav">
						<li><a href="<?php echo home_url(); ?>/">Events</a></li>
						<li><a href="<?php echo home_url(); ?>/">News</a></li>
						<li><a href="<?php echo home_url(); ?>/">Contact</a></li>
					</ul>

					<ul class="footer-social">
						<li><a href="#" target="_blank"></a></li>
						<li><a href="#" target="_blank"></a></li>
						<li><a href="#" target="_blank"></a></li>
						<li><a href="#" target="_blank"></a></li>
					</ul>
				</div>

				<div class="footer-mid">
					<div class="col-lg-9 col-md-9 col-sm-8">
						<div class="row">
							<div class="col-md-3 col-sm-7">
								<div class="row">
									<h3>Contact Us <span class="glyphicon glyphicon-plus"></span></h3>
									<ul>
										<li><a href="mailto:hello@palmon.com">hello@palmon.com</a></li>
										<li>Studio M, 4th Floor8 Lower Dubai</li>
										<li>+38 888 6 0875 9922</li>
									</ul>
								</div>
							</div>

							<div class="col-md-3 col-sm-5">
								<div class="row">
									<h3>Who We Are <span class="glyphicon glyphicon-plus"></span></h3>
									<ul>
										<li><a href="<?php echo home_url(); ?>/">About Us</a></li>
										<li><a href="<?php echo home_url(); ?>/">The Need</a></li>
										<li><a href="<?php echo home_url(); ?>/">Board of Directors</a></li>
										<li><a href="<?php echo home_url(); ?>/">Advisory Council</a></li>
									</ul>
								</div>
							</div>

							<div class="col-md-3 col-sm-7">
								<div class="row">
									<h3>What We Do <span class="glyphicon glyphicon-plus"></span></h3>
									<ul>
										<li><a href="<?php echo home_url(); ?>/">Women Empowerment</a></li>
										<li><a href="<?php echo home_url(); ?>/">Girl Education</a></li>
										<li><a href="<?php echo home_url(); ?>/">Our Programs</a></li>
									</ul>
								</div>
							</div>

							<div class="col-md-3 col-sm-5">
								<div class="row">
									<h3>Get Involved <span class="glyphicon glyphicon-plus"></span></h3>
									<ul>
										<li><a href="<?php echo home_url(); ?>/">Volunteering</a></li>
										<li><a href="<?php echo home_url(); ?>/">Mentorship</a></li>
										<li><a href="<?php echo home_url(); ?>/">Donate</a></li>
										<li><a href="<?php echo home_url(); ?>/">Sponsor a Child</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-4">
						<div class="row">
							<h3>Newsletter</h3>
							<p>Subscribe to the newsletter</p>
							<form>
								<input type="email" placeholder="Enter your e-mail here" />
								<input type="submit" value="" />
							</form>
						</div>
					</div>
				</div>

				<div class="footer-bot">
					<div class="footer-copy">
						&copy; 2016 All rights reserved
					</div>

					<div class="footer-heych">
						Powered by <a href="http://heych.com/" target="_blank">Heych</a>
					</div>
				</div>

			</div>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>
