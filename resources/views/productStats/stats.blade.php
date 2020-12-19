@extends('layouts.app')

@section('content')

<body>
    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">Suma</th>
                    <th scope="col">Kiekis</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{ $pricesum ?? '' }}</th>
                <th scope="row">{{ $kiekis ?? '' }}</th>
            </tr>
            </tbody>
        </table>
    </div>
</body>
@endsection