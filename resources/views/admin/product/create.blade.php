@extends('layouts.admin')
@section('title','Thêm mới danh mục')
@section('main')
<form action="{{route('product.store')}}" method="POST" role="form"  enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Danh mục sản phẩm</label>
        <div class="form-group">
          <label for=""></label>
          <select class="form-control" name="category_id" id="">
                <option>Chọn danh mục</option>
                @foreach($pros as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
          </select>
        @error('category_id') {{$message}} @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="Input field">
        @error('name') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Giá</label>
        <input type="text" value="{{old('price')}}" class="form-control" name="price" placeholder="Input field">
        @error('price') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Giá khuyễn mãi</label>
        <input type="text" class="form-control" value="{{old('sale_price')}}" name="sale_price" placeholder="Input field">
        @error('sale_price') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Ảnh</label>
        <input type="file"  class="form-control" name="upload" placeholder="Input field">
        @error('upload') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Trạng thái</label>
        
        <div class="radio">
            <label>
                <input type="radio" name="status" value="0" checked>
                Tạm Ẩn
            </label>
        </div>
         
        <div class="radio">
            <label>
                <input type="radio" name="status" value="1"">
                Hiển thị
            </label>
        </div>
        
    </div>


    <button type="submit" class="btn btn-primary">Lưu lại</button>
</form>
@stop();