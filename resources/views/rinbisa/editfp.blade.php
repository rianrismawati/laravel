@extends('layouts.app')

@if(Auth::user()->status == 'admin')
    <script>window.location="{{route('rinbisa.dash_adm')}}";</script>
@endif

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">FOTO</div>
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
        <div class="col-md-10">
            <form action="{{ route('rinbisa.editfp', Auth::id()) }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Change Foto Profile</label>
                    <input type="file" name="fp" class="form-control">
                    
                    <input type="submit" name="editpf" value="Edit Foto Profile">  
                    {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
