@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
    <div class="col-sm-offset-4 col-sm-5">
      <div class="panel panel-success">
        <div class="panel-heading">Ajouter un nouveau client</div>
          <div class="panel-body">
            {!! Form::open(['url' =>'/home/client/create']) !!}
            <label>Nom</label>{!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'nom']) !!}<br/>
            <label>Prenom</label>{!! Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'prénom']) !!}<br/>
            <label>Numéro de téléphone</label>{!! Form::number('number_phone', null, ['class' => 'form-control', 'placeholder' => 'numéro de téléphone']) !!}<br/>
            {!! Form::submit('Envoyer !', ['class' => 'btn btn-success pull-right']) !!}<br/>
            {!! Form::close() !!}
          </div>
        </div>
    </div>
  </div>
@endsection