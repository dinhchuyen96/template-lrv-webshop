@extends('admin.layouts.admin')
@section('title', 'Thống kê')
@section('main')
    <!-- Page Heading -->

    <form action="{{ route('filter.order') }}" method="GET" enctype="multipart/form-data">

        <div class="col-md-12">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2 mt-4 pt-2">
                        <h2 class="h3 text-gray-800">Đơn hàng</h2>
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
                        <h2 class="h3 text-gray-800">Tổng tiền</h2>
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
                            <option value="0">Chờ xác nhận</option>
                            <option value="1">Xác nhận</option>
                            <option value="2">Hoàn thành</option>
                            <option value="3">Hủy</option>
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
