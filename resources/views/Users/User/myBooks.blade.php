<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">My Timetable</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        
       


        
        <table id="example1" class="table table-bordered table-striped">
            
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Coach Name</th>
                    <th>Date</th>
                    <th>Time Slot</th>
                   
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($timeTables as $timeTable)
                    {{-- except auth user --}}
                   
                    <tr>
                        <td>{{$timeTable->id}}</td>
                        @foreach ($coaches as $coach)
                            @if ($coach->id === $timeTable->coachID)
                                <td>{{$coach->name}}</td>
                            @endif
                        @endforeach

                        <td>{{$timeTable->date}}</td>

                        @foreach ($slots as $slot)
                        @if ($slot->slotID === $timeTable->slotID)
                            <td>{{$slot->slotTime}}</td>
                        @endif
                    @endforeach

                        
                      
                        
                        
                    </tr>
                    

                  

                    
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Booking ID</th>
                    <th>Coach Name</th>
                    <th>Date</th>
                    <th>Time Slot</th>
                   
                    
                </tr>
                </tr>
            </tfoot>
            
        </table>
       
        
        
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

@push('specificJs')
{{-- toastr msg --}}
<script>
    $('.toastrDefaultSuccess').click(function () {
        toastr.success('&#160; Done Successfully !.&#160;')
    });

    $('.toastrDefaultError').click(function () {
        toastr.error("Could't Save the Data. Please try again")
    });

</script>

{{-- toastr auto click --}}
<script type="text/javascript">
    $(document).ready(function () {
        $(".toastrDefaultSuccess").click();
        $(".toastrDefaultError").click();
    });

</script>


@endpush