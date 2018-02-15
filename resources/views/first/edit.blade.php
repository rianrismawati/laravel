@extends('layout.master')

@section('title', 'Rin-chan')


@section('content')
	<br>
	<form action="/first/{{$blog->id}}" method="post">
		<input type="text" name="title" value="{{$blog->title}}"><br><br>
		<textarea name="description" rows="8" cols="40">{{$blog->description}}</textarea><br>

		<input type="submit" name="edit" value="edit">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PUT">

	</form>

@endsection
