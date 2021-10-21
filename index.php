<?php

require 'includes/snippet.php';
require 'includes/db-inc.php';
include "includes/header.php";

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="flickity/flickity.css">
	<script type="text/javascript" src="flickity/flickity.js"></script>
	<title>HDLMS</title>

</head>

<body>
	<div class="container">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">HLMS</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example">

					<ul class="nav navbar-nav navbar-right">
						<li><a href="login.php">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>

	</div>

	<div class="container-fluid slide">

		<div class="slider">
			<!-- <h1>Flickity - wrapAround</h1> -->


			<div class="carousel" data-flickity='{ "autoPlay": true }' ;>

				<div class="carousel-cell" auto-play>
					<img src="ify/lab1.jpg">
				</div>
				<div class="carousel-cell" auto-play>
					<img src="ify/lab2.jpg">

				</div>
				<div class="carousel-cell" auto-play>
					<img src="ify/lab3.jpg">
				</div>

				<div class="carousel-cell" auto-play>
					<img src="ify/lab4.jpg">
				</div>
				<div class="carousel-cell" auto-play>
					<img src="ify/lab5.jpg">
				</div>

			</div>



		</div>
	</div>

	<!-- Default panel contents -->
	<div class="container slide2">

		<div class="panel-heading">
			<div class="row">
				<h3 class="center-block" style="font-size: 30px;">Published Announcements</h3>
			</div>
		</div>
		<table class="table table-bordered" style="font-size: 18px;">


			<thead>
				<tr>
					<th>NewsId</th>
					<th>Announcement</th>


				</tr>
			</thead>

			<?php

			$sql2 = "SELECT * from news";

			$query2 = mysqli_query($conn, $sql2);
			$counter = 1;
			while ($row = mysqli_fetch_array($query2)) {  ?>


				<tbody>
					<td><?php echo $counter++; ?></td>
					<td><?php echo $row['announcement']; ?></td>

				</tbody>

			<?php }
			?>

			</tbody>
		</table>

	</div>


	</div>
	</div>



	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 column">
			<div class="page-header col-lg-offset-1">
				<h2>Welcome to Library</h2>
			</div>
			A library is a place where books and sources of information are stored.
			They make it easier for people to get access to them for various purposes.
			Libraries are very helpful and economical too. They include books, magazines, newspapers, DVDs, manuscripts and more.
			In other words, they are an all-encompassing source of information.
			A public library is open to everyone for fulfilling the need for information. They are run by the government,
			schools, colleges, and universities. The members of the society or community can visit these libraries to enhance their
			knowledge and complete their research.By signing up in the button below
			Libraries play a vital role in providing people with reliable content. They encourage and promote the process
			of learning and grasping knowledge. The book worms can get loads of books to read from and enhance their knowledge.
			Moreover, the variety is so wide-ranging that one mostly gets what they are looking for.
			<a href="addstudent.php">
				<p class="slide2"><button class="btn btn-success">Sign Up</button></p>
			</a>

		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 column">
			<div class="page-header col-lg-offset-1">
				<h2>24/7 Operational Support</h2>
			</div>
			The public library requires nothing of its visitors: no purchases, no membership fees,
			no dress code. You can stay all day, and you don’t have to buy anything. You don’t need money
			or a library card to access a multitude of on-site resources that includes books, e-books and magazines,
			job-hunting assistance, computer stations, free Wi-Fi, and much more. And the library will never share or sell
			your personal data.In a country riven by racial, ethnic, political, and socioeconomic divides, libraries still
			welcome everyone. We are open spaces.
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 column">
			<div class="page-header col-lg-offset-1">
				<h2>Why Us?</h2>
			</div>
			Learning these days is not limited to classroom lectures and training. It is the voyage of discovering more that encourages us to learn.
			School libraries play a very vital role in education system and are an essential part of school setup.<br>

			HLMS is a well set-up library. It is a very big library on the ground floor of the school that consists of several bookstands and cabinets.
			Books are precisely arranged in alphabetical order in these bookstands and cabinets. It has a wide range of books on diverse subjects,
			story books, comic books, biographies and magazines. At the entrance there is the librarian’s desk. There are rows of tables and chairs
			in the centre of the library for students to sit. Another section is the reference section of the library house for teachers.<br>
			Library is the best place to read without any disturbance. I love reading and writing so visiting the library for me is really very exciting.
			I can spend my entire day in the library.


		</div>
	</div>
	</div> -->

	<div class="container-fluid slide3" style="background-color: #282828">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<a href="#" class="thumbnail">
						<img src="ify/lab6.jpg">
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<a href="#" class="thumbnail">
						<img src="ify/lab7.jpg">
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<a href="#" class="thumbnail">
						<img src="ify/lab8.jpg">
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<a href="#" class="thumbnail">
						<img src="ify/lab9.jpg">
					</a>
				</div>
			</div>
		</div>

	</div>



	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>