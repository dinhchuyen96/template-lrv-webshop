<div style="
text-align: center;
color:rgb(49, 101, 222)">
    <h2>Hello {{ $customer->last_name }}</h2>
    <p>Bạn đã đăng ký tài khoản tại hệ thống Sinrato</p>
    <p>Để kích hoạt tài khoản, vui lòng nhấn vào nút kích hoạt bên dưới để kích hoạt tài khoản</p>
    <a href="{{ route('account.active_account', ['customer' => $customer->id, 'token' => $customer->token]) }}"
        style="    background: #fedc19;
        border: medium none;
        border-radius: 25px;
        color: #111;
        cursor: pointer;
        font-size: 14px;    cursor: pointer;
        line-height: 36px;
        margin-top: 10px;
        padding: 0 25px;
        text-transform: capitalize;">Kích
        hoạt tài khoản</a>
</div>
