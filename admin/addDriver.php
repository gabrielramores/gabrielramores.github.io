
<?php 
include "../include/connection.php";
if (isset($_POST['submit-button'])){
  $driver_id = $_POST['driverID'];
  $driver_Fname = $_POST['driverFname'];
  $driver_Lname = $_POST['driverLname'];
  $create_username = $_POST['cr-username'];
  $create_password = $_POST['cr-password'];

  $query = mysqli_query($conn, "INSERT INTO `usermtrpl`(`driverID`, `userName`, `userPass`, `First Name`, `Last Name`,`UserType`) VALUES ('$driver_id','$create_username','$create_password','$driver_Fname','$driver_Lname',2)");
  echo '<script> alert("Account Successfully Saved...");</script>';
}
?>



<?php include_once 'headerTwo.php' ?>


<div class="py-5 px-2" style="background: gainsboro;">
  
  <div class="container-fluid col-lg-6 border p-3 shadow" style="background: white; border-radius: 5px;">
    <div class="container-fluid my-2 p-0 d-flex flex-row-reverse">
      <button type="button" class="close m-0 px-2" aria-label="Close" onclick="window.location.href='userManagement.php'">
        <span aria-hidden="true" style="font-size:20px">&times;</span>
      </button>
      <h4 class="me-auto"><span class="bx bx-edit">  </span>Add Vehicle </h4>
    </div>


  <hr class="my-4">

    <form action="">
      <table class="col-12">

         <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="input-id"><b>ID</b></label>
              <input type="text" id="input-id"  class="textBox " name="driverID" value="" placeholder="Enter here..." required />
            </p>
          </td>
        </tr>

        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="input-driver-name"><b>First name</b></label>
              <input type="text" id="input-Fname"  class="textBox " name="driverFname" value="" placeholder="Enter here..." required />  
            </p>
          </td>
        </tr>

        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="input-driver-name"><b>Last name</b></label>
              <input type="text" id="input-Lname"  class="textBox " name="driverLname" value="" placeholder="Enter here..." required />  
            </p>
          </td>
        </tr>


        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="create-username"><b>Create username</b></label>
              <input type="text" id="create-username"  class="textBox " name="cr-username" value="" placeholder="Enter here..." required />  
            </p>
          </td>
        </tr>

        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="create-password"><b>Create password</b></label>
              <input type="text" id="create-password"  class="textBox " name="cr-password" value="" placeholder="Enter here..." required />  
            </p>
          </td>
        </tr>

      </table>
      <center>
        <button type="button" class="btn btn-primary my-5 shadow-none col-3" id="add-driver" disabled>
          Submit
        </button>
      
        <button type="reset" class="btn btn-warning my-5 shadow-none col-3" onclick="window.location.href='userManagement.php'">
          Cancel
        </button>
      </center>
    </form>

    
  </div>
</div>

<?php include_once'footer.php' ?>

