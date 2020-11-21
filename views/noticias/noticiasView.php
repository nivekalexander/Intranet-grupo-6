<style>
    .noti-tittle{
        color: #F2994B;
        font-weight: 700;
    }
   

    .btn-rounded{
        background-color: #F2994B;
        border-radius: 50rem !important;
        color : #ffffff !important;
    }

    .espaciado{
        padding: 40px;
    }

</style>


    <div class="container espaciado">
        <h3 class="noti-tittle">Noticias</h3>
        <a class="btn-rounded btn float-right" data-toggle="modal" data-target="#exampleModal">Crear noticia</a>
    </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Subir Archivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""></form>
            <div class="form-group row justify-content-center">
                <input type="file">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Subir</button>
      </div>
    </div>
  </div>
</div>