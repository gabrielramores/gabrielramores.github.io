<?php include_once 'headerTwo.php' ?>


<div class="py-5 px-2" style="background: gainsboro;">
  
  <div class="container-fluid col-lg-6 border p-3 shadow" style="background: white; border-radius: 5px;">
    <div class="container-fluid my-2 p-0 d-flex flex-row-reverse">
      <button type="button" class="close m-0 px-2" aria-label="Close" onclick="window.location.href='registrationRequest.php'">
        <span aria-hidden="true" style="font-size:20px">&times;</span>
      </button>
      <h4 class="me-auto"><span class="bx bx-time">  </span>  Add Schedule</h4>
    </div>


  <hr class="my-4">

    <form action="">
      <table class="col-12">

         <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="edit-schedule"><b>Set schedule</b></label>
              <input type="date" id="edit-schedule"  class="editBox " name="" value="" placeholder="ID" onkeyup="editInfo()" />
            </p>
          </td>
        </tr>

      </table>
      <center>
        <button type="button" class="btn btn-primary my-5 shadow-none col-3" id="edit-driver" disabled>
          Submit
        </button>
      
        <button type="reset" class="btn btn-warning my-5 shadow-none col-3" onclick="window.location.href='registrationRequest.php'">
          Cancel
        </button>
      </center>
    </form>

    
  </div>
</div>

<?php include_once'footer.php' ?>

