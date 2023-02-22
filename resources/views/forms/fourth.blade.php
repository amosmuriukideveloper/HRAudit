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
   
        <div class="form-group  row">

        <div class="col-md-6">
            <label class="payment_month" for="name"> Payment Month 1 *</label>
            
                <div class="">
                    <input id="payment_month" value="{{ old('payment_month') }}" name="payment_month" type="text" class="required form-control">
                </div>
                @if ($errors->has('payment_month'))
                    <span class="text-danger text-left">{{ $errors->first('payment_month') }}</span>
                @endif
            </div>

            <div class="col-md-6">
                <label class="payment_month" for="name"> Payment Month 2*</label>
               
                    <div class="">
                        <input id="payment_month" value="{{ old('payment_month') }}" name="payment_month" type="text" class="required form-control">
                    </div>
                    @if ($errors->has('payment_month'))
                        <span class="text-danger text-left">{{ $errors->first('payment_month') }}</span>
                    @endif
                </div>

        </div>

        <div class="form-group  row">
            <div class="col-md-6">
                <label class="payment_month" for="name"> Payment Month 3*</label>
               
                    <div class="">
                        <input id="payment_month" value="{{ old('payment_month') }}" name="payment_month" type="text" class="required form-control">
                    </div>
                    @if ($errors->has('payment_month'))
                        <span class="text-danger text-left">{{ $errors->first('payment_month') }}</span>
                    @endif
                </div>
            </div>
            


<div class="form-group  row">
<div class="col-md-6">
<button type="submit" class="btn btn-primary btn-rounded waves-light waves-effect width-md"><i class="mdi mdi-send-circle-outline"></i> Save</button>
</div>
</div>
</form>
</div>
</div>



</div>

</x-app-layout>