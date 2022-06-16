<div style="
text-align: center;
color:red">
    <h2>Hello {{ $customer->last_name }}</h2>
    <p>Email này để lấy lại mật khẩu cho tài khoản trên hệ thống Sinrato của bạn</p>
    <p>Để lấy lại mật khẩu, vui lòng nhấn vào nút bên dưới</p>
    <h3>Nếu không phải bạn đã gửi yêu cầu lấy lại mật khẩu, hãy bỏ qua email này</h3>
    <h4>Lưu ý: Link có tác dụng trong vòng 1 giờ!</h4>
    <a href="{{ route('account.reset_password', ['customer' => $customer->id, 'token' => $customer->token]) }}"
        style="    background: green;
        border: medium none;
        border-radius: 25px;
        color: #111;
        cursor: pointer;
        font-size: 14px;    cursor: pointer;
        line-height: 36px;
        margin-top: 10px;
        padding: 0 25px;
        text-transform: capitalize;">Đặt
        lại mật khẩu</a>
</div>
