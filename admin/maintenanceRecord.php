<?php include_once 'headerTwo.php' ?>


<div class="container-fluid border shadow" style="background: gainsboro;">
	<div class="col-lg-8 m-3 p-3 mx-auto " style="background: white ;border-radius: 5px;">
		<div class="fs-4 py-5" style="text-align: center;">
			<u>
				<b>
					Preventive Maintenance Record
				</b>
			</u>
		</div>

		<div class="container-fluid d-flex flex-wrap py-3 -sm" style="border-radius: 5px;">
			<div class="container col-lg-5">
				<p>
					<label for="bodyPlateNumber"><b>Body and Plate Number:</b></label>
					<input id="bodyPlateNumber" type="text" class="col-12 textBox" value="C01" disabled />
				</p>

				<p>
					<label for="department"><b>Department/Area:</b></label>
					<input id="department" type="text" class="col-12 textBox" value="Talisay, Camarines Norte" disabled />
				</p>
			</div>

			<div class="container-fluid col-lg-5">
				<div>
					<b>Legend:</b>
					<div class="container-fluid d-flex">
						<div class="boxForDriver">
						</div>
						<b class="mx-2 fs-6"> To be filled up by Driver.</b>
					</div>

					<div class="container-fluid d-flex">
						<div class="boxForMechanic">
						</div>
						<b class="mx-2 word-break"> To be filled up by Mechanic. <br/>(Mark check (   &#10003;   ) for work done below.</b>
					</div>
				</div>
			</div>
		</div>

		<br class="my-5">

		<div class="container-fluid" style="overflow: auto; border-radius: 5px;">
			<table class="table display caption-top" >
				<caption class="mt-3"></caption>
				<thead>
					<th scope="col" class="forDriver">Date</th>
					<th scope="col" class="forDriver">Odometer Reading</th>
					<th scope="col" class="forDriver">Driver's Name</th>

					<th scope="col" class="forMechanic">Added Lubricants</th>
					<th scope="col" class="forMechanic">Changed Brake</th>
					<th scope="col" class="forMechanic">Changed Oil</th>
					<th scope="col" class="forMechanic">Changed Tire</th>
					<th scope="col" class="forMechanic">Replaced Wiper</th>
					<th scope="col" class="forMechanic">Replaced Light</th>
					<th scope="col" class="forMechanic">Mechanic Name</th>
					<th scope="col" class="forMechanic">Release Date</th>
					<th scope="col" class="forMechanic">Remarks</th>
				</thead>

				<tbody>
					<tr>
						<td>11/20/2007</td>
						<td>54123</td>
						<td>Ricardo Dalisay</td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
					</tr>
					<tr>
						<td>12/20/2007</td>
						<td>64123</td>
						<td>Ricardo Dalisay</td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
					</tr>
					<tr>
						<td>01/20/2008</td>
						<td>74123</td>
						<td>Ricardo Dalisay</td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
						<td>&#10003; </td>
					</tr>
				</tbody>
			</table>
		</div>
		<center>
      <button type="button" class="btn btn-warning my-5 col-5 shadow-none" onclick="window.location.href='vehicleRecord.php'"> 
        Back
      </button>
    </center>
	</div>
</div>


	





<?php include_once 'footer.php'?>
