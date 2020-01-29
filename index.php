<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="CEO's Flight 365, taking you to leadership excellence. Flight 365 is the CEO's Master Class on leadership flying you to your next leve ">
	<meta name="keywords" content="CEO's Flight 365,CEO's Flight 365 Master Class,CEO's Leadership Class,Flight 365, CEO Master Class, CEO MC, CMC, CEO Training Class, Pastor Deola Philips, Pastor Deola, PD Class, Master Class, Training Class, Christ Embassy CEO Class, Pastor Deola Philips Training, Pastor Deola Philips Class, Training, Class, FLight 365 With CEO, Flight With CEO, CEO, In Touch Devotional, Rhapsody of Realitiesh Daily Devotion, Rhapsody of Realities Devotions, Daily Devo, Daily Devotional, Daily Devotion, Devotion, devotional, magazine, charles stanley, christian magazine, Rhapsody of Realities Magazine, Rhapsody of Realities Devotional, Rhapsody of Realities Daily Devotion, Rhapsody of Realities Daily Devotions, Daily Devo, Daily Devotional, Daily Devotion, Devotion, devotional, magazine, charles stanley, christian magazine, Rhapsody of Realities Magazine, Rhapsody of Realities Devotional,Rhapsody of Realities Devotion, Rhapsody of Realities Devotions, Daily Devo, Daily Devotional, Daily Devotion, Devotion, devotional, magazine, Benny Hinn, blog, Rhapsody of Realities blog, christian magazine">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>CEO's Flight 365 Master Class</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>

<style>
	.sign-in {

		width: 330px;
		min-width: 310px;
	}

	.caption {
		margin-top: -3rem;
		margin-bottom: 1rem;
		font-weight: 600;
		font-size: 0.9rem;
	}

	.oceoCoptR,
	input[type="text"],
	input[type="email"] {
		font-size: 0.9rem;
	}

	.rounded-input {
		border: 1px solid rgb(183, 183, 185);
		border-radius: 5px 15px 15px;
	}

	label {
		font-weight: 600;
		font-size: 0.9rem;
	}

	@media (max-width: 768px) {
		.label {
			font-weight: 500;
			font-size: 0.86rem;
		}
		.caption,
		.oceoCoptR,
		input[type="text"],
		input[type="email"] {
			font-size: 0.8rem;
		}
	}


	@media (max-width: 576px) {
		label {
			font-weight: 500;
			font-size: 0.85rem;
		}

		form h4 {
			font-size: 1.1rem;
		}
	}


	@media (max-width: 320px) {
		label {
			font-size: 0.8rem;
		}
		.caption,
		.oceoCoptR {
			font-size: 0.75rem;
		}
		.sign-in {
			width: 300px
		}
	}
</style>

<body class="bg-light  ">


	<div class="d-flex flex-column container-fluid align-items-center ">
		<div class="logo">
			<img src="img/flightlogo.gif" height="250px" width="250px" w alt="">
		</div>
		<div class="caption">Taking you to leadership excellence</div>
		<div class="card sign-in">
			<form action="process.php" method = "POST"  class="mx-2 mx-sm-3 ">
				<!-- Heading -->
				<h4 class="dark-grey-text text-center mt-4 mt-md-3 ">
					Sign In
				</h4>
				<hr>
				<p id="errorMsg"></p>

				<div class="">
					<label for="fullname">Full Names
						<span class="text-danger">*</span>
					</label>
					<input type="text" id="fullname" name="fullname" class="form-control rounded-input pr-2" required="">

				</div>

				<div class="my-3 my-md-2 my-lg-3">
					<label for="email">Email Address
						<span class="text-danger">*</span>
					</label>
					<input type="email" id="email" name="email" class="form-control rounded-input pr-2" required="">

				</div>

				<div class="">
					<label for="dept">Department/Zone
						<span class="text-danger">*</span>
					</label>
					<input type="text" id="dept" name="dept" class="form-control rounded-input pr-2" required="">

				</div>

				<div class="text-center my-4 mb-lg-5 ">
					<input type="submit" class="btn btn-primary  rounded-input w-100 mr-1" name="joinFlight" id="joinFlight" value="Join The Flight">

				</div>


			</form>

		</div>

		<div>
			<button class="btn btn-light oceoCoptR border my-4 p-2">© 2020 Media-Programming, OCEO</button>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>