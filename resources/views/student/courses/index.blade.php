@extends('layouts.app')

@section('title', 'Cursos')

@section('breadcrumbs')
	<div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Inicio</a>
            </li>
            <li class="breadcrumb-item active">
                Cursos inscritos
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
                    <th>Nota</th>
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
                        <td>
                            {{ $course->pivot->qualification }}
                        </td>
                	</tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection