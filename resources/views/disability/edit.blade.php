<x-app-layout>
 
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title">Disability Status</h4>

        
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">

      

                    <form method="PUT" action="{{ route('disability.status.update', $disabilityStatus) }}">
                    @method('patch')
                    @csrf
                <div style="min-width: 400px">
                    <div class="header header-title">
                        <h5 class="modal-title mt-0" id="addDisability">Edit Disability Status</h5>

                    </div>
                    <div class="modal-body">
                       <div class="card">
                        <div class="mb-3">
                            <label for="name" class="form-label">Disability Status Name</label>
                            <input value="{{ old('name') }}"
                                type="text"
                                class="form-control"
                                name="name"
                                placeholder="Name" required>
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
        </div>
        


    </div>
    </div>
</div>
    </div>
    
      </div>
</x-app-layout>


   


