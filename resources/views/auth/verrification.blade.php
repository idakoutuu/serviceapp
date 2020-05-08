@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                        <label>名前</label>
                        {{$inputs['name']}}
                        <input type="hidden" name="name" value="{{$inputs['name']}}" class="form-control">
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                        <label>メールアドレス</label>
                        {{$inputs['email']}}
                        <input type="hidden" name="email" value="{{$inputs['email']}}" class="form-control">
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                        <label>パスワード</label>
                        【表示されません】
                        <input type="hidden" name="password" value="{{$inputs['password']}}" class="form-control">
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                        <label>性別</label>
                        {{$inputs['gender']}}
                        <input type="hidden" name="email" value="{{$inputs['gender']}}" class="form-control">
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                        <label>生年月日</label>
                        {{$inputs['birth']}}
                        <input type="hidden" name="birth" value="{{$inputs['birth']}}" class="form-control">
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                        <label>プロフィール写真</label>
                        {{$inputs['']}}
                        <input type="hidden" name="picture" value="{{$inputs['picture']}}" class="form-control">
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                        <label>お住まい</label>
                        {{$inputs['address']}}
                        <input type="hidden" name="address" value="{{$inputs['address']}}" class="form-control">
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                        <label>趣味</label>
                        {{$inputs['hobby']}}
                        <input type="hidden" name="hobby" value="{{$inputs['hobby']}}" class="form-control">
                        </div>

                        <div class="col-md-6 offset-md-3 form-group col-form-label">
                        <label>職業</label>
                        {{$inputs['profession']}}
                        <input type="hidden" name="profession" value="{{$inputs['profession']}}" class="form-control">
                        </div>

                        <button type="submit" name="action" value="back" class="form-control">
                            入力内容修正
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
