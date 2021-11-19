<?php include_once 'header.php' ?>

  <div class="container-fluid border-bottom">
    <button class="btn btn-md shadow-none fs-1" id="backButton" type="submit" onclick="window.location.href='registrationRequest.php'"> 
      <span class="bx bx-left-arrow-alt"/>
    </button>
  </div>


  <div class="container col-lg-5 my-3 py-5">
    
    <div class="container border py-3 bg-primary" id="sign-out">
      <h3 class="page-name text-light d-inline"><u><b>Sign-Out</b></u></h3>
    </div>
    
    <div class="container border py-5">
      <center>
        <h3>Are you sure you want to <b>LEAVE</b>?</h3>
      </center>
      <div class="container-fluid d-flex flex-wrap mt-5 pt-5">
        <div class="container col-lg-5 ">
          <button type="button" class="btn btn-md btn-warning col-12 m-2 text-white mx-auto shadow-none" onclick="location.href='vehicleRecord.php'">
            <h6 class="m-0">C A N C E L</h6>
          </button>
        </div>
        <div class="container col-lg-5">
          <button type="button" class="btn btn-md btn-danger col-12 m-2text-white mx-auto shadow-none">
            <h6 class="m-0">L E A V E</h6>
          </button>
        </div>
      </div>
    </div>

  </div>

<?php include_once'footer.php' ?>