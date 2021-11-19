<?php include_once'header.php'?>
<?php include_once'topNavigation.php' ?>

<div class="py-5 px-2" style="background: gainsboro;">

<div class="container-fluid  col-lg-9 border d-flex flex-wrap shadow p-3" style="background: white;  border-radius: 5px;">
  <h4 class="page-name text-dark m-0">
    <span class="bx bx-history"></span>
    <b >Logs</b>
  </h4> 
</div>

<br class="my-4">

<div class="container-fluid col-lg-9 p-4 border shadow" style="background: white;  border-radius: 5px;">
  <div style="overflow: auto">
    <table id="myTable" class="table display requestTable">
      <thead>
        <tr>
          <th>No.</th>
          <th>Date</th>
          <th>Driver's name</th>
          <th>Activity</th>
        
        </tr>
      </thead>

      <tbody>
        
      </tbody>
    </table>
  </div>
</div>
</div>




<?php include_once'footer.php'?>
