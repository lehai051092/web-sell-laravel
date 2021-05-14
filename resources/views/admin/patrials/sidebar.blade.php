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
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Categories</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('backend.categories.list') }}">List</a></li>
                        <li><a href="{{ route('backend.categories.add') }}">Add new category</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</aside>
