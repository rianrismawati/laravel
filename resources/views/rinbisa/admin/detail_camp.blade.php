@extends('layouts.app')

@section('content')
	<div class="container">
		@foreach($detailCamp as $det)
			<div class="container">
				<h1>{{ $det->judul}}</h1>
				<div class="col-md-5">
					<img src="{{ asset('storage/rinbisa/campaign/' . $det->foto_camp )}}" width="300">
				</div>
				<div class="col-md-6">
						<h3>Target Donasi {{ 'Rp ' . number_format($det->target_don) }}</h3>
						<h5>
							Deadline: {{ $det->deadline }} <br>
							Kategori Campaign: {{ $det->category }} <br>
							Lokasi penerima: {{ $det->lokasi }} <br>
							Desk : {{ $det->desk_camp }} 
						</h5>
				</div>
			</div>
		@endforeach
	</div>
@endsection