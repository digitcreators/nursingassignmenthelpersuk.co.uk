@extends('layouts.web')
@section('keywords', 'Nursing Research Proposal Writing Services UK')
@section('title', 'Affordable Nursing Research Proposal Writing Services UK')
@section('description', 'Experience our nursing research proposal writing services in UK, where expert nursing writers combine academic accuracy with healthcare knowledge.')
@section('heroImage', 'https://nursingassignmenthelpersuk.co.uk/public/imgs/nursing-proposal.webp')
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
                    <h1 class="text-4xl font-bold text-white">Get Ideas Approved with Our Nursing Research Proposal Writing Services UK
                    </h1>
                    <p class="text-white py-5">
                        Nursing students seeking to start strong with perfect nursing research proposals mostly visit Nursingassignmenthelpersuk.co.uk. Having 10+ years of expertise and thousands of successful submissions, we know exactly what your professors want in a winning proposal. 
                    </p>
                    @include('partials.frontend.calculator')
                </div>
                <div class="col-span-12 lg:col-span-5 mt-4 lg:mt-0">
                    <img class="ml-auto" src="{{ asset('imgs/nursing-proposal.webp') }}" width="331" height="412" loading="eager"
                        alt="A female nurse in blue scrubs holding a notebook, representing nursing research proposal writing support across UK." title="Nursing Research Proposal Writing Service in UK" />
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
                   Why Students Choose Our Services for Exceptional Nursing Proposals
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
                            Your nursing proposal goes through multiple plagiarism checks using reliable tools such as Turnitin to 100% original and authentic content.
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
                            Shape Your Research Dreams with the UK’s Best Nursing Proposal Help
                        </h2>
                        <p class="py-2">
                            We understand that your nursing research journey begins with your proposal. Our professional writers delve deeply into recent nursing research, current healthcare issues, and evidence-based methods to produce ideas that stand out for their creativity and influence. We assign you a subject expert who makes sure every part of the proposal, from the introduction to referencing, is just right for you. Moreover, we encourage open communication, allowing you to stay in touch with your writer, review drafts, and collaborate to refine ideas. 
                        </p>
                        <div class="flex items-end">
                        <a href="{{route('order')}}" class="button2">
                            <span class="button2_lg">
                                <span class="button2_sl"></span>
                                <span class="button2_text">Get Started Now!</span>
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
                Get to Know the Nursing Proposal Writers Who Make Success Look Easy
            </h2>
        </div>
        <div class="tab-content-wrapper">

            <div class="tab-content show grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-white writer-box p-4 bg-white shadow-md rounded-lg md:text-left">
                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl font-bold">Jennifer</h3>
                        <img src="{{asset('imgs/jennifer.webp')}}"
                            class="rounded-full object-cover border border-gray-300" alt="Jennifer" title="Jennifer" />
                    </div>

                    <span class="e-text">5 Rating</span>
                    <div class="rate py-2 text-white">
                        @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                            @endfor
                    </div>

                    <div class="even ">
                        <span class="red font-bold"> PhD in Nursing </span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold"> 9 </span>
                        <span class="c-text block"> years of experience</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold block">8,674</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 7,546 </span>
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
                        <h3 class="text-2xl font-bold">Johnson</h3>
                        <img src="{{asset('imgs/johnson.webp')}}"
                            class="rounded-full object-cover border border-gray-300" alt="Johnson" title="Johnson" />
                    </div>

                    <span class="e-text">5 Rating</span>
                    <div class="rate py-2 text-white">
                        @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                            @endfor
                    </div>

                    <div class="even ">
                        <span class="red font-bold"> MBA <span class="c-text"> Degree</span></span>
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
                        <h3 class="text-2xl font-bold">Mary</h3>
                        <img src="{{asset('imgs/mary.webp')}}" class="rounded-full object-cover border border-gray-300"
                            alt="Mary" title="Mary" />
                    </div>

                    <span class="e-text">5 Rating</span>
                    <div class="rate py-2 text-white">
                        @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                            @endfor
                    </div>

                    <div class="even ">
                        <span class="red font-bold"> Master's Degree</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold"> 8 </span>
                        <span class="c-text block"> years of experience</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold block">7,456</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 6,546 </span>
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
                        <img src="{{asset('imgs/henry-2.webp')}}" class="rounded-full object-cover border border-gray-300"
                            alt="Henry" title="Henry" />
                    </div>

                    <span class="e-text">5 Rating</span>
                    <div class="rate py-2 text-white">
                        @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                            @endfor
                    </div>

                    <div class="even ">
                        <span class="red font-bold"> MBA <span class="c-text"> Degree</span></span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold"> 7 </span>
                        <span class="c-text block"> years of experience</span>
                    </div>
                    <div class="pt-4">
                        <span class="red font-bold block">6,456</span>
                        <span class="c-text block">Finished Orders</span>
                    </div>
                    <div class="even pt-4 ">
                        <span class="red font-bold"> 5,456 </span>
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
                Easy Steps to Order Nursing Proposal Writing Online in the UK
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
                        Last Minute Nursing Proposal? We’re Already On It
                    </h2>
                    <p class="py-5 text-white ">
                        Our 24/7 assistance enables you to discuss your project at any time and receive immediate feedback from your assigned specialist. 
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
                            title="Smiling nurse in teal scrubs with a stethoscope, representing 24/7 online nursing academic support in UK." alt="Online Nursing Academic Support in UK">
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
                          Get Our Nursing Proposal Writing Services in London for Fast Approvals
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                Many students struggle with nursing proposal writing because they don't know how to start, as the instructions are unclear, or they can't find reliable sources. Our writers can help you overcome these challenges. We provide accurate and organised material, customised to every need. They transform difficult medical concepts into understandable, interesting writing that your teachers will appreciate. We support you in transforming your ideas into a coherent, convincing, and research-ready proposal that precisely aligns with your vision. 
                            </p>
                            <p class="text-sm py-3">
                                Our experts will help you design a proposal that is both genuine and consistent with your academic interests. We bring both clinical understanding and academic knowledge to every paper. Moreover, we stay up-to-date with worldwide nursing research and current healthcare developments to ensure your work is not only accurate but also relevant. Our support team is always available to discuss ideas, review drafts, or make last-minute tweaks.  We are your support, not only another academic service. You will receive regular updates and a writer who is truly knowledgeable in your field. Students can focus on other important matters with our support, as we manage their demanding academic load. 
                            </p>
                        </div>
                    </div>
                    <div class=" ">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Trusted Nursing Proposal Writing Service Count On for Quality
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                A solid, professionally written proposal becomes the foundation of your nursing dissertation. At Nursing Assignment Helpers, our nursing proposal writing service ensures that writers thoroughly investigate your topic, identify new issues in nursing, and develop proposals that balance facts with compassion. Unlike general writing services, we match researchers with nursing-specific knowledge who grasp actual clinical problems. They guide you in selecting meaningful topics, defining measurable goals, and producing coherent, organised proposals that meet UK university standards. Each proposal is painstakingly researched, cross-referenced, and properly formatted from start to finish.
                            </p>
                            <p class="text-sm py-3">
                                Through this process, we hope you will gain valuable knowledge and insights. While our specialists work on your proposal, you learn about data analysis, research techniques, and academic writing. They use trustworthy sources in your proposal and align it with your university’s expectations and standards. We ensure timely delivery and clear communication throughout, enabling us to assist you in creating a proposal that receives instant approval. Moreover, our pro writers can help you score top grades in other nursing tasks as well, such as <a class="sparkle-awd" href="{{ route('nursing.essay') }}">nursing essay writing</a>, <a class="sparkle-awd" href="{{ route('nursing.dissertation') }}">nursing dissertation writing</a> and more.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
                    <div class="">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                           Premium Nursing Proposal Writing Services in the UK For Top Grades
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                A nursing proposal is not only about writing a paper that fits your academic requirements, but it should be something that appeals to the reader and contributes to the nursing field. This is what NursingAssignmentHelpers UK excels at. Our expert writers can help you craft an excellent proposal that shows your passion and purpose as an aspiring nursing professional. This is because our writers are industry experts who have mastered the field and gained experience through professional work. This means they possess all the practical knowledge and insights that would make your proposal stand out for all the right reasons.
                            </p>
                            <p class="text-sm py-3">
                                Furthermore, since our writers have clinical experience, they know how to relate theories to practical examples. They follow your university's guidelines and structure, never rely on templates, so you don't need to worry about receiving substandard work, as we don't do that here. The best part about the whole process is going to be how we prioritise collaborative work. Our friendly writers will keep in touch with you throughout the writing process to ensure that the final proposal reflects your critical thinking.
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                           Step Up Your Research Game with Our Best Nursing Proposal Writing Services 
                        </h2>
                        <div class="py-3">
                            <p class="text-sm py-3">
                                Often, creating a nursing research proposal seems like draining work, involving endless research and sleepless nights. If you are going through the same thing, then you should come to us without any second thoughts. Our nursing proposal writing services in UK help you turn your ideas into well-organised, convincing, and academically sound proposals. Our writers know how to tailor every submission to the precise scope of your field. Seasoned nurses and academic researchers within our team are knowledgeable about both evidence-based practice and university standards. Your proposal demonstrates originality, clear reasoning, and quantifiable goals.
                            </p>
                            <p class="text-sm py-3">
                                We also strive to make the entire process interactive, allowing you to review drafts, provide feedback, and refine your ideas as we progress. Every section is carefully and purposefully crafted. Besides, we are not intimidated by deadlines. We are available around the clock to help you, so that you can approach us at any hour of the day. Apart from that, we don't just stop at nursing proposals, but you can also reach out to us for <a class="sparkle-awd" href="{{ route('nursing.conceptMapping') }}">nursing concept mapping assignments</a> and more.
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
                            <img src="{{ asset('imgs/smith.webp') }}" class="img-fluid" width="110"
                                height="110" alt="Smith" title="Smith">
                        </div>
                        <div class="name-user">
                            <strong>Smith </strong>
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
                    <p>“Although I was uncertain about how to begin my nursing research, their help was invaluable. My writer not only organised the proposal flawlessly but also clearly described the research strategy. Great job!”</p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="grid grid-cols-1 testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('imgs/james.webp') }}" class="img-fluid" width="100"
                                height="100" alt="James" title="James">
                        </div>
                        <div class="name-user">
                            <strong>James </strong>
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
                    <p>“I had a really tight deadline for my nursing research proposal, and I didn't believe it could be accomplished. But they provided on time, and I got positive feedback from my supervisor.”</p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="grid grid-cols-1 testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('imgs/grace.webp') }}" class="img-fluid" width="100"
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
                    <p>“The degree of customisation of my proposal struck me most. The writer grasped my topic and made it seem well-researched and original. I am definitely going to use them again for my dissertation.”</p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="grid grid-cols-1 testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('imgs/chloe.webp') }}" class="img-fluid" width="100"
                                height="100" alt="Chloe" title="Chloe">
                        </div>
                        <div class="name-user">
                            <strong>Chloe </strong>
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
                    <p>“I've tried a few writing services before, but none compare to this one. The proposal met all the requirements of my university. The team was super friendly, and I even got free edits from them.”</p>
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
                                   Can I get urgent nursing research proposal help in the UK?
                                </h4>
                            </div>
                            <div class="icons text-right w-[10%]">
                                <i class="fa fa-minus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide0">
                            Yes, you can obtain urgent nursing research proposal assistance in the UK if you need it promptly. Our writers have developed great speed over the years and always deliver within the promised timeframe, without sacrificing quality.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="1">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="1">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">2-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                    What makes UK nursing proposal writing services different from others?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide1" style="display: none;">
                            Unlike other writing services in the UK, our nursing proposal writing services offer subject-specific expertise to students, delivering high-quality work at competitive rates and with the fastest turnaround times. Apart from that, to make the whole process smooth and easy for you, we offer 24/7 customer care and countless edits without any extra charges.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="2">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="2">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">3-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   Can I communicate directly with the writer during the proposal writing process?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide2" style="display: none;">
                            Yes, you can communicate directly with the writer during the proposal writing process via chat. They will be available 24/7 to guide you and solve your queries. You can engage in discussion with them and also track the progress of your work.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="3">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="3">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">4-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                    What if I need revisions after receiving my nursing proposal?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide3" style="display: none;">
                            If you need revisions after receiving your nursing proposal, just let us know, and we will work on it immediately and deliver it before the deadline. You can request unlimited revisions until you are satisfied with the work.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="4">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="4">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">5-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   Can I request help with specific nursing research areas, such as public health or mental health?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide4" style="display: none;">
                            Yes, you can request help for specific nursing research areas, such as public health, mental health, and others. You will be appointed a writer who has thorough knowledge of your chosen field. Our experts have a strong command across multiple nursing domains.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="5">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="5">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">6-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                  What is included in a typical nursing research proposal package in the UK?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide5" style="display: none;">
                            A nursing research proposal package in the UK  typically covers the title, introduction, research objectives, literature review summary, methodology, ethical considerations, and references. You will receive well-formatted and properly cited work.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="6">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="6">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">7-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                    Are all nursing research proposals custom-written from scratch?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide6" style="display: none;">
                            Yes, your nursing research proposal will be custom-written from scratch and free of plagiarism. Our platform features real writers who craft original, high-quality content. They do not use AI tools or plagiarise from other sources. Additionally, each paper is checked using reliable tools, such as Turnitin, to ensure 100% originality.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="8">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="7">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">8-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   Do you provide references and citations in nursing proposals?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide7" style="display: none;">
                            Yes, of course, we provide references and citations in nursing proposals according to the style you require, such as the APA, MLA, or Harvard style. Our writers utilise reliable sources to ensure academic accuracy and adhere to the highest research standards.
                        </p>
                    </div>
                    <div class="content border-b faq-internal-styling" data-no="8">
                        <div class="questions cursor-pointer flex p-3 font-bold " data-no="8">
                            <div class="ml-2 mr-4 w-[5%]">
                                <p class="text-lg font-bold">9-</p>
                            </div>
                            <div class="heading w-[85%] ">
                                <h4 class=" text-lg md:font-semibold">
                                   Can I obtain a sample of a nursing research proposal before placing my order?
                                </h4>
                            </div>
                            <div class="icons w-[10%] text-right">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide7" style="display: none;">
                            Yes, you can get a sample of a nursing research proposal before placing your order to get an idea of the quality and standard of work we deliver. 
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
                       Ready to Get Your Nursing Proposal Approved? Let’s Make It Happen!
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
