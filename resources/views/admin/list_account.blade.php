@extends('admin.layouts.admin')
@section('title', 'Tài khoản người dùng')
@section('main')

    <table class="table table">
        <tr>
            <th>#</th>
            <th>Họ tên</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Trạng thái</th>
            <th>Ngày đăng ký</th>
            <th>Hành động</th>
        </tr>
        @foreach ($account as $account)
            <tr>
                <td>{{ $loop->index }}</td>
                <td style="text-align: start; padding-left: 3rem;"><a href="{{ route('admin.account_detail', $account->id) }}">{{ $account->sex }} {{ $account->first_name }} {{ $account->last_name }}</a></td>
                <td>0{{ $account->phone }}</td>
                <td>{{ $account->email }}</td>
                <td><label
                        class="badge {{ $account->status == 1 ? 'badge-success' : 'badge-danger' }} ">{{ $account->status == 1 ? 'Hoạt động' : 'Tạm khóa' }}</label>
                </td>
                <td>{{ $account->created_at }}</td>
                <td><a href="{{ route('admin.account_detail', $account->id) }}" title="Xem chi tiết đơn hàng" type="button" class="btn btn-info"><i
                    class="fas fa-info-circle"></i></a>
                    @if($account->status == 1)
                        <a href="{{ route('admin.account_lock',$account->id) }}" onclick="return confirm('Bạn muốn khóa tài khoản này?')" class="btn btn-danger"><i class="fas fa-lock" aria-hidden="true"></i></a>
                    @elseif ($account->status == 2)
                        <a href="{{ route('admin.account_unlock',$account->id) }}" onclick="return confirm('Bạn muốn mở khóa tài khoản này?')" class="btn btn-success"><i class="fas fa-unlock" aria-hidden="true"></i></a>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>

@stop()
