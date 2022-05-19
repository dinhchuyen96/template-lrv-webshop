@extends('layouts.admin')
@section('title','Danh sách Banner')
@section('main')
    <a class="btn btn-primary" style="margin-left: 59rem" href="{{ route('brand_sale.create') }}">Thêm mới</a>
<hr>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Logo</th>
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
            <td><img src="{{url('uploads')}}/logo/{{$data->logo}}" style="width: 100px; height: 100px" alt=""></td>
            <td>
                @if($data->status ==0 )
                <label class="badge badge-danger">Tạm ẩn</label>
                @else
                <label class="badge badge-success">Hiển thị</label>
                @endif
            </td>            
            <td>{{$data->created_at ? $data->created_at->format('d/m/Y'):''}}</td>
            <td>
                <form action="{{ route('brand_sale.destroy', $data->id) }}" method="post">
                    @csrf @method('DELETE')
                    <a href="{{ route('brand_sale.edit', $data->id) }}" class="btn btn-primary">Sửa</a>
                    <button class="btn btn-danger" onclick="return confirm('are you sure?')">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr>
{{-- {{$data->links()}} --}}
@stop()