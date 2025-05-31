@extends('layouts1.app')

@section('content1')
    <div id="formEdit" class="text-center">
        <form action="{{route('tasks.update',$tasks->id)}}" method="post">
            @csrf
            @method('PUT')
            <label for="name" class="mt-3">
                <input type="text" class="name" name="name" value="{{$tasks->name}}"><br>
                @if($errors->has('name'))
                    <div class="text-danger">{{$errors->first('name')}}</div>
                @endif
            </label>

            <br>
            <label for="due_date" class="mt-3">
                <input type="date" name="due_date" value="{{$tasks->due_date}}">
                @if($errors->has('due_date'))
                    <div class="text-danger">{{$errors->first('due_date')}}</div>
                @endif
            </label>
            <br>
            <label for="priority" class="mt-3">
                <select name="priority" id="">
                    <option  disabled value="{{old('priority')}}" selected>{{$tasks->priority}}</option>
                    <option value="{{'خیلی کم'}}">خیلی کم</option>
                    <option value="{{'کم'}}" >کم</option>
                    <option value="{{'متوسط'}}">متوسط</option>
                    <option value="{{'زیاد'}}">زیاد</option>
                    <option value="{{'خیلی زیاد'}}">خیلی زیاد</option>
                </select>
                @if($errors->has('priority'))
                    <div class="text-danger">{{$errors->first('priority')}}</div>
                @endif
            </label>
            <br>
            <textarea name="body" class="mt-3">
               {{$tasks->body}}
            </textarea><br>
            <button class="btn btn-success mt-5">ویرایش</button>
        </form>
    </div>
@endsection
