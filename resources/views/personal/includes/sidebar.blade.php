<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <a href="{{ route('personal.main.index') }}" class="brand-link d-flex align-items-center " style="gap: 10px;">
        <i class="fas fa-solid fa-robot"></i>
        <span class="brand-text font-weight-light text-uppercase font-weight-bold">{{__('VProger')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('personal.main.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Главная
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('personal.liked.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-heart"></i>
                        <p>
                            {{ __('Понравившиеся посты') }}
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('personal.comment.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-comment-alt"></i>
                        <p>
                            {{ __('Комментарии') }}
                        </p>
                    </a>

                </li>

            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
