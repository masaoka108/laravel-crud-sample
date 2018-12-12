@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card-header" style="border:solid 1px #dee2e6;">ユーザ一覧</div>

            <a class="btn btn-primary" style="width:100px;margin:5px" href="{{ url('/model/create') }}" role="button">新規追加</a>

            <table class="table"  style="border:solid 1px #dee2e6;">
                <thead class="thead-dark">
                  <tr style="border:solid 1px #dee2e6;">
                    <th scope="col" style="border:solid 1px #dee2e6;">ID</th>
                    <th scope="col" style="border:solid 1px #dee2e6;">名前</th>
                    <th scope="col" style="border:solid 1px #dee2e6;">メール</th>
                    <th scope="col" style="border:solid 1px #dee2e6;">操作</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($userData as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a class="btn btn-primary" href="/model/edit/{{ $user->id }}" role="button">修正</a>
                                <button type="button" class="btn btn-secondary">削除</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->

@endsection
