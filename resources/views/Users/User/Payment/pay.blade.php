@extends('layouts.userLayout')

@section('content')


<div class="container-fluid">

{{-- toastr msg --}}
    {{-- {{$client->id}} --}}

    

        @foreach ($plans as $bd)
            @if ($bd->planID == Auth::user()->refPlan)
               
                <div class="card text-white bg-success mb-3" style="max-width: 28rem;">
                    <div class="card-header"><h4>Selected Plan is {{$bd->planName}} <br> Plan Price is {{$bd->planPrice}}</h4> </div>
                    <div class="card-body">
                      <h5 class="card-title">Insert Card Details</h5>

                    <br>
                    <div class="col-lg-12 col-12">
                        <div class="form-group">
                            <label >Card Holder Name</label>
                            <input type="email" class="form-control" name="email" placeholder="Email Address">
                        </div>
                    </div>

                    
                    <div class="row">

                        <div class="col-lg-9 col-9">
                            <div class="form-group">
                                <label >Card Number</label>
                                <input type="email" class="form-control" name="email" placeholder="xxxx xxxx xxxx xxxx">
                            </div>
                        </div>

                        <div class="col-lg-3 col-3">
                            <div class="form-group">
                                <label >CSV</label>
                                <input type="email" class="form-control" name="email" placeholder="xxx">
                            </div>
                        </div>

                    </div>
                    

                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            @else
                    
            @endif
        @endforeach
        
    


{{-- toastr msg --}}
    @push('specificJs')


<script>
    $('.toastrDefaultError').click(function () {
        toastr.error("Could't Save the Data. Please try again")
    });

    $('.toastrDefaultSuccess').click(function () {
        toastr.success('&#160; Saved Successfully!.&#160;')
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
</div>
@endsection

@section('header')
Make Payments
@endsection
