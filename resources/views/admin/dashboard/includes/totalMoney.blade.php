<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Số lương đơn hàng</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>                    
                        <tr>
                            <td>{{$number}}</td>
                            <td>{{number_format($totalMoney)}}$</td>
                        </tr>                    
                </tbody>
            </table>
        </div>
    </div>
</div>
