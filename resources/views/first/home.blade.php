@extends('layout.master')

@section('title', 'Rin-chan')


@section('content')
<h1>Welcome to First!</h1>
<hr><br>
 @foreach ($first as $value)
<li><a href="/first/{{$value->id}}">{{$value -> title}}</a>

	<a href="{{url('first/destroy/'.$value->id)}}">Hapus</a>

<!-- 	<form action="/first/{{$value->id}}" method="post">

		<input type="submit" name="submit" value="delete">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="DELETE">

	</form> -->

</li>
 @endforeach
@endsection