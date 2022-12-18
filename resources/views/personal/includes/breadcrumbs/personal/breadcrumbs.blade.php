<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ 'personal.main.index' }}">{{__('Главная')}}</a></li>
        @if( route('personal.main.index') !=  url()->current() )

            <li class="breadcrumb-item active">@yield('title')</li>
        @endif
    </ol>
</div><!-- /.col -->
