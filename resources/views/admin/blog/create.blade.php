@extends('layouts.admin')
@section('title','Thêm mới blog')
@section('main')
<form action="{{route('blog.store')}}" enctype="multipart/form-data" method="POST" role="form" >
    @csrf
    <div class="form-group">
        <label for="">Blog tag</label>
        <div class="form-group">
          <label for=""></label>
          <select class="form-control" name="tag_id" id="">
              @foreach($blog_tag as $tags)
                <option value="{{$tags->id}}">{{$tags->tag_name}}</option>
            @endforeach;
          </select>
        </div>
        @error('name') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Tên Blog</label>
        <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="Input field">
        @error('name') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Title</label>
        <textarea type="text" id="title" class="form-control" value="{{old('title')}}"  name="title" placeholder="Input field"></textarea>
        @error('title') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Nội dung blog</label>
        <textarea type="text" id="tinymce" name="content" class="form-control" placeholder="Input field">{{old('content')}}</textarea>
        @error('content') {{$message}} @enderror
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