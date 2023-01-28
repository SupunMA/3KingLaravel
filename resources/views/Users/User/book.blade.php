<div class="card text-center col-xl-12 col-lg-12 col-md-12 col-sm-12">
    <div class="card-header">
       <h3 class="text-danger">Selected Plan is <b>Gold</b> </h3> 
    </div>
    <div class="card-body text-left">
        <h5 class="">Booking a Slot</h5>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            
                <p class="form-text text-muted text-left">Select a Date</p>
                <input type="date" name="" class="form-control" id="dateInput">
            
            </div>

            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            
                <p class="form-text text-muted text-left">Select a Time Slot</p>
                <select class="form-control select2bs4" style="width: 100%;" name="refPlan">
                    
                            <option value="" selected="selected">8am - 10am</option>
                            <option value="">8am - 10am</option>
                            <option value="">8am - 10am</option>
                            <option value="">8am - 10am</option>
                            <option value="">8am - 10am</option>
                        
                       
                    
                </select>
            
            </div>

        </div>
        <br>
        <div class="row">

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            
                <p class="form-text text-muted text-left">Select a Coach</p>
                <div id="elementToHide" style="display: none">This element will be hidden on certain days</div>
            
            </div>

        </div>
        

      {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    <div class="card-footer text-muted">
        Expiration date :
    </div>
  </div>






<script>



//show and hide element when click on date  picker

  var input = document.getElementById("dateInput");
  input.addEventListener("change", function() {
    var date = new Date(input.value);
    var day = date.getDay(); // get the day of the week (0-6)
    var elementToHide = document.getElementById("elementToHide");

    if (day === 0 || day === 6) { // hide element on weekends (day 0 = Sunday, day 6 = Saturday)
      elementToHide.style.display = "none";
    } else {
      elementToHide.style.display = "block";
    }
  });
</script>
