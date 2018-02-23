@extends('layouts.app')

@section('content')
	<div class="container">
		<h4>Anda akan berdonasi untuk campaign</h4>
		<b></b>
	<br><br>
		<div class="col-md-6 col-md-offset-3">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#Donasi" data-toggle="tab">Donasi</a></li>
				<li><a href="#Pembayaran" data-toggle="tab">Pembayaran</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="Donasi">
					<center>
						<h3>Masukkan Nominal</h3>
						<p>Donasi minimal Rp.20.000 dengan kelipatan ribuan (contoh: 25.000, 50.000)</p>
						Rp. <input type="number" name="donasi" id="textfirst" onkeyup="copytextbox();"><br><br>
						<h3>Tulis Komentar</h3>
						Teks saja, tanpa URL/kode html, dan emoticon.
						<textarea name="Komentar" class="form-control"></textarea><br><br>
						Donasi anda Rp. <input type="number" id="textsecond" class="form-control" readonly><br><br>
						<input type="submit" name="proses" value="Lanjut" class="btn btn-danger">
					</center>
				</div>
				<div class="tab-pane" id="Pembayaran">
					<h3>Pilih Metode Pembayaran</h3>
					<form action="" method="post">
						<input type="radio" name="pemb" value="BCA">Transfer BCA<br>
						<input type="radio" name="pemb" value="BNI">Transfer BNI<br>
						<input type="radio" name="pemb" value="BNISya">Transfer BNI Syariah<br>
						<input type="radio" name="pemb" value="BRI">Transfer BRI<br>
						<input type="radio" name="pemb" value="Mandiri">Transfer Mandiri<br><br>

						<input type="submit" name="create" value="Lanjutkan" class="btnj btn-danger">
					</form>
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
