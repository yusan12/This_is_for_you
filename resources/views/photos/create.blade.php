@extends('layouts.app')

@section('content')

<h1>写真をアップロードする</h1>

<form method="post" action="{{ route('photos.store') }}" enctype="multipart/form-data">
  @csrf
  <div class="form-group form-row">
    <label for="logo" class="col-lg-3 col-form-label text-lg-right"></label>
    <div class="col-lg-8">
      <input type="file" name="logo">
      @if ($errors->has('logo'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('logo') }}</strong>
        </span>
      @endif
    </div>
  </div>
  
  @if(Auth::user()->avatar == null)
  <i class="fas fa-user fa-fw"></i>
@else
  <img class="avatar" src="{{ config('cloudder.secureUrl').'/f_auto,c_scale,w_24/'.Auth::user()->avatar }}" alt="avatar">
@endif
  
  <div class="form-group form-row">
    <div class="col-lg-8 offset-lg-3">
      <button class="btn btn-primary btn-lg btn-block" type="submit">
        <i class="fas fa-sync mr-1"></i>保存
      </button>
    </div>
  </div>
</form>

<a href="{{ route('postcards.index') }}">もどる</a>

@endsection