@extends('master')
@section('titulo', 'Aluno')
@section('conteudo')
<div>
	{!! Html::ul($errors->all()) !!}
	{!! Form::open(['url' => 'aluno']) !!}
		<div>
			{!! Form::label('nome', 'Nome *') !!}
			{!! Form::text('nome') !!}
		</div>
		<div>
			{!! Form::label('endereco', 'Endereço *') !!}
			{!! Form::text('endereco') !!}			
		</div>
		<div>
			{!! Form::label('dataNascimento', 'Data Nascimento *') !!}
			{!! Form::text('dataNascimento') !!}			
		</div>
	{!! Form::submit('Salvar') !!}
	{!! Form::close() !!}
</div>
@stop