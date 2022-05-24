@extends('admin.layouts.admin')
@section('title', 'Thêm mới coupon')
@section('main')
    <form action="{{ route('coupon.store') }}" method="POST" role="form">
        @csrf
        <div class="form-group">
            <label for="">Tên Coupon</label>
            <input type="text" class="form-control" name="name" placeholder="Input field" required>
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group row">
            <div class="col-md-4"><label for="">Mã coupon</label>
                <input type="text" class="form-control" name="code" placeholder="Input field" required> 
                @error('code')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-4"><label for="">Discount - %</label>
                <input type="number" class="form-control" name="discount_rl" placeholder="Input field">
                @error('discount')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-4"><label for="">Discount - $</label>
                <input type="number" class="form-control" name="discount_ab " placeholder="Input field">
                @error('discount')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6"><label for="">Thời gian bắt đầu áp dụng</label>
                <input type="date" class="form-control" name="begin" placeholder="Input field">
                @error('begin')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6"> <label for="">Hết hạn:</label>
                <input type="date" class="form-control" name="end" placeholder="Input field">
                @error('end')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="0">
                    Hết hạn
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="1" checked>
                    Áp dụng
                </label>
            </div>

        </div>
        <div class="row text-center">
            <div class="col-md-12"><button type="submit" style="width: 50%" class="btn btn-primary">Lưu lại</button>
            </div>
        </div>
    </form>
@stop()
