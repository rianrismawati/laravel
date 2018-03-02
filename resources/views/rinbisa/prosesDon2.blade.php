@extends('layouts.app')

@section('content')
	<div class="container">
		<form action="{{ route('rinbisa.prosesAkh', $prosesdon2->id_camp) }}" method="post">
						<input type="radio" name="pemb" value="BCA">Transfer BCA<br>
						<input type="radio" name="pemb" value="BNI">Transfer BNI<br>
						<input type="radio" name="pemb" value="BNISya">Transfer BNI Syariah<br>
						<input type="radio" name="pemb" value="BRI">Transfer BRI<br>
						<input type="radio" name="pemb" value="Mandiri">Transfer Mandiri<br><br>

						<input type="submit" name="edit" value="Lanjutkan" class="btn btn-danger">
						{{ csrf_field() }}
      					  <input type="hidden" name="_method" value="PUT">
		</form>
	</div>
@endsection