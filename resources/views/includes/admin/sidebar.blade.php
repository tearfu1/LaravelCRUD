<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-stream"></i>
                <p>
                    Posts
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right">{{ $posts->total() }}</span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href=" {{ route('admin.post.index') }}" class="nav-link">
                        <i class="fas fa-bars nav-icon"></i>
                        <p>List posts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.post.create') }}" class="nav-link">
                        <i class="fas fa-plus-circle nav-icon"></i>
                        <p>Create Post</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
