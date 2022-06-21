@extends('admin.layouts.admin')
@section('title', 'Thêm mới sản phẩm')
@section('main')
    <form action="{{ route('product.store') }}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <div class="row form-group">
            <div class="col-md-6">
                <label for="">Danh mục sản phẩm cha</label>
                <select class="form-control" name="parent_cat" id="" required>
                    <option>Chọn danh mục</option>
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
                <select class="form-control" name="category_id" id="" required>
                    <option value="">Chọn danh mục</option>
                    <?php showCategories($c_cats); ?>
                </select>
                @error('category_id')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="">Tên sản phẩm</label>
                <input type="text" style="padding" class="form-control" value="{{ old('name') }}" name="name" required
                    placeholder="Nhập tên của sản phẩm">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Tồn kho</label>
                <input type="number" name="amout" class="form-control" min="0" value='{{old('amout')}}'  id=""> 
                @error('amout')
                    {{ $message }}
                @enderror
            </div>
           
        </div>
        <div class="form-group">
            <label for="">Tóm tắt sản phẩm</label>
            <textarea id="tinymce_sort" class="form-control" name="sort_description" 
                placeholder="Tóm tắt ngắn nội dung sản phẩm">{{ old('sort_description') }}</textarea>
            @error('sort_description')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="">Mô tả chi tiết</label>
            <textarea id="tinymce" type="text" class="form-control" name="description" 
                    placeholder="Input field"></textarea>
            @error('description')
                {{ $message }}
            @enderror
        </div>
        <script></script>
        <div class="row form-group">
            <div class="col-md-5"><label for="">Giá</label>
                <input type="text" value="{{ old('price') }}" id="price" class="form-control set_price_product" 
                    name="price" placeholder="Nhập giá sản phẩm">
                @error('price')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-2"><label for="">% Sale</label>
                <input type="number" id="percent_sale" value="0|{{ old('percent_sale') }}"
                    class="form-control set_price_product" name="percent_sale" placeholder="Nhập % giảm giá">
                @error('price')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-5"> <label for="">Giá khuyễn mãi</label>
                <input type="text" class="form-control" id="sale_price" value="{{ old('sale_price') }}"
                    name="sale_price" placeholder="Nhập giá khuyến mãi nếu có">
                @error('sale_price')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="">Ảnh</label>
            <input type="file" class="form-control" name="upload" placeholder="Input field"
                accept=".png,.gif,.jpg,.jpeg,.svg">
            @error('upload')
                {{ $message }}
            @enderror
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <label for="">Trạng thái</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="0">
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
        {{-- <textarea name="hungtt" id="text" cols="30" rows="10"></textarea> --}}
        <div class="row text-center">
            <div class="col-md-12"><button type="submit" style="width: 50%" class="btn btn-primary">Lưu lại</button>
            </div>
        </div>
    </form>
@stop()
@section('script')
    <script>
        CKEDITOR.replace('hungtt', {
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
            filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
            filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
            filebrowserUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
            filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
            filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
        });
    </script>
@stop
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
