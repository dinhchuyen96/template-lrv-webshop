@extends('layouts.admin')
@section('title', 'Thêm mới danh mục')
@section('main')
    <form action="{{ route('product.store') }}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <div class="row form-group">
            <div class="col-md-6"><label for="">Danh mục sản phẩm</label>
                <div class="form-group">
                    <label for=""></label>
                    <select class="form-control" name="category_id" id="">
                        <option>Chọn danh mục</option>
                        @foreach ($pros as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="col-md-6"><label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" value="{{ old('name') }}" name="name"
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
                <div class="  col-md-4">
                        <label for="">Đặt làm slide</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="take_slide" value="0" checked>
                                Tạm Ẩn
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="take_slide" value="1"">
                            Hiển thị
                        </label>
                    </div>
                 </div>
                 <div class="  col-md-4">
                                <label for="">Nội dung title trong slide</label>
                                <input size="41.5" type="text" name="title_slide" id=""
                                    placeholder="Nhập title hiển thị trên slide">
                        </div>

                </div>



                <button type="submit" class="btn btn-primary">Lưu lại</button>
    </form>
@stop();
