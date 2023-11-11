@extends('layout-main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Csapat szerkesztése</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('table') }}"> Vissza</a>
            </div>
        </div>
    </div>

    <form action="{{ route('table') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Csapatnév:</strong>
                    <input type="text" name="name" value="{{ $table["name"] }}" required class="form-control">
                </div>
                <div class="form-group">
                    <strong>Játszott meccsek:</strong>
                    <input type="number" name="played" value="{{ $table["played"] }}" required class="form-control">
                </div>
                <div class="form-group">
                    <strong>Győzelmek száma:</strong>
                    <input type="number" name="win" value="{{ $table["win"] }}" required class="form-control">
                </div>
                <div class="form-group">
                    <strong>Döntetlenek száma:</strong>
                    <input type="number" name="draw" value="{{ $table["draw"] }}" required class="form-control">
                </div>
                <div class="form-group">
                    <strong>Vesztések száma:</strong>
                    <input type="number" name="defeat" value="{{ $table["defeat"] }}" required class="form-control">
                </div>
                <div class="form-group">
                    <strong>Gólok:</strong>
                    <input type="number" name="goals" value="{{ $table["goals"] }}" required class="form-control">
                </div>
                <div class="form-group">
                    <strong>Pontok:</strong>
                    <input type="number" name="points" value="{{ $table["points"] }}" required class="form-control">
                </div>
                <input type="hidden" name="id" value="{{ $table["id"] }}">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Mentés</button>
            </div>
        </div>
    </form>
@endsection
