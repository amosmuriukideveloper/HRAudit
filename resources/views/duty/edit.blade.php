<x-app-layout>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title">Edit Duty</h4>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <div class="card-title">
                            Edit your duty details below.
                        </div>

                        <form method="POST" action="{{ route('duty.update', $duty->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="card">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Duty Name</label>
                                        <input value="{{ $duty->name }}"
                                               type="text"
                                               class="form-control"
                                               name="name"
                                               placeholder="Name" required>
                                    </div>

                                </div>
                            </div>

                            <div class="modal-footer">
                                <a href="{{ route('duty.index') }}" class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-close"></i>Cancel</a>
                                <button type="submit" class="btn btn-sm btn-outline-primary"><i class="mdi mdi-content-save-outline"></i>Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
