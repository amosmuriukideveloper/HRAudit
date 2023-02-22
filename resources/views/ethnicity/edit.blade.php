<x-app-layout>
 
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title">Edit Ethnicity</h4>
        
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <div class="modal-body">
                            <form method="POST" action="{{ route('ethnicity.update', $ethnicity->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="card">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Ethnicity Name</label>
                                        <input value="{{ $ethnicity->name }}"
                                               type="text"
                                               class="form-control"
                                               name="name"
                                               placeholder="Name"
                                               required>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <a href="{{ route('ethnicity.index') }}" class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-arrow-left"></i> Back</a>
                                    <button type="submit" class="btn btn-sm btn-outline-primary"><i class="mdi mdi-checkbox-marked-circle-outline"></i> Update Ethnicity</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
