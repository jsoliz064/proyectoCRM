@extends('layouts.app')

@section('content')
<div class="container-fluid mt--8">
    <div class="card">
        <div class="card-body">
            <div align="center">
                <h1>Crear Noticia</h1>
            </div>
            <form method="post" action="{{route('noticias.store')}}" novalidate >
                @csrf
                <h5>Descripcion:</h5>
                <input type="text"  name="descripcion" class="focus border-primary  form-control" >
                @error('descripcion')
                <p></p>
                @enderror


                
                <br>
                <div align="center">
                    <button  class="btn btn-danger btn-sm" type="submit">Registrar</button>
                    <a href="{{route('noticias.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
                </div>
            </form>

        </div>
    </div>
</div>
<br>
@stop

@push('js')
  <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
  
@endpush


