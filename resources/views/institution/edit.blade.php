<x-app-layout>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title">Edit Institution</h4>

    
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">

  

                <form method="PUT" action="{{ route('institutions.update', $institution) }}">
                @method('patch')
                @csrf
            <div style="min-width: 400px">
                <div class="header header-title">
                    <h5 class="modal-title mt-0" id="editInstitution">Edit Institution</h5>

                </div>
                <div class="modal-body">
                   <div class="card">
                    <div class="mb-3">
                        <label for="name" class="form-label">Institution Name</label>
                        <input value="{{ $institution->name }}"
                            type="text"
                            class="form-control"
                            name="name"
                            placeholder="Name" required>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Institution Address</label>
                        <input value="{{ $institution->address }}"
                            type="text"
                            class="form-control"
                            name="address"
                            placeholder="Address" required>
                    </div>
                    
                   </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal" ><i class="mdi mdi-close" ></i>Close</button>
                    <button type="submit" class="btn btn-sm btn-outline-primary"><i class="mdi mdi-checkbox-marked-circle-outline"></i>Save Changes</button>
                    </div>
            </div><!-- /.modal-content -->
            </form>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

 

    </div>
</div>
</div>
</x-app-layout>

