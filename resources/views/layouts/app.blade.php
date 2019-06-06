<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Script -->
        
        <!-- Latest compiled and minified CSS -->
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="navbar navbar-expand-sm fixed-top navbar--extend navbar-right navbar-color">
            <div class="nav-item nav-link nav-item--extend active">
                <a class="nav-link--extend" href="#lineup">Line up</a>
            </div>
            <div class="nav-item nav-item--extend nav-link" >
                <a class="nav-link--extend" href="#">Profile</a>
            </div>
        </div>

        @yield('content')
        
        <footer>
            <div class="footer">
                <p>Footer</p>
            </div>
        </footer>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script>
            
            $(window).scroll(function() {
                if ($(this).scrollTop() > 0) {　　　　　　　　//スクロール量（scrollTop）が0以上のとき
                    $('.navbar-color').css('transition-duration', '1s');　　　　//nav.navbar-colorを1秒間かけて
                    $('.navbar-color').css('background-color','rgba(128,128,128,0.5)');　　　//nav.navbar-colorのバックグラウンドを白（#FFFFFF）に変更　
                    $('div').removeClass('navbar-color');　　　　//スクロール前に透過指定していたcss(navbar-color)は削除
                } else {
                $('nav.navbar-wrap').css('background','linear-gradient(180deg, rgba(0,0,0,0.4) 10%, transparent 80%)');　
                　　　　　　　　　　//スクロール量（scrollTop）が0未満であれば（スクロール前）灰色→透明の透過のバックグラウンドを表示
                }
            });
        </script>
    </body>