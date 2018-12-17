@extends('layouts.app')

@section('title', 'Estudiantes')

@section('options')
    <a href="{{ route('users.create', ['role' => 'student']) }}">
        Crear estudiante
        <i class="fa fa-plus"></i>
    </a>
@endsection

@section('breadcrumbs')
	<div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Inicio</a>
            </li>
            <li class="breadcrumb-item active">
                Estudiantes
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="table-responsive m-t-40">
        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre y apellido</th>
                    <th>Correo</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody id="students"
                @foreach ($students as $student)
                	<tr>
                        <td>{{ $student->name . ' ' . $student->surname }}</td>
	                	<td>{{ $student->email }}</td>
	                	<td class="d-flex">
	                		{{-- Ver --}}
	                		<span class="m-1">
                                <a href="{{ route('users.show', [$student->id]) }}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Ver estudiante">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                            </span>

                            {{-- Editar --}}
                            <span class="m-1">
                                <a href="{{ route('users.edit', [$student->id]) }}" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar estudiante">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                            </span>

                            {{-- Eliminar --}}
                            <span class="m-1" data-target="#deleteModal{{ $student->id }}" data-toggle="modal">
                                <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar profesor">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </span>

                            @include('admin.users.delete-modal', ['user' => $student])
	                	</td>
                	</tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection