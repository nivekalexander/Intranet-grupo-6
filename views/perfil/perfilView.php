<script src="../assets/js/md5/core.js"></script>
<script src="../assets/js/md5/md5.js"></script>
<script src="../assets/js/scripts.perfil.js"></script>
<div class="container espaciado">
    <a class="float-right btn-rounded btn" <?php echo $_SESSION['SRol'] !=3 ? 'href="main.php?ctrl=grupos"':'href="main.php?ctrl=noticia"'; ?>>Volver</a>
    <h3 class="noti-tittle">Perfil</h3>
    <div class="border border-secondary panel-perfil" readonly>
        <div class="panel-foto rounded-circle">
            <img class="img-profile" src="../assets/img/img-perfil/user.svg" alt="">
        </div>
        <div id="tview" class="container panel-datos rounded">
            <?php include('perfilForm.php');?>
            <?php include('perfilModal.php');?>
        </div>

        
    </div>

</div>
