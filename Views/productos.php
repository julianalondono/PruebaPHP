<h1 class="page-header">Prueba KCRM</h1>
 
 
    <a class="btn btn-primary pull-right" href="?c=cliente&a=Crud">Agregar</a>
<br><br><br>
 
<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px;background-color: #5DACCD; color:#fff">Id</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Nombre</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Referencia</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Precio</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Peso</th>            
            <th style="width:120px; background-color: #5DACCD; color:#fff">Categoria</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Stock</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Fecha Creacion</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Fecha Ultima Venta</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->modelo->ListaProductos() as $p): ?>
        <tr>
         <td><?php echo $p->id; ?></td>
            <td><?php echo $p->nombre; ?></td>
            <td><?php echo $p->referencia; ?></td>
            <td><?php echo $p->precio; ?></td>
            <td><?php echo $p->peso; ?></td>
            <td><?php echo $p->categoria; ?></td>
            <td><?php echo $p->stock; ?></td>
            <td><?php echo $p->fechacreacion; ?></td>
            <td><?php echo $p->fechaultimaventa; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=cliente&a=Crud&id=<?php echo $p->id; ?>">Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=cliente&a=Eliminar&id=<?php echo $p->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
 
</body>

</html>