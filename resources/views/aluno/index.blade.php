@extends('master')
@section('titulo', 'Aluno')
@section('conteudo')
	<a href='/aluno/create'>Novo Aluno</a>
	<table>
		<tr>
			<th>Nome</th>
			<th>Endereço</th>
			<th>Data Nasc.</th>
		</tr>
	@foreach($alunos as $a)
		<tr>
			<td>{{$a->nome}}</td>
			<td>{{$a->endereco}}</td>
			<td>{{$a->dataNascimento}}</td>
	@endforeach
	</table>
@stop
