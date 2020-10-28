@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
<body>

<h1 class="text-center">ポストカードの詳細</h1>

    <!-- <div class="p-3 mb-2 bg-primary text-white"><img src="{{ $postcard->photo }}" alt=""> -->

<!-- 始 画像のバックグラウンドの色変更 -->


<!-- <h3>メッセージ：{{ $postcard->message }}</h3> -->
    @if ($postcard->message_color === 1)
        <!-- <h3>カラー：赤</h3> -->
        <div class="p-3 mb-2 text-center bg-danger bgstyle">

    @elseif ($postcard->message_color === 2)
        <!-- <h3>カラー：青</h3> -->
        <div class="p-3 mb-2 text-center bg-primary bgstyle">

    @elseif ($postcard->message_color === 3)
        <!-- <h3>カラー：緑</h3> -->
        <div class="p-3 mb-2 text-center bg-success bgstyle">

    @elseif ($postcard->message_color === 4)
        <!-- <h3>カラー：オレンジ</h3> -->
        <div class="p-3 mb-2 text-center bg-warning bgstyle">

    @elseif ($postcard->message_color === 5)
        <!-- <h3>カラー：黒</h3> -->
        <div class="p-3 mb-2 text-center bg-dark bgstyle">
    @endif

        <img src="{{ $postcard->photo }}" alt="">
<!-- 始 画像のバックグラウンドの色変更 -->

    @if ($postcard->background_color === 1)
        <!-- <h3>カラー：赤</h3> -->
        <h5 class="text-danger" >

    @elseif ($postcard->background_color === 2)
        <!-- <h5>カラー：青</h5> -->
        <h5 class="text-primary" >

    @elseif ($postcard->background_color === 3)
        <!-- <h5>カラー：緑</h5> -->
        <h5 class="text-success" >
    @elseif ($postcard->background_color === 4)
        <!-- <h5>カラー：オレンジ</h5> -->
        <h5 class="text-warning" >
    @elseif ($postcard->background_color === 5)
        <!-- <h5>カラー：黒</h5> -->
        <h5 class="text-white" >
    @endif
            {{ $postcard->message }}
        </h5>
    <div>
        
    <!-- <h3>メッセージ：{{ $postcard->message }}</h3> -->
    </div>
    </div>
        <a href="{{ action('PostcardsController@edit', [$postcard->id]) }}"
          class="btn btn-primary"
        >
            編集
        </a>
        
        {!! Form::open(['method' => 'DELETE', 'url' => ['postcards', $postcard->id], 'class' => 'd-inline']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}

        <br>
    
        <button onclick="window.print();">このページを印刷する</button>
<a href="{{ route('postcards.index') }}">一覧に戻る</a>



@endsection