@php
    $title = __('Profile');
@endphp
@extends('layouts.app')

@section('content')
    <div class="site-title">
        <a class="top-link" href="/">
            {{$site_title}}
        </a>
    </div>
    <div class="productdisp-title-area">
            <h1 class="productdisp-title">Profile</h1>
        </div>
    <footer>
        <div class="footer">
            @foreach($footer as $footerItem)
                <a href={{$footerItem->url}} class="footer-item" target="_blank">{{$footerItem->display_name}}</a>
            @endforeach
        </div>
    </footer>
@endsection