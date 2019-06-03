@php
    $title = __('Dashboard');
@endphp

@extends('layouts.admin')

@section('content')
<h1 class="admin-title">DashBoard</h1>
<div class="row dashboard-content">
    <div class="col-md-3 dashboard-item">
        Site Setting
    </div>
    <div class="col-md-3 dashboard-item">
        Products
    </div>
    <div class="col-md-3 dashboard-item">
        Profile
    </div>
    <div class="col-md-3 dashboard-item">
        Footer
    </div>
</div>

@endsection