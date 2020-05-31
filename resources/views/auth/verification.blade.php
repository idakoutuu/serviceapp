@extends('layouts.app')
<style>
    .repair {
        color : black;
    }
</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                        <label>名前:</label>
                        {{$inputs['name']}}
                        <input type="hidden" name="name" value="{{$inputs['name']}}" class="form-control">
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                        <label>メールアドレス:</label>
                        {{$inputs['email']}}
                        <input type="hidden" name="email" value="{{$inputs['email']}}" class="form-control">
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                        <label>パスワード:</label>
                        【表示されません】
                        <input type="hidden" name="password" value="{{$inputs['password']}}" class="form-control">
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                        <label>性別:</label>
                        {{$inputs['gender']}}
                        <input type="hidden" name="gender" value="{{$inputs['gender']}}" class="form-control">
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                        <label>生年月日:</label>
                        {{$inputs['birth_year']}} 年 {{$inputs['birth_month']}} 月 {{$inputs['birth_day']}} 日
                        <input type="hidden" name="birth_year" value="{{$inputs['birth_year']}}" class="form-control">
                        <input type="hidden" name="birth_month" value="{{$inputs['birth_month']}}" class="form-control">
                        <input type="hidden" name="birth_day" value="{{$inputs['birth_day']}}" class="form-control">
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                        <label>プロフィール写真:</label>
                        <input type="hidden" name="photo" value="{{ $uploadedFile }}">
                        <img src="{{ url($uploadedFile) }}" alt="" width="100px" height="100px">
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                        <label>お住まい:</label>
                        {{ $pref['prefecture_name'] }}
                        <input type="hidden" name="prefecture_id" value="{{$inputs['prefecture_id']}}" class="form-control">
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                            <label>趣味:</label>
                            {{ implode (',', $hobbies) }}
                            @foreach ($hobbies as $hobby_id => $hobby)
                            <input type="hidden" name="hobby" value="{{ $hobby_id }}" class="form-control">
                            @endforeach
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                            <label>職業:</label>
                            {{ $professions['profession_name'] }}
                            <input type="hidden" name="profession_id" value="{{$inputs['profession_id']}}" class="form-control">
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                            <button type="submit" name="action" value="back" class="form-control">
                                <a href="javascript:history.back();" class="repair">
                                    入力内容修正
                                </a>
                            </button>
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                            <button type="submit" name="action" value="submit" class="form-control">
                                送信する
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection