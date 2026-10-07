<?php require __DIR__ . '/../../layouts/header.php'; ?>

<div class="card p-3">
    <h3>Registrar nuevo producto</h3>
    <form action="" method="post">
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="categoria_id">Categoría :</label>
                <select name="  " id="">
                    

                </select>
            </div>
            <div class="col-md-4 form-group">
                <label for="codigo_sku">Código :</label>
                <input type="text" class="form-control" name="codigo_sku" id="codigo_sku" maxlength="50" required>
            </div>
            <div class="col-md-4 form-group">
                <label for="nombre">Nombre :</label>
                <input type="text" class="form-control" name="nombre" id="nombre"maxlength="150" required>
            </div>
            <div class="col-md-4 form-group">
                <label for="descripcion">Descripción :</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" maxlength="250" required>
            </div>
            <div class="col-md-4 form-group">
                <label for="precio_venta">Precio de venta :</label>
                <input type="text" class="form-control" name="precio_venta" id="precio_venta" maxlength="10.2" required>
            </div>
            <div class="col-md-4 form-group">
                <label for="stock_actual">Stock actual :</label>
                <input type="text" class="form-control" name="stock_actual" id="stock_actual" maxlength="11" required>

            
                
        </div>

    </form>
</div>



<?php require __DIR__ . '/../../layouts/footer.php'; ?>