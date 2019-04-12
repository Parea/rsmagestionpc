@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
    <div class="col-sm-offset-4 col-sm-5">
      <div class="panel panel-success">
        <div class="panel-heading">Associé un PC a un client</div>
          <div class="panel-body">
            {!! Form::open(['url' =>'/home/computer/create']) !!}
            <label>Clients</label>{!! Form::select('client_id', array('L' => 'Large', 'S' => 'Small')) !!}<br/>
            <label>Ordinateur</label>{!! Form::select('computer_id', array('L' => 'Large', 'S' => 'Small')) !!}<br/>
            <label>Horaires</label>{!! Form::select('hour_id', array('L' => 'Large', 'S' => 'Small')) !!}<br/>
            {!! Form::submit('Envoyer !', ['class' => 'btn btn-success pull-right']) !!}<br/>
            {!! Form::close() !!}
          </div>
        </div>
    </div>
  </div>
@endsection