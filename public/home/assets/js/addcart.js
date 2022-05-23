function addToCart() {
    $.ajax({
        success: function(response) {
                swal({ title: 'Thêm giỏ hàng thành công', type: 'success' });
        }
    });
};