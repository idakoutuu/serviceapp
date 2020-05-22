@extends('layouts.helloapp')

<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'マイページ')
</head>
<body>
    @section('title')
    @section('content')
        <div class="page">
            name:                      <span>{{ $auth->name }}</span>
        </div>
    @endsection
</body>
</html>