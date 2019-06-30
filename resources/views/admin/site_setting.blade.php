@php
    $title = __('Site Setting');
@endphp

@extends('layouts.admin')

@section('content')
    <a class="dashboard-link" href="/admin">DdashBoard</a>
    <h1 class="admin-title">Site Setting</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Setting') }}</div>

                    <div class="card-body">
                    <form method="POST" action="/admin/site-setting/{{$setting->id}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Site Title') }}</label>

                                <div class="col-md-6">
                                    <input id="site_title" type="text" class="form-control{{ $errors->has('site_title') ? ' is-invalid' : '' }}" name="site_title" value="{{ $setting->site_title }}" required autofocus>
                                    @if ($errors->has('site_title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('site_title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="site_description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <textarea id="site_description" type="text" class="form-control{{ $errors->has('site_description') ? ' is-invalid' : '' }}" name="site_description" value="{{ $setting->site_description }}" autofocus>{{ $setting->site_description }}</textarea>
                                    @if ($errors->has('site_description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('site_description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title_image1" class="col-md-4 col-form-label text-md-right">{{ __('Image1') }}</label>

                                <div class="col-md-6">
                                    <input id="title_image1" type="text" class="form-control{{ $errors->has('title_image1') ? ' is-invalid' : '' }}" name="title_image1" value="{{ $setting->title_image1 }}" autofocus>
                                    @if ($errors->has('title_image1'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title_image1') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title_image2" class="col-md-4 col-form-label text-md-right">{{ __('Image2') }}</label>

                                <div class="col-md-6">
                                    <input id="title_image2" type="text" class="form-control{{ $errors->has('title_image2') ? ' is-invalid' : '' }}" name="title_image2" value="{{ $setting->title_image2 }}" autofocus>
                                    @if ($errors->has('title_image2'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title_image2') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title_image3" class="col-md-4 col-form-label text-md-right">{{ __('Image3') }}</label>

                                <div class="col-md-6">
                                    <input id="title_image3" type="text" class="form-control{{ $errors->has('title_image3') ? ' is-invalid' : '' }}" name="title_image3" value="{{ $setting->title_image3 }}" autofocus>

                                    @if ($errors->has('title_image3'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title_image3') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="site_color" class="col-md-4 col-form-label text-md-right">{{ __('Theme') }}</label>

                                <div class="col-md-6">
                                    <input id="site_color" type="text" class="form-control{{ $errors->has('site_color') ? ' is-invalid' : '' }}" name="site_color" value="{{ $setting->site_color }}" autofocus>
                                    @if ($errors->has('site_color'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('site_color') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
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