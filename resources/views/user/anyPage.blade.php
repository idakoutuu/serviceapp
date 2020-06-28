@extends('layouts.helloapp')

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'ユーザーの一覧')
</head>
<body>
    @section('title')
    @section('content')
    @if(!empty($users))
    @foreach ($users as $user)
    <br>
    {{ $user->name }}
    @endforeach
    @foreach ($photograph as $photo)
    <img src="{{ asset('/storage/images/' . $photo['photo']) }}" alt="" width="150px" height="100px">
    @endforeach
    @endif
    @endsection
</body>
</html>