@extends('layouts.app')

@section('title', 'Nuevo profesor')

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
                Nuevo profesor
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

						<form action="{{ route('users.store', ['role' => $role]) }}" method="post">
							@csrf

							<div class="form-group row">
								<label class="col-lg-3 col-form-label">
									Nombre
									<span class="text-danger">*</span>
								</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="name" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">
									Apellido
									<span class="text-danger">*</span>
								</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="surname" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">
									Correo
									<span class="text-danger">*</span>
								</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="email" required>
								</div>
							</div>
							<div class="form-group row">
							    <div class="col-lg-8 ml-auto">
							        <button type="submit" class="btn btn-primary">
							        	Guardar
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