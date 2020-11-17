@extends('layouts.app')

@section('content')
<table class="table table-hover">

    <thead>

      <th>Username</th>

      <th>Surname</th>

    </thead>

    <tbody>
@foreach($users as $user)

        <tr>

          <td>{{$user->name}} </td>

          <td>{{$user->email}} </td>

          <td><a href="{{"/employees" . "/delete" . "/"  . $user->id}}" class="btn btn-xs btn-info pull-right">Ištrynti</a></td>
        </tr>
@endforeach

    </tbody>

</table>
@endsection