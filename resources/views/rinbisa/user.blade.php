@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-3">
            <a href="">Donation</a><br>
            <a href="">Campaign</a><br>
            <a href="{{ route('rinbisa.user') }}">Users</a><br>
        </div>
        <div class="col-md-8">
            <h3>User</h3>
                <table class="table">
                    <tr class="thead-inverse">
                        <th>Name</th>
                        <th>Email</th>
                        <th>No.Telp</th>
                        <th>Lokasi</th>
                        <th>Bio</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>    
                @foreach($user as $us)
                        <td>{{ $us->name }}</td>
                        <td>{{ $us->email }}</td>
                        <td>{{ $us->no_tlp }}</td>
                        <td>{{ $us->lokasi }}</td>
                        <td>{{ $us->bio }}</td>
                        <td>{{ $us->status }}</td>
                        <td><a href="">Update</a>
                        <a href="">Delete</a></td>
                    </tr>
                </table>
            @endforeach
        </div>
    </div>
@endsection