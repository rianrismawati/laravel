@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><center>
                    Foto Profile<br>
                    <img src="" alt=""/><br>
                    <a href="">Change Foto Profile</a>
                    </center></div>
                <div class="panel-body">
                    <center>
                        <a href="{{ route('rinbisa.viewedit', Auth::id()) }}" class="btn btn-primary">Edit Profile</a><br><br>
                        <a href="{{ route('rinbisa.viewcreate') }}" >Campaign Saya</a><br><br>
                        <a href="">Donasi Saya</a><br><br>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Akun Saya</a>
                                </h4>
                              </div>
                              <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                  <a href="">Edit Profile Picture</a><br>
                                  <a href="">Verifikasi Akun</a>
                                </div>
                              </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <form method="post" action="{{ route('rinbisa.createC') }}" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Judul Campaign</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Foto Campaign</label>
                    <input type="file" name="foto_camp" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Target Donasi</label>
                    <input type="number" name="target" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Deadline Campaign</label>
                    <input type="date" name="deadline" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Kategori Campaign</label>
                    
                    <select name="kat" class="form-control">
                        @foreach($getKateg as $kat)
                            <option value="{{ $kat->nama_kat }}">{{ $kat->nama_kat }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Lokasi penerima dana</label>
                    <select name="lok" class="form-control">
                        @foreach($getPener as $pen)
                           <option value="{{ $pen->nama_lok }}">{{ $pen->nama_lok }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Deskripsi Campaign</label>
                    <textarea name="desk" class="form-control"></textarea>
                </div>

                <input type="submit" name="create" value="create">	
                {{ csrf_field() }}

            </form>
        </div>
</div>
@endsection