@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">FOTO</div>
                <div class="panel-body">
                    <center>
                        <a href="{{ route('rinbisa.viewedit', Auth::id()) }}" class="btn btn-primary">Edit Profile</a><br><br>
                        <a href="{{ route('rinbisa.viewcamp') }}" >Campaign Saya</a><br><br>
                        <a href="{{ route('rinbisa.viewdon') }}">Donasi Saya</a><br><br>
                        <a href="">Verifikasi Akun</a>
                    </center>

                </div>
            </div>
        </div>
    <div class="col-md-10">
    	<h3>Campaign</h3>
    	<a href="{{ route('rinbisa.viewcreate') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"><br>Buat Campaign Baru</span></a><br><br>

    	<table class="table">
    		<tr>
    				<th>Id Campaign</th>
	    			<th>Id User</th>
	    			<th>Judul</th>
	    			<th>Foto Campaign</th>
	    			<th>Target Donasi</th>
	    			<th>Deadline</th>
	    			<th>Category</th>
	    			<th>Lokasi Penerima Dana</th>
	    			<th>Aksi</th>
    		</tr>
    	@foreach($campU as $read)
    		<tr>
    				<td>{{$read -> id_camp}}</td>
	    			<td>{{$read -> id}}</td>
	    			<td>{{$read -> judul}}</td>
	    			<td><img src="{{asset('storage/rinbisa/campaign/' . $read->foto_camp) }}" width="100"></td>
	    			<td>{{$read -> target_don}}</td>
	    			<td>{{$read -> deadline}}</td>
	    			<td>{{$read -> category}}</td>
	    			<td>{{$read -> lokasi}}</td>
	    			<td><a href="" class="btn btn-primary">Update</a></td>
	    	</tr>
    	@endforeach
    	</table>
    </div>
</div>
@endsection