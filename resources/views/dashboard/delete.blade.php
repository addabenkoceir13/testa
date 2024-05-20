<div class="modal fade" id="deleteUserModal{{ $user->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('dashboard.user.delete') }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" id="id" name="id" class="form-control" value="{{ $user->id }}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">User Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete this user {{ $user->name }}?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary"
                        data-bs-dismiss="modal">close</button>
                    <button type="submit" class="btn btn-danger">delete</button>
                </div>
            </div>
        </form>
    </div>
</div>
