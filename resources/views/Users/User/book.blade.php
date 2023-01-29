<div class="card text-center col-xl-12 col-lg-12 col-md-12 col-sm-12">
    <div class="card-header">
      @foreach ($plans as $plan)
        @if ($plan->planID === Auth::user()->refPlan)
          <h3 class="text-danger">Selected Plan is <b>{{ $plan->planName }}</b> </h3> 
        @endif
      @endforeach
    </div>
    <div class="card-body text-left">
        <h5 class="">Booking a Slot</h5>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            
                <p class="form-text text-muted text-left">Select a Date</p>
                <input type="date" name="" class="form-control" id="dateInput">
            
            </div>

            
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            
                <p class="form-text text-muted text-left">Select a Time Slot</p>
                <select class="form-control select2bs4" name="refPlan" id="TimeSelect"></select>
            
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            
              <p class="form-text text-muted text-left">Select a Coach</p>
              <div id="elementToHide" style="display: none">This element will be hidden on certain days</div>
              
              <select name="" class="form-control select2bs4" id="CoachSelect"></select>
          
          </div>

        </div>
        <br>
        <div class="row">

            

        </div>
        
<br>
      {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
      <a href="#" class="btn btn-primary">Book Now</a>

      
    </div>
    <div class="card-footer text-muted">
        Expiration date :
    </div>
  </div>






<script>

////////////////////////////////////////////////////////////////

    var coachData = {!! json_encode($coaches) !!};
    var slotData = {!! json_encode($slots) !!};
    var taskData = {!! json_encode($tasks) !!};
    // console.log(data[1].name);
    // let x = (data.length);

//Adding data select input using foreach

  var input = document.getElementById("dateInput");
  var CoachSelect = document.getElementById("CoachSelect");
  var TimeSelect = document.getElementById("TimeSelect");

  input.addEventListener("change", function() {
    // Get the selected date
    
    var date = new Date(input.value);
    var selectedDate = date.getDay();
    var selectedDate = selectedDate + 1;

    //console.log(input.value);
    //clear select
    TimeSelect.innerHTML = "";
    CoachSelect.innerHTML = "";


    // Use forEach to loop through the array
    coachData.forEach(function(coach) {
      let wdays = coach.wdays;
      let daysArr = wdays.toString().split('').map(Number);

      daysArr.forEach(function(eCoach){
     
        if(eCoach === selectedDate) {
          // Create a new option element
        var option = document.createElement("option");
        // Set the value and text of the option
        option.value = coach.id;
        option.text = coach.name;
        // Append the option to the select element
        CoachSelect.appendChild(option);
      
        // console.log(daysArr);
        }
        

      });
    });

   
    let myArray = [];

    slotData.forEach(function(slot) {
     
        taskData.forEach(function(timeTask) {
          if(slot.slotID === timeTask.slotID && input.value === timeTask.date)
          {
          
            myArray.push(slot.slotID);
          

            let count = myArray.reduce((acc, val) => {
              return val === slot.slotID ? acc + 1 : acc;
            }, 0);

            console.log(count);
            if(count <= slot.peopleAmount){
              
                //console.log(myArray[i]+'sdfsdfsdfsdf');
              var optionSloat = document.createElement("option");
              // Set the value and text of the option
              optionSloat.value = slot.slotID;
              optionSloat.text = slot.slotTime;
              // Append the option to the select element
              TimeSelect.appendChild(optionSloat);
            }
          
          }
          
         

        
        })

      
    })

       slotData.forEach(function(slot) {
            var optionSloat = document.createElement("option");
            // Set the value and text of the option
            optionSloat.value = slot.slotID;
            optionSloat.text = slot.slotTime;
            // Append the option to the select element
            TimeSelect.appendChild(optionSloat);
          })

          //Remove duplicate options in time select
          let options = TimeSelect.querySelectorAll("option");
          let optionValues = Array.from(options).map(option => option.value);
          options.forEach(function(option) {
          if(optionValues.indexOf(option.value) !== optionValues.lastIndexOf(option.value)){
              option.remove();
          }
          });

    

  });


</script>

