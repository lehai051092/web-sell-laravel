@extends('frontend.layout')
@section('content')
    <div class="col-sm-3">
        @include('frontend.pages.index.left-sidebar')
    </div>
    <div class="col-sm-9 padding-right">
        @include('frontend.pages.index.features-items')
        @include('frontend.pages.index.category-tab')
        @include('frontend.pages.index.recommended-items')
    </div>
@endsection
