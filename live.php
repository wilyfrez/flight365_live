<?php 
session_start();

if(!isset($_SESSION['joined'])) {
	header('Location: index.php');
}

include('dbconnector.php');
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
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/flightstyle.css">
	<!-- Bootstrap core CSS 
	<link href="css/bootstrap.min.css" rel="stylesheet">-->
	<!-- Your custom styles (optional) -->
	

	<style type="text/css">
	
	</style>



</head>

<body class="bg-light">

	<!--Main Navigation-->
	<header>

		<!-- Navbar -->
		<nav class="navbar  navbar-expand-lg navbar-light  bg-white shadow-sm">
			<div class="container">

				<!-- Brand -->
				<a class="navbar-brand" href="#">
					<span>
						<img src="img/logo.jpg" alt="" height="50px" width="70px">
					</span>
					<strong>Flight 365</strong>
				</a>

				<!-- Collapse -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false"
				 aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Links -->
				<div class="collapse navbar-collapse" id="myNavbar">

					<!-- Left -->
					<ul class="navbar-nav mr-auto d-flex flex-nowrap">
						<li class="nav-item active">
							<a class="nav-link active " href="#">Live
								<span class="sr-only">(current)</span>
							</a>
						</li>

					</ul>

					<!-- Right -->
					<ul class="navbar-nav ">
						<li class="nav-item">
							<a class="nav-link  text-primary mr-2">You're welcome,
								<span style="text-transform: capitalize;">
									<?php echo $_SESSION['fullname']; ?>
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="logout.php" class="nav-link border border-light rounded text-dark" name="signOut">
								<i class="fas fa-sign-out-alt mr-2"></i>Sign Out
							</a>

						</li>

					</ul>


				</div>

			</div>
		</nav>
		<!-- Navbar -->

	</header>
	<!--Main Navigation-->

	<!--Main layout-->
	<div class="main">
		<div class="row ">
			<div class="col"></div>
			<div class="col-12 col-lg-8 bg-white card mt-lg-3 pb-4">
				<div class="videoplayer bg-white mt-lg-4 mx-lg-2 mb-lg-2 m-0">
					<video class=" w-100" src="vid/promo.mp4" controls></video>


					<ul class="nav nav-tabs " id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Info</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="false">Comments</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="testimonies-tab" data-toggle="tab" href="#testimonies" role="tab" aria-controls="testimonies" aria-selected="false">Testimonies</a>
						</li>

					</ul>

				</div>
				<div class="tab-content" id="myTabContent">
					<!--Start Tab content for Info tab-->
					<div class="tab-pane fade show active m-4" id="overview" role="tabpanel" aria-labelledby="overview-tab">
						<h4>About Flight 365</h4>
						<hr>
						<p>Flight365 is a live masterclass by the CEO with a focus on mentoring our global staff members on Leadership.
                             The host is the highly esteemed CEO and each episode will play host to guests who have mastered leadership.
                             The guest hosted in each episode will be interviewed and given the opportunity to teach on a leadership topic using personal learnings and experiences.
                         </p>
					</div>
					<!--End Tab content for Info tab-->

					<!--Start Tab content for comment tab -->
					<div class="tab-pane  fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
						<!--Add Your Comments-->
						<div class="col-12 mb-5  mt-4">
							<input id="commentor" type="text" name="commentor" value=" " class="d-none">
							<textarea class="form-control textarea  p-2  " id="newComment" name="newComment" placeholder="Add your comment " cols="30"
							 rows="2"></textarea>
							<a type="submit" name="addComment" class="btn-sm btn-white my-2 btn-style  p-2 float-right commentDetails" onclick="addComment()"
							 id="addComment">Post Comment</a>
						</div>

						<div id="posted-comments">
							<?php 
										
									$commentSql = $conn->query("SELECT * FROM comments ORDER BY comments.id DESC");
									while($data = $commentSql->fetch_assoc() ) {
										   
										echo  '<div class="d-flex flex-row container-fluid mb-1">
												   <div class="pic">
														<img class="rounded-circle  mr-3" src="img/pic.png" height="40px" width="40px" alt="">
												   </div>
													<div class="flex-grow-1">
													   <div class=" comment-box w-100  p-2">
														   <span class="commentor-name mr-2 mr-md-3 ">'.$data['name'].'</span>'.$data['comment'].'
													   </div>
													<div class="col-12 timeAgo"><time class="date timeago" datetime="'.$data['time'].'"></time>  </div>
													</div>
											  </div>';
										}			
						  		 ?>

						</div>
					</div>
					<!--End Tab content for comment tab -->

					<!--Start Tab content for Testimonies tab -->

					<div class="tab-pane  fade" id="testimonies" role="tabpanel" aria-labelledby="testimonies-tab">
						<!--Share Testimonies-->
						<div class="col-12 mb-1  mt-4">

							<textarea class="form-control p-2 textarea" name="testimony" id="testimony" placeholder="Congratulations! Kindly share your testimonies"
							 cols="30" rows="2" required=""></textarea>
							<div class="d-flex justify-content-between">
								<div id="testimony-status" class=" my-2 text-info">
								
								</div>
								<div>
								<a type="submit" name="testify" class="btn-sm btn-white my-2 btn-style  p-2" onclick="testify()" id="testify">Share Testimonies</a>
								</div>
							</div>
						</div>

						<!--Posted Testimonies-->
						<div id="posted-testimony" class="px-3">


							<?php 
										
										$testimonySql = $conn->query("SELECT * FROM approved_testimonies ORDER BY approved_testimonies.id DESC");
										while($data = $testimonySql->fetch_assoc() ) {
											   
											echo  '<div class=" px-md-3 ">
														<strong class="testify-name d-block">'.$data['name'].'
															<span class="mr-3 text-secondary">Testifies</span>
														</strong>
														<p>'.$data['testimonies'].'</p>
														<em class="country d-block">from '.$data['country'].'</em>
														<hr>
												  </div>';
											}			
									   ?>

						</div>
					</div>
					<!--End Tab content for Testimonies tab -->

				</div>

			</div>


			<div class="col"></div>


		</div>
	</div>

	<!--Main layout-->



	<!--Footer-->
	<footer class="sticky-footer shadow-sm bg-white text-center py-3 font-small mt-4 wow fadeIn">


		<!--Copyright-->
		<div class="footer-copyright text-dark py-1 py-lg-2">
			© 2020 Media-Programming, OCEO

		</div>
		<!--/.Copyright-->
	</footer>
	<!--/.Footer-->

	<!-- SCRIPTS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<!-- JQuery 
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>-->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<!-- popper
	<script type="text/javascript" src="js/popper.min.js"></script> -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<!-- Bootstrap core JavaScript 
	<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
	<!-- TimeAgo JavaScript -->
	<script type="text/javascript" src="js/jquery.timeago.js"></script>

	<!-- Initializations -->
	<script type="text/javascript">
		// Animations initialization
		new WOW().init();

		setInterval(updateComment, 5000);

		jQuery(document).ready(function() {
			$("time.timeago").timeago();
		});


		function addComment() {
			var comment = document.getElementById("newComment").value;
			document.getElementById("newComment").value = "";
			if (comment == "") {
				document.getElementById("newComment").style.borderColor = "red";
			} else {
				var params = "addComment=" + 1 + "&comment=" + comment;
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						//Prepend comment
						var parentComment =	document.getElementById("posted-comments"); 
						var childComment = document.createElement('div');
						childComment.innerHTML = this.responseText;

						// Prepend it
						parentComment.insertBefore(childComment, parentComment.firstChild);
					}
				};
				xmlhttp.open("POST", "process.php", true);
				xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xmlhttp.send(params);
			}
		}

		function testify() {

			var testimony = document.getElementById('testimony').value;
			document.getElementById("testimony").value = "";

			if (testimony == "") {
				//	if any input is empty 
				document.getElementById('testimony').style.borderColor = "red";
			} else {

				var params = "testify=" + 1 + "&testimony=" + testimony;
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					document.getElementById("testimony-status").innerHTML = this.responseText;
					}
				};
				xmlhttp.open("POST", "process.php", true);
				xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xmlhttp.send(params);
			}
		}


		function updateComment() {

			var params = "updateComment=" + 1;
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("posted-comments").innerHTML = this.responseText;
					jQuery(document).ready(function() {
						$("time.timeago").timeago();
					});
				}
			};
			xmlhttp.open("POST", "process.php", true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.send(params);
		}
	</script>
</body>

</html>