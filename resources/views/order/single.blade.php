@extends('layouts.app')

@section('content')
    <body>
        <div class="container mt-5">
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">Užsakymo kodas</th>
                        <th scope="col">Sukūrmo data</th>
                        <th scope="col">Periodas</th>
                        <th scope="col">Statusas</th>
                        <th scope="col">Baigtas</th>
                        <th scope="col">Adresas</th>
                        <th scope="col">Nuolaida</th>
                        <th scope="col">Kaina</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <th scope="row">{{ $order->creation_date }}</th>
                        <th scope="row">{{ $order->period }}</th>
                        <th scope="row">{{ $order->status }}</th>
                        <th scope="row">{{ $order->done }}</th>
                        <th scope="row">{{ $order->delivery_address }}</th>
                        <th scope="row">{{ $order->discount }}</th>
                        <th scope="row">{{ $order->price }}</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
@endsection