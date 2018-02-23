@extends('layouts.app')

@if(Auth::user()->status == 'admin')
    <script>window.location="{{route('rinbisa.dash_adm')}}";</script>
@endif

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center>
                       
                        <a href="{{ route('rinbisa.vieweditfp', Auth::id()) }}">Change Foto profile</a>
                    </center>
                </div>
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
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
