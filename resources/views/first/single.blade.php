@extends('layout.master')

@section('title', 'Rin-chan')


@section('content')
    <h1>Welcome to First Blog!</h1>
        <h2>{{ $blog->title}}</h2>
    <hr>
        <h3>{{$blog->description}}</h3>


@endsection
