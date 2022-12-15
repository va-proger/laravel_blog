<form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group w-25">
        <input type="text" name="title" class="form-control" placeholder="Название поста" value="{{ old('title') }}">
        @error('title')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <textarea id="summernote" name="content">{{ old('content') }}</textarea>
        @error('content')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group w-25">
        <label for="exampleInputFile">Добавить превью</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="preview_image"  >
                <label class="custom-file-label"  >Выберите изображение</label>
            </div>
            <div class="input-group-append">
                <span class="input-group-text">Загрузка</span>
            </div>
        </div>
        @error('preview_image')
         <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group w-25">
        <label for="exampleInputFile">Добавить главное изображение</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="main_image" >
                <label class="custom-file-label"  >Выберите изображение</label>
            </div>
            <div class="input-group-append">
                <span class="input-group-text">Загрузка</span>
            </div>
        </div>
        @error('main_image')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group w-25">
        <label>Выбирите категорию</label>
        <select name="category_id" class="custom-select">
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $category->id == old('category_id') ? 'selected' : '' }}
                >{{ $category->title }}</option>
            @endforeach
        </select>
        @error('category_id')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Теги</label>
        <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выбириет теги" style="width: 100%;">
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}"git
                    {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : ''}}
                >{{ $tag->title }}</option>
            @endforeach
        </select>
        @error('tag_ids')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Добавить">
    </div>
</form>
