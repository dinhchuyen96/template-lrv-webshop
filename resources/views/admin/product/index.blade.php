@extends('layouts.admin')
@section('title','Danh sách sản phẩm')
@section('main')
<form class="form-inline ml-3" method="get">
    <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" style="margin-left: -1rem;width:329px; height: 34px" placeholder="Tìm kiếm sản phẩm" name="search">
    </div>
    <div class="input-group input-group-sm ml-2">
        <div class="form-group">          
          <select class="form-control" style="height: 34px;width: 135px;margin-left: -10px;" name="cat_id" id="">
            <option value=>Danh mục</option>
            @foreach($pro_cats as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="input-group-append">
            <button class="btn btn-warning" style="height: 33px; width:203px;margin-top: 2px;" type="submit">
                <p>Search</p>
            </button>           
        </div> 
        <a class="btn btn-primary" style="margin-left: 16rem" href="{{ route('product.create')}}">Thêm mới</a>
    </div>
</form>
<hr>
<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width:10px">#</th>
            <th style="width:200px">Tên sản phẩm</th>
            <th style="width:50px">Danh mục</th>
            <th>Giá / Sale</th>
            <th class="text-center">Ảnh</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_product as $key => $model)
        <tr>
            <td>{{$key +1}}</td>
            <td width="5px">{{$model->name}}</td>
            <td>{{$model->cat->name}}</td>
            <td>{{number_format($model->price)}} / {{$model->sale_price}}<br><br>-{{$model->percent_sale}}%</td>
            <td><img src="{{url('uploads')}}/{{$model->image}}" alt="" style="width: 150px; height: 100px"></td>
            <td>
                @if($model->status ==0 )
                <label class="badge badge-danger"><h5>Tạm ẩn</h5></label>
                @else
                <label class="badge badge-success"><h5>Hiển thị</h5></label>
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
{{$data_product->links()}}
@stop();