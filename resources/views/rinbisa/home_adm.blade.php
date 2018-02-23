@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-3">
        <a href="{{ route('rinbisa.viewdon_a') }}">Donation</a><br>
        <a href="{{ route('rinbisa.viewcamp_a') }}">Campaign</a><br>
        <a href="{{ route('rinbisa.viewuser_a') }}">Users</a><br>
    </div>
    <div class="col-md-8">
    	<h3>Welcome Admin</h3>
    </div>
</div>


@endsection
