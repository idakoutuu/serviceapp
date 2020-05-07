@extends('layouts.helloapp')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://api.gnavi.co.jp/RestSearchAPI/20150630/?keyid=[458e7c74ce130a78394c9522748bc0c4]&format=json&latitude=34.702492&longitude=135.495965&range=3"></script>
    
    @section('title', '参考店舗一覧')
</head>
<body>
    @section('title')

    @section('content')
        <input type="text" id="key" placeholder="458e7c74ce130a78394c9522748bc0c4"><input type="button" id="submit" value="送信">
        <table id="table" border="1">
            <tr><th>店舗名</th><th>営業時間</th></tr>
        </table>
        <script>
           const showResult = result => {
            result.rest.map( item => {
                $("#table").append(`<tr><td>${item.name}</td><td>${item.opentime}</td></tr>`)
            })
            }

            var url = "https://api.gnavi.co.jp/RestSearchAPI/v3/"
            var params = {
            keyid: "",
            latitude: 34.702492,
            longitude: 135.495965,
            range: 3
            }

            $("#submit").on("click", function () {
            params.keyid = $("#key").val()
            $.getJSON( url, params, function( result ) {
                showResult( result )
            })
            })
        </script>
    @endsection
</body>
</html>