<?php include_once'header.php'?>
<?php include_once'topNavigation.php' ?>

<div class="py-5 px-2" style="background: gainsboro;">

<div class="container-fluid  col-lg-8 border d-flex flex-wrap shadow p-3" style="background: white;  border-radius: 5px;">
  <h4 class="page-name text-dark m-0">
    <span class="bx bx-send"></span>
    <b >Sent Forms</b>
  </h4> 
</div>

<br class="my-4">

<div class="container-fluid col-lg-8  p-4 border shadow" style="background: white;  border-radius: 5px;">
  <div style="overflow: auto">
    <table id="myTable" class="table display requestTable">
      <thead>
        <tr>
          <th>No.</th>
          <th>Date Sent</th>
          <th>Form</th>
          <th>Schedule</th>
          <th>Status</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>1</td>
          <td>03/28/21</td>
          <td id="request_type" style="cursor: pointer; ">
            <a href="viewRepairRequest.php">
              Vehicle Repair
            </a>
          </td>
          <td>03/29/21</td>
          <td>Pending</td>
        </tr>

        <tr>
          <td>2</td>
          <td>04/25/21</td>
          <td id="request_type" style="cursor: pointer; ">
            <a href="viewPreventiveRequest.php">
              Vehicle Preventive Maintenance
            </a>
          </td>
          <td>04/26/21</td>
          <td>Pending</td>
        </tr>

        <tr>
          <td>3</td>
          <td>05/28/21</td>
          <td id="request_type" style="cursor: pointer; ">
            <a href="viewRepairRequest.php">
              Vehicle Repair
            </a>
          </td>
          <td>05/29/21</td>
          <td>Pending</td>
        </tr>

        <tr>
          <td>4</td>
          <td>06/04/21</td>
          <td id="request_type" style="cursor: pointer; ">
            <a href="viewRepairRequest.php">
              Vehicle Repair
            </a>
          </td>
          <td>06/05/21</td>
          <td>Pending</td>
        </tr>

        <tr>
          <td>5</td>
          <td>07/30/21</td>
          <td id="request_type" style="cursor: pointer; ">
            <a href="viewPreventiveRequest.php">
              Vehicle Preventive Maintenance
            </a>
          </td>
          <td>07/31/21</td>
          <td>Pending</td>
        </tr>

        <tr>
          <td>6</td>
          <td>11/01/21</td>
          <td id="request_type" style="cursor: pointer; ">
            <a href="viewRegistrationRequest.php">
              LTO & Insurance Registration and Renewal
            </a>
          </td>
          <td>11/02/21</td>
          <td>Pending</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>




<?php include_once'footer.php'?>
