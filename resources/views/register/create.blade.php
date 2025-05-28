@extends('layouts1.app')
@section('content1')
    <section id="formCreate" style="text-align: center;justify-content: center" class="bg-info ">
        <form action="{{route('register')}}" method="post" enctype="multipart/form-data"  >
            @csrf
            <div class="form mt-3">
                <div class="name">
                    <label for="name">
                        <input type="text" class="name bg-secondary text-light" name="name" >
                    </label>
                    @if($errors->has('name'))
                        <div class="text-danger">{{$errors->first('name')}}</div>
                    @endif

                </div>
                <br>
                <div class="userName">
                    <label for="userName">
                        <input type="text" class="userName bg-secondary text-light" name="userName">
                    </label>
                    @if($errors->has('userName'))
                        <div class="text-danger">{{$errors->first('userName')}}</div>
                    @endif
                </div>
                <br>
                <div class="email">
                    <label for="email">
                        <input type="email" class="email bg-secondary text-light" name="email">
                    </label>
                    @if($errors->has('email'))
                        <div class="text-danger">{{$errors->first('email')}}</div>
                    @endif
                </div>
                <br>
                <div class="password">
                    <label for="password">
                        <input type="password" class="password bg-secondary text-light" name="password">
                    </label>
                    @if($errors->has('password'))
                        <div class="text-danger">{{$errors->first('password')}}</div>
                    @endif
                </div>
                <br>
                <div class="confirm-password">
                    <label for="confirm-password">
                        <input type="password" class="confirm-password bg-secondary text-light" name="password_confirmation">
                    </label>
                    @if($errors->has('confirm-password'))
                        <div class="text-danger">{{$errors->first('confirm-password')}}</div>
                    @endif
                </div>
                <div class="policy">
                    <input type="checkbox" name="remember_token">
                    <h3 >من را به خاطر بسپار</h3>
                </div>
                <br>
                <button class="btn btn-success" type="submit">ثبت نام</button>
            </div>
        </form>
    </section>
@endsection
