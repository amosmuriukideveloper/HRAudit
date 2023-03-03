<x-app-layout>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title">Employment Term</h4>

        
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">

        <div class="card-title">
            Edit employment terms here.
        </div>

        <form method="POST" action="{{ route('employment.term.update', $employmentTerm->id) }}">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">

                        <div class="modal-body">
                           <div class="card">
                            <div class="mb-3">
                                <label for="name" class="form-label">Employment Term Name</label>
                                <input value="{{ old('name', $employmentTerm->name) }}"
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    placeholder="Name" required>
                            </div>

                                                    
                           </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal"><i class="mdi mdi-close"></i>Close</button>
                            <button type="submit" class="btn btn-sm btn-outline-primary"><i class="mdi mdi-checkbox-marked-circle-outline"></i>Update Course</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        </div>
    </div>
</div>
    </div>
    
      </div>
    
  
   
</x-app-layout>    