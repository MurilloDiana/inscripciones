@extends('layouts.app')

@section('content')

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

            <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-activity-three">
                    <div class="widget-heading">
                        <div class="">
                            <h5 class="">Inscripcion</h5>
                        </div>
                    </div>
                    <div class="widget-content ">
                        <div class="table-responsive">
                            <table class="table mb-4">
                                <thead>
                                    <tr>
                                        <th class="text-center"> - </th>
                                        <th>Materia</th>
                                        <th>Grupo</th>
                                        <th>Cupo</th>
                                        <th>Docente</th>
                                        <th>Horario</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><input type="checkbox" name="presion" onClick="presion()"></td>
                                        <td>Lenguajes Formales</td>
                                        <td class="">
                                                        
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="javascript:void(0); selected">SA</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">SC</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">MV</a>
                                                   
                                                </div>
                                            </div>

                                        </td>
                                        <td class="text-center"><span class="badge badge-success">8</span></td>
                                        <td class=""><span class="">Ing Gino Barroso</span></td>
                                        <td class=""><span class="">L-M-V : 07:00 - 08:30</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text">
                                                  <input type="checkbox" class="new-control-input">
                                                </label>
                                            </div>
                                        </td>
                                        <td>Estructura de Datos 2</td>
                                        <td class="">
                                                        
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="javascript:void(0); selected">SA</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">SC</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">MV</a>
                                                   
                                                </div>
                                            </div>

                                        </td>
                                        <td class="text-center"><span class="badge badge-success">5</span></td>
                                        <td class=""><span class="">Ing Gino Barroso</span></td>
                                        <td class=""><span class="">L-M-V : 10:00 - 12:30</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><input type="checkbox"></td>
                                        <td>Base de Datos 2</td>
                                        <td class="">
                                                        
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="javascript:void(0); selected">SA</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">SC</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">MV</a>
                                                   
                                                </div>
                                            </div>

                                        </td>
                                        <td class="text-center"><span class="badge badge-warning">2</span></td>
                                        <td class=""><span class="">Ing Ubaldo</span></td>
                                        <td class=""><span class="">J-V : 07:00 - 09:30</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                
                <div class="widget widget-activity-four">

                    <div class="widget-heading">
                        <h5 class="">Actividades Recientes</h5>
                    </div>

                    <div class="widget-content">

                        <div class="mt-container mx-auto">
                            <div class="timeline-line">
                                
                                <div class="item-timeline timeline-primary">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>La materia <strong>Ingles 2 Grupo SA</strong> no tiene cupos</p>
                                        <p class="t-time">Justo Ahora</p>
                                    </div>
                                </div>

                                <div class="item-timeline timeline-success">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>La materia<strong> Lenguajes Formales Grpo SC</strong> habilito <strong>10 </strong>cupos </p>
                                        <p class="t-time">Hace 10 min</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-danger">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Contingencia en el Sistema, espere unos momentos</p>
                                        <p class="t-time">08:30 AM</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-success">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Servidor Caido, intentelo mas tarde</p>
                                        <p class="t-time">06:00 AM</p>
                                    </div>
                                </div>

                            </div>                                    
                        </div>

                        <div class="tm-action-btn">
                            <button class="btn">View All <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        </div>
                    </div>
                </div>
            </div>

           
           
               

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-two">

                    <div class="widget-heading">
                        <h5 class="">Horarios</h5>
                    </div>

                    <div class="widget-content">
                      
                        <div id='calendar'></div>    
                        
                    </div>
                </div>
            </div>

        

        </div>

    </div>
    
@endsection