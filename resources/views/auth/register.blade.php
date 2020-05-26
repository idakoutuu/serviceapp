@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="text-align: center; font-size: 20px;">{{ __('新規登録') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('verification') }}" enctype="multipart/form-data">
                        @csrf
                
                        @if (count($errors) > 0)
                            <p style="color: red; text-align: center;">再入力してください</p>
                        @endif

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('名前') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('性別') }}</label>

                            <div class="col-md-8">
                                男<input class="col-md-4" id="gender" type="radio" class="form-control" name="gender" required autocomplete="gender" value="男">
                                女<input class="col-md-4" id="gender" type="radio" class="form-control" name="gender" required autocomplete="gender" value="女">
                            </div>
                            @if ($errors->has('gender'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('gender') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="birth" class="col-md-4 col-form-label text-md-right">{{ __('生年月日') }}</label>

                            <div class="col-md-8">
                                <select name="birth_year" id="birth_year" required autocomplete="birth_year">
                                   <option value="">----</option>
                                   @for ($i = 1940; $i <=2010; $i++)
                                   <option value="{{ $i }}"@if(old('birth_year') == $i) selected @endif>{{ $i }}</option>
                                   @endfor 
                                </select> 年
                                <select name="birth_month" id="birth_month" required autocomplete="birth_month">
                                   <option value="">--</option>
                                   @for ($i = 1; $i <= 12; $i++)
                                   <option value="{{ $i }}"@if(old('birth_month') == $i) selected @endif>{{ $i }}</option>
                                   @endfor
                                </select> 月
                                <select name="birth_day" id="birth_day" required autocomplete="birth_day">
                                   <option value="">--</option>
                                   @for ($i = 1; $i <=31; $i++)
                                   <option value="{{ $i }}"@if(old('birth_day') == $i) selected @endif>{{ $i }}</option>
                                   @endfor
                                </select>　日

                                
                                @if ($errors->has('birth'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('プロフィール写真') }}</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" class="@error('photo') is-invalid @enderror" name="photo">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prefecture_id" class="col-md-4 col-form-label text-md-right">{{ __('お住まい') }}</label>

                            <div class="col-md-6">
                                <select type="text" name="prefecture_id" id="prefecture_id" required autocomplete="prefecture_id">
                                    @foreach($prefectures as $prefecture)
                                        <option value="{{ $prefecture->id }}">{{ $prefecture->prefecture_name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('prefecture_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prefecture_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hobby" name="hobby" class="col-md-4 col-form-label text-md-right">{{ __('趣味') }}</label>

                            <div class="col-md-6">
                                @foreach ($hobbies as $hobby)
                                    <label for="{{ $hobby->id }}"><input type="checkbox" name="hobby[]" value="{{ $hobby->id }}" id="{{ $hobby->id }}">{{ $hobby->hobby }}</label>
                                @endforeach
                                @if ($errors->has('hobby'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hobby') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="profession_id" class="col-md-4 col-form-label text-md-right">{{ __('職業') }}</label>

                            <div class="col-md-6">
                                <select name="profession_id" id="profession_id" required autocomplete="profession_id">
                            　      @foreach($professions as $profession)
                                        <option value="{{ $profession->id }}">{{ $profession->profession_name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('profession_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('profession_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('入力内容確認') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
