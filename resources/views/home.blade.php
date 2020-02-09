@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">マスタ管理</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                    @endif

                    <!-- ユーザ管理 -->
                    <ul>
                        <li><a href="{{ action('UserController@index') }}">ユーザ管理</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
