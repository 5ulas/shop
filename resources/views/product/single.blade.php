@extends('layouts.app')

@section('content')
    <body>
        <div class="container mt-5">
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">Prekės kodas</th>
                        <th scope="col">Pavadinimas</th>
                        <th scope="col">Garantija</th>
                        <th scope="col">Kaina</th>
                        <th scope="col">Specifikacija</th>
                        <th scope="col">Aprašymas</th>
                        <th scope="col">Laikoma nuo</th>
                        <th scope="col">Tūris</th>
                        <th scope="col">Svoris</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->warranty }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->specification }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->stored_since }}</td>
                        <td>{{ $product->volume }}</td>
                        <td>{{ $product->weight }}</td>
                        @if(Auth::check())
                            @if(Auth::user()->role == 'employee' || Auth::user()->role == 'manager')
                            <td>
                                <form action="{{ route('product.remove', ['id' => $product->id]) }}" method="POST">
                                    @csrf
                                    <input type="submit" value="Ištrinti" />
                                </form>
                            </td>
                            @endif
                        @endif
                        <td>
                            <form action="{{ route('feedbacks.show', ['product_id' => $product->id]) }}" method="GET">
                                @csrf
                                <input type="submit" value="Atsiliepimai" />
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
@endsection
