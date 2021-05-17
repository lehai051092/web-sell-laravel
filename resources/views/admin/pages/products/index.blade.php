@extends('admin.layout')
@section('title')
    <title>Products List</title>
@endsection
@section('content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Products List
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th style="width:20px;">#</th>
                        <th>Name</th>
                        <th>Category Parent</th>
                        <th>Brand Parent</th>
                        <th>Desc</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $key => $product)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->category_id }}</td>
                            <td>{{ $product->brand_id }}</td>
                            <td>{{ $product->product_desc }}</td>
                            <td>{{ $product->product_price }}</td>
                            <td>{{ $product->product_image }}</td>
                            <td>
                                @if($product->product_status == \App\Helper\VariablesInterface::OPTION_VALUE_ACTIVE)
                                    Active
                                @else
                                    Disable
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('backend.products.edit', ['id' => $product->product_id] ) }}"
                                   class="active">
                                    <i class="fa fa-edit text-success text-active"></i>
                                </a>
                                <a href="{{ route('backend.products.delete', ['id' => $product->product_id]) }}"
                                   class="active"
                                   onclick="confirm('You want to delete {{ $product->product_name }} ?')">
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
                        {{ $products->links() }}
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection

