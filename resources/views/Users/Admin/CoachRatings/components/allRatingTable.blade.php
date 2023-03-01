<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">All Ratings</h3>
    </div>
    <!-- /.card-header -->
    

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Coach ID</th>
                    <th>Name</th>
                    <th>Rating Count</th>
                    <th>Precentage</th>
                   
                    
                </tr>
            </thead>
            <tbody>
                @php
                    $unac = 0;
                    $Weak = 0;
                    $Good = 0;
                    $VeryG = 0;
                    $exc = 0;
                @endphp 

                @foreach ($coaches as $coach)
                    <tr>
                        <td>{{$coach->id}}</td>
                        <td>{{$coach->name}}</td>
                        <td>
                            @foreach ($timeTables as $timeTable)
                                @if ($coach->id === $timeTable->coachID)
                                    @if ($timeTable->review === 5)
                                        @php
                                            $exc = $exc + 1;
                                        @endphp
                                        

                                    @elseif ($timeTable->review === 4)

                                        @php
                                            $VeryG = $VeryG + 1;
                                        @endphp
                                        


                                    @elseif ($timeTable->review === 3)

                                        @php
                                            $Good = $Good + 1;
                                        @endphp
                                         
                                        
                                    

                                    @elseif ($timeTable->review === 2)

                                        @php
                                            $Weak = $Weak + 1;
                                        @endphp
                                        
                                        
                                    

                                    @elseif ($timeTable->review === 1)

                                        @php
                                            $unac = $unac + 1;
                                        @endphp
                                        
                                        
                                    @endif
                                @endif
                                
                            @endforeach
                            Excellent - {{$exc}} <br>
                            Very Good - {{$VeryG}} <br>
                            Good - {{$Good}} <br>
                            Weak - {{$Weak}} <br>
                            Unacceptable - {{$unac}} <br>
                        
                        </td>

                        <td>1%</td>
                        
                    </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <th>Coach ID</th>
                    <th>Name</th>
                    <th>Rating Count</th>
                    <th>Precentage</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->