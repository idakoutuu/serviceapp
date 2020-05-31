@extends('layouts.app')
<style>
    .complete {
        text-align : center;
    }
    .top-page {
        font-size: 2rem;
    }
</style>
@section('content')
    <div class="complete">
        <h2>登録が完了しました！</h2>
        <a href="{{ route('user.usertop') }}" class="top-page">【トップページへ】</a>
    </div>
@endsection