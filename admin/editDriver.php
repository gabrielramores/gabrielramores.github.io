<?php include_once 'headerTwo.php' ?>


<div class="py-5 px-2" style="background: gainsboro;">
  
  <div class="container-fluid col-lg-6 border p-3 shadow" style="background: white; border-radius: 5px;">
    <div class="container-fluid my-2 p-0 d-flex flex-row-reverse">
      <button type="button" class="close m-0 px-2" aria-label="Close" onclick="window.location.href='userManagement.php'">
        <span aria-hidden="true" style="font-size:20px">&times;</span>
      </button>
      <h4 class="me-auto"><span class="bx bx-edit">  </span>Edit Driver Profile</h4>
    </div>


  <hr class="my-4">

    <form action="">
      <table class="col-12">

         <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="edit-id"><b>ID</b></label>
              <input type="text" id="edit-id"  class="editBox " name="" value="" placeholder="ID" onkeyup="editInfo()" />
            </p>
          </td>
        </tr>

        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="edit-first-name"><b>First name</b></label>
              <input type="text" id="edit-first"  class="editBox " name="" value="" onkeyup="editInfo()" onkeypress="return isLetterKey(event)" placeholder="First name" />
            </p>
          </td>
        </tr>

        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="edit-last-name"><b>Last name</b></label>
              <input type="text" id="edit-last"  class="editBox " name="" value=""  onkeyup="editInfo()" onkeypress="return isLetterKey(event)" placeholder="Last name" />  
            </p>
          </td>
        </tr>


        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="edit-username"><b>Change username</b></label>
              <input type="text" id="edit-username"  class="editBox " name="" value="" onkeyup="editInfo()" placeholder="Username" />  
            </p>
          </td>
        </tr>

        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="edit-password"><b>Change password</b></label>
              <input type="password" id="edit-password"  class="editBox " name="" value="" onkeyup="editPassword()" placeholder="Password must consist eight (8) characters" />  
            </p>

            <p class="editBox" style="border: none;">
              <input id="show-password" type='checkbox'onclick="showPassword()"> 
              <label for='show-password' class='viewPword' >
                Show Password
              </label>
            </p>

          </td>
        </tr>


      </table>
      <center>
        <button type="button" class="btn btn-primary my-5 shadow-none col-3" id="edit-driver" disabled>
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

