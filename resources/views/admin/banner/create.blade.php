@extends('admin.layouts.admin')
@section('title', 'Thêm mới Banner')
@section('main')
    <form action="{{ route('banner.store') }}" enctype="multipart/form-data" method="POST" role="form">
        @csrf
        <div class="form-group row">
            <div class="col-md-6">
                <label for="">Tên Banner</label>
                <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Input field" required>
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Sản phẩm đại diện</label>
                <div class="form-group">
                    <select class="form-control" name="product_id" id="" required>
                      <option value="">Chọn sản phẩm</option>
                      @foreach($pros as $pros)
                        <option value="{{$pros->id }}">{{ $pros->name }}</option>
                      @endforeach
                    </select>
                  </div>
                @error('product_id')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-12">
                <label for="">SLIDE Title</label><br>
                <textarea id="tinymce1" type="text" name="title" placeholder="Nhập title hiển thị trên slide"></textarea >
                <div style="color: red;">
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class=" form-group">
            <label for="">Ảnh</label>
            <input type="file" class="form-control" name="upload" placeholder="Input field" accept=".png,.gif,.jpg,.jpeg,.svg">
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
            <div class="col-md-12 text-center"><button style="width: 50%" type="submit"  class="btn btn-primary">Lưu
                    lại</button></div>
        </div>

    </form>
@stop()
