<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>W.spring</title>

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
                <a class="nav-link--extend" href="#">Line up</a>
            </div>
            <div class="nav-item nav-item--extend nav-link" >
                <a class="nav-link--extend" href="#">Profile</a>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="/images/DSC00247.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="/images/DSC01300.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="/images/DSC01311.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
                <div class="title">
                    W.spring
                </div>
        </div>
        
        <div class="content-1">
            <h1 style="font-weight:bold;">Line Up</h1>
            <div class="row panel-1">
                <div class="col-md-6">
                    <a class="product-link" href="#">
                        <img class="product-img-1" src="/images/DSC00247.jpg"/>
                        <p class="product-title-1">test1</p>
                    </a>
                </div>
                <div class="col-md-6">
                    <a class="product-link" href="#">
                        <img class="product-img-1" src="/images/DSC01300.jpg"/>
                        <p class="product-title-1">test2</p>
                    </a>
                </div>
                <div class="col-md-6">
                    <a class="product-link" href="#">
                        <img class="product-img-1" src="/images/DSC01311.jpg"/>
                        <p class="product-title-1">test3</p>
                    </a>
                </div>
                <div class="col-md-6">
                    <a class="product-link" href="#">
                        <img class="product-img-1" src="/images/DSC00247.jpg"/>
                        <p class="product-title-1">test4</p>
                    </a>
                </div>
            </div>
        </div>

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
</html>
