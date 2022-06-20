@extends('client.layouts.site')
@section('title', 'My Account')
@section('main')
    <!-- header area end -->
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area mb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">{{ __('main.home') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('profile.ma') }}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- Start of My Account Wrapper -->
    <div class="my-account-wrapper pb-20">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                        <div class="user-dashboard pb-50">
                            <div class="user-info mb-30">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                        <div class="single-info">
                                            <p class="user-name">{{ __('main.hello') }} <span>{{ $acc->first_name }}
                                                    {{ $acc->last_name }}</span> <br>not {{ $acc->last_name }}? <a
                                                    class="log-out" href="{{ route('home.logout') }}">Log Out</a></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <div class="single-info">
                                            <p>{{ __('profile.na') }} <a href="#">{{ $hotline->email_1 }}</a></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                        <div class="single-info">
                                            <p>{{ __('profile.et') }}<a href="#">{{ $hotline->email_2 }}</a></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-2 col-xl-3">
                                        <div class="single-info justify-content-lg-center">
                                            <a class="btn btn-secondary"
                                                href="{{ route('home.cart') }}">{{ __('profile.vc') }}</a>
                                        </div>
                                    </div>
                                </div> <!-- end of row -->
                            </div> <!-- end of user-info -->

                            <div class="main-dashboard">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                                        <ul class="nav flex-column dashboard-list" role="tablist">
                                            <li><a class="nav-link active" data-toggle="tab"
                                                    href="#dashboard">{{ __('profile.db') }}</a></li>
                                            <li> <a class="nav-link" data-toggle="tab"
                                                    href="#orders">{{ __('profile.od') }}</a></li>
                                            <li><a class="nav-link" data-toggle="tab"
                                                    href="#account-details">{{ __('profile.ad') }}</a></li>
                                            <li><a class="nav-link"
                                                    href="{{ route('home.changer_password') }}">{{ __('profile.cp') }}</a>
                                            </li>
                                        </ul> <!-- end of dashboard-list -->
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                        <!-- Tab panes -->
                                        <div class="tab-content dashboard-content">
                                            <div id="dashboard" class="tab-pane fade show active">
                                                <h3>{{ __('profile.db') }} </h3>
                                                <p>{{ __('profile.dbdt') }}</p>
                                            </div> <!-- end of tab-pane -->

                                            <div id="orders" class="tab-pane fade">
                                                <h3>{{ __('profile.od') }}</h3>
                                                @if ($orders != null)
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>

                                                                    <th>{{ __('profile.code') }}</th>
                                                                    <th>{{ __('profile.td') }}</th>
                                                                    <th>{{ __('profile.ts') }}</th>
                                                                    <th>{{ __('profile.tt') }}</th>
                                                                    <th>{{ __('profile.ta') }}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($orders as $order)
                                                                    <tr>

                                                                        <td>{{ $i -= 1 }}</td>
                                                                        <td>{{$order->order_code }}</td>
                                                                        <td>{{ $order->created_at->format('d-m-Y') }}</td>
                                                                        <td>
                                                                            @if ($order->status == 0)
                                                                                <span style="width: 7rem"
                                                                                    class="btn btn-primary">Chờ duyệt</span>
                                                                            @elseif($order->status == 1)
                                                                                <span
                                                                                    style="width: 7rem"class="btn btn-info">Đã
                                                                                    duyệt</span>
                                                                            @elseif($order->status == 2)
                                                                                <span
                                                                                    style="width: 7rem"class="btn btn-warning">Đang
                                                                                    giao hàng</span>
                                                                            @elseif($order->status == 3)
                                                                                <span style="width: 7rem"
                                                                                    class="btn btn-success">Thành
                                                                                    công</span>
                                                                            @elseif($order->status == 4)
                                                                                <span style="width: 7rem"
                                                                                    class="btn btn-danger">Hoàn / hủy</span>
                                                                            @endif
                                                                        </td>
                                                                        <td>${{ number_format($order->total_price) }} for
                                                                            {{ $order->totalQuantity() }} item </td>
                                                                        <td><a href="{{ route('home.order_detail', $order->id) }}"
                                                                                type="button"
                                                                                class="btn btn-info">{{ __('profile.view') }}</a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                @else
                                                    <h3>You dont have a order!</h3>
                                                @endif
                                            </div> <!-- end of tab-pane -->
                                            <div id="account-details" class="tab-pane fade row">
                                                <h3>{{ __('profile.ad') }} </h3>
                                                <img src="{{ url('uploads') }}/avatars/{{ $acc->avatar }}" alt=""
                                                    width="400" class="mx-auto d-block mb-2">
                                                <div class="login-form">
                                                    <form action="{{ route('home.account_edit') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group row align-items-center">
                                                            <label
                                                                class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">{{ __('profile.gd') }}</label>
                                                            <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                <div class="form-row">
                                                                    <div class="col-6 col-sm-3">
                                                                        <div class="custom-radio">
                                                                            <input class="form-check-input"
                                                                                @if ($acc->sex == 'anh') checked @endif
                                                                                type="radio" value="anh" name="sex"
                                                                                id="male">
                                                                            <span class="checkmark"></span>
                                                                            <label class="form-check-label"
                                                                                for="male">Mr.</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 col-sm-3">
                                                                        <div class="custom-radio">
                                                                            <input class="form-check-input"
                                                                                @if ($acc->sex == 'chị') checked @endif
                                                                                type="radio" value="chị"
                                                                                name="sex" id="female">
                                                                            <span class="checkmark"></span>
                                                                            <label class="form-check-label"
                                                                                for="female">Mrs.</label>
                                                                        </div>
                                                                    </div>
                                                                    @error('sex')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="f-name"
                                                                class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">{{ __('profile.fn') }}</label>
                                                            <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $acc->first_name }}" name="first_name"
                                                                    id="first_name" required>
                                                                @error('first_name')
                                                                    {{ $message }}
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="l-name"
                                                                class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">{{ __('profile.ln') }}</label>
                                                            <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $acc->last_name }}" id="last_name"
                                                                    name="last_name" required>
                                                                @error('last_name')
                                                                    {{ $message }}
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="email"
                                                                class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">{{ __('profile.ed') }}</label>
                                                            <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                <input type="text" class="form-control" name="email"
                                                                    value="{{ $acc->email }}" id="email" readonly
                                                                    required>
                                                                @error('email')
                                                                    {{ $message }}
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="f-name"
                                                                class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">{{ __('profile.phone') }}</label>
                                                            <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                <input type="number" pattern="[0-9]{10}"
                                                                    class="form-control" value="0{{ $acc->phone }}"
                                                                    name="phone" id="" required>
                                                                @error('phone')
                                                                    {{ $message }}
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputaddress"
                                                                class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">{{ __('profile.add') }}</label>
                                                            <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $acc->address }}" name="address"
                                                                    id="address" required>
                                                                @error('address')
                                                                    {{ $message }}
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="birth"
                                                                class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">{{ __('profile.bd') }}</label>
                                                            <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                <input type="date" class="form-control"
                                                                    name="birth_day"id="birth" max="2016-01-01"
                                                                    min="1945-12-31" value="{{ $acc->birth_day }}"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label"
                                                                for="">{{ __('profile.ua') }}</label>
                                                            <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                <input type="file" class="form-control" name="upload"
                                                                    placeholder="Input field"
                                                                    accept=".png,.gif,.jpg,.jpeg,.svg">
                                                                @error('upload')
                                                                    {{ $message }}
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="register-box d-flex justify-content-end mt-half">
                                                            <button type="submit"
                                                                class="btn btn-secondary">{{ __('profile.save') }}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div> <!-- end of tab-pane -->
                                        </div>
                                    </div>
                                </div> <!-- end of row -->
                            </div> <!-- end of main-dashboard -->
                        </div> <!-- end of user-dashboard -->
                    </main> <!-- end of #primary -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End of My Account Wrapper -->

    <!-- scroll to top -->
@stop()
