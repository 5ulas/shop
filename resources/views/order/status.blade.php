@extends('layouts.app')

@section('content')

<body>

    <div class="container mt-5">

        <a style="margin-bottom: 50px " href="{{"/product/create"}}" class="btn btn-xs btn-info pull-right">Naujas</a>

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">Užsakymo kodas</th>
                    <th scope="col">Sukūrmo data</th>
                    <th scope="col">Kaina</th>
                    <th scope="col">Pristatymo adresas</th>
                    <th scope="col">Nuolaida</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <th scope="row">{{ $order->id }}</th>
                    <th scope="row">{{ $order->creation_date }}</th>
                    <th scope="row">{{ $order->price }}</th>
                    <th scope="row">{{ $order->delivery_address }}</th>
                    <th scope="row">{{ $order->discount }}</th>
                    <td><a href="{{"/order" . "/"  . $order->id}}" class="btn btn-xs btn-info pull-right">Plačiau</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection