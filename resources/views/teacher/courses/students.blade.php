@extends('layouts.app')

@section('title', 'Estudiantes de ' . $course->name)

@section('breadcrumbs')
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Inicio</a>
            </li>
            <li class="breadcrumb-item active">
                Estudiantes de {{ $course->name }}
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
            <tbody id="students">
                @foreach ($course->students as $student)
                    <tr>
                        <td>{{ $student->name . ' ' . $student->surname }}</td>
                        <td>{{ $student->email }}</td>
                        <td class="d-flex">
                            {{-- Cambiar nota --}}
                            <span class="m-1">
                                <a href="{{ route('courses.change-note', [$course->id, $student->id]) }}" class="btn btn-success btn-sm {{ ($enable) ? 'disabled' : '' }}" data-toggle="tooltip" data-placement="top" title="Cambiar nota">
                                    <i class="fa fa-calculator" aria-hidden="true"></i>
                                </a>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection