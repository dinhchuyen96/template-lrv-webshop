@extends('admin.layouts.admin')
@section('title', 'Chỉnh sửa Brand Sale')
@section('main')
    <form action="{{ route('brand_sale.update', $brand_sale->id) }}" enctype="multipart/form-data" method="POST" role="form" >
        @csrf @method('put')
        <div class="row">
            <div class="col-md-6">
                <label for="">Tên Brand_sale</label>
                <input type="text" class="form-control" name="name" value="{{ $brand_sale->name }}"
                    placeholder="Input field" required>
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Danh mục liên quan</label>
                <div class="form-group">
                    <select class="form-control" name="category_id" id="" required>
                      <option value="{{$brand_sale->category_id}}">{{$brand_sale->cat->name}}</option>
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
        <div class="row form-group">
            <div class="col-md-6"><label for="">Ảnh</label>
                <img src="{{ url('uploads') }}/logo/{{$brand_sale->logo}}" alt="" style="width: 280px; height: auto">
                <input type="file" class="form-control" name="upload" placeholder="Input field" accept=".png,.gif,.jpg,.jpeg,.svg">
                @error('upload')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Trạng thái brand_sale</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="0" {{ $brand_sale->status == '0' ? 'checked' : '' }}>
                        Tạm Ẩn
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="1" {{ $brand_sale->status == '1' ? 'checked' : '' }}>
                        Hiển thị
                    </label>
                </div>
            </div>

        </div>
       
        <button type="submit" class="btn btn-primary">Lưu lại</button>
    </form>
@stop()
