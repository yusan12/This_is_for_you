<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use Auth;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
        public function store(Request $request)
{
    
    
    $data = $request->all();
    if ($logo = $request->file('logo')) {
        $image_name = $logo->getRealPath();
        // Cloudinaryへアップロード
        Cloudder::upload($image_name, null);
        list($width, $height) = getimagesize($image_name);
        // 直前にアップロードした画像のユニークIDを取得します。
        $publicId = Cloudder::getPublicId();
        // URLを生成します

        //インスタンス作成
       
        $photo = new Photo;

         
        //Inputタグのname属性がonamaeの場合 $request->onamae で値を受け取る
        //モデルインスタンスのname属性に代入
    
        $photo->post_id = Auth::id();
        $photo->name = $publicId;
        

        //saveメソッドが呼ばれると新しいレコードがデータベースに挿入される
        $postcard->save();

        $logoUrl = Cloudder::show($publicId, [
            'width'     => $width,
            'height'    => $height
        ]);

     }
     return view('postcards.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return view('photos.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
