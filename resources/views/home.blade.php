@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Catalogo') }}</div>

                  <div class="card-body">        
                     <div class="form-group">
                        @if(session('mensaje'))
                            <div class="alert alert-success" role="alert">
                                <strong>Aviso</strong>{{ session('mensaje') }}
                                <button type="button" class="close" data-dismiss="alert" alert-label="Close">
                                   <span aria-hidden="true"> &times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="row">
                      @forelse($gestion as $gestionItem)
                        <div class="col-md-6">
                            <form method="POST" action="{{ route('nuevaGestionCliente.create',$gestionItem->id_gestion) }}">
                                @csrf
                                 <button type="submit" class="btn btn-primary btn-sm" style="width:100%;margin-top:5px;padding:10px;font-size:12pt">
                                       {{ $gestionItem->nombre_gestion }} 
                                 </button>
                            </form>
                        </div>
          
                      @empty
                      <p>No hay gestiones</p>
                      @endforelse
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
