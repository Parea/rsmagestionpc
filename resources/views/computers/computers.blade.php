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
            @foreach($assignments AS $as)
              <tr>
                <td>#{{ $as->id }}</td>
                <td>{{ $as->firstname }}</td>
                <td>{{ $as->name_pc}}</td>
                <td>{{ $as->hour_range }}</td>
                  <td>
                    <a href="assignment/{{$as->id}}/edit" button class="btn btn-success btn-small btn-detail">Modifier</a>
                    <a href="assignment/{{$as->id}}/delete" button class="btn btn-danger btn-small btn-delete">Supprimer</a>
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