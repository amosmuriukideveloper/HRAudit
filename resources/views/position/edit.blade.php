<x-app-layout>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title">Edit Position</h4>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <div class="card-title">
                            Update position information here.
                        </div>

                        <div class="modal-content" style="min-width: 400px">
                            <form method="POST" action="{{ route('position.update', $position->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="card">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Position Name</label>
                                            <input value="{{ $position->name }}"
                                                type="text"
                                                class="form-control"
                                                name="name"
                                                placeholder="Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="{{ route('position.index') }}" class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-close"></i>Cancel</a>
                                    <button type="submit" class="btn btn-sm btn-outline-primary"><i class="mdi mdi-checkbox-marked-circle-outline"></i>Update Position</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
