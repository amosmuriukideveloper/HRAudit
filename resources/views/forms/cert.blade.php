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
        <div class="card-box input-card" >
            <div class="card-header mb-2" style="border:1px solid #ccc">
                 <h4 class="header-title text-info"><b>Step 3: Certificates</b></h4>
            </div>
            <form id="basic-form" action="{{ route('employee.certificate.store', $id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
               <fieldset>
                 <legend>Add Academic certificates</legend>
                    <div >
                        <div class="p-1">
                            <button type="button" class="btn btn-outline-info btn-xs  mt-4" onclick="addCertificate()"><i class="mdi mdi-note-plus-outline"></i> Add Certificate</button>

                         </div>


                             <div class="row p-2">

                                <div class="form-group">


                                    <div id="other_certificates">
                                        <table class="table table-bordered">
                                            <th>Certificate Title</th>
                                            <th>Index/Registration No</th>
                                            <th>Institution</th>
                                            <th>Certificate No</th>
                                            <th>Year</th>
                                        </table>
                                        <!-- dynamic input fields for other certificates will be added here -->
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

                            <div class="form-group row" >
                                <div class="p-2" >
                                <button type="submit" class="btn btn-outline-info btn-sm btn-rounded waves-light waves-effect width-md"><i class="mdi mdi-send-circle-outline" ></i> Next Section : Employment Changes</button>
                                </div>
                            </div>



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
    // function to add input fields for other certificates
    function addCertificate() {
        var container = document.createElement('div');
        container.classList.add('row');
        container.classList.add('p-2');
        container.style.borderBottom = '1px solid #ccc';

        var titleDiv = document.createElement('div');
        titleDiv.classList.add('col-md-3');
        var titleInput = document.createElement('input');
        titleInput.classList.add('form-control');
        titleInput.placeholder = 'Certificate Title';
        titleInput.name = 'name[]';
        titleDiv.appendChild(titleInput);
        container.appendChild(titleDiv);

        var indexDiv = document.createElement('div');
        indexDiv.classList.add('col-md-2');
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
        certificateDiv.classList.add('col-md-2');
        var certificateInput = document.createElement('input');
        certificateInput.classList.add('form-control');
        certificateInput.placeholder = 'Certificate No';
        certificateInput.name = 'certificate_number[]';
        certificateDiv.appendChild(certificateInput);
        container.appendChild(certificateDiv);

        var certificateDiv = document.createElement('div');
        certificateDiv.classList.add('col-md-2');
        var certificateInput = document.createElement('input');
        certificateInput.type = 'date';
        certificateInput.classList.add('form-control');
        certificateInput.placeholder = 'Year';
        certificateInput.name = 'certificate_year[]';
        certificateDiv.appendChild(certificateInput);
        container.appendChild(certificateDiv);

        document.getElementById('other_certificates').appendChild(container);
    }
</script>
