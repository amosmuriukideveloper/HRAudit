<x-app-layout>
    
                                <div class="col-md-12">
                                    <div class="card-box "  style="border:1px solid #ccc">
                                        <div class="card-header mb-2" style="border:1px solid #ccc">
                                             <h4 class="header-title"><b>HR Audit BioData Form</b></h4>
                                        </div>
                                        <form id="basic-form" action="{{ route('personal.details.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('POST')
                                            <div>
                                                <h3>Personal Details</h3>
                                         
                                                    <div class="form-group  row">
                                                         <div class="col-md-6">
                                                            <label class="control-label" for="name"> Payroll Number *</label>
                                                            <div class="">
                                                                <input id="payroll_number" value="{{old('payroll_number')}}" name="payroll_number" type="text" class="required form-control">
                                                            </div>
                                                            
                                                            @if ($errors->has('payroll_number'))
                                                            <span class="text-danger text-left">{{ $errors->first('payroll_number') }}</span>
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
                                                                <label class="control-label" for="name"> Age *</label>
                                                            <div class="">
                                                                <input id="age" name="age" type="number"  value="{{old('age')}}"class="required form-control">
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
                                                                <input class="form-check-input" type="radio" name="gender" id="male" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                                                                <label class="form-check-label" for="male">Male</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                                                                <label class="form-check-label" for="female">Female</label>
                                                            </div>
                                                            @if ($errors->has('gender'))
                                                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                                                            @endif
                                                        </div>


                                                           

                                                        <div class="col-md-6">
                                                            <label class="control-label" for="disability_status">Disability Status *</label>
                                                            <div class="">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" name="disability_status" value="yes" {{ old('disability_status') == 'yes' ? 'checked' : '' }}> Yes
                                                                </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" name="disability_status" value="no" {{ old('disability_status') == 'no' ? 'checked' : '' }}> No
                                                                </label>
                                                            </div>
                                                            @if ($errors->has('disability_status'))
                                                                <span class="text-danger text-left">{{ $errors->first('disability_status') }}</span>
                                                            @endif
                                                        </div>
                                                           
                                                    </div>


                                                    


                                                    <div class="form-group  row">
                                                        <div class="col-md-6">
                                                            <label class="control-label" for="passport_photo">Passport Photo *</label>
                                                            <div class="">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="passport_photo" id="passport_photo_yes" value="yes" {{ old('passport_photo') == 'yes' ? 'checked' : '' }}>
                                                                    <label class="form-check-label" for="passport_photo_yes">Yes</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="passport_photo" id="passport_photo_no" value="no" {{ old('passport_photo') == 'no' ? 'checked' : '' }}>
                                                                    <label class="form-check-label" for="passport_photo_no">No</label>
                                                                </div>
                                                            </div>
                                                            @if ($errors->has('passport_photo'))
                                                                <span class="text-danger text-left">{{ $errors->first('passport_photo') }}</span>
                                                            @endif
                                                        </div>
                                                        
                                                        
                                                       
                                                        
                                               
                                                        <div class="col-md-6">
                                                            <label class="control-label" for="name"> Tel/Mobile *</label>
                                                        <div class="">
                                                            <input id="tel_mobile" name="tel_mobile" value="{{old('tel_mobile')}}" type="number" class="required form-control">
                                                        </div>
                                                        @if ($errors->has('tel_mobile'))
                                                            <span class="text-danger text-left">{{ $errors->first('tel_mobile') }}</span>
                                                            @endif
                                                        </div>
                                                        
                                                    </div>


                                                   
                                                    <div class="form-group  row">
                                                        <div class="col-md-6">
                                                            <label class="control-label" for="ethnicity">Ethnicity *</label>
                                                            <div class="">
                                                                <select id="ethnicity" name="ethnicity" class="required form-control">
                                                                    <option value="">Select an Ethnicity</option>
                                                                    @foreach ($ethnicities as $ethnicity)
                                                                        <option value="{{ $ethnicity->id }}">{{ $ethnicity->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
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