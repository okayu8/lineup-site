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
                    <form method="POST" action="/admin/site-setting/{{$setting->id}}" enctype="multipart/form-data">
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
                                    @if($image1)
                                        <img src="{{$image1}}" alt="" class="form-image">
                                    @endif
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                            <span class="btn btn-primary">
                                                Choose File<input type="file" name="title_image1"  style="display:none">
                                            </span>
                                        </label>
                                        <input type="text" class="form-control" readonly="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title_image2" class="col-md-4 col-form-label text-md-right">{{ __('Image2') }}</label>

                                <div class="col-md-6">
                                    @if ($image2)
                                        <img src="{{$image2}}" alt="" class="form-image">
                                    @endif
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                            <span class="btn btn-primary">
                                                Choose File<input type="file" name="title_image2"  style="display:none">
                                            </span>
                                        </label>
                                        <input type="text" class="form-control" readonly="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title_image3" class="col-md-4 col-form-label text-md-right">{{ __('Image3') }}</label>

                                <div class="col-md-6">
                                    @if ($image3)
                                        <img src="{{$image3}}" alt="" class="form-image">
                                    @endif
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                            <span class="btn btn-primary">
                                                Choose File<input type="file" name="title_image3"  style="display:none">
                                            </span>
                                        </label>
                                        <input type="text" class="form-control" readonly="">
                                    </div>
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