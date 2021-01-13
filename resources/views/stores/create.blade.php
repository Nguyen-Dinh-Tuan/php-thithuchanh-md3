@extends('home')

@section('content')
    <style>
        label{
            color: black!important;
        }
    </style>
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm Mới Thông Tin </h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('stores.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>Mã số đại lý </label>
                        <input type="number" class="form-control" name="code"  placeholder="Enter ma code ">
                        @if($errors->any())
                            <p class="alert-danger my-sm-4">{{ $errors->first('code') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Tên đại lý </label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter name">
                        @if($errors->any())
                            <p class="alert-danger my-sm-4">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input type="text" class="form-control" name="phone"  placeholder="Enter phone">
                        @if($errors->any())
                            <p class="alert-danger my-sm-4">{{ $errors->first('phone') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Email </label>
                        <input type="email" class="form-control" name="email"  placeholder="Enter email">
                        @if($errors->any())
                            <p class="alert-danger my-sm-4">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ </label>
                        <input type="text" class="form-control" name="address"  placeholder="Enter address">
                        @if($errors->any())
                            <p class="alert-danger my-sm-4">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Tên người quản lý </label>
                        <input type="text" class="form-control" name="manager"  placeholder="Enter name manager">
                        @if($errors->any())
                            <p class="alert-danger my-sm-4">{{ $errors->first('manager') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select name="status" id="status">
                            <option value="Hoạt động">Hoạt động</option>
                            <option value="Ngừng hoạt động ">Ngừng hoạt động</option>
                            </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
