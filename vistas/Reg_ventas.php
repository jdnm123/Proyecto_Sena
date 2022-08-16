
  <?php
                  include "Nav.php";
                ?>



    <section class="container-vista">


        <h2>Registrar venta</h2>


        <div class="container-reg-inf">
            <div class="row">
                
                <div class="col-6" style=" border: solid #004243;margin:10px; width: 35%;">
                    <form>
                   
                            <legend>Información de venta</legend>
                        
                        <div class="input-group container-input-ventas" >

                            <input class="input-ventas" type="text" aria-label="First name" class="form-control"
                                placeholder="Fecha de venta">
                            <input class="input-ventas" type="text" aria-label="Last name" class="form-control"
                                placeholder="N° factura">

                        </div>
                    </form>
                    
                </div>

                <div class="col" style=" border: solid #004243;margin:10px">
                    <form>
                      
                            <legend>Información del cliente</legend>
                        
                        <div class="input-group container-input-ventas">

                            <input class="input-ventas" type="text" aria-label="Last name" class="form-control"
                                placeholder="Numero de documento" style=" border: solid #004243;margin:10px; width: 30%;" >

                            <input class="input-ventas" type="text" aria-label="First name" class="form-control"
                                placeholder="Nombre cliente" style=" border: solid #004243;margin:10px; width: 30%;">
                          <input class="input-ventas" type="text" aria-label="First name" class="form-control"
                                placeholder="Celular cliente" style=" border: solid #004243;margin:10px; width: 30%;">

                        </div>
                     
                    </form>
                </div>

            </div>
            <div class="row">
                <div class="col" style=" border: solid #004243;margin:10px">
                    <form>
                        
                            <legend>Información del producto</legend>
                        

                        <div class="input-group container-input-ventas">

                            <input class="input-ventas-productos" type="text" aria-label="First name"
                                class="form-control" placeholder="Cod.producto">

                            <input class="input-ventas-productos" type="text" aria-label="Last name"
                                class="form-control" placeholder="Nom.producto">

                            <input class="input-ventas-productos" type="text" aria-label="Last name"
                                class="form-control" placeholder="Val.producto">

                            <input class="input-ventas-productos" type="number" aria-label="Last name"
                                class="form-control" placeholder="Cantidad">

                            <input class="btn btn-outline-primary m-1" type="submit" value="Agregar">
                            <input class="btn btn-outline-danger m-1" type="submit" value="Eliminar producto">
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
                                    <img src="../img/img-sistema/leche colanta.jpg" alt=""
                                        style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Leche Entera colanta</p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">$3.200</p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1">01</p>


                            </td>
                            <td>19%</td>
                            <td>
                                <p class="fw-normal mb-1">$2.592</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="..//img/img-sistema/jabon rey.jpg" class="rounded-circle" alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Jabon rey</p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">$1.200</p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1">01</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">19%</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">$1.092</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../img/img-sistema/arroz roa.jpg" class="rounded-circle" alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Arroz roa</p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">$1300</p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1">01</p>

                            </td>
                            <td>19%</td>
                            <td>
                                <p class="fw-normal mb-1">$1.092</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../img/img-sistema/leche colanta.jpg" alt=""
                                        style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Leche Entera colanta</p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">$3.200</p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1">01</p>
                            </td>
                            <td>19%</td>
                            <td>
                                <p class="fw-normal mb-1">$2.592</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="..//img/img-sistema/jabon rey.jpg" class="rounded-circle" alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Jabon rey</p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">$1.200</p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1">$1.200</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">19%</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">$1.092</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../img/img-sistema/arroz roa.jpg" class="rounded-circle" alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Arroz roa</p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">$1300</p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1">01</p>
                            </td>
                            <td>19%</td>
                            <td>
                                <p class="fw-normal mb-1">$1.092</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../img/img-sistema/leche colanta.jpg" alt=""
                                        style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Leche Entera colanta</p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">$3.200</p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1">01</p>
                            </td>
                            <td>19%</td>
                            <td>
                                <p class="fw-normal mb-1">$2.592</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="..//img/img-sistema/jabon rey.jpg" class="rounded-circle" alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Jabon rey</p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">$1.200</p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1">$1.200</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">19%</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">$1.092</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../img/img-sistema/arroz roa.jpg" class="rounded-circle" alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Arroz roa</p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">$1300</p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1">01</p>
                            </td>
                            <td>19%</td>
                            <td>
                                <p class="fw-normal mb-1">$1.092</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../img/img-sistema/leche colanta.jpg" alt=""
                                        style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Leche Entera colanta</p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">$3.200</p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1">01</p>
                            </td>
                            <td>19%</td>
                            <td>
                                <p class="fw-normal mb-1">$2.592</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="..//img/img-sistema/jabon rey.jpg" class="rounded-circle" alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Jabon rey</p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">$1.200</p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1">$1.200</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">19%</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">$1.092</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../img/img-sistema/arroz roa.jpg" class="rounded-circle" alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Arroz roa</p>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">$1300</p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1">01</p>
                            </td>
                            <td>19%</td>
                            <td>
                                <p class="fw-normal mb-1">$1.092</p>
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

                <input class="btn btn-success m-2" type="submit" value="Crear venta">
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