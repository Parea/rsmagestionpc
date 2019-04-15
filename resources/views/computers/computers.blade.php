@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-sm-12">
	  <div class="panel panel-info">
    <h2>Les clients</h2>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Visiteurs</th>
            <th>Pc utilisé</th>
            <th>Heure d'utilisation</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($assignments AS $assignment)
            <tr>
              <td>#{{ $assignment->id }}</td>
              <td>{{ $assignment->client_id }}</td>
              <td>{{ $assignment->computer_id }}</td>
              <td>{{ $assignment->hour_id }}</td>
                <td>
                  <a href="assignment/{{$assignment->id}}/edit" button class="btn btn-success btn-small btn-detail">Modifier</a>
                  <a href="assignment/{{$assignment->id}}/delete" button class="btn btn-danger btn-small btn-delete">Supprimer</a>
                </td>
            </tr>
          @endforeach
          <a href="assignment/new" button class="btn btn-success pull-right btn-small">Nouvel association</a>
        </tbody>
      </table>
    </div>
  </div>
  </div>
@endsection