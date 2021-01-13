@extends('home')
@section('content')
    <style>
        label{
            color: black!important;
        }
    </style>
    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Sửa Đổi Thông Tin  </h2>
                <form method="post" action="{{ route('stores.update', $store->id)}}">
                    @csrf
                    <div class="form-group">
                        <label>Mã số đại lý </label>
                        <input type="number" class="form-control" name="code"  placeholder="Enter number"  value="{{ $store->code }}>
                    </div>
                    <div class="form-group">
                        <label>Tên đại lý </label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter name" value="{{$store->name}}">
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input type="text" class="form-control" name="phone"  placeholder="Enter phone" value="{{$store->phone}}">
                    </div>
                    <div class="form-group">
                        <label>Email </label>
                        <input type="email" class="form-control" name="email"  placeholder="Enter email"value="{{$store->email}}">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ </label>
                        <input type="text" class="form-control" name="address"  placeholder="Enter address"value="{{$store->address}}">
                    </div>
                    <div class="form-group">
                        <label>Tên người quản lý </label>
                        <input type="text" class="form-control" name="manager"  placeholder="Enter name" value="{{$store->manager}}">
                    </div>
                    <div class="form-group">
                        <label>Trạng thái  </label>
                        <input type="text" class="form-control" name="status"  placeholder="Enter status" value="{{$store->status}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
