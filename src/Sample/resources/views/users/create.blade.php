@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ユーザ登録</div>

                <form action="./store" method="post">

                    @include('users._form', ['mode' => 'create'])

                    <input class="btn btn-primary"  type="submit" value="Submit">

                    @csrf
                </form>


            </div>
        </div>
    </div>
</div>

@endsection
