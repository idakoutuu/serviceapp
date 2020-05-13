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
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('名前　：') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('名前')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス　：') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('メールアドレス')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード　：') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('パスワード')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('性別　　：') }}</label>

                            <div class="col-md-8">
                                男<input class="col-md-4" id="gender" type="radio" class="form-control" name="gender" required autocomplete="gender" value="1">
                                女<input class="col-md-4" id="gender" type="radio" class="form-control" name="gender" required autocomplete="gender" value="2">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birth" class="col-md-4 col-form-label text-md-right">{{ __('生年月日　：') }}</label>

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


                                @error('生年月日')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('プロフィール写真　：') }}</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" class="@error('photo') is-invalid @enderror" name="photo">
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prefecture" class="col-md-4 col-form-label text-md-right">{{ __('お住まい　：') }}</label>

                            <div class="col-md-6">
                                <select name="prefecture" id="prefecture" required autocomplete="prefecture">
                                    <option value="">選択してください</option>
                                    <option value="北海道">北海道</option>
                                    <option value="青森県">青森県</option>
                                    <option value="岩手県">岩手県</option>
                                    <option value="宮城県">宮城県</option>
                                    <option value="秋田県">秋田県</option>
                                    <option value="山形県">山形県</option>
                                    <option value="福島県">福島県</option>
                                    <option value="茨城県">茨城県</option>
                                    <option value="栃木県">栃木県</option>
                                    <option value="群馬県">群馬県</option>
                                    <option value="埼玉県">埼玉県</option>
                                    <option value="千葉県">千葉県</option>
                                    <option value="東京都" selected>東京都</option>
                                    <option value="神奈川県">神奈川県</option>
                                    <option value="新潟県">新潟県</option>
                                    <option value="富山県">富山県</option>
                                    <option value="石川県">石川県</option>
                                    <option value="福井県">福井県</option>
                                    <option value="山梨県">山梨県</option>
                                    <option value="長野県">長野県</option>
                                    <option value="岐阜県">岐阜県</option>
                                    <option value="静岡県">静岡県</option>
                                    <option value="愛知県">愛知県</option>
                                    <option value="三重県">三重県</option>
                                    <option value="滋賀県">滋賀県</option>
                                    <option value="京都府">京都府</option>
                                    <option value="大阪府">大阪府</option>
                                    <option value="兵庫県">兵庫県</option>
                                    <option value="奈良県">奈良県</option>
                                    <option value="和歌山県">和歌山県</option>
                                    <option value="鳥取県">鳥取県</option>
                                    <option value="島根県">島根県</option>
                                    <option value="岡山県">岡山県</option>
                                    <option value="広島県">広島県</option>
                                    <option value="山口県">山口県</option>
                                    <option value="徳島県">徳島県</option>
                                    <option value="香川県">香川県</option>
                                    <option value="愛媛県">愛媛県</option>
                                    <option value="高知県">高知県</option>
                                    <option value="福岡県">福岡県</option>
                                    <option value="佐賀県">佐賀県</option>
                                    <option value="長崎県">長崎県</option>
                                    <option value="熊本県">熊本県</option>
                                    <option value="大分県">大分県</option>
                                    <option value="宮崎県">宮崎県</option>
                                    <option value="鹿児島県">鹿児島県</option>
                                    <option value="沖縄県">沖縄県</option>
                                </select>

                                @error('お住まい')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hobby_id" name="hobby_id" class="col-md-4 col-form-label text-md-right">{{ __('趣味　：') }}</label>

                            <div class="col-md-6">
                                スポーツ観戦<input id="hobby_id" type="checkbox">
                                読書<input id="hobby_id" type="checkbox">
                                ペット<input id="hobby_id" type="checkbox">
                                
                                @error('趣味')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="profession_id" class="col-md-4 col-form-label text-md-right">{{ __('職業　：') }}</label>

                            <div class="col-md-6">
                                <select name="profession_id" id="profession_id" required autocomplete="profession_id">
                            　      <option value="">選択してください</option>
                                    <option value="会社員">会社員</option>
                                    <option value="会社役員">会社役員</option>
                                    <option value="自営業">自営業</option>
                                    <option value="公務員">公務員</option>
                                    <option value="販売員">販売員</option>
                                </select>
                                @error('職業')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
