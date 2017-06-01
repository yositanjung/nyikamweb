<!DOCTYPE HTML>
<html>
<head>
<title>Admin Nyikam</title>
<meta name="viewport" content="Admin Nyikam">
<meta http-equiv="Content-Type" content="Admin Nyikam" />
<meta name="keywords" content="Admin Nyikam" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url();?>/assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url();?>/assets/css/lines.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>/assets/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="<?php echo base_url();?>/assets/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url();?>/assets/js/metisMenu.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="<?php echo base_url();?>/assets/js/d3.v3.js"></script>
<script src="<?php echo base_url();?>/assets/js/rickshaw.js"></script>
</head>
<body>
    <style>
    <bgcolor=
    </style>
    <div class="login-logo">
        <img width="341.3" height="192.5" src="assets/images/logo.png" alt=""/>
    </div>
    <h2 class="form-heading">Nyileh Kamera</h2>
    <div class="app-cam">
        <form action="<?php echo base_url('login/aksi_login'); ?>" method="post"><!--diarahkan ke controller login function aksi_login-->
		<input type="text" name="uname_admin" value="uname_admin" placeholder="USERNAME ADMIN">
		<input type="password" name="password" value="password" placeholder="PASSWORD">
		<div class="submit">
            <input type="submit" value="Login">
        </div>
        </form>
    </div>
</body>
</html>