<?php
 
session_start();
 
if(isset($_POST['submit'])) {
     
    if(!empty($_POST['kod']) && !empty($_POST['kod2']) && !empty($_POST['code'])) {
     
        if($_POST['code'] == $_SESSION['rand_code']) {
         
         
            $accept = "Kaptcha to'g'ri o'tdi";
         
        } else {
         
            $error = "Kodni tekshirib qayta kiriting.";
         
        }
         
    } else {
     
        $error = "Ma'lumotlarni to'liq kiriting";
     
    }
 
}
 
?>
<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Captcha uchun forma</title>
<style type="text/css">
form {
    margin:0;
    padding:0;
}
input {
    padding:2px;
    width:200px;
}
textarea {
    padding:2px;
    width:200px;
    height:100px;
}
.button {
    width:60px;
}
p {
    margin:0 0 5px 0;
    padding:0;
}
.error {
    color:#FF0000;
    margin:0 0 10px 0;
}
.accept {
    color:#339966;
    margin:0 0 10px 0;
}
</style>
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
 
<body>
 
<?php if(!empty($error)) echo '<div class="error">'.$error.'</div>'; ?>
<?php if(!empty($accept)) echo '<div class="accept">'.$accept.'</div>'; ?>
 
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    

 

<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					
					<span class="login100-form-title p-b-34 p-t-27">
						CAPTCHA
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Birinchi kod">
						<input class="input100" type="text" name="kod" placeholder="Birinchi kod">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="ikkinchi kod">
						<input class="input100" type="password" name="kod2" placeholder="ikkinchi kod">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
                    <img src="captcha.php"/>
					<div class="wrap-input100 validate-input" data-validate="Captcha">
						<input class="input100" type="text" name="code" placeholder="Rasmdagi kod">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Yuborish
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
    </form>
<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>