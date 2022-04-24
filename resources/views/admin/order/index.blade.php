@extends('layouts.admin')
@section('title','Danh sách danh mục')
@section('main')
<form class="form-inline ml-3" method="get">
    <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" style="width:350px" placeholder="Tìm đơn hàng theo số điện thoại" name="search">
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
                <th>Serial</th>
                <th>purchase date</th>
                <th class="text-center">Name</th>
                <th class="text-center">Status</th>
                <th>Phone</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{$i-=1}}</td>
                <td>
                    <a href="{{route('home.product',['product'=>$order->id,'category'=> $order->category_id,'slug'=>Str::slug($order->name)])}}">{{$order->name}}</a>
                    <span>{{$order->created_at->format('d-m-Y')}}</span>
                </td>
                <td>{{$order->account->first_name}} {{$order->account->last_name}}</td>
                <td>
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
                </td>
                <td>0{{$order->account->phone}}</td>
                <td>{{$order->totalQuantity()}}</td>
                <td>${{$order->totalAmount()}}</td>
                <td><a href="{{route('order.detail',$order->id)}}" type="button" class="btn btn-info">Detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<hr>
{{$orders->links()}}
@stop();