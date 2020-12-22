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
                        <table class="table table-bordered mb-5">
                            <thead>
                            <tr class="table-success">
                                <th scope="col">Prekės kodas</th>
                                <th scope="col">Pavadinimas</th>
                                <th scope="col">Garantija</th>
                                <th scope="col">Kaina</th>
                                <th scope="col">Specifikacija</th>
                                <th scope="col">Atsiliepti</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $data)
                                <tr>
                                    <th scope="row">{{ $data->id }}</th>
                                    <th scope="row">{{ $data->name }}</th>
                                    <th scope="row">{{ $data->warranty }}</th>
                                    <th scope="row">{{ $data->price }}</th>
                                    <th scope="row">{{ $data->specification }}</th>
                                    <th scope="row">
                                        <form action="{{ route('feedbacks.create_view', ['product_id' => $data->id]) }}" method="GET">
                                            @csrf
                                            <input type="submit" value="Atsiliepti" />
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
@endsection
