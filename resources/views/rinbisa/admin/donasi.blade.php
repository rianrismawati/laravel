@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="col-md-3">
        <a href="{{ route('rinbisa.viewdon_a') }}">Donation</a><br>
        <a href="{{ route('rinbisa.viewcamp_a') }}">Campaign</a><br>
        <a href="{{ route('rinbisa.viewuser_a') }}">Users</a><br>
	    </div>
	    <div class="col-md-8">
	    	<h3>Donasi yang terkumpul</h3>
	    	<table class="table">
	    		<tr>
	    			<th>Id Donasi</th>
	    			<th>Id Campaign</th>
	    			<th>Nominal Donasi</th>
	    			<th>Tanggal Donasi</th>
	    			<th>Status</th>
	    			<th>Aksi</th>
	    		</tr>
	    		<tr>
	    			@foreach($don as $read)
	    			<td>{{$read -> id_don}}</td>
	    			<td>{{$read -> judul}}</td>
	    			<td>{{$read -> nom_don}}</td>
	    			<td>{{$read -> tgl_don}}</td>
	    			<td>{{$read -> status}}</td>
	    			<td><a href="{{ route('rinbisa.detail_d', $read->id_don) }}" class="btn btn-primary">Detail</a></td>
	    			@endforeach
	    		</tr>
	    	</table>
	    </div>
	</div>
@endsection