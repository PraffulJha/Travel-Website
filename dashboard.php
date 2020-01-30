<?php
session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'e-city');
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "student/".$filename;
move_uploaded_file($tempname,$folder);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Welcome To E-City</title>
	<link rel="stylesheet" type="text/css" href="dashoard.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
	<script>

		</script>
</head>
<body>
		<section class="header">
				<div class="container">
					<img src="logo.jpg">
					<img src="<?php echo '$folder'?>" style="height: 100px; width: 100px; border-radius: 5px; float: right">
					<button type="button" class="login-btn"><a href="logout.php">LOGout</a></button>
				</div>
				<h1>WECOME TO E-CITY</h1>
				<p>Explore new things with us</p>
			</section>
			<section class="features">
				<h1>FEATURED CITIES</h1>
				<div class="container">
					<div class="row">
						<div class="col-md-4">
								<div class="feature-box">
										<div class="feature-img">
											<img src="kanpur.jpeg">
											<div class="price">
												<p>2000<sub>rs</sub></p>
											</div>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<div class="feature-details">
											<h4>KANPUR</h4>
											<p>City of </p>
											<div>
												<span><i class="fa fa-map-marker"></i>Kanpur</span>
												<span><i class="fa fa-sun-o"></i>3 Days</span>
												<span><i class="fa fa-moon-o"></i>2 Nights</span>
											</div>
											</div>
						</div>
						</div>
						<div class="col-md-4">
								<div class="feature-box">
										<div class="feature-img">
											<img src="luckhnow.jpg">
											<div class="price">
												<p>2000<sub>rs</sub></p>
											</div>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<div class="feature-details">
											<h4>LUCKNOW</h4>
											<p>City of </p>
											<div>
												<span><i class="fa fa-map-marker"></i>Lucknow</span>
												<span><i class="fa fa-sun-o"></i>3 Days</span>
												<span><i class="fa fa-moon-o"></i>2 Nights</span>
											</div>
											</div>
						</div>
						</div>
						<div class="col-md-4">
								<div class="feature-box">
										<div class="feature-img">
											<img src="mathura.jpg">
											<div class="price">
												<p>2000<sub>rs</sub></p>
											</div>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<div class="feature-details">
											<h4>MATHURA</h4>
											<p>City of </p>
											<div>
												<span><i class="fa fa-map-marker"></i>Mathura</span>
												<span><i class="fa fa-sun-o"></i>3 Days</span>
												<span><i class="fa fa-moon-o"></i>2 Nights</span>
											</div>
											</div>
						</div>
						</div>
						<div class="col-md-4">
								<div class="feature-box">
										<div class="feature-img">
											<img src="taj mahal.jpeg">
											<div class="price">
												<p>2000<sub>rs</sub></p>
											</div>
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<div class="feature-details">
											<h4>AGRA</h4>
											<p>City of </p>
											
											<div>
												<span><i class="fa fa-map-marker"></i>Agra</span>
												<span><i class="fa fa-sun-o"></i>3 Days</span>
												<span><i class="fa fa-moon-o"></i>2 Nights</span>
											</div>
											</div>
						</div>
						</div>
					</div>
				</div>
			</section>
			
</body>
</html>