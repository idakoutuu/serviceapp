@extends('layouts.helloapp')

@section('title', '編集ページ')
@section('content')

<form action="{{ route('user.update') }}" method="post" enctype="multipart/form-data">
    @csrf
    @if (count($errors) > 0)
        <p style="color: red; text-align: center;">再入力してください</p>
    @endif
    <div class="profile-group">
        <div class="profile-group__title">
            ユーザー名：
            @if($errors->has('name'))
            <input id="name" type="text" class="col-md-4 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @else
            <input type="text" name="name" value="{{$auth->name}}">
            @endif
            
        </div>
        <div class="profile-group__title">
            性別：{{ $auth->gender }}
        </div>
        <div class="profile-group__title">
            生年月日:{{ $auth->birth }}
        </div>
    
        <div class="profile-group__edit">
            都道府県：
            <select type="text" name="prefecture_id" id="prefecture_id" required autocomplete="prefecture_id">
                @foreach($prefectures as $prefecture)
                    <option value="{{ $prefecture->id }}">{{ $prefecture->prefecture_name }} </option>
                @endforeach
            </select>
        </div>
        <div class="profile-group__title">
            趣味：
            <div class="col-md-6">
                @foreach ($hobbies as $hobby)
                    <label for="{{ $hobby->id }}"><input type="checkbox" name="hobby[]" value="{{ $hobby->id }}" id="{{ $hobby->id }}">{{ $hobby->hobby }}</label>
                @endforeach
            </div>
        </div>
        <div class="profile-group__title">
            職業：
            <select name="profession_id" id="profession_id" required autocomplete="profession_id">
        　      @foreach($professions as $profession)
                    <option value="{{ $profession->id }}">{{ $profession->profession_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="profile-group__title">
            プロフィール写真：
            <img src="{{ asset('/storage/images/' . $auth->photograph->photo) }}" alt="" width="150px" height="100px"><br>
            <input type="file" id="photo" name="photo">
            @if ($errors->has('photo'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('photo') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <input type="submit" value="確認する">
</form>

@endsection