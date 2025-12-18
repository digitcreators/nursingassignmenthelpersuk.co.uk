@extends('layouts.web')

@section('title', $blog->title ?? '-')
@section('description', $blog->meta_description ?? '-')
@section('canonical', $blog->slug ?? '-')
@section('noindex')
@endsection
@section('content')

<div class="mt-44 lg:mt-28">
    <section class="bg-light contentSection">
        <div class="grid grid-cols-1 gap-6 lg:px-20 mx-4" aria-label="breadcrumb" class="pl-md-3" bis_skin_checked="1">
            <ol class="bg-transparent breadcrumb ml-1 flex">
                <li class="breadcrumb-item">
                    <a class="text-black" href="{{ route('blog') }}">Blogs</a>
                </li>
                <li class="breadcrumb-item">
                    <a class="text-black" href="{{ route('blogs.category', [$category->slug])}}">{{ $category->name}} </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
            </ol>
        </div>
        <div class="blogs-page grid grid-cols-1 lg:grid-cols-12 gap-6 lg:px-20 mx-4 mt-4 pb-8" >
            <div class="lg:col-span-8 ">
                <div class="recent rounded overflow-hidden w-full bg-white">
                    <a href="{{ url('storage/app/public/'.$blog->image_path) }}" target="_blank">
                        <img src="{{ url('storage/app/public/'.$blog->image_path) }}" alt="{{ $blog->title }}" class="blog-image w-full object-cover object-center">
                    </a>
                </div>
                <div class="container mx-3 bg-white recent  mt-4">
                    <h1 class="text-4xl py-3">
                        {{ $blog->title }}
                    </h1>
                    <section class="paras blog-description">
                            {!! $blog->description !!}
                    </section>
                </div>          
            </div>
            <div class="lg:col-span-4 ">
                <div class="Block ">
                    
                    <div class="recent relative mb-5 bg-white">
                        <h3 class="text-lg font-semibold mb-3  bg-primary text-white py-2 px-5"><i class="fa fa-file-text mr-2"></i>Recent Posts</h3>
                        @if (count($blogs) > 0)
                            @foreach ($blogs as $blog)
                            <div class="recent-blogs">
                                <ul class="list-unstyled m-0 blog-listing">
                                    <li class="py-2"><a href="{{ route('blogs.show', $blog->slug) }}"> {{ $blog->title }}</a></li>
                                </ul>
                            </div>
                            @endforeach
                        @else
                        <div class="recent-blogs">
                            <p>No blogs found</p>
                        </div>
                        @endif
                    </div>
                    <div class="recent relative mb-5 bg-white">
                        <h3 class="text-lg font-semibold mb-3  bg-primary text-white py-2 px-5"><i class="fa fa-file-text mr-2"></i>Categories</h3>
                        @foreach ($categories as $category)
                            <div class="recent-blogs">
                                <ul class="list-unstyled m-0 blog-listing">
                                    <li class="py-2"><a href="{{ route('blogs.category', $category->slug) }}"> {{ $category->name }}</a></li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                    <div class="sticky-wrapper relative">
                        <div class="recent free-features mb-8 bg-white">
                            <h3 class="text-lg font-semibold mb-3  bg-primary text-white py-2 px-5">Free Features</h3>
                            <div class="features-point">
                                <div class="flex justify-between items-center mt-4">
                				    <span class="font-bold text-black">Professional Assistance</span><span class="free font-bold">free</span></div>
                            </div>
                            <div class="features-point">
                                <div class="flex justify-between items-center mt-1">
                				    <span class="font-bold text-black">Plagiarism Report</span><span class="free font-bold">free</span>
                				</div>
                            </div>
                            <div class="features-point">
                                <div class="flex justify-between items-center mt-1">
                				    <span class="font-bold text-black">Prompt Response</span><span class="free font-bold">free</span>
                				</div>
                            </div>
                            <div class="features-point">
                                <div class="flex justify-between items-center mt-1">
                				    <span class="font-bold text-black">Formatting</span><span class="free font-bold">free</span>
                				</div>
                            </div>
                            <div class="features-point">
                                <div class="flex justify-between items-center mt-1">
                				    <span class="font-bold text-black">Revisions</span><span class="free font-bold">free</span>
                                </div>
                            </div>
            				<div class="text-center my-3 pt-4" bis_skin_checked="1">
                                <a href="{{ route('order')}} " class="btn btn-primary my-2 mb-lg-0 w-full rounded font-bold ">
                                    Order Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
