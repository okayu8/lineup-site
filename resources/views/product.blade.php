@php
    $title = __($product->title);
@endphp
@extends('layouts.app')

@section('content')
    <div class="site-title">
        <a class="top-link" href="/">
            {{$site_title}}
        </a>
    </div>
    <div class="product-disp">
        <div class="productdisp-title-area">
            <h1 class="productdisp-title">{{$product->title}}</h1>
        </div>
        <div class="productdisp-slider-area">
            <div id="carousel-indicator" class="carousel slide">
                <ol class="carousel-indicators">
                    @for($indicatorI = 0; $indicatorI < count($images); $indicatorI++)
                        @if($indicatorI === 0)
                            <li data-target="#carousel-indicator" data-slide-to={{$indicatorI}} class="active"></li>
                        @else
                            <li data-target="#carousel-indicator" data-slide-to={{$indicatorI}}></li>
                        @endif
                    @endfor
                </ol>
                <div class="carousel-inner">
                    @for($titleImgI = 0; $titleImgI < count($images); $titleImgI++)
                        @if($titleImgI === 0)
                            <div class="carousel-item active">
                                <img class="d-block w-100" src={{$images[$titleImgI]}} alt="slide image {{$titleImgI + 1}}">
                            </div>
                        @else
                            <div class="carousel-item">
                                <img class="d-block w-100" src={{$images[$titleImgI]}} alt="slide image {{$titleImgI + 1}}">
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
        </div>
        <div class="productdisp-content">
            <div class="productdisp-price-area">
                <label class="price-label">Price</label>
                <p class="productdisp-price">
                    ¥ {{number_format($product->price)}}
                </p>
            </div>
            <div class="productdisp-desc-area">
                <label class="desc-label">Description</label>
                <p class="productdisp-desc">
                    {{$product->description}}
                </p>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer">
            @foreach($footer as $footerItem)
                <a href={{$footerItem->url}} class="footer-item" target="_blank">{{$footerItem->display_name}}</a>
            @endforeach
        </div>
    </footer>
@endsection