@extends('admin.layouts.main')
@section('title')
    Пост {{ $post->title }}
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <a href="{{ route('admin.post.index') }}" class="mr-2"><i class="fas fa-arrow-left"></i></a>
                        <h1 class="m-0 mr-2">{{ $post->title }}</h1>
                        <a href="{{ route('admin.post.edit', $post->id) }}" class="text-success mr-2"><i class="fas fa-solid fa-pen"></i></a>
                        <form action="{{ route('admin.post.delete', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-transparent border-0" type="submit" role="button" > <i class="text-danger fas fa-trash"></i></button>

                        </form>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
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
                    <div class="col-6">

                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{ $post->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Название</td>
                                            <td>{{ $post->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Контент</td>
                                            <td>{!! $post->content !!}</td>
                                        </tr>
                                        <tr>
                                            <td>Категория</td>
                                            <td><span data-category-id="{{$post->category->id}}" class="badge badge-secondary">{{ $post->category->title }}</span></td>
                                        </tr>
                                        <tr>
                                            <td>Теги</td>
                                            <td>
                                                @foreach($post->tags as $tag)
                                                    <span class="badge badge-secondary">{{$tag->title}}</span>
                                                @endforeach
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Превью изображение</td>
                                            <td class="w-50"><img src="{{ url('storage/' . $post->preview_image) }}" alt="" class="img-fluid"></td>
                                        </tr>
                                        <tr>
                                            <td>Основное изображение</td>
                                            <td class="w-50"><img src="{{ url('storage/' . $post->main_image) }}" alt="" class="img-fluid"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        <!-- /.content -->
    </div>
@endsection
