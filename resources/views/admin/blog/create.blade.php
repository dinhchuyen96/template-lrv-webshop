@extends('layouts.admin')
@section('title', 'Thêm mới blog')
@section('main')
    <form action="{{ route('blog.store') }}" enctype="multipart/form-data" method="POST" role="form">
        @csrf
        <div class="form-group row">
            <div class="col-md-6">
                <label for="">Blog category</label>
                <select class="form-control" name="cat_id" id="">
                    @foreach ($blog_cats as $tags)
                        <option value="{{ $tags->id }}">{{ $tags->name }}</option>
                    @endforeach;
                </select>
                @error('cat_id')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6"> <label for="">Tên Blog</label>
                <textarea type="text" id="tinymce0" class="form-control" name="name" placeholder="Input field" required>{{ old('name') }}</textarea>
                @error('name')
                    {{ $message }}
                @enderror
            </div>

        </div>
        <div class="form-group">
            <label for="">Title</label>
            <textarea type="text" id="tinymce1" class="form-control" value="{{ old('title') }}" name="title"
                placeholder="Input field"></textarea>
            @error('title')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="">Nội dung blog</label>
            <textarea type="text" id="tinymce" name="content" class="form-control"
                placeholder="Input field">{{ old('content') }}</textarea>
            @error('content')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="">Ảnh</label>
            <input type="file" class="form-control" name="upload" placeholder="Input field">
            @error('upload')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="0">
                    Tạm Ẩn
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="1" checked>
                    Hiển thị
                </label>
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Lưu lại</button>
    </form>
@stop()
