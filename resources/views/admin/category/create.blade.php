@extends('layouts.admin')
@section('title','Thêm mới danh mục')
@section('main')
<form action="{{route('category.store')}}" method="POST" role="form">
    @csrf
    <div class="form-group">
        <label for="">Tên danh mục</label>
        <input type="text" class="form-control" name="name" placeholder="Input field">
        @error('name') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Danh mục cha</label>
        <div class="form-group">
          <label for=""></label>
          <select class="form-control" name="parent_id" id="">
            <option value="0">Parent</option>
            <?php showCategories($category); ?>
          </select>
        </div>
        @error('name') {{$message}} @enderror
    </div>

    <div class="form-group">
        <label for="">Trạng thái</label>
        
        <div class="radio">
            <label>
                <input type="radio" name="status" value="0" >
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