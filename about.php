<!DOCTYPE html>
<html lang="en-US" >
<head>
	<!-- Meta tags & title /-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="robots" content="all,index,follow" />

	<title>Our Team</title>
	<meta name="description" content="Speakers - Free Meet the Team Section Tutorial" />

	<!-- Stylesheets /-->
	<link rel="stylesheet" type="text/css" href="css/style.css" /> <!-- Main stylesheet /-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> <!-- Grid framework /-->
	<link href="css/common.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'> <!-- Open Sans /-->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'> <!-- PT Sans Narrow /-->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> <!-- Font Awesome /-->

	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" /> <!-- Favicon /-->

</head>

<body >
	<?php include_once "header.php"; ?>

	<!-- SPEAKERS SECTION -->
	<section id="speakers">
		<h3>Our Team</h3> <!-- Section Title -->
		<div class="separator"></div>
		<div class="container">
			<div class="col-md-8 col-md-offset-2">
				<!-- Section Description -->
				<blockquote>
					<p style="font-size:25px;"><span style="font-size:75px;">&ldquo;</span> Individually we are one drop but together we are an ocean. We are not a team because we work together we are a team because we RESPECT, TRUST and CARE for each other.....</p>
				</blockquote>
			</div>

			<!-- First Row of Speakers -->
			<div class="row1">

				<!-- Speaker 1 -->
				<div class="col-md-3">
					<a class="member-profile">
						<div class="unhover_img">
						<img src="img/speaker-1.png" alt="" />
						</div>
						<div class="hover_img">
						<img src="img/speaker-1-hover.png" alt="" />
						</div>
						<span>President</span>
						<h4><span>Lakshay </span> Mathur</h4>
					</a>

				</div>

				<!-- Speaker 2 -->
				<div class="col-md-3">
					<a class="member-profile">
						<div class="unhover_img">
						<img src="img/speaker-2.png" alt="" />
						</div>
						<div class="hover_img">
						<img src="img/speaker-2-hover.png" alt="" />
						</div>
						<span>Vice President</span>
						<h4><span>Sachin</span> Verma</h4>
					</a>

				</div>
<div class="clear"></div>
				<div class="col-md-3">
					<a class="member-profile">
						<div class="unhover_img">
						<img src="img/speaker-3.png" alt="" />
						</div>
						<div class="hover_img">
						<img src="img/speaker-3-hover.png" alt="" />
						</div>
						<span>Web Developer</span>
						<h4><span>Rohit</span> Malhotra</h4>
					</a>
				</div>

				<!-- Speaker 4 -->
				<div class="col-md-3">
					<a class="member-profile">
						<div class="unhover_img">
						<img src="img/speaker-4.png" alt="" />
						</div>
						<div class="hover_img">
						<img src="img/speaker-4-hover.png" alt="" />
						</div>
						<span>Web Developer</span>
						<h4><span>Sushma</span> Yellapragada</h4>
					</a>
					</div>

			</div> <!-- End First Row -->

			<!-- Second Row of Speakers -->
			<div class="row1">

				<!-- Speaker 5 -->
				<div class="col-md-3">
					<a  class="member-profile">
						<div class="unhover_img">
						<img src="img/speaker-3.png" alt="" />
						</div>
						<div class="hover_img">
						<img src="img/speaker-3-hover.png" alt="" />
						</div>
						<span>Web Developer</span>
						<h4><span>Lakshay</span> Chaudhary</h4>
					</a>
					</div>

				<!-- Speaker 6 -->

			</div>	<!-- End Second Row -->
			<div class="clear"></div>


		</div>
	</section>
	<!-- //SPEAKERS SECTION -->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> <!-- Load jQuery -->

	<!-- jQuery Code for the View All Button -->
	<script>
		$(document).ready(function(){
		  $(".fadeIn").click(function(){
			$("div.row2").fadeIn();
			$("button.fadeIn").hide();
		  });
		});
	</script>
	
<?php include_once "footer.php"; ?>
</body>
</html>
