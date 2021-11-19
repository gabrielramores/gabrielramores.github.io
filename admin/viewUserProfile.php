
<?php include_once 'headerTwo.php' ?>
<?php include_once 'topNavigation.php' ?>


<div class="py-5 px-2" style="background: gainsboro;">
<div class="container-fluid col-lg-6 border d-flex flex-wrap shadow p-3" style="background: white; border-radius: 5px;">
  <div>
    <img src="images/default-profile-picture.png" id="user-profile-picture" class="border shadow" height="110px" width="110px" >
  </div>

  <div>
    <div class="container-fluid my-3">
      <p class="word-break fs-2" id="user-name" style="font-weight: bold">Harold San Pascual</p>
       <h6 class="text-secondary" id="role">Driver</h6>
    </div>
  </div>
</div>

<br class="my-4">

<div class="container-fluid col-lg-6 p-4 border shadow" style="background: white; border-radius: 5px;">
  <div class="container-fluid my-2 p-0">
    <h4 class="me-auto" style="color: #F4BE2C;"><span class='bx bxs-user-detail fs-3'></span> User Details</h4>
  </div>


  <form action="">
      <table class="col-12">

        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="user-email" style="font-weight: bold;">Email</label>
              <input type="text" id="user-email"  class="infoBox " name="" value="" placeholder="Not set" disabled/>
            </p>
          </td>
        </tr>

        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="user-set-contact" style="font-weight: bold;">Phone number</label>
              <input type="text" id="user-contact"  class="infoBox " name="" value="" placeholder="Not set" />  
            </p>
          </td>
        </tr>

        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="user-set-address" style="font-weight: bold;">Address</label>
              <input type="text" id="user-address"  class="infoBox " name="" value="" placeholder="Not set" />  
            </p>
          </td>
        </tr>

        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="user-vehicle" style="font-weight: bold;">Assigned vehicle</label>
              <input type="text" id="user-vehicle"  class="infoBox " name="" value="" placeholder="Not set" />  
            </p>
          </td>
        </tr>

        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="user-area" style="font-weight: bold;">Assigned area</label>
              <input type="text" id="user-area"  class="infoBox " name="" value="" placeholder="Not set" />  
            </p>
          </td>
        </tr>


        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="user-username" style="font-weight: bold;">Username</label>
              <input type="text" id="user-username"  class="infoBox " name="" value="" placeholder="usernamesample" />  
            </p>
          </td>
        </tr>

        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="user-password" style="font-weight: bold;">Password</label>
              <input type="text" id="user-password"  class="infoBox " name="" value="" placeholder="passwordsample" />  
            </p>
          </td>
        </tr>

      </table>
    </form>
    <center>
      <button type="button" class="btn btn-warning my-5 shadow-none sub-button" onclick="window.location.href='userManagement.php'"> 
        Back
      </button>
    </center>
  </div>
</div>



<?php include_once'footer.php' ?>

