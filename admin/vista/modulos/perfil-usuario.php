<?php
ob_start();
//session_start();
if(!isset($_SESSION["nombres"]))
{
    header("Location: ../../../index.php");
}
else{
    if($_SESSION['Usuario']==1){

?>
<div class="content">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Modificar Registro</strong> 
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">Nombres y Apellidos</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa  fa-info"></i></div>
                                        <input class="form-control" tye="text" name="nombres" id="nombres" required>
                                    </div>
                                    <small class="form-text text-muted">Juan Pérez</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Correo Electrónico</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa  fa-envelope-o"></i></div>
                                        <input class="form-control" type="email" name="correo" id="correo" required>
                                    </div>
                                    <small class="form-text text-muted">juan@gmail.com</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Teléfono</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control" type="tel" name="telefono" id="telefono" required>
                                    </div>
                                    <small class="form-text text-muted">ex. 99-9999999</small>
                                </div>
                                <div class="form-group">
                                    <label for="formFileLg" class="form-label">Foto Perfil</label>
                                        <input class="form-control" id="imagen_recarga" type="file">
                                    </div>

                                <button type="submit" class="btn btn-success btn-lg" id="btn_guardar"><i class="fa ti-check"></i>&nbsp; Guardar</button>
                                <button type="button" class="btn btn-danger btn-lg"id="btn_salir"><i class="fa ti-close"></i>&nbsp;Cancelar</button>
                            </div>
                        </div>
                    </div>

                    
                </div>
                <!-- end Edit-Register -->
                <div class="clearfix"></div>
    <div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-mb-12">
                <div class="card">
                <button type="button" class="btn btn-primary btn-sm">Agregar Información</button>
                    <div class="card-header">
                        <strong class="card-title">Perfil</strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th class="avatar">Usuario</th>
                                    <th>ID_USUARIO</th>
                                    <th>Nombre</th>
                                    <th>Teléfono</th>
                                    <th>Correo</th>
                                    <th>Imagen</th>
                                    <th>Estado</th>
                                    <th>opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="serial">1.</td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td> #5469 </td>
                                    <td> <span class="name">Louis Stanley</span> </td>
                                    <td> <span class="telefono">+152365478956</span> </td>
                                    <td><span class="correo">usuario@gmail.com</span></td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-complete">ACTIVO</span>
                                    </td>
                                    <td>
                                        <a href="planes" class="badge badge-complete"> <i class="fa fa-check"></i></a>
                                        <a href="planes" class="badge badge-pending"> <i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="serial">2.</td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="images/avatar/2.jpg"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td> #5468 </td>
                                    <td> <span class="name">Gregory Dixon</span> </td>
                                    <td> <span class="telefono">+152365478956</span> </td>
                                    <td><span class="correo">usuario@gmail.com</span></td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-complete">ACTIVO</span>
                                    </td>
                                    <td>
                                        <a href="planes" class="badge badge-complete"> <i class="fa fa-check"></i></a>
                                        <a href="planes" class="badge badge-pending"> <i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="serial">3.</td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="images/avatar/3.jpg"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td> #5467 </td>
                                    <td> <span class="name">Catherine Dixon</span> </td>
                                    <td> <span class="telefono">+152365478956</span> </td>
                                    <td><span class="correo">usuario@gmail.com</span></td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-complete">ACTIVO</span>
                                    </td>
                                    <td>
                                        <a href="planes" class="badge badge-complete"> <i class="fa fa-check"></i></a>
                                        <a href="planes" class="badge badge-pending"> <i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="serial">4.</td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="images/avatar/4.jpg"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td> #5466 </td>
                                    <td> <span class="name">Mary Silva</span> </td>
                                    <td> <span class="telefono">+152365478956</span> </td>
                                    <td><span class="correo">usuario@gmail.com</span></td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-pending">Pending</span>
                                    </td>
                                    <td>
                                        <a href="planes" class="badge badge-complete"> <i class="fa fa-check"></i></a>
                                        <a href="planes" class="badge badge-pending"> <i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
            </div>
            <!-- end Table Interes -->
        </div>
    </div><!-- .animated -->

                
          </div>

      </div>


  </div>
 
</div><!-- .animated -->

</div><!-- .content -->
<?php
}
else{
    require 'noacceso.php';

}

    ?>
    <script></script>
    <?php
}
ob_end_flush();
    ?>
