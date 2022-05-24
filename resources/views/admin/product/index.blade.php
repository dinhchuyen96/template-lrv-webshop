@extends('admin.layouts.admin')
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
            <th>Giá <hr> Sale</th>
            <th>Mô tả</th>
            <th class="text-center">Ảnh</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_product as $key => $value)
        <tr>
            <td>{{$key +1}}</td>
            <td width="5px">{{$value->name}}</td>
            <td>{{$value->p_cat->name}}<hr>{{$value->cat->name}}</td>
            <td>{{number_format($value->price)}} / {{$value->sale_price}}<hr>-{{$value->percent_sale}}%</td>
            <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal-{{ $value->id }}"><i class="fas fa-info-circle"></i></button></td>
            <td><img src="{{url('uploads')}}/products/{{$value->image}}" style="width: 150px; height: 100px"></td>
            <td><label class="badge {{$value->status == 1 ? 'badge-success':'badge-danger'}} ">{{ $value->status == 1 ? 'Hiển thị' : 'Tạm Ẩn' }}</label></td>
            <td>{{$value->created_at ? $value->created_at->format('d/m/Y'): ''}}</td>
            <td>
                <form action="{{ route('product.destroy', $value->id) }}" method="post">
                    @csrf @method('DELETE')
                    <a href="{{ route('product.edit', $value->id) }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                    <button class="btn btn-danger" onclick="return confirm('are you sure?')"><i class="fas fa-backspace"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr>
{{$data_product->links()}}
@foreach ($data_product as $key => $value)
        <div class="modal fade" id="myModal-{{$value->id}}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 90%" role="document">
                <div class="modal-content">
                    <div class="modal-header row">
                        <div class="row">
                            <h2>Tóm tắt:</h2>
                            <br>
                            <div class="col-md-12">{!! $value->sort_description !!}</div>
                        </div>
                        <hr>
                        <br>
                        <div class=row>
                            <h2>Chi tiết:</h2>
                            <br>
                            <div class="col-md-12">{!! $value->description !!}</div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@stop()