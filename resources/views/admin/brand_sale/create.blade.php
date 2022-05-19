@extends('layouts.admin')
@section('title', 'Thêm mới brand sale')
@section('main')
    <form action="{{ route('brand_sale.store') }}" enctype="multipart/form-data" method="POST" role="form">
        @csrf
        <div class="form-group row">
            <div class="col-md-6">
                <label for="">Tên thương hiệu</label>
                <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Input field" required>
                @error('name')
                    {{ $message }}
                @enderror
            </div>  
            <div class="col-md-6">
                <label for="">Danh mục liên quan</label>
                <div class="form-group">
                    <select class="form-control" name="category_id" id="" required>
                      <option value="">Chọn danh mục</option>
                      @foreach($cats as $cat)
                      @foreach ($cat->children as $ccat)
                        <option value="{{$ccat->id }}">{{ $ccat->name }}</option>
                        @endforeach
                      @endforeach
                    </select>
                  </div>
                @error('product_id')
                    {{ $message }}
                @enderror
            </div>          
        </div>        
        <div class=" form-group">
            <label for="">Logo</label>
            <input type="file" class="form-control" name="upload" placeholder="Input field" required>
            @error('upload')
                {{ $message }}
            @enderror
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label for="">Trạng thái</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="0" checked>
                        Tạm Ẩn
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="1">
                        Hiển thị
                    </label>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center"><button style="width: 50%" type="submit" class="btn btn-primary">Lưu
                    lại</button></div>
        </div>

    </form>
@stop()
