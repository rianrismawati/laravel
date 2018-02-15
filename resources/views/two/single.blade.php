<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
   <h1> Welcome to single Blog! </h1>
   <h3>{{ $two }}</h3>

   @foreach($user as $users)
   
   		<li>{{$users->username . ' ' . $users->password}}</li>
	
   @endforeach
</body>
</html>