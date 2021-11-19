

<?php include_once 'headerTwo.php' ?>


<div class="py-5 px-2" style="background: gainsboro;">
  
  <div class="container-fluid col-lg-6 border p-3 shadow" style="background: white; border-radius: 5px;">
    <div class="container-fluid my-2 p-0 d-flex flex-row-reverse">
      <button type="button" class="close m-0 px-2" aria-label="Close" onclick="window.location.href='vehicleRecord.php'">
        <span aria-hidden="true" style="font-size:20px">&times;</span>
      </button>
      <h4 class="me-auto"><span class="bx bx-edit">  </span>Edit Vehicle Profile</h4>
    </div>


  <hr class="my-4">

    <form action="">
      <table class="col-12">

         <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="edit-body"><b>Body number:</b></label>
              <input type="text" id="edit-body"  class="editBox text-uppercase" maxlength="4" name="" value="" placeholder="Body number" />
            </p>
          </td>
        </tr>

        <tr>
          <td class="col-11">
            <p class="my-3">
              <label for="edit-plate"><b>Plate number:</b></label>
              <input type="text" id="edit-plate"  class="editBox text-uppercase" maxlength="8" name="" value="" placeholder="Plate number" />
            </p>
          </td>
        </tr>

        <tr>
          <td class="col-11">
            <p class="my-3">
              <div class="row">
                <div class="filters">
                  <label for="select-vehicle"><b>Vehicle type</b></label>
                  <div class="dropdownContainer">
                    <select class="editBox" style="width: 100%;" id="select-vehicle">
                      <option selected style="visibility: visible;" disabled>Select...</option>
                      <option value="Hilux FX FB">Hilux FX FB</option>
                      <option value="Hilux Pick Up Truck">Hilux Pick Up Truck</option>
                      <option value="L300 Dropside<">L300 Dropside</option>
                      <option value="L300 FX FB">L300 FX FB</option>
                      <option value="Montero Sport">Montero Sport</option>
                      <option value="Fortuner">Fortuner</option>
                      <option value="Innova">Innova</option>
                      <option value="Grandia">Grandia</option>
                      <option value="Starex">Starex</option>
                      <option value="Sportivo">Sportivo</option>
                      <option value="DMAX Manlift">DMAX Manlift</option>
                      <option value="Elf Manlift">Elf Manlift</option>
                      <option value="Elf Boom Truck">Elf Boom Truck</option>
                      <option value="Strada">Strada</option>
                      <option value="International Truck">International Truck</option>
                      <option value="Suzuki Multicab">Suzuki Multicab</option>
                      <option value="Kawasaki">Kawasaki</option>
                      <option value="XRM">XRM</option>
                    </select>
                  </div>
                </div>
              </div>
            </p>
          </td>
        </tr>


        <tr>
          <td class="col-11">
           
              <div class="row">
                <div class="filters">
                  <label for="select-driver"><b>Driver's name</b></label>
                  <div class="dropdownContainer">
                    <select class="editBox" style="width: 100%;" id="select-driver">
                      <option selected style="visibility: visible;" disabled>Select...</option>
                      <option>Harold San Pascual</option>
                      <option>Juan San Antonio</option>
                      <option>Rudolfo Tulfo</option>
                      <option>Ricardo Dalisay</option>
                      <option>Arthur Mac</option>
                      <option>Emmanuel Sabordo</option>
                      <option>Enrique Salmon</option>
                    </select>
                  </div>
                </div>
              </div>  
          
          </td>
        </tr>

        <tr>
          <td>
            <p class="my-3">
              <label><b>Status</b></label>
              <span class="dropdownContainer">
                <label class="radio-inline">
                <input type="radio" id="working" name="status"> Working  </label>

              <label class="radio-inline" style="margin-left: 20px">
                <input type="radio" id="dispose" name="status" > Dispose
              </label>
              </span>
              
          
            </p>
          </td>
        </tr>

      </table>
      <center>
        <button type="button" class="btn btn-primary my-5 shadow-none col-3" id="edit-vehicle" disabled>
          Submit
        </button>
      
        <button type="reset" class="btn btn-warning my-5 shadow-none col-3" onclick="window.location.href='vehicleRecord.php'">
          Cancel
        </button>
      </center>
    </form>

    
  </div>
</div>

<?php include_once'footer.php' ?>

