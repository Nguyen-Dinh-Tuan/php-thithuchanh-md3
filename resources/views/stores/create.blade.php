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
                        <input type="number" class="form-control" name="code"  placeholder="Enter number">
                    </div>
                    <div class="form-group">
                        <label>Tên đại lý </label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input type="text" class="form-control" name="phone"  placeholder="Enter phone">
                    </div>
                    <div class="form-group">
                        <label>Email </label>
                        <input type="email" class="form-control" name="email"  placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ </label>
                        <input type="text" class="form-control" name="address"  placeholder="Enter address">
                    </div>
                    <div class="form-group">
                        <label>Tên người quản lý </label>
                        <input type="text" class="form-control" name="manager"  placeholder="Enter content">
                    </div>
                    <div class="form-group">
                        <label>Trạng thái  </label>
                        <input type="text" class="form-control" name="status"  placeholder="Enter content">
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label>Kiểu ghi chú</label>--}}
{{--                        <select class="form-control" name="type_id">--}}
{{--                            @foreach($notetype as $note)--}}
{{--                                <option value="{{ $note->id }}">{{ $note->name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}


                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
