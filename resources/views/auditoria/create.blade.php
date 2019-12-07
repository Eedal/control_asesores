@extends("theme.$theme.layout")

@section('styles')
    <link rel="stylesheet" href="{{asset("assets/$theme/css/smart_wizard.css")}}">
@endsection
@section('content')

<a href="{{ route('auditoria.index') }}" class="btn btn-success" style="margin-left: 15px">Listado</a>
<button type="submit" class="btn btn-success pull-right" form="formulario_auditoria">Finalizar auditoria</button>

<br>
</br>
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
                    <form action="{{ route('auditoria.store') }}" method="POST" id="formulario_auditoria">
                        {{ csrf_field() }}
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sticker" name="sticker">
                            <label class="form-check-label" for="sticker">Sticker</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="cumple_frecuencia" name="cumple_frecuencia">
                            <label class="form-check-label" for="cumple_frecuencia">Cumple frecuencia</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="dms" name="dms">
                            <label class="form-check-label" for="dms">DMS</label>
                        </div>
                        <!--<button type="submit" class="btn btn-primary">Finalizar auditoria</button>-->

                    
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
                                    <input type="checkbox" class="form-check-input" id="producto_recarga_tigo" name="producto_recarga_tigo">
                                    <label class="form-check-label" for="producto_recarga_tigo">Tigo</label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="producto_recarga_competencia" name="producto_recarga_competencia">
                                    <label class="form-check-label" for="producto_recarga_competencia">Comp</label>
                                </div>
                                <label for="">¿Quién tiene las mayores ventas?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_recarga_mayor_venta" id="producto_recarga_mayor_venta_tigo" value="0">
                                    <label class="form-check-label" for="producto_recarga_mayor_venta_tigo">
                                        Tigo
                                    </label>
                                    <input type="number" name="producto_recarga_mayor_venta_tigo_cantidad" id="producto_recarga_mayor_venta_tigo_cantidad">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_recarga_mayor_venta" id="producto_recarga_mayor_venta_claro" value="1">
                                    <label class="form-check-label" for="producto_recarga_mayor_venta_claro">
                                        Claro
                                    </label>
                                    <input type="number" name="producto_recarga_mayor_venta_claro_cantidad" id="producto_recarga_mayor_venta_claro_cantidad">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_recarga_mayor_venta" id="producto_recarga_mayor_venta_movistar" value="2">
                                    <label class="form-check-label" for="producto_recarga_mayor_venta_movistar">
                                        Movistar
                                    </label>
                                    <input type="number" name="producto_recarga_mayor_venta_movistar_cantidad" id="producto_recarga_mayor_venta_movistar_cantidad">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_recarga_mayor_venta" id="producto_recarga_mayor_venta_otros" value="3" checked>
                                    <label class="form-check-label" for="producto_recarga_mayor_venta_otros">
                                        Otros
                                    </label>
                                    <input type="number" name="producto_recarga_mayor_venta_otros_cantidad" id="producto_recarga_mayor_venta_otros_cantidad">
                                </div>
                            </div>
                     
                            <div id="step_producto_chip">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="producto_chip_tigo" name="producto_chip_tigo">
                                    <label class="form-check-label" for="producto_chip_tigo">Tigo</label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="producto_chip_competencia" name="producto_chip_competencia">
                                    <label class="form-check-label" for="producto_chip_competencia">Comp</label>
                                </div>
                                <label for="">¿Quién tiene las mayores ventas?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_chip_mayor_venta" id="producto_chip_mayor_venta_tigo" value="0" checked>
                                    <label class="form-check-label" for="producto_chip_mayor_venta_tigo">
                                        Tigo
                                    </label>
                                    <input type="number" name="producto_chip_mayor_venta_tigo_cantidad" id="producto_chip_mayor_venta_tigo_cantidad">

                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_chip_mayor_venta" id="producto_chip_mayor_venta_claro" value="1">
                                    <label class="form-check-label" for="producto_chip_mayor_venta_claro">
                                        Claro
                                    </label>
                                    <input type="number" name="producto_chip_mayor_venta_claro_cantidad" id="producto_chip_mayor_venta_claro_cantidad">

                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_chip_mayor_venta" id="producto_chip_mayor_venta_movistar" value="2">
                                    <label class="form-check-label" for="producto_chip_mayor_venta_movistar">
                                        Movistar
                                    </label>
                                    <input type="number" name="producto_chip_mayor_venta_movistar_cantidad" id="producto_chip_mayor_venta_movistar_cantidad">

                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_chip_mayor_venta" id="producto_chip_mayor_venta_otros" value="3">
                                    <label class="form-check-label" for="producto_chip_mayor_venta_otros">
                                        Otros
                                    </label>
                                    <input type="number" name="producto_chip_mayor_venta_otros_cantidad" id="producto_chip_mayor_venta_otros_cantidad">

                                </div>
                            </div>

                            <div id="step_producto_portabilidad">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_portabilidad_mayor_venta" id="producto_portabilidad_mayor_venta_tigo" value="0" checked>
                                    <label class="form-check-label" for="producto_portabilidad_mayor_venta_tigo">
                                        Tigo
                                    </label>
                                    <input type="number" name="producto_portabilidad_mayor_venta_tigo_cantidad" id="producto_portabilidad_mayor_venta_tigo_cantidad">

                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_portabilidad_mayor_venta" id="producto_portabilidad_mayor_venta_claro" value="1">
                                    <label class="form-check-label" for="producto_portabilidad_mayor_venta_claro">
                                        Claro
                                    </label>
                                    <input type="number" name="producto_portabilidad_mayor_venta_claro_cantidad" id="producto_portabilidad_mayor_venta_claro_cantidad">

                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_portabilidad_mayor_venta" id="producto_portabilidad_mayor_venta_movistar" value="2">
                                    <label class="form-check-label" for="producto_portabilidad_mayor_venta_movistar">
                                        Movistar
                                    </label>
                                    <input type="number" name="producto_portabilidad_mayor_venta_movistar_cantidad" id="producto_portabilidad_mayor_venta_movistar_cantidad">

                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="producto_portabilidad_mayor_venta" id="producto_portabilidad_mayor_venta_otros" value="3">
                                    <label class="form-check-label" for="producto_portabilidad_mayor_venta_otros">
                                        Otros
                                    </label>
                                    <input type="number" name="producto_portabilidad_mayor_otros_tigo_cantidad" id="producto_portabilidad_mayor_otros_tigo_cantidad">

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div id="step_plataforma">
                    <label for="">Tigo gestión</label>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="recarga_o_paquete" name="recarga_o_paquete">
                        <label class="form-check-label" for="recarga_o_paquete">Recarga/paquete</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="activador_chip" name="activador_chip">
                        <label class="form-check-label" for="activador_chip">Activador chip</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="reportes" name="reportes">
                        <label class="form-check-label" for="reportes">Reportes</label>
                    </div>
                    <br/>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="tigo_shop" name="tigo_shop">
                        <label class="form-check-label" for="tigo_shop">Tigo Shop</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="tigo_trainer" name="tigo_trainer">
                        <label class="form-check-label" for="tigo_trainer">Tigo Trainer</label>
                    </div>
                </div>

                <div id="step_visibilidad">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="estado" name="estado">
                        <label class="form-check-label" for="estado">Estado</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="vigencia" name="vigencia">
                        <label class="form-check-label" for="vigencia">Vigencia</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="posicion" name="posicion">
                        <label class="form-check-label" for="posicion">Posición</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="asociacion" name="asociacion">
                        <label class="form-check-label" for="asociacion">Asociación</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="r_visual_o_primera_posicion" name="r_visual_o_primera_posicion">
                        <label class="form-check-label" for="r_visual_o_primera_posicion">R. Visual/primera posición</label>
                    </div>
                </div>

                <div id="step_entrenamiento">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="oferta_prepago" name="oferta_prepago">
                        <label class="form-check-label" for="oferta_prepago">Oferta prepago</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="oferta_pospago" name="oferta_pospago">
                        <label class="form-check-label" for="oferta_pospago">Oferta pospago</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="portabilidad_prepago/pospago" name="portabilidad_prepago/pospago">
                        <label class="form-check-label" for="portabilidad_prepago/pospago">Portabilidad prepago/pospago</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="paq_focos" name="paq_focos">
                        <label class="form-check-label" for="paq_focos">PAQ. FOCOS</label>
                    </div>
                </div>

                <div id="step_otros_factores">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="conoce_incentivos" name="conoce_incentivos">
                        <label class="form-check-label" for="conoce_incentivos">Conoce incentivos</label>
                    </div>
                    <label for="">Recibe comisiones por parte de:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="otros_factores_recibe_comisiones" id="otros_factores_recibe_comisiones_tigo" value="0" checked>
                        <label class="form-check-label" for="otros_factores_recibe_comisiones_tigo">
                            Tigo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="otros_factores_recibe_comisiones" id="otros_factores_recibe_comisiones_claro" value="1">
                        <label class="form-check-label" for="otros_factores_recibe_comisiones_claro">
                            Claro
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="otros_factores_recibe_comisiones" id="otros_factores_recibe_comisiones_ambos" value="2">
                        <label class="form-check-label" for="otros_factores_recibe_comisiones_ambos">
                            Ambos
                        </label>
                    </div>
                    <br/>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="estado_de_la_red" name="estado_de_la_red">
                        <label class="form-check-label" for="estado_de_la_red">Estado de la red</label>
                    </div>
                </div>

                <div id="step_observaciones">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-11">
                            <label for="observaciones">Observaciones hallazgos / compromisos / acuerdos / solicitudes</label>
                        <textarea class="form-control form-control-sm" id="observaciones" name="observaciones" rows="4"></textarea>
                            </div>
                        </div>
                        
                    </div>
                    <!--<button type="submit" class="btn btn-primary">Finalizar auditoria</button>-->
                    </form>
                </div>

            </div>

        </div>

    </div>

<!--<button type="button" class="btn btn-success btn-circle"><i class="fa fa-plus"></i></button>-->
@endsection

@section('scripts')

    <script src="{{asset("assets/$theme/js/jquery.smartWizard.js")}}"></script>


    <script>
        $('#stepwizard').smartWizard();
        $('#producto_stepwizard').smartWizard();
        $("ul li").addClass("done");
        
        
    </script>
@endsection