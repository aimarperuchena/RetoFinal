<div class="row">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="/admin/reservaIndex">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="title-xs font-weight-bold text-primary text-uppercase mb-1">Reservas <h4>{{$sociedad->reservas->where('fecha', '>=', date('Y-m-d'))->count()}}</h4></div>

                                        </div>
                                        <div class="col-auto">

                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="/admin/productoIndex">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="title-xs font-weight-bold text-primary text-uppercase mb-1">Productos <h4>{{$sociedad->productos->count()}}</h4></div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-warehouse fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="/admin/incidenciaIndex">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="title-xs font-weight-bold text-primary text-uppercase mb-1">Incidencias <h4>{{$sociedad->incidencias->where('estado','pendiente')->count()}}</h4></div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="/admin/mesaIndex">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="title-xs font-weight-bold text-primary text-uppercase mb-1">Mesas <h4>{{$sociedad->mesas->count()}}</h4></div>

                                        </div>
                                        <div class="col-auto">
                                        <img src="https://img.icons8.com/ultraviolet/60/000000/table.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </a>
                </div>