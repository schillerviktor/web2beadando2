@extends('layout-main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left mb-4">
                <h2>Játékosok</h2>
            </div>
            @if(Gate::check('isAdmin'))
                <div class="float-right">
                    <a class="btn btn-success" href="{{ route('players.create') }}"> Új játékos hozzáadása</a>
                </div>
            @endif
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3">
            <p class="mb-0">{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <tr>
            <th>No</th>
            <th>Vezetéknév</th>
            <th>Keresztnév</th>
            <th>Mez</th>
            <th>Születési idő</th>
        </tr>
        @foreach ($players as $player)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $player->vezeteknev }}</td>
                <td>{{ $player->utonev }}</td>
                <td>{{ $player->mezszam }}</td>
                <td>{{ $player->szulido }}</td>
                @if(Gate::check('isAdmin'))
                <td>
                    <form action="{{ route('players.destroy',$player->id) }}" method="POST" class="float-right">
                            <a class="btn btn-primary" href="{{ route('players.edit',$player->id) }}">Szerkeszt</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Töröl</button>
                    </form>
                </td>
                @endif
            </tr>
        @endforeach
    </table>

@endsection
