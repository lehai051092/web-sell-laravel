@extends('admin.layout')
@section('title')
    <title>Menu List</title>
@endsection
@section('content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Menu List
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                    <a href="#myModal" data-toggle="modal" class="btn btn-success">
                        Menus Parent
                    </a>
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal"
                         class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×
                                    </button>
                                    <h4 class="modal-title">Menus parent</h4>
                                </div>
                                <div class="modal-body">
                                    {!! $menusParent !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                </div>
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
                    @foreach($menus as $key => $menu)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $menu->menu_name }}</td>
                            <td>
                                @if($menu->menu_status == \App\Helper\VariablesInterface::OPTION_VALUE_ACTIVE)
                                    Active
                                @else
                                    Disable
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('backend.menus.edit', ['id' => $menu->menu_id] ) }}"
                                   class="active">
                                    <i class="fa fa-edit text-success text-active"></i>
                                </a>
                                <a href="{{ route('backend.menus.delete', ['id' => $menu->menu_id]) }}"
                                   class="active"
                                   onclick="confirm('You want to delete {{ $menu->menu_name }} ?')">
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
                        {{ $menus->links() }}
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection

