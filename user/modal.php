



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
          <h5 class="m-0 navbar-brand" style="font-weight: lighter;text-shadow: 1px 2px gainsboro;">You are about to leave...</h5>
          <h5 class="m-0 navbar-brand">Are you sure?</h5>
        </center>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-warning col-4 mx-auto shadow-none" data-bs-dismiss="modal">
          <p class="m-0 fs-6">C A N C E L</p>
        </button>

        <button type="button" class="btn btn-sm btn-danger col-4 text-white mx-auto shadow-none">
          <a href="logout.php"><p class="m-0 fs-6 text-light">L E A V E</p></a>
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
            <h4 class="my-5">Do you want to submit?</h4>
            <hr/>
            <p class="mt-2 mb-4" style="font-size: 12px;"><b>Note: </b> You can not edit once you click the <b>SUBMIT</b> button. <br>
              Please review it before you <b>SUBMIT</b>.
            </p>
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


  <!-- S A V E    C H A N G E S  -->

  <div class="modal fade" id="save-changes-modal" tabindex="-1" role="dialog" 
  aria-labelledby="save-changes-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered col-lg-12" role="document" >
      <div class="modal-content">
        
        <div class="modal-header">
          <h5 class="modal-title text-primary" id="save-changes-modal-title">
            <span class="bx bx-info-circle"></span> Notice
          </h5>

          <button type="button" class="close m-0 px-2" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="font-size:20px">&times;</span>
          </button>
        </div>

        <div class="modal-body navbar-brand">
          <center class="my-3">
            <h5 style="font-weight: lighter;">Save changes?</h5>
          </center>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-warning col-4 m-4 mx-auto shadow-none" data-bs-dismiss="modal">
            <p class="fs-6 m-0 ">C A N C E L</p>
          </button>

          <button type="submit" class="btn btn-sm btn-primary col-4 m-4 mx-auto text-white shadow-none">
            <p class="fs-6 m-0 ">S A V E</p>
          </button>
        </div>
      </div>
    </div>
  </div>