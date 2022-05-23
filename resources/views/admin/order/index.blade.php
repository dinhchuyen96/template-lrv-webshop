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
                    <form action="{{ route('order_status', $order->id) }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="form-group col-md-8">
                                <select class="form-control" name="status" id="">
                                    <option value="">Trạng thái</option>
                                    <option value="0" {{ $order->status == 0 ? 'selected' : '' }}>Chờ Duyệt</option>
                                    <option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Đã duyệt</option>
                                    <option value="2" {{ $order->status == 2 ? 'selected' : '' }}>Đang giao hàng</option>
                                    <option value="3" {{ $order->status == 3 ? 'selected' : '' }}>Thành công</option>
                                    <option value="4" {{ $order->status == 4 ? 'selected' : '' }}>Hoàn đơn</option>
                                </select>                               
                            </div>
                            <div class="col-md-4">
                                <button href="" class="btn
                                    @if ($order->status == 0) btn-dark 
                                    @elseif ($order->status == 1) btn-primary  
                                    @elseif ($order->status == 2) btn-warning  
                                    @elseif ($order->status == 3) btn-success  
                                    @elseif ($order->status == 4) btn-danger    
                                    @endif
                                                    
                                "type="submit">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                            </div>
                        </div>
                    </form>
                </td>
                <td>0{{$order->account->phone}}</td>
                <td>{{$order->totalQuantity()}}</td>
                <td>${{number_format($order->total_price)}}</td>
                <td><a href="{{route('order.detail',$order->id)}}" type="button" class="btn btn-info"><i class="fas fa-info-circle"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<hr>
{{$orders->links()}}
@stop()