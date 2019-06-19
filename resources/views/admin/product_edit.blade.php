@php
    $title = __('Product Edit');
@endphp

@extends('layouts.admin')

@section('content')
    <a class="dashboard-link" href="/admin">DdashBoard</a>
    <a class="dashboard-link" href="/admin/products">Products</a>
    <h1 class="admin-title">Product Edit</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create') }}</div>

                    <div class="card-body">
                    <form method="POST" action="/admin/products/{{$product->id}}">
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
                                    <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ $product->description }}" required autofocus>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="file_name" class="col-md-4 col-form-label text-md-right">{{ __('file_name') }}</label>

                                <div class="col-md-6">
                                    <input id="file_name" type="text" class="form-control{{ $errors->has('file_name') ? ' is-invalid' : '' }}" name="file_name" value="{{ $product->file_name }}" required autofocus>
                                    @if ($errors->has('file_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('file_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="file_name2" class="col-md-4 col-form-label text-md-right">{{ __('file_name2') }}</label>

                                <div class="col-md-6">
                                    <input id="file_name" type="text" class="form-control{{ $errors->has('file_name2') ? ' is-invalid' : '' }}" name="file_name2" value="{{ $product->file_name2 }}" required autofocus>
                                    @if ($errors->has('file_name2'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('file_name2') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="file_name3" class="col-md-4 col-form-label text-md-right">{{ __('file_name3') }}</label>

                                <div class="col-md-6">
                                    <input id="file_name3" type="text" class="form-control{{ $errors->has('file_name3') ? ' is-invalid' : '' }}" name="file_name3" value="{{ $product->file_name3 }}" required autofocus>

                                    @if ($errors->has('file_name3'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('file_name3') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('price') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ $product->price }}" required autofocus>
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
                                    <input id="product_url" type="text" class="form-control{{ $errors->has('product_url') ? ' is-invalid' : '' }}" name="product_url" value="{{  $product->product_url }}" required autofocus>

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
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" name="_method" value="DELETE">
                                        {{ __('Delete') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection