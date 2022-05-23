@extends('admin.layouts.admin')
@section('title', 'Thêm mới blog tag')
@section('main')
    <form action="{{ route('blog_cat.store') }}" method="POST" role="form">
        @csrf
        <div class="form-group">
            <label for="">Tên tag</label>
            <input type="text" class="form-control" name="name" placeholder="Input field">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
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
        <div class="row text-center">
            <div class="col-md-12"><button type="submit" style="width: 50%" class="btn btn-primary">Lưu lại</button>
            </div>
        </div>
    </form>
@stop()
