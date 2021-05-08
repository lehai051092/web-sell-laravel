<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $name . ' ' . $key }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">{{ $name }}</a></li>
                    <?php $url = \Illuminate\Support\Facades\Request::fullUrl(); ?>
                    <?php if (substr($url, -5) !== '/home'): ?>
                    <li class="breadcrumb-item active">{{ $key }}</li>
                    <?php endif; ?>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
