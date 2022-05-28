@extends('admin.layouts.admin')
@section('title', 'Chỉnh sửa sản phẩm')
@section('main')
    <form action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data" method="POST" role="form">
        @csrf @method('put')
        <div class="row form-group">
            <div class="col-md-6">
                <label for="">Danh mục sản phẩm cha</label>
                <select class="form-control" name="parent_cat" id="" value="{{ $product->parent_cat }}" required>
                    <option value="{{ $product->parent_cat }}">{{ $product->p_cat->name }}</option>
                    @foreach ($p_cats as $key => $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
                @error('parent_cat')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Danh mục sản phẩm con</label>
                <select class="form-control" name="category_id" id="" value="{{ $product->category_id }}" required>
                    <option value="{{ $product->category_id }}">{{ $product->cat->name }}</option>
                    <?php showCategories($c_cats); ?>
                </select>
                @error('category_id')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" value="{{ $product->name }}" required
                    placeholder="Input field">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Số lượng đã bán</label>
                <input type="number" class="form-control"
                    name="number_sale" value="{{ $product->number_sale }}" placeholder="Input field">
                @error('number_sale')
                    {{ $message }}
                @enderror
            </div>

        </div>
        <div class="row form-group">
            <div class="col-md-5">
                <label for="">Giá</label>
                <input type="text" class="form-control set_price_product" id="price" value="{{ $product->price }}"
                    required name="price" placeholder="Input field">
                @error('price')
                    {{ $message }}
                @enderror
            </div>

            <div class="col-md-2"><label for="">% Sale</label>
                <input type="number" value="{{ old('percent_sale') }}" id="percent_sale"
                    class="form-control set_price_product" name="percent_sale" placeholder="Nhập % giảm giá">
                @error('price')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-5">
                <label for="">Giá khuyễn mãi</label>
                <input type="text" class="form-control" id="sale_price" value="{{ $product->sale_price }}"
                    name="sale_price" placeholder="Input field">
                @error('sale_price')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <label for="">Mô tả chi tiết</label>
                <textarea id="tinymce" type="text" class="form-control" name="description" required
                    placeholder="Input field">{{ $product->description }}</textarea>
                @error('description')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-8">
                <label for="">Mô tả ngắn gọn</label>
                <textarea id="tinymce_sort" type="text" class="form-control" name="sort_description" required
                    placeholder="Input field">{{ $product->sort_description }}</textarea>
                @error('sort_description')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-4 mt-4">
                <label for="">Ảnh</label>
                <img src="{{ url('uploads') }}/products/{{ $product->image }}" alt=""
                    style="width: 280px; height: auto">
                <input type="file" class="form-control" name="upload" placeholder="Input field"
                    accept=".png,.gif,.jpg,.jpeg,.svg">
                @error('upload')
                    {{ $message }}
                @enderror
            </div>
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
        </div>
        <div class="row text-center">
            <div class="col-md-12"><button type="submit" style="width: 50%" class="btn btn-primary">Lưu lại</button>
            </div>
        </div>
    </form>
@stop()
<?php
function showCategories($categories, $parent_id = 0, $char = '')
{
    foreach ($categories as $key => $item) {
        // Nếu là chuyên mục con thì hiển thị
        if ($item->parent_id == $parent_id) {
            // Xử lý hiển thị chuyên mục
            echo '<option value="' . $item->id . '">' . $char . $item->name . '</option>';
            // Xóa chuyên mục đã lặp
            unset($categories[$key]);
            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            showCategories($categories, $item->id, $char . '---');
        }
    }
}
?>
