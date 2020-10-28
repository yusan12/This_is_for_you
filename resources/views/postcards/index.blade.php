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



<header>  
</header>
<footer>
</footer>
</body>
</html>




    <table>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    

    
    <a class="font-big" href="{{ route('postcards.create') }}"><button type="button" class="btn btn-primary">ポストカードを作る</button></a>
    @foreach($postcards as $postcard)


        <h4>
            <a href="{{ url('postcards', $postcard->id) }}">
                {{ $postcard->message }}
            </a>
        </h4>
        
    @endforeach

    </table>
@endsection



