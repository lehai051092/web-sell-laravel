@extends('layouts.admin')

@section('title')
    <title>Category Edit Page</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.header.content', ['name' => 'Category', 'key' => 'Edit'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 justify-content-center">
                        <form action="{{ route('categories.update', ['id' => $category->id]) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Category name</label>
                                <input type="text" class="form-control" placeholder="Enter category name"
                                       name="category_name" value="{{ $category->name }}">
                            </div>
                            <div class="form-group">
                                <label>Select Parent</label>
                                <select class="form-control" name="category_parent_id">
                                    <option value="">--Selected--</option>
                                    <option value="{{ \App\Http\Services\CategoryServiceInterface::ROOT_PARENT_CATEGORY }}">New root category</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

