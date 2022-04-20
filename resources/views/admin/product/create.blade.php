@extends('layouts.admin')
@section('title', 'Thêm mới sản phẩm')
@section('main')
    <form action="{{ route('product.store') }}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
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
                <input type="text" style="padding" class="form-control" value="{{ old('name') }}" name="name"
                    placeholder="Nhập tên của sản phẩm">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="">Tóm tắt sản phẩm</label>
            <input type="text" class="form-control" value="{{ old('sort_description') }}" name="sort_description"
                placeholder="Tóm tắt ngắn nội dung sản phẩm">
            @error('sort_description')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="">Mô tả sản phẩm</label>
            <input type="text" class="form-control" value="{{ old('description') }}" name="description"
                placeholder="Mô tả chi tiết sản phẩm">
            @error('description')
                {{ $message }}
            @enderror
        </div>
        <div class="row form-group">
            <div class="col-md-6"><label for="">Giá</label>
                <input type="text" value="{{ old('price') }}" class="form-control" name="price"
                    placeholder="Nhập giá sản phẩm">
                @error('price')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6"> <label for="">Giá khuyễn mãi</label>
                <input type="text" class="form-control" value="{{ old('sale_price') }}" name="sale_price"
                    placeholder="Nhập giá khuyến mãi nếu có">
                @error('sale_price')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="">Ảnh</label>
            <input type="file" class="form-control" name="upload" placeholder="Input field">
            @error('upload')
                {{ $message }}
            @enderror
        </div>
        <div class="row form-group">
            <div class="col-md-4">
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
    }  
 ?>