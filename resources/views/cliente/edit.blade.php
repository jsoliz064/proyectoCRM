@extends('layouts.app')

@section('content')
<div class="container-fluid mt--8">
    <div class="card">
        <div class="card-body">
            <div align="center">
                <h1>Editar Cliente</h1>
            </div>
            <form method="post" action="{{route('clientes.update',$cliente)}}" novalidate >
                @csrf
                @method('PATCH')

                <h5>Carnet de Identidad:</h5>
                <input type="text"  name="ci" value="{{$cliente->ci}}" class="focus border-primary  form-control" >
                @error('ci')
                <p>DEBE INGRESAR BIEN SU NOMBRE</p>
                @enderror

                <h5>Nombre Completo:</h5>
                <input type="text"  name="nombre" value="{{$cliente->nombre}}" class="focus border-primary  form-control" >
                @error('nombre')
                <p>DEBE INGRESAR BIEN SU NOMBRE</p>
                @enderror


                <h5>Telefono:</h5>
                <input type="text" name="telefono"  value="{{$cliente->telefono}}" class="focus border-primary  form-control" >


                @error('telefono')
                    <p>DEBE INGRESAR BIEN SU TELEFONO</p>
                @enderror

                <h5>Email:</h5>
                <input type="text" name="email"  value="{{$cliente->email}}"class="focus border-primary  form-control" >


                @error('email')
                    <p>DEBE INGRESAR BIEN SU EMAIL</p>
                @enderror

                <div class="form-group">
                    <h5>Sexo:</h5>
                    <select name="sexo" id="select-sexo"  class="focus border-primary  form-control">
                        <option value="{{$cliente->sexo}}">{{$cliente->sexo}}</option>
                        <option value="F">Femenino</option>
                        <option value="M">Masculino</option>
                    </select>

                    @error('sexo')
                        <p>DEBE INGRESAR BIEN SU SEXO</p>
                    @enderror
                </div> 
                
                <br>
                <div align="center">
                    <button  class="btn btn-danger btn-sm" type="submit">Registrar</button>
                    <a href="{{route('clientes.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
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


