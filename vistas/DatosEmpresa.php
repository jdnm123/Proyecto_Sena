<?php
                  include "Nav.php";
                ?>





<section class="container-vista">



    <h2 style="margin-bottom: 30px">Datos empresa</h2>
    <div class="container" id="container-empresa">
        <div class="row  py-4">

            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">

                <img src="../img/img-sistema/logo principal.png" alt="logo empresa">
                <h3>Logo</h3>
                <input class="form-control my-3" id="formFileLg" type="file">


            </div>

            <div class="col-sm-12 col-md-8 col-lg-4 col-xl-4 mx-5">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre de la empresa</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Sucursal </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">NIT</label>
                        <input type="number" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Direccion </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>

                    <button class="btn btn-outline-primary mt-3 " type="submit">Guardar Cambio</button>
                    <button class="btn btn-outline-warning mt-3 " type="submit">Cancelar</button>
                </form>

            </div>
        </div>

    </div>



    <div class="row m-1">

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