<?php
 session_start();
 if(isset($_SESSION["salah"])){
     if($_SESSION["salah"] >= 3){
         echo '<h1>Anda Telah diblokir</h1>';
         exit();
     }
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Percobaan</title>
        <link rel="icon" href="assets/image/favicon.ico">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/floating-labels.css">
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/sweetalert2/dist/sweetalert2.js"></script>
        <link rel="stylesheet" href="assets/sweetalert2/dist/sweetalert2.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
            <script src="assets/sweetalert2/dist/sweetalert2.js"></script>
	<link rel="stylesheet" href="assets/sweetalert2/dist/sweetalert2.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


        <script>
            function myfunction() {
		if ((document.getElementById('username').value == "admin")&&(document.getElementById('password').value == "admin")) {
				swal({
					title: "Login Sucess",
					text: "Continue",
					icon: "success",
					button: "Continue"
				}).then(function() {
					window.location.href = "menu.php";
				});
			}
			else{
				swal("Login Failed", "Wrong user or password", "error").then(function() {
					window.location.href = "index.php";
				});
			}
		}
        </script>
    

    </head>
    <body>
        <form id="frm01" name="frm01" action="code_login.php" method="POST"  class="form-signin">
            <div class="text-center mb-4">
                <img class="mb-4" width="350" height=auto src="assets/image/icon.jpg">

            </div>
            <div class="form-group">
		<label>Username</label>
                <input class="form-control" name="username" id="username" type="user" placeholder="Username" autofocus="yes" autocomplete="no" required="">
	    </div>
	    <div class="form-group">
		<label>Password</label>
                <input class="form-control" name="Password" id="password" type="password" placeholder="Password" required="">
            </div>
            <div class="checkbox mb-4">
                <label>
                    <input type="checkbox"> Remember me 
                </label>
            </div>
            <a class="btn btn-lg btn-primary btn-block " onclick="myfunction()" id="login"> Login</a>
        </form>
    </body>
</html>

