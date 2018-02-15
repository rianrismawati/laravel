<h1>Create Data Latihan</h1>

<form action="/latihan/{{$edit->id}}" method="post">
    Nama<br>
    <input type="text" name="nama" value="{{$edit->nama}}"><br>
    Umur<br>
    <input type="text" name="umur" value="{{$edit->umur}}"><br>
    Alamat<br>
    <textarea name="alamat">{{$edit->alamat}}</textarea>

    <input type="submit" name="edit" value="edit">  
    {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">

</form><!--  -->