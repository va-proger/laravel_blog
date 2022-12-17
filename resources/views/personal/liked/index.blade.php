@extends('personal.layouts.main')
@section('title')
    {{ __('Понравившаяся посты') }}
@endsection
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('title')</h1>
                </div>
                @include('personal.includes.breadcrumbs.personal.breadcrumbs')
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>10</h3>

                            <p>{{ __('Понравившаяся посты') }}</p>
                        </div>
                        <div class="icon">
                            <i class=" fas fa-heart"></i>
                        </div>
                        <a href="{{ route('personal.liked.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>10</h3>

                            <p>{{ __('Комментарии') }}</p>
                        </div>
                        <div class="icon">
                            <i class=" fas fa-comment-alt"></i>
                        </div>
                        <a href="{{ route('personal.comment.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection
