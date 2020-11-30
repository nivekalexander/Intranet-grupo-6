<?php foreach ($this->respuesta->SelectResp($idcom) as $respuestas): ?>
    

<div class="card mb-2">
    <div class="card-header">
        <?php echo $respuestas->res_perprt; ?>
    </div>
    <div class="card-body">
        <?php echo $respuestas->res_respst; ?>
    </div>
</div>

<?php endforeach; ?>        