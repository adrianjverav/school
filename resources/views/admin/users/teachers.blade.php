@extends('layouts.app')

@section('title', 'Profesores')

@section('options')
    <a href="{{ route('users.create', ['role' => 'teacher']) }}">
        Crear profesor
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
                Profesores
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
            <tbody id="teachers">
                @foreach ($teachers as $teacher)
                	<tr>
                        <td>{{ $teacher->name . ' ' . $teacher->surname }}</td>
	                	<td>{{ $teacher->email }}</td>
	                	<td class="d-flex">
	                		{{-- Ver --}}
	                		<span class="m-1">
                                <a href="{{ route('users.show', [$teacher->id]) }}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Ver profesor">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                            </span>

                            {{-- Editar --}}
                            <span class="m-1">
                                <a href="{{ route('users.edit', [$teacher->id]) }}" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar profesor">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                            </span>

                            {{-- Eliminar --}}
                            <span class="m-1" data-target="#deleteModal{{ $teacher->id }}" data-toggle="modal">
                                <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar profesor">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </span>

                            @include('admin.users.delete-modal', ['user' => $teacher])
	                	</td>
                	</tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection