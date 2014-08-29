<!-- Perfil de usuario -->
<script src="bootstrap/js/jQueryRut.js"></script>
<script src="bootstrap/js/jquery.Rut.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    $('#rut').Rut({ 
        on_error: function(){ alert('Favor ingrese un rut correcto'); } 
    });
    $("#content > ul").tabs();
    });
</script>
<div class="col-lg-12">
    <div class="page-header">
        <h1>Actualización de datos</h1>
    </div>
    <form class="form" action="ValidarActualizacion.php" name="perfil_usuario" method="POST">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="id" name="id" required="true" value="<?php echo $_SESSION['id_persona'] ?>" style="display: none">
                    <input type="text" class="form-control" id="rut" name="rut" required="true" value="<?php echo $_SESSION['rut'] ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="nombre" required="true" onkeypress="ValidaSoloLetras()" value="<?php echo $_SESSION['nombre'] ?>">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="ap_paterno"  required="true" onkeypress="ValidaSoloLetras()" value="<?php echo $_SESSION['ap_paterno'] ?>">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="ap_materno" required="true" onkeypress="ValidaSoloLetras()" value="<?php echo $_SESSION['ap_materno'] ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <input type="text" class="form-control" name="direccion" required="true" value="<?php echo $_SESSION['direccion'] ?>">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="telefono" required="true" value="<?php echo $_SESSION['telefono'] ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="actividad" required="true" onkeypress="ValidaSoloLetras()" value="<?php echo $_SESSION['actividad'] ?>">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" required="true" value="<?php echo $_SESSION['email'] ?>">
                </div>  
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <input type="submit" class="btn btn-block btn-primary btn-large" value="Actualizar datos">
                </div>
            </div>
        </div>
    </form>
</div>