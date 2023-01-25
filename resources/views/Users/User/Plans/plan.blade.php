@extends('layouts.userLayout')

@section('content')
<div class="container-fluid">

    @include('Users.User.Plans.planCards.cards')

</div>
@endsection

@section('header')
Dashboard
@endsection
