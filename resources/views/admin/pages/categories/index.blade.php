@extends('admin.layout')
@section('title')
    <title>Categories List</title>
@endsection
@section('content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Categories List
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th style="width:20px;">#</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Parent</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $key => $category)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>
                                @if($category->category_status == \App\Helper\VariablesInterface::OPTION_VALUE_ACTIVE)
                                    Active
                                @else
                                    Disable
                                @endif
                            </td>
                            <td>{{ $category->category_parent }}</td>
                            <td>
                                <a href="{{ route('backend.categories.edit', ['id' => $category->category_id] ) }}"
                                   class="active">
                                    <i class="fa fa-edit text-success text-active"></i>
                                </a>
                                <a href="{{ route('backend.categories.delete', ['id' => $category->category_id]) }}"
                                   class="active"
                                   onclick="confirm('You want to delete {{ $category->category_name }} ?')">
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
                        {{ $categories->links() }}
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection

