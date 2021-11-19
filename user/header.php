<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
	<link rel='stylesheet' href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	
	
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <!--sweetalert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--select 2 cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
   
</head>
<body>
	<button onclick="ScrollTopFunction()" class="bx bx-chevron-up" id="scrolltop-button" title="Back to top"></button>
	
<header id="header" class="container-fluid">
	    <nav  class='navbar navbar-expand-md' id="headerNav">
	      <h2 class='navbar-brand text-light m-0 p-2' id="company-name" onClick="location.href='driverHome.php'">
	        <img class="mx-3 p-0" src="images/Canoreco-Motorpool.png" height="75px" width="85px">
	        <p class="m-0 p-0" style="display: inline" >
	          CANORECO MOTORPOOL<br/>
	          MANAGEMENT SYSTEM
	        </p>
	      </h2>
	      <?php include_once 'burgerButton.php'?>
	    </nav>
 	</header>
 	<?php include_once 'modal.php'?>


 