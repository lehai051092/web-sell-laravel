@extends('layouts.admin')

@section('title')
    <title>Home Page</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.header.content', ['name' => 'Home', 'key' => ''])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                </div>
            </div>
        </div>
    </div>
@endsection

