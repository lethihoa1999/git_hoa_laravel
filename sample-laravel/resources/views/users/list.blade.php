@extends('users.layout')
@section('content')
    <div class="text-align: center;">
        @if (Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @if (Session::get('fail'))
            <div class="alert alert-success">
                {{ Session::get('fail') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Địa chỉ email</th>
                    <th>Tên</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                </tr>
            </thead>
            @foreach ($users as $key => $use)
            <tr>
                <td>{{ $users->firstItem() + $key }}</td>
                <td>{{ $use->mail_address }}</td>
                <td>{{ $use->name }}</td>
                <td>{{ $use->address }}</td>
                <td>{{ $use->phone }}</td>
            </tr>
            @endforeach
        </table>
        <div>{{ $users->links() }}</div>  
        <a href={{ route('users.create') }} class="btn btn-primary">Register</a>
    </div>
@endsection 
