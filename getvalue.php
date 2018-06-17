<?php

    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "dwm_database";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
	$conn->set_charset("utf8");
	$t = 0;
	if($_POST['text'] != "")
	{
		$k = $_POST['text'];
		$t = 1;
	}
	$t_2 = 0;
	$k_2 = $_POST['default-text'];
	if($_POST['default-text-English'] != "")
	{
		$k_english = $_POST['default-text-English'];
		$t_2 = 1;
	}
	$sql = 'SELECT DISTINCT word, meaning1 FROM tbl_hindi WHERE meaning1="'. $k. '"';
	$sql_2 = 'SELECT DISTINCT word, meaning1 FROM tbl_hindi WHERE word="'. $k_english. '"';
    #print $sql."<br>";Q
	$result = $conn->query($sql);
	$result_2 = $conn->query($sql_2);

    

?>


	<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>Homepage</title>
	<link rel="icon" href="favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600" rel="stylesheet" type="text/css">

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/normalize.css">
  	<link rel="stylesheet" href="css/skeleton.css">
 	 <link rel="stylesheet" href="css/itrans.css">

	<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script type="text/javascript" src="js/magnific-popup.js"></script>
	<script src="contactform/contactform.js"></script>

	<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

</head>

<body>
	<header class="header" id="header">
		<!--header-start-->
		
		<div class="container">
			<figure class="logo animated fadeInDown delay-07s">
				<a href="#"><img src="img/logo.jpg " alt=""></a>
			</figure>
			<h1 class="animated fadeInDown delay-07s">Hindi - English Translator</h1>
			<ul class="we-create animated fadeInUp delay-1s">
				<li>Hindi (Devanagari) &#8596; Hindi (Roman) &#8596; English</li>
			</ul>
			<div>
		</div>
		<div>
				<!-- div#i-input contains a form, with a textarea for input, load and clear buttons -->
				<!--<br class="u-cf">
				<a href="https://docs.google.com/spreadsheets/d/14wZl8zCa4khZV3El2VGoqurKBLGx21mbS-yORi4w7Qo/edit?usp=sharing">Spreadsheet with all itrans input codes</a>
				<br>
				<a href="#example">Example itrans input text and output</a>
                -->
                <div class="link-2">
                    <label for="i-t">English translation:</label>
                    <br>
                    <textarea id="i-t" rows="10" cols="50" name="text" class="form-control" placeholder="Converted text will be displayed here..." readonly="">
                       <?php
                            if ($result->num_rows > 0 and $t == 1) {
                                echo "&#10;&#10;";
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "Word: " . $row["word"]. " - Meaning: " . $row["meaning1"]. "&#10;&#10;";
                                }
                            } else {
                                echo "No meaning found for \"".$k_2."\", please try again";
                            }
                        ?>
					</textarea>
					
                    <label for="i-t-2">Hindi translation:</label>
                    <br>
                    <textarea id="i-t-2" rows="10" cols="50" name="text" class="form-control" placeholder="Converted text will be displayed here..." readonly="">
                       <?php
                            if ($result_2->num_rows > 0 and $t_2 == 1) {
                                echo "&#10;&#10;";
                                // output data of each row
                                while($row_2 = $result_2->fetch_assoc()) {
                                    echo "Word: " . $row_2["word"]. " - Meaning: " . $row_2["meaning1"]. "&#10;&#10;";
                                }
                            } else {
                                echo "No meaning found for \"".$k_2."\", please try again";
                            }
                            $conn->close();
                        ?>
                    </textarea>
                        
                    <a href="index.html"><button type="submit">Go back</button></a>
                </div>
		</div>

		  
		
	</header>
	<!--header-end-->
	
	<div style="display: block; width: 0px; height: 0px; float: none;"></div>
	<!--main-nav-end-->



	
	<!--main-section-end-->



	
	<!--main-section alabaster-end-->



	
	<!--main-section-end-->


	
	<section class="main-section team" id="team">
		<!--main-section team-start-->
		<div class="container">
			<h2>team</h2>
			<h6>Take a closer look into our amazing team. We won’t bite.</h6>
			<div class="team-leader-block clearfix">
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s animated" style="visibility: visible; animation-name: fadeInDown;">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/team-leader-pic1.jpg" alt="">
						<ul>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-pinterest"></a></li>
							<li><a href="#" class="fa fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-03s animated" style="visibility: visible; animation-name: fadeInDown;">Walter White</h3>
					<span class="wow fadeInDown delay-03s animated" style="visibility: visible; animation-name: fadeInDown;">Chief Executive Officer</span>
					<p class="wow fadeInDown delay-03s animated" style="visibility: visible; animation-name: fadeInDown;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
				</div>
				<div class="team-leader-box">
					<div class="team-leader  wow fadeInDown delay-06s animated" style="visibility: visible; animation-name: fadeInDown;">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/team-leader-pic2.jpg" alt="">
						<ul>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-pinterest"></a></li>
							<li><a href="#" class="fa fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-06s animated" style="visibility: visible; animation-name: fadeInDown;">Jesse Pinkman</h3>
					<span class="wow fadeInDown delay-06s animated" style="visibility: visible; animation-name: fadeInDown;">Product Manager</span>
					<p class="wow fadeInDown delay-06s animated" style="visibility: visible; animation-name: fadeInDown;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
				</div>
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-09s animated" style="visibility: visible; animation-name: fadeInDown;">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/team-leader-pic3.jpg" alt="">
						<ul>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-pinterest"></a></li>
							<li><a href="#" class="fa fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-09s animated" style="visibility: visible; animation-name: fadeInDown;">Skyler white</h3>
					<span class="wow fadeInDown delay-09s animated" style="visibility: visible; animation-name: fadeInDown;">Accountant</span>
					<p class="wow fadeInDown delay-09s animated" style="visibility: visible; animation-name: fadeInDown;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
				</div>
			</div>
		</div>
	</section>
	<!--main-section team-end-->



	
	<!--business-talking-end-->
	
	


	<script type="text/javascript">
		$(document).ready(function(e) {

			$('#test').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

      $('.Portfolio-box').magnificPopup({
        delegate: 'a',
        type: 'image'
      });

		});
	</script>

	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
	</script>


	<script type="text/javascript">
		$(window).load(function() {

			$('.main-nav li a, .servicelink').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500, 'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				if ($(window).width() < 768) {
					$('.main-nav').hide();
				}
				event.preventDefault();
			});
		})
	</script>

	<script type="text/javascript">
		$(window).load(function() {


			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;


			$container.isotope({
				// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function() {
				// check if columns has changed
				var currentColumns = Math.floor(($body.width() - 30) / colW);
				if (currentColumns !== columns) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width(columns * colW)
						.isotope('reLayout');
				}

			}).smartresize(); // trigger resize to set container width
			$('.portfolioFilter a').click(function() {
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');

				var selector = $(this).attr('data-filter');
				$container.isotope({

					filter: selector,
				});
				return false;
			});

		});
	</script>




</body>
</html>