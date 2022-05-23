@extends('admin.layouts.admin')
@section('title','Comment in blog')
@section('main')
<form class="form-inline ml-3" method="get">
    <div class="input-group input-group-sm">
        <input class=" form-control form-control-navbar" type="search" style="margin-left:-1rem;width:407px" placeholder="Tìm kiếm đơn hàng" name="search">
        <div class="input-group-append">
            <button class="btn btn-warning" style="height: 31px; width:120px" type="submit">
                <p>Search</p>
            </button>
        </div>
    </div>
</form>
<hr>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên Blog</th>
                <th>Tên người gửi</th>
                <th class="text-center">Email</th>
                <th class="text-center">Nội dung</th>
                <th>Webside</th>
                <th>Ngày gửi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($comments as $comments)
            <tr>
                <td>{{$comments->id}}</td>
                <td>
                    <a href="">{{ $comments->blog_name->name }}</a>
                </td>
                <td>{{$comments->name}}</td>
                <td>{{$comments->email }}</td>
                <td>{{$comments->comment}}</td>
                <td>{{$comments->webside}}</td>
                <td>{{$comments->created_at }}</td>
                <td>
                    <form action="{{ route('comment.destroy', $comments->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('are you sure?')">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<hr>
{{-- {{$comments->links()}} --}}
@stop()