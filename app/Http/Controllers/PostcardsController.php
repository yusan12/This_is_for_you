<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostcardRequest;
use App\Postcard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;


class PostcardsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
         // 追加
         $this->middleware('can:update,postcard')->only(['edit', 'update']);
         $this->middleware('verified')->only('create');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $postcards = Postcard::where('user_id', Auth::id())->get();
        
        return view('postcards.index', compact('postcards'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $postcard = new Postcard;
        $postcard->user_id = Auth::id();
       
        return view('postcards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
        public function store(PostcardRequest $request)
        {
        //インスタンス作成
        $postcard = new Postcard;
        

        //Inputタグのname属性がonamaeの場合 $request->onamae で値を受け取る
        //モデルインスタンスのname属性に代入
        $postcard->message = $request->message;
        $postcard->user_id = Auth::id();
        $postcard->message_color = $request->message_color;
        $postcard->background_color = $request->background_color;
        
        // $this->validate($request, [
        //     'photo' => [
        //         'required',
        //         'file',
        //         'image',
        //         'mimes:jpeg,png',
        //         'dimensions:min_width=100,min_height=100,max_width=600,max_height=600',
        //     ]
        // ]);

        $request->validate([
            'photo'=>'required|image|mimes:jpg,jpeg,png|max:2000000',
        ]);

        $data = $request->all();
        if ($photo = $request->file('photo')) {
            $image_name = $photo->getRealPath();
            // Cloudinaryへアップロード
            Cloudder::upload($image_name, null);
            list($width, $height) = getimagesize($image_name);
            // 直前にアップロードした画像のユニークIDを取得します。
            $publicId = Cloudder::getPublicId();
            // URLを生成します
            $photoUrl = Cloudder::secureShow($publicId, [
                'width'     => $width,
                'height'    => $height
            ]);
            $postcard->photo = $photoUrl;
            
            
         }
        //saveメソッドが呼ばれると新しいレコードがデータベースに挿入される
        $postcard->save();

        return redirect()->route('postcards.index')->with('message', 'カードが作成されました');
        }
        
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Postcard  $postcard
     * @return \Illuminate\Http\Response
     */
    public function show(Postcard $postcard)
    {
        $this->authorize('show', $postcard);
        return view('postcards.show', compact('postcard'));
    }
    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Postcard  $postcard
     * @return \Illuminate\Http\Response
     */
    // public function edit(Postcard $postcard)
    // {
        
    // }

    public function edit(Postcard $postcard) {
        return view('postcards.edit', compact('postcard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Postcard  $postcard
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Postcard $postcard)
    // {
    //     //
    // }

    public function update(PostcardRequest $request, Postcard $postcard) {
        
        // dd($postcard);
        // $this->authorize('update', $postcard);
        $postcard->message = $request->message;
        $postcard->user_id = Auth::id();
        $postcard->message_color = $request->message_color;
        $postcard->background_color = $request->background_color;
        

        $postcard->save();

     

        return redirect(url('postcards', [$postcard->id]));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Postcard  $postcard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postcard $postcard)
    {
        $this->authorize('delete', $postcard);
        
        $postcard->delete();
        return redirect('postcards');
    }

    public function confirm()
    {
        return view('postcards.confirm');
    }
    
}
