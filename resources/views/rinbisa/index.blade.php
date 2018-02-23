@extends('layouts.app')

@section('content')
	<div class="container">
		<h3>Hai orang baik :)<br>
			Pilih campaign yang ingin kamu bantu..
		</h3><br><br>
			 @foreach ($readC as $read)
		<div class="col-md-3">
			<div class="card" style="width: 20rem;">
			  <img class="card-img-top" src="{{ asset('storage/rinbisa/campaign/' . $read->foto_camp) }}" width="200">
			  <div class="card-block">
			    <h4 class="card-title">{{ $read->judul }}</h4>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <!-- sama ini.. salah di mana nya? -->
			    <a href="{{ route('rinbisa.viewdet', $read->id_camp) }}" class="btn btn-primary">Donasi</a>
			  </div>
			</div>
				<br><br>
		</div>
			 @endforeach
	</div>

@endsection