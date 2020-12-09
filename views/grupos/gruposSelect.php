
<div class="row row-cols-1 row-cols-md-3">

<?php $_SESSION['slidebar']=$_REQUEST['slidebar'];?>

    <?php 
    
      if($_SESSION['SRol']!=1){
        foreach ( $this->grupos->Select($_SESSION['SIdu'],$idbuscar) as $filas ): 
        
        
      


      ?>


      <form method="POST" action="main.php?ctrl=noticia">

      <div class="col mb-4 card-deck">  
      
        <div class="card bg-light mb-3 ">

          <div class="card-header font-weight-bold">
            <div class="float-left noti-tittle" style="font-size: 25px;">
             <?php echo $filas->fic_codigo;?>
            </div>            
            <div class="float-right">
              <a  name="imagenPost"><img src="../assets/img/logosena.svg" width="40" height="40"></a>
            </div>
          </div>

          <div class="card-body">
            <h6 class="card-title font-weight-bold">Programa: </h6>
            <p class="card-text"><?php echo $filas->pfo_nompro;?></p>
            <h6 class="card-title font-weight-bold">Tipo: </h6>
            <p class="card-text"><?php echo $filas->tpr_nombre;?></p>
          </div>

          <div class="card-footer">
              <input type="text" name="fichapuntero" id="fichapuntero" value="<?php echo $filas->fic_codigo; ?>" hidden> 
              <input type="text" name="slidebar" id="slidebar" value="1" hidden>
              <button class="btn-rounded btn float-right" type="submit" >Entrar</button>
            
            </div>

        </div>
      </div>

      </form>

    <?php 
    
    endforeach; } 
    else{
      foreach ( $this->grupos->SelectAdmin($idbuscar) as $filas ): 
      
      
    


    ?>


    <form method="POST" action="main.php?ctrl=noticia">

    <div class="col mb-4 card-deck">  
    
      <div class="card bg-light mb-3 ">

        <div class="card-header font-weight-bold">
          <div class="float-left noti-tittle" style="font-size: 25px;">
           <?php echo $filas->fic_codigo;?>
          </div>            
          <div class="float-right">
            <a  name="imagenPost"><img src="../assets/img/logosena.svg" width="40" height="40"></a>
          </div>
        </div>

        <div class="card-body">
          <h6 class="card-title font-weight-bold">Programa: </h6>
          <p class="card-text"><?php echo $filas->pfo_nompro;?></p>
          <h6 class="card-title font-weight-bold">Tipo: </h6>
          <p class="card-text"><?php echo $filas->tpr_nombre;?></p>
        </div>

        <div class="card-footer">
            <input type="text" name="fichapuntero" id="fichapuntero" value="<?php echo $filas->fic_codigo; ?>" hidden> 
            <input type="text" name="slidebar" id="slidebar" value="1" hidden>
            <button class="btn-rounded btn float-right" type="submit" >Entrar</button>
          
          </div>

      </div>
    </div>

    </form>

  <?php 
  
  endforeach; }?>


    
  


