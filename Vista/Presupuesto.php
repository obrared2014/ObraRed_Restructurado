<!-- presupuesto -->
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="?sec=Inicio">Inicio</a></li>
            <li class="active">Crear Presupuesto</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1><b class="glyphicon glyphicon-list-alt"></b> Crear Presupuesto</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default"><!-- Menu Radier -->
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#radier">
                            Radier
                        </a>
                    </h4>
                </div>
                <div id="radier" class="panel-collapse collapse">
                    <div class="panel-body">
                        <form class="form-horizontal" action="" method="POST" name="form_presupuesto_medidas_radier">
                            <input type="hidden" name="idUsuario" id="idUsuario" value="0<?php
                            if (isset($_SESSION["id_persona"])) {
                                echo $_SESSION["id_persona"];
                            } else {
                                0;
                            }
                            ?>">
                            <input type="hidden" name="nombreConstruccion" id="nombreConstruccion" value="Radier">
                            <input type="hidden" name="construccion" id="construccion" value="1"> <!-- se debe cambiar esto ya que debe encontrar el id-->
                            <input type="hidden" name="presupuestoRapido" id="presupuestoRapido" value="NO">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" data-toggle="tooltip">Zona Geográfica</div>
                                        <div class="panel-body">
                                            <select class="form-control" required="true" name="zona_geografica" id="zona_geografica">
                                                <option value="">Seleccione</option>
                                                <option value="1">Zona Centro</option>
                                                <option value="2">Zona Norte</option>
                                                <option value="3">Zona Sur</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">&nbsp;</div>
                                <div class="col-lg-3">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Unidad de Medida</div>
                                        <div class="panel-body">
                                            <div class="col-lg-12">
                                                <input type="radio" name="unidadMedida" id="centimetros" value="C" onClick="activaCampos('radier');" onChange="cambiaUm(this.value, 'radier');" required="true">Centimetros
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="radio" name="unidadMedida" id="metros"  value="M" onClick="activaCampos('radier');" onChange="cambiaUm(this.value, 'radier');">Metros
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Medidas de contrucción</div>
                                        <div class="panel-body">
                                            <div class="col-lg-4">
                                                <input type="text" placeholder="Alto" maxlength="4" class="form-control" name="alto" id="alto_radier" onkeypress="soloNumeros(event);" disabled required="true"/>
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho_radier" onkeypress="soloNumeros(event);" disabled required="true"/>
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo_radier" onkeypress="soloNumeros(event);" disabled required="true"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">&nbsp;</div>
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Seleccion de Materiales</div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <select class="form-control" required="true" name="material_uno" id="material_uno">
                                                        <option value="">Material uno</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" value="descripcion material uno" name="descripcion_mat_uno" id="descripcion_mat_uno" class="form-control" disabled="true"/>
                                                </div>
                                            </div>
                                            <div class="row">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <select class="form-control" required="true" name="material_dos" id="material_dos">
                                                        <option value="">Material dos</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" value="descripcion material dos" name="descripcion_mat_dos" id="descripcion_mat_dos" class="form-control" disabled="true"/>
                                                </div>
                                            </div>
                                            <div class="row">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <select class="form-control" required="true" name="material_tres" id="material_tres">
                                                        <option value="">Material tres</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" value="descripcion material tres" name="descripcion_mat_tres" id="descripcion_mat_tres" class="form-control" disabled="true"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">&nbsp;</div>
                                <div class="col-lg-4 col-lg-offset-4">
                                    <button type="submit" id="loading_radier" data-loading-text="Calculando..." class="btn btn-block btn-primary loading">Calcular</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel panel-default"><!-- Menu Muro -->
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#muro">
                            Muro
                        </a>
                    </h4>
                </div>
                <div id="muro" class="panel-collapse collapse">
                    <div class="panel-body">
                        <form class="form-horizontal" action="" method="POST" name="form_presupuesto_medidas_muro">
                            <input type="hidden" name="idUsuario" id="idUsuario" value="0<?php
                            if (isset($_SESSION["id_persona"])) {
                                echo $_SESSION["id_persona"];
                            } else {
                                0;
                            }
                            ?>">
                            <input type="hidden" name="nombreConstruccion" id="nombreConstruccion" value="Muro">
                            <input type="hidden" name="presupuestoRapido" id="presupuestoRapido" value="NO">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Tipo de Muro</div>
                                        <div class="panel-body">
                                            <select class="form-control" required="true" name="tipo_muro" id="tipo_muro" onChange="actvaAnchoMuro()">
                                                <option value="">Seleccione</option>
                                                <option value="muroCasa">Perimetro Casa</option>
                                                <option value="Pandereta">Pandereta</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">&nbsp;</div>
                                <div class="col-lg-3">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Unidad de Medida</div>
                                        <div class="panel-body">
                                            <div class="col-lg-12">
                                                <input type="radio" name="unidadMedida" id="centimetros" value="C" onClick="activaCampos('muro');" onChange="cambiaUm(this.value, 'muro');" required="true">Centimetros
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="radio" name="unidadMedida" id="metros"  value="M" onClick="activaCampos('muro');" onChange="cambiaUm(this.value, 'muro');">Metros
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Medidas de contrucción</div>
                                        <div class="panel-body">
                                            <div class="col-lg-4">
                                                <input type="text" placeholder="Alto" maxlength="4" class="form-control" name="alto" id="alto_muro" onkeypress="soloNumeros(event);" disabled required="true"/>
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho_muro" onkeypress="soloNumeros(event);" disabled required="true"/>
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo_muro" onkeypress="soloNumeros(event);" disabled required="true"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">&nbsp;</div>
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Seleccion de Materiales</div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <select class="form-control" required="true" name="material_uno" id="material_uno">
                                                        <option value="">Material uno</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" value="descripcion material uno" name="descripcion_mat_uno" id="descripcion_mat_uno" class="form-control" disabled="true"/>
                                                </div>
                                            </div>
                                            <div class="row">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <select class="form-control" required="true" name="material_dos" id="material_dos">
                                                        <option value="">Material dos</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" value="descripcion material dos" name="descripcion_mat_dos" id="descripcion_mat_dos" class="form-control" disabled="true"/>
                                                </div>
                                            </div>
                                            <div class="row">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <select class="form-control" required="true" name="material_tres" id="material_tres">
                                                        <option value="">Material tres</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" value="descripcion material tres" class="form-control" disabled="true"/>
                                                </div>
                                            </div>
                                            <div class="row">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <select class="form-control" required="true" name="material_cuatro" id="material_cuatro">
                                                        <option value="">Material cuatro</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" value="descripcion material cuatro" class="form-control" disabled="true"/>
                                                </div>
                                            </div>
                                            <div class="row">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <select class="form-control" required="true" name="material_cinco" id="material_cinco">
                                                        <option value="">Material cinco</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" value="descripcion material cinco" class="form-control" disabled="true"/>
                                                </div>
                                            </div>
                                            <div class="row">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <select class="form-control" required="true" name="material_seis" id="material_seis">
                                                        <option value="">Material seis</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" value="descripcion material seis" class="form-control" disabled="true"/>
                                                </div>
                                            </div>
                                            <div class="row">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <select class="form-control" required="true" name="material_siete" id="material_siete">
                                                        <option value="">Material siete</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" value="descripcion material siete" class="form-control" disabled="true"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">&nbsp;</div>
                                <div class="col-lg-4 col-lg-offset-4">
                                    <button type="submit" id="loading_radier" data-loading-text="Calculando..." class="btn btn-block btn-primary loading">Calcular</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel panel-default"><!-- Menu Techumbre -->
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#techumbre">
                            Techumbre
                        </a>
                    </h4>
                </div>
                <div id="techumbre" class="panel-collapse collapse">
                    <div class="panel-body">
                        <form class="form-horizontal" action="./Modelo/Presupuestos/obtenerPresupuestos.php" method="POST" name="form_presupuesto_medidas_techo">
                            <input type="hidden" name="idUsuario" id="idUsuario" value="0<?php
                            if (isset($_SESSION["id_persona"])) {
                                echo $_SESSION["id_persona"];
                            } else {
                                0;
                            }
                            ?>">
                            <input type="hidden" name="nombreConstruccion" id="nombreConstruccion" value="Techo">
                            <input type="hidden" name="presupuestoRapido" id="presupuestoRapido" value="NO">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Zona Geográfica</div>
                                        <div class="panel-body">
                                            <select class="form-control" required="true" name="zona_geografica" id="zona_geografica">
                                                <option value="">Seleccione</option>
                                                <option value="Norte">Zona Norte</option>
                                                <option value="Centro">Zona Centro</option>
                                                <option value="Sur">Zona Sur</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">&nbsp;</div>
                                <div class="col-lg-3">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Unidad de Medida</div>
                                        <div class="panel-body">
                                            <div class="col-lg-12">
                                                <input type="radio" name="unidadMedida" id="centimetros" value="C" onClick="activaCampos('techo');" onChange="cambiaUm(this.value, 'techo');" required="true">Centimetros
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="radio" name="unidadMedida" id="metros"  value="M" onClick="activaCampos('techo');" onChange="cambiaUm(this.value, 'techo');">Metros
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Medidas de contrucción</div>
                                        <div class="panel-body">
                                            <div class="col-lg-4">
                                                <select name="aguas" id="aguas_techo"  class="form-control" required="true">
                                                    <option value="">Cantidad de Aguas</option>
                                                    <option value="1">1 Aguas</option>
                                                    <option value="2">2 Aguas</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" placeholder="Ancho" maxlength="4" class="form-control ayuda-tooltip" name="ancho" id="ancho_techo" onkeypress="soloNumeros(event);" disabled required="true" data-toggle="tooltip" data-original-title="Ancho total de lo que será tu techo"/>
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" placeholder="Largo" maxlength="4" class="form-control ayuda-tooltip" name="largo" id="largo_techo" onkeypress="soloNumeros(event);" disabled required="true" data-toggle="tooltip" data-original-title="Largo total de lo que será tu techo"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">&nbsp;</div>
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Seleccion de Materiales</div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <select class="form-control" required="true" name="material_uno" id="material_uno">
                                                        <option value="">Material uno</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" value="descripcion material uno" name="descripcion_mat_uno" id="descripcion_mat_uno" class="form-control" disabled="true"/>
                                                </div>
                                            </div>
                                            <div class="row">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <select class="form-control" required="true" name="material_dos" id="material_dos">
                                                        <option value="">Material dos</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" value="descripcion material dos" name="descripcion_mat_dos" id="descripcion_mat_dos" class="form-control" disabled="true"/>
                                                </div>
                                            </div>
                                            <div class="row">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <select class="form-control" required="true" name="material_tres" id="material_tres">
                                                        <option value="">Material tres</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" value="descripcion material tres" class="form-control" disabled="true"/>
                                                </div>
                                            </div>
                                            <div class="row">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <select class="form-control" required="true" name="material_cuatro" id="material_cuatro">
                                                        <option value="">Material cuatro</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" value="descripcion material cuatro" class="form-control" disabled="true"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">&nbsp;</div>
                                <div class="col-lg-4 col-lg-offset-4">
                                    <button type="submit" id="loading_radier" data-loading-text="Calculando..." class="btn btn-block btn-primary loading">Calcular</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    (function($){$('.loading').click(function() {var btn = $(this);btn.button('loading');setTimeout(function() {btn.button('reset');},2000);});})(jQuery);
</script>


<!--<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1><b class="glyphicon glyphicon-list-alt"></b> Generar Presupuesto</h1>
        </div>
    </div>
    <div class="col-lg-12">
        <form class="form-horizontal" action="./Modelo/Presupuestos/obtenerPresupuestos.php" method="POST" name="form_presupuesto_medidas">
            <input type="hidden" name="idUsuario" id="idUsuario" value="0<?php
// if(isset($_SESSION["id_persona"])){
//                                                                                echo $_SESSION["id_persona"];
//                                                                        }else{
//                                                                            0;} 
?>">
            <input type="hidden" name="nombreConstruccion" id="nombreConstruccion" value="">
            <div class="row">
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">Seleccione el tipo de construcción</div>
                        <div class="panel-body">
                            <select name="construccion" id="construccion" class="form-control" required="true" onchange="javascript:textoSeleccionado();">
                                <option value="">Elija el Tipo de Construcción</option>
                                <option value="Techo">Techo</option>
                                <option value="Radier">Radier</option>
                                <option value="Muro">Muro</option>
                                <option value="Casa">Casa</option>                                
<?php
//                                        include_once './Modelo/Materiales/consultasMateriales.php';
//                                        include './Modelo/datosBD.php';
//                                        $tipo = devuelveTipoMaterial($basedatos,$puerto,$servidor,$usuario,$contrasena);
//                                        foreach($tipo as $indice => $registro){
//                                            echo "<option value=".$registro['id_tipo_materiales'].">".$registro['nombre_tipo_materiales']."</option>";
//                                        }
?>    
                            </select>
                        </div>
                    </div>    
                </div>
                <div class="col-lg-9" name="div_medidas" id="div_medidas"> panel solicitando las medidas de la obra
                    <div class="panel panel-default">
                        <div class="panel-heading">Ingrese las Medidas de su obra (Ejemplo Unidad de Medida: Metros 1.5 = 150 Centímetros)</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-lg-3">
                             <select name="metrosOcentimetros" id="metrosOcentimetros" class="form-control" onChange="unidadMedida();"  required >
                                      <option value="">Unidad de Medida</option>
                                      <option value="1">Centímetros</option>
                                      <option value="2">Metros</option>
                                </select>
                                    Unidad de Medida<br>
                                    <input type="radio" name="unidadMedida" id="centimetros" value="C" onClick="activaCampos('presu');" onChange="cambiaUm(this.value,'presu');" required="true">Centimetros<br>
                                    <input type="radio" name="unidadMedida" id="metros"  value="M" onClick="activaCampos('presu');" onChange="cambiaUm(this.value,'presu');">Metros
                                </div>
                                <div class="col-lg-3"> 
                                    Alto<br>
                                    <input type="text" placeholder="Alto" maxlength="4" class="form-control" name="alto" id="alto_presu" onkeypress="soloNumeros(event);" disabled required="true"/> 
                                </div> 
                                <div class="col-lg-3"> 
                                    Ancho<br>
                                    <input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho_presu" onkeypress="soloNumeros(event);" disabled required="true"/> 
                                </div> 
                                <div class="col-lg-3"> 
                                    Largo<br>
                                    <input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo_presu" onkeypress="soloNumeros(event);" disabled required="true"/> 
                                </div>                               
                            </div>
                        </div>
                    </div> fin panel medidas
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">Seleccione los productos</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <select name="tipo_material1" id="tipo_material1" class="form-control" onchange="buscarMateriales();">
                                    <option value="">Seleccione Tipo</option>
                                        //<?php
//                                            require_once("Modelo/Materiales/consultasMateriales.php");
//                                            $tipo = devuelveTipoMaterial();
//                                            foreach($tipo as $indice => $registro){
//                                                    echo "<option value=".$registro['id_tipo_materiales'].">".$registro['nombre_tipo_materiales']."</option>";
//                                            }
//                                        
?>                                
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="material1" id="material1" class="form-control" onchange="buscarMaterialesDetalles();">
                                    <option value="" >Seleccione Material</option>
                                </select>
                            </div>  
                            <div class="form-group">
                                <select name="detalleMaterial1" id="detalleMaterial1" class="form-control">
                                    <option value="" >Seleccione Detalle</option>
                                </select>
                            </div>                             
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-offset-4">
                    <input type="button" class="btn btn-block btn-primary btn-large" value="Cotizar" onclick="metrosCubicosRadier();">
                    <button type="button" class="btn btn-block btn-primary" data-dismiss="modal" onclick="form_presupuesto_medidas.submit()">Calcular <span class="glyphicon glyphicon-ok"></span></button>
                    <input type="submit" class="btn btn-block btn-primary" value="Calcular">
                </div>
            </div>
        </form>
    </div>
</div>-->
<!--<script>    
//    alert(document.getElementById("idUsuario").value);
//    $("#tipo_material1").on("change", buscarMateriales);
    function textoSeleccionado(){ 
        var combo = document.getElementById("construccion"); 
        var seleccionado = combo.options[combo.selectedIndex].text; 
        document.getElementById("nombreConstruccion").value=seleccionado;
    } 
</script>-->