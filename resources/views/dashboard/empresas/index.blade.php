@extends('adminlte::page')

@section('title', 'Tiendas')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fas fa-store-alt"></i> Empresas</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                    <li class="breadcrumb-item active">Empresas Registradas</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    @livewire('dashboard.empresas-component')
@endsection

@section('right-sidebar')
    @include('dashboard.right-sidebar')
@endsection

@section('footer')
    @include('dashboard.footer')
@endsection

@section('css')
    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
    <script src="{{ asset("js/app.js") }}"></script>
    <script>

        function verSpinnerOculto() {
            $('.cargar_empresas').removeClass('d-none');
        }

        function imgEmpresa()
        {
            $('#customFileLang').click();
        }

        console.log('Hi!');
    </script>
@endsection
