<section class="">
    <div class="mx-4 py-8 px-5">
        <h3 class=" text-4xl text-center my-4 mb-8 font-semibold">Affordable Pricing - One of the
            <span class="span-header">Best Perks of Hiring Us
            </span>
        </h3>
        <div class="pricing-sec grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="card one">
                <div class="top">
                    <div class="title">A-level/College</div>
                    <div class="price-sec"></div>
                </div>
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th class="text-">Deadline</th>
                            <th class="text-">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $fares_cat_one = \App\Fare::where('academic_level_id', 1)->get();
                            $currency = 'EUR';
                        @endphp

                        @foreach ($deadlines as $key => $deadline)
                            <tr class="bg-red">
                                <td class="px-6">{{ $deadline->name }}</td>

                                <td class="px-6 ">
                                    {{ $fares_cat_one[$key]->per_page_price . ' ' . $currency }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mx-auto text-center  pt-4">
                    <a href="{{ route('order') }}">
                        <button
                            class="hover:bg-transparent btn-pri text-sm text-white font-semibold hover:text-[#EF443B] py-2 px-8  border border-[#EF443B] rounded-tl-3xl rounded-br-3xl">
                            Order Now
                        </button>
                    </a>
                </div>
            </div>
            <div class="card two">
                <div class="top ">
                    <div class="title">Undergraduate</div>
                    <div class="price-sec"></div>
                </div>
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th class="text-">Deadline</th>
                            <th class="text-">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $fares_cat_one = \App\Fare::where('academic_level_id', 2)->get();
                            $i = 0;
                        @endphp

                        @foreach ($deadlines as $deadline)
                            <tr class="bg-red">
                                <td class="px-6">{{ $deadline->name }}</td>

                                <td class="px-6 ">
                                    {{ $fares_cat_one[$i]->per_page_price . ' ' . $currency }}</td>
                            </tr>
                            @php $i++; @endphp
                        @endforeach
                    </tbody>
                </table>
                <div class="mx-auto text-center  pt-4">
                    <a href="{{ route('order') }}">
                        <button
                            class="hover:bg-transparent btn-pri text-sm text-white font-semibold hover:text-[#EF443B] py-2 px-8  border border-[#EF443B] rounded-tl-3xl rounded-br-3xl">
                            Order Now
                        </button>
                    </a>
                </div>
            </div>
            <div class="card three">
                <div class="top ">
                    <div class="title">Masters</div>
                    <div class="price-sec"></div>
                </div>
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th class="text-">Deadline</th>
                            <th class="text-">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $fares_cat_one = \App\Fare::where('academic_level_id', 3)->get();
                            $i = 0;
                        @endphp

                        @foreach ($deadlines as $deadline)
                            <tr class="bg-red">
                                <td class="px-6">{{ $deadline->name }}</td>

                                <td class="px-6 ">
                                    {{ $fares_cat_one[$i]->per_page_price . ' ' . $currency }}</td>
                            </tr>
                            @php $i++; @endphp
                        @endforeach
                    </tbody>
                </table>
                <div class="mx-auto text-center  pt-4">
                    <a href="{{ route('order') }}">
                        <button
                            class="hover:bg-transparent btn-pri text-sm text-white font-semibold hover:text-[#EF443B] py-2 px-8  border border-[#EF443B] rounded-tl-3xl rounded-br-3xl">
                            Order Now
                        </button>
                    </a>
                </div>
            </div>
            <div class="card two">
                <div class="top ">
                    <div class="title">PHD</div>
                    <div class="price-sec"></div>
                </div>
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th class="text-">Deadline</th>
                            <th class="text-">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $fares_cat_one = \App\Fare::where('academic_level_id',4)->get() @endphp

                        @foreach ($deadlines as $key => $deadline)
                            <tr class="bg-red">
                                <td class="px-6">{{ $deadline->name }}</td>

                                <td class="px-6 ">
                                    {{ $fares_cat_one[$key]->per_page_price . ' ' . $currency }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mx-auto text-center  pt-4">
                    <a href="{{ route('order') }}">
                        <button
                            class="hover:bg-transparent btn-pri text-sm text-white font-semibold hover:text-[#EF443B] py-2 px-8  border border-[#EF443B] rounded-tl-3xl rounded-br-3xl">
                            Order Now
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
