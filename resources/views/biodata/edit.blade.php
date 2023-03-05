<x-app-layout>




<!-- End row -->










    <div class="card-box">
        <h4 class="header-title mb-4">EDIT HR AUDIT FORM</h4>

        <ul class="nav nav-pills navtab-bg nav-justified">
            <li class="nav-item">
                <a href="#home1" data-toggle="tab" aria-expanded="false" class="nav-link active">
                    Personal Details
                </a>
            </li>
            <li class="nav-item">
                <a href="#profile1" data-toggle="tab" aria-expanded="true" class="nav-link">
                    Employment Details
                </a>
            </li>
            <li class="nav-item"> 
                <a href="#profile2" data-toggle="tab" aria-expanded="true" class="nav-link">
                    Certificates
                </a>
            </li> 


            <li class="nav-item">
                <a href="#messages1" data-toggle="tab" aria-expanded="false" class="nav-link">
                    Employment Changes/Moves
                </a>
            </li>
            <li class="nav-item">
                <a href="#settings1" data-toggle="tab" aria-expanded="false" class="nav-link">
                    Payment Details
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="home1">
                <div class="col-md-12">
                    <div class="card-box"  style="border:1px solid #ccc">
                        <div class="card-header mb-2" style="border:1px solid #ccc">
                             <h4 class="header-title"><b>HR Audit BioData Form</b></h4>
                        </div>



                        <form id="basic-form" action="{{ route('personal.details.update', $personalDetail->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div>
                                    <div class="form-group  row">
                                         <div class="col-md-6">
                                            <label class="control-label" for="name"> Payroll Number *</label>
                                            <div class="">
                                                <input id="payroll_number" value="{{old('payroll_number', $personalDetail->payroll_number)}}" name="payroll_number" type="text" class="required form-control">
                                            </div>

                                            @if ($errors->has('payroll_number'))
                                            <span class="text-danger text-left">{{ $errors->first('payroll_number') }}</span>
                                            @endif
                                         </div>
                                         <div class="col-md-6">
                                            <label class="control-label" for="name"> Name *</label>
                                            <div class="">
                                                <input id="name" name="name" value="{{old('name', $personalDetail->name)}}" type="text" class="required form-control">
                                            </div>
                                            @if ($errors->has('name'))
                                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                            @endif
                                         </div>

                                    </div>


                                    <div class="form-group  row">
                                            <div class="col-md-6">
                                                <label class="control-label" for="name"> ID No. *</label>
                                                <div class="">
                                                    <input id="id_no" name="id_no" type="text" value="{{old('id_no', $personalDetail->id_no)}}" class="required form-control">
                                                </div>
                                                @if ($errors->has('id_no'))
                                            <span class="text-danger text-left">{{ $errors->first('id_no') }}</span>
                                            @endif
                                            </div>

                                            <div class="col-md-6">
                                                <label class="control-label" for="name"> Age *</label>
                                            <div class="">
                                                <input id="age" name="age" type="number"  value="{{old('age', $personalDetail->age)}}"class="required form-control">
                                            </div>
                                            @if ($errors->has('age'))
                                            <span class="text-danger text-left">{{ $errors->first('age') }}</span>
                                            @endif
                                            </div>

                                    </div>


                                    <div class="form-group  row">
                                        <div class="col-md-6">
                                            <label class="control-label">Gender *</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="male" value="male" {{ $personalDetail->gender == 'male' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="male">Male</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{ $personalDetail->gender == 'female' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="female">Female</label>
                                            </div>

                                            @if ($errors->has('gender'))
                                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                                            @endif
                                        </div>




                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label class="control-label" for="disability_status">Disability Status *</label>
                                                <div class="">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="disability_status" value="yes" {{ $personalDetail->disability_status ? 'checked' : '' }}> Yes
                                                    </label>
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="disability_status" value="no" {{ !$personalDetail->disability_status ? 'checked' : '' }}> No
                                                    </label>
                                                </div>
                                                @if ($errors->has('disability_status'))
                                                    <span class="text-danger">{{ $errors->first('disability_status') }}</span>
                                                @endif
                                            </div>
                                        </div>


                                    </div>





                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label class="control-label" for="passport_photo">Passport Photo *</label>
                                            <div class="">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="passport_photo" value="yes" {{ $personalDetail->passport_photo == 'yes' ? 'checked' : '' }}> Yes
                                                </label>
                                            </div>
                                            <div class="">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="passport_photo" value="no" {{ $personalDetail->passport_photo == 'no' ? 'checked' : '' }}> No
                                                </label>
                                            </div>
                                            @if ($errors->has('passport_photo'))
                                                <span class="text-danger">{{ $errors->first('passport_photo') }}</span>
                                            @endif
                                        </div>
                                    </div>




                                    <div class="col-md-6">
                                        <label class="control-label" for="tel_mobile">Tel/Mobile *</label>
                                        <div class="">
                                            <input id="tel_mobile" name="tel_mobile" value="{{ old('tel_mobile', $personalDetail->tel_mobile) }}" type="tel" class="required form-control" placeholder="Format: 123-456-7890">
                                        </div>
                                        @if ($errors->has('tel_mobile'))
                                            <span class="text-danger text-left">{{ $errors->first('tel_mobile') }}</span>
                                        @endif
                                    </div>




                                    <div class="form-group  row">
                                        <div class="col-md-6">
                                            <label class="control-label" for="ethnicity_id">Ethnicity *</label>
                                            <div class="">
                                                <select id="ethnicity_id" name="ethnicity_id" class="required form-control">
                                                    <option value="">Select an ethnicity</option>
                                                    @foreach ($ethnicities as $ethnicity)
                                                        <option value="{{ $ethnicity->id }}" {{ (old('ethnicity_id', $personalDetail->ethnicity_id) == $ethnicity->id) ? 'selected' : '' }}>{{ $ethnicity->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @if ($errors->has('ethnicity_id'))
                                                <span class="text-danger text-left">{{ $errors->first('ethnicity_id') }}</span>
                                            @endif
                                        </div>

                                          </div>

                                          <div class="form-group row">
                                            <div class="col-md-6">
                                                <label class="control-label" for="comments">Comments</label>
                                                <div>
                                                    <textarea id="comments" name="comments" class="form-control">{{ $personalDetail->comments ?? old('comments') }}</textarea>
                                                </div>
                                            </div>
                                        </div>


                                    <div class="form-group  row">
                                        <button type="submit" class="btn btn-primary btn-rounded waves-light waves-effect width-md"><i class="mdi mdi-send-circle-outline" ></i>Save Changes</button>

                                    </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="tab-pane show" id="profile1">
                <div class="col-md-12">
                    <div class="card-box" style="border:1px solid #ccc">
                        <div class="card-header mb-2" style="border:1px solid #ccc">
                            <h4 class="header-title"><b>HR Audit BioData Form</b></h4>
                       </div>


                        <form id="basic-form" action="{{ route('employment.details.store', $personalDetail->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("POST")

                            <div>


                                    <div class="form-group  row">

                                        {{-- Department --}}
                                        <div class="col-md-3">
                                            <label class="control-label" for="department_id">Department  <span class="text-danger">*</span></label>
                                            <div class="">
                                                <select id="department_id" name="department_id" class="select2 form-control">
                                                    <option value="">Select Department</option>
                                                    @foreach ($departments as $department)
                                                        <option value="{{ $department->id }}" {{ old('department_id', optional($personalDetail->employmentDetails)->department_id) == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('department_id'))
                                                    <span class="text-danger text-left">{{ $errors->first('department_id') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        



                                         {{-- appointment_letter --}}

                                         <div class="col-md-3">
                                            <label class="control-label" for="appointment_letter">Appointment Letter <span class="text-danger">*</span></label>
                                            <select id="appointment_letter" name="appointment_letter" class="select2 form-control">
                                                <option value="">Select Appointment Letter</option>
                                                <option value="1" {{ old('appointment_letter', optional($personalDetail->employmentDetails)->appointment_letter) == 1 ? 'selected' : '' }}>Yes</option>
                                                <option value="0" {{ old('appointment_letter', optional($personalDetail->employmentDetails)->appointment_letter) == 0 ? 'selected' : '' }}>No</option>
                                            </select>
                                            @if ($errors->has('appointment_letter'))
                                                <span class="text-danger text-left">{{ $errors->first('appointment_letter') }}</span>
                                            @endif
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <label class="control-label" for="employment_term_id_id">Employment Term <span class="text-danger">*</span></label>
                                            <div class="">
                                                <select id="employment_term_id" name="employment_term_id" class="select2 form-control">
                                                    <option value="">Select Employment Term</option>
                                                    @foreach ($employmentTerms as $employmentTerm)
                                                        <option value="{{ old('employment_term_id', $employmentTerm->id) }}" {{ $personalDetail->employment_term_id == $employmentTerm->id ? 'selected' : '' }}>{{ $employmentTerm->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('employment_term_id'))
                                                    <span class="text-danger text-left">{{ $errors->first('employment_term_id') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label class="control-label" for="probation_statuses_id">Probation Status <span class="text-danger">*</span></label>
                                            <div>
                                                <select name="probation_statuses_id" id="" class="select2 form-control">
                                                    <option value="">Select Probation Status</option>
                                                    <option value="1" {{ old('probation_statuses_id', $personalDetail->probation_statuses_id) == '1' ? 'selected' : '' }}>Active</option>
                                                    <option value="2" {{ old('probation_statuses_id', $personalDetail->probation_statuses_id) == '2' ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                                @if ($errors->has('probation_statuses_id'))
                                                    <span class="text-danger text-left">{{ $errors->first('probation_statuses_id') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        


                                    </div>

                              
                            </div>

                            <div class="form-group" >
                                <label class="control-label">Work Experience</label>
                                <div id="previous_work_experience_fields">
                                    {{-- Previous Position --}}
                                    <div class="form-group row  pb-2 pt-2" style="border-top:1px solid #ccc; border-bottom:1px solid #ccc">
                                        <div class="col-md-3">
                                            <label class="control-label" for="position">Position *</label>
                                            <div class="">
                                                <input  name="position[]" type="text" class="select2 form-control" value="{{ old('position.0', $personalDetail->position ?? '') }}">

                                                @if ($errors->has('position'))
                                                    <span class="text-danger text-left">{{ $errors->first('position') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="control-label" for="position_type">Position Type <span class="text-danger">*</span></label>
                                            <div class="">
                                                <select name="position_type[]" id="" class="select2 form-control">
                                                    <option value="">Select Position Type</option>
                                                    <option value="current">Current</option>
                                                    <option value="previous">Previous</option>
                                                </select>
                                            </div>
                                            @if ($errors->has('position_type'))
                                                <span class="text-danger text-left">{{ $errors->first('position_type') }}</span>
                                            @endif
                                        </div>
                                            {{-- Previous JobGrade --}}
                                            <div class="col-md-3">
                                                <label class="control-label" for="job_grade_id">Job Grade *</label>
                                                <div class="">
                                                    <select id="job_grade_id" name="job_grade_id[]" class="select2 form-control">
                                                        <option value="">Select Job Grade</option>
                                                        @foreach ($jobGrades as $jobGrade)
                                                            <option value="{{ old('job_grade_id.0', $jobGrade->id) }}" {{ old('job_grade_id.'.$loop->index, $personalDetail->job_grade_id) == $jobGrade->id ? 'selected' : '' }}>{{ $jobGrade->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('job_grade_id'))
                                                        <span class="text-danger text-left">{{ $errors->first('job_grade_id') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                
                                            {{-- Previous Employment Year --}}
                                            <div class="col-md-3">
                                                <label class="control-label" for="employment_year">Employment Year *</label>
                                                <div class="">
                                                    <input id="employment_year" name="employment_year[]" type="date" class="select2 form-control" value="{{ old('employment_year.0', $personalDetail->employment_year ?? null) }}" max="{{ date('Y') }}">
                                                    @if ($errors->has('employment_year'))
                                                        <span class="text-danger text-left">{{ $errors->first('employment_year') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <button type="button" id="add_previous_work_experience" class="btn btn-outline-info btn-rounded btn-sm"><i style="font-size:16px" class="mdi mdi-clipboard-plus"></i>Add Work Experience</button>
                                </div>
                
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label class="control-label" for="comments">Comments</label>
                                        <div>
                                            <textarea id="comments" name="comments" class="form-control{{ $personalDetail ? ' personalDetail' : '' }}">{{old('comments')}}</textarea>
                                        </div>
                                        @if ($errors->has('comments'))
                                            <span class="text-danger text-left">{{ $errors->first('comments') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                
                                        {{-- Submit --}}
                                        <div class="form-group  row">
                                            <div class="p-2" >
                                            <button type="submit" class="btn btn-outline-primary btn-rounded waves-light waves-effect width-md"><i class="mdi mdi-send-circle-outline"></i> Next Section : Employment Changes/Moves</button>
                                            </div>
                                        </div>
                                </fieldset>
                            </form>
                    



                                                  
                           

                    </div>
                </div>

            </div>

            <div class="tab-pane show" id="profile2">

                <div class="col-md-12">
                    <div class="card-box input-card" >
                        <div class="card-header mb-2" style="border:1px solid #ccc">
                             <h4 class="header-title text-info"><b>Step 3: Certificates</b></h4>
                        </div>
                        <form id="basic-form" action="{{ route('employee.certificate.store', $personalDetail->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                           <fieldset>
                             <legend>Add Academic certificates</legend>
                                <div >
                                    <div class="p-1">
                                        <button type="button" class="btn btn-outline-info btn-xs  mt-4" onclick="addCertificate()"><i class="mdi mdi-note-plus-outline"></i> Add Certificate</button>
            
                                     </div>
            
            
                                         <div class="row p-2">
            
                                            <div class="form-group">
            
            
                                                <div id="other_certificates">
                                                    <table class="table table-bordered">
                                                        <th>Certificate Title</th>
                                                        <th>Index/Registration No</th>
                                                        <th>Institution</th>
                                                        <th>Certificate No</th>
                                                        <th>Year</th>
                                                    </table>
                                                    <!-- dynamic input fields for other certificates will be added here -->
                                                </div>
            
                                             </div>
            
                                          </div>
            
            
            
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label class="control-label" for="comments">Comments</label>
                                                <div>
                                                    <textarea id="comments" name="comments" class="form-control">{{old('comments')}}</textarea>
                                                </div>
                                                @if ($errors->has('comments'))
                                                    <span class="text-danger text-left">{{ $errors->first('comments') }}</span>
                                                @endif
                                            </div>
                                        </div>
            
                                        <div class="form-group row" >
                                            <div class="p-2" >
                                            <button type="submit" class="btn btn-outline-info btn-sm btn-rounded waves-light waves-effect width-md"><i class="mdi mdi-send-circle-outline" ></i> Next Section : Employment Changes</button>
                                            </div>
                                        </div>
            
            
            
                                    </div>
                                </div>
                           </fieldset>
                        </form>
            
                    </div>
                </div>

            
            <div class="tab-pane" id="messages1">
                <div class="col-md-12">
                    <div class="card-box" style="border:1px solid #ccc">
                        <div class="card-header mb-2" style="border:1px solid #ccc">
                            <h4 class="header-title"><b>HR Audit BioData Form</b></h4>
                       </div>



                        <form id="basic-form" action="{{ route('employment.change.store', $personalDetail->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div>




                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label class="control-label">Relative *</label>
                                        <select name="relative_id" class="select2 form-control">
                                            <option value="">Do You Have Relative</option>
                                            <option value="1" {{ old('relative_id', $personalDetail->relative_id) == 'yes' ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ old('relative_id', $personalDetail->relative_id) == 'no' ? 'selected' : '' }}>No</option>
                                        </select>
                                        @if ($errors->has('relative_id'))
                                            <span class="text-danger">{{ $errors->first('relative_id') }}</span>
                                        @endif
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <label class="control-label" for="name"> Name *</label>
                                        <div class="">
                                            <input id="name" name="name" value="{{ old('name', $personalDetail->name ?? '') }}" type="text" class="required form-control">
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-4">
                                        <label class="control-label" for="relationship">Relationship *</label>
                                        <div class="">
                                            <input type="text" id="relationship" name="relationship" class="required form-control" value="{{ $personalDetail ? $personalDetail->relationship : old('relationship') }}" placeholder="Enter relationship">
                                        </div>
                                        @if ($errors->has('relationship'))
                                            <span class="text-danger text-left">{{ $errors->first('relationship') }}</span>
                                        @endif
                                    </div>
                                    
                                    
                                </div>


                                <div class="form-group  row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="job_title_id">Job Title *</label>
                                        <div class="">
                                            <input type="text" id="job_title_id" name="job_title_id" class="required form-control" value="{{ old('job_title_id', $personalDetail->job_title_id ?? '') }}" placeholder="Enter job title">
                                        </div>
                                        @if ($errors->has('job_title_id'))
                                            <span class="text-danger text-left">{{ $errors->first('job_title_id') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label class="control-label" for="department_id">Department *</label>
                                        <div class="">
                                            <select name="department_id" class="select2 form-control">
                                                <option value="">Select a department</option>
                                                @foreach ($departments as $department)
                                                    <option value="{{ $department->id }}" {{ old('department_id', $personalDetail->department_id) == $department->id ? 'selected' : '' }}>
                                                        {{ $department->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('department_id'))
                                                <span class="text-danger text-left">{{ $errors->first('department_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    
                                    

                                    
                                </div>

                                <div class="form-group row">
                                   
                                    <div class="col-md-4">
                                        <label class="control-label" for="study_leave">Study Leave *</label>
                                        <div class="">
                                            <select id="study_leave" name="study_leave" class="select2 form-control">
                                                <option value="">Select an option</option>
                                                <option value="1" {{ old('study_leave', $personalDetail->study_leave) == '1' ? 'selected' : '' }}>Yes</option>
                                                <option value="0" {{ old('study_leave', $personalDetail->study_leave) == '0' ? 'selected' : '' }}>No</option>
                                            </select>
                                        </div>
                                        @if ($errors->has('study_leave'))
                                            <span class="text-danger text-left">{{ $errors->first('study_leave') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-4">
                                        <label class="control-label" for="name"> Start Date *</label>
                                        <div class="">
                                            <input id="start_date" name="start_date" value="{{old('start_date', $personalDetail->start_date)}}" type="date" class="required form-control">
                                        </div>
                                        @if ($errors->has('start_date'))
                                            <span class="text-danger text-left">{{ $errors->first('start_date') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-4">
                                        <label class="control-label" for="name"> End Date *</label>
                                        <div class="">
                                            <input id="end_date" value="{{ old('end_date', $personalDetail->end_date ?? '') }}" name="end_date" type="date" class="required form-control">
                                        </div>
                                        @if ($errors->has('end_date'))
                                            <span class="text-danger text-left">{{ $errors->first('end_date') }}</span>
                                        @endif
                                    </div>
                                    
                                    
                                    
                                </div>


                                <div class="form-group row">

                                    <div class="col-md-4">
                                        <label class="control-label" for="institution">Institution *</label>
                                        <div class="">
                                            <input type="text" id="institution" name="institution" class="required form-control" value="{{ old('institution', $personalDetail->institution) }}" placeholder="Enter institution name">
                                        </div>
                                        @if ($errors->has('institution'))
                                            <span class="text-danger text-left">{{ $errors->first('institution') }}</span>
                                        @endif
                                    </div>
                                       
                                    <div class="col-md-4">
                                        <label class="control-label" for="course">Course *</label>
                                        <div class="">
                                            <input type="text" id="course" name="course" class="required form-control" value="{{ old('course', $personalDetail->course ?? '') }}" placeholder="Enter course name">
                                        </div>
                                        @if ($errors->has('course'))
                                            <span class="text-danger text-left">{{ $errors->first('course') }}</span>
                                        @endif
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <label class="control-label" for="certificate">Certificate Attained *</label>
                                        <div class="">
                                            <input type="text" id="certificate" name="certificate" class="required form-control" value="{{ old('certificate', $personalDetail->certificate ?? '') }}" placeholder="Enter certificate name">
                                        </div>
                                        @if ($errors->has('certificate'))
                                            <span class="text-danger text-left">{{ $errors->first('certificate') }}</span>
                                        @endif
                                    </div>
                                    

                                </div>

                                <div class="form-group row">
                                    
                                    <div class="col-md-6">
                                        <label class="control-label" for="name"> Date *</label>
                                        <div class="">
                                            <input id="date" name="date" type="date" class="required form-control" value="{{ old('date', $personalDetail->date ?? '') }}">
                                        </div>
                                        @if ($errors->has('date'))
                                            <span class="text-danger text-left">{{ $errors->first('date') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label class="control-label" for="approving_signatory"> Approving Signatory *</label>
                                        <div class="">
                                            <input id="approving_signatory" value="{{ old('approving_signatory', $personalDetail->approving_signatory) }}" name="approving_signatory" type="text" class="required form-control">
                                        </div>
                                        @if ($errors->has('approving_signatory'))
                                            <span class="text-danger text-left">{{ $errors->first('approving_signatory') }}</span>
                                        @endif
                                    </div>
                                    
                                   
                                </div>


                              

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label class="control-label" for="comments">Comments</label>
                                        <div>
                                            <textarea id="comments" name="comments" class="form-control">{{old('personalDetail.comments')}}</textarea>
                                        </div>
                                        @if ($errors->has('comments'))
                                            <span class="text-danger text-left">{{ $errors->first('comments') }}</span>
                                        @endif
                                    </div>
                                    
                                </div>







                                    <div class="form-group  row">
                                        <button type="submit" class="btn btn-primary btn-rounded waves-light waves-effect width-md"><i class="mdi mdi-send-circle-outline" ></i> Save Changes</button>

                                    </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            {{-- <div class="tab-pane" id="settings1">
                <div class="col-md-12">
                    <div class="card-box input-card">
                        <div class="card-header mb-2" style="border:1px solid #ccc">
                             <h4 class="header-title text-info"><b>STEP 4: Payment Details </b></h4>
                        </div>
            
                        <form id="basic-form" action="{{ route('payslip.store', $personalDetail->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                           <fieldset >
                            <legend>Fill In Details Below</legend>
            
                                <form id="basic-form" action="{{ route('personal.details.store', $personalDetail->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <div class="p-2">
                                            <button type="button" class="btn btn-outline-info btn-sm waves-effect waves-light add-payment-month">Add Payment Details</button>
                                        </div>
                                        <div class="payment-months-container">
                                            <div class="form-row payment-month-item m-4 p-4" style="border:1px solid #4fbde9;">
                                                <div class="col-md-12 p-1 mb-1" style="border-bottom:1px solid #4fbde9 ">
                                                    <span class="float-left"> Payslip Details</span>
                                                    <span class="float-right">
                                                        <button type="button" class="btn btn-outline-danger btn-xs waves-effect remove-payment-month">Remove </button>
                                                    </span>
            
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="date">Payment Month *</label>
                                                    <div class="input-group">
                                                        <input id="date" name="date[]" type="date" class="form-control" value="{{ old('date', $personalDetail['payment_month']) }}">
                                                    </div>
                                                    @if ($errors->has('date[]'))
                                                        <span class="text-danger text-left">{{ $errors->first('date[]') }}</span>
                                                    @endif
                                                </div>
                                                
                                                <div class="col-md-4 mb-3">
                                                    <label for="pf_number">Basic Salary *</label>
                                                    <input name="basic_salary[]" type="text" class="form-control" value="{{ old('basic_salary')[$index] ?? '' }}">
                                                    @if ($errors->has('basic_salary'))
                                                        <span class="text-danger text-left">{{ $errors->first('basic_salary') }}</span>
                                                    @endif
                                                </div>
                                                 
                                                <div class="col-md-4 mb-3">
                                                    <label for="total_earnings">Total Earnings *</label>
                                                    <input name="total_earnings[{{$loop->index}}]" type="text" class="form-control" value="{{ old('total_earnings.'.$loop->index, isset($personalDetail) ? $personalDetail->total_earnings[$loop->index] : '') }}">
                                                </div>
                                                
                                                <div class="col-md-4 mb-3">
                                                    <label for="pf_number">PF Number *</label>
                                                    <input id="pf_number" name="pf_number[{{$loop->index}}]" type="text" class="form-control" value="{{ old('pf_number.'.$loop->index, isset($personalDetail) ? $personalDetail->pf_number[$loop->index] : '') }}">
                                                </div>
                                                
                                                <div class="col-md-4 mb-3">
                                                    <label for="tax_pin">Tax Pin*</label>
                                                    <input name="tax_pin[{{$loop->index}}]" type="text" class="form-control" value="{{ old('tax_pin.'.$loop->index, isset($personalDetail) ? $personalDetail->tax_pin[$loop->index] : '') }}">
                                                </div>
                                                
                                                <div class="col-md-4 mb-3">
                                                    <label for="name">Name *</label>
                                                    <input id="name" name="name[]" type="text" class="form-control" value="{{ old('name')[$loop->index] ?? '' }}">
                                                    @if ($errors->has("name.$loop->index"))
                                                        <span class="text-danger text-left">{{ $errors->first("name.$loop->index") }}</span>
                                                    @endif
                                                </div>
                                                
                                                <div class="col-md-4 mb-3">
                                                    <label for="station_name">Station Name *</label>
                                                    <input id="station_name" name="station_name[]" type="text" class="form-control" value="{{ old('station_name')[$loop->index] ?? '' }}">
                                                    @if ($errors->has("station_name.$loop->index"))
                                                        <span class="text-danger text-left">{{ $errors->first("station_name.$loop->index") }}</span>
                                                    @endif
                                                </div>
                                                
                                                <div class="col-md-4 mb-3">
                                                    <label for="station_code">Station Code *</label>
                                                    <input id="station_code" name="station_code[]" type="text" class="form-control" value="{{ old('station_code')[$loop->index] ?? '' }}">
                                                    @if ($errors->has("station_code.$loop->index"))
                                                        <span class="text-danger text-left">{{ $errors->first("station_code.$loop->index") }}</span>
                                                    @endif
                                                </div>
                                                
                                                <div class="col-md-4 mb-3">
                                                    <label for="desig_code">Desig Code *</label>
                                                    <input id="desig_code" name="desig_code[]" type="text" class="form-control" value="{{ old('desig_code')[$loop->index] ?? '' }}">
                                                    @if ($errors->has("desig_code.$loop->index"))
                                                        <span class="text-danger text-left">{{ $errors->first("desig_code.$loop->index") }}</span>
                                                    @endif
                                                </div>
                                                
                                                <div class="col-md-4 mb-3">
                                                    <label for="desig_name">Desig Name *</label>
                                                    <input id="desig_name" name="desig_name[]" type="text" class="form-control" value="{{ old('desig_name')[$loop->index] ?? '' }}">
                                                    @if ($errors->has("desig_name.$loop->index"))
                                                        <span class="text-danger text-left">{{ $errors->first("desig_name.$loop->index") }}</span>
                                                    @endif
                                                </div>
                                                
                                                <div class="col-md-4 mb-3">
                                                    <label for="id_no">ID No *</label>
                                                    <input id="id_no" name="{{ $personalDetail }}[id_no][]" type="text" class="form-control">
                                                </div>
                                                
                                                <div class="col-md-4 mb-3">
                                                    <label for="phone">Phone *</label>
                                                    <input id="phone" name="{{ $personalDetail }}[phone][]" type="text" class="form-control">
                                                </div>
                                                
                                                <div class="col-md-4 mb-3">
                                                    <label for="email">Email *</label>
                                                    <input id="email" name="{{ $personalDetail }}[email][]" type="email" class="form-control">
                                                </div>
                                                
                                                <div class="col-md-12 mb-3">
                                                    <label for="message">Comment *</label>
                                                    <textarea id="message" name="{{ $personalDetail }}[message][]" class="form-control" rows="5"></textarea>
                                                </div>
                                                
            
                                            </div>
                                        </div>
            
            
            
            
            
                                        <div class="form-group">
                                            <div class="p-2">
                                                <button type="submit" class="btn btn-outline-info btn-rounded waves-light waves-effect width-md"><i class="mdi mdi-send-circle-outline"></i> Finish and Submit</button>
                                                </div>
            
                                        </div>
                                    </div>
                                </form>
                           </fieldset>
            
            
            </div> --}}
            </div>




                      </div>
        </div>
    </div>




</x-app-layout>

<script type="text/javascript">
    $(document).ready(function() {
        // Add Payment Month
        $(".add-payment-month").click(function() {
            var paymentMonthItem = $(".payment-month-item").first().clone();
            paymentMonthItem.find("input[type=text], input[type=date]").val("");
            $(".payment-month-container").append(paymentMonthItem);
        });

        // Remove Payment Month
        $(document).on("click", ".remove-payment-month", function() {
            $(this).parents(".payment-month-item").remove();
        });
    });
</script>

@push('scripts')
                                    <script>
                                        $(document).ready(function () {
                                            // Add Previous Work Experience
                                            $("#add_previous_work_experience").click(function () {
                                                var html =
                                                    '<div class="form-group row">' +
                                                    '<div class="col-md-4">' +
                                                    '<label class="control-label" for="position">Previous Position *</label>' +
                                                    '<div class="">' +
                                                    '<input id="previous_position" name="position[]" type="text" class="required form-control" value="">' +
                                                    '@if ($errors->has("position"))' +
                                                    '<span class="text-danger text-left">{{ $errors->first("position") }}</span>' +
                                                    '@endif' +
                                                    '</div>' +
                                                    '</div>' +
                                                    '<div class="col-md-4">' +
                                                    '<label class="control-label" for="job_grade_id">Previous Job Grade *</label>' +
                                                    '<div class="">' +
                                                    '<select id="job_grade_id" name="job_grade_id[]" class="required form-control">' +
                                                    '<option value="">Select previous Job Grade</option>' +
                                                    '@foreach ($jobGrades as $jobGrade)' +
                                                    '<option value="{{ old("job_grade_id.0",$jobGrade->id) }}">{{ $jobGrade->name }}</option>' +
'@endforeach' +
'</select>' +
'@if ($errors->has("job_grade_id"))' +
'<span class="text-danger text-left">{{ $errors->first("job_grade_id") }}</span>' +
'@endif' +
'</div>' +
'</div>' +
'<div class="col-md-4">' +
'<label class="control-label" for="employment_year">Previous Employment Year *</label>' +
'<div class="">' +
'<input id="employment_year" name="employment_year[]" type="month" class="required form-control" value="" max="{{ date("Y") }}">' +
'@if ($errors->has("employment_year"))' +
'<span class="text-danger text-left">{{ $errors->first("employment_year") }}</span>' +
'@endif' +
'</div>' +
'</div>' +
'</div>';
$("#previous_work_experience_fields").append(html);
});
});
</script>
@endpush
