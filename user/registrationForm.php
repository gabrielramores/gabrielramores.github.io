<?php include_once'header.php'?>
<?php include_once'topNavigation.php' ?>

<div class="container-fluid registration-panel" style="background: url('images/canoreco-repair.png'); background-size: 100% 100%;">
  <div class="container col-lg-5 registration-container shadow">

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
                <input type="date" class="textBox" id="expirationDate" onchange="form3()" placeholder="date"/>
              </p>
              <span class="text-secondary">Please set the date of expiration one (1) week or more before the expiration. </span>
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
 