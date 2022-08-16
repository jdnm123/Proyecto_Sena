<?php
                  include "Nav.php";
                ?>





<section class="container-vista">

<h2>Agregar nuevo producto</h2>
    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-1 position-relative">
            <label for="validationTooltip01" class="form-label">Cod producto</label>
            <input type="text" class="form-control" id="validationTooltip01" required>
        </div>
        <div class="col-md-2 position-relative">
            <label for="validationTooltip02" class="form-label">Nombre producto</label>
            <input type="text" class="form-control" id="validationTooltip02" required>
            
        </div>
  
          <div class="col-md-2 position-relative">
            <label for="validationTooltip04" class="form-label">Categoria</label>
            <select class="form-select" id="validationTooltip04" required>
                <option value="1">Granos</option>
                <option value="2">Lacteos</option>
                   <option value="2">Golosinas</option>
            </select>
            
        </div>
          <div class="col-md-2 position-relative">
            <label for="validationTooltipUsername" class="form-label">Precio compra</label>
            <div class="input-group has-validation">
                <input type="number" class="form-control" id="validationTooltipUsername"
                    aria-describedby="validationTooltipUsernamePrepend" required>
                
            </div>
        </div>
          <div class="col-md-2 position-relative">
            <label for="validationTooltipUsername" class="form-label">Precio venta</label>
            <div class="input-group has-validation">
                <input type="number" class="form-control" id="validationTooltipUsername"
                    aria-describedby="validationTooltipUsernamePrepend" required>
                
            </div>
        </div>
          <div class="col-md-2 position-relative">
            <label for="validationTooltipUsername" class="form-label">Stock</label>
            <div class="input-group has-validation">
                <input type="number" class="form-control" id="validationTooltipUsername"
                    aria-describedby="validationTooltipUsernamePrepend" required>
                
            </div>
        </div>
        
        
      
          <div class="col-md-1 position-relative">
            <label for="validationTooltipUsername" class="form-label">Porcentaje Iva</label>
            <div class="input-group has-validation">
                <input type="number" class="form-control" id="validationTooltipUsername"
                    aria-describedby="validationTooltipUsernamePrepend" required>
                
            </div>
        </div>
        
     

        <div class="col-md-2 position-relative">
            <label for="validationTooltip04" class="form-label">Estado</label>
            <select class="form-select" id="validationTooltip04" required>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
            
        </div>
        <div class="col-md-2 position-relative">
            <label for="validationTooltip04" class="form-label">Fecha expiración</label>
          <input id="startDate" class="form-control" type="date" />
            
        </div>
      <div class="col-md-8 position-relative">
            <label for="validationTooltipUsername" class="form-label">Descripción</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="validationTooltipUsername"
                    aria-describedby="validationTooltipUsernamePrepend" required>
                
            </div>
        </div>


        <div class="col-12" style="margin: auto; width: auto;">
            <button class="btn btn-outline-primary mt-3 " type="submit">Agregar Producto</button>
            <button class="btn btn-outline-warning mt-3 " type="submit">Cancelar</button>
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