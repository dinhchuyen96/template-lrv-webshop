<div style="
text-align: center;
color:red">
    <h2>Hello {{ $customer->last_name }}</h2>
    <p>Email này để lấy lại mật khẩu cho tài khoản trên hệ thống Sinrato của bạn</p>
    <p>Để lấy lại mật khẩu, vui lòng nhấn vào nút bên dưới</p>
    <h3>Nếu không phải bạn đã gửi yêu cầu lấy lại mật khẩu, hãy bỏ qua email này</h3>
    <h4>Lưu ý: Link có tác dụng trong vòng 1 giờ!</h4>
    <a href="{{ route('account.reset_password', ['customer' => $customer->id, 'token' => $customer->token]) }}"
        style="display: inline-block; background: green; color: #fff, padding: 7px 25px; font-weight: bold; font-size: 25px">Đặt
        lại mật khẩu</a>
</div>
