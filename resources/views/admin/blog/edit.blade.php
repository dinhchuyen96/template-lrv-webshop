@extends('admin.layouts.admin')
@section('title', 'Edit blog')
@section('main')
    <form action="{{ route('blog.update', $blog->id) }}" enctype="multipart/form-data" method="POST" role="form">
        @csrf @method('PUT')
        <div class="row form-group">
            <div class="col-md-6">
                <label for="">Blog cat</label>
                <label for=""></label>
                <select class="form-control" name="cat_id" id="" required>
                    @foreach ($blog_cats as $cats)
                        <option value="{{ $cats->id }}">{{ $cats->name }}</option>
                    @endforeach;
                </select>
                @error('name')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="">Tên blog</label>
                <textarea type="text" class="form-control" id="" name="name" value=""
                    placeholder="Input field" required>{{ $blog->name }}</textarea>
                @error('name')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="">Title</label>
                <textarea required type="text" id="tinymce1" class="form-control" name="title"
                    placeholder="Input field">{{$blog->title}}</textarea>
                @error('title')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="">Nội dung blog</label>
            <textarea type="text" id="tinymce" class="form-control" id="content_blog" required name="content" value=""
                placeholder="Input field">{{ $blog->content }}</textarea>
            @error('content')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group row">
            <div class="col-md-6"><label for="">Ảnh</label>
                <img src="{{ url('uploads') }}/blog/{{ $blog->image_blog }}" alt=""
                    style="width: 483px; height: auto">
                <input type="file" class="form-control" name="upload" placeholder="Input field" accept=".png,.gif,.jpg,.jpeg,.svg">
                @error('upload')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6"><label for="">Trạng thái</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="0" {{ $blog->status == '0' ? 'checked' : '' }}>
                        Tạm Ẩn
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="1" {{ $blog->status == '1' ? 'checked' : '' }}>
                        Hiển thị
                    </label>
                </div>
            </div>

        </div>
        <div class="row text-center">
            <div class="col-md-12"><button type="submit" style="width: 50%" class="btn btn-primary">Lưu lại</button>
            </div>
        </div>

    </form>
@stop()
