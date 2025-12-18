@extends('layouts.web')
@section('title', 'About Nursing Assignment Helpers UK – Quality You Can Trust')
@section('description', 'Learn more about Nursing Assignment Helpers, your trusted partner in academic writing. Discover our professional services and vision for your academic success!')
@section('canonical', config('app.app_url') . Request::path())

@section('schema-script')

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "@yield('title', '')",
  "url": "@yield('canonical')",
  "logo": "https://nursingassignmenthelpersuk.co.uk/public/imgs/nursing-logo2.webp",
  "sameAs": [
    "https://www.facebook.com/nursingassignmenthelpersuk.co.uk/",
    "https://www.instagram.com/nursingassignmenthelpersuk"
  ]
}
</script>

@endsection

@section('content')

<section class="mx-auto text-sm">
    <div class="mx-4 py-4">
        <div class="mx-auto  max-w-2xl lg:max-w-4xl  xl:max-w-6xl pb-6">
            <h1 class="text-4xl py-5">About Us
            </h1>
            <p class="my-2">
                It is about time that you bid farewell to your assignment struggles especially for nursing assignments
                because we are here to rescue you. Our team of amazing professionals are ready to solve all your
                problems and provide you with solutions like never before. Before trusting us, get to know more about us
                so your heart and mind is fully satisfied because otherwise you will not be able to let go of the stress
                even after ordering your nursing assignment paper from us.
            </p>
            <h2 class="text-4xl py-5">Who are we?
            </h2>
            <p class="my-2 ">
                We are a bunch of graduates from across the world working collectively to serve you. Our qualifications
                is definitely something that you would want for perfecting your nursing essay. Our writers have minimum
                bachelors’ qualification and there are also masters, PhD, and MPhil graduates working with us. All of us
                have passed from reputable institutes across the world and have been residing in the United Kingdom for
                the past couple of years. Being said that, we have excellent command over British English and therefore,
                you don’t need to worry about your professor’s eye to notice every small thing.
            </p>
            <h2 class="text-4xl py-5">How we started?
            </h2>
            <p class="my-2 ">
                Our founding members had to face a lot of trouble in the undergraduate and postgraduate days because of
                the scarce resources and options of academic assistance and therefore, after completion of their degrees
                they decided to build a platform like Nursingassignmenthelpersuk.co.uk for all the other students like them and
                provide them support. We have been in the industry of academic paper writing for more than a decade and
                over the years a huge number of professional and experienced individuals joined us to help students like
                you!
            </p>
            <h2 class="text-4xl py-5">Best than the rest?
            </h2>
            <p class="my-2 ">
                If you are wondering how come we are the absolute best then let us jot it down for you.
            <ul>
                <li class="py-1"><i class="fa fa-check text-primary mr-2"></i>Reasonable prices easily affordable for
                    students hence cheap.</li>
                <li class="py-1"><i class="fa fa-check text-primary mr-2"></i>Quality workQuality over quantity always.
                </li>
                <li class="py-1"><i class="fa fa-check text-primary mr-2"></i>Experienced and qualified team of writers.
                </li>
                <li class="py-1"><i class="fa fa-check text-primary mr-2"></i>24/7 availability</li>
                <li class="py-1"><i class="fa fa-check text-primary mr-2"></i>Cooperative and friendly customer support
                </li>
                <li class="py-1"><i class="fa fa-check text-primary mr-2"></i>Easy to order and receive process</li>
            </ul>

            </p>
            <p class="my-2 ">
                See, it is quite simple to figure out our awesomeness among our competitors. Don’t waste your time
                anymore and reach out to us to get the help you rightfully deserve!
            </p>

        </div>

    </div>
</section>

@endsection