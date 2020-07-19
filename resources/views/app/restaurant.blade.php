@extends('layouts.helloapp')

    @section('title', '参考店舗一覧')

    @section('content')
        <table id="table" border="1">
            <tr class="row"><th class="col-3">店舗名</th><th class="col-3">営業時間</th><th class="col-6">写真</th></tr>
            @foreach($json['rest'] as $item)
            <tr class="row"><td class="col-3"><a href="{{ $item['url'] }}">{{ $item['name'] }}</a></td><td class="col-3">{{ $item['opentime'] }}</td><td class="col-6"><img src="{{ $item['image_url']['shop_image1'] }}" width="100%"></td></tr>
            @endforeach
        </table>
        
    @endsection