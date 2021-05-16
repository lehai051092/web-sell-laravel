@extends('admin.layout')
@section('title')
    <title>Brand Add</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Brand Add Form
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ route('backend.brands.create') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Enter name" name="brand_name" required>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control m-bot15" name="brand_status">
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
