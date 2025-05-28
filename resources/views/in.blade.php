@extends('layouts1.app')
@section('content1')
    <div id="login " class="text-center" style="text-align: center;justify-content: center;margin-top: 2%">
        <form action="{{route('login.post')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="userName" class="mt-8">
                <input type="text" class="userName" name="userName" value="{{old('userName')}}">
{{--                @if($errors->has('userName'))--}}
{{--                    <div class="text-danger">{{$errors->first('userName')}}</div>--}}
{{--                @endif--}}
            </label><br>
            <label for="password" class="mt-2">
                <input type="password" class="password" value="{{old('password')}}">
{{--                @if($errors->has('userName'))--}}
{{--                    <div class="text-danger">{{$errors->first('userName')}}</div>--}}
{{--                @endif--}}
            </label><br>
            <button class="btn btn-success mt-5" type="submit">ورود</button>
        </form>
    </div>
@endsection
