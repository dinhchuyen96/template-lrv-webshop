@extends('layouts.admin')
@section('title','Thêm mới coupon')
@section('main')
<form action="{{route('coupon.store')}}" method="POST" role="form">
    @csrf
    <div class="form-group">
        <label for="">Tên Coupon</label>
        <input type="text" class="form-control" name="name" placeholder="Input field">
        @error('name') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Discount - %</label>
        <input type="number" class="form-control" name="discount" placeholder="Input field">
        @error('discount') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Mã coupon</label>
        <input type="text" class="form-control" name="code" placeholder="Input field">
        @error('code') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Thời gian bắt đầu áp dụng</label>
        <input type="date" class="form-control" name="begin" placeholder="Input field">
        @error('begin') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Hết hạn:</label>
        <input type="date" class="form-control" name="end" placeholder="Input field">
        @error('end') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Trạng thái</label>
        
        <div class="radio">
            <label>
                <input type="radio" name="status" value="0" >
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


    <button type="submit" class="btn btn-primary">Lưu lại</button>
</form>
@stop()
 <?php function showCategories($categories, $parent_id = 0, $char = '')
 {
     foreach ($categories as $key => $item)
     {
         // Nếu là chuyên mục con thì hiển thị
         if ($item->parent_id == $parent_id)
         {
             // Xử lý hiển thị chuyên mục
              echo '<option value="'.$item->id.'">'.$char.$item->name.'</option>';
             // Xóa chuyên mục đã lặp
             unset($categories[$key]);
             // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
             showCategories($categories, $item->id, $char.'|---');
         }
     }
 } ?>