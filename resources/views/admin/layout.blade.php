<!DOCTYPE html>
<html>
<head>
    @yield('title')
    @include('admin.links.link-top')
    @yield('css')
</head>
<body>
<section id="container">
    @include('admin.patrials.header')
    @include('admin.patrials.sidebar')
    <section id="main-content">
        <section class="wrapper">
            @yield('content')
        </section>
        @include('admin.patrials.footer')
    </section>
</section>
    @include('admin.links.link-bottom')
    @yield('js')
</body>
</html>
