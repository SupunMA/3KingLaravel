@extends('layouts.adminLayout')

@section('content')
<div class="container-fluid ">

    {{-- button to go to all clients --}}
    
    <form action="{{route('StaffProfileUpdating')}}" method="post">
        @csrf
        <div class="row">

            {{-- Client Details form --}}
            @include('Users.Admin.Profile.components.myProfileDetails')

            {{-- Client Password form --}}
            @include('Users.Admin.Profile.components.profilePWD')

        </div>
    </form>
    {{-- End of Row --}}


    {{-- End of Form --}}


</div>
@endsection

@section('header')
Add New Staff Member
@endsection
