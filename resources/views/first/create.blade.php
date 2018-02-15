@extends('layout.master')

@section('title', 'Rin-chan')


@section('content')

	<!-- @if(count($errors) > 0)
		<ul>

			@foreach($errors->all() as $error)
				<li> {{$error}}</li>
			@endforeach

		</ul>
	@endif -->

	<h1>Create Blog</h1>
	<br>
	<form action="/first" method="post">
		<input type="text" name="title" value="{{ old('title') }}"><br><br>
		
			@if($errors->has('title'))
				<p> {{$errors->first('title')}}</p>
			@endif
		
		<textarea name="description" rows="8" cols="40">{{ old('description') }}</textarea><br>

			@if($errors->has('description'))
				<p> {{$errors->first('description')}}</p>
			@endif

		<input type="submit" name="edit" value="create">
		{{ csrf_field() }}

	</form>

@endsection
