@extends('layouts.app')

@section('content')
    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Atsiliepimai</div>
                    <div class="card-body">
                        @if($feedbacks->count() > 0)
                        <table class="table table-bordered mb-5">
                            <thead>
                            <tr class="table-success">
                                <th scope="col">Vartotojo vardas</th>
                                <th scope="col">Reitingas</th>
                                <th scope="col">Komentaras</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($feedbacks as $data)
                                <tr>
                                    <th scope="row">{{ $data->user->username }}</th>
                                    <th scope="row">{{ $data->rating }}</th>
                                    <th scope="row">{{ $data->comment }}</th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                            <p>Atsiliepimų nėra!</p>
                        @endif
                        <div class="d-flex justify-content-center">
                            {{ $feedbacks->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
