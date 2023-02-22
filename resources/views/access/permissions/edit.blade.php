<form method="POST" action="{{ route('access.permissions.update', $permission->id) }}" id="edit-permission-form">
    @method('patch')
    @csrf
    <div class="modal-content p-3" style="min-width: 400px">
        <div class="modal-header">
            <h5 class="modal-title align-self-center">Edit Permission</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input value="{{ $permission->name }}"
            type="text"
            class="form-control"
            name="name"
            id="name"
            placeholder="Name" required>

        @if ($errors->has('name'))
            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal"><i class="mdi mdi-close"></i>Close</button>
        <button type="submit" class="btn btn-sm btn-outline-primary"><i class="mdi mdi-checkbox-marked-circle-outline"></i>Save Changes</button>
     </div>

    </div>
</form>
