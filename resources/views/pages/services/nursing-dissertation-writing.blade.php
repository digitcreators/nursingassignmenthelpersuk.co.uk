@extends('layouts.web')
@section('keywords', 'Nursing Dissertation Writing Services UK')
@section('title', 'UK #1 Nursing Dissertation Writing Services For Top Grades')
@section('description', 'Perfect your papers with our professional nursing dissertation writing services in UK. Submit flawless work that fully meets UK academic standards.')
@section('heroImage', 'https://nursingassignmenthelpersuk.co.uk/public/imgs/header-dissertation.webp')
@section('canonical', config('app.app_url') . Request::path())


@section('content')
    {{-- Header --}}
    <section class="homepage-background bg-gray-800 py-12">
        <div class="container mx-auto">
            <div class="grid lg:grid-cols-12 lg:px-0 px-5 py-10 lg:gap-4 items-center">
                <!-- Left Column -->
                <div class="lg:col-span-7">
                    <h1 class="text-4xl font-bold text-white">Improve Your Grades with Our Nursing Dissertation Writing Services in UK
                    </h1>
                    <p class="text-white py-5">
                        For more than 10 years, we at Nursingassignmenthelpersuk.co.uk have been helping nursing students achieve academic success with over 10,000 satisfied learners. Our best nursing dissertation writing services in the UK combine expertise, precision, and thorough research to deliver flawless dissertations every time.
                    </p>
                    @include('partials.frontend.calculator')
                </div>
                <div class="col-span-12 lg:col-span-5 mt-4 lg:mt-0">
                    <img class="ml-auto" src="{{ asset('imgs/header-dissertation.webp') }}" width="331" height="412" loading="eager"
                        alt="A confident female nurse in navy scrubs with stethoscope, representing nursing dissertation writing support across UK" title="Nursing Dissertation Writing Support in UK" />
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
                   Why Nursing Students Trust Us for Dissertation Excellence 
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
                                    height="64"  class="" />
                            </div>
                        </div>
                        <h3 class="font-bold text-lg">Zero Plagiarism Promise</h3>
                        <p class="text-sm">
                            Your dissertation writing goes through multiple plagiarism checks using reliable tools such as Turnitin to 100% original and authentic content.
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
                            Stay in contact with your writer and get an instant response to your queries, share your feedback and track the progress of your dissertation.
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
                            alt="A female nurse in blue scrubs writing on a clipboard, representing nursing academic assistance across UK" title="Nursing Academic Support across UK" />
                    </div>
                    <div class="lg:mt-0 mt-4">
                        <h2 class="text-4xl font-semibold pb-2">
                            Experience the Best Nursing Dissertation Writing Help for Top Grades
                        </h2>
                        <p class="py-2">
                            Our writers come from healthcare backgrounds with practical experience and knowledge of nursing dissertation writing requirements. They know how to align your paper with university standards. They assist you in selecting relevant nursing topics, matching them with your field of expertise, and creating research plans that reflect actual clinical relevance. We also pay close attention to clarity and accuracy. Every component of your dissertation flows naturally, backed by the most recent UK nursing journals. Furthermore, we offer flexible, fast-track nursing dissertation help without sacrificing quality. 
                        </p>
                        <div class="flex items-end">
                        <a href="{{route('order')}}" class="button2">
                            <span class="button2_lg">
                                <span class="button2_sl"></span>
                                <span class="button2_text"> Hire a Professional Nursing Dissertation Writer!</span>
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
                Meet Our Expert Nursing Dissertation Writers UK
            </h2>
        </div>
        <div class="tab-content-wrapper">

            <div class="tab-content show grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-white writer-box p-4 bg-white shadow-md rounded-lg md:text-left">
                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl font-bold">Phoebe</h3>
                        <img src="{{asset('imgs/phoebe.webp')}}"
                            class="rounded-full object-cover border border-gray-300" 
                            alt="Phoebe" title="Phoebe"/>
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
                        <span class="red font-bold"> 8 </span>
                        <span class="c-text block"> years of experience</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold block">7,850</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 6,765 </span>
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
                        <h3 class="text-2xl font-bold">Aaron</h3>
                        <img src="{{asset('imgs/aron.webp')}}"
                            class="rounded-full object-cover border border-gray-300" 
                            alt="Aaron" title="Aaron"/>
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
                        <span class="red font-bold"> 9 </span>
                        <span class="c-text block"> years of experience</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold block">8,720</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 7,540 </span>
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
                        <h3 class="text-2xl font-bold">Ruby</h3>
                        <img src="{{asset('imgs/ruby.webp')}}"
                            class="rounded-full object-cover border border-gray-300" 
                            alt="Ruby" title="Ruby"/>
                    </div>

                    <span class="e-text">5 Rating</span>
                    <div class="rate py-2 text-white">
                        @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                            @endfor
                    </div>

                    <div class="even ">
                        <span class="red font-bold"> PhD in Healthcare Studies</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold"> 10 </span>
                        <span class="c-text block"> years of experience</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold block">9,900</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 8,540 </span>
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
                        <h3 class="text-2xl font-bold">Henry</h3>
                        <img src="{{asset('imgs/henry.webp')}}"
                            class="rounded-full object-cover border border-gray-300" 
                            alt="Henry" title="Henry"/>
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
                        <span class="red font-bold"> 7 </span>
                        <span class="c-text block"> years of experience</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold block">6,680</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 5,098 </span>
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
                Easy Steps to Order Nursing Dissertation Help Online in the UK
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
                        Your Search for Quick UK Nursing Dissertation Online Help Ends Here
                    </h2>
                    <p class="py-5 text-white ">
                        Our writers respond in minutes if you need quick fixes or answers to your queries. Their guidance will enable you to submit polished work before the deadline sneaks up!
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
                            title="Online Nursing Academic Support in UK" alt="Smiling nurse in teal scrubs with a stethoscope, representing 24/7 online nursing academic support in UK">
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
                          Master Your Final Year with Our Nursing Dissertation Writing Service  
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                Sometimes, even the most capable nursing students get confused by the formats and exhausted by researching and reading articles. At Nursing Assignment Helpers UK, we create dissertations that bridge the worlds of academia and healthcare. Every dissertation is customised to meet your particular objectives, so your research seems professional and academically strong. From choosing a subject to reviewing the literature, design, and final editing, our experienced nursing writers will be by your side every step. We also provide support with <a class="sparkle-awd" href="{{ route('nursing.discussion') }}">nursing discussion posts</a> and crafting a precise <a class="sparkle-awd" href="{{ route('nursing.proposal') }}">nursing proposal</a> to ensure all aspects of your coursework are covered.
                            </p>
                            <p class="text-sm py-3">
                                With a deep understanding of UK university criteria, our writers are trained nurses and academic experts who ensure your work meets or exceeds your supervisors' expectations. By choosing our best nursing dissertation writing service, you get accuracy, structure, and scholarly flair added to your work, no matter the topic of your dissertation. We also help ensure your paper passes every plagiarism check and is correctly referenced (APA, Harvard, or any style you choose). Don't panic if your deadline is close and your research feels overwhelming. Let our specialists transform your ideas into a dissertation that reflects your nursing passion and impresses your teachers.
                            </p>
                        </div>
                    </div>
                    <div class=" ">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            We Truly Care About Your Success with Nursing Dissertation Help in UK
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                Is your dissertation giving you nightmares? Or is the expense of hiring a professional writing service to do your work worrying you? If so, then you happen to be in the right place. NursingAssignmentHelpers caters to all your needs, thanks to an expert team that boasts outstanding nursing expertise. We are fully equipped with all the knowledge, skills and experience to provide you with the finest dissertation solutions. Our qualified writers use only reliable sources to gather information on the topic and have a strong understanding of citation styles.
                            </p>
                            <p class="text-sm py-3">
                                Our professionals simplify every section, such as methodology, data analysis, and literature review, so you do not get stuck and can understand everything. Our practical nursing expertise sets us apart. Among our team are intellectual nurses who understand how practice relates to theory. This means that your paper will not only satisfy academic criteria but also capture the practical knowledge. Time and trust are also very important to us. With free revisions and total privacy, you will get your dissertation well ahead of the deadline. Plus, all your work will be Turnitin-approved, plagiarism-free, and unique. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
                    <div class="">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                           Students Call Us Their Secret Weapon for the Best Nursing Dissertation Help
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                A nursing dissertation reflects your growth, empathy, and knowledge. At Nursing Assignment Helpers, we make sure your dissertation represents you and highlights your particular understanding in a way that makes you stand out from everyone else. The level of personal attention in our approach distinguishes our service. First of all, we want to know what you're interested in, whether it is nursing ethics or healthcare technology and then assist you in formulating a research topic that seems interesting and relevant. Our professionals collaborate with you rather than create for you, ensuring that every chapter captures your point of view. 
                            </p>
                            <p class="text-sm py-3">
                                With logic, compassion, and clarity, our writers know how to transform difficult data into an engaging dissertation that demonstrates your understanding of the topic. The outcome is a dissertation that highlights your grasp of patient care, leadership and evidence-based practice. Moreover, we help you with everything, including data analysis, referencing, proposal writing, proofreading, editing, etc. Our writers stay up to date with the latest research trends and healthcare policies, making your dissertation academically strong and high-scoring. 
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                           Nursing Dissertation Help That Feels Like Having a Mentor By Your Side
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                At Nursingassignmenthelpersuk.co.uk, we help you create a piece of research that feels real and emotionally connects with readers. Our writers pay attention to your ideas, your problems, and your vision. They help you produce a paper that is original, human and compliant with all the academic standards. We also value cooperation. From beginning to end, you stay involved by reviewing drafts, offering insights, and directing our writers to ensure the final result reflects your knowledge rather than that of someone else. Every argument, source, and conclusion is precisely crafted to reflect your voice and academic aspirations. 
                            </p>
                            <p class="text-sm py-3">
                                Unlike other services, we emphasise turning your research into usable and relevant knowledge. Our nursing dissertation support in the UK helps you understand how theoretical concepts connect with real clinical practice, offering guidance that strengthens your ability to apply classroom learning to hospital scenarios. This strategy gives your work real influence, not just readability. From <a class="sparkle-awd" href="{{ route('nursing.conceptMapping') }}">nursing concept mapping</a> to <a class="sparkle-awd" href="{{ route('nursing.literature') }}">nursing literature reviews</a>, we make sure that each chapter reads coherently. And yes, we deliver on time, keep communication open, and edit until you're really happy. 
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
                            <img src="{{ asset('imgs/william.webp') }}" class="img-fluid" width="110"
                                height="110" alt="William" title="William">
                        </div>
                        <div class="name-user">
                            <strong>William </strong>
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
                    <p>"My nursing dissertation was giving me a hard time, and these professionals rescued me! They not only helped me arrange my ideas but also helped me improve. Definitely worth every penny!” </p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="grid grid-cols-1 testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('imgs/jessica.webp') }}" class="img-fluid" width="100"
                                height="100" alt="Jessica" title="Jessica">
                        </div>
                        <div class="name-user">
                            <strong>Jessica </strong>
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
                    <p>“Finding time to write was impossible as a full-time nurse. The crew handled my dissertation with such competence. They understood my topic and kept me well-informed throughout. Superb services!”</p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="grid grid-cols-1 testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('imgs/leo.webp') }}" class="img-fluid" width="100"
                                height="100" alt="Leo" title="Leo">
                        </div>
                        <div class="name-user">
                            <strong>Leo </strong>
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
                    <p>"I wanted something beyond a generic dissertation. The writer assigned to me paid great attention and based every chapter on my thoughts. The final paper was so polished and professional.”</p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="grid grid-cols-1 testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('imgs/megan.webp') }}" class="img-fluid" width="100"
                                height="100" alt="Megan" title="Megan">
                        </div>
                        <div class="name-user">
                            <strong>Megan </strong>
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
                    <p>"I was apprehensive about using an online dissertation writing company, but this group helped me to change my opinion. My nursing dissertation was thoroughly referenced, well-written, and correctly formatted in accordance with UK criteria.”</p>
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
                        alt="Nursing Assignment Helpers UK illustration of a male nurse checking notes for student support" title="Nursing Academic FAQ Support" width="450"
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
                                   Are your nursing dissertation writers qualified?
                                </h4>
                            </div>
                            <div class="icons text-right w-[10%]">
                                <i class="fa fa-minus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide0">
                            Our writers hold advanced degrees in nursing and related healthcare fields. They boast Master's and PhD qualifications from leading institutes and have years of experience in dissertation writing. They are subject experts and ensure that every paper is well-written, insightful, and accurate
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="1">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="1">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">2-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                    How do I choose a dissertation topic for nursing?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide1" style="display: none;">
                            You should choose a topic that you find interesting, related to your field, that fulfils your research goals, and that has sufficient material to research. You can also ask your supervisor to guide you on this.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="2">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="2">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">3-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   Can I get help with nursing dissertation editing and proofreading?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide2" style="display: none;">
                            Yes, of course, we offer editing and proofreading services for nursing dissertations, refining aspects such as grammar, structure, format, vocabulary, referencing and other elements. Our eagle-eyed editors make sure there are no flaws in your work.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="3">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="3">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">4-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                    How long does it take to complete a nursing dissertation?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide3" style="display: none;">
                            It depends on factors such as the deadline, word count and complexity of the project, but we always deliver your work within the promised timeframe. We can also accommodate urgent requests if you want it early without sacrificing quality.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="4">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="4">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">5-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   What are the key components of a nursing dissertation?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide4" style="display: none;">
                            The key steps in writing a dissertation include: selecting a topic, conducting research, writing a proposal, conducting a literature review, developing a methodology, conducting analysis, organising, proofreading, and editing.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="5">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="5">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">6-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   Is it ethical to use nursing dissertation writing services?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide5" style="display: none;">
                            Yes, it is ethical to use nursing dissertation writing services. Thousands of students all over the UK hire these services when they need professional guidance or are pressed for time. When used correctly, it does not violate academic integrity.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="6">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="6">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">7-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                    How much do dissertation writing services cost?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide6" style="display: none;">
                            It depends on various factors, such as complexity, deadline, and academic level. We offer student-friendly packages to fit your budget and needs. Besides, there are no hidden or surprise costs.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="7">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="7">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">8-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                    How do I ensure my nursing dissertation is plagiarism-free?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide7" style="display: none;">
                            Our nursing dissertation support is designed to help you improve clarity, structure, and understanding through guidance that aligns with academic expectations. Our platform features real writers who craft content from scratch. They do not use AI tools or plagiarise from other sources. Additionally, each paper is checked using reliable tools, such as Turnitin, to ensure originality.
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
                        title="Nurse Reviewing Documents" alt="A nurse holding and reviewing a red folder for documentation" loading="lazy">
                </div>
                <div class="lg:col-span-8 lg:px-10">
                    <h2 class="lg:text-4xl text-3xl text-white lg:text-left text-center pb-3">
                        Get Cheapest Nursing Dissertations That Never Compromise on Quality!
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
