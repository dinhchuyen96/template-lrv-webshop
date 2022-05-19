@extends('layouts.admin')
@section('title', 'Danh sách danh mục')
@section('main')
    <form class="form-inline ml-3" method="get">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" style="width: 406px; margin-left: 2.8rem;"
                placeholder="Search" name="search">
            <div class="input-group-append">
                <button class="btn btn-warning" style="height: 31px; width:120px" type="submit">
                    <p>Search</p>
                </button>
            </div>
            <div>
                <a class="btn btn-primary" style="margin-left: 20rem" href="{{ route('category.create') }}">Thêm mới</a>
            </div>

        </div>
        </div>
    </form>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên danh mục</th>
                <th>Số sản phẩm</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php tableCategories($data); ?>
        </tbody>
    </table>
    <hr>
    {{ $data->links() }}
@stop()
<?php
function tableCategories($categories, $parent_id = 0, $char = '')
{
    foreach ($categories as $key => $item) {
        // Nếu là chuyên mục con thì hiển thị
        if ($item->parent_id == $parent_id) {
            echo '<tr>';
            echo '<td>' . $item->id . '</td>';
            echo '<td>' . $char . $item->name . '</td>';
            echo '<td>' . $item->products_byCat->count() . '</td>';
            echo '<td>';
            if ($item->status == 0) {
                echo '<label class="badge badge-danger">Tạm ẩn</label>';
            } else {
                echo '<label class="badge badge-success">Hiển thị</label>';
            }
            echo '</td>';
            echo '<td>' . $item->created_at . '</td>';
            echo '<td>';
            echo '<form action="' .
                route('category.destroy', $item->id) .
                '" method="post">
                    ' .
                csrf_field() .
                '' .
                method_field('DELETE') .
                ' 
                        <a href="' .
                route('category.edit', $item->id) .
                '" class="btn btn-primary">Sửa</a>
                        <button class="btn btn-danger" onclick="return confirm(\'bạn có muốn xóa không?\')">Xóa</button>
                     </form>';

            echo '</td>';
            echo '</tr>';

            // Xóa chuyên mục đã lặp
            unset($categories[$key]);

            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            tableCategories($categories, $item['id'], $char . '|---');
        }
    }
}
?>
