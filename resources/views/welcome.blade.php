<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>This is for you</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/welcome.css" rel="stylesheet">



        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>

    <div>
            @if (Route::has('login'))
                <div class="top-right links" style="z-index: 100;">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>

        <!-- <div class="container text-center">
            <div class="row">
                <div class="col-md-6">こんにちは</div>
                <div class="col-md-6">こんばんは</div>
            </div>
            <div class="row">
                <div class="col-md-2">hello</div>
                <div class="col-md-10">good</div>
            </div>
        </div> -->

    <div class="card">
<img class="card-img w-30" src="https://res.cloudinary.com/dsnycibuw/image/upload/v1595080654/photo-1474674686577-219e8d77f55f_fge46n_mqcgrt.jpg" alt="Card image">

<div class="card-img-overlay d-flex align-items-top">
    <p class="card-text1">大切なあの人に贈ろう</p>
    <div class="card-img-overlay d-flex align-items-center">
    <p class="card-text2 mt-5">世界にひとつだけのポストカード</p>
</div>
<div class="card-img-overlay d-flex align-items-end">
    <p class="card-text3">This is for you</p>

    <div container="box">
</div>




</div>
</div>
</div>


        <!-- <photo1表示> -->

        <div class="text-center mt250">
        <img class="photo1 w-50" src="https://res.cloudinary.com/dsnycibuw/image/upload/v1595133922/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88_2020-02-24_14.19.04_cvjc6a_eglfdk.png">
        </div>

        <!-- <photo表示> -->

        <div class="text-center mt-5">
            <img class="photo2 w-25" src="https://res.cloudinary.com/dsnycibuw/image/upload/v1595133918/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88_2020-02-24_14.10.40_baywmi_kxjldb.png">

            <img class="photo2 w-25" src="https://res.cloudinary.com/dsnycibuw/image/upload/v1595133931/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88_2020-02-24_14.37.22_jpilrv_nbzszv.png">
        </div>

        <div class="moji1 text-center">
        簡単スリーステップでカードが完成！
        </div>
        <!-- <h2>How to Make?</h2> -->

        <div style="text-align: center;">
        <img class="make1 w-50" src="https://res.cloudinary.com/dsnycibuw/image/upload/v1595133898/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88_2020-02-25_21.04.08_mwqon0_dti9xo.png" alt="">
        </div>

        <div class="moji2 text-center">
            1.ポストカードを作るをクリック
        </div>

        <div class="text-center">
        <img class="make2 w-25" src="https://res.cloudinary.com/dsnycibuw/image/upload/v1595133909/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88_2020-02-24_23.08.24_txo6o0_ksmmso.png" alt="">
        </div>

        <div class="moji2 text-center">
        2.メッセージを入力する。写真ファイルと背景色、メッセージカラーを選び、決定をクリック
        </div>







        <div class="text-center">
        <img class="w-50" src="https://res.cloudinary.com/dsnycibuw/image/upload/v1595133927/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88_2020-02-24_14.25.20_qeg9cm_pruka3.png" alt="">


        </div>

        <div class="moji2 text-center">
        3.ポストカードが完成！
        </div>

        <div class="moji2 text-center">
        完成したポストカードをスクショして切り取り、家族や友人に送ってみましょう！
        </div>

    </body>
    <div class="footer">
    <div class="moji3 text-center">
    This is for you
    </div>

    <div class="moji3 text-center">
    Copyright©︎ 2020 Yu Suzuki
    </div>
        </div>
</html>
