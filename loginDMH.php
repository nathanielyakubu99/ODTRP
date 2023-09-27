<?php
//session_start();
include_once('includes/connection.php');
$error = '';


					if(isset($_POST['btn_login'])){
						$error= '<p class="alert alert-danger">invalid username and password</p>';

						$email = $_POST['email'];
                        $password = $_POST['password'];
                        $pass = md5($password);

                        //fetch record
                        $USER_ip=$_SERVER['REMOTE_ADDR'];
                        $fetch = mysqli_query($con, "SELECT * FROM reg WHERE email='$email' AND password='$pass' ");
                        if(mysqli_num_rows($fetch)>0)
                        {
                            while($row=mysqli_fetch_array($fetch, MYSQLI_ASSOC))
                            {
                                $user_id =$row['id'];
                                $_SESSION['id'] = $user_id;
                                mysqli_query($con,"UPDATE reg SET ip_address='$user_ip' WHERE id='$user_id'");
                                //windows.location='dashboard';
                                header('Location:index.html');
                            }


                        }
					}

			
                    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Divine Mercy Hospital</title>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="codedthemes">
	<meta name="keywords"
		  content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="codedthemes">

	<!-- Favicon icon -->
	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="assets1/images/favicon.ico" type="image/x-icon">

	<!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="assets1/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!--ico Fonts-->
	<link rel="stylesheet" type="text/css" href="assets1/icon/icofont/css/icofont.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets1/plugins/bootstrap/css/bootstrap.min.css">

	<!-- waves css -->
	<link rel="stylesheet" type="text/css" href="assets1/plugins/Waves/waves.min.css">

	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="assets1/css/main.css">

	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="assets1/css/responsive.css">

	<!--color css-->
	<link rel="stylesheet" type="text/css" href="assets1/css/color/color-1.min.css" id="color"/>

</head>
<body>
<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-12">
				<div class="login-card card-block">
				
					<form class="md-float-material" method="post" action="#">
						<div class="text-center">
							<h2 class="text-center txt-primary">
							Divine Mercy Hospital 
							</h2>
						</div>
						<h3 class="text-center txt-primary">
							Sign In to your account
						</h3>
						<?php 
							echo $error;
						?>
						<div class="md-input-wrapper">
									<input type="email"name="email" id="email" class="md-form-control" required="required"/>
									<label>Email</label>
								</div>
						<div class="md-input-wrapper">
									<input type="password" name="password" id="password" class="md-form-control" required="required"/>
									<label>Password</label>
						</div>
						<div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
								<label class="input-checkbox checkbox-primary">
									<input type="checkbox" id="checkbox">
									<span class="checkbox"></span>
								</label>
								<div class="captions">Remember Me</div>

						</div>
						<div class="col-sm-6 col-xs-12 forgot-phone text-right">
								<a href="forgot-password.html" class="text-right f-w-600"> Forget Password?</a>
								</div>
							
								<button type="submit" value="login" name="btn_login" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
							
						
								
						
						<!-- <div class="card-footer"> -->
						<div class="col-sm-12 col-xs-12 text-center">
							<span class="text-muted">Don't have an account?</span>
							<a href="register1.php" class="f-w-600 p-l-5">Sign up Now</a>
						</div>


						<!-- </div> -->
					</form>
					<!-- end of form -->
					
					
				</div>
				<!-- end of login-card -->
			</div>
			<!-- end of col-sm-12 -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container-fluid -->
</section>

<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
	<h1>Warning!!</h1>
	<p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
	<div class="iew-container">
		<ul class="iew-download">
			<li>
				<a href="http://www.google.com/chrome/">
					<img src="assets/images/browser/chrome.png" alt="Chrome">
					<div>Chrome</div>
				</a>
			</li>
			<li>
				<a href="https://www.mozilla.org/en-US/firefox/new/">
					<img src="assets/images/browser/firefox.png" alt="Firefox">
					<div>Firefox</div>
				</a>
			</li>
			<li>
				<a href="http://www.opera.com">
					<img src="assets/images/browser/opera.png" alt="Opera">
					<div>Opera</div>
				</a>
			</li>
			<li>
				<a href="https://www.apple.com/safari/">
					<img src="assets/images/browser/safari.png" alt="Safari">
					<div>Safari</div>
				</a>
			</li>
			<li>
				<a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
					<img src="assets/images/browser/ie.png" alt="">
					<div>IE (9 & above)</div>
				</a>
			</li>
		</ul>
	</div>
	<p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jqurey -->
<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/plugins/tether/dist/js/tether.min.js"></script>

<!-- Required Fremwork -->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- waves effects.js -->
<script src="assets/plugins/Waves/waves.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/elements.js"></script>



</body>
</html>


