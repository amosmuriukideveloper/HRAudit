<x-app-layout>
    
    <div class="col-md-12">
        <div class="card-box "  style="border:1px solid #ccc">
            <div class="card-header mb-2" style="border:1px solid #ccc">
                 <h4 class="header-title"><b>HR Audit BioData Form</b></h4>
            </div>
            <form id="basic-form" action="{{ route('employee.certificate.store', $id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div>
                    <h3>Certificates</h3>
                               
                    <div class="form-group">
                        
                        <div class="row">
                            {{-- <div class="col-md-6">
                                <label class="control-label" for="kcpe_cpe">KCPE/CPE</label>
                                <div>
                                    <input id="kcpe_cpe_index_number" name="kcpe_cpe_index_number" type="text" class="form-control" placeholder="Index Number">
                                    <input id="kcpe_cpe_school" name="kcpe_cpe_school" type="text" class="form-control" placeholder="School">
                                    <input id="kcpe_cpe_certificate_number" name="kcpe_cpe_certificate_number" type="text" class="form-control" placeholder="Certificate Number">
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-6">
                                <label class="control-label" for="kcse_cse">KCSE/CSE</label>
                                <div>
                                    <input id="kcse_cse_index_number" name="kcse_cse_index_number" type="text" class="form-control" placeholder="Index Number">
                                    <input id="kcse_cse_school" name="kcse_cse_school" type="text" class="form-control" placeholder="School">
                                    <input id="kcse_cse_certificate_number" name="kcse_cse_certificate_number" type="text" class="form-control" placeholder="Certificate Number">
                                </div>
                            </div> --}}
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-6">
                                <label class="control-label" for="certificate">Certificate</label>
                                <div>
                                    <input id="certificate_index_number" name="certificate_index_number" type="text" class="form-control" placeholder="Index Number">
                                    <input id="certificate_school" name="certificate_school" type="text" class="form-control" placeholder="School">
                                    <input id="certificate_certificate_number" name="certificate_certificate_number" type="text" class="form-control" placeholder="Certificate Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="diploma">Diploma</label>
                                <div>
                                    <input id="diploma_index_number" name="diploma_index_number" type="text" class="form-control" placeholder="Index Number">
                                    <input id="diploma_school" name="diploma_school" type="text" class="form-control" placeholder="School">
                                    <input id="diploma_certificate_number" name="diploma_certificate_number" type="text" class="form-control" placeholder="Certificate Number">
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            {{-- <div class="col-md-6">
                                <label class="control-label" for="higher_diploma">Higher Diploma</label>
                                <div>
                                    <input id="higher_diploma_index_number" name="higher_diploma_index_number" type="text" class="form-control" placeholder="Index Number">
                                    <input id="higher_diploma_school" name="higher_diploma_school" type="text" class="form-control" placeholder="School">
                                </div> --}}
                                <div class="form-group">
                                  
                                    <div id="other_certificates">
                                        <!-- dynamic input fields for other certificates will be added here -->
                                    </div>
                                    <button type="button" class="btn btn-primary mt-4" onclick="addCertificate()">Add Certificate</button>
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

                            <div class="form-group row" >
                                <button type="submit" class="btn btn-primary btn-rounded waves-light waves-effect width-md"><i class="mdi mdi-send-circle-outline" ></i> Next Section : Employment Changes</button>
                             
                            </div>
                            

                       
                </div>
            </form>

        </div>
    </div>
</div>

<!-- End row -->
</x-app-layout>

<script>
    // function to add input fields for other certificates
    function addCertificate() {
        var container = document.createElement('div');
        container.classList.add('row');

        var titleDiv = document.createElement('div');
        titleDiv.classList.add('col-md-3');
        var titleInput = document.createElement('input');
        titleInput.classList.add('form-control');
        titleInput.placeholder = 'Cert Title';
        titleInput.name = 'name[]';
        titleDiv.appendChild(titleInput);
        container.appendChild(titleDiv);

        var indexDiv = document.createElement('div');
        indexDiv.classList.add('col-md-3');
        var indexInput = document.createElement('input');
        indexInput.classList.add('form-control');
        indexInput.placeholder = 'Index No/Regnumber';
        indexInput.name = 'index_number[]';
        indexDiv.appendChild(indexInput);
        container.appendChild(indexDiv);

        var schoolDiv = document.createElement('div');
        schoolDiv.classList.add('col-md-3');
        var schoolInput = document.createElement('input');
        schoolInput.classList.add('form-control');
        schoolInput.placeholder = 'School/Institution';
        schoolInput.name = 'school[]';
        schoolDiv.appendChild(schoolInput);
        container.appendChild(schoolDiv);

        var certificateDiv = document.createElement('div');
        certificateDiv.classList.add('col-md-3');
        var certificateInput = document.createElement('input');
        certificateInput.classList.add('form-control');
        certificateInput.placeholder = 'Cert No';
        certificateInput.name = 'certificate_number[]';
        certificateDiv.appendChild(certificateInput);
        container.appendChild(certificateDiv);

        var certificateDiv = document.createElement('div');
        certificateDiv.classList.add('col-md-3');
        var certificateInput = document.createElement('input');
        certificateInput.classList.add('form-control');
        certificateInput.placeholder = 'Cert Year';
        certificateInput.name = 'certificate_year[]';
        certificateDiv.appendChild(certificateInput);
        container.appendChild(certificateDiv);

        document.getElementById('other_certificates').appendChild(container);
    }
</script>