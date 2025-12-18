@extends('layouts.web')
@section('title', 'Samples')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')
<section class="container mx-auto px-10">
   

    <div class="container mx-auto my-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

        <div>
            <div class=" px-9 rounded-tl-xl rounded-br-xl bg-primary-one text-white sm:px-14 md:px-8 py-6 ">
                <h4 class=" text-center font-bold text-2xl md:text-3xl">DISSERTATION</h4>

                <ul class="my-2 space-y-3 ">
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Title:</span> <strong>Role of leadership</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Discipline:</span> <strong class=" ">Management</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Academic level:</span> <strong class=" ">Master’s</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Pages:</span> <strong class=" ">24</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Format:</span> <strong class=" ">Harvard</strong>
                    </li>
                </ul>
                <div class="flex flex-col items-center py-2 space-y-3">

                    <a href="{{ asset('storage/uploads/Role-of-leadership-Management-in-Provision-of-QA-in-Food-Companies.pdf') }}" target="__blank"
                        class="text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-6">
                        Download Sample
                    </a>
                    <a href="{{ route('order') }}"
                        class=" text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-12">
                        Order Now
                    </a>
                </div>
            </div>
        </div>

        <div>
            <div class=" px-9 rounded-tl-xl rounded-br-xl bg-primary-one text-white sm:px-14 md:px-8 py-6 ">
                <h4 class=" text-center font-bold text-2xl md:text-3xl">DISSERTATION</h4>
                <ul class="my-2 space-y-3 ">
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Title:</span> <strong>Role of e-business</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Discipline:</span> <strong class=" ">Business Plan</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Academic level:</span> <strong class=" ">Master’s</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Pages:</span> <strong class=" ">9</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Format:</span> <strong class=" ">APA</strong>
                    </li>
                </ul>
                <div class="flex flex-col items-center py-2 space-y-3">

                    <a href="{{ asset('storage/uploads/Role-of-e-business-in-shaping-consumer-purchasing-behavior.pdf') }}" target="__blank"
                        class="text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-6">
                        Download Sample
                    </a>
                    <a href="{{ route('order') }}"
                        class=" text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-12">
                        Order Now
                    </a>
                </div>
            </div>
        </div>

        <div class="md:col-span-2 md:mx-28 lg:mx-0 lg:col-span-1">
            <div class=" px-9 rounded-tl-xl rounded-br-xl bg-primary-one text-white sm:px-14 md:px-8 py-6 ">
                <h4 class=" text-center font-bold text-2xl md:text-3xl">DISSERTATION</h4>

                <ul class="my-2 space-y-3 ">
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Title:</span> <strong>Orthodontic treatment</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Discipline:</span> <strong class=" ">Tourism and Hotel</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Academic level:</span> <strong class=" ">Master’s</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Pages:</span> <strong class=" ">32</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Format:</span> <strong class=" ">Harvard</strong>
                    </li>
                </ul>
                <div class="flex flex-col items-center py-2 space-y-3 ">


                    <a href="{{ asset('storage/uploads/Orthodontic-treatment.pdf')  }}" target="__blank"
                        class="text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-6">
                        Download Sample
                    </a>
                    <a href="{{ route('order') }}"
                        class=" text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-12">
                        Order Now
                    </a>
                </div>
            </div>
        </div>

        <div>
            <div class=" px-9 rounded-tl-xl rounded-br-xl bg-primary-one text-white sm:px-14 md:px-8 py-6 ">
                <h4 class=" text-center font-bold text-2xl md:text-3xl">DISSERTATION</h4>

                <ul class="my-2 space-y-3 ">
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Title:</span> <strong>Emotional Marketing</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Discipline:</span> <strong class=" ">Marketing</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Academic level:</span> <strong class=" ">Master’s</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Pages:</span> <strong class=" ">30</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Format:</span> <strong class=" ">APA</strong>
                    </li>
                </ul>
                <div class="flex flex-col items-center py-2 space-y-3">

                    <a href="{{ asset('storage/uploads/Emotional-Marketing-in-Nike.pdf') }}" target="__blank"
                        class="text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-6">
                        Download Sample
                    </a>
                    <a href="{{ route('order') }}"
                        class=" text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-12">
                        Order Now
                    </a>
                </div>
            </div>
        </div>

        <div>
            <div class=" px-9 rounded-tl-xl rounded-br-xl bg-primary-one text-white sm:px-14 md:px-8 py-6 ">
                <h4 class=" text-center font-bold text-2xl md:text-3xl">THESIS</h4>
                <ul class="my-2 space-y-3 ">
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Title:</span> <strong>Flight Security</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Discipline:</span> <strong class=" ">Aviation Security</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Academic level:</span> <strong class=" ">Undergraduate</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Pages:</span> <strong class=" ">32</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Format:</span> <strong class=" ">APA</strong>
                    </li>
                </ul>
                <div class="flex flex-col items-center py-2 space-y-3">

                    <a href="{{ asset('storage/uploads/Aviation-Security-and-Flight-Security-operation-in-Emirates-AirlineCAPU.pdf') }}" target="__blank"
                        class="text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-6">
                        Download Sample
                    </a>
                    <a href="{{ route('order') }}"
                        class=" text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-12">
                        Order Now
                    </a>
                </div>
            </div>
        </div>

        <div class="md:col-span-2 md:mx-28 lg:mx-0 lg:col-span-1">
            <div class=" px-9 rounded-tl-xl rounded-br-xl bg-primary-one text-white sm:px-14 md:px-8 py-6 ">
                <h4 class=" text-center font-bold text-2xl md:text-3xl">THESIS</h4>

                <ul class="my-2 space-y-3 ">
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Title:</span> <strong>Transaction Leadership</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Discipline:</span> <strong class=" ">Leadership</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Academic level:</span> <strong class=" ">Master’s</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Pages:</span> <strong class=" ">40</strong>
                    </li>
                    <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                        <span>Format:</span> <strong class=" ">Harvard</strong>
                    </li>
                </ul>
                <div class="flex flex-col items-center py-2 space-y-3 ">



                    <a href="{{ asset('storage/uploads/Comparison-of-Transformational-and-Transactional-Leadership-In-Jordan-Organisations.pdf') }}" target="__blank"
                        class="text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-6">
                        Download Sample
                    </a>
                    <a href="{{ route('order') }}"
                        class=" text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-12">
                        Order Now
                    </a>
                </div>
            </div>
        </div>

    </div>

    
</section>
@endsection