

<?php include_once'headerTwo.php'?>
<?php include_once'topNavigation.php' ?>

<div class="container-fluid maintenance-panel" style="background: url('images/canoreco-repair.png'); background-size: 100% 100%;">
  
  <div class="container col-lg-5  maintenance-container shadow">
    <form class="form-padding">
      <fieldset id="preventive-maintenance">
        
        <div class="container-fluid my-2 p-0 d-flex flex-row-reverse">
          <button type="button" class="close m-0 px-2 py-0" aria-label="Close" onclick="window.location.href='maintenanceRequest.php'">
            <span aria-hidden="true" style="font-size:20px">&times;</span>
          </button>
          <p class="fs-6 me-auto" style="font-weight: bold">Form No.
            <span id="form-no" style="font-weight: lighter">     </span>
          </p>
        </div>
        

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
                <input type="text" class="textBox" id="date" disabled/>
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <div class="my-2">
                <label for="current-reading">
                  <b>Current odometer:</b>
                </label>
                <input type="text" id="current-reading" class="textBox" style=" padding-right: 35px;" disabled>
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

           <tr>
             <td>
               <hr class="my-5" />
             </td>
           </tr>

           <tr>
            <td>
              <p> 
                <label for="mechanics-name"><b>Mechanic's name:</b></label>
                <input type="text" class="textBox col-12" id="mechanics-name" onkeypress="return isLetterKey(event)">
              </p>
            </td>
          </tr>
           <tr>
             <td>
               <div class="mt-4 mb-2">
                <b>Work Done:</b>
              </div>
             </td>
           </tr>

           <tr>
             <td>
              <input type="checkbox" class="form-check-input shadow-none options" id="option1">
              <label for="option1" class="form-check-label checkboxLabel"><h6>Engine Change Oil</h6></label>
             </td>
           </tr>

           <tr>
             <td>
               <input type="checkbox" class="form-check-input shadow-none options" id="option2">
               <label for="option2" class="form-check-label checkboxLabel"><h6>Change Filters</h6></label>
             </td>
           </tr>

           <tr>
             <td>
              <input type="checkbox" class="form-check-input shadow-none options" id="option3">
              <label for="option3" class="form-check-label checkboxLabel"><h6>Filled Lubricants</h6></label>
             </td>
           </tr>

           <tr>
             <td>
              <input type="checkbox" class="form-check-input shadow-none options" id="option4">
              <label for="option4" class="form-check-label checkboxLabel"><h6>Filled Water</h6></label>
             </td>
           </tr>

           <tr>
             <td>
              <input type="checkbox" class="form-check-input shadow-none options" id="option5">
              <label for="option5" class="form-check-label checkboxLabel"><h6>Filled Battery Water</h6></label>
             </td>
           </tr>

           <tr>
             <td>
              <input type="checkbox" class="form-check-input shadow-none options" id="option6">
              <label for="option6" class="form-check-label checkboxLabel"><h6>Fixed Brake System</h6></label>
             </td>
           </tr>

           <tr>
             <td>
               <input type="checkbox" class="form-check-input shadow-none options" id="option7">
               <label for="option7" class="form-check-label checkboxLabel"><h6>Fixed Tires</h6></label>
             </td>
           </tr>

           <tr>
             <td>
              <input type="checkbox" class="form-check-input shadow-none options" id="option8">
              <label for="option8" class="form-check-label checkboxLabel"><h6>Fixed Electrical System</h6></label>
             </td>
           </tr>

           <tr>
             <td>
              <input type="checkbox" class="form-check-input shadow-none options" id="option9">
              <label for="option9" class="form-check-label checkboxLabel"><h6>Fixed Light</h6></label>
             </td>
           </tr>

           <tr>
             <td>
              <input type="checkbox" class="form-check-input shadow-none options" id="option10">
              <label for="option10" class="form-check-label checkboxLabel"><h6>Car Washed</h6></label>
             </td>
           </tr>

           <tr>
             <td>
               <div class="my-5">
                <label class="m-1" for="comments"><b>Remarks:</b></label>
                <textarea class="form-control shadow-none textBox" placeholder="Leave a comment here" id="comments" maxlength="500"></textarea>
              </div>
             </td>
           </tr>
         </table>
      </fieldset>
      <center>
        <button type="button" class="btn btn-primary my-5 shadow-none sub-button">Submit</button>
      </center>
    </form>
  </div>
</div>

<?php include_once'footer.php' ?>
