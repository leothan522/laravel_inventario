<div wire:ignore.self class="modal fade" id="modal-reportes-articulos" xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Reporte: Articulos</h5>
                <button type="button" {{--wire:click="limpiar()"--}} class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form method="post" action="{{ route('articulos.reportes') }}" target="_blank">
                            @csrf
                            {{--<div class="form-group form-group-sm">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            Tienda
                                        </span>
                                    </div>
                                    <select class="custom-select" name="empresa_id">
                                        @foreach($listarEmpresas as $empresa)
                                            <option value="{{ $empresa['id'] }}">{{ $empresa['text'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('empresa_id')
                                    <span class="col-sm-12 text-sm text-bold text-danger">
                                        <i class="icon fas fa-exclamation-triangle"></i>
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>--}}
                            <div class="form-group form-group-sm">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            Reporte
                                        </span>
                                    </div>
                                    <select class="form-control form-group-sm" name="reporte">
                                        <option value="unidades">Articulos con sus Unidades</option>
                                        <option value="precios">Articulos con sus Precios</option>
                                        {{--<option value="identificadores">Articulos con sus Identificadores</option>--}}
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
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            Categoria
                                        </span>
                                    </div>
                                    <select class="form-control form-control-sm" name="categoria">
                                        <option value="all"></option>
                                        @foreach($selectCategorias as $categoria)
                                            <option value="{{ $categoria->id }}">{{ $categoria->codigo }}</option>
                                        @endforeach
                                    </select>
                                    @error('categoria')
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
                                            Unidad
                                        </span>
                                    </div>
                                    <select class="form-control form-control-sm" name="unidad">
                                        <option value="all"></option>
                                        @foreach($selectUnidades as $unidad)
                                            <option value="{{ $unidad->id }}">{{ $unidad->codigo }}</option>
                                        @endforeach
                                    </select>
                                    @error('unidad')
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
                                            Procedencia
                                        </span>
                                    </div>
                                    <select class="form-control form-control-sm" name="procedencia">
                                        <option value="all"></option>
                                        @foreach($selectProcedencia as $procedencia)
                                            <option value="{{ $procedencia->id }}">{{ $procedencia->nombre }}</option>
                                        @endforeach
                                    </select>
                                    @error('procedencia')
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
                                            Tributario
                                        </span>
                                    </div>
                                    <select class="form-control form-control-sm" name="tributario">
                                        <option value="all"></option>
                                        @foreach($selectTributario as $tributario)
                                            <option value="{{ $tributario->id }}">{{ $tributario->codigo }}</option>
                                        @endforeach
                                    </select>
                                    @error('tributario')
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
                                            Tipo
                                        </span>
                                    </div>
                                    <select class="form-control form-control-sm" name="tipo">
                                        <option value="all"></option>
                                        @foreach($selectTipo as $tipo)
                                            <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                                        @endforeach
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
                                            Estatus
                                        </span>
                                    </div>
                                    <select class="form-control form-control-sm" name="estatus">
                                        <option value="all"></option>
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
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
                                <input type="hidden" name="empresa_id" wire:model="empresas_id">
                                <button type="submit" class="btn btn-block btn-primary"
                                        @if(!comprobarPermisos('articulos.reportes')) disabled @endif >
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
