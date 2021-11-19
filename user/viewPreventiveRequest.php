<?php include_once'headerTwo.php'?>



<div class="container-fluid maintenance-panel" style="background: url('images/canoreco-repair.png'); background-size: 100% 100%;">
	<div class="container col-lg-5  pb-5 maintenance-container shadow">
		<form class="form-padding">
			<fieldset id="preventive-maintenance">
				<p class="fs-6" style="font-weight: bold">Form No.
					<span id="form-no" style="font-weight: lighter"> </span>
				</p>

				<legend>
					<center class="my-5">
						<b class="fs-6"><u>Forms MS 03 - Preventive Maintenance Requests</u></b>
					</center>
				</legend>
				<table class="col-12">
					<tr>
						<td>
							<p class="my-2">
								<label for="date"><b>Date:</b></label>
								<input type="text" class="textBox" id="date" disabled />
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<div class="my-2"	style="position: relative;">
								<label for="current-reading" style="display: inline-block;">
            			<b>Current odometer:</b>
            		</label>
            		<input type="text" id="current-reading" class="textBox"  
            		style=" padding-right: 35px;" maxlength="6" disabled>
            		<span class="m-0 pt-1" id="suffix"><b>km/h</b></span>
            	</div>
            </td>
          </tr>

          <tr>
          	<td >
          		<p class="my-2">
          			<label for="drivers-name"><b>Driver's name:</b></label>
          			<input type="text" class="textBox" id="drivers-name" disabled>
          		</p>
          	</td>
          </tr>

          <tr>
          	<td >
          		<p class="my-2">
          			<label for="body-number"><b>Body number:</b></label>
          			<input type="text" class="textBox" id="body-number" disabled>
          		</p>
          	</td>
          </tr>

          <tr>
          	<td>
          		<label for="next-reading" class="mt-3" style="display: inline-block;">
          			<b>Reminder for the next preventive maitenance:</b>
            	</label>
            	<div style="position: relative;">
            		<input type="text" id="next-reading" class="textBox" 
            		style=" padding-right: 35px; width: 100%;"disabled>
            		<span class="pt-1" id="suffix"><b>km/h</b></span>
            	</div>
            </td>
           </tr>
         </table>
       </fieldset>
       <center>
        <button type="button" class="btn btn-warning my-5 shadow-none sub-button" onclick="window.location.href='request.php'"> 
           Back
        </button>
      </center>
		</form>
	</div>
</div>
<?php include_once'footer.php'?>