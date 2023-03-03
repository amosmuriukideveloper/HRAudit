
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
            View BioData here
      
        </div>

      

        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          
                <thead>
                <tr>
                                    
                    <th></th>    
                    <th scope="col">Payroll Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">ID No</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Disability Status</th>
                    <th scope="col">Passport Photo</th>
                    <th scope="col">Tel/Mobile</th>
                    <th scope="col">Ethnicity</th>
                    <th scope="col">Department</th>
                    <th scope="col">Appointment Letter</th>
                    <th scope="col">Date of Employment</th>
                    <th scope="col">Probation Status</th>
                    <th scope="col">Current Position</th>
                    <th scope="col">Current Job Grade</th>
                    <th scope="col">Previous Position</th>
                    <th scope="col">Previous Job Grade</th>
                    <th scope="col">Academic Certificates</th>
                    <th scope="col">Professional Certificates</th>
                    <th scope="col">Relatives</th>
                    <th scope="col">Name</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Relationship</th>
                    <th scope="col">Department</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Institution</th>
                    <th scope="col">Course</th>
                    <th scope="col">Certificate Attained</th>
                    <th scope="col">Date</th>
                    <th scope="col">Approving Supervisor</th>
                    <th scope="col">Promotion/Demotion</th>
                    <th scope="col">Month</th>



                </tr>
                </thead>
                <tbody>
                  
                    @foreach ($personalDetails as $personal)
                    <tr>
                      <td>{{ $personal->id }}</td>
                      <td>{{ $personal->payroll_number }}</td>
                      <td>{{ $personal->name }}</td>
                      <td>{{ $personal->id_no }}</td>
                      <td>{{ $personal->age }}</td>
                      <td>{{ $personal->gender }}</td>
                      <td>{{ $personal->disability_status }}</td>
                      <td>{{ $personal->passport_photo }}</td>
                      <td>{{ $personal->tel_mobile }}</td>
                      <td>{{ $personal->ethnicity }}</td>
                      <td>{{ $personal->employmentDetails->department->name ?? '' }}</td>
                      <td>{{ optional($personal->employmentDetails)->appointment_letter == 1 ? 'Yes' : 'No' }}</td>
                      <td>{{ $personal->employmentDetails->employment_term_id ?? '' }}</td>
                      <td>{{ optional($personal->employmentDetails)->date }}</td>
                      <td>{{ optional($personal->employmentDetails)->probation_status }}</td>
                      <td>{{ $personal->employmentDetails->current_position->name ?? '' }}</td>
                      <td>{{ optional($personal->employmentDetails)->current_job_grade }}</td>
                      <td>{{ optional($personal->employmentDetails)->previous_position }}</td>
                      <td>{{ optional($personal->employmentDetails)->previous_job_grade }}</td>
                      <td>{{ optional($personal->employmentDetails)->academic_certificates }}</td>
                      <td>{{ optional($personal->employmentDetails)->professional_certificates }}</td>
                      <td>{{ optional($personal->employmentChanges)->relative_id }}</td>
                      <td>{{ optional($personal->employmentChanges)->name }}</td>
                      <td>{{ optional($personal->employmentChanges)->job_title }}</td>
                      <td>{{ optional($personal->employmentChanges)->relationship }}</td>
                      <td>{{ optional($personal->employmentChanges)->department }}</td>
                      <td>{{ optional($personal->employmentChanges)->study_leave }}</td>
                      <td>{{ optional($personal->employmentChanges)->start_date }}</td>
                      <td>{{ optional($personal->employmentChanges)->institution }}</td>
                      <td>{{ optional($personal->employmentChanges)->course }}</td>
                      <td>{{ optional($personal->employmentChanges)->certificate }}</td>
                      <td>{{ optional($personal->employmentChanges)->date }}</td>
                      <td>{{ optional($personal->employmentChanges)->approving_supervisor }}</td>
                      <td>{{ optional($personal->employmentChanges)->change_type }}</td>
                      {{-- <td>{{ optional($personal->payslip->payment_month)}}</td> --}}
                      
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
