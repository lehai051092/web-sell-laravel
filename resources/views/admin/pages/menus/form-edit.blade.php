@extends('admin.layout')
@section('title')
    <title>Menu Update</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Menu Update Form
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form"
                              action="{{ route('backend.menus.update', ['id' => $menu->menu_id]) }}"
                              method="post">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Enter name" name="menu_name"
                                       value="{{ $menu->menu_name }}" required>
                            </div>
                            <div class="form-group">
                                <label>Parent</label>
                                <select class="form-control m-bot15" name="menu_parent_id">
                                    <option
                                        value="{{ \App\Helper\VariablesInterface::OPTION_VALUE_ROOT }}">
                                        Root category
                                    </option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control m-bot15" name="menu_status">
                                    <option
                                        value="{{ \App\Helper\VariablesInterface::OPTION_VALUE_ACTIVE }}"
                                        @if($menu->menu_status == \App\Helper\VariablesInterface::OPTION_VALUE_ACTIVE) selected @endif>
                                        Active
                                    </option>
                                    <option
                                        value="{{ \App\Helper\VariablesInterface::OPTION_VALUE_DISABLE }}"
                                        @if($menu->menu_status == \App\Helper\VariablesInterface::OPTION_VALUE_DISABLE) selected @endif>
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
