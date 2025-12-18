@extends('layouts.web')
@section('title', 'Order Nursing Assignment Helpers UK - Fast & Quality Service')
@section('description', 'Place your order for Nursing Assignment Helpers UK today. Quick, secure process to get expert-written assignments on time and with top quality.')
@section('canonical', config('app.app_url') . Request::path())
@section('links')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" rel="stylesheet" />
    <script async src="https://www.google.com/recaptcha/api.js"></script>
@endsection

@section('content')


    <section class="text-white py-5 ">
        <div class="container mx-auto py-12 px-4 md:px-24">
            @if (session('error'))
                <div class=" my-4 mx-auto bg-red-50 border-t-4 border-red-500 rounded-b px-4 py-3 shadow-md">
                    <p class="text-center text-red-600 text-base">{{ session('error') }}</p>
                </div>
            @endif
            @if (session('success'))
                <div class="text-center my-4 mx-auto bg-green-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                    role="alert">
                    <div class="">
                        <p class="text-center font-bold">{{ session('success') }}</p>
                    </div>
                </div>
            @endif
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-3 gap-x-4 gap-y-4">
                <div class="col-span-3 lg:col-span-2">
                    <div class="w-full order-form-styling1 px-4 md:px-8 py-5 lg:py-10">
                    <div class="space-y-5 text-center">
                        <h1 class="text-black text-4xl font-semibold pb-6">
                            Order Now
                        </h1>
                    </div>

                        <form id="order-form" action="{{ route('order.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4 gap-4">
                                <div class="col-span-2 md:col-span-1">
                                    <input type="text" id="topic" name="paper_topic" class="summary form-item"
                                        placeholder="Enter your Topic" value="{{ old('topic') }}">
                                    @error('topic')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <select id="paper-type" name="paper_type" class="form-item text-gray-400 summary">
                                        <option hidden="" value="0" disabled="" selected="">Paper Type
                                        </option>
                                        @foreach ($paper_types as $paper_type)
                                            <option {{ old('$paper_type') == $paper_type->id ? 'selected' : '' }}
                                                value="{{ $paper_type->name }}">{{ $paper_type->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('paper_type')
                                        <span class="text-yellow-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <select id="deadline" name="deadline"
                                        class="form-item text-gray-400 summary get-fares">
                                        <option hidden="" value="0" disabled="" selected="">Deadline
                                        </option>
                                        @foreach ($deadlines as $deadline)
                                            <option value="{{ $deadline->name }}"
                                                {{ old('deadline') == $deadline->name ? 'selected' : '' }}
                                                get-id="{{ $deadline->id }}">
                                               {{ $deadline->name . ' / ' . \Carbon\Carbon::now()->addDays($deadline->duration_in_days)->format('d M, Y') }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <select id="reference-style" name="reference_style"
                                        class="form-item text-gray-400 summary">
                                        <option hidden="" value="0" disabled="" selected="">Referencing
                                            Style</option>
                                        @foreach ($reference_styles as $reference_style)
                                            <option {{ old('$reference_style') == $reference_style->id ? 'selected' : '' }}
                                                value="{{ $reference_style->name }}">{{ $reference_style->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('reference_style')
                                        <span class="text-yellow-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <select id="no-of-references" name="no_of_references"
                                        class="form-item text-gray-400 summary">
                                        <option hidden="" value="" disabled="" class="" selected="">
                                            Number of References
                                        </option>
                                        @for ($i = 1; $i <= 20; $i++)
                                            <option get-id="{{ $i }}"
                                                {{ old('style') == $i ? 'selected' : '' }} value="{{ $i }}">
                                                {{ $i }}
                                            </option>
                                        @endfor
                                    </select>
                                    @error('style')
                                        <span class="text-yellow-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <select id="academic-level" name="academic_level"
                                        class="form-item text-gray-400 summary get-fares">
                                        <option hidden="" value="0" disabled="" selected="">Academic Level
                                        </option>
                                        @foreach ($academic_levels as $academic_level)
                                            <option get-id="{{ $academic_level->id }}"
                                                {{ old('$academic_level') == $academic_level->name ? 'selected' : '' }}
                                                value="{{ $academic_level->name }}">
                                                {{ $academic_level->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('academic_level')
                                        <span class="text-yellow-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 md:col-span-1">
                                    <select id="pages" name="number_of_pages"
                                        class="form-item text-gray-400 summary get-fares">
                                        <option hidden="" disabled="" selected="">No of Pages</option>
                                        @for ($i = 1; $i <= 100; $i++)
                                            <option get-id="{{ $i }}"
                                                {{ old('pages') == $i . ' Pages - ' . 250 * $i . ' Words' ? 'selected' : '' }}
                                                value="{{ $i . ' Pages - ' . 250 * $i . ' Words' }}">
                                                {{ $i . ' Pages - ' . 250 * $i . ' Words' }}
                                            </option>
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-span-2 md:col-span-1">
                                    <select id="subject" name="subject" class="form-item text-gray-400 summary">
                                        <option hidden="" value="0" disabled="" selected="">Subject
                                        </option>
                                        @foreach ($subjects as $subject)
                                            <option value="{{ $subject->name }}"
                                                {{ old('subject') == $subject->name ? 'selected' : '' }}>
                                                {{ $subject->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('subject')
                                        <span class="text-yellow-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-span-2">
                                    <label class="block bg-white rounded">
                                        <span class="sr-only">Choose File</span>
                                        <input type="file" name="emailAttachments[]" multiple
                                            class="file block w-full text-sm" />
                                    </label>
                                    <p class="mt-1 text-xs text-white" id="file_input_help">PDF, PPT, PPTX, DOC, DOCX,
                                        JPEG,
                                        JPG, PNG, ZIP or RAR (MAX. 25MB).</p>
                                </div>

                                <div class="col-span-2">
                                    <textarea name="detail" rows="2" class="form-item @error('detail') error-field @enderror h-28"
                                        placeholder="Any special note (optional)">{{ old('detail', '') }}</textarea>
                                    @error('detail')
                                        <span class="text-yellow-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 md:col-span-1">
                                    <input type="text" id="name" name="name"
                                        class="form-item summary @error('name') error-field @enderror"
                                        placeholder="Enter your Name" value="{{ old('name', '') }}" />
                                    @error('name')
                                        <span class="text-yellow-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 md:col-span-1">
                                    <input type="text" id="email" name="email"
                                        class="form-item summary @error('email') error-field @enderror"
                                        placeholder="Enter your Email" value="{{ old('email', '') }}" />
                                    @error('email')
                                        <span class="text-yellow-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 md:col-span-1">
                                    <input type="text" id="phone" id="phone" name="phone"
                                        class="form-item summary @error('phone') error-field @enderror text-black"
                                        placeholder="" value="{{ old('phone', '') }}" />
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
                                    @error('phone')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                    <input type="hidden" name="phone" id="phone2" />
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <select id="country" id="country" name="country"
                                        class="form-item summary text-gray-400">
                                        <option hidden="" value="0" disabled="" selected="">Country
                                        </option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" {{ old('country', 'United Kingdom') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('country')
                                        <span class="text-yellow-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <input type="hidden" id="academic_level_id" name="academic_level_id"
                                    value="{{ old('academic_level_id') }}">
                                <input type="hidden" id="deadline_id" name="deadline_id"
                                    value="{{ old('deadline_id') }}">
                                <input type="hidden" id="no-of-pages" name="number_of_pages"
                                    value="{{ old('number_of_pages') }}">
                                <div class="w-full">
                                    <!-- Google Recaptcha -->
                                    <div class="g-recaptcha mt-2" data-sitekey={{ config('services.recaptcha.key') }}>
                                    </div>
                                </div>
                                <div class="col-span-2 text-center">
                                    <button id="btn-submit" type="submit"
                                        class="click-btn btn-chat form-btn cursor-not-allowed mt-1" disabled>
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-white order-first lg:order-last col-span-3 lg:col-span-1 lg:mt-10">
                    <div class="order-summary text-black shadow-sm order-form-styling1 px-6 py-8">
                        <h2 class="text-2xl text-center">Your Order Summary</h2>
                        <div class="text-color py-2">
                            <div class="flex items-center justify-between py-2">
                                <span class="summary-line"></span>
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 16 16" fill="white">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0L.289 5.547a.5.5 0 0 0 .025.916l7.5 3a.5.5 0 0 0 .372 0L14 6.463V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.276a.5.5 0 0 0 .025-.917l-7.5-3.5z" />
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032z" />
                                </svg>
                                <p class="font-semibold">
                                    Academic Details
                                </p>
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 16 16" fill="white">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0L.289 5.547a.5.5 0 0 0 .025.916l7.5 3a.5.5 0 0 0 .372 0L14 6.463V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.276a.5.5 0 0 0 .025-.917l-7.5-3.5z" />
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032z" />
                                </svg>
                                <span class="summary-line"></span>
                            </div>
                            <ul class="summary-details">
                                <li>Topic: <span class="float-right" id="topic-data">-</span></li>
                                <li>Paper Type: <span class="float-right" id="paper-type-data">-</span></li>
                                <li>Deadline: <span class="float-right" id="deadline-data">-</span></li>
                                <li>Reference Style: <span class="float-right" id="reference-style-data">-</span></li>
                                <li>References: <span class="float-right" id="no-of-references-data">-</span></li>
                                <li>Academic Level: <span class="float-right" id="academic-level-data">-</span></li>
                                <li>Pages: <span class="float-right" id="pages-data"></span> </li>
                                <li>Subject: <span class="float-right" id="subject-data">-</span></li>
                            </ul>
                        </div>

                        <div class="text-color py-2">
                            <div class="flex items-center justify-between py-2">
                                <span class="summary-line"></span>
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="font-semibold">
                                    Personal Details
                                </p>
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="summary-line"></span>
                            </div>
                            <ul class="summary-details">
                                <li>Name: <span class="float-right" id="name-data">-</span></li>
                                <li>Email: <span class="float-right" id="email-data">-</span></li>
                                <li>Contact: <span class="float-right" id="phone-data">-</span> </li>
                                <li>Country: <span class="float-right" id="country-data">-</span> </li>
                            </ul>
                        </div>
                        <div class="text-color py-2">
                            <div class="flex items-center justify-between py-2">
                                <span class="summary-line"></span>
                                <!--<svg class="w-6 h-6 text-gray-800 dark:text-white" viewBox="0 0 24 24"-->
                                <!--    xmlns="http://www.w3.org/2000/svg" width="24" height="24">-->
                                <!--    <circle cx="12" cy="12" r="10" fill="white" />-->
                                <!--    <text x="12" y="16" text-anchor="middle" fill="#000" font-size="12"-->
                                <!--        font-family="Arial, sans-serif" font-weight="bold">$</text>-->
                                <!--</svg>-->

                                <p class="font-semibold">
                                    Payment Amount
                                </p>
                                <!--<svg class="w-6 h-6 text-gray-800 dark:text-white" viewBox="0 0 24 24"-->
                                <!--    xmlns="http://www.w3.org/2000/svg" width="24" height="24">-->
                                <!--    <circle cx="12" cy="12" r="10" fill="white" />-->
                                <!--    <text x="12" y="16" text-anchor="middle" fill="#000" font-size="12"-->
                                <!--        font-family="Arial, sans-serif" font-weight="bold">$</text>-->
                                <!--</svg>-->
                                <span class="summary-line"></span>
                            </div>
                            <ul class="summary-details">
                                <li>Price Per Page: <span class="float-right" id="cost-per-page">-</span></li>
                                <li>Total: <span class="float-right text-2xl font-semibold text-black"
                                        id="total-cost">-</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script>
        $('select').on('change', function() {
            $(this).removeClass("text-gray-400");
        });
        $('.summary').on('change', function() {
            $('#' + this.id + '-data').html(this.value);
        });

        if ({{ old('pages') ? 'true' : 'false' }}) {
            $('.summary').change()
            $('.get-fares').change()
        }


        const fares = @json($fares);

        $(".get-fares").change(function() {
            const academic_level = $('#academic-level option:selected').attr("get-id");
            const deadline = $('#deadline option:selected').attr("get-id");
            const no_of_pages = $('#pages option:selected').attr("get-id") || "1";

            const currency = ' GBP';

            fares.forEach(fare => {
                if (deadline == fare.deadline_id && academic_level == fare.academic_level_id) {
                    var total = (fare.per_page_price * no_of_pages);

                    $('#total-cost').html(total.toLocaleString() + currency);
                    $('#cost-per-page').html(fare.per_page_price + currency + " x " + no_of_pages);

                    $('#academic_level_id').val(academic_level);
                    $('#deadline_id').val(deadline);
                    $('#no-of-pages').val(no_of_pages);
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {

            $('.btn-plus, .btn-minus').on('click', function(e) {
                e.preventDefault();
                const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
                const input = $(e.target).closest('.input-group').find('input');

                if (input.is('input')) {
                    input[0][isNegative ? 'stepDown' : 'stepUp']()
                }
                $(".get-fares").change()
            })

            const phone = document.querySelector("#phone");
            var errorMsg = document.querySelector("#error-msg"),
                validMsg = document.querySelector("#valid-msg");

            // here, the index maps to the error code returned from getValidationError - see readme
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

            var submit = $('#btn-submit');

            var reset = function() {
                phone.classList.remove("error");
                phone.classList.remove("error-field");
                errorMsg.innerHTML = "";
                errorMsg.classList.add("hidden");
                validMsg.classList.add("hidden");
                submit.attr("disabled", true);
                submit.addClass("btn-disabled");
            };

            // on blur: validate
            phone.addEventListener('blur', function() {
                reset();
                if (phone.value.trim()) {
                    if (phoneInput.isValidNumber()) {
                        validMsg.classList.remove("hidden");
                        submit.attr("disabled", false);
                        submit.removeClass("btn-disabled");
                        submit.removeClass("cursor-not-allowed");
                    } else {
                        submit.addClass("cursor-not-allowed");
                        phone.classList.add("error");
                        phone.classList.add("error-field");
                        var errorCode = phoneInput.getValidationError();
                        errorMsg.innerHTML = errorMap[errorCode];
                        errorMsg.classList.remove("hidden");
                    }
                }
            });

            // on keyup / change flag: reset
            phone.addEventListener('change', reset);
            phone.addEventListener('keyup', reset);

            var loader =
                ' <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">';
            loader +=
                ' <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>';
            loader +=
                ' <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>';
            loader += ' </svg>';

            $("#order-form").submit(function() {
                submit.html(loader);
                submit.attr("disabled", true);
                submit.addClass("cursor-not-allowed");

                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                return true;
            });
        });
    </script>
@endsection
