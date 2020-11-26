<?php require_once("./frames/header.php");?>
<?php require_once("./frames/navbar.php");?>
<?php require_once("./frames/slidebar.php");?>



<!-- 404 Error Text -->
<div class="container text-center" style="padding:200px;">

    <div class="error mx-auto" data-text="404">404</div>
        <p class="lead text-gray-800 mb-5">Page Not Found</p>
        <p class="text-gray-500 mb-0"><?php echo($error);?></p>
        
    </div>

</div>
<?php require_once("./frames/firtsfooter.php");?>
<?php require_once("./frames/footer.php");?>