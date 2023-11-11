@extends('layout-main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left mb-4">
                <h2>Tabella</h2>
            </div>
            @if(Gate::check('isAdmin') || Gate::check('isManager'))
                <div class="float-right">
                    <a class="btn btn-success" href="{{ route('table.create') }}"> Új csapat hozzáadása</a>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped mb-5">
                <thead>
                <tr>
                    <th>Ssz.</th>
                    <th>Csapatnév</th>
                    <th>Játszott</th>
                    <th>Nyertes</th>
                    <th>Döntetlen</th>
                    <th>Vereség</th>
                    <th>Gól</th>
                    <th>Pont</th>
                    @if(Gate::check('isAdmin'))
                        <th></th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach ($table as $team)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $team["name"] }}</td>
                        <td>{{ $team["played"] }}</td>
                        <td>{{ $team["win"] }}</td>
                        <td>{{ $team["draw"] }}</td>
                        <td>{{ $team["defeat"] }}</td>
                        <td>{{ $team["goals"] }}</td>
                        <td>{{ $team["points"] }}</td>
                        @if(Gate::check('isAdmin'))
                            <td>
                                <form action="{{ route('table') }}" method="POST" class="float-right">
                                    <a class="btn btn-primary" href="{{ route('editTable', $team["id"]) }}">Szerkeszt</a>
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $team["id"] }}">
                                    <button type="submit" class="btn btn-danger">Töröl</button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div>
        <canvas id="myChart"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const labels = {!! json_encode($names) !!};
        const data = {
            labels: labels,
            datasets: [{
                label: 'Pontok eloszlása a csapatok között',
                data: {!! json_encode($points) !!},
                backgroundColor: [
                    'rgba(255, 0, 0, 0.2)',
                    'rgba(230, 230, 230, 0.2)',
                    'rgba(10, 150, 10, 0.2)'   
                ],
                borderColor: [
                    'rgb(255, 0, 0)',
                    'rgb(100, 100, 100)',
                    'rgb(10, 150, 10)',
                ],
                borderWidth: 1
            }]
        };

        var config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
@endsection
