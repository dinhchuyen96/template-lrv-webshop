@extends('admin.layouts.admin')
@section('title', 'Thông tin chi tiết đơn hàng')
@section('main')
    <div class="container">
        <h3 class="mt-5">Trạng thái đơn hàng</h3>
        <form action="{{ route('order_status', $order->id) }}" method="post">
            @csrf
            <div class="form-group row">
                <div class="form-group col-md-5">
                    <label for=""></label>
                    <select class="form-control" name="status" id="">
                        <option value="">Trạng thái</option>
                        <option value="0" {{ $order->status == 0 ? 'selected' : '' }}>Chờ Duyệt</option>
                        <option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Đã phê duyệt</option>
                        <option value="2" {{ $order->status == 2 ? 'selected' : '' }}>Đang giao hàng</option>
                        <option value="3" {{ $order->status == 3 ? 'selected' : '' }}>Đã giao thành công</option>
                        <option value="4" {{ $order->status == 4 ? 'selected' : '' }}>Hoàn đơn</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
        <div class="row mt-5">
            <div class="col-md-6">
                <h3 style="margin-left: 12rem">Thông tin người mua</h3>
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
                        <tr>
                            <td>Ghi chú</td>
                            <td>{{ $order->order_note }}</td>
                        </tr>
                        <tr>
                            <td>Ngày mua</td>
                            <td>{{ $order->created_at->format('H:i / d-m-Y') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 text-center">
                <h3>Thông tin người nhận</h3>
                <table class="table table-hover  mt-3">
                    <thead>
                        <tr>
                            <th>{{ $order->first_name }} {{ $order->last_name }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $order->phone }}</td>
                        </tr>
                        <tr>
                            <td>{{ $order->email }}</td>
                        </tr>
                        <tr>
                            <td>{{ $order->address }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr style="border-top: 2px solid yellow;">
        <br>
        <h3>Hóa đơn bán hàng</h3>
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
                        <td>{{ $i += 1 }}</td>
                        <td><img src="{{ url('uploads') }}/products/{{ $detail->product->image }}" width="100px"></td>
                        <td>{{ $detail->product->name }}</td>
                        <td>{{ $detail->quantity }}</td>
                        <td>{{ $detail->price }}</td>
                        <td>{{ $detail->quantity * $detail->price }}</td>
                    </tr>
                @endforeach
                <tr class="table-info">
                    <td></td>
                    <td></td>
                    <th>Thuế + Phí</th>
                    <th></th>
                    <td></td>
                    <td>+{{ $order->fee }}$</td>

                </tr>
                <tr class="table-info">
                    <td></td>
                    <td></td>
                    <th>Coupon</th>
                    <td></td>
                    <td></td>
                    <td>
                        @if ($order->discount_ab || $order->discount_rl)
                            @if ($order->discount_ab)
                                -{{$order->discount_ab}}$
                            @else
                                -{{$order->discount_rl}}%
                            @endif
                        @else
                            None
                        @endif
                    </td>

                </tr>
                <tr class="table-info">
                    <th></th>
                    <td></td>
                    <th>Tổng thanh toán:</th>
                    <th>{{ $order->totalQuantity() }}</th>
                    <td></td>
                    <th>{{ number_format($order->total_price) }}$</th>
                </tr>
            </tbody>
        </table>
    </div>
    <hr>
    {{-- {{$orders->links()}} --}}
@stop()
