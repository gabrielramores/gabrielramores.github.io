



<!-- S I G N   -   O U T   -->

<div class="modal fade" id="sign-out-modal" tabindex="-1" role="dialog" 
  aria-labelledby="sign-out-modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document" >
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="sign-out-modal-title">
          <span class="bx bx-log-out"></span> Sign-out
        </h5>

        <button type="button" class="close m-0 px-2" data-bs-dismiss="modal" aria-label="Close" style="background: white; border: none;">
          <span aria-hidden="true" style="font-size:20px">&times;</span>
        </button>
      </div>

      <div class="modal-body navbar-brand">
        <center class="my-3">
          <h5 class="m-0 navbar-brand" style="font-weight: lighter; text-shadow: 1px 2px gainsboro;">You are about to leave...</h5>
          <h5 class="m-0 navbar-brand">Are you sure?</h5>
        </center>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-warning col-4 mx-auto shadow-none" data-bs-dismiss="modal">
          <p class="m-0 fs-6">C A N C E L</p>
        </button>

        <button type="button" class="btn btn-sm btn-danger col-4 text-white mx-auto shadow-none" >
          <a href="logout.php" ><p class="m-0 fs-6 text-light">L E A V E</p></a>
        </button>
      </div>
    </div>
  </div>
  </div>


<!--C O N F I R M     S U B M I S S I O N  -->

  <div class="modal fade" id="confirm-submit-modal" tabindex="-1" role="dialog" 
  aria-labelledby="confirm-submit-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered col-lg-12" role="document" >
      <div class="modal-content">
        
        <div class="modal-header">
          <h5 class="modal-title text-primary" id="confirm-submit-modal-title">
            <span class="bx bx-info-circle"></span> Notice
          </h5>

          <button type="button" class="close m-0 px-2" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="font-size:20px">&times;</span>
          </button>
        </div>

        <div class="modal-body navbar-brand">
          <center class="m-3">
            <h5 class="m-0 navbar-brand " style="font-weight: lighter;">Do you want to submit?</h5>
          </center>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-warning col-4 m-4 mx-auto shadow-none" data-bs-dismiss="modal">
            <p class="fs-6 m-0 ">C A N C E L</p>
          </button>

          <button type="submit" class="btn btn-sm btn-primary col-4 m-4 mx-auto text-white shadow-none">
            <p class="fs-6 m-0 ">S U B M I T</p>
          </button>
        </div>
      </div>
    </div>
  </div>




<!--C O N F I R M     D E L E T E   /  R E M O V E   -->

  <div class="modal fade" id="confirm-remove-modal" tabindex="-1" role="dialog" 
  aria-labelledby="confirm-remove-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered col-lg-12" role="document" >
      <div class="modal-content">
        
        <div class="modal-header">
          <h5 class="modal-title text-primary" id="confirm-remove-modal-title">
            <span class="bx bx-info-circle"></span> Notice
          </h5>

          <button type="button" class="close m-0 px-2" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="font-size:20px">&times;</span>
          </button>
        </div> 

        <div class="modal-body navbar-brand">
          <center class="m-3">
            <h5 class="my-5 navbar-brand">Continue to remove?</h5>
            <hr/>
            <p class="mt-2 mb-4" style="font-size: 12px;"><b>Note: </b> You can not restore, once you click the <b>REMOVE</b> button.<br>
              Please make sure you pick the right item.
            </p>
          </center>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-warning col-4 m-4 mx-auto shadow-none" data-bs-dismiss="modal">
            <p class="fs-6 m-0 ">C A N C E L </p>
          </button>

          <button type="submit" class="btn btn-sm btn-danger col-4 m-4 mx-auto text-white shadow-none">
            <p class="fs-6 m-0 ">R E M O V E</p>
          </button>
        </div>
      </div>
    </div>
  </div>








<!-- S E T     S C H E D U L E -->

  <div class="modal fade" id="set-schedule" tabindex="-1" role="dialog" 
  aria-labelledby="set-schedule" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered col-lg-12" role="document" >
      <div class="modal-content">
        
        <div class="modal-header">
          <h5 class="modal-title text-primary" id="set-schedule-title">
         <label for="schedule">Set schedule:</label>
          </h5>

          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="font-size:20px">&times;</span>
          </button>
        </div> 

        <div class="modal-body navbar-brand">

          <form action="">
            <center class="m-3">
            <input type="date" class="p-2" id="scheduleBtn" name="" value="" placeholder="" onchange="setSchedule();">
          </center>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-warning col-4  mx-auto shadow-none" data-bs-dismiss="modal">
              <p class="fs-6 m-0 ">C A N C E L </p>
            </button>

            <button type="submit" class="btn btn-sm btn-primary col-4  mx-auto text-white shadow-none" id="set" disabled>
              <p class="fs-6 m-0 ">S E T </p>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

