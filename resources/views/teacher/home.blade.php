@extends('layouts.app')

@section('title', 'Inicio')

@section('breadcrumbs')
	<div class="col-md-7 align-self-center">
	    <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	            <a href="javascript:void">Inicio</a>
	        </li>
	        <li class="breadcrumb-item active">
	            Escritorio
	        </li>
	    </ol>
	</div>
@endsection

@section('content')
	@include('teacher.partials.box-charts')
@endsection
