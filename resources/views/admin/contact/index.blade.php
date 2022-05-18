@extends('layouts.admin')
@section('title', 'Danh sách liên hệ')
@section('main')
    <form class="form-inline ml-3" method="get">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" style="width: 406px; margin-left: 2.8rem;"
                placeholder="Search" name="search">
            <div class="input-group-append">
                <button class="btn btn-warning" style="height: 31px; width:120px" type="submit">
                    <p>Search</p>
                </button>
            </div>
            <a class="btn btn-primary" style="margin-left: 20rem" href="{{ route('contact.create') }}">Thêm mới</a>
        </div>
        </div>
    </form>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Fax</th>
                <th>Trạng thái</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($contact as $contact)
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{ $contact->address_1}} - {{$contact->address_2 }}</td>
                    <td>{{ $contact->email_1 }}<br>{{ $contact->email_2 }}</td>
                    <td> {{ $contact->phone_1 }} <br>{{ $contact->phone_2 }}</td>
                    <td>{{ $contact->fax_1 }} <br>{{ $contact->fax_2 }}</td>
                    <td>
                        @if($contact->status ==0 ) 
                            <label class="badge badge-danger">Tạm ẩn</label>
                        @else 
                            <label class="badge badge-success">Hiển thị</label>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('contact.destroy', $contact->id) }}" method="post">
                            @csrf @method('DELETE')
                            <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-primary">Sửa</a>
                            <button class="btn btn-danger" onclick="return confirm('are you sure?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach 
        </tbody>
    </table>
@stop()
