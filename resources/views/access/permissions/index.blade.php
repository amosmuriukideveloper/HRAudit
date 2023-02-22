<x-app-layout>

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">

            <div  style="border-bottom:1px dashed #ccc; padding:10px" >
                <div class="card-title">
                    <div class="col-md-12 mt-4">
                        <div class="float-start">
                            <h4 class="text-left">Manage Permissions.</h4>
                        </div>
                        <div class="float-end">
                            <span class="float-right">
                                 <a href="#"
                                    class="btn btn-primary btn-xs float-right"
                                    data-toggle="modal"
                                    data-target="#addPermissions">
                                    <i class="mdi mdi mdi-plus-circle-outline"></i>Add permissions</a>
                            </span>

                        </div>
                     </div>
                  </div>
             </div>

            <div class="modal fade" id="addPermissions" tabindex="-1" role="dialog" aria-labelledby="addPermissions" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-scrollable" >
                    <form method="POST" action="{{ route('access.permissions.store') }}">
                        @csrf
                        <div class="modal-content" style="min-width: 400px">
                            <div class="header-title">
                                <div class="modal-title mt-0 text-center p-2"   id="addPermissions">Add Permissions</div>

                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input value="{{ old('name') }}"
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        placeholder="Name" required>

                                    @if ($errors->has('name'))
                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal"><i class="mdi mdi-close"></i>Close</button>
                                <button type="submit" class="btn btn-sm btn-outline-primary"><i class="mdi mdi-checkbox-marked-circle-outline"></i>Add Permission</button>
                                </div>
                        </div><!-- /.modal-content -->
                   </form>
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        <div class="card-body">
            <table id="dataTable"   class="table table-striped table-bordered w-100" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Guard</th>
                    <th scope="col"><i class="mdi mdi-view-sequential" style="font-size: 20px"></i></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($permissions as $permission)
                        <tr>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->guard_name }}</td>
                            <td>

                                <a class="edit-permission-button"
                                   data-toggle="modal" data-animation="bounce"
                                   data-target="#edit-permission-modal-{{$permission->id}}"
                                   data-id="{{ $permission->id }}" data-name="{{ $permission->name }}"
                                  ><i class="mdi mdi-circle-edit-outline text-secondary" style="font-size: 20px"></i>
                                </a>
                            </td>
                                    <!-- Modal -->
                                    <div id="edit-permission-modal-{{$permission->id}}" class="modal" tabindex="-1" role="dialog" aria-labelledby="editPermissions" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            @include('access.permissions.edit')
                                        </div>
                                </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>

        </div>
        </div>
    </div>



    </x-app-layout>
