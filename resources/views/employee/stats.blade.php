@extends('layouts.app')

@section('content')
<table class="table table-hover">

    <thead>

      <th>Viso pardavimų</th>

      <th>Viso nuolaidų</th>

      <th>Iš jų sumokėti</th>

    </thead>

    <tbody>
    <td>{{$sum}} </td>
    <td>{{$discounts}} </td>
    <td>{{$paid}} </td>

    </tbody>
</table>
<table class="table table-hover">

    <thead>

      <th>Sukurtas</th>

      <th>Įvykdytas</th>

      <th>Adresas</th>

    </thead>

    <tbody>
@foreach($ords as $ord)

        <tr>

          <td>{{$ord->creation_date}} </td>

          <td>{{$ord->status?"Taip":"Ne"}} </td>

          <td>{{$ord->delivery_address}}</td>

          
        </tr>
@endforeach

    </tbody>

</table>
@endsection