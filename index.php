<?php
	$page_title = "SOUTHIFY";
	include_once('includes/header.php');
?>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="assets\img\Master_1.jpeg.jpg" alt="First slide">
				<div class="jumbotron">
					<div class="container">
						<div class="carousel-caption">
							<h2> SOUTHIFY REVIEWS</h2>
							<p>Hey! CINEPHILE Welcome to the SOUTHIFY !</p>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="assets\img\1466435-yash-kgf-chapter-2-review.jpg " alt="Second slide">
				<div class="jumbotron">
					<div class="container">
						<div class="carousel-caption">
							<h2>Rate Movies</h2>
							<p>Create an account to review your favorite movies</p>
							<p><a class="btn btn-lg btn-info" href="registration.php" role="button">Sign up today</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="assets\img\pushpa-16x.jpg" alt="Third slide">
				<div class="jumbotron">
					<div class="container">
						<div class="carousel-caption">
							<h2>Read Reviews</h2>
							<p>Browse all of our reviews and find out more about what others thought of your favorite movies!</p>
							<p><a class="btn btn-lg btn-info" href="reviews.php" role="button">VIEW REVIEWS &raquo;</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.carousel -->

	<div class="container">
		<!-- Example row of columns -->
		<div class="row">
			<div class="col-md-4">
				<h2>CREATE ACCOUNT</h2>
				<p>Sign up for an account in order to add a review to your favorite movie</p>
				<p><a class="btn btn-danger" href="registration.php" role="button">SIGN UP &raquo;</a></p>
			</div>
			<div class="col-md-4">
				<h2>LIST MOVIES</h2>
				<p>Browse our extensive list of movie titles along with ratings, years, a short synopsis, and even reviews!</p>
				<p><a class="btn btn-danger" href="movies.php" role="button">VIEW MOVIES &raquo;</a></p>
			</div>
			<div class="col-md-4">
				<h2>LIST REVIEWS</h2>
				<p>Browse all of our reviews and find out more about what others thought of your favorite movies!</p>
				<p><a class="btn btn-danger" href="reviews.php" role="button">VIEW REVIEWS &raquo;</a></p>
			</div>
		</div>

	</div> <!-- /container -->


<?php
	include_once('includes/footer.php');