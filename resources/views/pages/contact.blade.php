@extends('layouts.web')
@section('title', 'Contact Nursing Assignment Helpers UK – We’re Here to Assist')
@section('description', 'Need help with your order? Contact Nursing Assignment Helpers UK for quick support, service inquiries, and expert guidance anytime you need reliable academic help!')
@section('canonical', config('app.app_url') . Request::path())

@section('schema-script')

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "@yield('title', '')",
  "url": "@yield('canonical')",
  "logo": "https://nursingassignmenthelpersuk.co.uk/public/imgs/nursing-logo2.webp",
  "sameAs": [
    "https://www.facebook.com/nursingassignmenthelpersuk.co.uk/",
    "https://www.instagram.com/nursingassignmenthelpersuk"
  ]
}
</script>

@endsection

@section('content')
    <section class="py-5 mx-auto">

        <div class="space-y-5 text-center">
            <h1 class="text-4xl font-semibold py-5">
                Contact Us

            </h1>
        </div>
        <div class=" py-5 rounded-lg container mx-auto mb-5">
            <div class="lg:mx-8 px-8">

                <div class="px-2 space-y-4 my-4">
                    <div id="msg-bag"></div>
                    <form class="grid grid-cols-1 md:grid-cols-2 gap-x-3 gap-y-6 mt-8 " id="contact-form">
                        @csrf
                        <div class="w-full space-y-2">
                            <input type="text" name="name" class="form-item" placeholder="Enter your Name" value="{{ old('name', '') }}">
                        </div>

                        <div class="w-full space-y-2">
                            <input type="text" name="email" class="form-item" placeholder="Enter your Email" value="{{ old('email', '') }}">
                        </div>

                        <div class="w-full space-y-2">
                            <input type="tel" name="Phone" id="phone" class="form-item"
                                placeholder="Contact Number" value="{{ old('phone', '') }}" >
                            <input type="hidden" name="phone" id="phone2" class="form-item" value="">
                            <div id="valid-msg" class="hidden font-bold text-black flex items-center">
                                <span class="text-primary-one text-xl pt-2 ">
                                    <svg class="h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                        width="48px" height="48px">
                                        <path fill="#c8e6c9"
                                            d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z" />
                                        <path fill="#4caf50"
                                            d="M34.586,14.586l-13.57,13.586l-5.602-5.586l-2.828,2.828l8.434,8.414l16.395-16.414L34.586,14.586z" />
                                    </svg>
                                </span>
                                <span class="pt-2 text-black">
                                    Valid Number
                                </span>
                            </div>
                            <p id="error-msg" class="hidden text-red-500"></p>
                        </div>

                        <div class="w-full space-y-2">
                            {{-- <input type="text" name="country" class="form-item" placeholder="Country" value=""> --}}
                            <select name="country"
                                class="form-item h-[44px] w-full text-black rounded border-primary-one text-base outline-none py-1 px-3 leading-8 bg-white ">
                                <option hidden="" value="0" disabled="" selected="" class="text-gray-500">
                                    Country</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->name }}" {{ old('country', 'United Kingdom') == $country->name ? 'selected' : '' }}>
                                    {{ $country->name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="w-full md:col-span-2 space-y-2">
                            <input type="text" name="subject" class="form-item" placeholder="Subject" value="">
                        </div>

                        <div class="w-full md:col-span-2 space-y-2">

                            <textarea name="detail" rows="2" class=" form-item h-28" placeholder="Type details here..."></textarea>
                        </div>
                        <div class="w-full">
                            <!-- Google Recaptcha -->
                            <div class="g-recaptcha " data-sitekey={{ config('services.recaptcha.key') }}></div>
                        </div>

                        <div class="btn text-center md:col-span-2 pb-2">
                            <button class="click-btn btn-chat text-white rounded py-2 px-6"
                                type="submit" id="btn-submit">
                                <span>Submit your Query</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script>
        $(document).ready(function() {
            var errorMsg = document.querySelector("#error-msg"),
                validMsg = document.querySelector("#valid-msg");
            const phoneInputField = document.querySelector("#phone");

            var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

            // initialise plugin
            const phoneInput = window.intlTelInput(phone, {
                preferredCountries: ["gb"],
                separateDialCode: true,
                dropdownContainer: document.body,
                customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                    return "e.g. " + selectedCountryPlaceholder;
                },
                initialCountry: "gb",
                geoIpLookup: function(callback) {
                    $.get("https://ipinfo.io/103.244.175.33?token=1fb4fdd88d0fa0", function() {},
                        "jsonp").always(function(resp) {
                        var countryCode = (resp && resp.country) ? resp.country : "gb";
                        // success(countryCode);
                        callback(countryCode);
                    });
                },
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });

            function resetError() {
                errorMsg.innerHTML = "";
                errorMsg.classList.add("hidden");
                validMsg.classList.add("hidden");
            }

            function validatePhone() {
                resetError();
                if (phoneInputField.value.trim()) {
                    if (phoneInput.isValidNumber()) {
                        validMsg.classList.remove("hidden");
                    } else {
                        const errorCode = phoneInput.getValidationError();
                        errorMsg.innerHTML = errorMap[errorCode] || "Invalid number";
                        errorMsg.classList.remove("hidden");
                    }
                }
            }

            // 👇 validate while typing or on blur
            phoneInputField.addEventListener('blur', validatePhone);
            phoneInputField.addEventListener('keyup', validatePhone);
            phoneInputField.addEventListener('change', validatePhone);

            $('#contact-form').on('submit', function(e) {
                e.preventDefault();

                resetError();

                if (!phoneInput.isValidNumber()) {
                    const errorCode = phoneInput.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode] || "Invalid number";
                    errorMsg.classList.remove("hidden");
                    return;
                }

                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                $.ajax({
                    url: "{{ route('contact.store') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: $('#contact-form').serialize(),
                    beforeSend: function() {
                        $(".contact-form-error").empty();
                        $('#contact-form').find(':submit').attr("disabled", true);
                        $('#btn-submit').html("Submiting...");
                    },
                    complete: function() {
                        $('#contact-form').find(':submit').attr("disabled", false);
                        $('#btn-submit').html("Submit Your Query");
                    },
                    success: function(res) {

                        // console.log(res)

                        $('#msg-bag').empty();

                        let msg =
                            '<div class="bg-green-100 border w-[80%] text-center left-[10%] border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">';
                        msg += '<strong class="font-bold">Success!</strong>';
                        msg += '<span class="block sm:inline">' + res.success + '</span>';
                        msg += '</div>';

                        $('#msg-bag').append(msg);

                        $(':input', 'form')
                            .not(':button, :submit, :reset, :hidden')
                            .val('')
                            .prop('checked', false)
                            .prop('selected', false);
                    },
                    error: function(err) {
                        if (err.status == 422) {

                            $('#msg-bag').empty();

                            let msg =
                                '  <div class="mx-auto md:mx-0 md:left-[35%] bg-red-100 border w-[80%]  md:w-[30%] border-red-400 text-yellow-500 px-4 py-3 rounded relative mb-4 text-center" role="alert">';
                            msg += '    <strong class="font-bold ">Error!</strong>';
                            msg += '    <span class="  ">Invalid Data</span>';
                            msg += ' </div>';

                            $('#msg-bag').append(msg);

                            $.each(err.responseJSON.errors, function(i, error) {
                                var el = $('#contact-form').find('[name="' + i + '"]');
                                el.after($('<span class="contact-form-error text-yellow-500">' +
                                    error[0] + '</span>'));
                            });

                            $('.contact-form-error').delay(4000).fadeOut();
                        }
                    },
                });
            });
        });
    </script>
@endsection
