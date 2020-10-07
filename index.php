<?php
include("inc/conn.php");
if(isset($_POST["submit"]))
{
	$name = $_POST["name"];
	$email = $_POST["email"];
	$mobile = $_POST["contact"];
	$state = $_POST["state"];
	$city = $_POST["city"];

	$query = "INSERT INTO `users`(`name`, `email`, `contact`, `state`, `city`) VALUES ('$name','$email','$mobile','$state','$city')";
	$run_query=mysqli_query($conn,$query);
	if($run_query)
	{
		header("Location:user_data.php");
	}
	else
	{
		echo "<scriipt>alert(".$query.")</scriipt>";
	}
}
?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Basic Forms - Robust Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- navbar-fixed-top-->
    <?php include("inc/sidebar.php"); ?>

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Basic Forms</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Basic Forms</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic form layout section start -->
<section id="basic-form-layouts">
	<div class="row match-height">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form-center">User Registration</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form class="form" action="" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6 offset-md-3">
									<div class="form-body">
										<div class="form-group">
											<label for="eventInput1">First Name</label>
											<input type="text" id="eventInput1" class="form-control" placeholder="First name" name="name" required>
										</div>

										<div class="form-group">
											<label for="eventInput4">Email</label>
											<input type="email" id="eventInput4" class="form-control" placeholder="email" name="email" required>
										</div>

										<div class="form-group">
											<label for="eventInput5">Contact Number</label>
											<input type="tel" id="eventInput5" class="form-control" name="contact" placeholder="contact number" required>
										</div>

										<div class="form-group">
											<label for="eventInput5">State</label><br>
											<select class="state" name="state">
												<option>Select State</option>
												<option value="Gujarat" id="1">Gujarat</option>
												<option value="Maharashtra" id="2">Maharashtra</option>
												<option value="Delhi" id="3">Delhi</option>
											</select>
										</div>

										<div class="form-group">
											<label for="eventInput5">City</label><br>
											<select class="city" name="city" disabled>
												<option class="0">Select City</option>
												<option value="Ahmedabad" class="Gujarat">Ahmedabad</option>
												<option value="Surat" class="Gujarat">Surat</option>
												<option value="Vadodare" class="Gujarat">Vadodare</option>
												<option value="Nashik" class="Maharashtra">Nashik</option>
												<option value="Mumbai" class="Maharashtra">Mumbai</option>
												<option value="Pune" class="Maharashtra">Pune</option>
												<option value="Mehrauli" class="Delhi">Mehrauli</option>
												<option value="Bankner" class="Delhi">Bankner</option>
												<option value="Mukhmelpur" class="Delhi">Mukhmelpur</option>
											</select>
										</div>

									</div>
								</div>
							</div>

							<div class="form-actions center">
								<button type="reset" class="btn btn-warning mr-1">
									<i class="icon-cross2"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary" name="submit">
									<i class="icon-check2"></i> Save
								</button>
							</div>
						</form>	

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(".state").change(function(){
	var state = $(this).val();
	$(".city").removeAttr("disabled");
	$(".0").prop("selected",true);
	$(".Gujarat").hide();
	$(".Maharashtra").hide();
	$(".Delhi").hide();
	$("."+state).show();
});
</script>

    <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
