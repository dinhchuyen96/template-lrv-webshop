@extends('layouts.admin')
@section('title', 'Danh sách danh mục')
@section('main')
    <div class="container">
        <hr class="mt-5">
        <h3 class="mt-5">Thông tin chi tiết đơn hàng</h3>
        <form action="{{route('order_status',$order->id)}}" method="post">
            @csrf
            <div class="form-group row">
                <div class="form-group col-md-5">
                    <label for=""></label>
                    <select class="form-control" name="status" id="">
                        <option>Trạng thái</option>
                        <option value="0" {{$order->status == 0 ? 'selected' : ''}}>Chờ Duyệt</option>
                        <option value="1" {{$order->status == 1 ? 'selected' : ''}}>Đã phê duyệt</option>
                        <option value="2" {{$order->status == 2 ? 'selected' : ''}}>Đang giao hàng</option>
                        <option value="3" {{$order->status == 3 ? 'selected' : ''}}>Đã giao thành công</option>
                        <option value="4" {{$order->status == 4 ? 'selected' : ''}}>Hoàn đơn</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
        @if ($order->status == 0)
            <span class="text-primary">Chờ duyệt</span>
        @elseif($order->status == 1)
            <span class="text-info">Đã phê duyệt</span>
        @elseif($order->status == 2)
            <span class="text-success">Đang giao hàng</span>
        @elseif($order->status == 3)
            <span class="text-success">Đã giao thành công</span>
        @elseif($order->status == 4)
            <span class="text-success">Hoàn đơn</span>
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
                        <td><img src="{{ url('uploads') }}/{{ $detail->product->image }}" width="60px"></td>
                        <td>{{ $detail->product->name }}</td>
                        <td>{{ $detail->quantity }}</td>
                        <td>{{ $detail->price }}</td>
                        <td>{{ $detail->quantity * $detail->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <hr>
    {{-- {{$orders->links()}} --}}
@stop()
