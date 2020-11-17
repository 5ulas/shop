@extends('layouts.app')

@section('content')
    <body>
        <div class="container mt-5">

            <a style="margin-bottom: 50px "href="{{"/product/create"}}" class="btn btn-xs btn-info pull-right">Naujas</a>

            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">Prekės kodas</th>
                        <th scope="col">Pavadinimas</th>
                        <th scope="col">Garantija</th>
                        <th scope="col">Kaina</th>
                        <th scope="col">Specifikacija</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->warranty }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->specification }}</td>
                        
                    <td><a href="{{"/product" . "/"  . $data->id}}" class="btn btn-xs btn-info pull-right">Plačiau</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>
        </div>
    </body>
@endsection