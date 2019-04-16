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
            <th>Nom</th>
            <th>Prénom</th>
            <th>Numéro de téléphone</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($clients AS $client)
            <tr>
              <td>#{{ $client->id }}</td>
              <td>{{ $client->lastname }}</td>
              <td>{{ $client->firstname }}</td>
              <td>{{ $client->number_phone }}</td>
                <td>
                  <a href="client/{{$client->id}}/edit" button class="btn btn-success btn-small btn-detail">Modifier</a>
                  <a href="client/{{$client->id}}/delete" button class="btn btn-danger btn-small btn-delete">Supprimer</a>
                </td>
            </tr>
          @endforeach
          <a href="client/new" button class="btn btn-success pull-right btn-small">Nouveau client</a>
        </tbody>
      </table>
    </div>
  </div>
  </div>
@endsection