<h1>Create Data Latihan</h1>

<form action="/latihan" method="post">
	Nama<br>
	<input type="text" name="nama"><br>

			<!-- @if($errors->has('nama'))
				<p> {{$errors->lat('nama')}}</p>
			@endif -->

	Umur<br>
	<input type="text" name="umur"><br>
	Alamat<br>
	<textarea name="alamat"></textarea>
	<p>{{$errors->alamat}}</p>

	<input type="submit" name="create" value="create">	
	{{ csrf_field() }}

</form>