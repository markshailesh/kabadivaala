@extends('admin.layouts.app')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-6">
            <ol class="breadcrumb mt-4">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                @isset($page_title)
                    <li class="breadcrumb-item active">
                        <strong>{{ $page_title }}</strong>
                    </li>
                @endisset
            </ol>
        </div>
        <div class="col-6">
            <div class="mt-3 text-right">
                <x-admin.add-button route="{{ route('admin.product.create') }}" text="Add Product" />
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-content">
                        <div id="table_div">
                            @include('admin.product.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
