
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
    
    <?php foreach ($this->foro->Select() as $filas): ?>
      <?php $grupal="'".$filas->for_id."','".$filas->for_titulo."','".$filas->for_fchfin."','".$filas->for_fchini."','".$filas->for_descrp."'" ?>

      <tr>
        <th><?php echo $filas->for_id; ?> </th>
        <th><?php echo $filas->for_titulo; ?> </th>
        <th><?php echo $filas->for_descrp; ?> </th>
        <th><?php echo $filas->for_fchini; ?> </th>
        <th><?php echo $filas->for_fchfin; ?> </th>
        
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
