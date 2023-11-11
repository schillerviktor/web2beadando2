@extends('layout-main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('clubs.create') }}"> Create New Product</a>
            </div>
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
            <th>Név</th>
            <th></th>
        </tr>
        @foreach ($clubs as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->csapatnev }}</td>
                <td>
                    <form action="{{ route('clubs.destroy',$product->id) }}" method="POST" class="float-right">
                        <a class="btn btn-primary" href="{{ route('clubs.edit',$product->id) }}">Szerkeszt</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Töröl</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $clubs->links() !!}

@endsection
