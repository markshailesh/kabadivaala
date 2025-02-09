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
                <x-admin.back-button route="{{ route('admin.services.index') }}" />
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-content">
                        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data"
                            class="form-example" id="add_form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Title <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter Title..." required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Image <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input id="inputGroupFile01" type="file" name="image"
                                                class="custom-file-input">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Short Desc <span class="text-danger">*</span></label>
                                        <input type="text" name="short_desc" class="form-control"
                                            placeholder="Enter Short Desc..." required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description <span class="text-danger">*</span></label>
                                        <input type="text" name="description" class="form-control"
                                            placeholder="Enter Short Desc..." required>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-4">
                                    <div class="form-group">
                                        <x-admin.save-button />
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
