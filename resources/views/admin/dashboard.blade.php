@php
    $title = __('Dashboard');
@endphp

@extends('layouts.admin')

@section('content')
<h1 class="admin-title">DashBoard</h1>
<div class="row dashboard-content">
    <div class="col-md-3 dashboard-item">
        <a href="/admin/site-settings">Site Setting</a>
    </div>
    <div class="col-md-3 dashboard-item">
        <a href="/admin/products">Products</a>
    </div>
    <div class="col-md-3 dashboard-item">
        <a href="/admin/profile">Profile</a>
    </div>
    <div class="col-md-3 dashboard-item">
        <a href="admin/footer">Footer</a>
    </div>
</div>

@endsection