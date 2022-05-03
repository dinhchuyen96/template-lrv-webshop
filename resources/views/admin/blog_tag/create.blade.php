@extends('layouts.admin')
@section('title','Thêm mới blog tag')
@section('main')
<form action="{{route('blog_tag.store')}}" method="POST" role="form">
    @csrf
    <div class="form-group">
        <label for="">Tên tag</label>
        <input type="text" class="form-control" name="tag_name" placeholder="Input field">
        @error('tag_name') {{$message}} @enderror
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
 