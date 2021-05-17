@extends('admin.layout')
@section('title')
    <title>Product Add</title>
@endsection
@section("css")
    <link rel="stylesheet" href="{{ asset('public/backend/css/select2/select2.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Product Add Form
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ route('backend.products.create') }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Enter name" name="product_name"
                                       required>
                            </div>
                            <div class="form-group">
                                <label>Categories</label>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <select class="form-control m-bot15 categories-select" name="category_id">
                                            <option
                                                value="{{ \App\Helper\VariablesInterface::OPTION_VALUE_ROOT_CATEGORY }}">
                                                Root category
                                            </option>
                                            {!! $htmlCategoriesOption !!}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Brands</label>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <select class="form-control m-bot15 brands-select" name="brand_id">
                                            {!! $htmlBrandOption !!}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class>Description</label>
                                <textarea class="form-control" name="product_desc" style="resize: none"
                                          rows="8"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <input class="form-control" name="product_price" type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Feature image</label>
                                <input type="file" name="feature_image_path">
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" multiple name="image_path[]">
                            </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <select class="form-control m-bot15 tags-select" name="tags" multiple="multiple">
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control m-bot15" name="product_status">
                                    <option
                                        value="{{ \App\Helper\VariablesInterface::OPTION_VALUE_ACTIVE }}">
                                        Active
                                    </option>
                                    <option
                                        value="{{ \App\Helper\VariablesInterface::OPTION_VALUE_DISABLE }}">
                                        Disable
                                    </option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('public/backend/js/select2/select2.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/sell/product/add.js') }}"></script>
@endsection
