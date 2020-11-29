<div class="container">

    <form >

        <?php foreach ( $this->fases->Select() as $filas ): ?>

        <div class="form-group">
        <label for="nombre"></label>
        </div>

        <?php endforeach; ?>

    </form>

</div>