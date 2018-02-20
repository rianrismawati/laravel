@extends('layouts.app')

@section('content')

<div class="container">
<h3>Welcome Admin</h3>
    <div class="col-md-3">
        <a href="">Donation</a><br>
        <a href="">Campaign</a><br>
        <a href="{{ route('rinbisa.user') }}">Users</a><br>
    </div>
    <div class="col-md-8">

    </div>
</div>


@endsection
