<?php include_once 'header.php' ?>
<?php include_once 'topNavigation.php'?>

<div class="container-fluid py-5 px-2" style="background: gainsboro;">
	
	<div class="container-fluid col-lg-9 border p-3 shadow" style="background: white;  border-radius: 5px;">
		<h4 class="page-name text-dark m-0">
			<span class="bx bx-car"></span>
			<b>Vehicle Record</b>
		</h4>
		<div class="container-fluid bg-dark border p-1" style="background: white;  border-radius: 5px;">
			<button class="add-vehicle d-inline" id="create-vehicle"><a href="addVehicle.php" class="text-light" >
				<span class="bx bx-plus"></span> Add new vehicle</a>
			</button>
		</div>
	</div>

	<br class="my-4">

	<div class="container-fluid col-lg-9 border py-3 shadow" style="background: white;  border-radius: 5px;">
		<div style="overflow: auto;">

			<table class="table display caption-top" id="vehicle-table">
				<caption class="mt-3"></caption>


				<thead>	
					<th scope="col">No.</th>
					<th scope="col">Date Acquired</th>
					<th scope="col">Body Number</th>
					<th scope="col">Plate Number</th>
					<th scope="col">Driver's Name</th>
					<th scope="col">Vehicle Type</th>
					<th scope="col">Status</th>
					<th></th>
				</thead>

				<tbody>


					<tr>
						<td>1</td>
						<td>04/01/2001</td>
						<td><a href="maintenanceRecord.php">C01</a></td>
						<td>XAV 328</td>
						<td>Ricardo Dalisay</td>
						<td>Sportivo</td>
						<td>
							Working
						</td>

						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="editVehicle.php">
								<span class="bx bx-edit"></span>Edit
							</a>
						</td>
					</tr>


					<tr>
						<td>2</td>
						<td>08/10/2001</td>
						<td>C02</td>
						<td>FAI 425</td>
						<td>Harold San Pascual</td>
						<td>Fortuner</td>
						<td>
							Working
						</td>
						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="editVehicle.php">
									<span class="bx bx-edit"></span>
								Edit
							</a>
						</td>
					</tr>


					<tr>
						<td>3</td>
						<td>12/15/2001</td>
						<td>C03</td>
						<td>JOH 528</td>
						<td>Arthur Mac</td>
						<td>Hilux FX FB</td>
						<td>
							Dispose
						</td>

						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="editVehicle.php">
								<span class="bx bx-edit"></span>
								Edit
							</a>
						</td>
					</tr>


					<tr>
						<td>4</td>
						<td>4/29/2002</td>
						<td>C04</td>
						<td>JUN 528</td>
						<td>Emmanuel Sabordo</td>
						<td>Suzuki Multicab</td>
						<td>
							Dispose
						</td>
						
						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="editVehicle.php">
								<span class="bx bx-edit"></span>
								Edit
							</a>
						</td>
					</tr>
					

					<tr>
						<td>5</td>
						<td>11/23/2002</td>
						<td>C05</td>
						<td>NEL 528</td>
						<td>Rudolfo Tulfo</td>
						<td>Montero Sport</td>
						<td>
							Working
						</td>

						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="editVehicle.php">
								<span class="bx bx-edit"></span>
								Edit
							</a>
						</td>
					</tr>


					<tr>
						<td>6</td>
						<td>05/23/2003</td>
						<td>C06</td>
						<td>LEN 528</td>
						<td>Enrique Salmon</td>
						<td>L300 Dropside</td>
						<td>
							Dispose
						</td>
							
						<td style="cursor: pointer;border-bottom: 0 !important;">
							<a href="editVehicle.php">
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

