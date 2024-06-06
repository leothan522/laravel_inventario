@if($empresas_id)
    <div wire:ignore.self class="modal fade" id="modal-reportes-ajustes" xmlns:wire="http://www.w3.org/1999/xhtml">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reporte: Ajustes</h5>
                    <button type="button" {{--wire:click="limpiar()"--}} class="close" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <form method="post" action="{{ route('ajustes.reportes') }}" target="_blank">
                                @csrf
                                <div class="form-group form-group-sm">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            Reporte
                                        </span>
                                        </div>
                                        <select class="form-control form-group-sm" name="reporte">
                                            <option value="numero">Ajuste de E/S por Número</option>
                                            <option value="articulo">Ajuste de E/S por Articulo</option>
                                        </select>
                                        @error('reporte')
                                        <span class="col-sm-12 text-sm text-bold text-danger">
                                        <i class="icon fas fa-exclamation-triangle"></i>
                                        {{ $message }}
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group form-group-sm">
                                    <label class="text-sm">Filtrar Fecha:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group input-group-sm">
                                                <input type="date" name="desde" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group input-group-sm">
                                                <input type="date" name="hasta" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-group-sm">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            Tipo Ajuste
                                        </span>
                                        </div>
                                        <select class="form-control form-control-sm" name="tipo">
                                            <option value="all"></option>
                                            @if($listarTiposAjuste->isNotEmpty())
                                                @foreach($listarTiposAjuste as $tipo)
                                                    <option
                                                        value="{{ $tipo->id }}">{{ $tipo->codigo }} {{ $tipo->descripcion }}</option>
                                                @endforeach
                                            @endif

                                        </select>
                                        @error('tipo')
                                        <span class="col-sm-12 text-sm text-bold text-danger">
                                        <i class="icon fas fa-exclamation-triangle"></i>
                                        {{ $message }}
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group form-group-sm">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            Segmento
                                        </span>
                                        </div>
                                        <select class="form-control form-control-sm" name="segmento">
                                            <option value="all"></option>
                                            @if($selectSegmentos->isNotEmpty())
                                                @foreach($selectSegmentos as $segmento)
                                                    <option
                                                        value="{{ $segmento->id }}">{{ $segmento->descripcion }}</option>
                                                @endforeach
                                            @endif

                                        </select>
                                        @error('segmento')
                                        <span class="col-sm-12 text-sm text-bold text-danger">
                                        <i class="icon fas fa-exclamation-triangle"></i>
                                        {{ $message }}
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group form-group-sm">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            Articulo
                                        </span>
                                        </div>
                                        <select class="form-control form-control-sm" name="articulo"
                                                id="reportes_articulos">
                                            <option value="all">&nbsp;</option>
                                            @if($listarArticulos->isNotEmpty())
                                                @foreach($listarArticulos as $articulo)
                                                    <option
                                                        value="{{ $articulo->id }}">{{ $articulo->codigo }} {{ $articulo->descripcion }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('articulo')
                                        <span class="col-sm-12 text-sm text-bold text-danger">
                                        <i class="icon fas fa-exclamation-triangle"></i>
                                        {{ $message }}
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group form-group-sm">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            Almacen
                                        </span>
                                        </div>
                                        <select class="form-control form-control-sm" name="almacen">
                                            <option value="all"></option>
                                            @if($listarAlmacenes->isNotEmpty())
                                                @foreach($listarAlmacenes as $almacen)
                                                    <option
                                                        value="{{ $almacen->id }}">{{ $almacen->codigo }} {{ $almacen->nombre }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('almacen')
                                        <span class="col-sm-12 text-sm text-bold text-danger">
                                        <i class="icon fas fa-exclamation-triangle"></i>
                                        {{ $message }}
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group form-group-sm">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            Anulado
                                        </span>
                                        </div>
                                        <select class="form-control form-control-sm" name="anulado">
                                            <option value="all"></option>
                                            <option value="0">SI</option>
                                            <option value="1">NO</option>
                                        </select>
                                        @error('anulado')
                                        <span class="col-sm-12 text-sm text-bold text-danger">
                                        <i class="icon fas fa-exclamation-triangle"></i>
                                        {{ $message }}
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="empresa_id" value="{{ $empresas_id }}">
                                    <button type="submit" class="btn btn-block btn-primary"
                                            @if(!comprobarPermisos('ajustes.reportes')) disabled @endif >
                                        <i class="fas fa-file-excel"></i> Generar Reporte
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

                {!! verSpinner() !!}

                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">{{ __('Close') }}</button>
                </div>

            </div>
        </div>
    </div>
@endif
