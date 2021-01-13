@extends('home')
@section('search')


    <form class="navbar-form navbar-right" action="{{route('stores.search')}}">
        <input type="text" name="keyword" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
    </form>
@endsection
@section('content')
    <style>
        td{
            color: black!important;
        }
        th{
            color: black!important;
        }
    </style>
    <div class="tables">
        <h2 class="title1">Danh Sách Đại Lý Phân Phối </h2>
        <div class="panel-body widget-shadow">
            <table class="table">
                <tbody>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mã số đại lý  </th>
                        <th scope="col">Tên đại lý  </th>
                        <th scope="col">Điện thoại  </th>
                        <th scope="col">Email   </th>
                        <th scope="col">Địa chỉ  </th>
                        <th scope="col">Tên người quản lý  </th>
                        <th scope="col">Trạng thái   </th>
                        <th scope="col" colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($stores) == 0)
                        <tr>
                            <td colspan="7" class="text-center">Không có dữ liệu</td>
                        </tr>
                    @else
                        @foreach($stores as $key => $val)
                            <tr>
                                <td scope="row">{{ $key + $stores-> firstItem() }}</td>
                                <td>{{ $val->code }}</td>
                                <td>{{ $val->name }}</td>
                                <td>{{ $val->phone }}</td>
                                <td>{{ $val->email }}</td>
                                <td>{{ $val->address }}</td>
                                <td>{{ $val->manager }}</td>
                                <td>{{ $val->status }}</td>
                                <td>
                                    <a href="{{ route('stores.edit', $val->id) }}">Update</a> |
                                    <a href="{{ route('stores.delete', $val->id) }}" class="text-danger"
                                       onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <div>
                    <a class="btn btn-primary" href="{{ route('stores.create') }}">Thêm mới</a>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy
                    </button>
                </div>
                </tbody>
            </table>
            <div style="font-size:15px;text-align: right!important; ">
                {{$stores->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
@endsection
