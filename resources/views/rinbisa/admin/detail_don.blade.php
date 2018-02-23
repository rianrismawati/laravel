@extends('layouts.app')

@section('content')
	<div class="container">
		<h3>Detail Donasi</h3>
			@foreach($detaildon as $det)
				Nama campaign: {{ $det->judul }} <br>
				Nama user : {{ $det->name }} <br>
				Nominal Donasi :{{ $det->nom_don}} <br>
				Tanggal Donasi : {{ $det->tgl_don }} <br>
			@endforeach
			<br>
			<form method="post" action="{{ route('rinbisa.update_d', $det->id_don) }}">
				<select name="stat" class="form-control">
					<option value="Paid">Paid</option>
					<option value="Unpaid">Unpaid</option>
				</select><br>
				<input type="submit" name="edit" value="Update" class="btn btn-primary">
				{{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
			</form>
	</div>
@endsection