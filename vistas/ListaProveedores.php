<?php
                  include "Nav.php";
                ?>





<section class="container-vista">




    <div class="container p-2">
        <div class="row">
            <div class="col-4">
                <h2>Lista de proveedores</h2>
            </div>
            <div class="col-8">
                <form class="d-flex">

                    <input class="input-ventas" type="text" aria-label="First name" class="form-control"
                        placeholder="N° Doc">
                    <input class="input-ventas" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success m-2" type="submit">Buscar</button>

                    <button class="btn btn-outline-danger m-2" type="reset">Limpiar</button>
                </form>

            </div>
        </div>

    </div>



    <div class="row m-1">
        <div class="col-sm-10 container-info-venta-list">
            <table class="table align-middle mb-0 bg-white ">
                <thead class="bg-light">
                    <tr>
                        <th>N° Documento <img src="../img/img-sistema/filtro.png" alt="icon-filtrar" loading="lazy"
                                style="width: 15px" ; /></th>
                        <th>Razón social<img src="../img/img-sistema/filtro.png" alt="icon-filtrar" loading="lazy"
                                style="width: 15px" ; /></th>
                        <th>Telefono <img src="../img/img-sistema/filtro.png" alt="icon-filtrar" loading="lazy"
                                style="width: 15px" ; /></th>
                        <th>Correo <img src="../img/img-sistema/filtro.png" alt="icon-filtrar" loading="lazy"
                                style="width: 15px" ; /></th>
                        <th>Estado<img src="../img/img-sistema/filtro.png" alt="icon-filtrar" loading="lazy"
                                style="width: 15px" ; /></th>
                        <th>Editar proveedor <img src="../img/img-sistema/filtro.png" alt="icon-filtrar" loading="lazy"
                                style="width: 15px" ; /></th>

                    </tr>
                </thead>



                <tbody>
                    <tr>

                        <td>
                            <p class="fw-normal mb-1">1246535145</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">jerson navarro</p>

                        </td>
                        <td>
                            <p class="fw-normal mb-1">31021457566</p>


                        </td>

                        <td>
                            <p class="fw-normal mb-1">jerlsd@jknfnaskd</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">activo</p>
                        </td>
                        <td>
                            <a class="btn btn-warning"
                                href="http://localhost/sena/sistema%20de%20ventas%20e%20inventario/Vistas/EditarProveedor.php">Editar</a>

                        </td>
                    </tr>













                </tbody>

            </table>
        </div>
        <!--
            <div class="col-sm-2">
                <label style="margin-top: 90%" for="">Total a pagar</label>
                <input type="text" name="total_a_pagar"><br>

                <label for="">Paga con</label><br>
                <input type="text" name="Paga_con"><br>

                <label for="">Cambio</label><br>
                <input type="text" name="cambio">

                <input class="btn btn-primary m-2" type="submit" value="Crear venta">
            </div>

             -->
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