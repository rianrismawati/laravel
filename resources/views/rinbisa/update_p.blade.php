@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="col-md-4">
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
    <div class="col-md-8">
        <h2>Edit Profile</h2><br>
        <form action="{{ route('rinbisa.editdata', $edit->id) }}" method="post">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nl" value="{{$edit->name}}" readonly class="form-control">
            </div>	
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" value="{{$edit->email}}" readonly class="form-control">
            </div>	
            <div class="form-group">
                <label>No Telepon</label>
                <input type="text" name="nt" class="form-control">
            </div>	
            <div class="form-group">
                <label>Lokasi</label>
                <input type="text" name="lokasi" class="form-control">
            </div>
            <div class="form-group">
                <label>Bio Singkat</label>
                <textarea name="bio" class="form-control"></textarea>
            </div>

            <input type="submit" name="edit" value="Edit Profile">  
            {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">


        </form>
    </div>
    </div>
@endsection