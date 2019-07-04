@php
    $title = __('Dashboard');
@endphp

@extends('layouts.admin')

@section('content')
<h1 class="admin-title">DashBoard</h1>
<div class="row dashboard-content">
    <div class="col-md-3 dashboard-item">
        <a href="/admin/site-setting">
            <img class="dashboard-icon" src="/images/icon/設定アイコン.svg">
            <p class="dashboard-text">Site Setting</p>
        </a>
    </div>
    <div class="col-md-3 dashboard-item">
        <a href="/admin/products">
            <img class="dashboard-icon" src="/images/icon/メニューの無料アイコン6.svg">
            <p class="dashboard-text">Products</p>
        </a>
    </div>
    <div class="col-md-3 dashboard-item">
        <a href="/admin/profile">
            <img class="dashboard-icon" src="/images/icon/個人情報ファイル1.svg">
            <p class="dashboard-text">Profile</p>
        </a>
    </div>
    <div class="col-md-3 dashboard-item">
        <a href="admin/footer">
            <img class="dashboard-icon" src="/images/icon/リンクのフリーアイコン1.svg">
            <p class="dashboard-text">Footer</p>
        </a>
    </div>
</div>

test
<form action="/upload" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="file">
    <button type="submit">保存</button>
</form>
@endsection