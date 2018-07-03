@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Laravel APP</h1>
    <p class="lead">
        你现在看到的是24k星爷Laravel练习
    </p>
    <p>
        一切，从这里开始
    </p>
    <p>
        <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
    </p>
    </div>
@stop