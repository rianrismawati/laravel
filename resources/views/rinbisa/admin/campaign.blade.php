@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="col-md-2">
        <a href="{{ route('rinbisa.viewdon_a') }}">Donation</a><br>
        <a href="{{ route('rinbisa.viewcamp_a') }}">Campaign</a><br>
        <a href="{{ route('rinbisa.viewuser_a') }}">Users</a><br>
	    </div>
	    <div class="col-md-10">
	    	<h3>Campaign yang terkumpul</h3>
	    	<table class="table">
	    		<tr>
	    			<th>Id Campaign</th>
	    			<th>Id User</th>
	    			<th>Judul</th>
	    			<th>Foto Campaign</th>
	    			<th>Target Donasi</th>
	    			<th>Deadline</th>
	    			<th>Category</th>
	    			<th>Aksi</th>
	    		</tr>
	    			@foreach($readcamp as $read)
	    		<tr>
	    			<td>{{$read -> id_camp}}</td>
	    			<td>{{$read -> name}}</td>
	    			<td>{{$read -> judul}}</td>
	    			<td><img src="{{asset('storage/rinbisa/campaign/' . $read->foto_camp) }}" width="100"></td>
	    			<td>{{$read -> target_don}}</td>
	    			<td>{{$read -> deadline}}</td>
	    			<td>{{$read -> category}}</td>
	    			<td><a href="{{ route('rinbisa.detail_c', $read->id_camp)}}" class="btn btn-primary">Detail</a></td>
	    			<td><a href="{{url('rinbisa/admin/campaign/delete_c/'.$read->id_camp)}}" class="btn btn-danger">Delete</a></td>
	    		</tr>
	    		@endforeach
	    	</table>
	    </div>
	</div>
@endsection