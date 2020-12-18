@extends('layouts.app')

@section('content')
<table class="table table-hover">

    <thead>

      <th>Username</th>

      <th>Email</th>

      <th>Rolė</th>

    </thead>

    <tbody>
@foreach($users as $user)

        <tr>

          <td>{{$user->username}} </td>

          <td>{{$user->email}} </td>

          <td>{{$user->role}}</td>

          <td><a href="{{"/employees" . "/delete" . "/"  . $user->id}}" class="btn btn-xs btn-info pull-right">Ištrinti</a></td>
        </tr>
@endforeach

    </tbody>

</table>
@endsection