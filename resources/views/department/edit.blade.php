<x-app-layout>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title">Edit Department</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <form method="POST" action="{{ route('department.update', $department->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="card">
                            <div class="mb-3">
                                <label for="name" class="form-label">Department Name</label>
                                <input value="{{ $department->name }}"
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    placeholder="Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('department.index') }}" class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-close"></i>Cancel</a>
                        <button type="submit" class="btn btn-sm btn-outline-primary"><i class="mdi mdi-checkbox-marked-circle-outline"></i>Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
