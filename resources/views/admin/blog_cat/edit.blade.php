@extends('admin.layouts.admin')
@section('title', 'Chỉnh sửa blog category')
@section('main')
    <form action="{{ route('blog_cat.update', $blog_cat->id) }}" method="POST" role="form">
        @csrf @method('put')
        <div class="form-group">
            <label for="">Tag name</label>
            <input type="text" class="form-control" name="blog_cat" value="{{ $blog_cat->name }}"
                placeholder="Input field">
            @error('blog_cat')
                {{ $message }}
            @enderror
        </div>

        <div class="form-group">
            <label for="">Trạng thái</label>

            <div class="radio">
                <label>
                    <input type="radio" name="status" value="0" {{ $blog_cat->status == '0' ? 'checked' : '' }}>
                    Tạm Ẩn
                </label>
            </div>

            <div class="radio">
                <label>
                    <input type="radio" name="status" value="1" {{ $blog_cat->status == '1' ? 'checked' : '' }}>
                    Hiển thị
                </label>
            </div>

        </div>
        <div class="row text-center">
            <div class="col-md-12"><button type="submit" style="width: 50%" class="btn btn-primary">Lưu lại</button>
            </div>
        </div>
    </form>
@stop()
