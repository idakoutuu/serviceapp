@extends('layouts.helloapp')

<head>
    @section('title', '他のユーザー')
</head>
<body>
    @section('title')
    @section('content')
       
        <div class="page">
            プロフィール写真:
            @if ($user->photograph == null)
            <img src="{{ asset('/storage/images/noimage.png') }}" alt="noimage" width="150px" height="100px">
            @else
             <img src="{{ asset('storage/images/' . $user->photograph['photo']) }}" alt="" width="150px" height="100px">
            @endif
            <br>
            名前:<span>{{ $user->name }}</span><br>
            性別:<span>{{ $user->gender }}</span><br>
            生年月日:<span>{{ $user->birth }}</span><br>
            都道府県:<span>{{ $user->prefecture['prefecture_name'] }}</span><br>
            趣味:
            {{ implode (',', $hobbies) }}
            <br>
            職業:<span>{{ $user->profession['profession_name'] }}</span>
        </div>
    @endsection
</body>
</html>
