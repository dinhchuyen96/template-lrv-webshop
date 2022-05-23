@extends('admin.layouts.admin')
@section('title','Danh sách đơn hàng')
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
            @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>
                    <a href="{{route('home.product',['product'=>$order->id,'category'=> $order->category_id,'slug'=>Str::slug($order->name)])}}">{{$order->name}}</a>
                    <span>{{$order->created_at->format('d-m-Y')}}</span>
                </td>
                <td>{{$order->account->first_name}} {{$order->account->last_name}}</td>
                <td>
                    @if ($order->status == 0)
                        <span class="btn btn-dark">Chờ xác nhận</span>
                    @elseif($order->status == 1)
                        <span class="btn btn-primary">Đã xác nhận</span>
                    @elseif($order->status == 2)
                        <span class="btn btn-warning">Đang giao hàng</span>
                    @elseif($order->status == 3)
                        <span class="btn btn-success">Đã giao thành công</span>
                    @elseif($order->status == 4)
                        <span class="btn btn-danger">Hoàn đơn</span>
                    @endif
                </td>
                <td>0{{$order->account->phone}}</td>
                <td>{{$order->totalQuantity()}}</td>
                <td>${{number_format($order->total_price)}}</td>
                <td><a href="{{route('order.detail',$order->id)}}" type="button" class="btn btn-info">Detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<hr>
{{$orders->links()}}
@stop()