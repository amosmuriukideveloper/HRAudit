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
            
            
                                           
            
                                        <div class="col-md-6">
                                            <label class="control-label" for="disability_status_id">Disability Status *</label>
                                            <div class="">
                                                <select id="disability_status_id" name="disability_status_id" class="required form-control">
                                                    <option value="">Select a disability status</option>
                                                    @foreach ($disabilityStatuses as $disabilityStatus)
                                                        <option value="{{ $disabilityStatus->id }}" {{ $personalDetail->disability_status_id == $disabilityStatus->id ? 'selected' : '' }}>{{ $disabilityStatus->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('disability_status_id'))
                                                    <span class="text-danger text-left">{{ $errors->first('disability_status_id') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                           
                                    </div>
            
            
                                    
            
            
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label class="control-label" for="passport_photo">Passport Photo *</label>
                                            <div class="">
                                                <input id="passport_photo" name="passport_photo" type="file" class="required form-control" onchange="previewImage(event)">
                                                <img id="preview" src="#" alt="Preview" style="display: none; max-width: 100%;">
                                            </div>
                                            @if ($errors->has('passport_photo'))
                                                <span class="text-danger text-left">{{ $errors->first('passport_photo') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function previewImage(event) {
                                            var input = event.target;
                                            var reader = new FileReader();
                                            reader.onload = function() {
                                                var img = document.getElementById('preview');
                                                img.src = reader.result;
                                                img.style.display = 'block';
                                            };
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    </script>
                                    
                                    
                                    
            
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
                       
                
                        <form id="basic-form" action="{{ route('employment.details.store')}}" method="POST" enctype="multipart/form-data">
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
                                                        <option value="{{ $department->id }}" {{ $personalDetail->department_id == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
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
                                                <input id="appointment_letter_id" value="{{ old('appointment_letter_id', $personalDetail->appointment_letter_id) }}" name="appointment_letter_id" type="file" class="required form-control">
                                            </div>
                                            @if ($errors->has('appointment_letter_id'))
                                                <span class="text-danger text-left">{{ $errors->first('appointment_letter_id') }}</span>
                                            @endif
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
                                                <div class="">
                                                    <select id="probation_statuses_id" name="probation_statuses_id" class="required form-control">
                                                        <option value="">Select a probation status</option>
                                                        @foreach ($probations as $probation)
                                                            <option value="{{ $probation->id }}" {{ $personalDetail->probation_statuses_id == $probation->id ? 'selected' : '' }}>{{ $probation->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('probation_statuses_id'))
                                                        <span class="text-danger text-left">{{ $errors->first('probation_statuses_id') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                        
                                    </div>
                
                                {{-- current position --}}
                                    <div class="form-group  row">
                                        <div class="col-md-6">
                                            <label class="control-label" for="position_id">Current Position *</label>
                                            <div class="">
                                                <select id="position_id" name="position_id" class="required form-control">
                                                    <option value="">Select Current Position</option>
                                                    @foreach ($positions as $position)
                                                        <option value="{{ $position->id }}" {{  $personalDetail->position_id == $position->id ? 'selected' : '' }}>{{ $position->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('position_id'))
                                                    <span class="text-danger text-left">{{ $errors->first('position_id') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        
                
                
                                            {{-- Current JobGrade --}}
                
                                            <div class="col-md-6">
                                                <label class="control-label" for="job_grade_id">Current Job Grade *</label>
                                                <div class="">
                                                    <select id="job_grade_id" name="job_grade_id" class="required form-control">
                                                        <option value="">Select Current Job Grade</option>
                                                        @foreach ($jobGrades as $jobGrade)
                                                            <option value="{{ $jobGrade->id }}" {{ $personalDetail->job_grade_id == $jobGrade->id ? 'selected' : '' }}>{{ $jobGrade->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('job_grade_id'))
                                                    <span class="text-danger text-left">{{ $errors->first('job_grade_id') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                    </div>
                
                
                                    {{-- Previous Position --}}
                                    <div class="form-group  row">
                                        <div class="col-md-6">
                                            <label class="control-label" for="position_id">Previous Position *</label>
                                            <div class="">
                                                <select id="position_id" name="position_id" class="required form-control">
                                                    <option value="">Select Previous Position</option>
                                                    @foreach ($positions as $position)
                                                        <option value="{{ $position->id }}" {{  $personalDetail->position_id == $position->id ? 'selected' : '' }}>{{ $position->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('position_id'))
                                                    <span class="text-danger text-left">{{ $errors->first('position_id') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        
                
                                        {{-- Previous JobGrade --}}
                                        <div class="col-md-6">
                                            <label class="control-label" for="job_grade_id">Previous Job Grade *</label>
                                            <div class="">
                                                <select id="job_grade_id" name="job_grade_id" class="required form-control">
                                                    <option value="">Previous Job Grade</option>
                                                    @foreach ($jobGrades as $jobGrade)
                                                        <option value="{{ $jobGrade->id }}" {{  $personalDetail->job_grade_id == $jobGrade->id ? 'selected' : '' }}>{{ $jobGrade->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('job_grade_id'))
                                                <span class="text-danger text-left">{{ $errors->first('job_grade_id') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        
                                </div>
                
                
                                    {{-- Academic Certificate --}}
                                    <div class="form-group  row">
                                        {{-- Academic Certificate --}}
                                        <div class="col-md-6">
                                            <label class="control-label" for="employee_certificate">Academic Certificate *</label>
                                            <div class="">
                                                <input id="employee_certificate" name="employee_certificate" value="{{ old('employee_certificate', $personalDetail->employee_certificate) }}" type="text" class="required form-control">
                                                @if ($errors->has('employee_certificate'))
                                                    <span class="text-danger text-left">{{ $errors->first('employee_certificate') }}</span>
                                                @endif
                                            </div>
                                        </div>
                
                                        {{-- Professional Certificate --}}
                                        <div class="col-md-6">
                                        <label class="control-label" for="professional_certificate">Professional Certificate *</label>
                                        <div class="">
                                            <input id="professional_certificate" name="professional_certificate" value="{{ old('professional_certificate', $personalDetail->professional_certificate) }}" type="text" class="required form-control">
                                            @if ($errors->has('professional_certificate'))
                                                <span class="text-danger text-left">{{ $errors->first('professional_certificate') }}</span>
                                            @endif
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
                       
                       
                
                        <form id="basic-form" action="{{ route('employment.change.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div>
                               
                         
                                   
                
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label class="control-label">Relative *</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="relative" id="yes" value="yes" {{ old('relative', $personalDetail->relative) == 'yes' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="male">Yes</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="relative" id="no" value="no" {{ old('relative', $personalDetail->relative) == 'no' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="female">No</label>
                                                </div>
                                                @if ($errors->has('relative'))
                                                    <span class="text-danger">{{ $errors->first('relative') }}</span>
                                                @endif
                                            </div>

                                            <div class="col-md-6">
                                                <label class="control-label" for="name">Name *</label>
                                                <div class="">
                                                    <input id="name" name="name" value="{{ old('name', $personalDetail->name) }}" type="text" class="required form-control">
                                                    @if ($errors->has('name'))
                                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        
                                      
                                      
                                        
                                         
                                 
                
                
                                    <div class="form-group  row">
                                        <div class="col-md-6">
                                            <label class="control-label" for="id_no">ID No. *</label>
                                            <div>
                                                <input id="id_no" name="id_no" type="text" value="{{ old('id_no', $personalDetail->id_no) }}" class="required form-control">
                                                @if ($errors->has('id_no'))
                                                    <span class="text-danger text-left">{{ $errors->first('id_no') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    
                                    
                                  
                                        <div class="col-md-6">
                                            <label class="control-label" for="job_title">Job Title *</label>
                                            <div>
                                                <select id="job_title" name="job_title" class="required form-control">
                                                    <option value="">Select a job title</option>
                                                    @foreach ($jobTitles as $jobTitle)
                                                        <option value="{{ $jobTitle->id }}" {{ $personalDetail->job_title == $jobTitle->id ? 'selected' : '' }}>{{ $jobTitle->title }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('job_title'))
                                                    <span class="text-danger text-left">{{ $errors->first('job_title') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                
                                    
                                    <div class="form-group  row">
                                        <div class="col-md-6">
                                            <label class="control-label" for="relationship">Relationship *</label>
                                            <div class="">
                                                <select id="relationship" name="relationship" class="required form-control">
                                                    <option value="">Select a relationship</option>
                                                    @foreach ($relationships as $relationship)
                                                        <option value="{{ $relationship->id }}">{{ $personalDetail->relationship == $relationship->id ? 'selected' : '' }}>{{ $relationship->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @if ($errors->has('relationship'))
                                                <span class="text-danger text-left">{{ $errors->first('relationship') }}</span>
                                            @endif
                                        </div>
                                        
                
                                        <div class="col-md-6">
                                            <label class="control-label" for="department_id">Department *</label>
                                            <div class="">
                                                <select id="department_id" name="department_id" class="required form-control">
                                                    <option value="">Select a department</option>
                                                    @foreach ($departments as $department)
                                                        <option value="{{ $department->id }}">{{ $personalDetail->department == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('department_id'))
                                                <span class="text-danger text-left">{{ $errors->first('department_id') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                           
                                    </div>
                
                
                                    
                
                
                                    <div class="form-group  row">
                                        <div class="col-md-6">
                                            <label class="control-label" for="study_leave">Study Leave *</label>
                                            <div class="">
                                                <select id="study_leave" name="study_leave" class="required form-control">
                                                    <option value="">Select an option</option>
                                                    <option value="Yes"{{ $personalDetail->study_leave == 'yes' ? 'checked' : '' }}>Yes</option>
                                                    <option value="No" {{ $personalDetail->study_leave == 'no' ? 'checked' : '' }}>No</option>
                                                </select>
                                            </div>
                                            @if ($errors->has('study_leave'))
                                                <span class="text-danger text-left">{{ $errors->first('study_leave') }}</span>
                                            @endif
                                        </div>
                                        
                
                                        <div class="col-md-6">
                                            <label class="control-label" for="name"> Start Date *</label>
                                        <div class="">
                                            <input id="start_date" name="start_date" value="{{old('start_date',  $personalDetail->start_date)}}" type="date" class="required form-control">
                                        </div>
                                        @if ($errors->has('start_date'))
                                            <span class="text-danger text-left">{{ $errors->first('start_date') }}</span>
                                            @endif
                                        </div>
                                        
                                    </div>
                
                
                                   
                                    <div class="form-group  row">
                                        <div class="col-md-6">
                                            <label class="control-label" for="name"> End Date *</label>
                                            <div class="">
                                                <input id="end_date" value="{{old('end_date')}}" name="end_date" type="date" class="required form-control">
                                        </div>
                                        @if ($errors->has('end_date'))
                                            <span class="text-danger text-left">{{ $errors->first('end_date',  $personalDetail->end_date) }}</span>
                                            @endif
                                            </div>
                
                                        
                                            <div class="col-md-6">
                                                <label class="control-label" for="institution_id">Institution *</label>
                                                <div class="">
                                                    <select id="institution_id" name="institution_id" class="required form-control">
                                                        <option value="">Select an institution</option>
                                                        @foreach ($institutions as $institution)
                                                            <option value="{{ $institution->id }}" {{ $personalDetail->institution == $institution->id ? 'selected' : '' }}>{{ $institution->name }}</option>
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @if ($errors->has('institution_id'))
                                                    <span class="text-danger text-left">{{ $errors->first('institution_id') }}</span>
                                                @endif
                                            </div>
                                            
                                          </div>
                
                                          <div class="form-group  row">
                                            <div class="col-md-6">
                                                <label class="control-label" for="name"> Course *</label>
                                                <div class="">
                                                    <input id="course" value="{{ old('course') }}" name="course" type="text" class="required form-control">
                                                    <select id="course-select" name="course_id" class="required form-control" style="display:none">
                                                        <option value="">Select a course</option>
                                                        @foreach ($courses as $course)
                                                            <option value="{{ $course->id }}">{{ $personalDetail->course == $course->id ? 'selected' : '' }}>{{ $course->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @if ($errors->has('course'))
                                                    <span class="text-danger text-left">{{ $errors->first('course') }}</span>
                                                @endif
                                            </div>
                                            
                                            <script>
                                                $('#course').on('input', function() {
                                                    var searchText = $(this).val();
                                                    if (searchText.length >= 2) {
                                                        $.ajax({
                                                            type: 'GET',
                                                            url: '/courses/search',
                                                            data: { search: searchText },
                                                            success: function(response) {
                                                                var options = '';
                                                                for (var i = 0; i < response.length; i++) {
                                                                    options += '<option value="' + response[i].id + '">' + response[i].name + '</option>';
                                                                }
                                                                $('#course-select').html(options).show();
                                                            },
                                                            error: function(xhr, status, error) {
                                                                console.error(error);
                                                            }
                                                        });
                                                    } else {
                                                        $('#course-select').hide();
                                                    }
                                                });
                                            </script>
                                            
                
                                            <div class="col-md-6">
                                                <label class="control-label" for="certificate_id"> Certificate Attained *</label>
                                                <div class="">
                                                    <select id="certificate_id" name="certificate_id" class="required form-control">
                                                        <option value="">Select a certificate</option>
                                                        @foreach ($certificates as $certificate)
                                                            <option value="{{ $certificate->id }}" {{ $personalDetail->certificate == $certificate->id ? 'selected' : '' }}>{{ $certificate->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @if ($errors->has('certificate_id'))
                                                    <span class="text-danger text-left">{{ $errors->first('certificate_id') }}</span>
                                                @endif
                                            </div>
                                            
                                              </div>
                
                                              <div class="form-group  row">
                                                <div class="col-md-6">
                                                    <label class="control-label" for="name"> Date *</label>
                                                    <div class="">
                                                        <input id="date" value="{{old('date',  $personalDetail->date)}}" name="date" type="date" class="required form-control">
                                                </div>
                                                @if ($errors->has('date'))
                                                    <span class="text-danger text-left">{{ $errors->first('date') }}</span>
                                                    @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label" for="approving_signatory"> Approving Signatory *</label>
                                                        <div class="">
                                                            <input id="approving_signatory" value="{{ old('approving_signatory',  $personalDetail->approving_signatory) }}" name="approving_signatory" type="text" class="required form-control">
                                                        </div>
                                                        @if ($errors->has('approving_signatory'))
                                                            <span class="text-danger text-left">{{ $errors->first('approving_signatory') }}</span>
                                                        @endif
                                                    </div>
                                                    
                                              </div>
                
                                              <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label class="control-label" for="change_type_id">Change Type *</label>
                                                    <div class="">
                                                        <select id="change_type_id" name="change_type_id" class="required form-control">
                                                            <option value="">Select a change type</option>
                                                            @foreach ($changeTypes as $changeType)
                                                                <option value="{{ $changeType->id }}" {{ $personalDetail->change_type == $changeType->id ? 'selected' : '' }}>{{ $changeType->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @if ($errors->has('change_type_id'))
                                                        <span class="text-danger text-left">{{ $errors->first('change_type_id') }}</span>
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
                    <div class="card-box" style="border:1px solid #ccc">
                        <div class="card-header mb-2" style="border:1px solid #ccc">
                            <h4 class="header-title"><b>HR Audit BioData Form</b></h4>
                       </div>
                       
            
                        <form id="basic-form" action="{{ route('payslip.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                                 <div class="form-group  row">
            
                                    <div class="col-md-6">
                                        <label class="payment_month" for="name"> Payment Month 1 *</label>
                                       
                                            <div class="">
                                                <input id="payment_month" value="{{ old('payment_month',  $personalDetail->payment_month) }}" name="payment_month" type="text" class="required form-control">
                                            </div>
                                            @if ($errors->has('payment_month'))
                                                <span class="text-danger text-left">{{ $errors->first('payment_month') }}</span>
                                            @endif
                                        </div>
            
                                        <div class="col-md-6">
                                            <label class="payment_month" for="name"> Payment Month 2*</label>
                                           
                                                <div class="">
                                                    <input id="payment_month" value="{{ old('payment_month',  $personalDetail->payment_month) }}" name="payment_month" type="text" class="required form-control">
                                                </div>
                                                @if ($errors->has('payment_month'))
                                                    <span class="text-danger text-left">{{ $errors->first('payment_month') }}</span>
                                                @endif
                                        </div>
            
                                         
                                        <div class="col-md-6">
                                            <label class="payment_month" for="name"> Payment Month 3*</label>
                                           
                                                <div class="">
                                                    <input id="payment_month" value="{{ old('payment_month',  $personalDetail->payment_month) }}" name="payment_month" type="text" class="required form-control">
                                                </div>
                                                @if ($errors->has('payment_month'))
                                                    <span class="text-danger text-left">{{ $errors->first('payment_month') }}</span>
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
        </div>
    </div>



</x-app-layout>