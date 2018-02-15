@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">FOTO</div>
                <div class="panel-body">
                    <center>
                        <a href="" class="btn btn-primary">Edit Profile</a><br><br>
                        <a href="" >Campaign Saya</a><br><br>
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
