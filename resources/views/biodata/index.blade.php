<x-app-layout>
 
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title">Biodata Details</h4>

        
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">

        <div class="card-title">
            Manage BioData here
      
        </div>

      

        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          
                <thead>
                <tr>
                                    
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Payroll Number</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Disability Status</th>
                    <th scope="col">Tel/Mobile</th>
                    <th scope="col">Ethnicity</th>
                    <th></th>

                </tr>
                </thead>
                <tbody>
                  
                  @foreach ($personalDetails as $detail)
                      <tr>
                        <td>{{ $detail->id }}</td>
                        <td>{{ $detail->name }}</td>
                        <td>{{ $detail->payroll_number }}</td>
                        <td>{{ $detail->age }}</td>
                        <td>{{ $detail->gender }}</td>
                        <td>{{ $detail->disabilityStatus->name }}</td>
                        <td>{{ $detail->tel_mobile }}</td>
                        <td>{{ $detail->ethnicity->name }}</td>
                        <td>
                            <div class="row">
                            <div class="col-md-3">
                            <a class=""  href="{{ route('personal.details.edit', $detail->id) }}" data-toggle="tooltip" data-placement="bottom" title="View User Profile">
                                    <i class=" mdi mdi-pencil-circle-outline text-secondary" style="font-size: 24px">
                                    </i>

                            </a>
                            </div>
                            <div class="col-md-3">
                            <form method="POST" action="">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="pt-0 btn btn-xs btn-default-outline btn-flat show_confirm" data-toggle="tooltip" title='Delete'>  <i class="mdi mdi mdi-delete-circle-outline text-secondary" style="font-size: 24px">
                                </i></button>
                            </form>
                            </div>
                            </div>
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
    </div>
</div>
    </div>
    
      </div>
      


   


</x-app-layout>
