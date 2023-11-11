@extends('layout-main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Játékos szerkesztése</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('players.index') }}"> Vissza</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Hiba!</strong><br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('players.update',$player->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Vezetéknév:</strong>
                    <input type="text" name="vezeteknev" value="{{ $player->vezeteknev }}" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Utónév:</strong>
                    <input type="text" name="utonev" value="{{ $player->utonev }}" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Mezszám:</strong>
                    <input type="number" name="mezszam" value="{{ $player->mezszam }}" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Klub:</strong>
                    <select name="klubid" id="klubid" class="form-control form-control-md">
                        @foreach ($clubs as $club)
                            <option value="{{ $club->id }}" @if ($club->id == $player->klubid) selected="selected" @endif>
                                {{ $club->csapatnev }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <strong>Poszt:</strong>
                    <select name="posztid" id="posztid" class="form-control form-control-md">
                        @foreach ($positions as $position)
                            <option value="{{ $position->id }}" @if ($position->id == $player->posztid) selected="selected" @endif>
                                {{ $position->nev }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <strong>Érték:</strong>
                    <input type="number" name="ertek" value="{{ $player->ertek }}" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Születési dátum:</strong>
                    <input type="date" name="szulido" value="{{ $player->szulido }}" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Nemzetiség:</strong>
                    <select name="nationality" id="nationality" class="form-control form-control-md">
                        <option value="1" @if ($player->magyar == 1) selected="selected" @endif>
                            Magyar
                        </option>
                        <option value="2" @if ($player->kulfoldi == 1) selected="selected" @endif>
                            Külföldi
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Módosít</button>
            </div>
        </div>

    </form>
@endsection
