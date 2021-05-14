@extends('admin.layout')
@section('title')
    <title>Category Add</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Category Add Form
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ route('backend.categories.create') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Enter name" name="category_name" required>
                            </div>
                            <div class="form-group">
                                <label>Parent</label>
                                <select class="form-control m-bot15" name="category_parent">
                                    <option
                                        value="{{ \App\Helper\VariablesInterface::OPTION_VALUE_ROOT_CATEGORY }}">
                                        Root category
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control m-bot15" name="category_active">
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
