@extends('layouts.admin')
@section('title', 'Add new contact')
@section('main')
    <form action="{{ route('contact.store') }}" method="POST" role="form">
        @csrf
        <div class="form-group row">
            <div class="col-md-6"> <label for="">Đường - Phố</label>
                <input type="text" class="form-control" name="address_1" placeholder="Input field">
                @error('address_1')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6"> <label for="">Quận - Huyện</label>
                <input type="text" class="form-control" name="address_2" placeholder="Input field">
                @error('address_2')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6"><label for="">Email 1</label>
                <input type="email" class="form-control" name="email_1" placeholder="Input field">
                @error('email_1')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6"> <label for="">Email 2</label>
                <input type="email" class="form-control" name="email_2" placeholder="Input field">
                @error('email_2')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="">Số điện thoại 1</label>
                <input type="number" class="form-control" name="phone_1" placeholder="Input field">
                @error('phone_1')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Số điện thoại 2</label>
                <input type="text" class="form-control" name="phone_2" placeholder="Input field">
                @error('phone_2')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="">Số Fax 1</label>
                <input type="number" class="form-control" name="fax_1" placeholder="Input field">
                @error('fax_1')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Số Fax 2</label>
                <input type="number" class="form-control" name="fax_1" placeholder="Input field">
                @error('fax_1')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Lưu lại</button>
    </form>
@stop()
