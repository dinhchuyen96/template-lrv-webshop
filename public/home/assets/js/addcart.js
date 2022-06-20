function addToCart(id) {
// alert(id)
	var quantity = $(".cartquantity").val();

    $.ajax({
        url: '/cart/add-to-cart',
        type: 'GET',
        data: {
            'id': id,
            'quantity': quantity
        },
        success: function(response) {
            console.log(response);

            if(response.status == 200) {
                swal({ title: 'Thêm giỏ hàng thành công', type: 'success' });
            }
        }
    });
}