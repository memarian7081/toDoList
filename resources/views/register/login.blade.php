@extends('layouts1.app')

@section('content1')
    <div id="login" class="text-center" style="margin-top: 2%">
        <form action="{{ route('login.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="userName" class="mt-2">نام کاربری</label>
                <input type="text" class="form-control userName" name="userName" id="userName" required>
                @if($errors->has('userName'))
                    <div class="text-danger">{{ $errors->first('userName') }}</div>
                @endif
            </div>

            <div class="form-group">
                <label for="password" class="mt-2">گذرواژه</label>
                <input type="password" class="form-control password" name="password" id="password" required>
                @if($errors->has('password'))
                    <div class="text-danger">{{ $errors->first('password') }}</div>
                @endif
            </div>

            <button class="btn btn-success mt-4" type="submit">ورود</button>
        </form>
    </div>
@endsection
