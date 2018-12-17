@extends('layouts.app')

@section('title', 'Cursos')

@section('options')
    <a href="{{ route('courses.create') }}">
        Crear curso
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
                Cursos
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="table-responsive m-t-40">
        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre de curso</th>
                    <th>Profesor asignado</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody id="courses"
                @foreach ($courses as $course)
                	<tr>
                        <td>{{ $course->name}}</td>
                        <td>
                            @if ($course->teacher)
                                {{ $course->teacher['name'] . ' ' . $course->teacher['surname']}}
                            @else
                                No asignado
                            @endif
                        </td>
	                	<td class="d-flex">
                            {{-- Editar --}}
                            <span class="m-1">
                                <a href="{{ route('courses.edit', [$course->id]) }}" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar curso">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                            </span>

                            {{-- Asignar profesor --}}
                            <span class="m-1">
                                <a href="{{ route('courses.assign-teacher', [$course->id]) }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Asignar profesor">
                                    <i class="fa fa-university" aria-hidden="true"></i>
                                </a>
                            </span>

                            {{-- Agregar alumno al curso --}}
                            <span class="m-1">
                                <a href="{{ route('courses.add-student', [$course->id]) }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Agregar alumno al curso">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                </a>
                            </span>

                            {{-- Eliminar --}}
                            <span class="m-1" data-target="#deleteModal{{ $course->id }}" data-toggle="modal">
                                <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar curso">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </span>

                            @include('admin.courses.delete-modal', ['user' => $course])
	                	</td>
                	</tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection