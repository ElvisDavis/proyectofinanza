<?php
ob_start();
//session_start();
if(!isset($_SESSION["nombres"]))
{
    header("Location: ../index.php");
}
else{
    if($_SESSION['Usuario']==1){

?>
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-money"></i><strong class="card-title pl-2">Detalles de Retiro</strong>
                        </div>
                        <div class="card-body">
                            <div>

                                <strong class="card-title">Limite de Retiro <small><span class="badge badge-success float-right mt-1">10-90 USDT</span></small></strong>
                            </div>
                            <div>
                                <strong class="card-title">Cargo <small><span class="badge badge-success float-right mt-1">2 + 5%</span></small></strong>
                            </div>
                            <div>
                                <strong class="card-title">Total Intereses <small><span class="badge badge-success float-right mt-1">00</span></small></strong>
                            </div>
                            <hr>
                            <div class="clearfix"></div>
                            <!-- Button trigger modal -->
                            <button type="submit" class="btn btn-primary btn-lg btn-block"" data-toggle="modal"
                                data-target="#smallmodal">
                                Comprar
                            </button>
                            <div class="clearfix"></div>
                            <!-- modal  -->
                            <div class="content">
                                <div class="animated">
                                    <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog"
                                        aria-labelledby="smallmodalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="smallmodalLabel">Plan Inicial</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- form -->
                                                    <form>
                                                        <div class="input-group mb-4">
                                                            <label class="input-group-text" for="inputGroupSelect01">Opciones</label>
                                                            <select class="form-select" id="plan00">
                                                            <option selected>Seleccione...</option>
                                                            <option value="1">Déposito</option>
                                                            <option value="2">Intereses</option hidden>
                                                            </select>
                                                        </div>
                                                        <div class="input-group mb-4">
                                                            <span class="input-group-text">$</span>
                                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="precio00">
                                                            <span class="input-group-text">.00</span>
                                                        </div>
                                                        
                                                        
                                                        <!--  -->
                                                        <div class="input-group mb-4">
                                                            <span class="input-group-text">ID Wallet</span>
                                                            <input type="text" class="form-control"
                                                                id="wallet">
                                                        </div>
                                                        
                                                        <!--  -->
                                                    </form>
                                                    <!-- end form -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary" id="confirma_plan00">Confirmar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end modal -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end retiro -->
            
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-mb-6">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Hstorial de Retiros</strong>
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
                                    <th>Tiempo</th>
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
                                    <td>
                                        <span class="badge badge-complete">Complete</span>
                                    </td>
                                    <td>
                                        <a href="transaccion" class="badge badge-complete" > <i class="fa  fa-money "></i>Retirar</a>
                                    </td>
                                    <td>
                                        <a href="planes" class="badge badge-pending"> <i class="fa fa-ticket"></i>Reinvertir</a>
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
                                    <td> <span class="product">iPad</span> </td>
                                    <td><span class="count">250</span></td>
                                    <td>
                                        <span class="badge badge-complete">Complete</span>
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
                                    <td> <span class="product">SSD</span> </td>
                                    <td><span class="count">250</span></td>
                                    <td>
                                        <span class="badge badge-complete">Complete</span>
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
                                    <td>
                                        <span class="badge badge-pending">Pending</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
            </div>
            <!-- end Table Interes -->
        </div>
    </div>
</div>
<!-- end content transaction -->
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