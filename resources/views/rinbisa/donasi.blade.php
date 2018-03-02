@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">FOTO</div>
                <div class="panel-body">
                    <center>
                        <a href="{{ route('rinbisa.viewedit', Auth::id()) }}" class="btn btn-primary">Edit Profile</a><br><br>
                        <a href="{{ route('rinbisa.viewcamp') }}" >Campaign Saya</a><br><br>
                        <a href="{{ route('rinbisa.viewdon') }}">Donasi Saya</a><br><br>
                        <a href="">Verifikasi Akun</a>

                    </center>

                </div>
            </div>
        </div>
    <div class="col-md-10">
    	<h3>Donasi</h3>
    	<table class="table">
          <tr>
            <th>Judul Campaign</th>
            <th>Nominal Donasi</th>
            <th>Tanggal Donasi</th>
            <th>Status</th>
          </tr>
          <tr>
            @foreach($donUser as $read)
            <td>{{ $read->judul }}</td>
            <td>{{ $read->nom_don }}</td>
            <td>{{ $read->tgl_don }}</td>
            <td>{{ $read->status }}</td>
            @endforeach
          </tr>
      </table>
    </div>
</div>
@endsection