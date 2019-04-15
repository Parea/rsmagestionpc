@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
    <div class="col-sm-offset-4 col-sm-5">
      <div class="panel panel-success">
        <div class="panel-heading">Associé un PC a un visiteur</div>
          <div class="panel-body">
            {!! Form::open(['url' =>'/home/assignment/create']) !!}
            <label>Clients</label>{{ Form::select('client_id', $client, '', ['class' => 'form-control']) }}<br/>
            <label>Ordinateur</label>{!! Form::select('computer_id', $computer, '', ['class' => 'form-control'])!!}<br/>
            <label>Horaires</label>{!! Form::select('hour_id', $hour, '', ['class' => 'form-control']) !!}<br/>
            {!! Form::submit('Associé !', ['class' => 'btn btn-success pull-right']) !!}<br/>
            {!! Form::close() !!}
            {{-- <label for="clients-content">Visiteur</label>
              <select name="clients" id="clients" class="form-control input-lg dynamic">+
                <option value="">Selectionner visiteur</option>
                
                @foreach($clients as $client)
                  <option value="{{ $client->id}}">{{ $client->firstname }}</option>
                @endforeach
              </select> --}}
          </div>
        </div>
    </div>
  </div>
@endsection