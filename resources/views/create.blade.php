<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>リスト登録画面</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
@extends('layouts.app')
@section('content')
    <h1>リスト登録画面</h1>
    <form action="{{ route('post.store')}}" method="POST">
        {{ csrf_field() }}
        @method('POST')
        <div class="form-area">

        <dl>
            <dt><label for="content">やらないこと</label></dt>
            <dd><input type="text" id="content" class="form-design" name="content" size="28"></dd>
        </dl>      
                @if ($errors->has('content'))
                <div class="alert alert-danger mt-3">
                        @foreach ($errors->get('content') as $error)
                            {{ $error }}
                        @endforeach
                </div>
                 @endif

        <dl>
            <dt><label for="InputSolution">解決策</label></dt>
            <dd><textarea class="form-design" name="solution" id="InputSolution"　cols="30" rows="10"></textarea></dd>
        </dl>
                @if ($errors->has('solution'))
                <div class="alert alert-danger mt-3">
                        @foreach ($errors->get('solution') as $error)
                            {{ $error }}
                        @endforeach
                </div>
                 @endif
        

        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                @if ($errors->has('user_id'))
                <div class="alert alert-danger mt-3">
                        @foreach ($errors->get('user_id') as $error)
                            {{ $error }}
                        @endforeach
                </div>
                 @endif
        <button type="submit" class="registration-btn">登録</button>

        </div>
    </form>
@endsection
</body>
</html>