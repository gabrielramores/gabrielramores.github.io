<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
</head>
<body>
	<button onclick="ScrollTopFunction()" class="bx bx-up-arrow-alt" id="scrolltop-button" title="Back to top"></button>
	
 	<header id="header" class="container-fluid">
	    <nav  class='navbar navbar-expand-md' id="headerNav">
	      <h2 class='navbar-brand text-light m-0 p-3' id="company-name" onClick="location.href='vehicleRecord.php'">
	        <img class="mx-3 p-0" src="images/Canoreco-Motorpool.png" height="75px" width="85px">
	        <p class="m-0 p-0" style="display: inline" >
	          CANORECO MOTORPOOL<br/>
	          MANAGEMENT SYSTEM
	        </p>
	      </h2>
	    </nav>
 	</header>

 	<main class='container '>
 		<center>
 			<form method="POST" action="loginFunction.php" class= 'col-lg-5 border border-primary'
					style="padding: 30px; margin: 100px auto;"
					id='loginForm'>
						<table style='width: 100%;' >
							<tbody>

								<tr>
									<td>	
										<?php if (isset($_GET['error'])) { ?>
										<div class="alert alert-danger" role="alert">
											<?=$_GET['error']?>
										</div>
										<?php } ?>
									</td>	
								</tr>

								<tr>
									<td>	<?php if (isset($_GET['warning'])) { ?>
										<div class="alert alert-warning" role="alert">
											<?=$_GET['warning']?>
										</div>
										<?php } ?>
									</td>	
								</tr>

								<tr>
									<td >
										<p class = 'notify '
										style='font-size: 20px; color: #F4BE2C; text-shadow: 1px 1px gainsboro' 
										id='notify'>
										Please enter your account.</p>
									</td>
								</tr>
								<tr>
									<td>
										<!-- username-->
										<div class='my-3'>
											<label for='username'>
												<i class = 'bx bx-user'></i> 
												Username
											</label>
											<input type='text' class='form-control shadow-none' name="username" id='floatingInput' maxlength='26'required>
												
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<!-- password-->
										<div class='my-3'>
											<label for='floatingPassword'>
												<i class='bx bx-lock'></i> 
												Password
											</label>
											<input type='password' class='form-control shadow-none' name="password" 
											id='floatingPassword' maxlength='26' required>
											
										</div>
										
										<input type='checkbox' class='showPword my-3' id='show-password' 
										onclick='LoginShowPassword();' role='button'>
										<label for='show-password' class='viewPword' style="cursor: pointer ;">
											Show Password
										</label>
									</td>
								</tr>
								<tr>
									<td>
										<!-- login button-->
										<input name="login" type='submit' class='btn btn-outline-primary mt-4 shadow-none'style='width: 100%' 
										  action="loginFunction.php" >
									
										</input>

										<!-- <a><center><p style='font-size: 12px;
										visibility:hidden;'>
										Forgot username or password</p></center>
										</a>-->				

									</td>
								</tr>
							</tbody>
						</table>
					</form>
				</center>
			</main>




	<footer class="container-fluid p-3 d-flex flex-wrap justify-content-center" id="footer">
		
		<div class="">

		</div>

		<div class="">
			<div class="p-2 mx-3 text-light ">
				<b>Located At:</b>
				<p><span class="bx bx-map"></span> San Isidro, Talisay, Camarines Norte</p>
			</div>
			<div class="p-2 mx-3 text-light ">
				<b>For more info, please contact:</b>
				<p><span class="bx bx-phone"></span> +63 907 531 3564</p>
			</div>
		</div>	
		<div class="">
			<div class="p-2 mx-3 text-light">
				<b>Support us:</b>
				<p><span class="bx bxl-facebook-square"> <span class="bx bxl-twitter"> <span class="bx bxl-instagram"></span> <span class='bx bxl-github'></span> </p>
			</div>
			<div class="p-2 text-light">
				<p>&#169; <b>Copyright 2021</b></p>
			</div>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="javascript/javascript.js"></script>
</body>

</html>