@extends('layouts.admin')
@section('title', 'Chỉnh sửa sản phẩm')
@section('main')
    <form action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data" method="POST" role="form">
        @csrf @method('put')
        <div class="row form-group">
            <div class="col-md-6">
                <label for="">Danh mục sản phẩm cha</label>
                <select class="form-control" name="parent_cat" id="">
                    <option>Chọn danh mục</option>
                    <?php showCategories1($cats); ?>
                </select>
                @error('parent_cat')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Danh mục sản phẩm con</label>
                <select class="form-control" name="category_id" id="">
                    <option>Chọn danh mục</option>
                    <?php showCategories($pro_cats); ?>
                </select>
                @error('category_id')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" value="{{ $product->name }}"
                    placeholder="Input field">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label for="">Giá</label>
                <input type="text" class="form-control" value="{{ $product->price }}" name="price"
                    placeholder="Input field">
                @error('price')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Giá khuyễn mãi</label>
                <input type="text" class="form-control" value="{{$product->sale_price}}" name="sale_price"
                    placeholder="Input field">
                @error('sale_price')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label for="">Mô tả ngắn gọn</label>
                <input type="text" class="form-control" value="{{ $product->sort_description }}" name="sort_description"
                    placeholder="Input field">
                @error('sort_description')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Mô tả chi tiết</label>
                <input type="text" class="form-control" value="{{ $product->description }}" name="description"
                    placeholder="Input field">
                @error('description')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="">Ảnh</label>
            <img src="{{ url('uploads') }}/{{ $product->image }}" alt="" style="width: 280px; height: auto">
            <input type="file" class="form-control" name="upload" placeholder="Input field">
            @error('upload')
                {{ $message }}
            @enderror
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <label for="">Trạng thái sản phẩm</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="0" {{ $product->status == '0' ? 'checked' : '' }}>
                        Tạm Ẩn
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="1" {{ $product->status == '1' ? 'checked' : '' }}>
                        Hiển thị
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu lại</button>
    </form>
@stop();
<?php function showCategories1($categories, $parent_id = 0, $char = '')
{
    foreach ($categories as $key => $item)
    {
        // Nếu là chuyên mục con thì hiển thị
        if ($item->parent_id == $parent_id)
        {
            // Xử lý hiển thị chuyên mục
            echo '<option value="'.$item->id.'">'.$char.$item->name.'</option>';
            // Xóa chuyên mục đã lặp
            unset($categories[$key]);
        }
    }
};
function showCategories($categories, $parent_id = 0, $char = '')
{
    foreach ($categories as $key => $item)
    {
        // Nếu là chuyên mục con thì hiển thị
        if ($item->parent_id == $parent_id)
        {
            // Xử lý hiển thị chuyên mục
            echo '<option value="'.$item->id.'">'.$char.$item->name.'</option>';
            // Xóa chuyên mục đã lặp
            unset($categories[$key]);
            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            showCategories($categories, $item->id, $char.'---');
        }
    }
}   ?>
