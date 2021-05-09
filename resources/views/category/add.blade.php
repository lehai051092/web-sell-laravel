@extends('layouts.admin')

@section('title')
    <title>Category Add Page</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.header.content', ['name' => 'Category', 'key' => 'Add'])
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 justify-content-center">
                        <form>
                            <div class="form-group">
                                <label>Category name</label>
                                <input type="text" class="form-control" placeholder="Enter category name">
                            </div>
                            <div class="form-group">
                                <label>Example select</label>
                                <select class="form-control">
                                    <option value="">--Selected--</option>
                                    <option value="0">Root category</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

