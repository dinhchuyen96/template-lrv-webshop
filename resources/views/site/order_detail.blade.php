@extends('layouts.site')
@section('title', 'cart')
@section('main')
    <div class="container">
        <hr class="mt-5">
        <h3 class="mt-5">Thông tin chi tiết đơn hàng</h3>
            @if ($order->status == 0)
                <span class="btn btn-primary">Chờ xác nhận</span>
            @elseif($order->status == 1)
                <span class="btn btn-info">Đã xác nhận</span>
            @elseif($order->status == 2)
                <span class="btn btn-warning">Đang giao hàng</span>
            @elseif($order->status == 3)
                <span class="btn btn-success">Đã giao thành công</span>
            @elseif($order->status == 4)
                <span class="btn btn-danger">Hoàn đơn</span>
            @endif
        <div class="row mt-5">
            <div class="col-md-6">
                <h3>Thông tin người mua</h3>
                <table class="table table-hover mt-3">
                    <thead>
                        <tr>
                            <th>Họ tên</th>
                            <th>{{ $order->account->first_name }} {{ $order->account->last_name }} </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Điện thoại</td>
                            <td>{{ $order->account->phone }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $order->account->email }}</td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td>{{ $order->account->address }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h3>Thông tin người nhận</h3>
                <table class="table table-hover  mt-3">
                    <thead>
                        <tr>
                            <th>Họ tên</th>
                            <th>{{ $order->first_name }} {{ $order->last_name }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Điện thoại</td>
                            <td>{{ $order->phone }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $order->email }}</td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td>{{ $order->address }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <h3>Thông tin sản phẩm</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->details as $detail)
                    <tr>
                        <td>1</td>
                        <td><a href="{{route('home.product',['product'=>$detail->product->id,'slug'=>Str::slug($detail->product->name)])}}"><img src="{{ url('uploads') }}/{{ $detail->product->image }}" width="60px"></a></td>
                        <td><a href="{{route('home.product',['product'=>$detail->product->id,'slug'=>Str::slug($detail->product->name)])}}">{{ $detail->product->name}}</a></td>
                        <td>{{ $detail->quantity }}</td>
                        <td>{{ $detail->price }}</td>
                        <td>{{ $detail->quantity * $detail->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop()
