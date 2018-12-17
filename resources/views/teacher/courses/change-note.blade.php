@extends('layouts.app')

@section('title', 'Modificación de nota')

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
                <a href="{{ route('courses.index') }}">Profesores</a>
            </li>
            <li class="breadcrumb-item active">
                Modificación de nota
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

						<form action="{{ route('courses.update-note', [$course->id, $student->id]) }}" method="post">
							@csrf
							@method('PUT')
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">
									Curso
									<span class="text-danger">*</span>
								</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" value="{{ $course->name }}" disabled>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">
									Nota
									<span class="text-danger">*</span>
								</label>
								<div class="col-lg-9">
									<input type="text" name="note" class="form-control{{ $errors->has('note') ? ' is-invalid' : '' }}" value="{{ old('note') }}" placeholder="0-20" required>

									@if ($errors->has('note'))
									    <span class="invalid-feedback" role="alert">
									        <strong>{{ $errors->first('note') }}</strong>
									    </span>
									@endif
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