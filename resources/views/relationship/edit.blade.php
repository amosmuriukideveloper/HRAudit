<x-app-layout>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title">Edit Relationship</h4>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <div class="card-title">
                            Update relationship information here.
                        </div>

                        <div class="modal-content" style="min-width: 400px">
                            <form method="POST" action="{{ route('relationship.update', $relationship->id) }}">
                                @csrf
                                @method('PATCH')
                                <div class="modal-body">
                                    <div class="card">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Relationship Name</label>
                                            <input value="{{ $relationship->name }}"
                                                type="text"
                                                class="form-control"
                                                name="name"
                                                placeholder="Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="{{ route('relationship.index') }}" class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-close"></i>Cancel</a>
                                    <button type="submit" class="btn btn-sm btn-outline-primary"><i class="mdi mdi-checkbox-marked-circle-outline"></i>Update Relationship</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
