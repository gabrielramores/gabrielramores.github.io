<?php include_once'headerTwo.php'?>




<div class="container-fluid registration-panel" style="background: url('images/canoreco-repair.png'); background-size: 100% 100%;">
  <div class="container col-lg-5 registration-container shadow pb-5">

    <form class="form-padding">

      <fieldset id="lto-registration">
        <p class="fs-6" style="font-weight: bold">Form No.
          <span id="form-no" style="font-weight: lighter"> </span>
        </p>

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
                <input type="text" class="textBox" id="expirationDate" disabled/>
              </p>
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