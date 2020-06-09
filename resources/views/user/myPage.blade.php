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
            プロフィール写真:
            @if ($auth->photograph == null)
            <img src="{{ asset('/storage/images/noimage.jpg') }}" alt="noimage" width="150px" height="100px">
            @else
            <img src="{{ asset('/storage/images/' . $auth->photograph) }}" alt="">
            @endif
            <br>
            名前:<span>{{ $auth->name }}</span><br>
            性別:<span>{{ $auth->gender }}</span><br>
            生年月日:<span>{{ $auth->birth }}</span><br>
            都道府県:<span>{{ $auth->prefecture['prefecture_name'] }}</span><br>
            趣味:<span>{{ $auth->hobby }}</span><br>
            職業:<span>{{ $auth->profession['profession_name'] }}</span>
        </div>
    @endsection
</body>
</html>