@extends('layouts.app')

@section('title', 'Detalles de profesor')

@section('options')
	<a href="{{ route('teachers') }}">
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
                <a href="{{ route('teachers') }}">Profesores</a>
            </li>
            <li class="breadcrumb-item active">
                Detalles de profesor
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
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">
								Nombre
							</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" value="{{ $user->name }}" disabled>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">
								Apellido
							</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" value="{{ $user->surname }}" disabled>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">
								Correo
							</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" value="{{ $user->email }}" disabled>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection