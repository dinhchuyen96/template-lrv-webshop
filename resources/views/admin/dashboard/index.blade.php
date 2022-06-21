@extends('admin.layouts.admin')
@section('title', 'Thống kê')
@section('main')
    <!-- Page Heading -->
     {{-- <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">CPU Traffic</span>
                    <span class="info-box-number">90<small>%</small></span>
                </div>

            </div>

        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                </div>

            </div>

        </div>


        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Sales</span>
                    <span class="info-box-number">760</span>
                </div>

            </div>

        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">New Members</span>
                    <span class="info-box-number">2,000</span>
                </div>

            </div>

        </div>

    </div>  --}}
    @if($check == true)
    <div class="row">
        <div class="col-lg-3">
            <select class="form-control" id="sortOptions" name="status">
                <option value="" id="sort">Lọc Dữ liệu</option>
                <option value="order">Đơn hàng</option>
                <option value="kpi">Doanh thu</option>
                <option value="toporder" >Sản phẩm được đặt nhiều</option>
                <option value="topcus">Khách hàng thân thiết</option>
            </select>
        </div>
        <div class="col-lg-3 col-6">    
            <div class="small-box bg-info">
                <div class="inner text-center">
                    <div class="row text-center">
                         <h3 style="margin-left:3rem" class="pl-5">{{$product_count}}</h3>
                        <p class="mt-3">&nbsp;Sản Phẩm </p>
                    </div>
                   
                    <div class="row ">
                        <h4 class=" col-lg-6">Ẩn: {{$product_hide}}</h4>
                        <h4 class=" col-lg-6">Hiện: {{$product_show}}</h4>
                    </div>
                    
                </div>
                <a href="{{ route('product.index')}}" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i>Chi tiết</a>
    
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>    
        <div class="col-lg-3 col-6">
    
            <div class="small-box bg-success">
                <div class="inner text-center">
                    <h3>{{$order_count}}</h3>
                    <p>Đơn Hàng mới</p>
                </div>
                <a href="{{ route('order.index')}}" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i>Chi tiết </a>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
        </div>
    
        <div class="col-lg-3 col-6">
    
            <div class="small-box bg-warning">
                <div class="inner text-center">
                    <h3>{{$cus_count}}</h3>
                    <p>Tài Khoản người dùng</p>
                </div>
                <a href="" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i>Chi tiết </a>    
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            </div>
        </div>
    </div>
    @endif
    <form action="{{ route('filter.order') }}" id="sortOrder" style="display: none;" method="GET" enctype="multipart/form-data">
        <div class="col-md-12">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2 mt-4 pt-2">
                        <h3 class="h3 text-gray-800">Đơn hàng</h3>
                    </div>
                    <div class="col-md-2">
                        <label for="start_date">Ngày bắt đầu: <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>
                    <div class="col-md-2">
                        <label for="end_date">Ngày kết thúc: <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                    </div>
                    <div class="col-md-3">
                        <label for="status">Trạng thái:</label>
                        <select class="form-control" id="status" name="status">
                            <option value="-1">Tất cả</option>
                            <option value="0">Chờ duyệt</option>
                            <option value="1">Đã duyệt</option>
                            <option value="2">Đang giao hàng</option>
                            <option value="3">Thành công</option>
                            <option value="4">Hoàn đơn</option>
                        </select>
                    </div>
                    <div class="col-md-3 mt-4 pt-2">
                        <button type="submit" style="width: 100%" class="btn btn-primary">Lọc</button>
                    </div>
                </div>
            </div>
        </div>

    </form>


    <form action="{{ route('filter.money') }}" class=""  id="sortKpi"  style="display: none;"  method="GET" enctype="multipart/form-data">

        <div class="col-md-12">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2" style="margin-top: 2.1rem">
                        <h3 class="h3 text-gray-800">Doanh thu</h3>
                    </div>
                    <div class="col-md-2">
                        <label for="start_date">Ngày bắt đầu: <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>
                    <div class="col-md-2">
                        <label for="end_date">Ngày kết thúc: <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                    </div>
                    <div class="col-md-3">
                        <label for="status">Trạng thái:</label>
                        <select class="form-control" id="status" name="status">
                            <option value="-1">Tất cả</option>
                            <option value="0">Chờ duyệt</option>
                            <option value="1">Duyệt</option>
                            <option value="2">Đang giao</option>
                            <option value="3">Thành công</option>
                            <option value="4">Hoàn đơn</option>
                        </select>
                    </div>
                    <div class="col-md-3 " style="margin-top: 2rem">
                        <button type="submit" style="width: 100%" class="btn btn-primary">Lọc</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @if($check == true)
    <div class="mt-5" id="sortTopSale" style="display: none">
        <table class="table table-hover">
            <tr>
                <th>#</th>
                <th><a href="#">Tên sản phẩm</a></th>
                <th>Ảnh minh họa</th>
                <th>Số đơn đặt hàng</th>
            </tr>
            @foreach($topfive as $top)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$top->product->name}}</td>
                <td><img src="{{url('uploads')}}/products/{{$top->product->image}}" width="100px"></td>
                <td>{{$top->count}}</td>@endforeach
            </tr>
            
        </table>
    </div>
    <div class="mt-5" id="sortTopCus" style="display: none">
        <table class="table table-hover">
            <tr>
                <th>#</th>
                <th><a href="#">Tên khách hàng</a></th>
                <th>Địa chỉ</th>
                <th>Số đơn đặt hàng</th>
            </tr>
            @foreach($topcus as $top)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td><a href="{{ route('admin.account_detail', $top->account_id) }}">{{$top->account->first_name }} {{ $top->account->last_name }}</a></td>
                <td>{{$top->account->address}}</td>
                <td>{{$top->count}}</td>@endforeach
            </tr>
            
        </table>
    </div>
    @endif
    @if (isset($orders))
        <br>
        @include('admin.dashboard.includes.order')
    @endif
    @if (isset($totalMoney))
        <br>
        @include('admin.dashboard.includes.totalMoney')
    @endif
@endsection
