<!-- 

<form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
 
    画像(外観)
    <input type="file" name="image_exterior">
 
<input type="hidden" name="_token" value="{{csrf_token()}}">
 
<input type="submit" value="新規登録" class="button is-primary">
 
</fom> -->

<h1>カードを削除しました</h1>

<a href="{{ route('postcards.index') }}">もどる</a>