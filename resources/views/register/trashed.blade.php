@extends('layouts1.app')
@section('content1')
    <table>
        <thead>
        <tr>
            <th style="width: 10%;text-align: center;justify-content: center;">نام</th>
            <th style="width: 10%;text-align: center;justify-content: center;">نام کاربری</th>
            <th style="width: 20%;text-align: center;justify-content: center;">ایمیل</th>
        </tr>
        </thead>
        @foreach($users as $user)
            <tbody>
            <tr>
                <td style="width: 10%;text-align: center;justify-content: center;">{{$user->name}}</td>
                <td style="width: 10%;text-align: center;justify-content: center;">{{$user->userName}}</td>
                <td style="width: 20%;text-align: center;justify-content: center;">{{$user->email}}</td>
                <td>
                    <form action="{{route('restoreUser',$user->id)}}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-secondary">برگرداندن</button>
                    </form>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
@endsection
