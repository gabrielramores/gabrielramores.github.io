

<!--  T  O  P         N  A   V   I  G  A  T   I   O   N -->
<div class="navbar navbar-expand-md p-0  mx-auto navbar-light top-nav">
  <div class="collapse navbar-collapse " id="toggle-menu">
    <ul class="container-fluid nav navbar-nav p-2 px-5">

      <!-- H  O  M  E         T A B  -->
     
      <li class="nav-item">
        <a class="nav-link nav-tab navbar-brand" id="home-btn" type="button" onclick="location.href='adminHome.php'">
          <span class="bx bx-home"></span>
          <h6 style="display: inline">Home</h6>
        </a>
      </li>


      <!-- V E H I C  L E    R E C O R  D -->
      <li class="nav-item">
        <a class="nav-link nav-tab navbar-brand" id="vehicle-btn" type="button" onclick="location.href='vehicleRecord.php'">
          <span class="bx bx-car"></span>
          <h6 style="display: inline">Vehicle Record</h6>
        </a>
      </li>


       <!-- U S E R     M A N A G E M E N T         I  N  T  E   R   F  A  C  E  -->
      <li class="nav-item">
        <a class="nav-link nav-tab navbar-brand" id="request-btn" type="button" onclick="location.href='userManagement.php'">
          <span class="bx bx-user"> </span>
          <h6 style="display: inline">Driver Record</h6>
        </a>
      </li>

      

      <!-- M S    F  O  R  M  S      D  R O P D O W N    B U T T O N -->
      <li class="nav-item dropdown" title=" ">
        <a class="nav-link dropdown-toggle nav-tab navbar-brand" type="button" data-bs-toggle="dropdown">
          <span class="bx bxs-inbox m-0 p-0"></span>
          <h6 style="display: inline">Inbox</h6>
        </a>

        <ul class="dropdown-menu fade p-2">

          <!-- P R E V E N T I V E     M A I N  T E N A N C E     T A B-->
          <li class="nav-item" title=" ">
            <a class="nav-link dropdown-item p-1" id="maintenance-btn" type="button" onclick="location.href='maintenanceRequest.php'">
              <h6>
                <p class="m-0">Vehicle Preventive Maintenance</p>
              </h6>
            </a>
          </li>


          <!-- V E H I C L E    R E P A I R          T A B    -->
          <li class="nav-item" title=" ">
            <a class="nav-link dropdown-item p-1" id="repair-btn" type="button" onclick="location.href='repairRequest.php'">
              <h6>
                <p class="m-0">Vehicle Repair</p>
              </h6>
            </a>
          </li>


          <!-- R E G I S T R A T I O N         I  N  T  E  R  F  A  C  E -->
          <li class="nav-item" title=" ">
            <a class="nav-link dropdown-item p-1" id="registration-btn" type="button" onclick="location.href='registrationRequest.php'">
              <h6>
                <p class="m-0">LTO & Insurance Registration</p>
              </h6>
            </a>
          </li>
        </ul>   <!--  E  N  D   OF    D R O P D O W N -->
      </li>



       <!-- L O  G S       I  N  T  E   R   F  A  C  E  -->
      <li class="nav-item">
        <a class="nav-link nav-tab navbar-brand" id="request-btn" type="button" onclick="location.href='logs.php'">
          <span class="bx bx-history"> </span>
          <h6 style="display: inline">Logs</h6>
        </a>
      </li>


      <!--    U  S  E  R          D  R  O  P   D    O    W   N           M  E N U     -->
      <li class="nav-item dropdown user-menu">
        <a class="nav-link dropdown-toggle nav-tab navbar-brand" type="button" data-bs-toggle="dropdown">
          <span class="bx bx-user-circle m-0 p-0"></span>
          <h6 style="display: inline">User 
            <p id="users-name" style="display: inline"> Menu</p>
          </h6>
        </a>


        <ul class="dropdown-menu fade p-2" style="right: 0; left: auto;">


          <!--  A C C O U N T         S  E  T   T  I  N   G  S  -->
          <li class="nav-item">
            <a class="nav-link dropdown-item" id="settings" type="button" onclick="location.href='adminProfile.php'">
              <h6 style="display: inline">
                
                Profile
              </h6>
            </a>
          </li>


          <!--    S I G N       O U T      D R O P D O W N  -->
          <li class="nav-item">
            <a class="nav-link dropdown-item" id="sign-out" type="button" data-bs-toggle="modal"
                data-bs-target="#sign-out-modal">
              <h6 style="display: inline">
               
                Sign-out
              </h6>
            </a>
          </li>
        </ul>

      </li>

    </ul>
  </div>
</div>