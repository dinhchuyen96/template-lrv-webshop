@extends('layouts.admin')
@section('title','Danh sách danh mục')
@section('main')
<form class="form-inline ml-3" method="get">
    <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" style="width:350px" placeholder="Search" name="search">
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>
<hr>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Giá/Giá sale</th>
            <th>Ảnh</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key => $model)
        <tr>
            <td>{{$key +1}}</td>
            <td>{{$model->name}}</td>
            <td>{{$model->price}}/{{$model->sale_price}}</td>
            <td><img src="{{url('uploads')}}/{{$model->image}}" alt="" style="width: 100px; height: 100px"></td>
            <td>
                @if($model->status ==0 )
                <label class="badge badge-danger">Tạm ẩn</label>
                @else
                <label class="badge badge-success">Hiển thị</label>
                @endif
            </td>

            <td>{{$model->created_at ? $model->created_at->format('d/m/Y'): ''}}</td>
            <td>
                <form action="{{ route('product.destroy', $model->id) }}" method="post">
                    @csrf @method('DELETE')
                    <a href="{{ route('product.edit', $model->id) }}" class="btn btn-primary">Sửa</a>
                    <button class="btn btn-danger" onclick="return confirm('are you sure?')">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr>
{{$data->links()}}
@stop();