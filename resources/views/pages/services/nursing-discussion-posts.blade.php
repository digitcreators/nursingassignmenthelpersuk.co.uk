@extends('layouts.web')
@section('keywords', 'Nursing Discussion Post Help UK')
@section('title', 'Top-Quality Nursing Discussion Post Help UK | 24/7 Service')
@section('description', 'Boost your grades with our best nursing discussion post help in UK. We offer expert guidance, 24/7 support, and 100% original, high-quality academic work.')
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
                    <h1 class="text-4xl font-bold text-white">Own the Discussion Board with Our Next-Level Nursing Discussion Post Help UK
                    </h1>
                    <p class="text-white py-5">
                        For over 10 years, Nursingassignmenthelpersuk.co.uk has provided top-notch nursing discussion post help in the UK, assisting 10,000+ students. Our experts follow the latest APA guidelines and nursing frameworks to ensure every submission meets academic expectations.
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
                   The Secret Behind Our Nursing Students’ Success in Discussion Posts
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
                                    height="64"  class="" />
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
                            Your discussion post goes through multiple plagiarism checks using reliable tools such as Turnitin to 100% original and authentic content.
                        </p>
                    </div>
                    <div class="process-box bg-white p-4 rounded-lg flex flex-col items-center gap-y-4 text-center">
                        <div class="flex items-center justify-center mt-3">

                            <div class="image-box">
                                <img src="{{ asset('imgs/communication.png') }}" alt="Communication" title="Communication" width="64"
                                    height="64"  class="" />
                            </div>
                        </div>
                        <h3 class="font-bold text-lg">Constant Collaboration</h3>
                        <p class="text-sm">
                            Stay in contact with your writer and get an instant response to your queries, share your feedback and track the progress of your discussion post.
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
                            We always deliver timely so that you have time to review the post comfortably and ask for edits if you feel something is not right.
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
                           Make Every Nursing Discussion Post Count with Precision and Insight
                        </h2>
                        <p class="py-2">
                            Nursing discussion posts show your capacity to think critically and interact with your peers. We at Nursing Assignment Helpers help you create discussion posts that go beyond simple responses. Our writers know how to combine academic knowledge with real-world insights, so that your posts stand out in both depth and tone. What makes our services different? Our emphasis is on real interaction: writing your post to sound like you —sharper and supported by reliable sources. We write posts showing excellent knowledge and professionalism. 
                        </p>
                        <div class="flex items-end">
                        <a href="{{route('order')}}" class="button2">
                            <span class="button2_lg">
                                <span class="button2_sl"></span>
                                <span class="button2_text">Hire Reliable Nursing Discussion Posts Editors!</span>
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
                Meet the Nursing Gurus Powering Your Assignments
            </h2>
        </div>
        <div class="tab-content-wrapper">

            <div class="tab-content show grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-white writer-box p-4 bg-white shadow-md rounded-lg md:text-left">
                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl font-bold">Lucy</h3>
                        <img src="{{asset('imgs/lucy.webp')}}" class="rounded-full object-cover border border-gray-300"
                            alt="lucy" title="lucy" />
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
                        <span class="red font-bold"> 9 </span>
                        <span class="c-text block"> years of experience</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold block">8,950</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 7,480 </span>
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
                        <h3 class="text-2xl font-bold">Benjamin</h3>
                        <img src="{{asset('imgs/benjamin.webp')}}"
                            class="rounded-full object-cover border border-gray-300" alt="Benjamin" title="Benjamin" />
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
                        <span class="red font-bold"> 8 </span>
                        <span class="c-text block"> years of experience</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold block">7,200</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 6,520 </span>
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
                        <h3 class="text-2xl font-bold">Charlotte</h3>
                        <img src="{{asset('imgs/charloette.webp')}}"
                            class="rounded-full object-cover border border-gray-300" alt="Charlotte"
                            title="Charlotte" />
                    </div>

                    <span class="e-text">5 Rating</span>
                    <div class="rate py-2 text-white">
                        @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                            @endfor
                    </div>

                    <div class="even ">
                        <span class="red font-bold"> MS Degree</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold"> 10 </span>
                        <span class="c-text block"> years of experience</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold block">9,800</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 8,456 </span>
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
                        <h3 class="text-2xl font-bold">Ella</h3>
                        <img src="{{asset('imgs/ella.webp')}}" class="rounded-full object-cover border border-gray-300"
                            alt="Ella" title="Ella" />
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
                        <span class="red font-bold block">7,500</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 6,435 </span>
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
                Easy Steps to Order Nursing Discussion Post Writing Services Online
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
                       Urgent Nursing Post? Consider It Done!
                    </h2>
                    <p class="py-5 text-white ">
                        Let our fast-track writing team produce top-notch content for your nursing discussion post while you sit back and relax. 
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
                          Experience Effortless Support with Our Expert Nursing Discussion Post Help  
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                At Nursing Assignment Helpers UK, we transform boring and dull posts into eye-catching pieces that showcase your critical thinking and awareness. Our nursing writers know how to make you shine, whether you're discussing patient care, ethics, or evidence-based practice. We also connect your ideas to real-life nursing experiences to ensure your posts seem human, meaningful, and well-informed. Every article is written to match the learning goals of your course and represent your unique voice. 
                            </p>
                            <p class="text-sm py-3">
                                With clinical and academic experience, our professional writers know how to produce posts that will wow your teachers and engage your peers. Through our nursing discussion post writing services, they use trustworthy sources, compelling arguments, and a polished tone to promote meaningful conversation. We also assist with peer responses, guiding you to reply thoughtfully. If meeting weekly discussion deadlines or finding the right words is challenging, our team is here to help. Get quick, unique, and customized support, and let your discussion posts stand out with the right insights and phrasing!
                            </p>
                        </div>
                    </div>
                    <div class=" ">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Fuel Your Forums with Flawless Nursing Discussion Post Writing Assistance 
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                Most nursing students undervalue the strength of a carefully crafted discussion post. Showing your capacity to think critically, consider clinical experiences, and engage in professional debate is about more than just answering a question. Every discussion post can be transformed into a reflection on your professional development as a nurse with our help at NursingAssignmentHelpers UK. Our writers go beyond simply achieving word counts. They create posts that provoke engagement by naturally and insightfully blending theory with practice. 
                            </p>
                            <p class="text-sm py-3">
                                Every response we write is based on actual clinical experience, not meaningless scholarly jargon. Whether you want us to help you with a <a class="sparkle-awd" href="{{ route('nursing.conceptMapping') }}">nursing concept mapping assignment</a> or a <a class="sparkle-awd" href="{{ route('nursing.literature') }}">nursing literature review</a>, we add accuracy, originality, and empathy to every word. That's why our specialists make sure your nursing discussion posts read naturally and casually, not robotically. You will obtain material that not only earns credit but also earns respect from others. We also guide you on maintaining engagement throughout your discussion thread. Plus, our support team makes sure to meet deadlines so that you never miss your submission. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
                    <div class="">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                           Professional Nursing Discussion Post That Elevates Your Learning Experience 
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                While writing a nursing discussion post, you have to sound professional yet empathetic. We understand at Nursingassignmenthelpersuk.co.uk that your post is not just a simple assignment. This is why our professionals help you create posts that combine medical information with practical clinical relevance. We turn your responses into interesting conversations that mirror your awareness and empathy. We assist you in connecting theory to action — that is, in relating classroom knowledge to real patient situations, challenges, and team experiences. 
                            </p>
                            <p class="text-sm py-3">
                                We also check that your tone matches your academic context: formal enough to satisfy grading standards but natural enough to feel genuine. Our writers focuses on helping you create work that is structured, logical, and aligned with appropriate academic tone and depth. We help you at every stage if you're uncertain of how to cite sources or respond to peers. We have real nursing experts assisting you to establish credibility. So we don't go for templates or AI-generated content. Every post that we create follows your topic and course requirements. Apart from discussion posts, you can get complete guidance and support from us on <a class="sparkle-awd" href="{{ route('nursing.coursework') }}">nursing coursework</a> and <a class="sparkle-awd" href="{{ route('nursing.proposal') }}">nursing proposals</a> as well.
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                          Find Your Perfect Nursing Discussion Posts Writer Across the UK Today
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                Every discussion post in nursing school is an opportunity to show your knowledge, although it may be difficult to convey complicated concepts with the right words. That's when Nursing Assignment Helpers steps in to turn your ideas into succinct, polished discussion posts to make an impact. Every discussion post we create aims to make your professor stop and pay attention. We reinforce your argument and let your post flow naturally. Our experienced nurses and educators are aware of what professors seek—clarity, organisation, and critical thinking. 
                            </p>
                            <p class="text-sm py-3">
                                We create responses that are interesting and logical if you find it difficult to answer your peers. Under time constraint? No problem at all. Our nursing specialists provide accuracy and attention to detail, whether you need a post urgently or need help with perfecting your draft. We treat each discussion post as a learning opportunity to build your confidence, improve your communication, and prepare you for class debates. With our support, you will not only meet the word count but also a post that captures your unique perspective and real academic depth.
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
                    <span class="span-header">Real Stories. Real Students. Real Success.</span>
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
                            <img src="{{ asset('imgs/casey.webp') }}" class="img-fluid" width="110"
                                height="110" alt="Casey" title="Casey">
                        </div>
                        <div class="name-user">
                            <strong>Casey </strong>
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
                    <p>"Writing thoughtful discussion posts for my nursing class was difficult for me, but this service made it easy. The writer knew my topic really well and made my post seem both natural and professional.”</p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="grid grid-cols-1 testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('imgs/morgan.webp') }}" class="img-fluid" width="100"
                                height="100" alt="Morgan" title="Morgan">
                        </div>
                        <div class="name-user">
                            <strong>Morgan </strong>
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
                    <p>“The team did a fantastic job. My discussion post was interesting, clear, and well-written. It wowed my teacher, and I will absolutely seek their assistance again in the future. Thanks a million!” </p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="grid grid-cols-1 testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('imgs/ethan.webp') }}" class="img-fluid" width="100"
                                height="100" alt="Ethan" title="Ethan">
                        </div>
                        <div class="name-user">
                            <strong>Ethan </strong>
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
                    <p>"I needed immediate assistance with my nursing discussion post, and they provided it on time without sacrificing quality. The material was clearly organised and simple to understand. Great services!" </p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="grid grid-cols-1 testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('imgs/grace-2.webp') }}" class="img-fluid" width="100"
                                height="100" alt="Grace" title="Grace">
                        </div>
                        <div class="name-user">
                            <strong>Grace </strong>
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
                    <p>"The writer turned my messy notes into a polished, perceptive discussion post. They were very familiar with nursing concepts, and communication was seamless all the time. Keep up the good work!"</p>
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
                                   Are your discussion posts plagiarism-free?
                                </h4>
                            </div>
                            <div class="icons text-right w-[10%]">
                                <i class="fa fa-minus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide0">
                            Yes, our discussion posts are original and free of plagiarism. Our platform features real writers who craft content from scratch. They do not use AI tools or plagiarise from other sources. Additionally, each paper is checked using reliable tools, such as Turnitin, to ensure originality.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="1">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="1">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">2-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                    How can I improve my nursing discussion posts?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide1" style="display: none;">
                            You can improve your discussion posts by using reliable sources, staying focused on the topic and also proofreading your work at the end. Don't forget to cite your sources appropriately to ensure the credibility of your work.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="2">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="2">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">3-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   What is a good discussion post?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide2" style="display: none;">
                            A good discussion post is supported by evidence, meaningful, and is clearly written. It shows your understanding and critical thinking, and connects theory to practical examples. 
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="3">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="3">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">4-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                    What should I avoid when writing a discussion post?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide3" style="display: none;">
                            You should always cite sources and use clear, professional language in your discussion post. Avoid writing vague and long or off-topic replies.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="4">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="4">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">5-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   How long should a discussion post be?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide4" style="display: none;">
                            A good discussion post should be 150-250 words long. It should reflect your understanding and insights, while remaining concise so it is readable and engaging.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="5">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="5">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">6-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   Should I cite sources in my nursing discussion post?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide5" style="display: none;">
                            Yes, you should cite sources in your discussion post when you refer to theories, research, or statistics. When you properly cite your work, it adds to the credibility and shows that you follow academic integrity.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="6">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="6">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">7-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                    Can I ask questions in a discussion post?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide6" style="display: none;">
                            Yes, you can ask questions in a discussion post as it shows engagement, encourages interaction and helps promote meaningful conversation.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="7">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="7">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">8-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                    How do I respond to a peer’s discussion post effectively?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide7" style="display: none;">
                            You can respond to a peer’s discussion post effectively by acknowledging their viewpoint, sharing your perspective or evidence to support it, and asking a thoughtful question to keep the discussion going.
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
                       Let's Transform Your Nursing Concepts into Top-Rated Discussion Posts Today! 
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
