<?php
 $con=mysqli_connect('localhost','root','');
 if($con){
     mysqli_select_db($con,'devine_mercy_hospital');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Test Request Registration</title>

	 <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
   	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  		<!--[if lt IE 9]>
  			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

	<!--ico Fonts-->
	<link rel="stylesheet" type="text/css" href="assets1/icon/icofont/css/icofont.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets1/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="assets1/css/main.css">

	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">



</head>
<body>
	<section class="login common-img-bg">
		<!-- Container-fluid starts --> 
		<div class="container-fluid">
			<div class="row">
					<div class="col-sm-12">
						<div class="login-card card-block bg-white">
							<form class="md-float-material" action="register1.php" method="post">
								<div class="text-center">
									<h2 class="text-center txt-primary">Devine mercy hospital</h2>
								</div>
								<h3 class="text-center txt-primary">Test Request Platform</h3>
								

								<div class="md-input-wrapper">
									<input type="text" class="md-form-control" name="fname" required="required">
									<label>full Name</label>
								</div>

								<div class="md-input-wrapper">
									<input type="email" class="md-form-control" name="email" required="required">
									<label>Email Address</label>
								</div>

								<div class="md-input-wrapper">
									<input type="text" class="md-form-control"name="phone" required="required">
									<label>Phone Number</label>
								</div>
								<div class="md-input-wrapper">
									<input type="text" class="md-form-control"name="id_no" required="required">
									<label>Identification Number</label>
								</div>
								<div class="md-input-wrapper">
									<select class="md-form-control" name="department"required="required"><br>
										<option value="0"> select Depatrment</option>
										<option value="d"> Doctor</option>
										<option value="lt"> lab technician</option>
				   </select>  <br>
								</div>

								
								<div class="md-input-wrapper">
									<input type="password" class="md-form-control" name="password"required="required">
									<label>Password</label>
								</div>
								
								<div class="rkmd-checkbox checkbox-rotate checkbox-ripple b-none m-b-20">
									<label class="input-checkbox checkbox-primary">
										<input type="checkbox" id="checkbox">
										<span class="checkbox"></span>
									</label>
									<div class="captions">Remember Me</div>
								</div>
								<center><button type="submit" name="signup" class="btn btn-primary" > signup</button> 
								<div class="row">
									<div class="col-xs-12 text-center">
										<span class="text-muted">Already have an account?</span>
										<a href="loginDMH.php" class="f-w-600 p-l-5"> Sign In Here</a>

									</div>

									<?php 
    if(isset($_POST['signup']) && !empty($_POST['fname']))
    {
        //get data
        $name=$_POST['fname'];
        $email=$_POST['email'];
        $phone_no=$_POST['phone'];
        $id_no=$_POST['Identification_number'];
        $department=$_POST['department'];
        $password=$_POST['password'];
        $pass=md5($password);
        
        //validation
        $validate=mysqli_query($con,"SELECT phone_no, email FROM reg WHERE phone_no='$phone_no' AND email='$email'");
        if($validate){
            $row=mysqli_num_rows($validate);
            if($row>0){
                echo "<script>alert(' user already exist');</script>";
            }else{
                $INSERT=mysqli_query($con,"INSERT INTO reg(id,name,email,phone_no,identification_number,department,password,date_added,added_by) 
        VALUES(null,'$name', '$email', '$phone_no', '$id_no', '$department', '$pass', NOW(), 'me')");
        if($INSERT)
        {
            echo "<script>alert('successful');</script>";
        }else{
            echo "<script>alert(' Not successful');</script>";
        }
    }}}
?> 

								</div>
							</form>
							<!-- end of form -->
						</div>
						<!-- end of login-card -->
					</div>
					<!-- end of col-sm-12 -->
				</div>
				<!-- end of row-->
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

   <!--text js-->
   <script type="text/javascript" src="assets/pages/elements.js"></script>
</body>
</html>
