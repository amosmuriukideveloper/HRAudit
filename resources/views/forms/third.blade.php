<x-app-layout>
    
    <div class="col-md-12">
        <div class="card-box"  style="border:1px solid #ccc">
            <div class="card-header mb-2" style="border:1px solid #ccc">
                <h4 class="header-title"><b>HR Audit BioData Form</b></h4>
      </div>
 
           

            <form id="basic-form" action="{{ route('employment.change.store', $id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div>
                    <h3>Employment Changes/Moves</h3>
             
                        <div class="form-group  row">

                            <div class="col-md-6">
                                <label class="control-label">Relative *</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="relative_id" id="yes" value="1" {{ old('relative_id') == 'yes' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="yes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="relative_id" id="no" value="0" {{ old('relative_id') == 'no' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="no">No</label>
                                </div>
                                @if ($errors->has('relative_id'))
                                    <span class="text-danger">{{ $errors->first('relative_id') }}</span>
                                @endif
                            </div>
                          
                             <div class="col-md-6">
                                <label class="control-label" for="name"> Name *</label>
                                <div class="">
                                    <input id="name" name="name" value="{{old('name')}}" type="text" class="required form-control">
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
                                        <input id="id_no" name="id_no" type="text" value="{{old('id_no')}}" class="required form-control">
                                    </div> 
                                    @if ($errors->has('id_no'))
                                <span class="text-danger text-left">{{ $errors->first('id_no') }}</span>
                                @endif
                                </div>

                                <div class="col-md-6">
                                    <label class="control-label" for="job_title">Job Title *</label>
                                    <div class="">
                                        <select id="job_title_id" name="job_title_id" class="required form-control">
                                            <option value="">Select a job title</option>
                                            @foreach ($jobTitles as $jobTitle)
                                                <option value="{{ old('job_title_id',$jobTitle->id) }}">{{ $jobTitle->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('job_title_id'))
                                        <span class="text-danger text-left">{{ $errors->first('job_title_id') }}</span>
                                    @endif
                                </div>
                                
                            
                        </div>

                        
                        <div class="form-group  row">
                            <div class="col-md-6">
                                <label class="control-label" for="relationship">Relationship *</label>
                                <div class="">
                                    <select id="relationship_id" name="relationship_id" class="required form-control">
                                        <option value="">Select a relationship</option>
                                        @foreach ($relationships as $relationship)
                                            <option value="{{ old('relationship_id',$relationship->id) }}">{{ $relationship->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if ($errors->has('relationship_id'))
                                    <span class="text-danger text-left">{{ $errors->first('relationship_id') }}</span>
                                @endif
                            </div>
                            

                            <div class="col-md-6">
                                <label class="control-label" for="department_id">Department *</label>
                                <div class="">
                                    <select id="department_id" name="department_id" class="required form-control">
                                        <option value="">Select a department</option>
                                        @foreach ($departments as $department)
                                            <option value="{{old('department_id', $department->id )}}">{{ $department->name }}</option>
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
                                    <select id="study_leave_id" name="study_leave_id" class="required form-control">
                                        <option value="">Select an option</option>
                                        <option value="1" {{ old('study_leave_id') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ old('study_leave_id') == 'No' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                                @if ($errors->has('study_leave_id'))
                                    <span class="text-danger text-left">{{ $errors->first('study_leave_id') }}</span>
                                @endif
                            </div>
                            

                            <div class="col-md-6">
                                <label class="control-label" for="name"> Start Date *</label>
                            <div class="">
                                <input id="start_date" name="start_date" value="{{old('start_date')}}" type="date" class="required form-control">
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
                                <span class="text-danger text-left">{{ $errors->first('end_date') }}</span>
                                @endif
                                </div>

                            
                                <div class="col-md-6">
                                    <label class="control-label" for="institution_id">Institution *</label>
                                    <div class="">
                                        <select id="institution_id" name="institution_id" class="required form-control">
                                            <option value="">Select an institution</option>
                                            @foreach ($institutions as $institution)
                                                <option value="{{ $institution->id }}" {{ old('institution_id') == $institution->id ? 'selected' : '' }}>
                                                    {{ $institution->name }}
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
                                       
                                        <select id="course-select" name="course_id" class="required form-control" >
                                            <option value="">Select a course</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('course_id'))
                                        <span class="text-danger text-left">{{ $errors->first('course_id') }}</span>
                                    @endif
                                </div>
                                
                              
                                
    
                                <div class="col-md-6">
                                    <label class="control-label" for="certificate_id"> Certificate Attained *</label>
                                    <div class="">
                                        <select id="certificate_id" name="certificate_id" class="required form-control">
                                            <option value="">Select a certificate</option>
                                            @foreach ($certificates as $certificate)
                                                <option value="{{ $certificate->id }}" {{ old('certificate_id') == $certificate->id ? 'selected' : '' }}>{{ $certificate->name }}</option>
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
                                            <input id="date" value="{{old('date')}}" name="date" type="date" class="required form-control">
                                    </div>
                                    @if ($errors->has('date'))
                                        <span class="text-danger text-left">{{ $errors->first('date') }}</span>
                                        @endif
                                        </div>

                                        <div class="col-md-6">
                                            <label class="control-label" for="approving_signatory"> Approving Signatory *</label>
                                            <div class="">
                                                <input id="approving_signatory" value="{{ old('approving_signatory') }}" name="approving_signatory" type="text" class="required form-control">
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
                                                    <option value="{{ $changeType->id }}" {{ old('change_type_id') == $changeType->id ? 'selected' : '' }}>{{ $changeType->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @if ($errors->has('change_type_id'))
                                            <span class="text-danger text-left">{{ $errors->first('change_type_id') }}</span>
                                        @endif
                                    </div>
                                    

                                  </div>


                        <div class="form-group  row">
                            <button type="submit" class="btn btn-primary btn-rounded waves-light waves-effect width-md"><i class="mdi mdi-send-circle-outline" ></i> Next Section : Employment Details</button>
                         
                        </div>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- End row -->
</x-app-layout>


