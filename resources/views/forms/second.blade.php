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
                                    <input class="form-check-input" type="radio" name="appointment_letter_id" id="yes" value="1" {{ old('appointment_letter_id') == 'yes' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="yes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="appointment_letter_id" id="no" value="0" {{ old('appointment_letter_id') == 'no' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="no">No</label>
                                </div>
                                @if ($errors->has('appointment_letter_id'))
                                <span class="text-danger text-left">{{ $errors->first('appointment_letter_id') }}</span>
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
                                    <div class="">
                                        <select id="probation_statuses_id" name="probation_statuses_id" class="required form-control">
                                            <option value="">Select a probation status</option>
                                            @foreach ($probations as $probation)
                                                <option value="{{ old('probation_statuses_id', $probation->id) }}">{{ $probation->name }}</option>
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
                                            <option value="{{ old('position_id', $position->id) }}">{{ $position->name }}</option>
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
                        </div>


                        {{-- Previous Position --}}
                        <div class="form-group  row">
                            <div class="col-md-6">
                                <label class="control-label" for="position_id">Previous Position *</label>
                                <div class="">
                                    <select id="position_id" name="position_id" class="required form-control">
                                        <option value="">Select Previous Position</option>
                                        @foreach ($positions as $position)
                                            <option value="{{old('position_id', $position->id) }}">{{ $position->name }}</option>
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
                                        <option value="">Select previous Job Grade</option>
                                        @foreach ($jobGrades as $jobGrade)
                                            <option value="{{ old('job_grade_id',$jobGrade->id) }}">{{ $jobGrade->name }}</option>
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
                            <div class="col-md-6">
                                <label class="control-label" for="name"> Academic Certificate *</label>
                            <div class="">
                                <input id="employee_certificate" name="employee_certificate" value="{{old('employee_certificate')}}"type="text" class="required form-control">
                            </div>
                            @if ($errors->has('employee_certificate'))
                            <span class="text-danger text-left">{{ $errors->first('employee_certificate') }}</span>
                            @endif
                            </div>

                        {{-- Professional Certificate --}}

                            <div class="col-md-6">
                                <label class="control-label" for="name"> Professional Certificate *</label>
                            <div class="">
                                <input id="employee_certificate" value="{{old('employee_certificate')}}" name="employee_certificate" type="text" class="required form-control">
                            </div>
                            @if ($errors->has('employee_certificate'))
                            <span class="text-danger text-left">{{ $errors->first('employee_certificate') }}</span>
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












