@extends('admin.layouts.admin')
@section('title','Danh sách Brand')
@section('main')
    <a class="btn btn-primary" style="margin-left: 57rem" href="{{ route('brand_sale.create') }}">Thêm mới</a>
<hr>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên thương hiệu</th>
            <th>Danh mục liên quan</th>
            <th>Logo</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key => $data)
        <tr>
            <td>{{$key +1 }}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->cat->name}}</td>
            <td><img src="{{url('uploads')}}/logo/{{$data->logo}}" style="width: 100px; height: 100px" alt=""></td>
            <td>
                <label class="badge {{$data->status == 1 ? 'badge-success':'badge-danger'}} ">{{ $data->status == 1 ? 'Hiển thị' : 'Tạm Ẩn' }}</label>  
            </td>            
            <td>{{$data->created_at ? $data->created_at->format('d/m/Y'):''}}</td>
            <td>
                <form action="{{ route('brand_sale.destroy', $data->id) }}" method="post">
                    @csrf @method('DELETE')
                    <a href="{{ route('brand_sale.edit', $data->id) }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                    <button class="btn btn-danger" onclick="return confirm('are you sure?')"><i class="fas fa-backspace"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr>
{{-- {{$data->links()}} --}}
@stop()