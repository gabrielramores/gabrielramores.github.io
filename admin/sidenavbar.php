
        <!--  S  I  D  E  B  A  R      N  A  V  I  G  A  T  I  O  N     -->
        <div id="sidenavBar" class="sidenavBar">


          <!--  C L O S E    B U T T O N    OF   S I D E B A R   -->
          <a href="javascript:void(0)" class="closeBtn bx bx-chevron-left" 
          onclick="closeSidenav()" title="Close Sidebar menu">
          </a>

        

          <button class="sidenav-btn"  onClick="location.href='vehicleRecord.php'">
            <span class="bx bx-car button-icon"/> 
            <h5 class="button-name" id="buttonName">Vehicle Records</h5>
          </button>

          <button class="sidenav-btn" onClick="location.href='userManagement.php'">
            <span class="bx bx-user-circle button-icon"/> 
            <h5 class="button-name" id="buttonName">User Management</h5>
          </button>

          <div class="accordion accordion-toggle" id="accordion">
            <div class="accordion-header" id="accordion-header">
              <button class="accordion-button collapsed sidenav-btn shadow-none" type="button" 
              data-bs-toggle="collapse" data-bs-target="#accordion-container" aria-expanded="false" aria-controls="accordion-container">

                <span class="bx bx-message-square-detail"> </span>
                <h5 class="button-name" id="buttonName">Requests</h6>
                <span class="bx bx-chevron-down"></span>
              </button>
            </div>

            <div id="accordion-container" class="accordion-collapse collapse" aria-labelledby="accordion-header" data-bs-parent="#accordion">
              <div class="accordion-body">
                
                <button class="sidenav-btn" onClick="location.href='maintenanceRequest.php'">
                  <h6 class="" id="buttonName">Preventive Maintenance</h6>
                </button>

                <button class="sidenav-btn" onClick="location.href='repairRequest.php'"> 
                  <h6 class="" id="buttonName">Vehicle Repair</h6>
                </button>

                <button class="sidenav-btn" onClick="location.href='registrationRequest.php'"> 
                  <h6 class="" id="buttonName">LTO & Insurance Registration</h6>
                </button>
              </div>
            </div>
            
          </div>


          <button class="sidenav-btn" onClick="location.href='logs.php'">
            <span class="bx bx-history button-icon"/> 
            <h5 class="button-name" id="buttonName">Logs</h5>
          </button>
          <button class="sidenav-btn" onClick="location.href='settings.php'"> 
            <span class="bx bx-cog button-icon"/> 
            <h5 class="button-name" id="buttonName">Settings</h5>
          </button>
          <button class="sidenav-btn"onClick="location.href=''">
            <span class="bx bx-log-out button-icon"/> 
            <h5 class="button-name" id="buttonName">Sign-out</h5> 
          </button> 
        </div> <!--  E N D    OF   S I D E B A R-->
        




        <!--  O P E N     B U T T O N     OF    S I D E B A R -->
        <span class="sideBtn bx bx-chevron-right" id="sideBtn"
        title="Open Sidebar menu" onclick="openSidenav()">
          
        </span>
