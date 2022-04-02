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
                <td>Status</td>
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
                <td>3</td>
                <td>
                    
                </td>
                <td>${{$order->price}}</td>
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