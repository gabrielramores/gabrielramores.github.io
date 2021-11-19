<?php include_once'header.php'?>
<?php include_once'topNavigation.php' ?>

<div class="container-fluid registration-panel" style="background: url('images/canoreco-repair.png'); background-size: 100% 100%;">
  <div class="container col-lg-5 registration-container shadow">

    <form class="form-padding">

      <fieldset id="lto-registration">
        <div class="container-fluid my-2 p-0 d-flex flex-row-reverse">
          <button type="button" class="close m-0 px-2 py-0" aria-label="Close" onclick="window.location.href='registrationRequest.php'">
            <span aria-hidden="true" style="font-size:20px">&times;</span>
          </button>
          <p class="fs-6 me-auto" style="font-weight: bold">Form No.
            <span id="form-no" style="font-weight: lighter">     </span>
          </p>
        </div>

        <legend>
          <center class="my-5">
            <b class="fs-6">
              <u>LTO & Insurance Registration and Renewal</u>
            </b>
          </center>
        </legend>

        <table class="col-12">
          <tr>
            <td>
               <p class="my-4">
                <label for="drivers-name"><b>Driver's name:</b></label>
                <input type="text" class="textBox" id="drivers" disabled>
              </p>
            </td>
          </tr>

          <tr>
            <td>
               <p>
                <label for="date"><b>Date of Expiration:</b></label>
                <input type="text" class="textBox" id="expirationDate" disabled />
              </p>
            </td>
          </tr>

          <tr>  
            <td>
              <hr class="my-5">    
            </td>
          </tr>

          <tr>
            <td>
              <div class="">
                <label class="m-1" for="remarks"><b>Remarks:</b></label>
                <textarea  id="remarks" class="col-12 textBox" maxlength="1500" placeholder="Leave a comment here"></textarea>
              </div>
            </td>  
            </td>  
          </tr>
        </table>
      </fieldset>
      <center>
        <button type="button" class="btn btn-primary my-5 shadow-none sub-button" id="submit-form3" data-bs-toggle="modal"
        data-bs-target="#confirm-submit-modal" disabled> 
          Submit
        </button>
      </center>
    </form>
  </div>
</div>

<?php include_once'footer.php' ?>
