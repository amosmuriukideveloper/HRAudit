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
            {{-- <li class="nav-item">
                <a href="#profile2" data-toggle="tab" aria-expanded="true" class="nav-link">
                    Certificates
                </a>
            </li> --}}


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
                                        <div class="col-md-6">
                                            <label class="control-label" for="department_id">Department *</label>
                                            <div class="">
                                                <select id="department_id" name="department_id" class="required form-control">
                                                    <option value="">Select a department</option>
                                                    @foreach ($departments as $department)
                                                        <option value="{{ $department->id }}" {{ (old('ethnicity_id',$personalDetail->department_id) == $department->id) ? 'selected' : '' }}>{{ $department->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @if ($errors->has('department_id'))
                                                <span class="text-danger text-left">{{ $errors->first('department_id') }}</span>
                                            @endif
                                        </div>
                                        
                
                
                                         {{-- appointment_letter --}}
                
                                         <div class="col-md-6">
                                            <label class="control-label" for="appointment_letter_id">Appointment Letter *</label>
                                            <div class="">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="appointment_letter" id="yes" value="1" {{ $personalDetail->appointment_letter == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="yes">Yes</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="appointment_letter" id="no" value="0" {{ $personalDetail->appointment_letter == 0 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="no">No</label>
                                                </div>
                                                @if ($errors->has('appointment_letter'))
                                                    <span class="text-danger text-left">{{ $errors->first('appointment_letter') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        
                                        
                                    </div>
                
                                    {{-- employment_term_id --}}
                
                                    <div class="form-group  row">
                                        <div class="col-md-6">
                                            <label class="control-label" for="employment_term_id">Employment Term *</label>
                                            <div class="">
                                                <select id="employment_term_id" name="employment_term_id" class="required form-control">
                                                    <option value="">Select an Employment Term</option>
                                                    @foreach ($employmentTerms as $employmentTerm)
                                                        <option value="{{ $employmentTerm->id }}" @if ($personalDetail->employment_term_id == $employmentTerm->id) selected @endif>{{ $employmentTerm->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('employment_term_id'))
                                                    <span class="text-danger text-left">{{ $errors->first('employment_term_id') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        
                
                                            {{-- probation_status --}}
                
                
                                            <div class="col-md-6">
                                                <label class="control-label" for="probation_statuses_id">Probation Status *</label>
                                                <div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="probation_statuses_id" id="probation_status_active" value="1" {{ old('probation_statuses_id', $personalDetail->probation_statuses_id) == '1' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="probation_status_active">Active</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="probation_statuses_id" id="probation_status_not_active" value="2" {{ old('probation_statuses_id', $personalDetail->probation_statuses_id) == '2' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="probation_status_not_active">Not Active</label>
                                                    </div>
                                                    @if ($errors->has('probation_statuses_id'))
                                                        <span class="text-danger text-left">{{ $errors->first('probation_statuses_id') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            
                                        
                                    </div>
                
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label class="control-label" for="position_id">Current Position *</label>
                                            <div>
                                                <input id="position_id" name="position_id" type="text" class="required form-control" value="{{ old('position_id') ?? $personalDetail->position_id }}" placeholder="Enter Current Position">
                                                @if ($errors->has('position_id'))
                                                    <span class="text-danger text-left">{{ $errors->first('position_id') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    
                                        {{-- Current JobGrade --}}
                                    
                                        <div class="col-md-4">
                                            <label class="control-label" for="job_grade_id">Current Job Grade *</label>
                                            <div>
                                                <select id="job_grade_id" name="job_grade_id" class="required form-control">
                                                    <option value="">Select current Job Grade</option>
                                                    @foreach ($jobGrades as $jobGrade)
                                                        <option value="{{ $jobGrade->id }}" {{ old('job_grade_id', $personalDetail->job_grade_id) == $jobGrade->id ? 'selected' : '' }}>{{ $jobGrade->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('job_grade_id'))
                                                    <span class="text-danger text-left">{{ $errors->first('job_grade_id') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-4">
                                            <label class="control-label" for="previous_employment_year">Current Employment Year *</label>
                                            <div>
                                                <input id="previous_employment_year" name="previous_employment_year" type="month" class="required form-control" value="{{ old('previous_employment_year.0') ?? $personalDetail->previous_employment_year }}" max="{{ date('Y') }}">
                                                @if ($errors->has('previous_employment_year'))
                                                    <span class="text-danger text-left">{{ $errors->first('previous_employment_year') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                
                
                                    {{-- Previous Position --}}
<div class="form-group">
    <label class="control-label">Previous Work Experience</label>
    <div id="previous_work_experience_fields">
        {{-- Previous Position --}}
        <div class="form-group row">
            <div class="col-md-4">
                <label class="control-label" for="position">Previous Position *</label>
                <div class="">
                    <input id="previous_position" name="position[]" type="text" class="required form-control" value="{{ old('previous_position.0') }}">
                    @if ($errors->has('position'))
                        <span class="text-danger text-left">{{ $errors->first('previous_position') }}</span>
                    @endif
                </div>
            </div>

            {{-- Previous JobGrade --}}
            <div class="col-md-4">
                <label class="control-label" for="job_grade_id">Previous Job Grade *</label>
                <div class="">
                    <select id="job_grade_id" name="job_grade_id[]" class="required form-control">
                        <option value="">Select previous Job Grade</option>
                        @foreach ($jobGrades as $jobGrade)
                            <option value="{{ old('job_grade_id.0',$jobGrade->id) }}">{{ $jobGrade->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('job_grade_id'))
                        <span class="text-danger text-left">{{ $errors->first('job_grade_id') }}</span>
                    @endif
                </div>
            </div>

            {{-- Previous Employment Year --}}
            <div class="col-md-4">
                <label class="control-label" for="employment_year">Previous Employment Year *</label>
                <div class="">
                    <input id="employment_year" name="employment_year[]" type="month" class="required form-control" value="{{ old('employment_year.0') }}" max="{{ date('Y') }}">
                    @if ($errors->has('employment_year'))
                        <span class="text-danger text-left">{{ $errors->first('employment_year') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <button type="button" id="add_previous_work_experience" class="btn btn-info">Add Previous Work Experience</button>
</div>


                                 

                                
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="comments">Comments</label>
                                        <div>
                                            <textarea id="comments" name="comments" class="form-control">{{ $personalDetail->comments ?? old('comments') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                   
                         
                                    {{-- Submit --}}
                                    <div class="form-group  row">
                                        <button type="submit" class="btn btn-primary btn-rounded waves-light waves-effect width-md"><i class="mdi mdi-send-circle-outline"></i> Save Changes</button>
                                        
                                    </div>
                            </div>
                        </form>
                
                    </div>
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
                                    <div class="col-md-6">
                                        <label class="control-label">Relative *</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="relative_id" id="yes" value="1" {{ old('relative_id', $personaldetail->relative_id) == 'yes' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="yes">Yes </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="relative_id" id="no" value="0" {{ old('relative_id', $personaldetail->relative_id) == 'no' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="no">No</label>
                                        </div>
                                        @if ($errors->has('relative_id'))
                                            <span class="text-danger">{{ $errors->first('relative_id') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="name"> Name *</label>
                                        <div class="">
                                            <input id="name" name="name" value="{{ old('name', $personaldetail->name) }}" type="text" class="required form-control">
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                        
                                <div class="form-group  row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="job_title_id">Job Title *</label>
                                        <div class="">
                                            <select id="job_title_id" name="job_title_id" class="required form-control">
                                                <option value="">Select a job title</option>
                                                @foreach ($jobTitles as $jobTitle)
                                                    <option value="{{ old('job_title_id', $jobTitle->id) }}" {{ $personalDetail->job_title_id == $jobTitle->id ? 'selected' : '' }}>{{ $jobTitle->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @if ($errors->has('job_title_id'))
                                            <span class="text-danger text-left">{{ $errors->first('job_title_id') }}</span>
                                        @endif
                                    </div>
                                
                                    <div class="col-md-6">
                                        <label class="control-label" for="relationship">Relationship *</label>
                                        <div class="">
                                            <input type="text" id="relationship" name="relationship" class="required form-control" value="{{ old('relationship', $personalDetail->relationship) }}" placeholder="Enter relationship">
                                        </div>
                                        @if ($errors->has('relationship'))
                                            <span class="text-danger text-left">{{ $errors->first('relationship') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="department_id">Department *</label>
                                        <div>
                                            <select id="department_id" name="department_id" class="required form-control">
                                                <option value="">Select a department</option>
                                                @foreach ($departments as $department)
                                                    <option value="{{ old('department_id', $department->id) }}" {{ $personalDetail->department_id == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('department_id'))
                                                <span class="text-danger text-left">{{ $errors->first('department_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="study_leave">Study Leave *</label>
                                        <div>
                                            <select id="study_leave" name="study_leave" class="required form-control">
                                                <option value="">Select an option</option>
                                                <option value="1" {{ old('study_leave', $personalDetail->study_leave) == '1' ? 'selected' : '' }}>Yes</option>
                                                <option value="0" {{ old('study_leave', $personalDetail->study_leave) == '0' ? 'selected' : '' }}>No</option>
                                            </select>
                                        </div>
                                        @if ($errors->has('study_leave'))
                                            <span class="text-danger text-left">{{ $errors->first('study_leave') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row">
                            
                                    <div class="col-md-6">
                                        <label class="control-label" for="name">Start Date *</label>
                                        <div class="">
                                            <input id="start_date" name="start_date" value="{{ old('start_date', $personalDetail->start_date) }}" type="month" class="required form-control">
                                        </div>
                                        @if ($errors->has('start_date'))
                                            <span class="text-danger text-left">{{ $errors->first('start_date') }}</span>
                                        @endif
                                    </div>
                                
                                    <div class="col-md-6">
                                        <label class="control-label" for="name">End Date *</label>
                                        <div class="">
                                            <input id="end_date" value="{{ old('end_date', $personalDetail->end_date) }}" name="end_date" type="month" class="required form-control">
                                        </div>
                                        @if ($errors->has('end_date'))
                                            <span class="text-danger text-left">{{ $errors->first('end_date') }}</span>
                                        @endif
                                    </div>
                                                            
                                </div>
                                      
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="institution">Institution *</label>
                                        <div class="">
                                            <input type="text" id="institution" name="institution" class="required form-control" value="{{ old('institution', $personalDetail->institution) }}" placeholder="Enter institution name">
                                        </div>
                                        @if ($errors->has('institution'))
                                            <span class="text-danger text-left">{{ $errors->first('institution') }}</span>
                                        @endif
                                    </div>
                                
                                    <div class="col-md-6">
                                        <label class="control-label" for="course">Course *</label>
                                        <div class="">
                                            <input type="text" id="course" name="course" class="required form-control" value="{{ old('course', $personalDetail->course) }}" placeholder="Enter course name">
                                        </div>
                                        @if ($errors->has('course'))
                                            <span class="text-danger text-left">{{ $errors->first('course') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                        
                                <div class="form-group  row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="certificate">Certificate Attained *</label>
                                        <div class="">
                                            <input type="text" id="certificate" name="certificate" class="required form-control" value="{{ old('certificate', $personalDetail->certificate ?? '') }}" placeholder="Enter certificate name">
                                        </div>
                                        @if ($errors->has('certificate'))
                                            <span class="text-danger text-left">{{ $errors->first('certificate') }}</span>
                                        @endif
                                    </div>
                                
                                    <div class="col-md-6">
                                        <label class="control-label" for="name"> Date *</label>
                                        <div class="">
                                            <input id="date" value="{{ old('date', $personalDetail->date ?? '') }}" name="date" type="month" class="required form-control">
                                        </div>
                                        @if ($errors->has('date'))
                                            <span class="text-danger text-left">{{ $errors->first('date') }}</span>
                                        @endif
                                    </div>
                                </div>
                                 
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="approving_signatory">Approving Signatory *</label>
                                        <div class="">
                                            <input id="approving_signatory" value="{{ $personalDetail->approving_signatory ?? old('approving_signatory') }}" name="approving_signatory" type="text" class="required form-control">
                                        </div>
                                        @if ($errors->has('approving_signatory'))
                                            <span class="text-danger text-left">{{ $errors->first('approving_signatory') }}</span>
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
            <div class="tab-pane" id="settings1">
                <div class="col-md-12">
                    <div class="card-box "  style="border:1px solid #ccc">
                        <div class="card-header mb-2" style="border:1px solid #ccc">
                             <h4 class="header-title"><b>HR Audit BioData Form</b></h4>
                        </div>
                
                        <form id="basic-form" action="{{ route('personal.details.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div>
                                <h3>Payment Details</h3>
               
                    <div class="form-group  row">
                       <!-- HTML Code -->
            
                        <div class="row payment-month-container">
                            <div class="col-md-6 payment-month-item">
                                <label for="date">Payment Month *</label>
                                <div class="input-group">
                                    <input id="date" value="{{old('date')}}" name="date" type="date" class="required form-control" style="width: 50%;">
                                    <button type="button" class="btn btn-danger remove-payment-month">Remove</button>
                                </div>
                                <div class="input-group">
                                    <input id="payment_month" value="{{ old('payment_month') }}" name="payment_month" type="text" class="required form-control">
                                </div>
                                @if ($errors->has('payment_month'))
                                    <span class="text-danger text-left">{{ $errors->first('payment_month') }}</span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                        <button type="button" class="btn btn-primary add-payment-month">Add Payment Month</button>
                    </div>
            
                    <div class="form-group  row">
                        <button type="submit" class="btn btn-primary btn-rounded waves-light waves-effect width-md"><i class="mdi mdi-send-circle-outline"></i> Save</button>
                        
                    </div>
            
                    </div>
            </form>
            </div>
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