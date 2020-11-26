<div class="table-responsive">
  <table>
  <!-- Cabecera de la tabla-->
  <thead>
    <tr>
      <th>id</th>
      <th>titulo</th>
      <th>mensaje</th>
      <th>fecha inicio</th>
      <th>fecha fin</th>
      
    </tr>
  </thead>


  <!--cuerpo de la tabla-->
  <tbody>
    
    <?php foreach ($this->foro->ForoSelect() as $filas): ?>
      <?php $grupal="'".$filas->foro_id."','".$filas->foro_titulo."','".$filas->foro_mensaje."','".$filas->foro_fecha_inicio."','".$filas->foro_fecha_fin."'" ?>

      <tr>
        <th><?php echo $filas->foro_id; ?> </th>
        <th><?php echo $filas->foro_titulo; ?> </th>
        <th><?php echo $filas->foro_mensaje; ?> </th>
        <th><?php echo $filas->foro_fecha_inicio; ?> </th>
        <th><?php echo $filas->foro_fecha_fin; ?> </th>
        
        <th> <button onclick="Participar();"> Participar </button></th>
        <th> <button onclick="BorrarForo(<?php echo $grupal;?>);"> Eliminar </button></th>  
        <th> <button onclick="EditarAntes(<?php echo $grupal;?>);"> Editar </button></th>    
      </tr>
     <?php endforeach; ?>
  </tbody>
  <!-- pie de la tabla-->
  <tfoot>
  </tfoot>
  </table>
</div>