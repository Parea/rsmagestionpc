@extends('layouts.app')

@section('content')
    <br>
	<div class="col-sm-offset-3 col-sm-8">
		<div class="panel panel-success">
			<div class="panel-heading">Ajout d'un nouveau client</div>
			<div class="panel-body"> 
				Merci. Le client à bien été ajouté.
			</div>
			<div>
				<a href="{{ url('/home/users') }}" button class="btn btn-primary btn-small pull-right">Retour</a>
			</div>
		</div>
	</div>
@endsection