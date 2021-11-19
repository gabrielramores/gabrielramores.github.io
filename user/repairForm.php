<?php include_once'header.php'?>
<?php include_once'topNavigation.php' ?>

<div class="container-fluid repair-panel" style="background-image: url(images/canoreco-repair.png); background-size: 100% 100% ;">
	<div class="container col-lg-5 repair-container shadow">

		<form class="form-padding">

			<fieldset id="vehicle-repair">

				<p class="fs-6" style="font-weight: bold">Form No. 
					<span id="form-no" style="font-weight: lighter"> 
					</span>
				</p>

				<legend>
					<center class="my-5">
						<b class="fs-6">
							<u>Form MS 05 - Vehicle Repair Request</u>
						</b>
					</center>
				</legend>
				<table class="col-12">
					<tr>
						<td>
							<p class="my-2">
								<label for="datePicker"><b>Date:</b></label>
								<input type="date" id="datePicker" class="textBox"/>
							</p>
						</td>
					</tr>

					<tr>
						<td>
							<p class="my-2">
								<label for="driver-name"><b>Driver's name:</b></label>
								<input type="text=" id="driver-name" class="textBox" disabled>
							</p>
            </td>
          </tr>

          <tr>
          	<td>
          		<p class="my-2">
          			<label for="body-number"><b>Body number:</b></label>
          			<input type="text" class="textBox" id="body-number" disabled>
          		</td>
          	</tr>

          <tr>
          	<td>
          		<p class="my-2">
          			<label for="plate-no"><b>Plate number:</b></label>
          			<input id="plate-no" type="text" class="textBox" disabled>
          		</p>
          	</td>
          </tr>

          <tr>
          	<td>
            	
            </td>
          </tr>
        </table>
				
				<hr class="my-4"/>

				<table class="col-12" id="reportProblem">
					<th><b>Report a problem:</b></th>
					<tr>
						<td>
							<input type="checkbox" id="break-system" name="break_system" value="Fix break system" onclick="form2();">
							<label for="break-system" class="my-2"> Fix break system</label><br>
						</td>
					</tr>

					<tr>
						<td>
							<input type="checkbox" id="fix-tires" name="fix_tires" value=" Fix tires" onclick="form2();">
							<label for="fix-tires"> Flat tires</label><br>
						</td>
					</tr>

					<tr>
						<td>
							<input type="checkbox" id="electrical-system" name="electrical_system" value="Fixed Electrical System" onclick="form2();">
							<label for="electrical-system" class="my-2"> Fix Electrical System</label><br>
						</td>
					</tr>

					<tr>
						<td>
							<input type="checkbox" id="fix-lights" name="fix_light" value=" Fix lights" onclick="form2();">
							<label for="fix-lights"> Fix lights</label><br/>
						</td>
					</tr>

					<tr>
						<td>
							<input type="checkbox" id="other-reason" name="other_reason" value="Other" onclick="form2();">
							<label for="other-reason" class="my-2"> Others</label><br/>
						</td>
					</tr>

					<tr>
						<td>
							<label class="my-2" for="specify-other">If other, please specify:</label><br>
							<textarea name="specify_other" id="specify-other" class="col-12 textBox" placeholder="Enter here..." oninput="form2()" disabled></textarea>
						</td>
					</tr>
				</table>

			</fieldset>

			<center>
				<button type="button" class="btn btn-primary my-5 shadow-none sub-button" id="submit-form2"  data-bs-toggle="modal"
        data-bs-target="#confirm-submit-modal" disabled> 
        	Submit
        </button>
      </center>
    </form>

  </div>
</div>

<?php include_once'footer.php' ?>