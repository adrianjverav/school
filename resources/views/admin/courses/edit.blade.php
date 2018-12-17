@extends('layouts.app')

@section('title', 'Edición de curso')

@section('options')
	<a href="{{ route('courses.index') }}">
	    Volver al listado
	    <i class="fa fa-list"></i>
	</a>
@endsection

@section('breadcrumbs')
	<div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Inicio</a>
            </li>
            <li class="breadcrumb-item ">
                <a href="{{ route('courses.index') }}">Cursos</a>
            </li>
            <li class="breadcrumb-item active">
                Edición de curso
            </li>
        </ol>
    </div>
@endsection

@section('content')
	<div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-body">
					<div class="form-validation">
						<form action="{{ route('courses.update', [$course->id]) }}" method="post">
							@csrf
							@method('PUT')
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">
									Nombre
									<span class="text-danger">*</span>
								</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="name" value="{{ $course->name }}" required>
								</div>
							</div>
							<div class="form-group row">
							    <div class="col-lg-8 ml-auto">
							        <button type="submit" class="btn btn-primary">
							        	Actualizar
							        </button>
							    </div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection