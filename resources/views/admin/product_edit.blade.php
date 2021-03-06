@php
    $title = __('Product Edit');
@endphp

@extends('layouts.admin')

@section('content')
    <a class="dashboard-link" href="/admin">DdashBoard</a>
    <span> > </span>
    <a class="dashboard-link" href="/admin/products">Products</a>
    <h1 class="admin-title">Product Edit</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit') }}</div>

                    <div class="card-body">
                    <form method="POST" action="/admin/products/{{$product->id}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $product->title }}" required autofocus>
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" autofocus>{{ $product->description }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="product_image1" class="col-md-4 col-form-label text-md-right">{{ __('Image1') }}</label>

                                <div class="col-md-6">
                                    @if($image1)
                                        <img src="{{$image1}}" alt="" class="form-image">
                                    @endif
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                            <span class="btn form-update-button">
                                                Choose File<input type="file" name="product_image1"  style="display:none">
                                            </span>
                                        </label>
                                        <input type="text" class="form-control" readonly="" value={{$image1}}>
                                    </div>
                                    @if($image1)
                                        <input type="submit" class="btn btn-danger" form="img-delete1" value="Delete Image">
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="product_image2" class="col-md-4 col-form-label text-md-right">{{ __('Image2') }}</label>

                                <div class="col-md-6">
                                    @if($image2)
                                        <img src="{{$image2}}" alt="" class="form-image">
                                    @endif
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                            <span class="btn form-update-button">
                                                Choose File<input type="file" name="product_image2"  style="display:none">
                                            </span>
                                        </label>
                                        <input type="text" class="form-control" readonly="" value={{$image2}}>
                                    </div>
                                    @if($image2)
                                        <input type="submit" class="btn btn-danger" form="img-delete2" value="Delete Image">
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="product_image3" class="col-md-4 col-form-label text-md-right">{{ __('Image3') }}</label>

                                <div class="col-md-6">
                                    @if($image3)
                                        <img src="{{$image3}}" alt="" class="form-image">
                                    @endif
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                            <span class="btn form-update-button">
                                                Choose File<input type="file" name="product_image3"  style="display:none">
                                            </span>
                                        </label>
                                        <input type="text" class="form-control" readonly="" value={{$image3}}>
                                    </div>
                                    @if($image3)
                                        <input type="submit" class="btn btn-danger" form="img-delete3" value="Delete Image">
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('price') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ $product->price }}" autofocus>
                                    @if ($errors->has('price'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="product_url" class="col-md-4 col-form-label text-md-right">{{ __('product_url') }}</label>
                                <div class="col-md-6">
                                    <input id="product_url" type="text" class="form-control{{ $errors->has('product_url') ? ' is-invalid' : '' }}" name="product_url" value="{{  $product->product_url }}" autofocus>

                                    @if ($errors->has('product_url'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('product_url') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('category_id') }}</label>

                                <div class="col-md-6">
                                    <input id="category_id" type="text" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id" value="{{ old('category_id') }}" required autofocus>

                                    @if ($errors->has('category_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('category_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div> --}}

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <form method="POST" action="/admin/products/{{$product->id}}">
                            {{ csrf_field() }}
                            <div class="form-group row mb-0 form-delete-button">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-danger" name="_method" value="DELETE">
                                        {{ __('Delete') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <form id="img-delete1" method="POST" action="/admin/products/deleteimg1/{{$product->id}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                        </form>
                        <form id="img-delete2" method="POST" action="/admin/products/deleteimg2/{{$product->id}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                        </form>
                        <form id="img-delete3" method="POST" action="/admin/products/deleteimg3/{{$product->id}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection