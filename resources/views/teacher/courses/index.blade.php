@extends('layouts.app')

@section('title', 'Cursos asignados')

@section('breadcrumbs')
	<div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Inicio</a>
            </li>
            <li class="breadcrumb-item active">
                Cursos asignados
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
                    <th class="text-left">Opciones</th>
                </tr>
            </thead>
            <tbody id="courses"
                @foreach ($courses as $course)
                	<tr>
                        <td>{{ $course->name}}</td>
	                	<td class="d-flex">
                            {{-- Editar --}}
                            <span class="m-1">
                                <a href="{{ route('courses.students', [$course->id]) }}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Lista de alumnos">
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                </a>
                            </span>
	                	</td>
                	</tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection