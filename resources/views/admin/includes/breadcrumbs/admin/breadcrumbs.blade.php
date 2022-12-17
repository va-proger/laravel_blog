<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ 'main.admin.index' }}">{{__('Главная')}}</a></li>
        @if( route('admin.main.index') !=  url()->current() )

            <li class="breadcrumb-item active">@yield('admin_breadcrumbs_last')</li>
        @endif
    </ol>
</div><!-- /.col -->
