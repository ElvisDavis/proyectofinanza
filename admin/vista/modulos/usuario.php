<?php
ob_start();
//session_start();
if(!isset($_SESSION["nombres"]))
{
    header("Location: ../index.php");
}
else{
    if($_SESSION['Empresa']==1){

?>
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-mb-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Registro de Actividades</strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th class="avatar">Usuario</th>
                                    <th>ID_Usuario</th>
                                    <th>Nombre</th>
                                    <th>Plan</th>
                                    <th>Actividades</th>
                                    <th>Fecha</th>
                                    <th>Wallet</th>
                                    <th>Total Referidos</th>
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
                                    <td> <span class="product">iMax</span> </td>
                                    <td><span class="count">231</span></td>
                                    <td><span class="count">05/05/2022</span></td>
                                    <td>
                                        <span class="badge badge-complete">HAHFKGFK2345HKFKLGFLK</span>
                                    </td>
                                    <td><span class="count">0</span></td>
                                    
                                    <td>
                                        <span class="badge badge-complete">Complete</span>
                                    </td>
                                    <td>
                                        <a href="planes" class="badge badge-complete"> <i class="fa fa-pencil"></i></a>
                                        <a href="planes" class="badge badge-pending"> <i class="fa fa-times"></i></a>
                                    </td>
                                    <!-- <td>
                                    <a href="planes" class="badge badge-pending"> <i class="fa fa-times"></i></a>
                                    </td> -->
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
                                    <td> <span class="product">iPad</span> </td>
                                    <td><span class="count">250</span></td>
                                    <td><span class="count">05/05/2022</span></td>
                                    <td>
                                        <span class="badge badge-complete">HAHFKGFK2345HKFKLGFLK</span>
                                    </td>
                                    <td><span class="count">0</span></td>
                                    <td>
                                        <span class="badge badge-complete">Complete</span>
                                    </td>
                                    <td>
                                        <a href="planes" class="badge badge-complete"> <i class="fa fa-pencil"></i></a>
                                        <a href="planes" class="badge badge-pending"> <i class="fa fa-times"></i></a>
                                    </td>
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
                                    <td> <span class="product">SSD</span> </td>
                                    <td><span class="count">250</span></td>
                                    <td><span class="count">05/05/2022</span></td>
                                    <td>
                                        <span class="badge badge-complete">HAHFKGFK2345HKFKLGFLK</span>
                                    </td>
                                    <td><span class="count">0</span></td>
                                    <td>
                                        <span class="badge badge-complete">Complete</span>
                                    </td>
                                    <td>
                                        <a href="planes" class="badge badge-complete"> <i class="fa fa-pencil"></i></a>
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
                                    <td> <span class="product">Magic Mouse</span> </td>
                                    <td><span class="count">250</span></td>
                                    <td><span class="count">05/05/2022</span></td>
                                    <td>
                                        <span class="badge badge-complete">HAHFKGFK2345HKFKLGFLK</span>
                                    </td>
                                    <td><span class="count">0</span></td>
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
</div><!-- .content -->
    <div class="clearfix"></div>
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