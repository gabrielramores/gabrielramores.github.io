<!--  T  O  P         N  A   V   I  G  A  T   I   O   N -->
<div class="navbar navbar-expand-md p-0  mx-auto navbar-light top-nav">
  <div class="collapse navbar-collapse " id="toggle-menu">
    <ul class="container-fluid nav navbar-nav p-2 px-5">

      <!-- H  O  M  E         T A B  -->
      <li class="nav-item">
        <a class="nav-link nav-tab navbar-brand" id="home-btn" type="button" onclick="location.href='driverHome.php'">
          <span class="bx bx-home"></span>
          <h6 style="display: inline">Home</h6>
        </a>
      </li>

      <!-- M S    F  O  R  M  S      D  R O P D O W N    B U T T O N -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle nav-tab navbar-brand" type="button" data-bs-toggle="dropdown">
          <span class="bx bx-plus-circle"></span>
          <h6 style="display: inline">Request forms</h6>
        </a>

        <ul class="dropdown-menu fade p-2">

          <!-- P R E V E N T I V E     M A I N  T E N A N C E     T A B-->
          <li class="nav-item">
            <a class="nav-link dropdown-item p-1" id="maintenance-btn" type="button" onclick="location.href='maintenanceForm.php'">
              <h6>
                <p class="m-0">Vehicle Preventive Maintenance</p>
              </h6>
            </a>
          </li>


          <!-- V E H I C L E    R E P A I R          T A B    -->
          <li class="nav-item">
            <a class="nav-link dropdown-item p-1" id="repair-btn" type="button" onclick="location.href='repairForm.php'">
              <h6>
                <p class="m-0">Vehicle Repair</p>
              </h6>
            </a>
          </li>


          <!-- R E G I S T R A T I O N         I  N  T  E  R  F  A  C  E -->
          <li class="nav-item">
            <a class="nav-link dropdown-item p-1" id="registration-btn" type="button" onclick="location.href='registrationForm.php'">
              <h6>
                <p class="m-0">LTO & Insurance Registration</p>
              </h6>
            </a>
          </li>
        </ul>   <!--  E  N  D   OF    D R O P D O W N -->
      </li>


      <!-- R   E   Q   U    E   S   T   S        I  N  T  E   R   F  A  C  E  -->
      <li class="nav-item">
        <a class="nav-link nav-tab navbar-brand" id="request-btn" type="button" onclick="location.href='request.php'">
          <span class="bx bx-send"> </span>
          <h6 style="display: inline">Sent forms</h6>
        </a>
      </li>


      <!--    U  S  E  R          D  R  O  P   D    O    W   N           M  E N U     -->
      <li class="nav-item dropdown user-menu">
        <a class="nav-link dropdown-toggle nav-tab navbar-brand" type="button" data-bs-toggle="dropdown">
          <span class="bx bx-user-circle"></span>
          <h6 style="display: inline">User menu
          </h6>
        </a>


        <ul class="dropdown-menu fade p-2" style="right: 0; left: auto;">


          <!--  A C C O U N T         S  E  T   T  I  N   G  S  -->
          <li class="nav-item">
            <a class="nav-link dropdown-item" id="settings" type="button" onclick="location.href='userProfile.php'">
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