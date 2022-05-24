@extends('admin.layouts.admin')
@section('title', 'Danh sách coupon')
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
            <a class="btn btn-primary" style="margin-left: 20rem" href="{{ route('coupon.create') }}">Thêm mới</a>

        </div>
        </div>
    </form>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên Coupon</th>
                <th>Mã coupon</th>
                <th>Discount</th>
                <th>Bắt đầu áp dụng</th>
                <th>Hạn dùng</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $coupons)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $coupons->name }}</td>
                    <td>{{ $coupons->code }}</td>
                    @if ($coupons->discount_rl)
                        <td> -{{ $coupons->discount_rl }}%</td>
                    @else
                        <td>-{{ $coupons->discount_ab }}$</td>
                    @endif
                    <td>{{ $coupons->begin }}</td>
                    <td>{{ $coupons->end }}</td>
                    <td>
                        <label class="badge {{ $coupons->status == 1 ? 'badge-success' : 'badge-danger' }} ">{{ $coupons->status == 1 ? 'Áp dụng' : 'Hết hạn' }}</label>
                    </td>
                    <td>{{ $coupons->created_at ? $coupons->created_at->format('d/m/Y') : '' }}</td>
                    <td>
                        <form action="{{ route('coupon.destroy', $coupons->id) }}" method="post">
                            @csrf @method('DELETE')
                            <a href="{{ route('coupon.edit', $coupons->id) }}" class="btn btn-primary">Sửa</a>
                            <button class="btn btn-danger" onclick="return confirm('are you sure?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    {{ $data->links() }}
@stop()
