@extends('layouts.web')
@section('title', 'Nursing Assignment Helpers UK Pricing – Affordable & Transparent')
@section('description', 'Explore clear and student-friendly pricing for Nursing Assignment Helpers UK. Get high-quality assignments at fair rates with no hidden charges or surprises!')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    <section class="container py-6 px-4 mx-auto">
        <h1 class="text-4xl font-semibold py-8 text-center">Fair Rates with Full Transparency</h1>

        <div class=" bg-white border border-primary-one shadow-lg relative   overflow-x-auto">
            <table class="border-collapse table-auto w-full whitespace-no-wrap table-striped relative">
                <thead>
                    <tr class="pricing-tr text-center">
                        <th
                            class="text-white bg-radial border border-primary-one sticky top-0 px-2 md:px-6 py-4 font-bold tracking-wider  uppercase text-base whitespace-nowrap overflow-hidden ">
                            Deadline / Academic Level
                        </th>
                        @foreach ($academicLevels as $level)
                            <th
                                class="text-white bg-radial border border-primary-one sticky top-0 px-2 md:px-6 py-4 font-bold tracking-wider uppercase text-base whitespace-nowrap overflow-hidden">
                                {{ $level->name }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($deadlines as $deadline)
                        <tr class="hover:bg-primary-one hover:text-white">
                            <td class="border border-t border-primary-one days">
                                <span
                                    class="py-3 flex justify-center items-center text-xs sm:text:sm md:text-lg">{{ $deadline->name }}</span>
                            </td>
                            @foreach ($academicLevels as $level)
                                @php
                                    $price = $fares
                                        ->where('academic_level_id', $level->id)
                                        ->where('deadline_id', $deadline->id)
                                        ->first();
                                @endphp
                                <td class="border border-t border-primary-one days">
                                    <span
                                        class="py-3 flex justify-center items-center text-xs sm:text:sm md:text-lg">
                                        {{ $price ? $price->per_page_price . ' GBP' : 'N/A' }}
                                    </span>
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
        <div class=" flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-4 mt-5 pt-3">
            <a href="{{ route('order') }}" class="click-btn btn-chat">
                Place An Order
            </a>
            <a href="javascript:void(Tawk_API.toggle())" class="click-btn btn-chat">
                Chat Now
            </a>
        </div>
    </section>

@endsection
