@extends('layouts.admin')
@section('title', 'Thêm mới Banner')
@section('main')
    <form action="{{ route('banner.store') }}" enctype="multipart/form-data" method="POST" role="form">
        @csrf
        <div class="form-group">
            <label for="">Tên Banner</label>
            <input type="text" class="form-control" value="{{ old('name')}}"name="name" placeholder="Input field">
            @error('name')
                {{$message}}
            @enderror
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label for="">Thuộc sản phẩm</label>
                <select class="form-control" name="product_id" id="">
                    <option>Chọn sản phẩm</option>
                    @foreach ($pros as $pro)
                        <option value="{{ $pro->id}}">{{$pro->name}}</option>
                    @endforeach
                </select>
                @error('product_id')
                    {{ $message }}
                @enderror
            </div>                      
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
                        <input type="radio" name="status" value="1"">
                        Hiển thị
                    </label>
                </div></div>
                <div class="col-md-6"> 
                    <label for="">Nội dung title trong slide</label><br>
                    <input size="41.5" type="text" name="title" id="" placeholder="Nhập title hiển thị trên slide">
                </div>

            </div>
            <div class=" form-group">
                <label for="">Ảnh</label>
                <input type="file" class="form-control" name="upload" placeholder="Input field">
                @error('upload')
                    {{ $message }}
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Lưu lại</button>
    </form>
@stop();
