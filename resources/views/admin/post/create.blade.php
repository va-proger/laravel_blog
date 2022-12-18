@extends('admin.layouts.main')

@section('title')
    {{ __('Добавление поста') }}
@endsection
@section('admin_breadcrumbs_last')
    {{ __('Добавление поста') }}
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Добавление поста') }}</h1>
                </div><!-- /.col -->
                @include('admin.includes.breadcrumbs.admin.breadcrumbs')
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    @include('admin.includes.forms.post.create')
                </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
    <!-- /.content -->
</div>
@endsection
