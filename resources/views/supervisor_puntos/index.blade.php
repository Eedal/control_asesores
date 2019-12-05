@extends("theme.$theme.layout")

@section('styles')
    <link rel="stylesheet" href="{{asset("assets/$theme/css/smart_wizard.css")}}">
@endsection
@section('content')
    <div class="container mt-5 mb-5">
        <div id="stepwizard">
            <ul>
                <li><a href="#step_rutina_basica">RUTINA BÁSICA</a></li>
                <li><a href="#step_producto">PRODUCTO<br/></a></li>
                <li><a href="#step_plataforma">PLATAFORMAS<br/></a></li>
                <li><a href="#step_visibilidad">VISIBILIDAD<br/></a></li>
                <li><a href="#step_entrenamiento">ENTRENAMIENTO<br/></a></li>
                <li><a href="#step_otros_factores">OTROS FACTORES<br/></a></li>
                <li><a href="#step_observaciones">OBSERVACIONES<br/></a></li>
            </ul>
            <div>
                <div id="step_rutina_basica">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="sticker">
                        <label class="form-check-label" for="sticker">Sticker</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="comple_frecuencia">
                        <label class="form-check-label" for="comple_frecuencia">Cumple frecuencia</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="dms">
                        <label class="form-check-label" for="dms">DMS</label>
                    </div>
                </div>

                <div id="step_producto">
                    <div id="producto_stepwizard">
                        <ul>
                            <li><a href="#step_producto_recarga">RECARGA<br/><small>Descripción recarga</small></a></li>
                            <li><a href="#step_producto_chip">CHIP<br/><small>Descripción chip</small></a></li>
                            <li><a href="#step_producto_portabilidad">PORTABILIDAD<br/><small>Descripción portabilidad</small></a></li>  
                        </ul>
                        <div>
                            <div id="step_producto_recarga">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="producto_recarga_tigo">
                                    <label class="form-check-label" for="producto_recarga_tigo">Tigo</label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="producto_recarga_comp">
                                    <label class="form-check-label" for="producto_recarga_comp">Comp</label>
                                </div>
                                <label for="">¿Quién tiene las mayores ventas?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_recarga_mayor_venta" id="producto_recarga_mayor_venta_tigo" value="producto_recarga_mayor_venta_tigo" checked>
                                    <label class="form-check-label" for="producto_recarga_mayor_venta_tigo">
                                        Tigo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_recarga_mayor_venta" id="producto_recarga_mayor_venta_claro" value="producto_recarga_mayor_venta_claro">
                                    <label class="form-check-label" for="producto_recarga_mayor_venta_claro">
                                        Claro
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_recarga_mayor_venta" id="producto_recarga_mayor_venta_movistar" value="producto_recarga_mayor_venta_movistar">
                                    <label class="form-check-label" for="producto_recarga_mayor_venta_movistar">
                                        Movistar
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_recarga_mayor_venta" id="producto_recarga_mayor_venta_otros" value="producto_recarga_mayor_venta_otros">
                                    <label class="form-check-label" for="producto_recarga_mayor_venta_otros">
                                        Otros
                                    </label>
                                </div>
                            </div>
                     
                            <div id="step_producto_chip">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="producto_chip_tigo">
                                    <label class="form-check-label" for="producto_chip_tigo">Tigo</label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="producto_chip_comp">
                                    <label class="form-check-label" for="producto_chip_comp">Comp</label>
                                </div>
                                <label for="">¿Quién tiene las mayores ventas?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_chip_mayor_venta" id="producto_chip_mayor_venta_tigo" value="producto_chip_mayor_venta_tigo" checked>
                                    <label class="form-check-label" for="producto_chip_mayor_venta_tigo">
                                        Tigo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_chip_mayor_venta" id="producto_chip_mayor_venta_claro" value="producto_chip_mayor_venta_claro">
                                    <label class="form-check-label" for="producto_chip_mayor_venta_claro">
                                        Claro
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_chip_mayor_venta" id="producto_chip_mayor_venta_movistar" value="producto_chip_mayor_venta_movistar">
                                    <label class="form-check-label" for="producto_chip_mayor_venta_movistar">
                                        Movistar
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_chip_mayor_venta" id="producto_chip_mayor_venta_otros" value="producto_chip_mayor_venta_otros">
                                    <label class="form-check-label" for="producto_chip_mayor_venta_otros">
                                        Otros
                                    </label>
                                </div>
                            </div>

                            <div id="step_producto_portabilidad">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_portabilidad_mayor_venta" id="producto_portabilidad_mayor_venta_tigo" value="producto_portabilidad_mayor_venta_tigo" checked>
                                    <label class="form-check-label" for="producto_portabilidad_mayor_venta_tigo">
                                        Tigo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_portabilidad_mayor_venta" id="producto_portabilidad_mayor_venta_claro" value="producto_portabilidad_mayor_venta_claro">
                                    <label class="form-check-label" for="producto_portabilidad_mayor_venta_claro">
                                        Claro
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_portabilidad_mayor_venta" id="producto_portabilidad_mayor_venta_movistar" value="producto_portabilidad_mayor_venta_movistar">
                                    <label class="form-check-label" for="producto_portabilidad_mayor_venta_movistar">
                                        Movistar
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_portabilidad_mayor_venta" id="producto_portabilidad_mayor_venta_otros" value="producto_portabilidad_mayor_venta_otros">
                                    <label class="form-check-label" for="producto_portabilidad_mayor_venta_otros">
                                        Otros
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="step_plataforma">
                    <label for="">Tigo gestión</label>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="recarga/paquete">
                        <label class="form-check-label" for="recarga/paquete">Recarga/paquete</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="activador_chip">
                        <label class="form-check-label" for="activador_chip">Activador chip</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="reportes">
                        <label class="form-check-label" for="reportes">Reportes</label>
                    </div>
                    <br/>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="tigo_shop">
                        <label class="form-check-label" for="tigo_shop">Tigo Shop</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="tigo_trainer">
                        <label class="form-check-label" for="tigo_trainer">Tigo Trainer</label>
                    </div>
                </div>

                <div id="step_visibilidad">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="estado">
                        <label class="form-check-label" for="estado">Estado</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="vigencia">
                        <label class="form-check-label" for="vigencia">Vigencia</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="posicion">
                        <label class="form-check-label" for="posicion">Posición</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="asociacion">
                        <label class="form-check-label" for="asociacion">Asociación</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="r._visual/primera_posucion">
                        <label class="form-check-label" for="r._visual/primera_posucion">R. Visual/primera posición</label>
                    </div>
                </div>

                <div id="step_entrenamiento">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="oferta_prepago">
                        <label class="form-check-label" for="oferta_prepago">Oferta prepago</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="oferta_pospago">
                        <label class="form-check-label" for="oferta_pospago">Oferta pospago</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="portabilidad_prepago/pospago">
                        <label class="form-check-label" for="portabilidad_prepago/pospago">Portabilidad prepago/pospago</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="paq._focos">
                        <label class="form-check-label" for="paq._focos">PAQ. FOCOS</label>
                    </div>
                </div>

                <div id="step_otros_factores">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="conoce_incentivos">
                        <label class="form-check-label" for="conoce_incentivos">Conoce incentivos</label>
                    </div>
                    <label for="">Recibe comisiones por parte de:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="otros_factores_recibe_comisiones" id="otros_factores_recibe_comisiones_tigo" value="otros_factores_recibe_comisiones_tigo" checked>
                        <label class="form-check-label" for="otros_factores_recibe_comisiones_tigo">
                            Tigo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="otros_factores_recibe_comisiones" id="otros_factores_recibe_comisiones_claro" value="otros_factores_recibe_comisiones_claro">
                        <label class="form-check-label" for="otros_factores_recibe_comisiones_claro">
                            Claro
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="otros_factores_recibe_comisiones" id="otros_factores_recibe_comisiones_ambos" value="otros_factores_recibe_comisiones_ambos">
                        <label class="form-check-label" for="otros_factores_recibe_comisiones_ambos">
                            Ambos
                        </label>
                    </div>
                    <br/>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="estado_de_la_red">
                        <label class="form-check-label" for="estado_de_la_red">Estado de la red</label>
                    </div>
                </div>

                <div id="step_observaciones">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-11">
                            <label for="observaciones">Observaciones hallazgos / compromisos / acuerdos / solicitudes</label>
                        <textarea class="form-control form-control-sm" id="observaciones" rows="4"></textarea>
                            </div>
                        </div>
                        
                    </div>
                    <button type="submit" class="btn btn-primary">Finalizar auditoria</button>
                </div>

            </div>

        </div>

    </div>

<button type="button" class="btn btn-success btn-circle"><i class="fa fa-plus"></i></button>
@endsection

@section('scripts')

    <script src="{{asset("assets/$theme/js/jquery.smartWizard.js")}}"></script>


    <script>
        $('#stepwizard').smartWizard();
        $('#producto_stepwizard').smartWizard();
        $("ul li").addClass("done");
        
        
    </script>
@endsection