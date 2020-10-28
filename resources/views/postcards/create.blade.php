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




<!-- <h1>create(postcard)</h1> -->

<h2>メッセージを書く</h2>

<form method="post" action="/postcards" enctype="multipart/form-data">
  @csrf
  <input type="text" name="message" >
  <input type="file" name="photo">

  



  <h4>背景色</h4>

  <div class="form-group">
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="message_color" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">赤</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="message_color" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">青</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="message_color" id="inlineRadio3" value="3">
    <label class="form-check-label" for="inlineRadio3">緑</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="message_color" id="inlineRadio4" value="4">
    <label class="form-check-label" for="inlineRadio4">オレンジ</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="message_color" id="inlineRadio5" value="5">
    <label class="form-check-label" for="inlineRadio5">黒</label>
  </div>
  </div>


  <h4>メッセージカラー</h4>

<div class="form-group">
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="background_color" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">赤</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="background_color" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">青</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="background_color" id="inlineRadio3" value="3">
    <label class="form-check-label" for="inlineRadio3">緑</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="background_color" id="inlineRadio4" value="4">
    <label class="form-check-label" for="inlineRadio4">オレンジ</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="background_color" id="inlineRadio5" value="5">
    <label class="form-check-label" for="inlineRadio5">白</label>
  </div>
</div>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


 

  <button type="submit" class="mt-3">決定</button>

</form>

@endsection
