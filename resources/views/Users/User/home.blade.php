@extends('layouts.userLayout')
{{-- justify-content-center --}}
@section('content')
<div class="container-fluid">
    
    {{-- Date and Time --}}
    @foreach ($loanData as $item)
        @include('Users.User.HomeCalculations.components.timeDate')
    @endforeach

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Details</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        
                        
                        
                       <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-danger"><i class="fas fa-book-open"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">

                                        <h5>Available Slots : <b>Today</b></h5>

                                    </span>
                                    <span class="info-box-number">
                                        <h5><b>3 Slots</b> </h5>
                                    </span>
                                </div>

                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>


                        
                        
                       
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-info"><i class="far fa-clock"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">

                                        <h5> Available Coaches : <b>Today</b> </h5>

                                    </span>
                                    <span class="info-box-number">
                                        <h5>
                                            <b>3 Coaches</b>
                                        </h5>
                                    </span>
                                </div>

                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        


                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-info"><i class="far fa-clock"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">

                                        <h5> Available Plans </h5>

                                    </span>
                                    <span class="info-box-number">
                                        <h5>
                                            <b>3 Plans</b>
                                        </h5>
                                    </span>
                                </div>

                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>

                    </div>


<br>

                    <div class="card text-center">
                        <div class="card-header">
                           <h3 class="text-danger">Selected Plan is <b>Gold</b> </h3> 
                        </div>
                        <div class="card-body">
                          <h5 class="">Booking a Slot</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="card-footer text-muted">
                          2 days ago
                        </div>
                      </div>






                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    
    <div class="row">

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <div class="callout callout-success">

                <h5>
                    <i class="fas fa-money-bill-wave"></i>
                    &nbsp;&nbsp;
                    <b>ණය තොරතුරු </b>
                </h5>


                <ul class="form-contrl">
                    <li>
                        <h5>ණය මුදල්:- <b>රු.fdgfdfgd</b></h5>
                    </li>
                    <li>
                        <h5>ණය පොලී ප්‍රතිශතය:- <b>fdgfdfgd%</b></h5>
                    </li>

                    <li>
                        <h5>ප්‍රමාද ගාස්තු ප්‍රතිශතය:- <b>fdgfdfgd%</b></h5>
                    </li>
                    <li>
                        <h5>ණය ලබාගත් දිනය:- <b>fdgfdfgd</b></h5>
                    </li>
                </ul>

            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <div class="callout callout-warning">

                <h5>
                    <i class="fas fa-home"></i>
                    &nbsp;&nbsp;
                    <b>ඉඩමේ/වත්කමේ තොරතුරු </b>
                </h5>


                <ul class="form-contrl">
                    <li>
                        <h5>වටිනාකම:- <b>රු.fdgfdfgd</b> </h5>
                    </li>
                    <li>
                        <h5>ඉඩමේ ලිපිනය:- <br><b>fdgfdfgd</b></h5>
                    </li>
                </ul>

            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 ">
            <div class="callout callout-danger ">
                <h5>
                    <i class="fas fa-address-card"></i>
                    &nbsp;&nbsp;
                    <b>පුද්ගලික තොරතුරු</b>
                </h5>

                <ul class="form-contrl">
                    <li>
                        <h5>නම:- <b>fdgfdg</b></h5>
                    </li>
                    <li>
                        <h5>ජා.හැ.අංකය:- <b>fdgfdg v/x</b></h5>
                    </li>
                    <li>
                        <h5>දුරකතන අංකය:- <b>fdgfdg</b></h5>
                    </li>
                    <li>
                        <h5>ලිපිනය:- <b>rthrth</b></h5>
                    </li>
                </ul>

            </div>
        </div>

    </div>
   

</div>
@endsection

@section('header')
Dashboard
@endsection
