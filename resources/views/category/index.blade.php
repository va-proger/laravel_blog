@extends('layouts.main')
@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Категории</h1>
        <section class="featured-posts-section">
            <ul>
                @foreach($categories as $category)
                    @if($category->posts->count() > 0)
                        <li><a href="{{ route('category.post.index', $category->id) }}">{{ $category->title }}</a> <span>{{ $category->posts->count() }}</span></li>
                    @endif
                @endforeach

            </ul>
        </section>

    </div>

</main>
@endsection
