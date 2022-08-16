<?php
                  include "Nav.php";
                ?>





<section class="container-vista">




    <div class="container p-2">
        <div class="row">
            <div class="col-4">
                <h2>Detalle venta</h2>
            </div>
            <div class="col-8">
                <form class="d-flex">

                    <input class="input-ventas" type="text" aria-label="First name" class="form-control"
                        placeholder="N° de Factura">
                    <input class="input-ventas" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                    <img class="icon-sidebar" src="../img/img-sistema/limpiar.png" alt="icon-limpiar" loading="lazy"  />
                    <button class="btn btn-outline-danger" type="reset">Limpiar</button>
                </form>

            </div>
        </div>

    </div>

    <div class="container-reg-inf">
       
        <div class="row">
            <div class="col" style=" border: solid #004243;margin:10px">
                <form>
                    
                        <legend>Información de compra</legend>
                  

                    <div class="input-group container-input-ventas">

                        <input class="input-ventas-productos" type="text" aria-label="First name" class="form-control"
                            placeholder="Fecha">
                        <input class="input-ventas-productos" type="text" aria-label="Last name" class="form-control"
                            placeholder="Tipo Doc">
                        <input class="input-ventas-productos" type="text" aria-label="Last name" class="form-control"
                            placeholder="Usuario">                    

                    </div>
 
                </form>
            </div>


        </div>
         <div class="row">
            <div class="col" style=" border: solid #004243;margin:10px">

                <form>
                    <fieldset disabled >
                        <legend>Información del cliente</legend>
                    </fieldset>


                      <div class="input-group container-input-ventas">

                        <input class="input-ventas-productos" type="text" aria-label="First name" class="form-control"
                            placeholder="N° de documento">
                        <input class="input-ventas-productos" type="text" aria-label="Last name" class="form-control"
                            placeholder="Nombre cliente">
                        <input class="input-ventas-productos" type="text" aria-label="Last name" class="form-control"
                            placeholder="Telefono cliente">                    

                    </div>
                   
                </form>
            </div>


        </div>

    </div>



     <div class="row m-1">
            <div class="col-sm-10 container-info-venta">
                <table class="table align-middle mb-0 bg-white ">
                    <thead class="bg-light">
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantida</th>
                            <th>iva</th>
                            <th>sub total</th>
                        </tr>
                    </thead>



                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="" alt=""
                                        style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1"></p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>


                            </td>
                            <td></td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="..//img/img-sistema/.jpg" class="rounded-circle" alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1"></p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../img/img-sistema/.jpg" class="rounded-circle" alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1"></p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>

                            </td>
                            <td></td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="" alt=""
                                        style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1"></p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                            <td></td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="..//img/img-sistema/.jpg" class="rounded-circle" alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1"></p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../img/img-sistema/.jpg" class="rounded-circle" alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1"></p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                            <td></td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="" alt=""
                                        style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1"></p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                            <td></td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="..//img/img-sistema/.jpg" class="rounded-circle" alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1"></p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../img/img-sistema/.jpg" class="rounded-circle" alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1"></p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                            <td></td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="" alt=""
                                        style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1"></p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                            <td></td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="..//img/img-sistema/.jpg" class="rounded-circle" alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1"></p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../img/img-sistema/.jpg" class="rounded-circle" alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1"></p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                            <td></td>
                            <td>
                                <p class="fw-normal mb-1"></p>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="col-sm-2">
                <label style="margin-top: 90%" for="">Total a pagar</label>
                <input type="text" name="total_a_pagar"><br>

                <label for="">Paga con</label><br>
                <input type="text" name="Paga_con"><br>

                <label for="">Cambio</label><br>
                <input type="text" name="cambio">

                <input class="btn btn-primary m-2" type="submit" value="Descargar factura">
            </div>
        </div>


</section>



<!-- cierre del nav-->

</div>
</div>
</div>

</div>
</div>
</div>


<!-- contenido de la pagina-->
<div class="container-fluid">



    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
    </body>

    </html>