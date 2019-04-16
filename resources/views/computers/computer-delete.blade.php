@extends('layouts.app')

@section('content')
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			<div class="panel-heading">Supprimer une association</div>
			<div class="panel-body"> 
				Merci l'association à bien été supprimer.
			</div>
			<div>
				<a href="{{ url('/home/assignments') }}" button class="btn btn-primary btn-small pull-right">Retour</a>
			</div>
		</div>
	</div>
@endsection