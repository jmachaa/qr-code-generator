{{-- @extends('user.layouts.masterlayout-saho') --}}

    <style>
        /* Chrome, Safari, Edge, Opera */
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type="number"] {
            -moz-appearance: textfield;
        }

        .mandatory {
            color: red
        }

        .mobile-input {
            display: flex;
            align-items: center
        }

        .mobile-input select {
            width: 100px;
            border-right: transparent;
        }
        .payment-form{
            margin-top: 1rem;
        }
        .payment-form .custom-textarea {
            height: 38px;
        }

        .payment-form .donation-box {
            border: 2px solid var(--primary-color);
            padding: 20px;
            text-align: center;
            margin-inline: auto;
            margin-top: 1rem;
        }
        .payment-form .donation-box .custom-input{
            font-size: 1.4rem;
            text-align: center;
            font-weight:bold;
        }
        .payment-form .custom-input:focus{
            border-color: var(--primary-color);
            box-shadow:0 0 8px rgb(246 187 66 / 60%);
        }
        .modal.show{
            opacity: 1 !important;
        }
        .modal-backdrop.fade.show {
            opacity:.5;
        }

        .modal-dialog-centered {
            position: relative;
            top: 30%;
            transform: translateY(-50%);
            margin: 0 auto;
        }
        .custom-input{
            margin-bottom: 5px !important;
        }
        .text-danger{
            font-size: 12px;
            margin-bottom: 10px;
        }
        /* .modal-backdrop {
            z-index: 1050 !important;
        }
        .modal {
            z-index: 1055 !important;
            display: block !important;
            opacity: 1 !important;
        } */
    </style>
@section('content')
    {{-- Banner head area --}}
    <div class="hero-area">
        <div class="page-banner parallax">
            <div class="container">
                <div class="page-banner-text">
                    <h1 class="block-title">Payment Form</h1>
                </div>
            </div>
        </div>
    </div>

    <div id="main-container">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="" alt="donation image" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <p></p>
                    </div>
                </div>
                <form id="paymentForm" class="payment-form">
                    @csrf
                    <div class="row ">
                        <div class="col-md-6">
                                <div class="col-12">
                                    <label class="form-label">Selection <span class="mandatory">*</span></label>
                                    <select class="form-control custom-input" aria-label="Default select example" name="selection" id="selection">
                                        <option value="" disabled selected>Select</option>
                                        <option value="individual">Individual</option>
                                        <option value="1">Institution</option>
                                        <option value="2">Diocese</option>
                                        <option value="3">Parish</option>
                                    </select>
                                    <small class="text-danger"></small>

                                    <span class="text-danger"></span>
                                    @error('selection')
                                    <span class="text-danger"></span>
                                  @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">First Name <span class="mandatory">*</span></label>
                                    <input type="text" name="fisrt_name" id="fisrt_name" class="form-control custom-input">
                                    <span class="text-danger"></span>
                                    @error('fisrt_name')
                                    <span class="text-danger"></span>
                                  @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Email <span class="mandatory">*</span></label>
                                    <input type="email" name="email" id="email" class="form-control custom-input">
                                    <span class="text-danger"></span>
                                    @error('email')
                                    <span class="text-danger"></span>
                                  @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" name="dob" id="dob" class="form-control custom-input">
                                    <span class="text-danger"></span>
                                    @error('dob')
                                    <span class="text-danger"></span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Country<span class="mandatory">*</span></label>
                                    <select name="country_id" id="country_id" class="form-control custom-input">
                                        <option value="">Select Country</option>
                                    </select>
                                    <span class="text-danger"></span>
                                    @error('country_id')
                                    <span class="text-danger"></span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Diocese <span class="mandatory">*</span></label>
                                    <select class="form-control custom-input" aria-label="Default select example" name="diocese_id" id="diocese_id">
                                        <option value="">Select Diocese</option>
                                    </select>
                                    <span class="text-danger"></span>
                                    @error('diocese_id')
                                    <span class="text-danger"></span>
                                    @enderror
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="col-12">
                                    <label class="form-label">Mobile/Whatsapp No. <span class="mandatory">*</span></label>
                                    <div class="mobile-input">
                                        <select class="form-control custom-input" aria-label="Default select example" name="country_code" id="country_code">
                                        </select>

                                        <input type="number" name="mobile_number_without_country_code" id="mobile_number_without_country_code" class="form-control custom-input">

                                    </div>

                                    <span class="text-danger"></span>
                                    @error('mobile_number_without_country_code')
                                        <span class="text-danger"></span>
                                    @enderror

                                    <!-- <div class="country_code"> -->

                                    <!-- </div> -->
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Last Name <span class="mandatory">*</span></label>
                                    <input type="text" name="last_name" id="last_name" class="form-control custom-input">
                                    <span class="text-danger"></span>
                                    @error('last_name')
                                    <span class="text-danger"></span>
                                  @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">PAN</label>
                                    <input type="text" name="pan" id="pan" class="form-control custom-input">
                                    <span class="text-danger"></span>
                                    @error('pan')
                                    <span class="text-danger"></span>
                                  @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Address<span class="mandatory">*</span></label>
                                    <textarea class="form-control custom-textarea custom-input" name="address" id="address"></textarea>
                                    <span class="text-danger"></span>
                                    @error('address')
                                    <span class="text-danger"></span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Pincode<span class="mandatory">*</span></label>
                                    <input type="number" name="pincode" id="pincode" class="form-control custom-input">
                                    <span class="text-danger"></span>
                                    @error('pincode')
                                    <span class="text-danger"></span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Parish <span class="mandatory">*</span></label>
                                    <select class="form-control custom-input" aria-label="Default select example" name="parish_id" id="parish_id">
                                        <option value="">Select Parish</option>
                                    </select>
                                    <span class="text-danger"></span>
                                    @error('parish_id')
                                    <span class="text-danger"></span>
                                    @enderror
                                </div>
                        </div>
                    </div>
                    <div class="row" style="display: flex;justify-content: center;">
                        <div class="col-md-4 donation-box">
                            <h4>Enter Your Amount</h4>
                            <input type="text" name="amount_to_pay" id="amount_to_pay"
                                class="form-control form-control-lg custom-input">
                                <div class="text-danger"></div>
                            @error('amount_to_pay')
                            <div class="text-danger"></div>
                            @enderror
                                <button type="button" id="payButton" class="btn btn-primary">Pay</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Payment Success Modal -->
<div class="modal fade" id="paymentSuccessModal" tabindex="-1" aria-labelledby="paymentSuccessModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-center">
        <div class="modal-header border-0">
          <h5 class="modal-title w-100" id="paymentSuccessModalLabel">Payment Status</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="green" class="bi bi-check-circle-fill mb-3" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 10.03a.75.75 0 0 0 1.07 0L12.03 6a.75.75 0 0 0-1.06-1.06L7.5 8.44 5.53 6.47A.75.75 0 0 0 4.47 7.53l2.5 2.5z"/>
          </svg>
          <h4 class="mb-2">Payment Done Successfully!</h4>
          <p class="mb-0">Thank you for your payment.</p>
        </div>
        <div class="modal-footer border-0 justify-content-center">
          <button type="button" class="btn btn-success px-4" data-bs-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>

@endsection
{{-- @section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function(){
    fetch_countries_list();
    fetch_diocese_list()
    $('#diocese_id').on('change', function() {
        let diocese_id = $(this).val();
        if (diocese_id) {
            fetch_parishes_by_diocese(diocese_id);
        } else {
            $('#parish_id').empty().append('<option value="" disabled selected>Select Parish</option>');
        }
    });
});

function fetch_countries_list(){
    $.ajax({
        url: '{{ url('/fetch_countries_list') }}',
        type: 'GET',
        success: function(data) {
            console.log(data, 'data');

            var countryCodeSelect = $('#country_code');
            var countrySelect = $('#country_id');

            countryCodeSelect.empty().append('<option value="" disabled selected>Code</option>');
            countrySelect.empty().append('<option value="" disabled selected>Select Country</option>');

            $.each(data, function(key, country) {
                if (country.countries_phonecode !== null && country.countries_phonecode !== '') {
                    countryCodeSelect.append('<option value="' + country.countries_phonecode + '">+' + country.countries_phonecode + '</option>');
                }

                if (country.countries_c_name && country.countries_c_code) {
                    countrySelect.append('<option value="' + country.countries_c_code + '">' + country.countries_c_name + '</option>');
                }
            });

        },
        error: function() {
            alert('Unable to load countries. Please try again.');
        }
    });
}

function fetch_diocese_list(){
    $.ajax({
        url: '{{ url('/fetch_diocese_list') }}',
        type: 'GET',
        success: function(data) {
            var dioceseSelect = $('#diocese_id');
            dioceseSelect.empty().append('<option value="" disabled selected>Select Diocese</option>');

            $.each(data, function(key, diocese) {
                dioceseSelect.append('<option value="' + diocese.id + '">' + diocese.name + '</option>');
            });
        },
        error: function() {
            alert('Unable to load countries. Please try again.');
        }
    });
}

function fetch_parishes_by_diocese(diocese_id) {
    $.ajax({
        url: '{{ url("/fetch_parishes_by_diocese") }}/' + diocese_id,
        type: 'GET',
        success: function(data) {
            let parishSelect = $('#parish_id');
            parishSelect.empty().append('<option value="" disabled selected>Select Parish</option>');
            $.each(data, function(index, parish) {
                parishSelect.append('<option value="' + parish.id + '">' + parish.parish_name + '</option>');
            });
        },
        error: function() {
            alert('Unable to load parishes.');
        }
    });
}
</script>

<script>
    $('#payButton').on('click', function (e) {
        e.preventDefault();
        FormValidation();
        if(!FormValidation()){
            return false;
        }
        let formData = $('#paymentForm').serialize();

        $.ajax({
            url: '{{ url('/payment-submit') }}',
            type: "POST",
            data: formData,
            // headers: {
            //     'X-CSRF-TOKEN': '{{ csrf_token() }}'
            // }
            success: function (response) {
                if(response.order_id != null)
                    {
                        var options = {
                            key: "{{ env('RAZORPAY_API_KEY') }}",
                            amount: response.amount * 100,
                            currency: "INR",
                            name: "SAHODHARAN",
                            description: "Payment Subscription",
                            image: "https://cdn.razorpay.com/logos/GhRQcyean79PqE_medium.png",
                            order_id: response.order_id,
                            //callback_url: "{{ route('payment.thankyou') }}",
                            callback_url:"",
                            theme: {
                                color: "#738276"
                            },
                            handler: function (response) {
                                if(response != null){
                                    $.ajax({
                                        type: 'POST',
                                        url: '{{ url('razorpay-first-response') }}',
                                        dataType: 'json',
                                        data: {
                                            "_token": "{{ csrf_token() }}",
                                            "response": response
                                        },
                                        success: function(res) {
                                            if(res.status == true){
                                                const modal = new bootstrap.Modal(document.getElementById('paymentSuccessModal'), {
                                                    backdrop: true
                                                });
                                                modal.show();
                                                $('#paymentForm').trigger('reset');
                                            }
                                        },
                                        error: function(xhr, status, error) {
                                            console.error("AJAX error:", status, error);
                                            alert("An error occurred. Please try again.");
                                        }
                                    });
                                }
                            },
                        };

                        var rzp = new Razorpay(options);

                        rzp.open();

                    }else{
                        alert('There was an issue while initiating the Payment Server, Please try to refresh!')
                    }
            },
            error: function (xhr) {
                alert('Something went wrong. Please try again.');
                console.error(xhr.responseText);
            }
        });
    });
    function FormValidation(){
        let selection = $('#selection').val();
        let country_code = $('#country_code').val();
        let mobile_number_without_country_code = $('#mobile_number_without_country_code').val();
        let fisrt_name = $('#fisrt_name').val();
        let last_name = $('#last_name').val();
        let email = $('#email').val();
        let pan = $('#pan').val();
        let dob = $('#dob').val();
        let address = $('#address').val();
        let country_id = $('#country_id').val();
        let pincode = $('#pincode').val();
        let diocese_id = $('#diocese_id').val();
        let parish_id = $('#parish_id').val();
        let amount_to_pay = $('#amount_to_pay').val();

        let isValid = true;
        $('.text-danger').text('');
        if (!selection) {
            $('#selection').next('.text-danger').text('Selection is required');
            isValid = false;
        }

        if (!country_code || mobile_number_without_country_code == '') {
            $('#mobile_number_without_country_code').closest('.mobile-input').nextAll('.text-danger').first().text('Mobile number is required');
            isValid = false;
        }

        if (!fisrt_name) {
            $('#fisrt_name').next('.text-danger').text('First name is required');
            isValid = false;
        }

        if (!last_name) {
            $('#last_name').next('.text-danger').text('Last name is required');
            isValid = false;
        }

        if (!email) {
            $('#email').next('.text-danger').text('Email is required');
            isValid = false;
        }

        if (!address) {
            $('#address').next('.text-danger').text('Address is required');
            isValid = false;
        }

        if (!country_id) {
            $('#country_id').next('.text-danger').text('Country is required');
            isValid = false;
        }

        if (country_id=="IN" && !pincode) {
            $('#pincode').next('.text-danger').text('Pincode is required');
            isValid = false;
        }

        if (!diocese_id) {
            $('#diocese_id').next('.text-danger').text('Diocese is required');
            isValid = false;
        }

        if (!parish_id) {
            $('#parish_id').next('.text-danger').text('Parish is required');
            isValid = false;
        }

        if (!amount_to_pay || parseFloat(amount_to_pay) <= 0) {
            $('#amount_to_pay').next('.text-danger').text('Enter a valid amount');
            isValid = false;
        }

        if (!isValid) {
            return false;
        }else{
            return true;
        }
    }

    function clearErrorOnValidInput(selector) {
        $(selector).on('input change', function () {
            if ($(this).val().trim() !== '') {
                $(this).next('.text-danger').text('');

            }
        });
    }
    $('#mobile_number_without_country_code').on('input change', function () {
        if ($(this).val().trim() !== '') {
            $('#mobile_number_without_country_code')
                .closest('.mobile-input')
                .siblings('.text-danger')
                .text('');
        }
    });

    const fields = [
        '#selection',
        '.country_code',
        '.mobile_number_without_country_code',
        '#fisrt_name',
        '#last_name',
        '#email',
        '#pan',
        '#dob',
        '#address',
        '#country_id',
        '#pincode',
        '#diocese_id',
        '#parish_id',
        '#amount_to_pay'
    ];
    fields.forEach(clearErrorOnValidInput);

    function validateNumberInput(selector, allowDecimal = true) {
    $(selector).on('input', function () {
        let value = $(this).val();

        if (allowDecimal) {
            value = value.replace(/[^0-9.]/g, '');
        } else {
            value = value.replace(/[^0-9]/g, '');
        }

        if (value.startsWith('.')) {
            value = '0' + value;
        }

        $(this).val(value);
        if (value !== '') {
            $(this).next('.text-danger').text('');
        }
    });
}

const numberFields = [
    { selector: '#mobile_number_without_country_code', allowDecimal: false },
    { selector: '#pincode', allowDecimal: false },
    { selector: '#amount_to_pay', allowDecimal: true }
];

numberFields.forEach(field => validateNumberInput(field.selector, field.allowDecimal));


</script> --}}
{{-- @endsection --}}
