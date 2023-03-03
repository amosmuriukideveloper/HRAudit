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
                    <h3>Payment Details</h3>
   
                    <form id="basic-form" action="{{ route('personal.details.store', $id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <div class="payment-months-container">
                                <div class="form-row payment-month-item">
                                    <div class="col-md-6 mb-3">
                                        <label for="date">Payment Month *</label>
                                        <div class="input-group">
                                            <input id="date" name="date[]" type="date" class="form-control">
                                        </div>
                                    </div>
                    
                                    <div class="col-md-6 mb-3">
                                        <label for="pf_number">PF Number *</label>
                                        <input id="pf_number" name="pf_number[]" type="text" class="form-control">
                                    </div>
                    
                                    <div class="col-md-6 mb-3">
                                        <label for="name">Name *</label>
                                        <input id="name" name="name[]" type="text" class="form-control">
                                    </div>
                    
                                    <div class="col-md-6 mb-3">
                                        <label for="station_name">Station Name *</label>
                                        <input id="station_name" name="station_name[]" type="text" class="form-control">
                                    </div>
                    
                                    <div class="col-md-6 mb-3">
                                        <label for="station_code">Station Code *</label>
                                        <input id="station_code" name="station_code[]" type="text" class="form-control">
                                    </div>
                    
                                    <div class="col-md-6 mb-3">
                                        <label for="desig_code">Desig Code *</label>
                                        <input id="desig_code" name="desig_code[]" type="text" class="form-control">
                                    </div>
                    
                                    <div class="col-md-6 mb-3">
                                        <label for="desig_name">Desig Name *</label>
                                        <input id="desig_name" name="desig_name[]" type="text" class="form-control">
                                    </div>
                    
                                    <div class="col-md-6 mb-3">
                                        <label for="id_no">ID No *</label>
                                        <input id="id_no" name="id_no[]" type="text" class="form-control">
                                    </div>
                    
                                    <div class="col-md-6 mb-3">
                                        <label for="phone">Phone *</label>
                                        <input id="phone" name="phone[]" type="text" class="form-control">
                                    </div>
                    
                                    <div class="col-md-6 mb-3">
                                        <label for="email">Email *</label>
                                        <input id="email" name="email[]" type="email" class="form-control">
                                    </div>
                    
                                    <div class="col-md-12 mb-3">
                                        <label for="message">Comment *</label>
                                        <textarea id="message" name="message[]" class="form-control" rows="5"></textarea>
                                    </div>
                    
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-danger waves-effect remove-payment-month">Remove Payment Details</button>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="form-group">
                                <button type="button" class="btn btn-primary waves-effect waves-light add-payment-month">Add Payment Details</button>
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
                    
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-rounded waves-light waves-effect width-md">Submit</button>
                            </div>
                            </form>
                    
</div>
</div>



</div>

</x-app-layout>
<!-- jQuery Code -->
<script>
    $(document).ready(function() {
        // Add Payment Details
        $('.add-payment-month').click(function() {
            $('.payment-month-item:first').clone().appendTo('.payment-months-container');
        });
    
        // Remove Payment Details
        $('.remove-payment-month').click(function() {
            if($('.payment-month-item').length > 1) {
                $(this).closest('.payment-month-item').remove();
            }
        });
    });
    </script>
    
    
    
    