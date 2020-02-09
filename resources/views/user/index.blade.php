@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- 検索条件 -->
            <div class="card">
                <div class="card-header">検索条件</div>
                <div class="card-body">
                    <div class="row">
                        <span class="col-md-2 text-right">名前</span>
                        <span class="col-md-10">
                            <input class="w-75" type="text" value="">
                        </span>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-2 text-right">
                            <span>Eメール</span>
                        </div>
                        <div class="col-md-10">
                            <input class="w-75" type="text" value="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 text-center">
                            <button type="button">検索</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 検索結果 -->
            <div class="card mt-5">
                <div class="card-header">検索結果</div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">名前</th>
                                <th class="text-center">Eメール</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">山田太郎</td>
                                <td class="text-center">example@gmail.com</td>
                                <td class="text-center">
                                    <button type="button">編集</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">山田花子</td>
                                <td class="text-center">example2@gmail.com</td>
                                <td class="text-center">
                                    <button type="button">編集</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection