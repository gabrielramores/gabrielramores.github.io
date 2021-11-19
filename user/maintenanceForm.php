

<?php include_once'header.php'?>
<?php include_once'topNavigation.php' ?>

<div class="container-fluid maintenance-panel" style="background: url('images/canoreco-repair.png'); background-size: 100% 100%;">
	<div class="container col-lg-5  maintenance-container shadow">
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
								<input type="date" class="textBox" id="date" placeholder="date"/>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<div class="my-2">
								<label for="current-reading">
            			<b>Current odometer:</b>
            		</label>
            		<input type="text" id="current-reading" class="textBox" onkeyup="form1();" onkeypress="return isNumberKey(event);"  
            		 maxlength="6" required>
            	</div>
            	<span class="text-secondary editBox border-0" id="instruction" >Input five (5) or six (6) numbers only.</span>
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
          		<label for="next-reading" class="mt-5" style="display: inline-block;">
          			<b>Reminder for the next preventive maitenance:</b>
            	</label>
            	<div style="position: relative;">
            		<input type="text" id="next-reading" class="textBox" onkeyup="form1();"
            		style=" padding-right: 35px; width: 100%;"disabled>
            		<span class="m-0 pt-1" id="suffix"><b>km/h</b></span>
            	</div>
            </td>
           </tr>
         </table>
       </fieldset>
       <center class="my-5">
        <button type="button" class="btn btn-primary  shadow-none sub-button" 
        id="submit-form1" data-bs-toggle="modal"
        data-bs-target="#confirm-submit-modal" disabled>
        	Submit
				</button>
			</center>
		</form>
	</div>
</div>

<?php include_once'footer.php' ?>