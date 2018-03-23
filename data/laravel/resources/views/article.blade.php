@extends('layout.master')
@section('title','Article')

@section('content')
    <h1>Articles</h1>
    <p>This is my body content for article</p>
    <div>
		<div>
        <table>
        <tr>
            <th>Nom de la guitar</th>
            <th>Marque</th>
            <th>Type</th>
        </tr>
       
    </div>
        </table>
			<div>Ajouter une guitare</div>
			<div> 
				{!! Form::open(['route' => 'storeGuitar']) !!}
					<div>
                        {!! form::text('nom') !!}
						{!! Form::select('marque', ['Gibson','Fender','Godin','Ibanez','Taylor']) !!}
                        {!! Form::select('type', ['Classic','Folk','Acoustic','Electrique']) !!}
					</div>
					{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
    <div>
@stop