<!-- <h1>create(postcard)</h1> -->

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




<!-- <h1>Edit: {!! $postcard->title !!}</h1> -->



@include('errors.form_errors')

<h2>カードを編集する</h2>

<div>
        <img src="{{ $postcard->photo }}" alt="">
    </div>

<form method="POST" action="{{ url('postcards', $postcard->id) }}">
@method('PATCH')
@csrf

<input type="text" name="message" value="{{ $postcard->message }}">



  <h4>バックグラウンドカラー</h4>
  <div class="form-group">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="message_color" id="inlineRadio1" value="1" {{$postcard->message_color == 1 ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio1">赤</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="message_color" id="inlineRadio2" value="2" {{$postcard->message_color == 2 ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio2">青</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="message_color" id="inlineRadio3" value="3" {{$postcard->message_color == 3 ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio3">緑</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="message_color" id="inlineRadio4" value="4" {{$postcard->message_color == 4 ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio4">オレンジ</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="message_color" id="inlineRadio5" value="5" {{$postcard->message_color == 5 ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio5">黒</label>
</div>
</div>


<h4>メッセージカラー</h4>
<div class="form-group">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="background_color" id="inlineRadio1" value="1" {{$postcard->background_color == 1 ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio1">赤</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="background_color" id="inlineRadio2" value="2" {{$postcard->background_color == 2 ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio2">青</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="background_color" id="inlineRadio3" value="3" {{$postcard->background_color == 3 ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio3">緑</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="background_color" id="inlineRadio4" value="4" {{$postcard->background_color == 4 ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio4">オレンジ</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="background_color" id="inlineRadio5" value="5" {{$postcard->background_color == 5 ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio5">白</label>
  </div>
  </div>


<button type="submit">決定</button>

</form>

 
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @endsection
