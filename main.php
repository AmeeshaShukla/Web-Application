<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?>
<!-- Home -->
<div id="home" class="hero-area">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bg.jpg); width:100%; height: 656px;">
	</div>
	<!-- /Backgound Image -->

	<div class="home-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-8">


					<h1 class="white-text" style="font-size: 40px;margin-top: 20px;
							margin-bottom:50px;">Career Guidance System</h1>

					<?php
                    // Check if the user is logged in, if not then redirect him to login page
                    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true): ?>
					<p class="lead white-text" style="margin-left: 5px;"><b>Discover yourself<br>Take the test to find
							the perfect role for you</b></p>

					<a class="main-button icon-button" href="login.php">Get Started!</a>

					<?php else: ?>
					<p class="lead white-text" style="margin-left: 5px;"><b>Hi,
							<?php echo htmlspecialchars($_SESSION["username"]); ?> !<br><b>Discover yourself,<br>Take
								the test to find the perfect role for you.</b></p>

					<a class="main-button icon-button" href="http://127.0.0.1:5000/">Get Started!</a>

					<?php endif ?>


				</div>
			</div>
		</div>
	</div>

</div>
<!-- /Home -->



<!-- Why us -->
<div id="why-us" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">
			<div class="section-header text-center">


				<h2 style="margin-top: 100px; font-size: 45px;">Welcome to Student Career and Personality Prediction Web
					Application</h2>
				<!--<p class="lead">We all want to fly high and in real time!<br> And in this random pursuit of success, we end up making wrong career choices.</p>-->
				<p class="lead">This would help you to know yourself,<br> and to choose the best career for yourself.
				</p>
			</div>
		</div>

		<div class="row">
			<!-- feature -->
			<div class="col-md-4">
				<div class="feature">
					<i class="feature-icon fa "><span> &#x1F50E;&#xFE0E;</span></i>
					<div class="feature-content">
						<a href="#">
							<?php
                            // Check if the user is logged in, if not then redirect him to login page
                            if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true): ?>
							<a href="login.php">
								<h4>Career Prediction</h4>
							</a>
							<?php else: ?>
							<a href="http://127.0.0.1:5000/">
								<h4>Career Prediction</h4>
							</a>


							<?php endif ?>

							<p>Take the test to find the perfect role for you.</p>
					</div>
				</div>
			</div>
			<!-- /feature -->

			<!-- feature -->
			<div class="col-md-4">
				<div class="feature">
					<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
					<div class="feature-content">
						<a href="blog.php">
							<h4>Knowledge Network</h4>
						</a>
						<p>Gain knowledge through various sources, like important informational links, access to study
							materials, etc.</p>
					</div>
				</div>
			</div>
			<!-- /feature -->

			<!-- feature -->
			<div class="col-md-4">
				<div class="feature">
					<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
					<div class="feature-content">
						<a href="courses.php">
							<h4>Online Courses</h4>
						</a>
						<p>Links to relevant Courses.</p>
					</div>
				</div>
			</div>
			<!-- /feature -->

		</div>
		<!-- /row -->

		<hr class="section-hr">

	</div>
	<!-- /container -->

</div>
<!-- /Why us -->

<!-- Call To Action -->
<div id="cta" class="section" style="height: 400px;">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgmid.jpg)"></div>
	<!-- /Backgound Image -->

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<div class="col-md-6">


				<?php
                // Check if the user is logged in, if not then redirect him to login page
                if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true): ?>
				<h2 class="white-text" style="font-size: 30px; width:700px ;">Hi,</h2>

				<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;">Are you all set to get
					started ?</h2>
				<p class="lead white-text">Your Career Path begins here.</p>
				<a class="main-button icon-button" href="register.php">Get Started!</a>
				<?php else: ?>
				<h2 class="white-text" style="font-size: 30px; width:700px ;">Hi, <b>
						<?php echo htmlspecialchars($_SESSION["username"]); ?> !
					</b></h2>

				<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;">Are you all set to get
					started ?</h2>
				<p class="lead white-text">Your Career Path begins here.</p>
				<a class="main-button icon-button" href="main.php">Get Started!</a>

				<?php endif ?>
			</div>

		</div>
		<!-- /row -->

	</div>
	<!-- /container -->

</div>
<!-- /Call To Action -->

<!-- About -->
<div id="about" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<div class="col-md-6">
				<div class="section-header">
					<h2 style="font-size: 35px;">About Us</h2>
					<p class="lead" style="font-size: 18px; font-style: italic; margin-top: 50px;">This is a Student
						Career and personality prediction web application where Students get a personalised experience
						on our site, based on educational background and career interest, which helps them to make
						career decisions. On basis of some questions carrer are advised to students which would help
						students to make their decision in choosing appropriate career for them.The decision making is
						empowered with easy access to detailed information on career choices, courses, exams. We have
						introduced several student oriented products and tools like Career Prediction, Knowledge
						Network, and various Courses related to their Career.</p>
				</div>

			</div>

			<div class="col-md-6">
				<div class="about-img">
					<img src="./img/about.png" alt="">
				</div>
			</div>

		</div>
		<!-- row -->
		<hr class="section-hr">
	</div>
	<!-- container -->
</div>
<!-- /About -->

<!-- Contact CTA -->
<div id="contact-cta" class="section" style="height: 400px;">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>
	<!-- Backgound Image -->

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<div class="col-md-8 col-md-offset-2 text-center">
				<h2 class="white-text">Your strength lies within you</h2>
				<p class="lead white-text">Know yourself and start working <br> harder to built your career.</p>				
				<p class="lead white-text">Luck is what happens when preparation <br> meets opportunity.</p>				

			</div>

		</div>
		<!-- /row -->

	</div>
	<!-- /container -->

</div>
<!-- /Contact CTA -->

<?php include 'footer.php' ?>

</html>