@extends('layouts.helloapp')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'ユーザーの一覧')
</head>
<body>
    @section('title')
    @section('content')
     @if(!empty($users))
      @foreach($users as $user)
        <ul>
            <li>{{ $user->name }}<img src="{{ asset('storage/images/' . $user->photograph) }}" alt=""></li>
        </ul>
      @endforeach
    @endif
    @endsection
</body>
</html>