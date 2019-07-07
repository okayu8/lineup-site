@php
    $title = $site_title;
@endphp
@extends('layouts.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @for($titleImgI = 0; $titleImgI < count($slide_img); $titleImgI++)
                @if($titleImgI === 0)
                    <div class="carousel-item active">
                        <img class="d-block w-100" src={{$slide_img[$titleImgI]}} alt="First slide">
                    </div>
                @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src={{$slide_img[$titleImgI]}} alt="Second slide">
                    </div>
                @endif
            {{-- <div class="carousel-item">
                <img class="d-block w-100" src={{$slide_img[1]}} alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src={{$slide_img[2]}} alt="Third slide">
            </div> --}}
            @endfor
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
                {{$site_title}}
            </div>
    </div>
    
    <div id="lineup" class="content-1">
        <h1 style="font-weight:bold;">Line Up</h1>
        <div class="row panel-1">
                @foreach($lineup_array as $value)
                    <div class="col-md-6 panel-item">
                        <div class="panel-content">
                            <a class="product-link" href="/product/{{$value['id']}}">
                                @if($value['img'] != '')
                                    <img class="product-img-1" src={{$value['img']}} class="panel-img">
                                @endif
                                <p class="product-title-1">{{$value['title']}}</p>
                                <p class="product-desc-1">{{$value['desc']}}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            
        </div>
    </div>
    <footer>
        <div class="footer">
            <a href="#" class="footer-item">Footer</a>
            <a href="#" class="footer-item">Footer</a>
            <a href="#" class="footer-item">Footer</a>
        </div>
    </footer>
@endsection
