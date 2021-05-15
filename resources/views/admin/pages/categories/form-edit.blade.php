@extends('admin.layout')
@section('title')
    <title>Category Update</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Category Update Form
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form"
                              action="{{ route('backend.categories.update', ['id' => $category->category_id]) }}"
                              method="post">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Enter name" name="category_name"
                                       value="{{ $category->category_name }}" required>
                            </div>
                            <div class="form-group">
                                <label>Parent</label>
                                <select class="form-control m-bot15" name="category_parent">
                                    <option
                                        value="{{ \App\Helper\VariablesInterface::OPTION_VALUE_ROOT_CATEGORY }}">
                                        Root category
                                    </option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control m-bot15" name="category_active">
                                    <option
                                        value="{{ \App\Helper\VariablesInterface::OPTION_VALUE_ACTIVE }}"
                                        @if($category->category_active == \App\Helper\VariablesInterface::OPTION_VALUE_ACTIVE) selected @endif>
                                        Active
                                    </option>
                                    <option
                                        value="{{ \App\Helper\VariablesInterface::OPTION_VALUE_DISABLE }}"
                                        @if($category->category_active == \App\Helper\VariablesInterface::OPTION_VALUE_DISABLE) selected @endif>
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
