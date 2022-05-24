@extends('admin.layouts.admin')
@section('title', 'Edit contact')
@section('main')
    <form action="{{ route('contact.update', $contact->id) }}" method="POST" role="form">
        @csrf @method('put')
        <div class="form-group row">
            <div class="col-md-6">
                <label for="">Đường - Phố</label>
                <input type="text" class="form-control" name="address_1" value="{{ $contact->address_1 }}" required
                    placeholder="Input field">
                @error('address_1')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Quận - Huyện</label>
                <input type="text" class="form-control" name="address_2" value="{{ $contact->address_2 }}"
                    placeholder="Input field" required>
                @error('address_2')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label for="">Email 1</label>
                <input type="email" class="form-control" name="email_" value="{{ $contact->email_1 }}"
                    placeholder="Input field" required>
                @error('email_')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Email 2</label>
                <input type="email" class="form-control" name="email_" value="{{ $contact->email_1 }}"
                    placeholder="Input field">
                @error('email_')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="">Số điện thoại 1</label>
                <input type="number" class="form-control" name="phone_1" value="{{ $contact->phone_1 }}"
                    placeholder="Input field" required>
                @error('phone_1')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Số điện thoại 2</label>
                <input type="number" class="form-control" name="phone_2" value="{{ $contact->phone_2 }}"
                    placeholder="Input field">
                @error('phone_2')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="">Số fax 1</label>
                <input type="number" class="form-control" name="fax_1" value="{{ $contact->fax_1 }}"
                    placeholder="Input field">
                @error('fax_1')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Số fax 2</label>
                <input type="number" class="form-control" name="fax_2" value="{{ $contact->fax_2 }}"
                    placeholder="Input field">
                @error('fax_2')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label>            
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="0" {{$contact->status == '0' ? 'checked' : ''}}>
                    Tạm Ẩn
                </label>
            </div>             
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="1" {{$contact->status == '1' ? 'checked' : ''}}>
                    Hiển thị
                </label>
            </div>            
        </div>        
        <div class="text-center mt-5 row">
            <div class="col-md-12"><button type="submit" style="width:400px" class="btn btn-primary">Lưu lại</button></div>            
        </div>
        
    </form>
@stop()
