@php
    $title = __('Products');
@endphp

@extends('layouts.admin')

@section('content')
    <a class="dashboard-link" href="/admin">DdashBoard</a>
    <h1 class="admin-title">Products</h1>
    <div class="products-bar">
        <button onclick="location.href='/admin/products/create'" class="btn btn-primary">Create</button>
    </div>
    <div class="row admin-panel-1">
            @foreach($products as $value)
                <div class="col-md-6 panel-item">
                    <div class="panel-content">
                        <a class="product-link" href="/admin/products/{{$value->id}}/edit">
                            {{-- <img class="product-img-1" src={{$value['img']}}/> --}}
                            <p class="product-title-1">{{$value->title}}</p>
                            <p class="product-desc-1">{{$value->description}}</p>
                        </a>
                    </div>
                </div>
            @endforeach
    </div>
@endsection