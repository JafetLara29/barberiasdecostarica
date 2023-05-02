@extends('layouts.adminhome')
@section('content')
    <div class="scroll-area">
        <div class="card shadow mb-5">
            <h1>Servicios del barbero</h1>
            <form action="" method="post">
                <div class="row align-items-center p-3">
                    <div class="col-lg-4 col-sm-9">
                        {{-- Add --}}
                        <h3 data-aos="fade-left" data-aos-delay="500" class="display-6">Agregar</h3>
                        <form data-aos="fade-up" data-aos-delay="800" id="add-module-form" action="" method="POST">
                          @csrf
                          <div class="mb-3">
                            <input type="text" class="form-control form-control-sm" name="description" id="description" aria-describedby="help-description" placeholder="¿Cual servicio deseas agregar?">
                            <small id="help-description" class="form-text text-muted">Escriba el nombre del servicio que brindará</small>
                          </div>
                          <div class="mb-3">
                            <input type="text" class="form-control form-control-sm" name="price" id="price" aria-describedby="help-price" placeholder="¿Cual el precio del servicio?">
                            <small id="help-price" class="form-text text-muted">Escriba el precio del servicio en colones</small>
                          </div>
                          <div class="mb-3">
                            <input class="btn btn-outline-success btn-sm" type="button" onclick="" value="Agregar servicio">
                          </div>
                        </form>
                        {{-- Edit --}}
                        <form style="display:none" id="edit-module-form" action="" method="POST">
                          @csrf
                          @method('PUT')
                          <input class="form-control" type="hidden" name="id" id="id">
                          <div class="mb-3">
                            <input type="text" class="form-control form-control-sm" name="description" id="description" aria-describedby="help-description" placeholder="¿Cual servicio deseas agregar?">
                            <small id="help-description" class="form-text text-muted">Escriba el nombre del servicio que brindará</small>
                          </div>
                          <div class="mb-3">
                            <input type="text" class="form-control form-control-sm" name="price" id="price" aria-describedby="help-price" placeholder="¿Cual el precio del servicio?">
                            <small id="help-price" class="form-text text-muted">Escriba el precio del servicio en colones</small>
                          </div>
                          <div class="mb-3">
                            <input class="btn btn-warning btn-sm" type="button" onclick="edit_module()" value="Guardar cambios">
                            <input class="btn btn-secondary btn-sm" type="button" onclick="setModuleForm()" value="Cancelar">
                          </div>
                        </form>
                      </div>

                    {{-- services list --}}
                    <div class="col-lg-8 mt-3">
                        <div class="min-scroll-area pb-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <strong>Servicio: </strong> Corte <br>
                                    <strong>Precio: </strong> Corte

                                </li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                                <li class="list-group-item">A fourth item</li>
                                <li class="list-group-item">And a fifth one</li>
                                <li class="list-group-item">And a fifth one</li>
                                <li class="list-group-item">And a fifth one</li>
                                <li class="list-group-item">And a fifth one</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
