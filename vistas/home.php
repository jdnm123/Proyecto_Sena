<?php
                  include "Nav.php";
                ?>
<section class="container-vista">
    <nav class="navbar navbar-light bg-light justify-content-between p-2 mb-2">
        <a class="navbar-brand">
            <h2>Panel de control</h2>
        </a>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Descargar reporte</button>

    </nav>

    <div class="row m-2">
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3"
                style="max-width: 18rem; min-height: 180px; min-height: 180px; max-height: 180px;">
                <div class="card-header">Producto mas vendido</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Texto de pruebas</p>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem; min-height: 180px;">
                <div class="card-header">Producto menos vendido</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Texto de pruebas</p>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem; min-height: 180px;">
                <div class="card-header">Total ventas ultimo mes</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Texto de pruebas</p>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem; min-height: 180px;">
                <div class="card-header">Producto vencidos</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Texto de pruebas</p>
                </div>
            </div>

        </div>
    </div>

    <!--gráficos-->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    gráficos 1
                </div>
                <div class="card-body">
                    <canvas class="chart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    gráficos 2
                </div>
                <div class="card-body">
                    <canvas class="chart" width="400" height="200"></canvas>
                </div>
            </div>
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
    <!--graficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
    </body>

    </html>