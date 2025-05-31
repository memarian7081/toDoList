@extends('layouts1.app')
@section('content1')
    <div id="tasks" class="text-center">
        <h2>فرم ثبت وظایف</h2>
        <form action="{{route('tasks.store')}}" method="post">
            @csrf
            <div class="name">
                <label for="name">نام:
                    <br>
                    <input type="text" class="name" name="name" >
                </label>
                @if($errors->has('name'))
                    <div class="text-warning">{{$errors->first('name')}}</div>
                @endif
            </div>
            <br>
            <div class="dueDate">تاریخ انجام:
                <br>
                <label for="dueDate">
                    <input type="date" class="date" name="due_date">
                </label>
                @if($errors->has('due_date'))
                    <div class="text-warning">{{$errors->first('due_date')}}</div>
                @endif

            </div>
            <br>
            <div class="priority">
                <span>اولویت:</span>
                <select name="priority" id="priority">
                    <br>
                    <option value="{{'veryLittle'}}">خیلی کم</option>
                    <option value="{{'little'}}" >کم</option>
                    <option value="{{'average'}}">متوسط</option>
                    <option value="{{'aLot'}}">زیاد</option>
                    <option value="{{'veryMuch'}}">خیلی زیاد</option>
                </select>
                @if($errors->has('priority'))
                    <div class="text-warning">{{$errors->first('priority')}}</div>
                @endif
            </div>
            <br>
            <div class="body">
                <label for="body">
                    توضیحات
                    <br>
                    <input type="text" name="body" class="body">
                </label>
                @if($errors->has('body'))
                    <div class="text-warning">{{$errors->first('body')}}</div>
                @endif
            </div>
            <br>
            <button class="btn btn-success" type="submit">ثبت</button>
        </form>
    </div>
@endsection
