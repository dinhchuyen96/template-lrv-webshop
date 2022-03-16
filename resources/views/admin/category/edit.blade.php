@extends('layouts.admin')
@section('title','Thêm mới danh mục')
@section('main')
<form action="{{route('category.update', $category->id)}}" method="POST" role="form">
    @csrf @method('put')
    <div class="form-group">
        <label for="">Tên danh mục</label>
        <input type="text" class="form-control" name="name" value="{{$category->name}}" placeholder="Input field">
        @error('name') {{$message}} @enderror
    </div>

    <div class="form-group">
        <label for="">Trạng thái</label>
        
        <div class="radio">
            <label>
                <input type="radio" name="status" value="0" {{$category->status == '0' ? 'checked' : ''}}>
                Tạm Ẩn
            </label>
        </div>
         
        <div class="radio">
            <label>
                <input type="radio" name="status" value="1" {{$category->status == '1' ? 'checked' : ''}}>
                Hiển thị
            </label>
        </div>
        
    </div>


    <button type="submit" class="btn btn-primary">Lưu lại</button>
</form>
@stop();