@extends('layouts1.app')

@section('content1')
<div class="container">
    @if(\Illuminate\Support\Facades\Auth::check())
        @if(\Illuminate\Support\Facades\Auth::user())
            <table>
                <thead>
                <tr>
                    <th style="width: 10%;font-size: 1.5rem;font-weight: bold">شماره</th>
                    <th style="width: 10%;font-size: 1.5rem;font-weight: bold">نام تسک</th>
                    <th style="width: 10%;font-size: 1.5rem;font-weight: bold">تاریخ انجام</th>
                    <th style="width: 10%;font-size: 1.5rem;font-weight: bold">اولویت</th>
                    <th style="width: 10%;font-size: 1.5rem;font-weight: bold">توضیحات</th>
                </tr>
                </thead>
               @foreach($tasks as $task)
                    <tbody>
                    <tr>
                        <td style="width: 10%;font-size: 1.5rem;">{{$task->id}}</td>
                        <td style="width: 10%;font-size: 1.5rem;">{{$task->name}}</td>
                        <td style="width: 10%;font-size: 1.5rem;">{{$task->due_date}}</td>
                        <td style="width: 10%;font-size: 1.5rem;">{{$task->priority}}</td>
                        <td style="width: 10%;font-size: 1.2rem;">
                            @if(!empty($task->body))
                                {{$task->body}}
                            @else
                                <p>بدون توضیح</p>
                            @endif
                        </td>
                        <td>
                            <form action="{{route('tasks.destroy',$task->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">حذف</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('tasks.edit',$task->id)}}" method="get">
                                @csrf
                                <button class="btn btn-secondary">ویرایش</button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
               @endforeach
            </table>
        @endif
    @endif
</div>

@endsection
