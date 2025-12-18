@extends('layouts.web')
@section('keywords', 'Nursing Essay Help UK')
@section('title', 'Nursing Essay Help UK | Expert Academic Assistance')
@section('description', 'Achieve top grades with our professional nursing essay help in UK. Our experts deliver original, high-quality, and properly referenced essays tailored for students.')
@section('heroImage', 'https://nursingassignmenthelpersuk.co.uk/public/imgs/header-sec1.webp')
@section('canonical', config('app.app_url') . Request::path())


@section('content')
<style>
    .cta-image img {
    position: absolute;
    bottom: -133px;
    left: 5rem;
}
</style>
    {{-- Header --}}
    <section class="homepage-background bg-gray-800 py-12">
        <div class="container mx-auto">
            <div class="grid lg:grid-cols-12 lg:px-0 px-5 py-10 lg:gap-4 items-center">
                <!-- Left Column -->
                <div class="lg:col-span-7">
                    <h1 class="text-4xl font-bold text-white">Get Nursing Essay Help UK Trusted by Aspiring Healthcare Professionals
                    </h1>
                    <p class="text-white py-5">
                        NursNursingassignmenthelpersuk.co.uk is the go-to platform, boasting over 10 years of experience in the field. Our expert nursing essay help in UK is provided by qualified professionals who have deep knowledge of both nursing practice and academic standards, ensuring every piece is written to perfection. Join over 10,000 happy students who have trusted us to deliver a seamless and successful academic experience.
                    </p>
                    @include('partials.frontend.calculator')
                </div>
                <div class="col-span-12 lg:col-span-5 mt-4 lg:mt-0">
                    <img class="ml-auto" src="{{ asset('imgs/header-sec1.webp') }}" width="331" height="412" loading="eager"
                        alt="A female nurse holding a clipboard representing nursing academic support services in UK." title="Nursing Assignment Support in UK" />
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    @include('partials.frontend.features')
    <!-- Feature End -->

    <section class="relative z-0 bg-theme procedure-sec py-10 px-5">
        <div class="container mx-auto">
            <!-- text div -->
            <div class="space-y-5 text-center">
                <h2 class="text-4xl font-semibold text-white">
                   What Makes Our Nursing Essay Writing Help a Student's Favourite 
                    </h2>
                    <p class="text-white mt-3">
                        Every feature we offer is designed with students in mind to make their learning easier and help them achieve better results.
                    </p>
            </div>
            <div class="mt-8 lg:px-0 px-5">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 items-center py-5">
                    <div class="process-box bg-white p-4 rounded-lg flex flex-col items-center gap-y-4 text-center">
                        <div class="flex items-center justify-center mt-3">
                            <div class="image-box">
                                <img src="{{ asset('imgs/team.png') }}" alt="Team" title="Team" width="64"
                                    height="64" class="" />
                            </div>
                        </div>
                        <h3 class="font-bold text-lg">Qualified Team</h3>
                        <p class="text-sm">
                            Our dedicated subject specialists work tirelessly to provide you with top-quality work. They are qualified from the most reputable universities with Master's and PhD degrees.
                        </p>
                    </div>
                    <div class="process-box bg-white p-4 rounded-lg flex flex-col items-center gap-y-4 text-center">
                        <div class=" flex items-center justify-center mt-3">

                            <div class="image-box">
                                <img src="{{ asset('imgs/plagiarism.png') }}" alt="Zero Plagiarism" title="Zero Plagiarism" width="64"
                                    height="64" class="" />
                            </div>
                        </div>
                        <h3 class="font-bold text-lg">Zero Plagiarism Promise</h3>
                        <p class="text-sm">
                            Your essay writing goes through multiple plagiarism checks using reliable tools such as Turnitin to 100% original and authentic content.
                        </p>
                    </div>
                    <div class="process-box bg-white p-4 rounded-lg flex flex-col items-center gap-y-4 text-center">
                        <div class="flex items-center justify-center mt-3">

                            <div class="image-box">
                                <img src="{{ asset('imgs/communication.png') }}" alt="Communication" title="Communication" width="64"
                                    height="64" class="" />
                            </div>
                        </div>
                        <h3 class="font-bold text-lg">Constant Collaboration</h3>
                        <p class="text-sm">
                            Stay in contact with your writer and get an instant response to your queries, share your feedback and track the progress of your essay.
                        </p>
                    </div>
                    <div class="process-box bg-white p-4 rounded-lg flex flex-col items-center gap-y-4 text-center">
                        <div class="flex items-center justify-center mt-3">

                            <div class="image-box">
                                <img src="{{ asset('imgs/fast-delivery.png') }}" alt="Delivery" title="Delivery" width="64"
                                    height="64" class="" />
                            </div>
                        </div>
                        <h3 class="font-bold text-lg">Punctual Submissions</h3>
                        <p class="text-sm">
                            We always deliver timely so that you have time to review the paper comfortably and ask for edits if you feel something is not right.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Procedure --}}
    <section class="py-10 px-8">
        <div class="container mx-auto">
            <div class="my-5">
                <!-- Process 1 - Bootstrap Brain Component -->
                <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-6 gap-0 items-center">
                    <div class="lg:px-8">
                        <img class="hide-on-mobile" src="{{ asset('imgs/sec-2.webp') }}" width="750" height="500"
                            alt="A female nurse in blue scrubs writing on a clipboard, representing nursing academic assistance across UK." title="Nursing Academic Support across UK" />
                    </div>
                    <div class="lg:mt-0 mt-4">
                        <h2 class="text-4xl font-semibold pb-2">
                           Make Your Nursing Studies Easier with Nursing Essay Writing Help in the UK
                        </h2>
                        <p class="py-2">
                            If you are one of those students who care about their work but require a little assistance in writing crisp, powerful essays, then this is the right place for you. We transform your ideas into a well-structured, realistic-sounding, and understandable essay that flows smoothly. Every essay we deliver is completely unique, grounded in thorough research, and phrased plainly so that every reader may understand it. We believe nursing writing should be both human and professional, as real nurses write with a combination of knowledge and heart. 
                        </p>
                        <div class="flex items-end">
                        <a href="{{route('order')}}" class="button2">
                            <span class="button2_lg">
                                <span class="button2_sl"></span>
                                <span class="button2_text">Place Your Order Today!</span>
                            </span>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Procedure End --}}

    <!-- Writers Start -->
    <section class="professional-experts bg-theme container-fluid py-8">
    <div class="container mx-auto px-5 lg:px-0">
        <div class="text-center mx-auto pb-3">
            <h2 class="text-4xl font-semibold py-5 text-white">
                Skilled Nursing Essay Helpers Who Care About Your Grades
            </h2>
        </div>
        <div class="tab-content-wrapper">

            <div class="tab-content show grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-white writer-box p-4 bg-white shadow-md rounded-lg md:text-left">
                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl font-bold">Abigail</h3>
                        <img src="{{asset('imgs/abigail.webp')}}"
                            class="rounded-full object-cover border border-gray-300" alt="Abigail" title="Abigail" />
                    </div>

                    <span class="e-text">5 Rating</span>
                    <div class="rate py-2 text-white">
                        @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                            @endfor
                    </div>

                    <div class="even ">
                        <span class="red font-bold"> MBA Degree </span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold"> 8 </span>
                        <span class="c-text block"> years of experience</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold block">7,200</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 6,950 </span>
                        <span class="c-text block"> Reviews</span>
                    </div>

                    <div class="flex justify-center items-end pt-4">
                        <a href="{{ route('order') }}" class="button2-white">
                            <span class="button2_lg-white">
                                <span class="button2-white_sl"></span>
                                <span class="button2-white_text">Hire Me</span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="text-white writer-box p-4 bg-white shadow-md rounded-lg md:text-left">
                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl font-bold">Edward</h3>
                        <img src="{{asset('imgs/edward.webp')}}"
                            class="rounded-full object-cover border border-gray-300" alt="Edward" title="Edward" />
                    </div>

                    <span class="e-text">5 Rating</span>
                    <div class="rate py-2 text-white">
                        @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                            @endfor
                    </div>

                    <div class="even ">
                        <span class="red font-bold"> MPhil Degree</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold"> 10 </span>
                        <span class="c-text block"> years of experience</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold block">9,300</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 8,200 </span>
                        <span class="c-text block"> Reviews</span>
                    </div>

                    <div class="flex justify-center items-end pt-4">
                        <a href="{{ route('order') }}" class="button2-white">
                            <span class="button2_lg-white">
                                <span class="button2-white_sl"></span>
                                <span class="button2-white_text">Hire Me</span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="text-white writer-box p-4 bg-white shadow-md rounded-lg md:text-left">
                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl font-bold">Rebecca</h3>
                        <img src="{{asset('imgs/rebecca.webp')}}"
                            class="rounded-full object-cover border border-gray-300" alt="Rebecca" title="Rebecca" />
                    </div>

                    <span class="e-text">5 Rating</span>
                    <div class="rate py-2 text-white">
                        @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                            @endfor
                    </div>

                    <div class="even ">
                        <span class="red font-bold"> PhD Degree</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold"> 9 </span>
                        <span class="c-text block"> years of experience</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold block">8,500</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 7,980 </span>
                        <span class="c-text block"> Reviews</span>
                    </div>

                    <div class="flex justify-center items-end pt-4">
                        <a href="{{ route('order') }}" class="button2-white">
                            <span class="button2_lg-white">
                                <span class="button2-white_sl"></span>
                                <span class="button2-white_text">Hire Me</span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="text-white writer-box p-4 bg-white shadow-md rounded-lg md:text-left">
                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl font-bold">Samuel</h3>
                        <img src="{{asset('imgs/samuel.webp')}}"
                            class="rounded-full object-cover border border-gray-300" alt="Samuel" title="Samuel" />
                    </div>

                    <span class="e-text">5 Rating</span>
                    <div class="rate py-2 text-white">
                        @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                            @endfor
                    </div>

                    <div class="even ">
                        <span class="red font-bold"> MBA Degree</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold"> 7 </span>
                        <span class="c-text block"> years of experience</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold block">6,600</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 5,200 </span>
                        <span class="c-text block"> Reviews</span>
                    </div>

                    <div class="flex justify-center items-end pt-4">
                        <a href="{{ route('order') }}" class="button2-white">
                            <span class="button2_lg-white">
                                <span class="button2-white_sl"></span>
                                <span class="button2-white_text">Hire Me</span>
                            </span>
                        </a>
                    </div>
                </div>

            </div>


        </div>

    </div>
</section>
    <!-- Writers End -->

    <!-- Counter -->
    <section class="counter px-4 md:px-10 lg:px-20 mx-auto lg:mb-8">
        <div class="container py-5 mx-auto">
            <h3 class="text-3xl md:text-4xl text-center lg:mt-5 font-bold">
                Easy Steps to Order Nursing Essay Writing Service in the UK
            </h3>
            <p class="pt-3 text-center">
                We stay by your side from the moment you place your order to the final delivery.
            </p>
            @include('partials.frontend.counter')
        </div>
    </section>
    <!-- End counter -->

    <!-- CTA Section -->
    <section class="cta-section my-10">
        <div class="container mx-auto py-10 lg:px-0 px-5">
            <div class="grid lg:grid-cols-12 items-center">
                <div class="lg:col-span-7 w-full">
                    <h2 class="lg:text-4xl text-3xl text-white">
                        Beat the Clock without Breaking a Sweat!
                    </h2>
                    <p class="py-5 text-white ">
                        Tight on time? Quick won't mean careless because our writers are pros at delivering efficient work when you are running out of time. 
                    </p>
                    <div class="lg:flex md:flex grid gap-4 pt-3">
                        <a href="{{ route('order') }}" class="order-link">
                            Place An Order Now
                        </a>
                        <a href="javascript:void(Tawk_API.toggle())" class="order-link">
                            Chat Now
                        </a>
                    </div>
                </div>
                <div class="relative lg:col-span-5 lg:block hidden">
                    <div class="cta-image">
                        <img src="{{ asset('imgs/cta-sec5.webp') }}" class="image" width="277" height="416"
                            title="Online Nursing Academic Support in UK" alt="Smiling nurse in teal scrubs with a stethoscope, representing 24/7 online nursing academic support in UK.">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section -->

    <!-- Four paragrapgh -->
    <section class="four-sec overflow-hidden px-5 py-10">
        <div class="lg:px-10 px-2">
            <div class="con-main">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 ">
                    <div class="">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                          Get Our Expert Nursing Essay Writer Support to Shine in Your Studies 
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                Writing a nursing essay is about demonstrating your knowledge, empathy, and professionalism. Nursing Assignment Helpers UK is meant to assist you in articulating all three. Our knowledgeable writers know just how to transform your ideas into strong, well-organised essays that reflect genuine nursing insight and help you get positive feedback from teachers. Every essay we produce is written in accordance with academic norms and customised to meet your particular needs. 
                            </p>
                            <p class="text-sm py-3">
                                However, what really distinguishes us is our personal touch. Among our team are academic writers and trained nurses who have an in-depth understanding of nursing education. They bring accuracy, compassion, and practical knowledge to every project. Each essay is reviewed for clarity, structure, and appropriate referencing, helping you communicate nursing concepts effectively and with confidence. So, if you want to save time and increase your marks without tension, rely on the specialists to improve your academic performance. Thousands of happy students worldwide trust in our authentic service and original work.
                            </p>
                        </div>
                    </div>
                    <div class=" ">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Turning Your Knowledge into Remarkable Essays with Nursing Essay Writing Services
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                Nursingassignmenthelpersuk.co.uk helps you turn your enthusiasm for healthcare into meaningful academic work, not only by submitting papers but also by shaping your thoughts and ideas. With our professional nursing essay writing services, we help you create essays that highlight your knowledge, compassion, and critical thinking, the exact traits that distinguish a good nurse. We believe every nursing paper should be more than just meeting the word count. It should reflect your perspective and demonstrate your understanding of nursing theory in real-world scenarios. Our writers ensure your essay stands out with originality, depth, and academic accuracy.
                            </p>
                            <p class="text-sm py-3">
                                Furthermore, every essay is like a personal study guide that shows you how to make good arguments, how research backs up your thoughts, and how to organise your ideas. Our writers tailor it to meet your academic level, institution style, and specific perspective on nursing. Our professionals are here to help you every step of the way, whether you need assistance with proofreading, editing, formatting, referencing, plagiarism checks, or online consultations to discuss your queries and concerns. Apart from essays, we can cater to different types of tasks, such as <a class="sparkle-awd" href="{{ route('nursing.proposal') }}">nursing proposals</a> and <a class="sparkle-awd" href="{{ route('nursing.dissertation') }}">nursing dissertation writing</a>, too.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
                    <div class="">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                           Professional Nursing Essay Help in London That Puts Students First
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                Nursing Assignment Helpers is here to help you transform your actual life experience into essays with depth, understanding, and aim. Our writers pay attention to your goals and craft essays that reflect your unique perspective on healthcare. Every essay we create is customised to your topic and well-crafted according to your needs. To create essays that feel up-to-date and relevant, we draw from the most recent research studies, the latest nursing publications, and ongoing trends in the healthcare industry. 
                            </p>
                            <p class="text-sm py-3">
                                Furthermore, our nursing essay writers in the UK add real-world examples to your papers to make them even more credible and insightful. Every essay aims to help you grasp organisation, improve your arguments, and clearly express your thoughts. We understand that nursing is a challenging field, and your time is valuable. Deadlines add to the pressure while you are already stressing about meeting academic expectations. That’s why we take care of everything from research, organising your ideas, and formatting so that you can relax and focus on other important tasks. Let us help you transform your nursing knowledge into inspiring, informative, and memorable writing.
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                           Turn Late Nights into High Grades with the Help of Our Nursing Essay Writers
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                Every nursing student is juggling care shifts, deadlines, and the ongoing worry about falling behind. NursingAssignmentHelpers understands the pressure that you are facing, and for this reason, we step in to rescue you from all such worries. We do not write robotic essays or rely on templates. We listen. We explore your topic, experiences, and way of thinking. We then transform those rough concepts into essays that come alive, capturing your point of view and grounded in actual nursing practice. 
                            </p>
                            <p class="text-sm py-3">
                                Moreover, we relate theory to the practical insights that make your paper stand out. Trained nurses and scholarly experts among our writers understand how to strike a balance between truth and compassion, as well as how to make your essay sound both genuine and academically rich. Each essay we write enables you to view your own experiences in a more organised and coherent manner, which you may confidently learn from and submit. In addition to that, we offer a range of academic writing services related to nursing, including <a class="sparkle-awd" href="{{ route('nursing.conceptMapping') }}">nursing concept mapping assignments</a>, and more.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-end">
                <a href="{{route('order')}}" class="button2">
                    <span class="button2_lg">
                        <span class="button2_sl"></span>
                        <span class="button2_text">Order Now</span>
                    </span>
                </a>
                </div>
            </div>
        </div>
    </section><!-- Four paragrapgh -->

    <!-- Testimonial Start -->
    <section class="relative bg-theme container-fluid py-8">
        <div class="container mx-auto pb-3">
            <div class="text-center mx-auto">
                <h3 class="text-4xl font-semibold py-5 text-white">
                    <span class="span-header">Real Stories. Real Students. Real Success. </span>
                </h3>
            </div>
            <div class="swiper professional-testimonial-slider">
    <div class="swiper-wrapper">
        <!-- Lena -->
        <div class="swiper-slide">
            <div class="grid grid-cols-1 testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('imgs/daisy.webp') }}" class="img-fluid" width="110"
                                height="110" alt="Daisy" title="Daisy">
                        </div>
                        <div class="name-user">
                            <strong>Daisy </strong>
                            <div class="flex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-comment">
                    <p>"Writing my nursing essay was challenging for me, but this service was a lifesaver. They made difficult ideas so understandable that even my professor complimented the clarity and structure of my essay. I will likely ask them for assistance again in the future.”</p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="grid grid-cols-1 testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('imgs/lucas.webp') }}" class="img-fluid" width="100"
                                height="100" alt="Lucas" title="Lucas">
                        </div>
                        <div class="name-user">
                            <strong>Lucas </strong>
                            <div class="flex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-comment">
                    <p>“The paper was well cited, backed by credible sources and was interesting to read. They even followed APA style properly, and I received positive comments from my teacher. I couldn't be more pleased with the outcome.”</p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="grid grid-cols-1 testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('imgs/hannah.webp') }}" class="img-fluid" width="100"
                                height="100" alt="Hannah" title="Hannah">
                        </div>
                        <div class="name-user">
                            <strong>Hannah </strong>
                            <div class="flex"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-comment">
                    <p>"The team helped me with a difficult essay, and the result was amazing. They immediately grasped the assignment brief and started working on it according to my instructions. The essay was clear and easy to understand, and it used real-life examples and correct citations throughout. </p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="grid grid-cols-1 testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('imgs/liam.webp') }}" class="img-fluid" width="100"
                                height="100" alt="Liam" title="Liam">
                        </div>
                        <div class="name-user">
                            <strong>Liam </strong>
                            <div class="flex"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-comment">
                    <p>"I gave them some notes for my reflective essay, and they wrote such a polished and engaging essay out of it. They ensured every aspect aligned with my guidelines and also made revisions swiftly when I asked for minor adjustments.”</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="flex justify-center items-end mt-3">
    <a href="{{route('reviews')}}" class="order-link">
        View All Reviews
    </a>
    </div>

        </div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </section>
    <!-- Testimonial End -->

    <!-- FAQ -->
    <section class="faqs px-2 md:px-12 lg:px-20 mx-auto py-8">
        <div class="container mx-auto px-3">
            <h3 class="lg:text-4xl text-3xl text-uppercase text-center py-5">
                Frequently Asked Questions – <span class="span-header"> Answered Simply</span>
            </h3>

            <div class="grid lg:grid-cols-2 md:grid-cols-1 grid-cols-1 items-center">
                <div class="text-center">
                    <img src="{{ asset('imgs/faq-img2.webp') }}" class="img-fluid mx-auto hide-on-mobile"
                        alt="Nursing Assignment Helpers UK illustration of a male nurse checking notes for student support." title="Nursing Academic FAQ Support" width="450"
                        height="560">
                </div>
                <div class="space-y-2 py-5">
                    <div class="content border-b faq-internal-styling" data-no="0">
                        <div class="questions cursor-pointer flex p-3 font-bold active" data-no="0">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">1-</p>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class=" text-lg md:font-semibold">
                                    Can you deliver nursing essays on short deadlines?
                                </h4>
                            </div>
                            <div class="icons text-right w-[10%]">
                                <i class="fa fa-minus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide0">
                            Yes, we can deliver nursing essays on short deadlines if you want them early without sacrificing quality. Our writers have developed great speed over the years and always deliver within the promised timeframe.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="1">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="1">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">2-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                    What is the best nursing essay writing service?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide1" style="display: none;">
                            When choosing the best nursing essay writing service, look for one that offers qualified writers who deliver plagiarism-free work, reasonable rates, good customer support, and genuine student reviews.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="2">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="2">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">3-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   Is your Nursing Essay Help UK service plagiarism-free?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide2" style="display: none;">
                            We provide nursing essay support that helps you strengthen your writing skills, organise ideas effectively, and better understand academic requirements. Our platform features real writers who craft content from scratch. They do not use AI tools or plagiarise from other sources. Additionally, each paper is checked using reliable tools, such as Turnitin, to ensure originality.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="3">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="3">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">4-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                    What should be included in a nursing essay introduction?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide3" style="display: none;">
                            A nursing essay introduction should include the main issue and the background of the topic. It should also focus on the importance of the topic in nursing. Also, write a thesis statement focusing on the main idea.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="4">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="4">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">5-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   Will my personal information be kept private?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide4" style="display: none;">
                            Yes, our nursing essay writing services are entirely confidential and private. We do not share your personal information or assignment details with any outsiders. No one is going to know that you used our services.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="5">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="5">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">6-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   Can I get help with referencing in my nursing essay?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide5" style="display: none;">
                            Yes, you can get help with referencing in your nursing essay. Our writers will guide you on various referencing and citation styles, such as APA, MLA, or Harvard, so that your work aligns with university standards.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="6">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="6">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">7-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                    How do you make my nursing essay stand out?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide6" style="display: none;">
                            Our writers follow proper structure and use reliable sources to craft your essays. They have a deep understanding of the topics and real clinical insights that make your essays unique and enjoyable to read. 
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="7">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="7">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">8-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                    Is it okay to use online nursing essay samples for help?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide7" style="display: none;">
                            Yes, it is okay to use online nursing essay samples to get an idea of the tone, structure, and topic. But make sure you write your own original ideas and don't copy someone else’s work, as that would be considered plagiarism. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ -->

    <!-- CTA Section -->
    <section class="cta-form lg:p-5 p-3">
        <div class="rounded-lg lg:py-0 py-8 ">
            <div class="grid lg:grid-cols-12 items-center">
                <div class="lg:col-span-4 lg:block hidden">
                    <img src="{{ asset('imgs/cta-img.webp') }}" class="image mx-auto" width="523" height="349"
                        title="Nurse Reviewing Documents" alt="A nurse holding and reviewing a red folder for documentation." loading="lazy">
                </div>
                <div class="lg:col-span-8 lg:px-10">
                    <h2 class="lg:text-4xl text-3xl text-white lg:text-left text-center pb-3">
                        Low on Budget? Our Affordable Nursing Essay Writing Service in UK Has Your Back 
                    </h2>
                    <div class="mt-5">
                        @include('partials.frontend.form')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section -->
@endsection
