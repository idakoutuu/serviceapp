@extends('layouts.helloapp')

@section('content')
<form action="{{ route('app.thanks') }}" method="post">
        @csrf
        <div class="col-md-6 offset-md-3 form-group col-form-label">
        <label>件名</label>
        {{$inputs['title']}}
        <input type="hidden" name="title" value="{{$inputs['title']}}" class="form-control">
        </div>

        <div class="col-md-6 offset-md-3 form-group col-form-label">
        <label>お問い合わせ内容</label>
        {{$inputs['text']}}
        <input type="hidden" name="text" value="{{$inputs['text']}}" class="form-control">
        </div>

        <div class="col-md-6 offset-md-3 form-group col-form-label">
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
@endsection