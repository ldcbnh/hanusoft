<?php
include 'db/checklogin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/hanusoft.gif">
	<title><?php echo $title?></title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<style type="text/css" media="screen">

		@media (min-width: 979px) {
		  	ul.nav li.dropdown:hover > ul.dropdown-menu {
		    	display: block;
		  }
		}
		body {
		  padding-top: 90px;
		}

		nav a {
		  padding-top: 20px !important;
		  padding-bottom: 20px !important;
		  font-size: 18px;
		}

		nav .navbar-toggle {
		  margin: 0px 0px 0px 0;
		}

		.navbar-brand {
		  font-size: 20px;
		}
		.navbar-brand img {
		}

		nav.shrink a {
		  padding-top: 15px !important;
		  padding-bottom: 5px !important;
		  font-size: 15px;
		}

		nav.shrink .navbar-brand {
		  font-size: 15px;
		}

		nav.shrink .navbar-toggle {
		  margin: 8px 8px 8px 0;
		}
	</style>
	<script type="text/javascript">

	$(window).scroll(function() {
  if ($(document).scrollTop() > 35) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});
	</script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/index.php"><img style="max-height: 35px" alt="logo" src="/img/hanusoft.gif"></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="members.php">Members</a></li>

				<li><a href="projects.php">Projects</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="pages.php?code=about">About</a></li>
						<li><a href="contact.php">Contact us</a></li>
					</ul>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<?php
if (isset($_SESSION['login']) && $_SESSION['login'] = true) {
	$username = $_SESSION['myusername'];
	echo '
							<li>
								<a href="profile.php" role="button"><span class="fa fa-user" aria-hidden="true"></span> ' . $username . ' </a>
							</li>
							<li>
								<a href="/db/logout.php"> <span class="fa fa-sign-out" aria-hidden="true"></span> Logout</a>
							</li>
						';
} else {
	echo '
							<li>
								<a data-toggle="modal" href="#modal-login"><span class="fa fa-sign-in" aria-hidden="true"></span> Login</a>
							</li>
						';
}
?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
	</nav>

	<div class="modal fade" id="modal-login">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="modal-header form-group float-label-control">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Member login</h4>
					</div>
				</div>

				<form action="db/checklogin.php" method="POST" role="form">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group float-label-control">
						<input type="text" class="form-control" required="required" name="inputUsername" id="inputUsername" placeholder="Username">
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group float-label-control">
						<input type="password" name="inputPassword" id="inputPassword" class="form-control" required="required" placeholder="Password">
					</div>
					<div class="modal-footer">
						<button type="submit" name="submit" class="btn btn-primary" data-style="zoom-in">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="container">
