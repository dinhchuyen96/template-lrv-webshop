@extends('layouts.admin')
@section('title','Danh sách Banner')
@section('main')
    <a class="btn btn-primary" style="margin-left: 59rem" href="{{ route('banner.create') }}">Thêm mới</a>
<hr>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Banner</th>
            <th>Sản phẩm đại diện</th>
            <th>Ảnh banner</th>
            <th>Title</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_banner as $key => $banner)
        <tr>
            <td>{{$key +1 }}</td>
            <td>{{$banner->name}}</td>
            <td>{{$banner->pro->name}}</td>
            <td><img src="{{url('uploads')}}/banner/{{$banner->image_slide}}" style="width: 100px; height: 100px" alt=""></td>
            <td>{{$banner->title}}</td>
            <td>
                @if($banner->status ==0 )
                <label class="badge badge-danger">Tạm ẩn</label>
                @else
                <label class="badge badge-success">Hiển thị</label>
                @endif
            </td>            
            <td>{{$banner->created_at ? $banner->created_at->format('d/m/Y'):''}}</td>
            <td>
                <form action="{{ route('banner.destroy', $banner->id) }}" method="post">
                    @csrf @method('DELETE')
                    <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-primary">Sửa</a>
                    <button class="btn btn-danger" onclick="return confirm('are you sure?')">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr>
{{$data_banner->links()}}
@stop()