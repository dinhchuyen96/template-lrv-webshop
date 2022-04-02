@extends('layouts.admin')
@section('title','Danh sách danh mục')
@section('main')
<form class="form-inline ml-3" method="get">
    <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" style="width:350px" placeholder="Search" name="search">
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>
<hr>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Serial</td>
                <td>purchase date</td>
                <td>Name</td>
                <td>Status</td>
                <td>Phone</td>
                <td>Quantity</td>
                <td>Unit Price</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>1</td>
                <td>
                    <a href="{{route('home.product',['product'=>$order->id,'slug'=>Str::slug($order->name)])}}">{{$order->name}}</a>
                    <span>{{$order->created_at->format('d-m-Y')}}</span>
                </td>
                <td>{{$order->account->first_name}} {{$order->account->last_name}}</td>
                <td>@if ($order->status == 0)
                    <span class="text-primary">Chờ duyệt</span>
                @elseif($order->status == 1)
                    <span class="text-info">Đã phê duyệt</span>
                @elseif($order->status == 2)
                    <span class="text-success">Đang giao hàng</span>
                    @elseif($order->status == 3)
                    <span class="text-success">Đã giao thành công</span>
                    @elseif($order->status == 4)
                    <span class="text-success">Hoàn đơn</span>
                @endif</td>
                <td>{{$order->account->phone}}</td>
                <td>{{$order->totalQuantity()}}</td>
                <td>${{$order->totalAmount()}}</td>
                <td><a href="{{route('order.detail',$order->id)}}" type="button" class="btn btn-info">Detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <a href="{{route('home.cart-clear')}}" class="btn btn-danger"onclick="return confirm('Are you sure?')">Xóa sạch</a>
    </div>
</div>
<hr>
{{$orders->links()}}
@stop();