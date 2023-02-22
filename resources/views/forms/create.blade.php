<x-app-layout>
    
                                <div class="col-md-12">
                                    <div class="card-box "  style="border:1px solid #ccc">
                                        <div class="card-header mb-2" style="border:1px solid #ccc">
                                             <h4 class="header-title"><b>HR Audit BioData Form</b></h4>
                                        </div>
                                        <form id="basic-form" action="{{ route('personal.details.store', $id)}}" method="POST" enctype="multipart/form-data">
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
                                                                <label class="control-label" for="disability_status_id">Disability Status *</label>
                                                                <div class="">
                                                                    <select id="disability_status_id" name="disability_status_id" class="required form-control">
                                                                        <option value="">Select a disability status</option>
                                                                        @foreach ($disabilityStatuses as $disabilityStatus)
                                                                            <option value="{{ $disabilityStatus->id }}">{{ $disabilityStatus->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                           
                                                    </div>


                                                    


                                                    <div class="form-group  row">
                                                        <div class="col-md-6">
                                                            <label class="control-label" for="name"> Passport Photo *</label>
                                                        <div class="">
                                                            <input id="passport_photo" value="{{old('passport_photo')}}"name="passport_photo" type="file" class="required form-control">
                                                        </div>
                                                        @if ($errors->has('passport_photo'))
                                                            <span class="text-danger text-left">{{ $errors->first('passport_photo') }}</span>
                                                            @endif
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
                                                            <label class="control-label" for="ethnicity_id">Ethnicity *</label>
                                                            <div class="">
                                                                <select id="ethnicity_id" name="ethnicity_id" class="required form-control">
                                                                    <option value="">Select an Ethnicity</option>
                                                                    @foreach ($ethnicities as $ethnicity)
                                                                        <option value="{{ $ethnicity->id }}">{{ $ethnicity->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
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