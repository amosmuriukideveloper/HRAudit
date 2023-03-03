<x-app-layout>

  
    
    <div class="col-md-12">
        <div class="card-box" style="border:1px solid #ccc">
            <div class="card-header mb-2" style="border:1px solid #ccc">
                          <h4 class="header-title"><b>HR Audit BioData Form</b></h4>
                </div>
           

            <form id="basic-form" action="{{ route('employment.details.store', $id)}}" method="POST" enctype="multipart/form-data">
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
                                            <option value="{{old('department_id', $department->id) }}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('department_id'))
                                    <span class="text-danger text-left">{{ $errors->first('department_id') }}</span>
                                    @endif
                                </div>
                            </div>


                             {{-- appointment_letter --}}

                             <div class="col-md-6">
                                <label class="control-label" for="name"> Appointment Letter *</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="appointment_letter" id="yes" value="1" {{ old('appointment_letter') == 'yes' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="yes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="appointment_letter" id="no" value="0" {{ old('appointment_letter') == 'no' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="no">No</label>
                                </div>
                                @if ($errors->has('appointment_letter'))
                                <span class="text-danger text-left">{{ $errors->first('appointment_letter') }}</span>
                                @endif
                             </div>
                            
                        </div>

                        {{-- employment_term_id --}}

                        <div class="form-group  row">
                            <div class="col-md-6">
                                <label class="control-label" for="employment_term_id_id">Employment Term *</label>
                                <div class="">
                                    <select id="employment_term_id" name="employment_term_id" class="required form-control">
                                        <option value="">Select a employment term</option>
                                        @foreach ($employmentTerms as $employmentTerm)
                                            <option value="{{ old('employment_term_id', $employmentTerm->id) }}">{{ $employmentTerm->name }}</option>
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
                                            <input class="form-check-input" type="radio" name="probation_statuses_id" id="probation_status_active" value="1" {{ old('probation_statuses_id') == '1' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="probation_status_active">Active</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="probation_statuses_id" id="probation_status_not_active" value="2" {{ old('probation_statuses_id') == '2' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="probation_status_not_active">Not Active</label>
                                        </div>
                                        @if ($errors->has('probation_statuses_id'))
                                            <span class="text-danger text-left">{{ $errors->first('probation_statuses_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                
                            
                        </div>

                    {{-- current position --}}
                        <div class="form-group  row">
                            <div class="col-md-4">
                                <label class="control-label" for="position_id">Current Position *</label>
                                <div class="">
                                    <input id="position_id" name="position_id" type="text" class="required form-control" value="{{ old('position_id') }}" placeholder="Enter Current Position">
                                    @if ($errors->has('position_id'))
                                        <span class="text-danger text-left">{{ $errors->first('position_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            


                                {{-- Current JobGrade --}}

                                <div class="col-md-4">
                                    <label class="control-label" for="job_grade_id">Current Job Grade *</label>
                                    <div class="">
                                        <select id="job_grade_id" name="job_grade_id" class="required form-control">
                                            <option value="">Select current Job Grade</option>
                                            @foreach ($jobGrades as $jobGrade)
                                                <option value="{{ old('job_grade_id', $jobGrade->id) }}">{{ $jobGrade->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('job_grade_id'))
                                        <span class="text-danger text-left">{{ $errors->first('job_grade_id') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label class="control-label" for="previous_employment_year">Current Employment Year *</label>
                                    <div class="">
                                        <input id="previous_employment_year" name="previous_employment_year" type="month" class="required form-control" value="{{ old('previous_employment_year.0') }}" max="{{ date('Y') }}">
                                        @if ($errors->has('previous_employment_year'))
                                            <span class="text-danger text-left">{{ $errors->first('current_employment_year') }}</span>
                                        @endif
                                    </div>
                                </div>
                        </div>


                     {{-- Previous Work Experience --}}
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
            <textarea id="comments" name="comments" class="form-control">{{old('comments')}}</textarea>
        </div>
        @if ($errors->has('comments'))
            <span class="text-danger text-left">{{ $errors->first('comments') }}</span>
        @endif
    </div>
</div>
                      
                        {{-- Submit --}}
                        <div class="form-group  row">
                            <button type="submit" class="btn btn-primary btn-rounded waves-light waves-effect width-md"><i class="mdi mdi-send-circle-outline"></i> Next Section : Employment Changes/Moves</button>
                            
                        </div>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- End row -->
</x-app-layout>



<script>
    $(document).ready(function(){
        var max_fields = 10;
        var wrapper = $("#previous_work_experience_fields");
        var add_button = $("#add_previous_work_experience");

        var x = 0;
        $(add_button).click(function(e){
            e.preventDefault();
            if(x < max_fields){
                x++;
                $(wrapper).append(
                    '<div class="form-group row">'+
                        '<div class="col-md-4">'+
                            '<label class="control-label" for="previous_position">Previous Position *</label>'+
                            '<div class="">'+
                                '<input id="position" name="position[]" type="text" class="required form-control" value="{{ old('position') }}">'+
                            '</div>'+
                        '</div>'+

                        '<div class="col-md-4">'+
                            '<label class="control-label" for="job_grade_id">Previous Job Grade *</label>'+
                            '<div class="">'+
                                '<select id="job_grade_id" name="job_grade_id[]" class="required form-control">'+
                                    '<option value="">Select previous Job Grade</option>'+
                                    '@foreach ($jobGrades as $jobGrade)'+
                                        '<option value="{{ old('job_grade_id', $jobGrade->id) }}">{{ $jobGrade->name }}</option>'+
                                    '@endforeach'+
                                '</select>'+
                            '</div>'+
                        '</div>'+

                        '<div class="col-md-4">'+
                            '<label class="control-label" for="employment_year">Previous Employment Year *</label>'+
                            '<div class="">'+
                                '<input id="previous_employment_year" name="employment_year[]" type="date" class="required form-control" value="{{ old('previous_employment_year') }}" max="{{ date('Y') }}">'+
                            '</div>'+
                        '</div>'+

                        '<div class="col-md-12">'+
                            '<hr>'+
                        '</div>'+
                    '</div>'
                );
            }
        });
    });
</script>















