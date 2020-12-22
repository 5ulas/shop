@extends('layouts.app')

@section('content')

<body>

    <div class="container mt-5">
        @if(Auth::check())
        <a style="margin-bottom: 50px " href="{{"/product/create"}}" class="btn btn-xs btn-info pull-right">Naujas</a>
        <a style="margin-bottom: 50px " href="{{ route('productStats')}}" class="btn btn-xs btn-info pull-right">Statistika</a>
        @endif
        <form action="{{ route('products')}}" method="GET">
            <div class="toolbar-sorter">
                <span>Sort By</span>
                <select name="sorter" class="sorter-options" style="width:150px; " data-role="sorter">
                    <option selected="name" value='name'>Rikiuoti</option>
                    <option value='name'>Pavadinimas</option>
                    <option value='warranty'>Garantija</option>
                    <option value='price_descending'>Kaina 9-0</option>
                    <option value='price_ascending'>Kaina 0-9</option>
                </select>
            </div>
            <button type="submit">Filter</button>
        </form>

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
                    @if(Auth::check())
                    <td><a href="{{"/order/create" . "/id/"  . $data->id . "/date/" . date('Y-m-d') . "/period/" . date('Y-m-d') . "/status/" . "Patvirtintas" . "/done/" . "0" . "/price/" . $data->price }}" class="btn btn-xs btn-info pull-right">Užsakyti</a></td>
                    @endif
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
