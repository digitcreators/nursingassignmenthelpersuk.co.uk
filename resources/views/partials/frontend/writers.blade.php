<div class="tabs-container flex flex-col lg:flex-row md:flex-row justify-center gap-4 mb-6">
    <button class="tab-btn active" data-tab="anatomy">Anatomy</button>
    <button class="tab-btn" data-tab="physiology">Physiology</button>
    <button class="tab-btn" data-tab="patho">Pathophysiology</button>
    <button class="tab-btn" data-tab="pediatric">Pediatric Nursing</button>
    <button class="tab-btn" data-tab="pharma">Pharmacology</button>
</div>


<div class="tab-content-wrapper">

    <!-- Anatomy -->
    <div id="anatomy" class="tab-content show grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="text-white writer-box p-4 bg-white shadow-md rounded-lg md:text-left">
            <div class="flex items-center justify-between">
                <h3 class="text-2xl font-bold">Jenny</h3>
                <img src="{{asset('imgs/jenny.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Jenny" title="Jenny" width="90" height="90" />
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold">Associate Degree</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold"> 10 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">9,675</span>
                <span class="c-text block">Finished Orders</span>
            </div>
            <div class="even pt-4 ">
                <span class="red font-bold"> 8,675 </span>
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
                <h3 class="text-2xl font-bold">Oscar</h3>
                <img src="{{asset('imgs/oscar.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Oscar" title="Oscar" width="90" height="90" />
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold">Bachelor of Science</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold"> 8 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">7,950</span>
                <span class="c-text block">Finished Orders</span>
            </div>
            <div class="even pt-4 ">
                <span class="red font-bold"> 6,470 </span>
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
                <h3 class="text-2xl font-bold">Elizabeth</h3>
                <img src="{{asset('imgs/elizabeth.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Elizabeth" title="Elizabeth" width="90" height="90" />
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold">Master of Science</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold"> 9 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">8,700</span>
                <span class="c-text block">Finished Orders</span>
            </div>
            <div class="even pt-4 ">
                <span class="red font-bold"> 7,430 </span>
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
                <h3 class="text-2xl font-bold">Christopher </h3>
                <img src="{{asset('imgs/christopher-2.webp')}}"
                    class="rounded-full object-cover border border-gray-300" 
                    alt="Christopher" title="Christopher" width="90" height="90" />
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
                <span class="red font-bold"> 7 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">6,784</span>
                <span class="c-text block">Finished Orders</span>
            </div>
            <div class="even pt-4 ">
                <span class="red font-bold"> 5,342 </span>
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

    <!-- Physiology -->
    <div id="physiology" class="tab-content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 hidden">
        <div class="text-white writer-box p-4 bg-white shadow-md rounded-lg md:text-left">
            <div class="flex items-center justify-between">
                <h3 class="text-2xl font-bold">Carter</h3>
                <img src="{{asset('imgs/carter.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Carter" title="Carter" width="90" height="90" />
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold"> BS Degree</span>
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
                <span class="red font-bold"> 5,465 </span>
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
                <h3 class="text-2xl font-bold">Wesley</h3>
                <img src="{{asset('imgs/wasley.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Wesley" title="Wesley" width="90" height="90" />
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold">MS Degree</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold"> 9 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">8,900</span>
                <span class="c-text block">Finished Orders</span>
            </div>
            <div class="even pt-4 ">
                <span class="red font-bold"> 7,460 </span>
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
                <h3 class="text-2xl font-bold">Lyla</h3>
                <img src="{{asset('imgs/lyla.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Lyla" title="Lyla" width="90" height="90" />
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold">Associate Degree</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold"> 6 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">5,650</span>
                <span class="c-text block">Finished Orders</span>
            </div>
            <div class="even pt-4 ">
                <span class="red font-bold"> 4,564 </span>
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
                <h3 class="text-2xl font-bold">Hazel</h3>
                <img src="{{asset('imgs/hazel.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Hazel" title="Hazel" width="90" height="90" />
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold">Doctor of Nursing Practice</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold"> 8 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">7564</span>
                <span class="c-text block">Finished Orders</span>
            </div>
            <div class="even pt-4 ">
                <span class="red font-bold"> 6802 </span>
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

    <!-- Pathophysiology -->
    <div id="patho" class="tab-content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 hidden">
        <div class="text-white writer-box p-4 bg-white shadow-md rounded-lg md:text-left">
            <div class="flex items-center justify-between">
                <h3 class="text-2xl font-bold">Mason</h3>
                <img src="{{asset('imgs/mason.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Mason" title="Mason" width="90" height="90" />
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold">Doctor of Philosophy</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold"> 10 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">9,076</span>
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
                <h3 class="text-2xl font-bold">Selena</h3>
                <img src="{{asset('imgs/selena.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Selena" title="Selena" width="90" height="90" />
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold">Bachelor of Science</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold"> 9 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">8,850</span>
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
                <h3 class="text-2xl font-bold">Riley</h3>
                <img src="{{asset('imgs/riley.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Riley" title="Riley" width="90" height="90" />
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold">Master of Science</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold"> 7 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">6,700</span>
                <span class="c-text block">Finished Orders</span>
            </div>
            <div class="even pt-4 ">
                <span class="red font-bold"> 5,356 </span>
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
                <h3 class="text-2xl font-bold">Isabella</h3>
                <img src="{{asset('imgs/issabella.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Isabella" title="Isabella" width="90" height="90" />
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold">PhD Degree</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold"> 8 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">7673</span>
                <span class="c-text block">Finished Orders</span>
            </div>
            <div class="even pt-4 ">
                <span class="red font-bold"> 6893 </span>
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

    <!-- Pediatric Nursing -->
    <div id="pediatric" class="tab-content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 hidden">
        <div class="text-white writer-box p-4 bg-white shadow-md rounded-lg md:text-left">
            <div class="flex items-center justify-between">
                <h3 class="text-2xl font-bold">Ivy</h3>
                <img src="{{asset('imgs/ivy.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Ivy" title="Ivy" width="90" height="90" />
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold">Associate Degree</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold"> 6 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">5,456</span>
                <span class="c-text block">Finished Orders</span>
            </div>
            <div class="even pt-4 ">
                <span class="red font-bold"> 4,657 </span>
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
                <h3 class="text-2xl font-bold">Sara</h3>
                <img src="{{asset('imgs/sara.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Sara" title="Sara" width="90" height="90" />
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold">Doctor of Nursing Practice</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold"> 8 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">7,564</span>
                <span class="c-text block">Finished Orders</span>
            </div>
            <div class="even pt-4 ">
                <span class="red font-bold"> 6,500 </span>
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
                <h3 class="text-2xl font-bold">Hudson</h3>
                <img src="{{asset('imgs/hudson.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Hudson" title="Hudson" width="90" height="90" />
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold">BS Degree</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold"> 10 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">9,546</span>
                <span class="c-text block">Finished Orders</span>
            </div>
            <div class="even pt-4 ">
                <span class="red font-bold"> 8,503 </span>
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
                <img src="{{asset('imgs/harper.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Harper" title="Harper" width="90" height="90" />
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold">BS Degree</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold"> 9 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">8303</span>
                <span class="c-text block">Finished Orders</span>
            </div>
            <div class="even pt-4 ">
                <span class="red font-bold"> 7345 </span>
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

    <!-- Pharmacology -->
    <div id="pharma" class="tab-content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 hidden">
        <div class="text-white writer-box p-4 bg-white shadow-md rounded-lg md:text-left">
            <div class="flex items-center justify-between">
                <h3 class="text-2xl font-bold">Hailee</h3>
                <img src="{{asset('imgs/hailee.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Hailee" title="Hailee" width="90" height="90" />
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
                <span class="red font-bold"> 5 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">4,450</span>
                <span class="c-text block">Finished Orders</span>
            </div>
            <div class="even pt-4 ">
                <span class="red font-bold"> 3,354 </span>
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
                <h3 class="text-2xl font-bold">Drake</h3>
                <img src="{{asset('imgs/drake.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Drake" title="Drake" width="90" height="90" />
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold">Bachelor's Degree</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold"> 9 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">8,880</span>
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
                <h3 class="text-2xl font-bold">Ember</h3>
                <img src="{{asset('imgs/ember.webp')}}" class="rounded-full object-cover border border-gray-300" 
                alt="Ember" title="Ember" width="90" height="90" />
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold">Master's Degree</span>
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

        <div class="text-white writer-box p-4 bg-white shadow-md rounded-lg md:text-left">
            <div class="flex items-center justify-between">
                <h3 class="text-2xl font-bold">Grayson</h3>
                <img src="{{asset('imgs/grayson.webp')}}" class="rounded-full object-cover border border-gray-300"
                alt="Grayson" title="Grayson" width="90" height="90">
            </div>

            <span class="e-text">5 Rating</span>
            <div class="rate py-2 text-white">
                @for ($i = 0; $i < 5; $i++) <i class="fas fa-star"></i>
                    @endfor
            </div>

            <div class="even ">
                <span class="red font-bold">Associate Degree</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold"> 7 </span>
                <span class="c-text block"> years of experience</span>
            </div>
            <div class="pt-4">
                <span class="red font-bold block">6735</span>
                <span class="c-text block">Finished Orders</span>
            </div>
            <div class="even pt-4 ">
                <span class="red font-bold"> 5903 </span>
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

<script>
    document.querySelectorAll(".tab-btn").forEach(btn => {
        btn.addEventListener("click", () => {

            // remove active class from all buttons
            document.querySelectorAll(".tab-btn").forEach(b => b.classList.remove("active"));

            // add active class to clicked
            btn.classList.add("active");

            // hide all contents
            document.querySelectorAll(".tab-content").forEach(c => {
                c.classList.add("hidden");
                c.classList.remove("show");
            });

            // show selected tab content
            const target = btn.getAttribute("data-tab");
            const content = document.getElementById(target);

            content.classList.remove("hidden");
            content.classList.add("show");
        });
    });
</script>