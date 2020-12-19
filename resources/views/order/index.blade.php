@extends('layouts.app')

@section('content')

<body>

    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">Užsakymo kodas</th>
                    <th scope="col">Sukūrmo data</th>
                    <th scope="col">Kaina</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <th scope="row">{{ $order->id }}</th>
                    <th scope="row">{{ $order->creation_date }}</th>
                    <th scope="row">{{ $order->price }}</th>
                    <td><a href="{{"/order" . "/"  . $order->id}}" class="btn btn-xs btn-info pull-right">Plačiau</a></td>
                    <td><a href="{{"/order/edit" . "/"  . $order->id}}" class="btn btn-xs btn-info pull-right">Redaguoti</a></td>
                    <td><a href="{{"/order/decline" . "/"  . $order->id}}" class="btn btn-xs btn-info pull-right">Atšaukti</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection