
  <!-- Modal -->
  <div class="modal fade" id="edit{{ $cliente->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">editar cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('home.update',$cliente->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input
                type="text"
                class="form-control"
                name="nombre"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
          </div>

          <div class="mb-3">
            <label for="" class="form-label">telefono</label>
            <input
                type="text"
                class="form-control"
                name="telefono"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
          </div>

          <div class="mb-3">
            <label for="" class="form-label">correo</label>
            <input
                type="text"
                class="form-control"
                name="correo"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>
