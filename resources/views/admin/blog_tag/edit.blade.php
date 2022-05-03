@extends('layouts.admin')
@section('title','Chỉnh sửa blog_tag')
@section('main')
<form action="{{route('blog_tag.update',$blog_tag->id)}}" method="POST" role="form" >
    @csrf @method('put')
    <div class="form-group">
        <label for="">Tag name</label>
        <input type="text" class="form-control" name="tag_name" value="{{$blog_tag->tag_name}}" placeholder="Input field">
        @error('tag_name') {{$message}} @enderror
    </div>
   
    <div class="form-group">
        <label for="">Trạng thái</label>
        
        <div class="radio">
            <label>
                <input type="radio" name="status" value="0" {{$blog_tag->status == '0' ? 'checked' : ''}}>
                Tạm Ẩn
            </label>
        </div>
         
        <div class="radio">
            <label>
                <input type="radio" name="status" value="1" {{$blog_tag->status == '1' ? 'checked' : ''}}>
                Hiển thị
            </label>
        </div>
        
    </div>


    <button type="submit" class="btn btn-primary">Lưu lại</button>
</form>
@stop()