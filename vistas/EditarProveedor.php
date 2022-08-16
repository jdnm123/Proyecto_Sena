<?php
                  include "Nav.php";
                ?>





<section class="container-vista">
<h3>Editar proveedor</h3>



<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 container-form-add">
<form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">N° Documento</label>
            <input type="text" class="form-control" id="validationTooltip01" required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Razón social</label>
            <input type="text" class="form-control" id="validationTooltip02" required>
            
        </div>
           <div class="col-md-4 position-relative">
            <label for="validationTooltip05" class="form-label">Telefono</label>
            <input type="nunber" class="form-control" >

        </div>
        <div class="col-md-8 position-relative">
            <label for="validationTooltipUsername" class="form-label">Correo</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="validationTooltipUsername"
                    aria-describedby="validationTooltipUsernamePrepend" required>
                
            </div>
        </div>
     
       
     
        <div class="col-md-4 position-relative">
            <label for="validationTooltip04" class="form-label">Estado</label>
            <select class="form-select" id="validationTooltip04" required>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
            
        </div>


        <div class="col-12" style="margin: auto; width: auto;">
            <button class="btn btn-outline-primary mt-3 " type="submit">Guardar cambios</button>
             <button class="btn btn-outline-warning mt-3 " type="submit">Cancelar</button>
        </div>
    </form>

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