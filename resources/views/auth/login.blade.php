@extends('layout-main')

@section('content')
    <form method="post" action="{{ route('login.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <h1 class="h3 mb-3 fw-normal">Bejelentkezés</h1>

        @include('layout.messages')

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

        <button class="w-100 btn btn-lg btn-success" type="submit">Belépés</button>

    </form>
@endsection
