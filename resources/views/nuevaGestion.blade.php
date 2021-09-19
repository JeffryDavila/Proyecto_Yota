@extends('layouts.app')

@section('content')
  <div class="container">
     <div class="row justify-content-center">
        <div class="col-md-10">
             <div class="card">
                 <div class="card-header">{{ __('Nueva Gestion') }}</div>
                   <div class="card-body">
                      <form method="POST" action="{{ route('nuevaGestion.create') }}">
                        @csrf

                          <div class="form-group row">
                            <label for="codigo_gestion" class="col-md-4 col-form-label text-md-right">{{ __('Codigo Gestion') }}</label>
    
                            <div class="col-md-6">
                                <input id="codigo_gestion" type="text" class="form-control @error('codigo_gestion') is-invalid @enderror" name="codigo_gestion" value="{{ old('codigo_gestion') }}" required autocomplete="'codigo_gestion'" autofocus>

                                    @error('codigo_gestion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                          </div> 

                          <div class="form-group row">
                                <label for="nombre_gestion" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Gestion') }}</label>
        
                                <div class="col-md-6">
                                    <input id="nombre_gestion" type="text" class="form-control @error('nombre_gestion') is-invalid @enderror" name="nombre_gestion" value="{{ old('nombre_gestion') }}" required autocomplete="'nombre_gestion'" autofocus>
    
                                        @error('nombre_gestion')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                           </div> 

                           <div class="form-group row">
                                <label for="visita_tecnica" class="col-md-4 col-form-label text-md-right">{{ __('Visita tecnica') }}</label>
        
                                <div class="col-md-6">
                                        <select name="visita_tecnica" class="form-control" value="">
                                                <option value="1">si</option>
                                                <option value="0">no</option>                          
                                        </select>
                                </div>
                           </div> 
                           

                           <div class="form-group row">
                                <label for="codigo_usuario" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>
        
                                <div class="col-md-6">
                                    <input id="codigo_usuario" type="text" class="form-control" name="codigo_usuario" value="{{$usuario->nombre_usuario}} {{$usuario->apellido_usuario}}" required autocomplete="'codigo_usuario'" readonly="readonly">                                      
                                </div>
                           </div> 

                           <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrar') }}
                                    </button>
                                </div>
                           </div>

                       </form>
                    </div>
               </div>                
            </div>                      
        </div>
     </div>
  </div>
@endsection