 {{-- sticky navbar --}}
<section class="hidden lg:block">
    <div class=" w-full text-gray-700 dark-mode:text-gray-200 dark-mode:bg-gray-800 shadow-lg bg-white hidden z-11  left-0 top-0 fixed"
         id="content">
        <div x-data="{ open: false }"
             class="flex flex-col max-w-screen-xl px-2 mx-auto xl:items-center xl:justify-between xl:flex-row">
            <div class="flex flex-row items-center justify-between h-14">
                <a class="flex items-center py-4 px-2 " href="{{ route('home') }}">
                    <img src="{{ asset('webp/logo-sticky.webp') }}" alt="Logo" class="" width="88"
                         height="40" loading="eager">
                </a>
                <button class="xl:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                             d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                             clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" style="display: none;"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{ 'flex': open, 'hidden': !open }"
                 class="flex-col flex-grow pb-4 xl:pb-0 hidden xl:flex xl:justify-end xl:flex-row">

                <a href="{{ route('home') }}" class="block font-semibold text-[#120d27] py-2 px-4 hover:text-primary-one">
                    Home
                </a>
                <a href="{{ route('about') }}" class="block font-semibold text-[#120d27] py-2 px-4 hover:text-primary-one">
                    About
                </a>
                <div class="group inline-block relative" id="dropdown-two">
                    <button
                         class=" font-semibold text-[#120d27] py-2 px-4 hover:text-primary-one inline-flex items-center">
                        <span class="mr-1">Services</span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </button>
                    <div class="hidden md:block ">
                        <ul class="absolute bg-white left-0 lg:-left-[2rem] hidden text-sm text-black pt-1 group-hover:block z-20 w-[14rem] shadow border  "
                             id="menu-one">
                             <li class="border-b  border-dotted border-blue-400 ">
                                <a href="{{ route('dissertation') }}"
                                    class="transition delay-150 hover:translate-x-2 hover:text-primary-one 
                                    font-semibold py-2 px-4 block">
                                    Dissertation Writing
                                </a>
                            </li>
                            <li class="border-b  border-dotted border-blue-400 ">
                                <a href="{{ route('essay') }}"
                                    class="transition delay-150 hover:translate-x-2 hover:text-primary-one 
                                    font-semibold py-2 px-4 block">
                                    Essay Writing
                                </a>
                            </li>
                            <li class="border-b  border-dotted border-blue-400 ">
                                <a href="{{ route('researchPaper') }}"
                                    class="transition delay-150 hover:translate-x-2 hover:text-primary-one 
                                    font-semibold py-2 px-4 block">
                                    Research Paper Writing
                                </a>
                            </li>
                            <li class="border-b  border-dotted border-blue-400 ">
                                <a href="{{ route('researchProposal') }}"
                                    class="transition delay-150 hover:translate-x-2 hover:text-primary-one 
                                    font-semibold py-2 px-4 block">
                                    Research Proposal Writing
                                </a>
                            </li>
                            <li class="border-b  border-dotted border-blue-400 ">
                                <a href="{{ route('thesis') }}"
                                    class="transition delay-150 hover:translate-x-2 hover:text-primary-one 
                                    font-semibold py-2 px-4 block">
                                    Thesis Writing
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="{{ route('price') }}" class="block font-semibold text-[#120d27] py-2 px-4 hover:text-primary-one">Pricing
                </a>

                <a href="{{ route('reviews') }}" class="block font-semibold text-[#120d27] py-2 px-4 hover:text-primary-one">Reviews
                </a>
                <a href="{{ route('contact') }}" class="block font-semibold text-[#120d27] py-2 px-4 hover:text-primary-one">
                    Contact
                </a>
                <a href="{{ route('order') }}" class="nav-link order-button font-semibold w-44 lg:w-auto">
                    <span>Order Now</span>
                </a>
                <button class="rounded bg-black text-primary-one my-auto lg:mx-4 px-4 py-2 font-semibold w-32 lg:w-auto mt-4 lg:mt-0"><a
                    href="javascript:void(Tawk_API.toggle())">Live Chat</a>
                </button>
            </nav>
        </div>
    </div>
</section>
