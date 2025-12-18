@extends('layouts.web')
@section('keywords', 'Nursing Literature Review Service UK')
@section('title', 'Affordable Nursing Literature Review Writing Services UK')
@section('description', 'Discover our professional nursing literature review writing services in UK, offering detailed research, insightful analysis, and accurate referencing for grades.')
@section('heroImage', 'https://nursingassignmenthelpersuk.co.uk/public/imgs/header-sec1.webp')
@section('canonical', config('app.app_url') . Request::path())


@section('content')
<style>
    .cta-image img {
    position: absolute;
    bottom: -153px;
    left: 5rem;
}
</style>
    {{-- Header --}}
    <section class="homepage-background bg-gray-800 py-12">
        <div class="container mx-auto">
            <div class="grid lg:grid-cols-12 lg:px-0 px-5 py-10 lg:gap-4 items-center">
                <!-- Left Column -->
                <div class="lg:col-span-7">
                    <h1 class="text-4xl font-bold text-white">Get Ahead in Class with the Most Trusted Nursing Literature Review Service UK
                    </h1>
                    <p class="text-white py-5">
                        Nursingassignmenthelpersuk.co.uk is your go-to spot for perfect nursing literature reviews with over 10 years of experience and 10,000 satisfied students. Every paper is created by skilled nursing specialists who combine both academic accuracy and clinical practice. 
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
                   Why Students Choose Our Services for Perfect Nursing Literature Reviews
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
                                    height="64"  class="" />
                            </div>
                        </div>
                        <h3 class="font-bold text-lg">Zero Plagiarism Promise</h3>
                        <p class="text-sm">
                            Your literature review goes through multiple plagiarism checks using reliable tools such as Turnitin to 100% original and authentic content.
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
                            Stay in contact with your writer and get an instant response to your queries, share your feedback and track the progress of your work.
                        </p>
                    </div>
                    <div class="process-box bg-white p-4 rounded-lg flex flex-col items-center gap-y-4 text-center">
                        <div class="flex items-center justify-center mt-3">

                            <div class="image-box">
                                <img src="{{ asset('imgs/fast-delivery.png') }}" alt="Delivery" title="Delivery" width="64"
                                    height="64"  class="" />
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
                          Make Research Easy with Our Nursing Literature Review Writing Help in UK
                        </h2>
                        <p class="py-2">
                            Nursing Assignment Helpers UK focuses on supporting students with clear structure, proper referencing, and improved academic expression. Our team is here to help you every step of the process, whether you want advice on choosing a topic or polishing your literature review. Why should we worry about literature reviews requiring hours of writing and research? Allow our experts to take care of it for you. They will provide a precisely written, well-organised, and engaging nursing literature review that will wow your teachers.
                        </p>
                        <div class="flex items-end">
                        <a href="{{route('order')}}" class="button2">
                            <span class="button2_lg">
                                <span class="button2_sl"></span>
                                <span class="button2_text">Place Your Order Now!</span>
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
                Behind Every Great Nursing Review is a Great Writer
            </h2>
        </div>
        <div class="tab-content-wrapper">

            <div class="tab-content show grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-white writer-box p-4 bg-white shadow-md rounded-lg md:text-left">
                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl font-bold">Anne</h3>
                        <img src="{{asset('imgs/anne.webp')}}" class="rounded-full object-cover border border-gray-300"
                            alt="Anne" title="Anne" />
                    </div>

                    <span class="e-text">5 Rating</span>
                    <div class="rate py-2 text-white">
                        @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                            @endfor
                    </div>

                    <div class="even ">
                        <span class="red font-bold"> MS Degree </span>
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
                        <span class="red font-bold"> 6,900 </span>
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
                        <h3 class="text-2xl font-bold">Steve</h3>
                        <img src="{{asset('imgs/steve.webp')}}" class="rounded-full object-cover border border-gray-300"
                            alt="Steve" title="Steve" />
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
                        <span class="red font-bold"> 10 </span>
                        <span class="c-text block"> years of experience</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold block">9,270</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 8,070 </span>
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
                        <h3 class="text-2xl font-bold">Harper</h3>
                        <img src="{{asset('imgs/harper-2.webp')}}"
                            class="rounded-full object-cover border border-gray-300" alt="Harper" title="Harper" />
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
                        <span class="red font-bold block">8,056</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 7,600 </span>
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
                        <h3 class="text-2xl font-bold">Julian</h3>
                        <img src="{{asset('imgs/julian.webp')}}"
                            class="rounded-full object-cover border border-gray-300" alt="Julian" title="Julian" />
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
                        <span class="red font-bold block">6,500</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 5,300 </span>
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
                Easy Steps to Order Nursing Literature Review Help Service in the UK
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
                       We Work On Your Timeline Even If It’s 2 AM
                    </h2>
                    <p class="py-5 text-white ">
                        Available round-the-clock, our support team is ready to link you with qualified academic writers who specialise in doing nursing literature reviews quickly. 
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
                          Your Perfect Paper Starts with Our Expert Nursing Literature Review Writing
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                Creating a literature review that is both interesting and academically relevant can be quite challenging. Nursing is a field that requires critical thinking, precision, and analysis based on factual evidence. Nursing Assignment Helpers UK brings together qualified nursing specialists, each with a Master's or PhD degree, who know exactly how to analyse, interpret, and present research in line with your university’s expectations. They go beyond just summarising research; they examine what's already out there, identify areas where there's still a lot to learn, and connect their findings directly to your nursing topic. This makes sure your work is both original and thorough. 
                            </p>
                            <p class="text-sm py-3">
                                Our specialists examine, compare, and assess every study once the information is gathered, highlighting major strengths, flaws, and areas of uncertainty. We find current, peer-reviewed material from reliable databases. This approach not only supports your argument but also demonstrates your capacity for critical thought and ability to grasp difficult medical research. The result? A polished, evidence-based literature review that meets your professor's requirements. We provide prompt academic support for tight deadlines, helping you stay organised and maintain the quality of your work.
                            </p>
                        </div>
                    </div>
                    <div class=" ">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Get Nursing Literature Review Help UK Students Trust for Top Grades
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                Lost in a sea of research articles and nursing journals? Particularly when you are juggling clinical shifts, tests, and assignments, compiling a nursing literature review might seem too draining. That is precisely why Nursing Assignment Helpers UK exists: to lift the load off your shoulders and transform your research mess into a coherent, properly arranged, top-notch literature review. Our work involves creating a narrative of facts, not only gathering sources. We help you seamlessly integrate data, studies, and ideas into a cohesive narrative with genuine relevance.
                            </p>
                            <p class="text-sm py-3">
                                Our experienced writers understand how to present your research within the broader nursing context and interpret complex data effectively. Whether it's patient safety, mental health, public health, or advanced clinical care, every review we write is geared to your nursing topic. We believe that originality, depth, and clarity are essential. Moreover, we offer a range of services that students utilise, including <a class="sparkle-awd" href="{{ route('nursing.coursework') }}">nursing coursework</a> and <a class="sparkle-awd" href="{{ route('nursing.proposal') }}">nursing proposals</a>. Let us take care of your academic load if you want to stop reading perplexing research findings. Our experts will craft an insightful review backed by evidence and written in a flawless manner.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
                    <div class="">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                           Let Our Professional Nursing Literature Review Writers Do the Hard Work For You
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                Concerned about plagiarism in your nursing literature review? At Nursingassignmenthelpersuk.co.uk, we understand that originality in academic work is essential. Your reputation might suffer greatly from plagiarism, which may lead to poor academic performance and grades. That is why our writers are careful and thorough to ensure every review is entirely original and properly cited. 
                            </p>
                            <p class="text-sm py-3">
                                They paraphrase challenging concepts precisely, follow your institution's required format for every reference, and maintain a rigorous academic tone throughout. Once finished, every article is run through Turnitin, a reliable plagiarism detection tool. Deep topic knowledge, research accuracy, and the ethics of professionalism enable our writers to create plagiarism-free work, noted for its genuineness and quality. We are aware that nursing students have hectic lives, which makes it almost impossible to keep up. For this reason, we provide round-the-clock assistance to ensure that help is always available when you need it. Our responsive team responds quickly, whether it is a sudden deadline or an immediate correction. 
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                          Custom Nursing Literature Review Help UK for Your Topic and Style
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                Having trouble turning your nursing literature review into a more analytical one? You're not alone. Many students struggle to strike a balance between academic relevance and research depth. From pharmacology and public health to geriatric care, NursingAssignmentHelpers offers a comprehensive Nursing Literature Review Writing Service encompassing over 30 nursing fields. A subject-specific nursing writer who thoroughly grasps the ideas behind and uses of your chosen topic will handle each assignment. They assess, review, and relate research results to produce insightful observations rather than only summing up studies. 
                            </p>
                            <p class="text-sm py-3">
                                Our writers ensure that your work demonstrates depth, clarity, and a powerful analytical voice that meets the highest standards in academia. We have the perfect specialist ready to create a literature review that shows accuracy and originality, regardless of how tricky your topic is. Our specialist nursing literature review writer in UK can help you establish a strong foundation for your research. One of the most challenging aspects of producing a literature review is finding reliable sources and critically evaluating them. We also provide expert support for <a class="sparkle-awd" href="{{ route('nursing.discussion') }}">nursing discussion posts</a> and <a class="sparkle-awd" href="{{ route('nursing.conceptMapping') }}">nursing concept mapping assignments</a>, ensuring you get comprehensive academic assistance. Once you place an order, we match a skilled writer to your topic to deliver high-quality, tailored work every time.
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
                    <span class="span-header">Real Stories. Real Students. Real Success.</span
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
                            <img src="{{ asset('imgs/ben.webp') }}" class="img-fluid" width="110"
                                height="110" alt="Ben" title="Ben">
                        </div>
                        <div class="name-user">
                            <strong>Ben </strong>
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
                    <p>"I had no clue how to link studies or formulate critical ideas while working on my nursing literature review. This platform saved me. My writer produced a work both creative and perceptive, organised my ideas, and drew upon modern research. Highly recommended for nursing students! </p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="grid grid-cols-1 testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('imgs/stacey.webp') }}" class="img-fluid" width="100"
                                height="100" alt="Stacey" title="Stacey">
                        </div>
                        <div class="name-user">
                            <strong>Stacey </strong>
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
                    <p>"I never imagined an online assistance to be this reliable. The writer assigned to me was a genuine nursing expert who knew precisely how to organise everything. They even assisted me in explaining my topic and directing me on referencing. It was a great experience!" </p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="grid grid-cols-1 testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('imgs/clarke.webp') }}" class="img-fluid" width="100"
                                height="100" alt="Clarke" title="Clarke">
                        </div>
                        <div class="name-user">
                            <strong>Clarke </strong>
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
                    <p>"Their crew is super talented, no doubt! I needed a literature review, and they provided it flawlessly. The review included a thorough analysis and included proper referencing throughout, earning me a distinction. Keep up the good work!” </p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="grid grid-cols-1 testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('imgs/laura.webp') }}" class="img-fluid" width="100"
                                height="100" alt="Laura" title="Laura">
                        </div>
                        <div class="name-user">
                            <strong>Laura </strong>
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
                    <p>“I have used several writing services before, but none have been as good as this one. The writer was well-versed in the topic and incorporated trusted research sources. The best part was they handled revisions very well.”</p>
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
                                   How do you start writing a literature review?
                                </h4>
                            </div>
                            <div class="icons text-right w-[10%]">
                                <i class="fa fa-minus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide0">
                            First of all, choose a topic and look for reliable sources such as books, journals and case studies related to it. Look for gaps in research or important themes. After gathering all the material, organise it into sections. Then write an introduction which explains the purpose of your review.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="1">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="1">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">2-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                    What are the main types of literature reviews in nursing research?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide1" style="display: none;">
                            In nursing research, the main types of literature reviews are narrative reviews, systematic reviews, integrative reviews, and scoping reviews.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="2">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="2">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">3-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   How do I choose a literature review topic?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide2" style="display: none;">
                            Choose a topic that you find interesting and relevant to your nursing study. It shouldn't be too broad or too narrow.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="3">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="3">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">4-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   How long should a nursing literature review be?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide3" style="display: none;">
                            It depends on your course requirements and the purpose of your research. However, A nursing literature review is usually 1000 to 3000 words long. For dissertations or theses, the minimum word count is 5,000 words or more.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="4">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="4">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">5-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   What is the purpose of a literature review in nursing?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide4" style="display: none;">
                            The purpose of a literature review is to highlight existing research on the topic and to pinpoint gaps and key findings. 
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="5">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="5">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">6-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   What sources are best for a nursing literature review?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide5" style="display: none;">
                            The best sources for a nursing literature review include peer-reviewed journals, academic books, and reputable healthcare databases, which provide credible information. 
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="6">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="6">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">7-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                    Can I pay someone to write a literature review?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide6" style="display: none;">
                            Yes, you can pay someone to write your literature review. Many students utilise these services when they are short on time or require professional guidance. However, ensure that you select a reliable service that upholds academic integrity.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="7">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="7">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">8-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   How do I organise my nursing literature review?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide7" style="display: none;">
                            Start with an introduction that explains your topic. Then, create sections based on common themes, ideas, or trends. Use headings and subheadings to ensure clear and structured content. Write a critical analysis section in which you highlight gaps and compare findings. 
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
                       Top-Tier Nursing Literature Reviews Made Easy and Affordable 
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
