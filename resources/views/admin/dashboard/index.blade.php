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

    </div> --}}
    <form action="{{ route('filter.order') }}" method="GET" enctype="multipart/form-data">
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
                        <button type="submit" style="width: 90%" class="btn btn-primary">Lọc</button>
                    </div>
                </div>
            </div>
        </div>

    </form>


    <form action="{{ route('filter.money') }}" class="mt-5" method="GET" enctype="multipart/form-data">

        <div class="col-md-12">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <h3 class="h3 text-gray-800">Tổng tiền</h3>
                    </div>
                    <div class="col-md-2">
                        {{-- <label for="start_date">Ngày bắt đầu: <span class="text-danger">*</span></label> --}}
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>
                    <div class="col-md-2">
                        {{-- <label for="end_date">Ngày kết thúc: <span class="text-danger">*</span></label> --}}
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                    </div>
                    <div class="col-md-3">
                        {{-- <label for="status">Trạng thái:</label> --}}
                        <select class="form-control" id="status" name="status">
                            <option value="-1">Tất cả</option>
                            <option value="0">Chờ duyệt</option>
                            <option value="1">Duyệt</option>
                            <option value="2">Đang giao</option>
                            <option value="3">Thành công</option>
                            <option value="4">Hoàn đơn</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" style="width: 90%" class="btn btn-primary">Lọc</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @if (isset($orders))
        <br>
        @include('admin.dashboard.includes.order')
    @endif
    @if (isset($totalMoney))
        <br>
        @include('admin.dashboard.includes.totalMoney')
    @endif
@endsection
