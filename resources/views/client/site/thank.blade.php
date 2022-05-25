@extends('client.layouts.site')
@section('title','register')
@section('main')
    <div class="jumbotron text-center">
        <h2 class="display-3">Cảm ơn quý khách đã mua hàng của chúng tôi!</h2>
        <hr>
        <p>
            Nhấn vào <a href="{{ route('my_account') }}">đây</a> để xem đơn hàng của bạn
        </p>
        <br>
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="{{ route('home') }}" role="button">Tiếp tục mua hàng</a>
        </p>
    </div>
@stop