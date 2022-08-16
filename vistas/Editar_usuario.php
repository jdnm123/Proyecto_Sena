<?php
                  include "Nav.php";
                ?>





<section class="container-vista">


    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">N° Documento</label>
            <input type="text" class="form-control" id="validationTooltip01" required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Nombre completo</label>
            <input type="text" class="form-control" id="validationTooltip02" required>
            
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltipUsername" class="form-label">Correo</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="validationTooltipUsername"
                    aria-describedby="validationTooltipUsernamePrepend" required>
                
            </div>
        </div>
        <div class="col-md-3 position-relative">
            <label for="validationTooltip05" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="inputPassword">

        </div>
        <div class="col-md-3 position-relative">
            <label for="validationTooltip04" class="form-label">Rol</label>
            <select class="form-select" id="validationTooltip04" required>
                <option value="rol">Administrador</option>
                <option value="rol">Usuario_Vendedor</option>
            </select>
            
        </div>
        <div class="col-md-3 position-relative">
            <label for="validationTooltip04" class="form-label">Empresa</label>
            <select class="form-select" id="validationTooltip04" required>
                <option value="rol">Natutivo Bogotá</option>
                <option value="rol">Natutivo Cali</option>
            </select>
            

        </div>

        <div class="col-md-3 position-relative">
            <label for="validationTooltip04" class="form-label">Estado</label>
            <select class="form-select" id="validationTooltip04" required>
                <option value="Estado">Activo</option>
                <option value="Estado">Inactivo</option>
            </select>
            
        </div>


        <div class="col-12" style="margin: auto; width: auto;">
            <button class="btn btn-outline-primary mt-3 " type="submit">Editar Usuario</button>
        </div>
    </form>

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