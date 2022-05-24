@extends('admin.layouts.admin')
@section('title', 'Chỉnh sửa banner')
@section('main')
    <form action="{{ route('banner.update', $banner->id) }}" enctype="multipart/form-data" method="POST" role="form">
        @csrf @method('put')
        <div class="row">
            <div class="col-md-6">
                <label for="">Tên banner</label>
                <input type="text" class="form-control" required name="name" value="{{ $banner->name }}"
                    placeholder="Input field">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Thuộc sản phẩm</label>
                <select class="form-control" name="product_id" required id="" value="{{$banner->product_id}}">
                    @foreach ($pros as $pro)
                        <option value="{{$pro->id }}" {{$banner->product_id == $pro->id ? 'selected' : ''}}>{{ $pro->name }}</option>
                    @endforeach
                </select>
                @error('product_id')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="row form-group">
        <div class="col-md-12">
            <label for="">Nội dung title trong slide</label><br>
            <textarea type="text" name="title" id="tinymce1" required placeholder="Nhập title hiển thị trên slide">{{$banner->title}}</textarea>
        </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6"><label for="">Ảnh</label>
                <img src="{{ url('uploads') }}/banner/{{$banner->image_slide}}" alt="" style="width: 280px; height: auto">
                <input type="file" class="form-control" name="upload" placeholder="Input field" accept=".png,.gif,.jpg,.jpeg,.svg">
                @error('upload')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Trạng thái banner</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="0" {{ $banner->status == '0' ? 'checked' : '' }}>
                        Tạm Ẩn
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="1" {{ $banner->status == '1' ? 'checked' : '' }}>
                        Hiển thị
                    </label>
                </div>
            </div>

        </div>
       
        <button type="submit" class="btn btn-primary">Lưu lại</button>
    </form>
@stop()
