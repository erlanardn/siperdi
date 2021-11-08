<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Elibrary Siperdi
	</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<body>
	<header class="header">
     <nav class="navbar navbar-style">
      <div class="container-fluid">
      	<div class="navbar-header">
      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
      			<span class="icon-bar"></span>
      			<span class="icon-bar"></span>
      			<span class="icon-bar"></span>	
      		</button>    	 
      		<a href="index.php"><img class="logo" src="UI_Siperdi/Iconsiperdi.png" ></a>
    	 <a class="logotext" href="index.php">SIPERDI</a>
      	</div>
      	<div class="collapse navbar-collapse" id="micon">
    	<ul class="nav navbar-nav navbar-right">
    		<li><a href="registration.php">REGISTER</a></li>
    		<li><a href="student_login.php">LOGIN</a></li>
    	</ul>
    	</div>
      </div>

     </nav>

     <div class="container">
     	<div class="row">
     		<div class="col-sm-6">
     			<img src="UI_Siperdi/homeicon.png" class="img-responsive">
     		</div>
     		<div class="col-sm-6">
     			<h1 class="welcome">Selamat datang di <span class="h1color">SIPERDI</span></h1>
     		</div>
     		<div class="row justify-content-end">
    		<div class="col-4"><span class="btn1">
    			<a class="btn btn-primary btn-lg" href="#" role="button"><span class="glyphicon glyphicon-search"></span> CARI BUKU</a></span>
        </div>
      </div>
    		</div>
     	</div>
     </div>

    </header>



</body>
</html>