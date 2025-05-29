@extends('layouts1.app')

@section('content1')
    <section id="formCreate" style="text-align: center; justify-content: center" class="bg-info">
        <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form mt-3">
                <div class="name">
                    <label for="name">نام:</label>
                    <input type="text" class="name bg-secondary text-light" name="name" id="name" required>
                    @if($errors->has('name'))
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <br>

                <div class="userName">
                    <label for="userName">نام کاربری:</label>
                    <input type="text" class="userName bg-secondary text-light" name="userName" id="userName" required>
                    @if($errors->has('userName'))
                        <div class="text-danger">{{ $errors->first('userName') }}</div>
                    @endif
                </div>
                <br>

                <div class="email">
                    <label for="email">ایمیل:</label>
                    <input type="email" class="email bg-secondary text-light" name="email" id="email" required>
                    @if($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <br>

                <div class="password">
                    <label for="password">گذرواژه:</label>
                    <input type="password" class="password bg-secondary text-light" name="password" id="password" required>
                    @if($errors->has('password'))
                        <div class="text-danger">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <br>

                <div class="confirm-password">
                    <label for="confirm-password">تأیید گذرواژه:</label>
                    <input type="password" class="confirm-password bg-secondary text-light" name="password_confirm" id="confirm-password" required>
                    @if($errors->has('confirm-password'))
                        <div class="text-danger">{{ $errors->first('confirm-password') }}</div>
                    @endif
                </div>

                <div class="policy">
                    <input type="checkbox" name="remember_token" id="remember_token">
                    <label for="remember_token"><h5>من را به خاطر بسپار</h5></label>
                </div>
                <br>

                <button class="btn btn-success" type="submit">ثبت نام</button>
            </div>
        </form>
    </section>
@endsection
