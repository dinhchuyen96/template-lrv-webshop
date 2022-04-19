@extends('layouts.admin')
@section('title','Thêm mới danh mục')
@section('main')
<form action="{{route('category.update', $category->id)}}" method="POST" role="form">
    @csrf @method('put')
    <div class="form-group">
        <label for="">Tên danh mục</label>
        <input type="text" class="form-control" name="name" value="{{$category->name}}" placeholder="Input field">
        @error('name') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Danh mục cha</label>
        <div class="form-group">
          <label for=""></label>
          <select class="form-control" name="parent_id" id="">
            <option value="0">Parent</option>
            <?php showCategories($categories); ?>
          </select>
        </div>
    </div>

    <div class="form-group">
        <label for="">Trạng thái</label>
        
        <div class="radio">
            <label>
                <input type="radio" name="status" value="0" {{$category->status == '0' ? 'checked' : ''}}>
                Tạm Ẩn
            </label>
        </div>
         
        <div class="radio">
            <label>
                <input type="radio" name="status" value="1" {{$category->status == '1' ? 'checked' : ''}}>
                Hiển thị
            </label>
        </div>
        
    </div>


    <button type="submit" class="btn btn-primary">Lưu lại</button>
</form>
@stop();
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