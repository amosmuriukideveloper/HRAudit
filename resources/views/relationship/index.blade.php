<x-app-layout>
 
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title">Relationship</h4>

        
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">

        <div class="card-title">
            Manage relationships here.
            <a href="{{ route('relationship.create') }}" class="btn btn-outline-primary btn-sm float-right" data-toggle="modal" data-target="#addRelationship"><i class="mdi mdi mdi-plus-circle-outline"></i>Add Relationship</a>


        </div>

        <div class="modal fade" id="addRelationship" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <form method="POST" action="{{ route('relationship.store') }}">
                    @csrf
                <div class="modal-content" style="min-width: 400px">
                    <div class="modal-header header-title">
                        <h5 class="modal-title mt-0" id="addRelationship">Add Relationship</h5>

                    </div>
                    <div class="modal-body">
                       <div class="card">
                        <div class="mb-3">
                            <label for="name" class="form-label">Relationship Name</label>
                            <input value="{{ old('name') }}"
                                type="text"
                                class="form-control"
                                name="name"
                                placeholder="Name" required>
                        </div>

                       

                        
                       </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal"><i class="mdi mdi-close"></i>Close</button>
                        <button type="submit" class="btn btn-sm btn-outline-primary"><i class="mdi mdi-checkbox-marked-circle-outline"></i>Add Relationship</button>
                        </div>
                </div><!-- /.modal-content -->
                </form>
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          
                <thead>
                <tr>
                    
                    <th scope="col">Name</th>
                    <th scope="col">Created At</th>
                  
                
                    <th scope="col"><i class="mdi mdi-view-sequential" style="font-size: 20px"></i></th>
                    <th scope="col"><i class=" mdi mdi-delete-variant" style="font-size: 20px"></i></th>

                </tr>
                </thead>
                <tbody>
                  
            @foreach ($relationships as $relationship)
            <tr>
          
                <td>{{ $relationship->name }}</td>
                <td>{{ $relationship->created_at }}</td>
                
                <td><a href="{{ route('relationship.edit', $relationship->id) }}" ><i class="mdi mdi-playlist-edit " style="font-size: 20px"></i></a></td>
                <td>
                    <form method="POST" action="{{ route('relationship.destroy', $relationship) }}">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="pt-0 btn btn-xs btn-default-outline btn-flat show_confirm" data-toggle="tooltip" title='Delete'> <i class="mdi mdi mdi-delete-circle-outline text-secondary" style="font-size: 24px">
                    </i></button>
                    </form>
                    </td>

            </tr>
           
        @endforeach
                </tbody>
            </table>
        </div>
            </div>
        </div>

        </div>
    </div>
</div>
        </div>
        


    </div>
  

   


</x-app-layout>
