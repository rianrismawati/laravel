<h1>Ganbate rin!</h1>

<a href="/latihan/create">Tambah</a><br><br>

<table border="1px">
	<tr>
		<th>Nama</th>
		<th>Umur</th>
		<th>Alamat</th>
		<th colspan="3">Aksi</th>
	</tr>

	@foreach($latih as $lat)
		<tr>
			<td> {{$lat -> nama}} </td>
			<td> {{$lat -> umur}} </td>
			<td> {{$lat -> alamat}} </td>
			<td> <a href="/latihan/{{$lat->id}}">Read</a></td>
			<td> <a href="{{url('latihan/'.$lat->id.'/viewedit')}}">Update</a></td>
			<td><a href="{{url('latihan/destroy/'.$lat->id)}}">Hapus</a></td>
		</tr>
	@endforeach

</table>