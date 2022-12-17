<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <a href="{{ route('admin.main.index') }}" class="brand-link d-flex align-items-center " style="gap: 10px;">
        <i class="fas fa-solid fa-robot"></i>
        <span class="brand-text font-weight-light text-uppercase font-weight-bold">{{__('VProger')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.main.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Главная
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.user.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Пользователи
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.post.index') }}" class="nav-link">

                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Посты
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.category.index') }}" class="nav-link">

                        <i class="nav-icon fa-solid fas fa-list"></i>
                        <p>
                            Категории
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.tag.index') }}" class="nav-link">

                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Теги
                        </p>
                    </a>
                </li>



            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
