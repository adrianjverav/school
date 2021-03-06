<!-- Modal -->
<div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmación de borrado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <strong>Aguarda!</strong> ¿Estás seguro de borrar al {{ ($user->role == 'teacher') ? 'profesor' : 'estudiante'}} {{ $user->name . ' ' . $user->surname }}?
                </div>
            </div>
            <div class="modal-footer">
                <form action="{{ route('users.destroy', ['user' => $user]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
                        Cancelar
                    </button>
                    <button type="submit" class="btn btn-danger btn-sm">
                        Eliminar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>