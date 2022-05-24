@extends('admin.layouts.admin')
@section('title', 'Danh sách đơn hàng')
@section('main')
    <form class="form-inline ml-3" method="get">
        <div class="input-group input-group-sm">
            <input class=" form-control form-control-navbar" type="search" style="margin-left:-1rem;width:407px"
                placeholder="Tìm kiếm đơn hàng" name="search">
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
                    <th>Serial</th>
                    <th>purchase date</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Status <br> (waiting confirm: )</th>
                    <th>Phone</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>
                            <a
                                href="{{ route('home.product', ['product' => $order->id, 'category' => $order->category_id, 'slug' => Str::slug($order->name)]) }}">{{ $order->name }}</a>
                            <span>{{ $order->created_at->format('d-m-Y') }}</span>
                        </td>
                        <td>{{ $order->account->first_name }} {{ $order->account->last_name }}</td>
                        <td>
                            <form action="{{ route('order_status', $order->id) }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <div class="form-group col-md-8">
                                        <select class="form-control" name="status" id="">
                                            @if ($order->status === 0)
                                                <option value="0" selected>Chờ duyệt</option>
                                                <option value="1">Đã duyệt</option>
                                                <option value="4">Hoàn hủy</option>
                                            @elseif ($order->status === 1)
                                                <option value="1" selected>Đã duyệt</option>
                                                <option value="2">Đang giao</option>
                                                <option value="3">Thành công</option>
                                                <option value="4">Hoàn / hủy</option>
                                            @elseif ($order->status === 2)
                                                <option value="3" selected>Đang giao</option>
                                                <option value="4">Hoàn / hủy</option>
                                            @elseif($order->status === 3)
                                                <option value="3" selected>Thành công</option>
                                            @else
                                                <option value="4" selected>Hoàn / hủy</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <button href=""
                                            @if ($order->status == 0) class="btn btn-dark" 
                                            @elseif ($order->status == 1) class="btn btn-primary"  
                                            @elseif ($order->status == 2) class="btn btn-warning"  
                                            @elseif ($order->status == 3) class="btn btn-success " disabled
                                            @elseif ($order->status == 4) class="btn btn-danger" disabled
                                            @endif
                                            type="submit"  onclick="return confirm('Cập nhật trạng thái?')">
                                            @if($order->status == 3)<i class="fas fa-check"></i>
                                            @elseif ($order->status == 4)<i class="fas fa-times"></i>
                                            
                                            @else <i class="fas fa-sync-alt"></i>                                            
                                            @endif
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </td>
                        <td>0{{ $order->account->phone }}</td>
                        <td>{{ $order->totalQuantity() }}</td>
                        <td>${{ number_format($order->total_price) }}</td>
                        <td><a href="{{ route('order.detail', $order->id) }}" type="button" class="btn btn-info"><i
                                    class="fas fa-info-circle"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <hr>
    {{ $orders->links() }}
@stop()
