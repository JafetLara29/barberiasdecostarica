@extends('layouts.adminhome')

@section('content')
    <div class="">

        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Default select start -->
                    <div class="card  bg-dark">
                        <div class="page-header-title">
                            <!--  <h5>Default Select</h5>
                        <span>Add class of <code>.form-control</code> with
                            <code>&lt;input&gt;</code> tag</span> -->
                            <div class="d-flex align-items-start">
                                <h3 for="image" class="form-label ml-3 text-gray text-center">
                                    Sistema de Ingresos
                                </h3>
                                <small class="text-success" data-bs-container="body" data-bs-toggle="popover"
                                    data-bs-placement="top" title="Ayuda"
                                    data-bs-content="Seleccione un año en el selector , para desplegar un informe general por mes del año seleccionado, sobre los ingresos relacionados a los diferentes servicios adquiridos por los clientes ">
                                    <i class="ti-help-alt"></i>
                                </small>
                            </div>

                        </div>
                        <div class="card-block">
                            <div class="row">

                                <div class="col-sm-12 col-xl-3 m-b-30">
                                    <h4 class="sub-title">Ver Ingresos</h4>
                                    <select name="select_year" id="select_year"
                                        class="form-select form-control form-control-primary  bg-dark">
                                        <option selected value="0">Seleccione un año</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="page-body">
                            <div class="row" id="filter-incomes">
                                Listado de Ingresos
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $('[data-bs-toggle="popover"]').popover();
        });
    </script>

    @vite(['/resources/js/incomereport.js'])
@endsection
