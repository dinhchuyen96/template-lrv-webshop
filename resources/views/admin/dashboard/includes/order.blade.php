<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                <tfoot>
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
                </tfoot>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>
                                <a
                                    href="{{ route('home.product', ['product' => $order->id, 'category' => $order->category_id, 'slug' => Str::slug($order->name)]) }}">{{ $order->name }}</a>
                                <span>{{ $order->created_at->format('d-m-Y') }}</span>
                            </td>
                            <td>{{ $order->account->first_name }} {{ $order->account->last_name }}</td>
                            <td>
                                @if ($order->status == 0)
                                    <span style="width: 7rem"  class="btn btn-dark">Chờ duyệt</span>
                                @elseif($order->status == 1)
                                    <span style="width: 7rem" class="btn btn-primary">Đã duyệt</span>
                                @elseif($order->status == 2)
                                    <span style="width: 7rem" class="btn btn-warning">Đang giao hàng</span>
                                @elseif($order->status == 3)
                                    <span style="width: 7rem" class="btn btn-success">Thành công</span>
                                @elseif($order->status == 4)
                                    <span style="width: 7rem" class="btn btn-danger">Hoàn / hủy</span>
                                @endif
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
