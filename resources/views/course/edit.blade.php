<x-app-layout>
 
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title">Courses</h4>

        
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">

        <div class="card-title">
            Edit course here.
        </div>

        <form method="POST" action="{{ route('course.update', $course) }}">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">

                        <div class="modal-body">
                           <div class="card">
                            <div class="mb-3">
                                <label for="name" class="form-label">Course Name</label>
                                <input value="{{ old('name', $course->name) }}"
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    placeholder="Name" required>
                            </div>

                            <div class="mb-3">
                                <label for="created_at" class="form-label">Created At</label>
                                <input value="{{ old('created_at', $course->created_at) }}"
                                    type="datetime-local"
                                    class="form-control"
                                    name="created_at"
                                    placeholder="Created At" required>
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
