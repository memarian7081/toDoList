@extends('layouts1.app')


@section('content1')
    <div id="formEdit">
        <form action="{{route('updateUser',$user->id)}}" method="post" style="text-align: center;justify-content: center">
            @csrf
            @method('PUT')
            <div class="nam">
                <input type="text" class="name" name="name" value="{{old('name',$user->name)}}"><br>
                @if($errors->has('name'))
                    <div class="text-danger">{{$errors->first('name')}}</div>
                @endif
            </div>
            <br>
            <div class="userName">
                <input type="text" class="userName" name="userName" value="{{old('userName',$user->userName)}}"><br>
                @if($errors->has('userName'))
                    <div class="text-danger">{{$errors->first('userName')}}</div>
                @endif
            </div>
            <br>
            <div class="email">
                <input type="text" class="email" name="email" value="{{old('email',$user->email)}}"><br>
                @if($errors->has('email'))
                    <div class="text-danger">{{$errors->first('email')}}</div>
                @endif
            </div>
            <br>
            <br>
            <button class="btn btn-success" type="submit">ارسال</button>
        </form>
    </div>
@endsection
