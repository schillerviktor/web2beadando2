@extends('layout-main')

@section('content')
    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <h1 class="h3 mb-3 fw-normal">Regisztráció</h1>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail cím" required="required" autofocus>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Felhasználónév" required="required" autofocus>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Jelszó" required="required">
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Jelszó ismétlése" required="required">
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-success" type="submit">Regisztrál</button>
    </form>
@endsection
