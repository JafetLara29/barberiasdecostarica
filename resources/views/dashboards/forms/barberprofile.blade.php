@extends('layouts.adminhome')
@section('content')
<div class="scroll-area">
    <div class="container-fluid" >
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title pb-3">
                            <div class="d-inline">
                                <h4>Perfil del Barbero</h4>
                                <span class="">Aqui puedes ver la información relevante disponible al público</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pb-3">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item"  style="float: left;">
                                    <a href="{{ route('barbers.index') }}"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"  style="float: left;"><a href="{{ route('barbers.index') }}">Barberos</a>
                                </li>
                                <li class="breadcrumb-item"  style="float: left;"><a href="#!">Área Personal</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->

            <!-- Page-body start -->
            <div class="page-body">
                <!--profile cover start-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cover-profile">
                            <div class="profile-bg-img">
                                <img class="profile-bg-img img-fluid"
                                    src="{{asset("storage/images/user-profile/bg-img1.jpg")}}"
                                    alt="bg-img">
                                <div class="card-block user-info">
                                    <!-- <div class="col-md-12">
                                        <div class="media-left">
                                            <a href="#" class="profile-image">
                                                <img class="user-img img-radius"
                                                    src="resources/assets/images/user-profile/user-img.jpg"
                                                    alt="user-img">
                                            </a>
                                        </div>
                                        <div class="media-body row">
                                            <div class="col-lg-12">
                                                <div class="user-title">
                                                    <h2>Josephin Villa</h2>
                                                    <span class="text-white">Web designer</span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="pull-right cover-btn">
                                                    <button type="button"
                                                        class="btn btn-primary m-r-10 m-b-5"><i
                                                            class="icofont icofont-plus"></i>
                                                        Follow</button>
                                                    <button type="button"
                                                        class="btn btn-primary"><i
                                                            class="icofont icofont-ui-messaging"></i>
                                                        Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--profile cover end-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- tab header start -->
                        <div class="tab-header card">
                            <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist"
                                id="mytab">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab"
                                        href="#personal" role="tab">Información Personal</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#binfo"
                                        role="tab">Servicios del Barbero</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#review"
                                        role="tab">Comentarios & Sugerencias</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                        </div>
                        <!-- tab header end -->
                        <!-- tab content start -->
                        <div class="tab-content">
                            <!-- tab panel personal start -->
                            <div class="tab-pane active" id="personal" role="tabpanel">
                                <!-- personal card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">Acerca de tí</h5>
                                        <button id="edit-btn" type="button"
                                            class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                            <i class="icofont icofont-edit"></i>
                                        </button>
                                    </div>
                                    <div class="card-block">
                                        <div class="view-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="general-info">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-6">
                                                                <div class="table-responsive">
                                                                    <table class="table m-0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">
                                                                                    Nombre Completo
                                                                                </th>
                                                                                <td>Josephine
                                                                                    Villa</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">
                                                                                    Género</th>
                                                                                <td>Female</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">
                                                                                    Ubicación de Trabajo
                                                                                </th>
                                                                                <td>New York,
                                                                                    USA</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                            <div class="col-lg-12 col-xl-6">
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">
                                                                                    Correo</th>
                                                                                <td><a
                                                                                        href="#!">Demo@example.com</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">
                                                                                    Teléfono</th>
                                                                                <td>(0123) -
                                                                                    4567891</td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of general info -->
                                                </div>
                                                <!-- end of col-lg-12 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of view-info -->
                                        <div class="edit-info mb-1 pb-2">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h3 class="card-header-text pb-4"> [Editar Información] </h3>
                                                    <div class="general-info">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div
                                                                                    class="input-group">
                                                                                    <span
                                                                                        class="input-group-addon p-1"><i
                                                                                            class="icofont icofont-user"></i></span>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Nombre Completo">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <h1 class="card-header-text">Género</h1>
                                                                                <div

                                                                                    class="form-radio">
                                                                                    <div

                                                                                        class="group-add-on">
                                                                                        <div
                                                                                            class="radio radiofill radio-inline">
                                                                                            <label class="form-label">
                                                                                                <input
                                                                                                    type="radio"
                                                                                                    name="radio"
                                                                                                    checked><i
                                                                                                    class="helper"></i>
                                                                                                Hombre
                                                                                            </label>
                                                                                        </div>
                                                                                        <div
                                                                                            class="radio radiofill radio-inline">
                                                                                            <label class="form-label">
                                                                                                <input
                                                                                                    type="radio"
                                                                                                    name="radio"><i
                                                                                                    class="helper"></i>
                                                                                                Mujer
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div
                                                                                    class="input-group">
                                                                                    <span
                                                                                        class="input-group-addon p-1"><i
                                                                                            class="icofont icofont-location-pin"></i></span>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Ubicación de Trabajo">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                            <div class="col-lg-6">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div
                                                                                    class="input-group">
                                                                                    <span
                                                                                        class="input-group-addon pb-1"><i
                                                                                            class="icofont icofont-ui-email"></i></span>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Correo">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div
                                                                                    class="input-group">
                                                                                    <span
                                                                                        class="input-group-addon pb-1"><i
                                                                                            class="icofont icofont-mobile-phone"></i></span>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Teléfono">
                                                                                </div>
                                                                            </td>
                                                                        </tr>


                                                                        <!-- <tr>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-addon" id="basic-addon1">@</span>
                                                            <input type="text" class="form-control" placeholder="Twitter Id">
                                                        </div>
                                                    </td>
                                                </tr> -->
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                        </div>
                                                        <!-- end of row -->
                                                        <div class="text-center">
                                                            <a href="#!"
                                                                class="btn btn-primary waves-effect waves-light m-r-20">Guardar</a>
                                                            <a href="#!" id="edit-cancel"
                                                                class="btn btn-default waves-effect">Cancelar</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of edit info -->
                                                </div>
                                                <!-- end of col-lg-12 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of edit-info -->
                                    </div>
                                    <!-- end of card-block -->
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Descripcion acerca de mí

                                                </h5>
                                                <button id="edit-info-btn" type="button"
                                                    class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                                    <i class="icofont icofont-edit"></i>
                                                </button>
                                            </div>
                                            <div class="card-block user-desc">
                                                <div class="view-desc">
                                                    <p>But I must explain to you how all this
                                                        mistaken idea of denouncing pleasure and
                                                        praising pain was born and I will give
                                                        you a complete account of the system,
                                                        and expound the actual teachings of the
                                                        great explorer of the truth, the
                                                        master-builder of human happiness. No
                                                        one rejects, dislikes, or avoids
                                                        pleasure itself, because it is pleasure,
                                                        but because those who do not know how to
                                                        pursue pleasure rationally encounter
                                                        consequences that are extremely painful.
                                                        Nor again is there anyone who loves or
                                                        pursues or desires to obtain pain of
                                                        itself, because it is pain, but because
                                                        occasionally circumstances occur in
                                                        which toil and pain can procure him some
                                                        great pleasure. To take a trivial
                                                        example, which of us ever undertakes
                                                        laborious physical exercise, except to
                                                        obtain some advantage from it? But who
                                                        has any right to find fault with a man
                                                        who chooses to enjoy a pleasure that has
                                                        no annoying consequences, or one who
                                                        avoids a pain that produces no resultant
                                                        pleasure?" "On the other hand, we
                                                        denounce with righteous indignation and
                                                        dislike men who are so beguiled and
                                                        demoralized by the charms of pleasure of
                                                        the moment, so blinded by desire, that
                                                        they cannot foresee the pain and trouble
                                                        that are bound to ensue; and equal blame
                                                        belongs to those who fail in their duty
                                                        through weakness of will, which is the
                                                        same as saying through shrinking from
                                                        toil and pain. These cases are perfectly
                                                        simple and easy to distinguish. In a
                                                        free hour, when our power of choice is
                                                        untrammelled and when nothing prevents
                                                        our being able To Do what we like best,
                                                        every pleasure is to be welcomed and
                                                        every pain avoided. But in certain
                                                        circumstances and owing to the claims of
                                                        duty or the obligations of business it
                                                        will frequently occur that pleasures
                                                        have to be repudiated and annoyances
                                                        accepted. The wise man therefore always
                                                        holds in these matters to this principle
                                                        of selection: he rejects pleasures to
                                                        secure other greater pleasures, or else
                                                        he endures pains to avoid worse pain.
                                                    </p>
                                                </div>
                                                <div class="edit-desc">
                                                    <div class="col-md-12">
                                                        <textarea id="description">
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?" "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able To Do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pain.</p>
                                </textarea>
                                                    </div>
                                                    <div class="text-center">
                                                        <a href="#!"
                                                            class="btn btn-primary waves-effect waves-light m-r-20 m-t-20">Guardar</a>
                                                        <a href="#!" id="edit-cancel-btn"
                                                            class="btn btn-default waves-effect m-t-20">Cancelar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- personal card end-->
                            </div>
                            <!-- tab pane personal end -->
                            <!-- tab pane info start -->
                            <div class="tab-pane" id="binfo" role="tabpanel">
                                <!-- info card start -->
                                <div class="card mb-5">
                                    <div class="card-header">
                                        <h5 class="card-header-text">Servicios del Barbero</h5>
                                    </div>
                                    <div class="card-block pb-5">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div
                                                    class="card b-l-success business-info services m-b-20">
                                                    <div class="card-header">
                                                        <div class="service-header">
                                                            <a href="#">
                                                                <h5 class="card-header-text">
                                                                    Shivani Hero</h5>
                                                            </a>
                                                        </div>
                                                        <span
                                                            class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                            data-bs-toggle="dropdown"
                                                            aria-haspopup="true"
                                                            aria-expanded="true" role="tooltip">
                                                        </span>
                                                        <div
                                                            class="dropdown-menu dropdown-menu-right b-none services-list">
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-edit"></i>
                                                                Editar</a>
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-ui-delete"></i>
                                                                Borrar</a>
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-eye-alt"></i>
                                                                Mostrar</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p class="task-detail">Lorem
                                                                    ipsum dolor sit amet,
                                                                    consectet ur adipisicing
                                                                    elit, sed do eiusmod temp or
                                                                    incidi dunt ut labore
                                                                    et.Lorem ipsum dolor sit
                                                                    amet, consecte.</p>
                                                            </div>
                                                            <!-- end of col-sm-8 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of card-block -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div
                                                    class="card b-l-danger business-info services">
                                                    <div class="card-header">
                                                        <div class="service-header">
                                                            <a href="#">
                                                                <h5 class="card-header-text">
                                                                    Dress and Sarees</h5>
                                                            </a>
                                                        </div>
                                                        <span
                                                            class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                            data-bs-toggle="dropdown"
                                                            aria-haspopup="true"
                                                            aria-expanded="true" role="tooltip">
                                                        </span>
                                                        <div
                                                            class="dropdown-menu dropdown-menu-right b-none services-list">
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-edit"></i>
                                                                Editar</a>
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-ui-delete"></i>
                                                                Borrar</a>
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-eye-alt"></i>
                                                                Mostrar</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p class="task-detail">Lorem
                                                                    ipsum dolor sit amet,
                                                                    consectet ur adipisicing
                                                                    elit, sed do eiusmod temp or
                                                                    incidi dunt ut labore
                                                                    et.Lorem ipsum dolor sit
                                                                    amet, consecte.</p>
                                                            </div>
                                                            <!-- end of col-sm-8 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of card-block -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div
                                                    class="card b-l-info business-info services">
                                                    <div class="card-header">
                                                        <div class="service-header">
                                                            <a href="#">
                                                                <h5 class="card-header-text">
                                                                    Shivani Auto Port</h5>
                                                            </a>
                                                        </div>
                                                        <span
                                                            class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                            data-bs-toggle="dropdown"
                                                            aria-haspopup="true"
                                                            aria-expanded="true" role="tooltip">
                                                        </span>
                                                        <div
                                                            class="dropdown-menu dropdown-menu-right b-none services-list">
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-edit"></i>
                                                                Editar</a>
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-ui-delete"></i>
                                                                Borrar</a>
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-eye-alt"></i>
                                                                Mostrar</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p class="task-detail">Lorem
                                                                    ipsum dolor sit amet,
                                                                    consectet ur adipisicing
                                                                    elit, sed do eiusmod temp or
                                                                    incidi dunt ut labore
                                                                    et.Lorem ipsum dolor sit
                                                                    amet, consecte.</p>
                                                            </div>
                                                            <!-- end of col-sm-8 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of card-block -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div
                                                    class="card b-l-warning business-info services">
                                                    <div class="card-header">
                                                        <div class="service-header">
                                                            <a href="#">
                                                                <h5 class="card-header-text">
                                                                    Hair stylist</h5>
                                                            </a>
                                                        </div>
                                                        <span
                                                            class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                            data-bs-toggle="dropdown"
                                                            aria-haspopup="true"
                                                            aria-expanded="true" role="tooltip">
                                                        </span>
                                                        <div
                                                            class="dropdown-menu dropdown-menu-right b-none services-list">
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-edit"></i>
                                                                Editar</a>
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-ui-delete"></i>
                                                                Borrar</a>
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-eye-alt"></i>
                                                                Mostrar</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p class="task-detail">Lorem
                                                                    ipsum dolor sit amet,
                                                                    consectet ur adipisicing
                                                                    elit, sed do eiusmod temp or
                                                                    incidi dunt ut labore
                                                                    et.Lorem ipsum dolor sit
                                                                    amet, consecte.</p>
                                                            </div>
                                                            <!-- end of col-sm-8 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of card-block -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div
                                                    class="card b-l-danger business-info services">
                                                    <div class="card-header">
                                                        <div class="service-header">
                                                            <a href="#">
                                                                <h5 class="card-header-text">BMW
                                                                    India</h5>
                                                            </a>
                                                        </div>
                                                        <span
                                                            class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                            data-bs-toggle="dropdown"
                                                            aria-haspopup="true"
                                                            aria-expanded="true" role="tooltip">
                                                        </span>
                                                        <div
                                                            class="dropdown-menu dropdown-menu-right b-none services-list">
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-edit"></i>
                                                                Editar</a>
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-ui-delete"></i>
                                                                Borrar</a>
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-eye-alt"></i>
                                                                Mostrar</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p class="task-detail">Lorem
                                                                    ipsum dolor sit amet,
                                                                    consectet ur adipisicing
                                                                    elit, sed do eiusmod temp or
                                                                    incidi dunt ut labore
                                                                    et.Lorem ipsum dolor sit
                                                                    amet, consecte.</p>
                                                            </div>
                                                            <!-- end of col-sm-8 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of card-block -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div
                                                    class="card b-l-success business-info services">
                                                    <div class="card-header">
                                                        <div class="service-header">
                                                            <a href="#">
                                                                <h5 class="card-header-text">
                                                                    Shivani Hero</h5>
                                                            </a>
                                                        </div>
                                                        <span
                                                            class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                            data-bs-toggle="dropdown"
                                                            aria-haspopup="true"
                                                            aria-expanded="true" role="tooltip">
                                                        </span>
                                                        <div
                                                            class="dropdown-menu dropdown-menu-right b-none services-list">
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-edit"></i>
                                                                Editar</a>
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-ui-delete"></i>
                                                                Borrar</a>
                                                            <a class="dropdown-item"
                                                                href="#!"><i
                                                                    class="icofont icofont-eye-alt"></i>
                                                                Mostrar</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p class="task-detail">Lorem
                                                                    ipsum dolor sit amet,
                                                                    consectet ur adipisicing
                                                                    elit, sed do eiusmod temp or
                                                                    incidi dunt ut labore
                                                                    et.Lorem ipsum dolor sit
                                                                    amet, consecte.</p>
                                                            </div>
                                                            <!-- end of col-sm-8 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of card-block -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    {{-- Parte baja del servicios del barbero --}}
                                </div>
                                <!-- info card end -->
                            </div>
                            <!-- tab pane info end -->
                            <div class="tab-pane" id="review" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">Comentarios & Sugerencias</h5>
                                    </div>
                                    <div class="card-block">
                                        <ul class="media-list">
                                            <li class="d-flex">
                                                <div class="media-left">
                                                    <div class="flex-shrink-0">
                                                        <a href="#">
                                                            <img class="media-object img-radius comment-img"
                                                                src="{{asset("storage/images/avatar-1.jpg")}}"
                                                                alt="Generic placeholder image">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="media-heading">Sortino media<span
                                                            class="f-12 text-muted m-l-5">Just
                                                            now</span>
                                                    </h6>
                                                    <div class="stars-example-css review-star">
                                                        <i class="icofont icofont-star"></i>
                                                        <i class="icofont icofont-star"></i>
                                                        <i class="icofont icofont-star"></i>
                                                        <i class="icofont icofont-star"></i>
                                                        <i class="icofont icofont-star"></i>
                                                    </div>
                                                    <p class="m-b-0">Cras sit amet nibh libero,
                                                        in gravida nulla. Nulla vel metus
                                                        scelerisque ante sollicitudin commodo.
                                                        Cras purus odio, vestibulum in vulputate
                                                        at, tempus viverra turpis.</p>
                                                    <div class="m-b-25">
                                                        <span><a href="#!"
                                                                class="m-r-10 f-12">Responder</a></span><span><a
                                                                href="#!" class="f-12">Editar</a>
                                                        </span>
                                                    </div>
                                                    <hr>
                                                    <!-- Nested media object -->
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <a class="media-left" href="#">
                                                                <img class="media-object img-radius comment-img"
                                                                    src="{{asset("storage/images/avatar-2.jpg")}}"
                                                                    alt="Generic placeholder image">
                                                            </a>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="media-heading">Larry
                                                                heading <span
                                                                    class="f-12 text-muted m-l-5">Just
                                                                    now</span></h6>
                                                            <div
                                                                class="stars-example-css review-star">
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                            </div>
                                                            <p class="m-b-0"> Cras sit amet nibh
                                                                libero, in gravida nulla. Nulla
                                                                vel metus scelerisque ante
                                                                sollicitudin commodo. Cras purus
                                                                odio, vestibulum in vulputate
                                                                at, tempus viverra turpis.</p>
                                                            <div class="m-b-25">
                                                                <span><a href="#!"
                                                                        class="m-r-10 f-12">Responder</a></span><span><a
                                                                        href="#!"
                                                                        class="f-12">Editar</a>
                                                                </span>
                                                            </div>
                                                            <hr>
                                                            <!-- Nested media object -->
                                                            <div class="d-flex mt-2">
                                                                <div class="media-left">
                                                                    <div class="flex-shrink-0">
                                                                        <a href="#">
                                                                            <img class="media-object img-radius comment-img"
                                                                                src="{{asset("storage/images/avatar-3.jpg")}}"
                                                                                alt="Generic placeholder image">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h6 class="media-heading">
                                                                        Colleen Hurst <span
                                                                            class="f-12 text-muted m-l-5">Just
                                                                            now</span></h6>
                                                                    <div
                                                                        class="stars-example-css review-star">
                                                                        <i
                                                                            class="icofont icofont-star"></i>
                                                                        <i
                                                                            class="icofont icofont-star"></i>
                                                                        <i
                                                                            class="icofont icofont-star"></i>
                                                                        <i
                                                                            class="icofont icofont-star"></i>
                                                                        <i
                                                                            class="icofont icofont-star"></i>
                                                                    </div>
                                                                    <p class="m-b-0">Cras sit
                                                                        amet nibh libero, in
                                                                        gravida nulla. Nulla vel
                                                                        metus scelerisque ante
                                                                        sollicitudin commodo.
                                                                        Cras purus odio,
                                                                        vestibulum in vulputate
                                                                        at, tempus viverra
                                                                        turpis.</p>
                                                                    <div class="m-b-25">
                                                                        <span><a href="#!"
                                                                                class="m-r-10 f-12">Responder</a></span><span><a
                                                                                href="#!"
                                                                                class="f-12">Editar</a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Nested media object -->
                                                    <div class="d-flex mt-2">
                                                        <div class="media-left">
                                                            <div class="flex-shrink-0">
                                                                <a href="#">
                                                                    <img class="media-object img-radius comment-img"
                                                                        src="{{asset("storage/images/avatar-1.jpg")}}"
                                                                        alt="Generic placeholder image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="media-heading">Cedric
                                                                Kelly<span
                                                                    class="f-12 text-muted m-l-5">Just
                                                                    now</span></h6>
                                                            <div
                                                                class="stars-example-css review-star">
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                            </div>
                                                            <p class="m-b-0">Cras sit amet nibh
                                                                libero, in gravida nulla. Nulla
                                                                vel metus scelerisque ante
                                                                sollicitudin commodo. Cras purus
                                                                odio, vestibulum in vulputate
                                                                at, tempus viverra turpis.</p>
                                                            <div class="m-b-25">
                                                                <span><a href="#!"
                                                                        class="m-r-10 f-12">Responder</a></span><span><a
                                                                        href="#!"
                                                                        class="f-12">Editar</a>
                                                                </span>
                                                            </div>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <a class="media-left" href="#">
                                                                <img class="media-object img-radius comment-img"
                                                                    src="{{asset("storage/images/avatar-4.jpg")}}"
                                                                    alt="Generic placeholder image">
                                                            </a>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="media-heading">Larry
                                                                heading <span
                                                                    class="f-12 text-muted m-l-5">Just
                                                                    now</span></h6>
                                                            <div
                                                                class="stars-example-css review-star">
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                            </div>
                                                            <p class="m-b-0"> Cras sit amet nibh
                                                                libero, in gravida nulla. Nulla
                                                                vel metus scelerisque ante
                                                                sollicitudin commodo. Cras purus
                                                                odio, vestibulum in vulputate
                                                                at, tempus viverra turpis.</p>
                                                            <div class="m-b-25">
                                                                <span><a href="#!"
                                                                        class="m-r-10 f-12">Responder</a></span><span><a
                                                                        href="#!"
                                                                        class="f-12">Editar</a>
                                                                </span>
                                                            </div>
                                                            <hr>
                                                            <!-- Nested media object -->
                                                            <div class="d-flex mt-2">
                                                                <div class="media-left">
                                                                    <div class="flex-shrink-0">
                                                                        <a href="#">
                                                                            <img class="media-object img-radius comment-img"
                                                                                src="{{asset("storage/images/avatar-3.jpg")}}"
                                                                                alt="Generic placeholder image">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h6 class="media-heading">
                                                                        Colleen Hurst <span
                                                                            class="f-12 text-muted m-l-5">Just
                                                                            now</span></h6>
                                                                    <div
                                                                        class="stars-example-css review-star">
                                                                        <i
                                                                            class="icofont icofont-star"></i>
                                                                        <i
                                                                            class="icofont icofont-star"></i>
                                                                        <i
                                                                            class="icofont icofont-star"></i>
                                                                        <i
                                                                            class="icofont icofont-star"></i>
                                                                        <i
                                                                            class="icofont icofont-star"></i>
                                                                    </div>
                                                                    <p class="m-b-0">Cras sit
                                                                        amet nibh libero, in
                                                                        gravida nulla. Nulla vel
                                                                        metus scelerisque ante
                                                                        sollicitudin commodo.
                                                                        Cras purus odio,
                                                                        vestibulum in vulputate
                                                                        at, tempus viverra
                                                                        turpis.</p>
                                                                    <div class="m-b-25">
                                                                        <span><a href="#!"
                                                                                class="m-r-10 f-12">Responder</a></span><span><a
                                                                                href="#!"
                                                                                class="f-12">Editar</a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="media-left">
                                                            <div class="flex-shrink-0">
                                                                <a href="#">
                                                                    <img class="media-object img-radius comment-img"
                                                                        src="{{asset("storage/images/avatar-2.jpg")}}"
                                                                        alt="Generic placeholder image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="media-heading">Mark
                                                                Doe<span
                                                                    class="f-12 text-muted m-l-5">Just
                                                                    now</span></h6>
                                                            <div
                                                                class="stars-example-css review-star">
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                                <i
                                                                    class="icofont icofont-star"></i>
                                                            </div>
                                                            <p class="m-b-0">Cras sit amet nibh
                                                                libero, in gravida nulla. Nulla
                                                                vel metus scelerisque ante
                                                                sollicitudin commodo. Cras purus
                                                                odio, vestibulum in vulputate
                                                                at, tempus viverra turpis.</p>
                                                            <div class="m-b-25">
                                                                <span><a href="#!"
                                                                        class="m-r-10 f-12">Responder</a></span><span><a
                                                                        href="#!"
                                                                        class="f-12">Editar</a>
                                                                </span>
                                                            </div>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Comentarios">
                                            <div class="input-group-text">
                                                <span class="">
                                                    <i class="icofont icofont-send-mail"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab content end -->
                    </div>
                </div>
            </div>
            <!-- Page-body end -->
        </div>
    </div>
</div>
@endsection
