@extends('layouts.app')

@section('content')
	<div class="container">
		<h4>Anda akan berdonasi untuk campaign</h4>
		<b></b>
	<br><br>
		<div class="col-md-6 col-md-offset-3">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#Donasi" data-toggle="tab">Donasi</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="Donasi">
					<center>
						<h3>Masukkan Nominal</h3>
						<p>Donasi minimal Rp.20.000 dengan kelipatan ribuan (contoh: 25.000, 50.000)</p>
						<form method="post" action="{{ route('rinbisa.prosesD', $prosesdon1->id_camp) }}">
						Rp. <input type="number" name="donasi" id="textfirst" onkeyup="copytextbox();"><br><br>
						<h3>Tulis Komentar</h3>
						Teks saja, tanpa URL/kode html, dan emoticon.
						<textarea name="komentar" class="form-control"></textarea><br><br>
						Donasi anda Rp. <input type="number" id="textsecond" class="form-control" readonly><br><br>
						<input type="submit" name="create" value="Lanjut" class="btn btn-danger">
						{{ csrf_field() }}
						</form>
				
					</center>
				</div>
			</div>
		</div>
	</div>
<script>
	function copytextbox(){
		document.getElementById('textsecond').value = document.getElementById('textfirst').value;
	}
</script>

@endsection
