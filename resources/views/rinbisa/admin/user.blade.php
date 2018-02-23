@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="col-md-3">
        <a href="{{ route('rinbisa.viewdon_a') }}">Donation</a><br>
        <a href="{{ route('rinbisa.viewcamp_a') }}">Campaign</a><br>
        <a href="{{ route('rinbisa.viewuser_a') }}">Users</a><br>
	    </div>
	    <div class="col-md-8">
	    	<h3>Users</h3>
	    	<table class="table">
	    		<tr>
	    			<th>Id User</th>
	    			<th>Nama Lengkap</th>
	    			<th>Email</th>
	    			<th>No Telp</th>
	    			<th>Lokasi</th>
	    			<th>Bio</th>
	    			<th>Foto</th>
	    		</tr>	    			
	    		@foreach($readuser as $read)
	    		<tr>
	    			<td>{{$read -> id}}</td>
	    			<td>{{$read -> name}}</td>
	    			<td>{{$read -> email}}</td>
	    			<td>{{$read -> no_tlp}}</td>
	    			<td>{{$read -> lokasi}}</td>
	    			<td>{{$read -> bio}}</td>
	    			<td><img src="{{ asset('storage/rinbisa/' . $read -> foto_p) }}" width="100"></td>
	    		</tr>
	    		@endforeach
	    	</table>
	    </div>
	</div>
@endsection