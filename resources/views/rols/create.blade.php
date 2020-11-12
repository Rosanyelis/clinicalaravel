@extends('layouts.panel')

@section('title', 'Clínica - Roles - Crear Registro')


@section('head')
    
@endsection


@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Roles</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <a class="breadcrumb-item" href="javascript:void(0)">Dashboard</a>
                <span class="breadcrumb-item active">Roles</span>
            </ol>
            {{-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15">
                <i class="fa fa-plus-circle"></i> Create New
            </button>  --}}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        @include('layouts.includes.alertas')
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Crear Registro</h4>
                <form class="form-body" method="POST" action="{{ route('backoffice.roles.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Nombre del rol</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Ejm: Administrador">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Descripción del rol</label>
                                <input type="text" name="description" value="{{ old('description') }}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Ejm: Controla todas las acciones del sistema">
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-actions float-right">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Guardar</button>
                        <button type="button" class="btn btn-dark">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
    
@endsection