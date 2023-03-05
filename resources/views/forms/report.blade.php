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
                    <th scope="col">Comments</th>
                    <th scope="col">Department</th>
                    <th scope="col">Appointment Letter</th>
                    <th scope="col">Employment Term</th>
                    <th scope="col">Probation Status</th>
                    <th scope="col">Current Position</th>
                    <th scope="col">Current Job Grade</th>
                    <th scope="col">Previous Position</th>
                    <th scope="col">Previous Job Grade</th>

                    <th scope="col">Knec Cert name</th>
                    <th scope="col">Knec Index No. </th>
                    <th scope="col">School</th>
                    <th scope="col">Knec Certificate No</th>
                    <th scope="col">Professional Body</th>
                    <th scope="col">Membership Number</th>
                    <th scope="col">License Number</th>
                    <th scope="col">Professional Cert Year</th>
                    <th scope="col">Membership Status</th>
                    <th scope="col">Other Certificates Title</th>
                    <th scope="col">Course/Programme</th>
                    <th scope="col">Certificate Year</th>
                    <th scope="col">Certificate Number</th>
                    <th scope="col">Comments</th>
                    <th scope="col">Relative</th>
                    <th scope="col">Name</th>
                    <th scope="col">Relationship</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Department</th>
                    <th scope="col">Study Leave</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Institution</th>
                    <th scope="col">Course</th>
                    <th scope="col">Certificate Attained</th>
                    <th scope="col">Date</th>
                    <th scope="col">Approving Supervisor</th>
                    <th scope="col">Comments</th>
                    
                  
                    <th scope="col">Payment Month</th>
                    <th scope="col">Basic Salary</th>
                    <th scope="col">Total Earnings</th>
                    <th scope="col">PF Number</th>
                    <th scope="col">Taxpin</th>
                    <th scope="col">Name</th>
                    <th scope="col">Station Name</th>
                    <th scope="col">Station Code</th>
                    <th scope="col">Desig Code</th>
                    <th scope="col">Desig Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Comments</th>



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
                      <td>{{ $personal->comments }}</td>
                      <td>{{ $personal->employmentDetails->department->name ?? '' }}</td>
                      <td>{{ optional($personal->employmentDetails)->appointment_letter == 1 ? 'Yes' : 'No' }}</td>
                      <td>{{ optional($personal->employmentDetails)->employment_term_id ?? '' }}</td>
                      <td>{{ optional($personal->employmentDetails)->probation_statuses_id ?? '' }}</td>
                      <td>{{ optional($personal->employment_work_experience)->position ?? '' }}</td>
                      <td>{{ optional($personal->employment_work_experience)->job_grade_id ?? '' }}</td>
                      <td>{{ optional($personal->employmentDetails)->employment_year ?? '' }}</td>
                      <td>{{ optional($personal->employmentDetails)->date ?? '' }}</td>
                     
                      


                      <td>{{ optional($personal->employeeCertificates)->name ?? '' }}</td>
                      <td>{{ optional($personal->employeeCertificates)->index_number?? '' }}</td>
                      <td>{{ optional($personal->employeeCertificates)->school?? '' }}</td>
                      <td>{{ optional($personal->employeeCertificates)->certificate_number?? '' }}</td>
                      <td>{{ optional($personal->employeeCertificates)->certificate_year?? '' }}</td>
                      <td>{{ optional($personal->employeeCertificates)->comments?? '' }}</td>
                    
                      <td>{{ optional($personal->professional_certificates)->professional_body ?? '' }}</td>
                      <td>{{ optional($personal->professional_certificates)->membership_number?? '' }}</td>
                      <td>{{ optional($personal->professional_certificates)->license_number?? '' }}</td>
                      <td>{{ optional($personal->professional_certificates)->cert_year?? '' }}</td>
                      <td>{{ optional($personal->professional_certificates)->membership_status?? '' }}</td>
                      


                      <td>{{ $personal->employmentChanges->relative_id ?? '' }}</td>
                      <td>{{ $personal->employmentChanges->name ?? ''}}</td>
                      <td>{{ optional($personal->employmentChanges)->relationship }}</td>
                      <td>{{ optional($personal->employmentChanges)->job_title }}</td>
                      <td>{{ optional($personal->employmentChanges)->department }}</td>
                      <td>{{ optional($personal->employmentChanges)->study_leave }}</td>
                      <td>{{ optional($personal->employmentChanges)->start_date }}</td>
                      <td>{{ optional($personal->employmentChanges)->end_date }}</td>
                      <td>{{ optional($personal->employmentChanges)->institution }}</td>
                      <td>{{ optional($personal->employmentChanges)->course }}</td>
                      <td>{{ optional($personal->employmentChanges)->certificate }}</td>
                      <td>{{ optional($personal->employmentChanges)->date }}</td>
                      <td>{{ optional($personal->employmentChanges)->approving_signatory }}</td>

                      
                      <td>{{ optional($personal->payslip)->payment_month }}</td>
                      <td>{{ optional($personal->payslip)->basic_salary }}</td>
                      <td>{{ optional($personal->payslip)->total_earnings }}</td>
                      <td>{{ optional($personal->payslip)->pf_number }}</td>
                      <td>{{ optional($personal->payslip)->name }}</td>
                      <td>{{ optional($personal->payslip)->station_name }}</td>
                      <td>{{ optional($personal->payslip)->station_code }}</td>
                      <td>{{ optional($personal->payslip)->desig_code }}</td>
                      <td>{{ optional($personal->payslip)->desig_name }}</td>
                      <td>{{ optional($personal->payslip)->id_no }}</td>
                      <td>{{ optional($personal->payslip)->tax_pin }}</td>
                      <td>{{ optional($personal->payslip)->comments }}</td>
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
