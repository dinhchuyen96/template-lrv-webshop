@extends('layouts.admin')
@section('title','Thêm mới blog')
@section('main')
<form action="{{route('category.store')}}" method="POST" role="form">
    @csrf
    <div class="form-group">
        <label for="">Tên Blog</label>
        <input type="text" class="form-control" name="name" placeholder="Input field">
        @error('name') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Title</label>
        <textarea type="text" id="content_blog" class="form-control" name="title" placeholder="Input field"></textarea>
        @error('title') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Nội dung blog</label>
        <textarea type="text" id="content_blog" class="form-control" name="content" placeholder="Input field"></textarea>
        @error('content') {{$message}} @enderror
    </div>

    <div class="form-group">
        <label for="">Trạng thái</label>
        
        <div class="radio">
            <label>
                <input type="radio" name="status" value="0" >
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