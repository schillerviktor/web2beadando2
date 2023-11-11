@extends('layout-main')

@section('content')
<form action="{{ route('table') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left mb-4">
                <h2>Csapat hozzáadása</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Csapatnév:</strong>
                <input type="text" name="name" required class="form-control">
            </div>
            <div class="form-group">
                <strong>Játszott meccsek:</strong>
                <input type="number" name="played" required class="form-control">
            </div>
            <div class="form-group">
                <strong>Győzelmek száma:</strong>
                <input type="number" name="win" required class="form-control">
            </div>
            <div class="form-group">
                <strong>Döntetlenek száma:</strong>
                <input type="number" name="draw" required class="form-control">
            </div>
            <div class="form-group">
                <strong>Vesztések száma:</strong>
                <input type="number" name="defeat" required class="form-control">
            </div>
            <div class="form-group">
                <strong>Gólok:</strong>
                <input type="number" name="goals" required class="form-control">
            </div>
            <div class="form-group">
                <strong>Pontok:</strong>
                <input type="number" name="points" required class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Mentés</button>
        </div>
    </div>

</form>
@endsection
