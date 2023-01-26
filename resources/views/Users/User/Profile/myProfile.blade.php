@extends('layouts.userLayout')

@section('content')
<div class="container-fluid ">

    
    @include('Users.Admin.messages.addMsg')
    
   <h3> Update the Account Details</h3>
    <form action="{{route('CustomerProfileUpdating')}}" method="post">
        @csrf
        <div class="row">

            {{-- Client Details form --}}
            @include('Users.User.Profile.components.myProfileDetails')

            {{-- Client Password form --}}
            @include('Users.User.Profile.components.profilePWD')
            
 
        </div>
        <h3> Delete the Account</h3>
        @include('Users.User.Profile.components.profileDelete')
    </form>
    {{-- End of Row --}}

    
    {{-- End of Form --}}


</div>
@endsection

@section('header')
My Profile
@endsection
