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
        padding: 10px;
        }

    .input-card{
        border:1px solid #348cd4;
        border-radius:10px;
    }

    </style>

                                <div class="col-md-12">
                                    <div class="card-box input-card">
                                        <div class="card-header mb-2" style="border:1px solid #dadbdc">
                                             <h4 class="header-title"><b>Personal Details : Step 1</b></h4>
                                        </div>
                                        <form id="basic-form" action="{{ route('personal.details.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('POST')
                                            <fieldset >
                                                <legend>Fill In Details Below</legend>
                                                    <div class="form-group  row">
                                                         <div class="col-md-4">
                                                            <label class="control-label" for="name"> Payroll Number <span class="text-danger">*</span></label>
                                                            <div class="">
                                                                <input id="payroll_number" value="{{old('payroll_number')}}" name="payroll_number" type="text" class="required form-control">
                                                            </div>

                                                            @if ($errors->has('payroll_number'))
                                                            <span class="text-danger text-left">{{ $errors->first('payroll_number') }}</span>
                                                            @endif
                                                         </div>
                                                         <div class="col-md-4">
                                                            <label class="control-label" for="name"> Name <span class="text-danger">*</span></label>
                                                            <div class="">
                                                                <input id="name" name="name" value="{{old('name')}}" type="text" class="required form-control">
                                                            </div>
                                                            @if ($errors->has('name'))
                                                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                                            @endif
                                                         </div>
                                                         <div class="col-md-4">
                                                            <label class="control-label" for="name"> ID No. <span class="text-danger">*</span></label>
                                                            <div class="">
                                                                <input id="id_no" name="id_no" type="text" value="{{old('id_no')}}" class="required form-control">
                                                            </div>
                                                            @if ($errors->has('id_no'))
                                                        <span class="text-danger text-left">{{ $errors->first('id_no') }}</span>
                                                        @endif
                                                        </div>

                                                    </div>


                                                    <div class="form-group  row">
                                                         <div class="col-md-4">
                                                                <label class="control-label" for="name"> Age <span class="text-danger">*</span></label>
                                                            <div class="">
                                                                <input id="age" name="age" type="number"  value="{{old('age')}}"class="required form-control">
                                                            </div>
                                                            @if ($errors->has('age'))
                                                            <span class="text-danger text-left">{{ $errors->first('age') }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="control-label">Gender <span class="text-danger">*</span></label>
                                                            <div class=" ">
                                                                <select name="gender" id="" class="select2 form-control">
                                                                    <option value="">Select Gender</option>
                                                                    <option value="male">Male</option>
                                                                    <option value="female">Female</option>
                                                                </select>
                                                            </div>
                                                            @if ($errors->has('gender'))
                                                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="control-label" for="disability_status">Disability Status <span class="text-danger">*</span></label>
                                                            <div class="">
                                                                <select name="disability_status" id="" class="select2 form-control">
                                                                    <option value="">Select Disability Status</option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                </select>
                                                            </div>
                                                            @if ($errors->has('disability_status'))
                                                                <span class="text-danger text-left">{{ $errors->first('disability_status') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group  row">
                                                        <div class="col-md-4">
                                                            <label class="control-label" for="passport_photo">Passport Photo </label>
                                                            <div class="">
                                                                <select name="passport_photo" id="" class="select2 form-control">
                                                                    <option value="">Passport Photo Available ?</option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                </select>
                                                            </div>
                                                            @if ($errors->has('passport_photo'))
                                                                <span class="text-danger text-left">{{ $errors->first('passport_photo') }}</span>
                                                            @endif
                                                        </div>


                                                        <div class="col-md-4">
                                                            <label class="control-label" for="name"> Tel/Mobile <span class="text-danger">*</span></label>
                                                            <div class="">
                                                                <input id="tel_mobile" name="tel_mobile" value="{{old('tel_mobile')}}" type="number" class="required form-control">
                                                            </div>
                                                            @if ($errors->has('tel_mobile'))
                                                                <span class="text-danger text-left">{{ $errors->first('tel_mobile') }}</span>
                                                                @endif
                                                            </div>

                                                        <div class="col-md-4">
                                                            <label class="control-label" for="ethnicity">Ethnicity <span class="text-danger">*</span></label>
                                                            <div class="">
                                                                <select id="ethnicity" name="ethnicity" class="select2 form-control">
                                                                    <option value="">Select an Ethnicity</option>
                                                                    @foreach ($ethnicities as $ethnicity)
                                                                        <option value="{{ $ethnicity->id }}">{{ $ethnicity->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @if ($errors->has('ethnicity'))
                                                                <span class="text-danger text-left">{{ $errors->first('ethnicity') }}</span>
                                                                @endif
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


                                                    <div class="form-group row" style="border-top:1px solid #dadbdc">
                                                        <div class="p-2" >
                                                          <button type="submit" class="btn btn-outline-info btn-rounded waves-light waves-effect width-md"><i class="mdi mdi-send-circle-outline" ></i> Next Section : Employment Details</button>

                                                        </div>

                                                    </div>
                                            </fieldset>
                                        </form>

                                    </div>
                                </div>
                            </div>

                            <!-- End row -->
</x-app-layout>

{{-- Script to handle adding and removing previous positions --}}
<script>
    $(document).ready(function() {
        // Add previous position
        $('.add-previous-position').click(function() {
            var $position = $('#previous_positions_container .form-group:first').clone();
            $position.find('input, select').val('').end().find('.remove-previous-position').removeClass('d-none');
            $('#previous_positions_container').append($position);
        });

        // Remove previous position
        $('#previous_positions_container').on('click', '.remove-previous-position', function() {
            if ($('#previous_positions_container .form-group').length > 1) {
                $(this).closest('.form-group').remove();
            }
        });
    });
</script>
