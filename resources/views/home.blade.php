@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                @foreach ($dresses as $dress)
                    <div class="col d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Tipo vestito: {{ $dress->type }}</h5>
                                <p class="card-text">Taglia vestito: {{ $dress->size }}</p>
                                <p class="card-text">Colore vestito: {{ $dress->color }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection

@section('page-title', 'Homepage - Laravel Shop')
