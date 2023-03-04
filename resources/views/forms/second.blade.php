<x-app-layout>

    <style>
        legend {
        background-color: #4fbde9;
        color: #fff;
        font-size: 12px;
        padding: 3px 6px;
        border-radius: 10px;
      }
      fieldset {
        border: 1px solid #ccc;
        padding: 12px;
        }

    .input-card{
        border:1px solid #348cd4;
        border-radius:10px;
    }

    </style>

    <div class="col-md-12">
        <div class="card-box input-card">
            <div class="card-header mb-2" style="border:1px solid #ccc">
                          <h4 class="header-title text-primary"><b>Step 2: Employee Details </b></h4>
                </div>


            <form id="basic-form" action="{{ route('employment.details.store', $id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("POST")

                <fieldset>

                    <legend> Fill In Details Below</legend>
                        <div class="form-group  row">

                            {{-- Department --}}
                            <div class="col-md-3">
                                <label class="control-label" for="department_id">Department  <span class="text-danger">*</span></label>
                                <div class="">
                                    <select id="department_id" name="department_id" class="select2 form-control">
                                        <option value="">Select Department</option>
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

                             <div class="col-md-3">
                                <label class="control-label" for="name"> Appointment Letter  <span class="text-danger">*</span></label>

                                <select name="appointment_letter" id="" class="select2 form-control">
                                    <option value="">Has Appointment Letter </option>
                                    <option value="1" {{ old('appointment_letter') == 'yes' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ old('appointment_letter') == 'no' ? 'selected' : '' }}>No</option>
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
                                            <option value="{{ old('employment_term_id', $employmentTerm->id) }}">{{ $employmentTerm->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('employment_term_id'))
                                    <span class="text-danger text-left">{{ $errors->first('employment_term_id') }}</span>
                                    @endif
                                </div>
                            </div>

                                {{-- probation_status --}}


                                <div class="col-md-3">
                                    <label class="control-label" for="probation_statuses_id">Probation Status <span class="text-danger">*</span></label>
                                    <div>

                                        <select name="probation_statuses_id" id="" class="select2 form-control">
                                            <option value="">Select Probation Status</option>
                                            <option value="1"  {{ old('probation_statuses_id') == '1' ? 'selected' : '' }}>Active</option>
                                            <option value="2" {{ old('probation_statuses_id') == '2' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                        @if ($errors->has('probation_statuses_id'))
                                            <span class="text-danger text-left">{{ $errors->first('probation_statuses_id') }}</span>
                                        @endif
                                    </div>
                                </div>



                        </div>




                     {{-- Previous Work Experience --}}
            <div class="form-group" >
                <label class="control-label">Work Experience</label>
                <div id="previous_work_experience_fields">
                    {{-- Previous Position --}}
                    <div class="form-group row  pb-2 pt-2" style="border-top:1px solid #ccc; border-bottom:1px solid #ccc">
                        <div class="col-md-3">
                            <label class="control-label" for="position">Position *</label>
                            <div class="">
                                <input  name="position[]" type="text" class="select2 form-control" value="{{ old('position.0') }}">
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
                                            <option value="{{ old('job_grade_id.0',$jobGrade->id) }}">{{ $jobGrade->name }}</option>
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
                                    <input id="employment_year" name="employment_year[]" type="date" class="select2 form-control" value="{{ old('employment_year.0') }}" max="{{ date('Y') }}">
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
                            <textarea id="comments" name="comments" class="form-control">{{old('comments')}}</textarea>
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
                    '<div class="form-group row pb-2">'+
                        '<div class="col-md-3">'+
                            '<label class="control-label" for="position">Position *</label>'+
                            '<div class="">'+
                                '<input  name="position[]" type="text" class="select2 form-control" >'+
                            '</div>'+
                        '</div>'+
                        '<div class="col-md-3">'+
                                    '<label class="control-label" for="position_type">Position Type <span class="text-danger">*</span></label>'+
                                    '<div class="">'+
                                        '<select name="position_type[]" id="" class="select2 form-control">'+
                                            '<option value="">Select Position Type</option>'+
                                            '<option value="current">Current</option>'+
                                            '<option value="previous">Previous</option>'+
                                        '</select>'+
                                    '</div>'+

                               ' </div>'+

                        '<div class="col-md-2">'+
                            '<label class="control-label" for="job_grade_id">Job Grade *</label>'+
                            '<div class="">'+
                                '<select id="job_grade_id" name="job_grade_id[]" class="select2 form-control">'+
                                    '<option value="">Select Job Grade</option>'+
                                    '@foreach ($jobGrades as $jobGrade)'+
                                        '<option value="{{ old('job_grade_id', $jobGrade->id) }}">{{ $jobGrade->name }}</option>'+
                                    '@endforeach'+
                                '</select>'+
                            '</div>'+
                        '</div>'+

                        '<div class="col-md-2">'+
                            '<label class="control-label" for="employment_year">Employment Year *</label>'+
                            '<div class="">'+
                                '<input id="employment_year" name="employment_year[]" type="date" class="select2 form-control" value="{{ old('employment_year') }}" max="{{ date('Y') }}">'+
                            '</div>'+
                        '</div>'+
                        '<div class="col-md-2">'+
                            '<button class=" m-3 btn btn-outline-danger btn-xs btn-rounded  remove_field" ><i class="mdi mdi-alpha-x-circle-outline"></i>Remove</button>'+
                         '</div>'+

                        '<div class="col-md-12" style="border-bottom:1px solid #ccc">'+

                        '</div>'+
                    '</div>'
                );
            }
        });
        $(wrapper).on("click",".remove_field", function(e){
            e.preventDefault();
            $(this).closest(".form-group").remove();
            x--;
        })
    });
</script>















