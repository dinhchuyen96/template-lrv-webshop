@extends('admin.layouts.admin')
@section('title', 'Thông tin người dùng')
@section('main')
    <table class="table">
        <tr>
            <th>Họ và tên</th>
            <th>Địa chỉ</th>
            <th>Số review</th>
            <th>Số sản phẩm đã nhận</th>
            <th>Số tiền đã chi</th>
            <th></th>
        </tr>
        <tr class="table-info">
            <td>{{ $account->first_name }} {{ $account->last_name }}</td>
            <td >{{ $account->address }}</td>
            <td class="text-success">
                <h4>{{ $numberReview}}</h4>
            </td>
            <td>{{ $numberPro }}</td>
            <td class="text-danger">
                <h4>{{number_format($moneyPay) }}$</h4>
            </td>
        </tr>
    </table>

    <table class="table">
        <tr>
            <th>Tổng số đơn đã đặt</th>
            <th>Số đơn thành công</th>
            <th>Tỉ lệ thành công</th>
            <th>Số đơn hoàn hủy</th>
            <th>Tỉ lệ hoàn hủy</th>
        </tr>
        <tr class="table-success">
            <td>{{ $numberOrder }}</td>
            <td>{{ $numberSuccess }}</td>
            <td class="text-success">
                <h4>{{ $numberOrder == 0 ? '0' : (number_format(($numberSuccess / $numberOrder) * 100)) }}%</h4>
            </td>
            <td>{{ $numberFail }}</td>
            <td class="text-danger">
                <h4>{{ $numberOrder == 0 ? '0' : (number_format(($numberFail / $numberOrder) * 100 ))}}%</h4>
            </td>
        </tr>
    </table>


@stop()
