@extends('layouts.admin')
@section('title', 'Edit contact')
@section('main')
    <form action="{{ route('contact.update', $contact->id) }}" method="POST" role="form">
        @csrf @method('put')
        <div class="form-group row">
            <div class="col-md-6">
                <label for="">Đường - Phố</label>
                <input type="text" class="form-control" name="address1" value="{{ $contact->address1 }}"
                    placeholder="Input field">
                @error('address1')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Quận - Huyện</label>
                <input type="text" class="form-control" name="address2" value="{{ $contact->address2 }}"
                    placeholder="Input field">
                @error('address2')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $contact->email }}"
                    placeholder="Input field">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="">Số điện thoại 1</label>
                <input type="number" class="form-control" name="phone1" value="{{ $contact->phone1 }}"
                    placeholder="Input field">
                @error('phone1')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Số điện thoại 2</label>
                <input type="number" class="form-control" name="phone2" value="{{ $contact->phone2 }}"
                    placeholder="Input field">
                @error('phone2')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="">Số fax 1</label>
                <input type="number" class="form-control" name="fax1" value="{{ $contact->fax1 }}"
                    placeholder="Input field">
                @error('fax1')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Số fax 2</label>
                <input type="number" class="form-control" name="fax2" value="{{ $contact->fax2 }}"
                    placeholder="Input field">
                @error('fax2')
                    {{ $message }}
                @enderror
            </div>
        </div>
        
        <div class="text-center mt-5 row">
            <div class="col-md-12"><button type="submit" style="width:400px" class="btn btn-primary">Lưu lại</button></div>
            
        </div>
        
    </form>
@stop()
