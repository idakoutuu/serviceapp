@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            <button>ログアウト</button>
                        </div>
                    @endif

                    ログアウトの方はこちら　↗️
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
