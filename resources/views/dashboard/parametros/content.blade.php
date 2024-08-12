<div class="row justify-content-center">

    <div class="col-md-4">
        <label>Parametros Manuales</label>
        <ul>
            <li>numRowsPaginate[null|numero]</li>
            <li>size_codigo[tamaño|null]</li>
            {{--<li>formato_codigo_servicios[organizaciones_id|formato]</li>--}}
            <li>proximo_codigo_ajutes[empresa_id|int]</li>
            <li>formato_codigo_ajutes[empresa_id|text]</li>
            <li>editable_codigo_ajutes[empresa_id|1/0]</li>
            <li>editable_fecha_ajutes[empresa_id|1/0]</li>
            {{--<li>iva</li>
            <li>telefono_soporte</li>
            <li>codigo_pedido</li>--}}
        </ul>
    </div>

    <div class="col-md-8">
        @include('dashboard.parametros.table')
        @include('dashboard.parametros.modal')
    </div>

</div>
