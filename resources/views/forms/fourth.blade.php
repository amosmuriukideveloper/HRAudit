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
            <div class="card-header mb-2" style="border:1px solid #ccc">
                 <h4 class="header-title text-info"><b>STEP 4: Payment Details </b></h4>
            </div>

            <form id="basic-form" action="{{ route('payslip.store', $id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
               <fieldset >
                <legend>Fill In Details Below</legend>

                    <form id="basic-form" action="{{ route('personal.details.store', $id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <div class="p-2">
                                <button type="button" class="btn btn-outline-info btn-sm waves-effect waves-light add-payment-month">Add Payment Details</button>
                            </div>
                            <div class="payment-months-container">
                                <div class="form-row payment-month-item m-4 p-4" style="border:1px solid #4fbde9;">
                                    <div class="col-md-12 p-1 mb-1" style="border-bottom:1px solid #4fbde9 ">
                                        <span class="float-left"> Payslip Details</span>
                                        <span class="float-right">
                                            <button type="button" class="btn btn-outline-danger btn-xs waves-effect remove-payment-month">Remove </button>
                                        </span>

                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="date">Payment Month *</label>
                                        <div class="input-group">
                                            <input id="date" name="date[]" type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="pf_number">Basic Salary *</label>
                                        <input   name="basic_salary[]" type="text" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="pf_number">Total Earnings *</label>
                                        <input   name="total_earnings[]" type="text" class="form-control">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="pf_number">PF Number *</label>
                                        <input id="pf_number" name="pf_number[]" type="text" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="pf_number">Tax Pin*</label>
                                        <input   name="tax_pin[]" type="text" class="form-control">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="name">Name *</label>
                                        <input id="name" name="name[]" type="text" class="form-control">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="station_name">Station Name *</label>
                                        <input id="station_name" name="station_name[]" type="text" class="form-control">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="station_code">Station Code *</label>
                                        <input id="station_code" name="station_code[]" type="text" class="form-control">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="desig_code">Desig Code *</label>
                                        <input id="desig_code" name="desig_code[]" type="text" class="form-control">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="desig_name">Desig Name *</label>
                                        <input id="desig_name" name="desig_name[]" type="text" class="form-control">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="id_no">ID No *</label>
                                        <input id="id_no" name="id_no[]" type="text" class="form-control">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="phone">Phone *</label>
                                        <input id="phone" name="phone[]" type="text" class="form-control">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="email">Email *</label>
                                        <input id="email" name="email[]" type="email" class="form-control">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="message">Comment *</label>
                                        <textarea id="message" name="message[]" class="form-control" rows="5"></textarea>
                                    </div>


                                </div>
                            </div>





                            <div class="form-group">
                                <div class="p-2">
                                    <button type="submit" class="btn btn-outline-info btn-rounded waves-light waves-effect width-md"><i class="mdi mdi-send-circle-outline"></i> Finish and Submit</button>
                                    </div>

                            </div>
                        </div>
                    </form>
               </fieldset>


</div>
</div>



</div>

</x-app-layout>
<!-- jQuery Code -->
<script>
    $(document).ready(function() {
        // Add Payment Details
        $('.add-payment-month').click(function() {
            var $lastChild = $('.payment-months-container .payment-month-item:last');
            $lastChild.clone().appendTo('.payment-months-container');
        });


        $('.remove-payment-month').click(function() {
            var $paymentMonths = $('.payment-month-item');
            if ($paymentMonths.length > 1) {
                $paymentMonths.last().remove();
            }
        });

    });
    </script>



