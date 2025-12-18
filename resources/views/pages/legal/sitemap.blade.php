@extends('layouts.web')
@section('title', 'Nursing Assignment Helpers UK Sitemap – Easy Site Navigation')
@section('description', 'Use our sitemap to explore all Nursing Assignment Helpers UK pages easily. Find services, pricing, policies, and support links in one convenient place!')
@section('canonical', config('app.app_url') . Request::path())

@section('content')
    <section class="container mx-auto py-5 px-3">
        <h1 class="text-4xl pt-5">Sitemap</h1>
    </section>
    <section class="container mx-auto py-5 px-3">
        <div class="bg-gradient-flip dark:bg-gradient-flip-one rounded">
            <h2 class="text-white text-2xl font-semibold p-4 text-center sm:text-left">
                Our Company
            </h2>
        </div>

        <div class="mx-2 my-4">
            <ul class="my-6 grid grid-cols-1 lg:grid-cols-4 text-center sm:text-left gap-3 sitemap-ul">
                <li>
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}">
                        About
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="{{ route('reviews') }}">
                        Reviews
                    </a>
                </li>
                <li>
                    <a href="{{ route('order') }}">
                        Order Now
                    </a>
                </li>
                <li>
                    <a href="{{ route('price') }}">
                        Pricing
                    </a>
                </li>
                <li>
                    <a href="{{ route('sitemap') }}">
                        Sitemap
                    </a>
                </li>
            </ul>
        </div>

        <div class="bg-gradient-flip dark:bg-gradient-flip-one rounded">
            <h2 class="text-white text-2xl font-semibold p-4 text-center sm:text-left">
                Our Legal Policies
            </h2>
        </div>

        <div class="mx-2 my-4">
            <ul class="my-6 grid grid-cols-1 lg:grid-cols-4 text-center sm:text-left gap-3 sitemap-ul">
                <li>
                    <a href="{{ route('privacy') }}">
                        Privacy Policy
                    </a>
                </li>
                <li>
                    <a href="{{ route('terms') }}">
                        Terms & Conditions
                    </a>
                </li>
                
            </ul>
        </div>

        <div class="bg-gradient-flip dark:bg-gradient-flip-one rounded">
            <h2 class="text-white text-2xl font-semibold p-4 text-center sm:text-left">
                Our Services
            </h2>
        </div>
        <div class="mx-2 my-4">
            <ul class="my-6 grid grid-cols-1 lg:grid-cols-4 text-center sm:text-left gap-3 sitemap-ul">
                <li class="">
                    <a href="{{ route('nursing.dissertation') }}" class="btn btn-link">
                        Dissertation Writing
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('nursing.essay') }}" class="btn btn-link">
                        Essay Writing
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('nursing.assignment') }}" class="btn btn-link">
                        Write My Assignment
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('nursing.proposal') }}" class="btn btn-link">
                        Research Proposal
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('nursing.coursework') }}" class="btn btn-link">
                        Coursework Writing
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('nursing.conceptMapping') }}" class="btn btn-link">
                        Concept Mapping
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('nursing.discussion') }}" class="btn btn-link">
                        Discussion Posts
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('nursing.literature') }}" class="btn btn-link">
                        Literature Review
                    </a>
                </li>
            </ul>
        </div>

    </section>

@endsection
