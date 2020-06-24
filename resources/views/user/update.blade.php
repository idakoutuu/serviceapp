@extends('layouts.helloapp')

@section('title', '確認ページ')
@section('content')
<form action="{{ route ('user.mypage') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6 offset-md-3 form-group col-form-label">
        <label>名前:</label>
        {{ $inputs['name'] }}
        <input type="hidden" name="name" value="{{$inputs['name']}}" class="form-control">
    </div>

    <div class="col-md-6 offset-md-3 form-group col-form-label">
        <label>性別:</label>
        性別：{{ $auth->gender }}
        <input type="hidden" name="gender" value="{{$inputs['name']}}" class="form-control">
    </div>

    <div class="col-md-6 offset-md-3 form-group col-form-label">
        <label>生年月日:</label>
        生年月日:{{ $auth->birth }}
        <input type="hidden" name="birth" value="{{$inputs['name']}}" class="form-control">
    </div>

    <div class="col-md-6 offset-md-3 form-group col-form-label">
        <label>都道府県:</label>
        {{ $pref['prefecture_name'] }}
        <input type="hidden" name="prefecture_id" value="{{$inputs['prefecture_id']}}" class="form-control">
    </div>

    <div class="col-md-6 offset-md-3 form-group col-form-label">
        <label>趣味:</label>
        {{ implode (',', $hobbies) }}
        @foreach ($hobbies as $hobby_id => $hobby)
        <input type="hidden" name="hobby[]" value="{{ $hobby_id }}" class="form-control">
        @endforeach
    </div>

    <div class="col-md-6 offset-md-3 form-group col-form-label">
        <label>職業:</label>
        {{ $professions{'profession_name'} }}
        <input type="hidden" name="profession_id" value="{{$inputs['profession_id']}}" class="form-control">
    </div>

    <div class="col-md-6 offset-md-3 form-group col-form-label">
        <label>プロフィール写真:</label>
        <input type="hidden" name="photo" value="{{ $uploadedFile }}" class="form-control">
        <img src="{{ url($uploadedFile) }}" alt="" width="100px" height="100px">
    </div>
</form>
@endsection
