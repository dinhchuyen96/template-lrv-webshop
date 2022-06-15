
<div style="
text-align: center;
color:red"
>
<h2>Hello {{$customer->last_name}}</h2>
<p>Bạn đã đăng ký tài khoản tại hệ thống Sinrato</p>
<p>Để kích hoạt tài khoản, vui lòng nhấn vào nút kích hoạt bên dưới để kích hoạt tài khoản</p>
<a href="{{route('account.active_account',['customer' => $customer->id, 'token' => $customer->token])}}"
    style="display: inline-block; background: green; color: #fff, padding: 7px 25px; font-weight: bold; font-size: 25px"
>Kích hoạt tài khoản</a>
</div>
