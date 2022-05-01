@extends('layouts.admin')
@section('title','Danh sách Blog')
@section('main')
<form class="form-inline ml-3" method="get">
    <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" style="width: 406px; margin-left: 2.8rem;" placeholder="Search" name="search">
        <div class="input-group-append">
            <button class="btn btn-warning" style="height: 31px; width:120px" type="submit">
                <p>Search</p>
            </button>
        </div>
        <div></div>
           
        <a class="btn btn-primary" style="margin-left: 20rem" href="{{ route('blog.create')}}">Thêm mới</a>
            
        </div>
    </div>
</form>
<hr>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Tên Blog</th>
            <th>Nội dung</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key => $value)
     <tr>
         <td>{{$key +1 }}</td>
         <td>{{$value->name}}</td>
         <td>{{$value->content}}</td>
         <td>{{$value->status}}</td>
         <td>{{$value->created_at}}</td>
         <td></td>
     </tr>
     @endforeach
    </tbody>
</table>
<hr>
{{$data->links()}}
@stop()
