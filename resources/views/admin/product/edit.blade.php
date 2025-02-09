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
                <x-admin.back-button route="{{ route('admin.product.index') }}" />
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-content">
                        <form action="{{ route('admin.product.update', $product->id) }}" method="POST" id="update_form"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category <span class="text-danger">*</span></label>
                                        <select class="form-control" name="category">
                                            <option @if ($product->category == 'option 1') selected @endif value="option 1">
                                                option 1</option>
                                            <option @if ($product->category == 'option 2') selected @endif value="option 2">
                                                option 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter Name..." value="{{ $product->name }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price <span class="text-danger">*</span></label>
                                        <input type="text" name="price" class="form-control"
                                            placeholder="Enter Price..." value="{{ $product->price }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Image <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input id="inputGroupFile01" type="file" name="image"
                                                class="custom-file-input" value="{{ $product->image }}">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-4">
                                    <div class="form-group">
                                        <x-admin.update-button />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
