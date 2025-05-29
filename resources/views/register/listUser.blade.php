@extends('layouts1.app')

@section('content1')
    <a href="{{ route('trashedUser') }}" class="btn btn-info mb-3">لیست کاربران حذف شده</a>

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
                    <td>
                        <form action="{{ route('delete', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning">حذف کاربر</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('editUser',$user->id)}}" method="get">
                            @csrf
                            <button class="btn btn-info" type="submit"> ویرایش</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
