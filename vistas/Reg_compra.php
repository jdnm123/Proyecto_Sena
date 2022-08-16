<?php
                  include "Nav.php";
                ?>



<section class="container-vista">


    <h2>Registrar compra</h2>


    <div class="container-reg-inf">
        <form action="">
            <div class="row m-1">

                <div class="col-sm-12 col-md-4 " style=" border: solid #004243;">


                    <legend>Información de compra</legend>

                    <div class="input-group container-input-ventas">


                        <input id="startDate" class="form-control input-ventas" type="date" />
                        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                        <select class="form-select input-ventas" id="autoSizingSelect">
                            <option selected>Tipo documento</option>
                            <option value="1">Factura de compra</option>
                            <option value="2">Coticación</option>

                        </select>
                    </div>


                </div>

                <div class="col" style=" border: solid #004243;margin-left: 5px;">


                    <legend>Información del proveedor</legend>
                    <div class="input-group container-input-ventas">
                        <div class="row g-3">
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-ventas" placeholder="Numero de doc"
                                    aria-label="City">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-ventas" placeholder="Nombre proveedor"
                                    aria-label="State">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-ventas" placeholder="Celular proveedor"
                                    aria-label="Zip">
                            </div>
                        </div>

                    </div>



                </div>

            </div>
            <div class="row g-7 m-1" style=" border: solid #004243   ">


                <legend>Información del producto</legend>
                <div class="col-sm-3 my-1">
                    <input class="form-control " id="formFileLg" type="file">
                </div>
                <div class="col-sm-2">
                    <input class="form-control " type="text" aria-label="Last name" class="form-control"
                        placeholder="Nom.producto">
                </div>
                <div class="col-sm-2">
                    <input class="form-control " type="text" aria-label="Last name" class="form-control"
                        placeholder="Valor compra">
                </div>
                <div class="col-sm-2">
                    <input class="form-control " type="text" aria-label="Last name" class="form-control"
                        placeholder="Valor venta">
                </div>
                <div class="col-sm-2">
                    <input class="form-control " type="text" aria-label="Last name" class="form-control"
                        placeholder="Iva">
                </div>
                <div class="col-sm-2 my-1">
                    <input class="form-control " type="number" aria-label="Last name" class="form-control"
                        placeholder="Cantidad">
                </div>
                <div class="col-sm-2 my-1">
                    <input class="btn btn-primary " type="submit" value="Agregar producto">
                </div>
                <div class="col-sm-2 my-1 ">
                    <input class="btn btn-danger " type="submit" value="Eliminar ultimo">
                </div>



            </div>
        </form>
    </div>





    <div class="row m-1">
        <div class="col-sm-10 container-info-venta">
            <table class="table align-middle mb-0 bg-white ">
                <thead class="bg-light">
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Iva</th>
                        <th>Valor de compra</th>
                        <th>Valor de venta</th>

                        <th>Cantidad</th>
                    </tr>
                </thead>



                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../img/img-sistema/leche colanta.jpg" alt="" style="width: 45px; height: 45px"
                                    class="rounded-circle" />

                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">Leche</p>

                        </td>
                        <td>19%</td>
                        <td>
                            <p class="fw-normal mb-1">$2.700</p>

                        </td>
                        <td>
                            <p class="fw-normal mb-1">$3.200</p>


                        </td>

                        <td>
                            <p class="fw-normal mb-1">10</p>
                        </td>
                    </tr>



                </tbody>

            </table>
        </div>
        <div class="col-sm-2">
            <label class="input-ventas m-1 " for="">Total a factura</label>
            <input class="input-ventas m-1 " type="text" name="total_a_pagar"><br>

            <select class="form-select m-1 " id="autoSizingSelect">
                <option>Estado del pago</option>
                <option value="1">Pagado</option>
                <option value="2">Por pagar</option>

            </select>

            <input class="btn btn-success m-2" type="submit" value="Crear Compra">
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