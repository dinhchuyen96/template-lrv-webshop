@extends('client.layouts.site')
@section('title', 'My Order')
@section('main')
    @if (is_null($item))
        <div class="row mt-5 mb-5">
            <div class="col-md-12 text-center">
                  <h2>Có lỗi xảy ra, vui lòng đăng nhập lại</h2>
            </div>          
        </div>
    @else
        <div class="container">
            <hr class="mt-5">
            <div class="row mt-5 mx-1">
                <h3 class="">Thông tin chi tiết đơn hàng</h3>
                @if ($item->status == 0)
                    <span class="btn btn-primary mx-5" style="width:40%">Chờ xác nhận</span>
                @elseif($item->status == 1)
                    <span class="btn btn-info mx-5" style="width:40%">Đã xác nhận</span>
                @elseif($item->status == 2)
                    <span class="btn btn-warning mx-5" style="width:40%">Đang giao hàng</span>
                @elseif($item->status == 3)
                    <span class="btn btn-success mx-5" style="width:40%">Đã giao thành công</span>
                @elseif($item->status == 4)
                    <span class="btn btn-danger mx-5" style="width:40%">Hoàn / hủy</span>
                @endif
            </div>

            <div class="row mt-5">
                <div class="col-md-6">
                    <h3>Thông tin người mua</h3>
                    <table class="table table-hover mt-3">
                        <thead>
                            <tr>
                                <th>Họ tên</th>
                                <th>{{ $item->account->first_name }} {{ $item->account->last_name }} </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Điện thoại</td>
                                <td>{{ $item->account->phone }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $item->account->email }}</td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td>{{ $item->account->address }}</td>
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
                                <th>{{ $item->first_name }} {{ $item->last_name }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Điện thoại</td>
                                <td>{{ $item->phone }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $item->email }}</td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td>{{ $item->address }}</td>
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
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($item->details as $product_detail)
                        <tr>
                            <td>{{ $i += 1 }}</td>
                            <td><a
                                    href="{{ route('home.product', ['product' => $product_detail->product->id, 'category' => $product_detail->category_id, 'slug' => Str::slug($product_detail->product->name)]) }}"><img
                                        src="{{ url('uploads') }}/products/{{ $product_detail->product->image }}"
                                        width="60px"></a></td>
                            <td><a
                                    href="{{ route('home.product', ['product' => $product_detail->product->id, 'category' => $product_detail->category_id, 'slug' => Str::slug($product_detail->product->name)]) }}">{{ $product_detail->product->name }}</a>
                            </td>
                            <td>{{ $product_detail->quantity }}</td>
                            <td>{{ $product_detail->price }}</td>
                            <td>{{ number_format($product_detail->quantity * $product_detail->price) }}$</td>
                        </tr>
                    @endforeach
                    <tr class="table-info">
                        <td></td>
                        <td></td>
                        <th>Thuế + Phí</th>
                        <th></th>
                        <td></td>
                        <td>+{{ $item->fee }}$</td>

                    </tr>
                    <tr class="table-info">
                        <td></td>
                        <td></td>
                        @if ($item->discount_ab || $item->discount_rl)
                            <th> Coupon</th>
                        @else
                            <th></th>
                        @endif
                        <td></td>
                        <td></td>

                        @if ($item->discount_ab || $item->discount_rl)
                            @if ($item->discount_ab)
                                <td> -{{ $item->discount_ab }}$</td>
                            @else
                                <td>-{{ $item->discount_rl }}% </td>
                            @endif
                        @else
                            <td></td>
                        @endif


                    </tr>
                    <tr class="table-info">
                        <th></th>
                        <td></td>
                        <th>Tổng thanh toán:</th>
                        <th>{{ $item->totalQuantity() }}</th>
                        <td></td>
                        <th>{{ number_format($item->total_price) }}$</th>
                    </tr>
                </tbody>
            </table>
        </div>
    @endif
@stop()
