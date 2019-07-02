@php
    $title = __('Footer Setting');
@endphp

@extends('layouts.admin')

@section('content')
    <a class="dashboard-link" href="/admin">DdashBoard</a>
    <h1 class="admin-title">Footer</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit') }}</div>

                    @foreach($footer as $item)
                    <div class="card-body">
                        <form method="POST" action="/admin/footer/{{$item->id}}">
                        {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group row">
                                <label for="display_name" class="col-md-4 col-form-label text-md-right">{{ __('Display Name') }}</label>

                                <div class="col-md-6">
                                    <input id="display_name" type="text" class="form-control{{ $errors->has('display_name') ? ' is-invalid' : '' }}" name="display_name" value="{{ $item->display_name }}" required autofocus>
                                    @if ($errors->has('display_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('display_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="url" class="col-md-4 col-form-label text-md-right">{{ __('URL') }}</label>

                                <div class="col-md-6">
                                    <input id="url" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="url" value="{{ $item->url }}" required autofocus>
                                    @if ($errors->has('url'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('url') }}</strong>
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
                        <form method="POST" action="/admin/footer/{{$item->id}}">
                            {{ csrf_field() }}
                            <div class="form-group row mb-0 form-delete-button">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-danger" name="_method" value="DELETE">
                                        {{ __('Delete') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create') }}</div>
                    <div class="card-body">
                        <form method="POST" action="/admin/footer">
                        {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="display_name" class="col-md-4 col-form-label text-md-right">{{ __('Display Name') }}</label>

                                <div class="col-md-6">
                                    <input id="display_name" type="text" class="form-control{{ $errors->has('display_name') ? ' is-invalid' : '' }}" name="display_name" value="{{ old('display_name') }}" required autofocus>
                                    @if ($errors->has('display_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('display_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="url" class="col-md-4 col-form-label text-md-right">{{ __('URL') }}</label>

                                <div class="col-md-6">
                                    <input id="url" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') }}" required autofocus>
                                    @if ($errors->has('url'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('url') }}</strong>
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