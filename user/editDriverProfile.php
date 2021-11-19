<?php include_once 'headerTwo.php' ?>


<div class="py-5 px-2" style="background: gainsboro;">
  
  <div class="container-fluid col-lg-6 border p-3 shadow" style="background: white; border-radius: 5px;">
    <div class="container-fluid my-2 p-0 d-flex flex-row-reverse">
      <button type="button" class="close m-0 px-2" aria-label="Close" onclick="window.location.href='userProfile.php'">
        <span aria-hidden="true" style="font-size:20px">&times;</span>
      </button>
      <h4 class="me-auto"><span class="bx bx-edit">  </span>Edit Profile</h4>
    </div>


  <hr class="my-4">

    <form action="">
      <table class="col-12">
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
              <label for="edit-email"><b>Email</b></label>
              <input type="email" id="edit-email"  class="editBox " name="" value="" onkeyup="editInfo()" placeholder="Email" />  
            </p>
          </td>
        </tr>

        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="edit-contact"><b>Phone number</b></label>
              <input type="text" id="edit-contact"  class="editBox " name="" value="" onkeyup="editInfo()" onkeypress="return isNumberKey(event);" placeholder="Phone number" maxlength="11" />  
            </p> 
          </td>
        </tr>

        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="edit-address"><b>Address</b></label>
              <input type="text" id="edit-address"  class="editBox " name="" value="" onkeyup="editInfo()" placeholder="Address" />  
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
              <input type="password" id="edit-password"  class="editBox " name="" value="" oninput="editPassword()" placeholder="Password must consist eight (8) characters" />  
            </p>
          </td>
        </tr>

        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="confirm-password"><b>Confirm password</b></label>
              <input type="password" id="confirm-password"  class="editBox " name="" value="" onkeyup ="editPassword()" placeholder="Confirm password" disabled/>  

             
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
        <button type="button" class="btn btn-primary my-5 shadow-none col-3" id="save-changes" disabled>
          Submit
        </button>
      
        <button type="reset" class="btn btn-warning my-5 shadow-none col-3" onclick="window.location.href='userProfile.php'">
          Cancel
        </button>
      </center>
    </form>

    
  </div>
</div>

<?php include_once'footer.php' ?>

