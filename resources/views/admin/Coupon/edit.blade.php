@extends('layouts.admin')
@section('title', 'Chỉnh sửa Coupon')
@section('main')
    <form action="{{ route('coupon.update', $coupon->id) }}" method="POST" role="form">
        @csrf @method('put')
        <div class="form-group row">
            <div class="col-md-6">
                <label for="">Tên coupon</label>
                <input type="text" class="form-control" name="name" value="{{ $coupon->name }}"
                    placeholder="Input field">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Mã coupon</label>
                <input type="text" class="form-control" name="code" value="{{ $coupon->code }}"
                    placeholder="Input field">
                @error('code')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="">Discount - $</label>
                <input type="number" class="form-control" name="discount_ab" value="{{ $coupon->discount_ab }}"
                    placeholder="Input field">
                @error('discount')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Discount - %</label>
                <input type="number" class="form-control" name="discount_rl" value="{{ $coupon->discount_rl}}"
                    placeholder="Input field">
                @error('discount')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="">Bắt đầu áp dụng:</label>
                <input type="date" class="form-control" name="begin" value="{{ $coupon->begin }}"
                    placeholder="Input field">
                @error('begin')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-4">
                <label for="">Hết hạn:</label></label>
                <input type="date" class="form-control" name="end" value="{{ $coupon->end }}"
                    placeholder="Input field">
                @error('end')
                    {{ $message }}
                @enderror
            </div>
            <div class="text-center col-md-4">
                <label for="">Trạng thái</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="0" {{ $coupon->status == '0' ? 'checked' : '' }}>
                        Hết hạn
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="1" {{ $coupon->status == '1' ? 'checked' : '' }}>
                        Áp dụng
                    </label>
                </div>
            </div>

        </div>
        <div class="text-center mt-5 row">
            <div class="col-md-12"><button type="submit" style="width:400px" class="btn btn-primary">Lưu lại</button></div>
            
        </div>
        
    </form>
@stop()
