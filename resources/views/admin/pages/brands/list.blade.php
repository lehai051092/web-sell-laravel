@extends('admin.layout')
@section('title')
    <title>Brand List</title>
@endsection
@section('content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Brand List
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th style="width:20px;">#</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($brands as $key => $brand)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $brand->brand_name }}</td>
                            <td>
                                @if($brand->brand_status == \App\Helper\VariablesInterface::OPTION_VALUE_ACTIVE)
                                    Active
                                @else
                                    Disable
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('backend.brands.edit', ['id' => $brand->brand_id] ) }}"
                                   class="active">
                                    <i class="fa fa-edit text-success text-active"></i>
                                </a>
                                <a href="{{ route('backend.brands.delete', ['id' => $brand->brand_id]) }}"
                                   class="active"
                                   onclick="confirm('You want to delete {{ $brand->brand_name }} ?')">
                                    <i class="fa fa-times text-danger text"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-12 text-center text-center-xs">
                        {{ $brands->links() }}
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection

