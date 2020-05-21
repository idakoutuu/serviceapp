@extends('layouts.helloapp')

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'お問い合わせページ')
    <style>
       .error-message {
           color: red;
       }
    </style>
</head>
<body>
    @section('title')

    @section('content')
        <form action="{{ route('app.confirm') }}" method="post" class="row contact-form" style="text-align: center;">
            @csrf
            <div class="col-md-6 offset-md-3 form-group">                
                <label>件名</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                    
                @if ($errors->has('title'))
                    <p class="error-message">{{ $errors->first('title') }}</p>
                @endif
            </div>

            <div class="col-md-6 offset-md-3 form-group">
                <label>お問い合わせ内容</label>
                <textarea type="text"  cols="40" rows="15" name="text" class="form-control">{{ old('text') }}</textarea>
                @if ($errors->has('text'))
                    <p class="error-message">{{ $errors->first('text') }}</p>
                @endif
            </div>

            <div class="col-md-6 offset-md-3 form-group">
            <button type="submit" class="form-control">
                入力内容確認
            </button>
            </div>
        </form>
    @endsection
</body>
</html>