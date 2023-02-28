@extends('layouts.app')

@section('content')
<head>

    
</head>
    <div class="layout-px-spacing">
       
        <div class="row layout-top-spacing">               
            <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-activity-three">
                    <div class="widget-heading">
                        <div class="">
                            <h5 class="">Materias Habilitadas</h5>
                        </div>
                    </div>
                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table mb-4">
                             <caption><strong>¿Desea habilitar sus materias Electivas?</strong> 
                                <button type="button" class="btn btn-primary btn-rounded mb-2" onclick="agregarFila()">Si</button>  <button type="button" class="btn btn-danger btn-rounded mb-2" onclick="eliminarFila()">No</button></caption>
                              <thead>
                                    <tr>
                                        <th class="text-center">Nro</th>
                                        <th>Sigla</th>
                                        <th>Nombre</th>
                                        <th class="">Semestre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-primary">INF-123</td>
                                        <td>Lenguajes Formales</td>
                                        <td class=""><span class=" shadow-none badge outline-badge-primary">5</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-primary">INF-123</td>
                                        <td>Estructura de Datos 2</td>
                                        <td class=""><span class=" shadow-none badge outline-badge-primary">5</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-primary">INF-123</td>
                                        <td>Base de Datos 2</td>
                                        <td class=""><span class=" shadow-none badge outline-badge-primary">6</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="text-primary">INF-123</td>
                                        <td>Ingles 2</td>
                                        <td class=""><span class=" shadow-none badge outline-badge-primary">2</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-activity-three">

                    <div class="widget-heading">
                        <h5 class="">Proximos Eventos</h5>
                    </div>

                    <div class="widget-content">

                        <div class="mt-container mx-auto">
                            <div class="timeline-line">
                                
                                <div class="item-timeline timeline-new">
                                    <div class="t-dot">
                                        <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                    </div>
                                    <div class="t-content">
                                        <div class="t-uppercontent">
                                            <h5>Inscripcion</h5>
       
                                        </div>
                                        <p><span>06 Marzo de 2023</span> 3er Dia </p>
                                        
                                    </div>
                                </div>

                                <div class="item-timeline timeline-new">
                                    <div class="t-dot">
                                        <div class="t-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>
                                    </div>
                                    <div class="t-content">
                                        <div class="t-uppercontent">
                                            <h5>Adicion y Levantamiento</h5>
                                        </div>
                                        <p><span>10 Marzo de 2023 al 20 Marzo de 2023 </span>  </p>
                                    </div>
                                </div>

                                <div class="item-timeline timeline-new">
                                    <div class="t-dot">
                                        <div class="t-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg></div>
                                    </div>
                                    <div class="t-content">
                                        <div class="t-uppercontent">
                                            <h5>Retiro</h5>
                                           
                                        </div>
                                        <p><span>10 Marzo de 2023 al 20 Marzo de 2023 </span>  </p>
                                       
                                    </div>
                                </div>

                               

                                <div class="item-timeline timeline-new">
                                    <div class="t-dot">
                                        <div class="t-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg></div>
                                    </div>
                                    <div class="t-content">
                                        <div class="t-uppercontent">
                                            <h5>Inicio de Clases</h5>
                                        </div>
                                        <p>20 de Marzo de 2023</p>
                                        
                                    </div>
                                </div>                                      
                            </div>                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    
    
@endsection  