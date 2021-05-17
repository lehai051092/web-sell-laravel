<aside>
    <div id="sidebar" class="nav-collapse">
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{ route('backend.dashboard') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:void(0)">
                        <i class="fa fa-book"></i>
                        <span>Categories</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('backend.categories.index') }}">List</a></li>
                        <li><a href="{{ route('backend.categories.add') }}">Add new category</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:void(0)">
                        <i class="fa fa-book"></i>
                        <span>Brands</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('backend.brands.index') }}">List</a></li>
                        <li><a href="{{ route('backend.brands.add') }}">Add new brand</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:void(0)">
                        <i class="fa fa-book"></i>
                        <span>Products</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('backend.products.index') }}">List</a></li>
                        <li><a href="{{ route('backend.products.add') }}">Add new brand</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</aside>
