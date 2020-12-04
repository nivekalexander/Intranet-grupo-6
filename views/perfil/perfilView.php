<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/core.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/md5.js"></script>
<script src="../assets/js/scripts.perfil.js"></script>
<div class="container espaciado">
    <h3 class="noti-tittle">Perfil</h3>
    <div class="border border-secondary panel-perfil" readonly>
        <div class="panel-foto rounded-circle">
            <img class="img-profile" src="https://www.flaticon.es/svg/static/icons/svg/599/599305.svg" alt="">
        </div>
        <div id="tview" class="container panel-datos rounded">
            <?php include('perfilForm.php');?>
            <?php include('perfilModal.php');?>
        </div>

        
    </div>

</div>
