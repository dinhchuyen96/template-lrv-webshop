@extends('layouts.admin')
@section('title','Chỉnh sửa sản phẩm')
@section('main')
<form action="{{route('product.update', $product->id)}}" enctype="multipart/form-data" method="POST" role="form">
    @csrf @method('put')
    <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" name="name" value="{{$product->name}}" placeholder="Input field">
        @error('name') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Danh mục sản phẩm</label>
        <div class="form-group">
          <label for=""></label>
          <select class="form-control"  value="{{$product->category_id}}" name="category_id" id="">
                <option>Chọn danh mục</option>
                @foreach($pros as $cat)
                <option value="{{ $cat->id }}" {{$cat->id == $product->category_id ? 'selected' : '' }}>{{ $cat->name }}</option> 
                @endforeach
          </select>
        @error('category_id') {{$message}} @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="">Giá</label>
        <input type="text" class="form-control"  value="{{$product->price}}" name="price" placeholder="Input field">
        @error('price') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Giá khuyễn mãi</label>
        <input type="text" class="form-control"  value="{{$product->sale_price}}" name="sale_price" placeholder="Input field">
        @error('sale_price') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Ảnh</label>
        <img src="{{url('uploads')}}/{{$product->image}}" alt="" style="width: 280px; height: auto">
        <input type="file" class="form-control"  name="upload" placeholder="Input field">
        @error('upload') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Trạng thái</label>
        
        <div class="radio">
            <label>
                <input type="radio" name="status" value="0" {{$product->status == '0' ? 'checked' : ''}}>
                Tạm Ẩn
            </label>
        </div>
         
        <div class="radio">
            <label>
                <input type="radio" name="status" value="1" {{$product->status == '1' ? 'checked' : ''}}>
                Hiển thị
            </label>
        </div>
        
    </div>


    <button type="submit" class="btn btn-primary">Lưu lại</button>
</form>
@stop();