@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
    <div class="col-sm-offset-4 col-sm-5">
      <div class="panel panel-success">
        <div class="panel-heading">Associé un PC a un visiteur</div>
          <div class="panel-body">
            {!! Form::open(['url' =>'/home/assignment/create']) !!}
            <label>Visiteurs</label>{{ Form::select('client_id', $client, '', ['class' => 'form-control']) }}<br/>
            <label>Ordinateurs</label>{!! Form::select('computer_id', $computer, '', ['class' => 'form-control'])!!}<br/>
            <label>Horaires</label>{!! Form::select('hour_id', $hour, '', ['class' => 'form-control']) !!}<br/>
            {!! Form::submit('Associé !', ['class' => 'btn btn-success pull-right']) !!}<br/>
            {!! Form::close() !!}
              </select>
          </div>
        </div>
    </div>
  </div>
@endsection