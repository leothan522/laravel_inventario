<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse"
               href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categorias</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                 id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    @if(isset($listarCategorias))
                        @foreach($listarCategorias as $categoria)
                            <a href="{{ route('web.categoria', $categoria->id) }}"
                               class="nav-item nav-link">{{ ucwords($categoria->nombre) }}</a>
                        @endforeach
                    @endif
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="{{ route('web.index') }}" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">Sportec</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Tienda</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route('web.index') }}"
                           class="nav-item nav-link @if(isset($view) && $view == 'inicio') active @endif">Inicio</a>
                        @if(isset($view) && $view == 'detail')
                            <a href="{{ route('web.detail', $stock_id) }}" class="nav-item nav-link active">Detalles del Producto</a>
                        @endif
                        @if(isset($view) && $view == 'categoria')
                            <a href="{{ route('web.categoria', 1) }}" class="nav-item nav-link active">Ver Categoria</a>
                        @endif
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="{{ route('web.cart') }}" class="dropdown-item">Shopping Cart</a>
                                <a href="{{ route('web.checkout') }}" class="dropdown-item">Checkout</a>
                            </div>
                        </div>
                        <a href="#" class="nav-item nav-link">Mis Pedidos</a>
                        <a href="{{ route('web.contact') }}" class="nav-item nav-link d-lg-none">Contacto</a>
                        <a href="#" class="nav-item nav-link d-none d-lg-block"><i class="bx bxl-android"></i> Descargar APK</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="" class="btn px-0">
                            <i class="fas fa-heart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
