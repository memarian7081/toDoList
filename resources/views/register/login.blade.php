

    @extends('layouts1.app')

    @section('content1')
        <div id="login" class="text-center" style="margin-top: 2%">
            <form action="{{ route('login.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="userName" class="mt-8">Username</label>
                    <input type="text" class="form-control userName mt-5" name="userName" id="userName" style="" >
                    @if($errors->has('userName'))
                        <div class="text-danger">{{ $errors->first('userName') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password" class="mt-2">Password</label>
                    <input type="password" class="form-control password" name="password" id="password">
                    @if($errors->has('password'))
                        <div class="text-danger">{{ $errors->first('password') }}</div>
                    @endif
                </div>

                <button class="btn btn-success mt-5" type="submit" style="margin-left: 4%">ورود</button>
            </form>
        </div>
    @endsection



