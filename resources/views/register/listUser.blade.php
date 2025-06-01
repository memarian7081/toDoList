@extends('layouts1.app')

@section('content1')

    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead class="thead-light">
            <tr>
                <th style="width: 10%; font-weight: bold; font-size: 2rem;">نام</th>
                <th style="width: 20%; font-weight: bold; font-size: 2rem;">نام کاربری</th>
                <th style="width: 10%; font-weight: bold; font-size: 2rem;">ایمیل</th>
                <th style="width: 10% ;font-weight: bold; font-size: 2rem;;">عملیات</th>
                <th style="width: 10% ;font-weight: bold; font-size: 2rem;;">ویرایش</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr style="direction: rtl;">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->userName }}</td>
                    <td>{{ $user->email }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
