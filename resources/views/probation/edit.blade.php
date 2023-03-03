<x-app-layout>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title">Edit Probation Status</h4>
    
        
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
    
        <div class="modal-content" style="min-width: 400px">
            <form method="POST" action="{{ route('probation.status.update', $probation) }}">
                @csrf
                @method('PUT')
                <div class="modal-header header-title">
                    <h5 class="modal-title mt-0" id="editProbation">Edit Probation Status</h5>
                </div>
                <div class="modal-body">
                   <div class="card">
                    <div class="mb-3">
                        <label for="name" class="form-label">Probation Name</label>
                        <input value="{{ $probation->name }}"
                            type="text"
                            class="form-control"
                            name="name"
                            placeholder="Name" required>
                    </div>
                   </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('probation.status.index') }}" class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-close"></i>Close</a>
                    <button type="submit" class="btn btn-sm btn-outline-primary"><i class="mdi mdi-checkbox-marked-circle-outline"></i>Update Probation Status</button>
                </div>
            </form>
        </div>
    
        </div>
    </div>
</div>
</div>
</div>

</x-app-layout>    