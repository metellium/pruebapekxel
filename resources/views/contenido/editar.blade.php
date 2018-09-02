@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Porfavor rellena este sencillo Formulario') }}</div>

                <div class="card-body">
                        {!! Form::open(['route'=> ['formulario.update',$formulario],'method'=>'PUT']) !!}
                    
                        @csrf

                        <div class="form-group row">
                            <label for="tipo_ciclismo" class="col-md-4 col-form-label text-md-right">{{ __('Qué tipo de ciclismo practicas?') }}</label>

                            <div class="col-md-6">
                                <select id="tipo_ciclismo" class="form-control{{ $errors->has('tipo_ciclismo') ? ' is-invalid' : '' }}"  name="tipo_ciclismo" value="{{$formulario->tipo_ciclismo}}" required autofocus>
                                <option value="Montaña">Montaña</option>
                                <option value="Ciudad">Ciudad</option>
                                <option value="Otro">otro</option>
                                </select>
                                @if ($errors->has('tipo_ciclismo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tipo_ciclismo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="anios" class="col-md-4 col-form-label text-md-right">{{ __('Años usando Bicicleta') }}</label>

                            <div class="col-md-6">
                                <input id="anios" type="number"  class="form-control{{ $errors->has('anios') ? ' is-invalid' : '' }}"  name="anios" value="{{$formulario->anios}}" required>

                                @if ($errors->has('anios'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('anios') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="horas" class="col-md-4 col-form-label text-md-right">{{ __('¿Cuantas horas a la semana usas tu bicilcleta?') }}</label>

                            <div class="col-md-6">
                                <input id="horas" type="number" class="form-control{{ $errors->has('horas') ? ' is-invalid' : '' }}" name="horas" value="{{$formulario->horas}}" required autofocus>

                                @if ($errors->has('horas'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('horas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        
                                         
                    
                        <div class="form-group row">
                            <label for="marcas" class="col-md-4 col-form-label text-md-right">{{ __('Escribe las marcas que más te agraden') }}</label>

                            <div class="col-md-6">
                                <input id="marcas" type="text" class="form-control{{ $errors->has('marcas') ? ' is-invalid' : '' }}" name="marcas" value="{{$formulario->marcas}}" required autofocus>

                                @if ($errors->has('marcas'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('marcas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="enviar"  onclick="ejecutarAjax()">
                                    {{ __('Enviar') }}
                                </button>
                                <div id="load"></div>
                                <script type="text/javascript">
                                function ejecutarAjax() {

                                    var resultado = document.getElementById("load");
                                    var ajaxRequest = new XMLHttpRequest();                                    
                                    
                                    $('#enviar').attr("disabled", true);
                                    resultado.innerHTML += "<br>" +"Actualizando!";
                                }
                                </script>
                                <a href="{{route('formulario.index') }}"class="btn btn-success">Cancelar</a>
                                {!! Form::close()!!}
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
