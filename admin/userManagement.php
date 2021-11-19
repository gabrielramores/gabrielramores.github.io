<?php include_once 'header.php' ?>
<?php include_once 'topNavigation.php'?>


<div class="container-fluid py-5 px-2" style="background: gainsboro;">
	
	<div class="container-fluid col-lg-9 border p-3 shadow" style="background: white;  border-radius: 5px;">
		<h4 class="page-name text-dark m-0">
			<span class="bx bx-user"></span>
			<b>Driver Record</b>
		</h4>
		<div class="container-fluid bg-dark border p-1" style="background: white;  border-radius: 5px;">
			<button class="add-driver d-inline" id="create-driver"><a href="addDriver.php" class="text-light" >
				<span class="bx bx-plus"></span> Add new driver</a>
			</button>
		</div>
	</div>

	<br class="my-4">

	<div class="container-fluid col-lg-9 border py-3 shadow" style="background: white;  border-radius: 5px;">
		<div style="overflow: auto;">
			
			<table class="table display caption-top" id="user-table">
				<caption class="mt-3"></caption>

				<thead>
					<th >No.</th>
					<th >ID</th>
					<th >Driver's name</th>
					<th >Username</th>
					<th >Password</th>
					<th ></th>
					<th ></th>
				</thead>

				<tbody>
					
					<tr>
						<td>1</td>
						<td>18-0001</td>
						<td><a href="viewUserProfile.php">Harold San Pascual</a></td>
						<td>usernameSample1</td>
						<td>samplePassword1</td>
						
						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="" data-bs-toggle="modal"
							data-bs-target="#confirm-remove-modal">
								<span class="bx bx-trash"></span>
								Remove
							</a>
						</td>
						
						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="editDriver.php" >
								<span class="bx bx-edit"></span>
								Edit
							</a>
						</td>
					</tr>


					<tr>
						<td>2</td>
						<td>18-0011</td>
						<td><a href="viewUserProfile.php">Rudolfo Tulfo</a></td>
						<td>usernameSample2</td>
						<td>samplePassword2</td>
						
						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="" data-bs-toggle="modal"
							data-bs-target="#confirm-remove-modal">
								<span class="bx bx-trash"></span>
								Remove
							</a>
						</td>
						
						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="editDriver.php">
								<span class="bx bx-edit"></span>
								Edit
							</a>
						</td>
					</tr>

					<tr>
						<td>3</td>
						<td>18-0021</td>
						<td><a href="viewUserProfile.php">Ricardo Dalisay</a></td>
						<td>usernameSample3</td>
						<td>samplePassword3</td>
						
						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="" data-bs-toggle="modal"
							data-bs-target="#confirm-remove-modal">
								<span class="bx bx-trash"></span>
								Remove
							</a>
						</td>

						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="editDriver.php">
								<span class="bx bx-edit"></span>
								Edit
							</a>
						</td>
					</tr>
					
					<tr>
						<td>4</td>
						<td>18-0031</td>
						<td><a href="viewUserProfile.php">Arthur Mac</a></td>
						<td>usernameSample4</td>
						<td>samplePassword4</td>
						
						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="" data-bs-toggle="modal"
							data-bs-target="#confirm-remove-modal">
								<span class="bx bx-trash"></span>
								Remove
							</a>
						</td>
							
						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="editDriver.php">
								<span class="bx bx-edit"></span>
								Edit
							</a>
						</td>
					</tr>
					

					<tr>
						<td>5</td>
						<td>18-0041</td>
						<td><a href="viewUserProfile.php">Emmanuel Sabordo</a></td>
						<td>usernameSample5</td>
						<td>samplePassword5</td>
						
						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="" data-bs-toggle="modal"
							data-bs-target="#confirm-remove-modal">
								<span class="bx bx-trash"></span>
								Remove
							</a>
						</td>
						
						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="editDriver.php">
								<span class="bx bx-edit"></span>
								Edit
							</a>
						</td>
					</tr>
					

					<tr>
						<td>6</td>
						<td>18-0051</td>
						<td><a href="viewUserProfile.php">Enrique Salmon</a></td>
						<td>usernameSample6</td>
						<td>samplePassword6</td>
						
						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="" data-bs-toggle="modal"
							data-bs-target="#confirm-remove-modal">
								<span class="bx bx-trash"></span>
								Remove
							</a>
						</td>
						
						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="editDriver.php">
								<span class="bx bx-edit"></span>
								Edit
							</a>
						</td>
					</tr>
					
				</tbody>
			</table>

		</div>
	</div>
</div>

<?php include_once'footer.php' ?>