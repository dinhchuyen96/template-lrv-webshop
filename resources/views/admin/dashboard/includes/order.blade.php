<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Ngày đặt hàng</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Trạng thái </th>
                        <th>SDT người nhận</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Ngày đặt hàng</th>
                        <th class="text-center">Tên khách hàng</th>
                        <th class="text-center">Trạng thái </th>
                        <th>SDT người nhận</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->order_code }}</td>
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
                            <td><a href="{{ route('order.detail', $order->id) }}" type="button"
                                    class="btn btn-info">Detail</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>