@extends('admin.layout.admin')

@section('title')
    <title>Categories Page</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('admin.partials.header.content', ['name' => 'Category', 'key' => 'List'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('categories.create')}}" class="btn btn-success float-right m-2">Add</a>
                    </div>
                    <div class="col-md-12 table-responsive-md">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $key => $category)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', ['id' => $category->id]) }}"
                                           class="btn-default"><i class="fas fa-edit fa-2x"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('categories.delete', ['id' => $category->id]) }}"
                                           class="btn-default"
                                           onclick="confirm('You want to delete {{ $category->name }} ?')">
                                            <i class="fas fa-trash fa-2x"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

