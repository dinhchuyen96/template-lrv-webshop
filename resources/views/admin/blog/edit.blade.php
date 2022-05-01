@extends('layouts.admin')
@section('title','chỉnh sửa blog')
@section('main')
<form action="{{route('blog.update', $blog->id)}}" method="POST" role="form">
    @csrf @method('put')
    <div class="form-group">
        <label for="">Nội dung blog</label>
        <textarea type="text" class="form-control" id="content_blog" name="content" value="{{$blog->content}}" placeholder="Input field">
        @error('content') {{$message}} @enderror
    </div>    
    <div class="form-group">
        <label for="">Trạng thái</label>
        
        <div class="radio">
            <label>
                <input type="radio" name="status" value="0" {{$blog->status == '0' ? 'checked' : ''}}>
                Tạm Ẩn
            </label>
        </div>         
        <div class="radio">
            <label>
                <input type="radio" name="status" value="1" {{$blog->status == '1' ? 'checked' : ''}}>
                Hiển thị
            </label>
        </div>
        
    </div>
    <button type="submit" class="btn btn-primary">Lưu lại</button>
</form>
@stop()