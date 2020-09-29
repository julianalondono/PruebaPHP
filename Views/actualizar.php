<h1 class="page-header">
    <?php echo $producto->id != null ? $producto->nombre : 'Nuevo Registro'; ?>
</h1>
 

<form id="frm-producto" action="?p=producto&a=Guardar" method="post">

      <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $producto->nombre; ?>" class="form-control" placeholder="Ingrese nombre" required>
    </div>
    
    <div class="form-group">
        <label>Referencia</label>
        <input type="text" name="referencia" value="<?php echo $producto->referencia; ?>" class="form-control" placeholder="Ingrese referencia" required>
    </div>
    
    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="precio" value="<?php echo $producto->precio; ?>" class="form-control" placeholder="Ingrese precio" required>
    </div>
    
    <div class="form-group">
        <label>Peso</label>
        <input type="text" name="peso" value="<?php echo $producto->peso; ?>" class="form-control" placeholder="Ingrese peso" required>
    </div>
     <div class="form-group">
        <label>Categoria</label>
        <input type="text" name="categoria" value="<?php echo $producto->categoria; ?>" class="form-control" placeholder="Ingrese categoria" required>
    </div>
    <div class="form-group">
        <label>Stock</label>
        <input type="text" name="stock" value="<?php echo $producto->stock; ?>" class="form-control" placeholder="Ingrese stock" required>
    </div>
    <div class="form-group">
        <label>Fecha Creacion</label>
        <input type="text" name="fechacreacion" value="<?php echo $producto->fechacreacion; ?>" class="form-control" placeholder="Ingrese fecha creacion" required>
    </div>
    <div class="form-group">
        <label>Fecha Ultima Venta</label>
        <input type="text" name="fechaultimaventa" value="<?php echo $producto->fechaultimaventa; ?>" class="form-control" placeholder="Ingrese fecha ultima venta" required>
    </div>
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-producto").submit(function(){
            return $(this).validate();
        });
    })
</script>