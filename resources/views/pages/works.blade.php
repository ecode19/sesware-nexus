@extends('layouts.guest-layout')
@section('content')
    <div class="w-11/12 md:w-3/5 mx-auto">
        <div class="my-8 text-center">
            <h2 class="text-xl font-heading font-semibold tracking-wider text-blue-900 uppercase">
                Our Works
            </h2>
            <p class="text-2xl my-2 text-gray-700">Featured Projects</p>
            <p class="text-lg text-gray-600 mt-4">Explore some of our best works that brought
                impact to businesses</p>
        </div>
    </div>

    <section class="w-full my-4 px-2 py-12">
        <div class="grid grid-cols-1 gap-3 md:grid md:grid-cols-2 md:gap-4 lg:grid lg:gap-4 text-md">
            <div
                class="p-4 bg-gradient-to-br from-blue-200 to-blue-100 rounded-lg my-4 hover:shadow-lg shadow-blue-300 transition-all duration-300 relative overflow-hidden">
                <div class="flex flex-col gap-3 mb-4">
                    <div class="w-full h-96 overflow-hidden rounded-lg shadow-md">
                        <img src="{{ asset('images/Scolastica-Project.PNG') }}" alt="design mockup"
                            class="w-full h-full object-cover transition-transform duration-1000 hover:scale-105">
                    </div>
                    <h2
                        class="text-xl tracking-wide text-blue-900 font-bold text-center hover:text-blue-700 transition-colors duration-200">
                        School Website</h2>
                    <p class="text-gray-700 text-center text-sm md:text-base">
                        We designed and developed a modern, responsive website for Scolastica Secondary School in Kilimanjaro, Tanzania. The site showcases key information including academic programs, staff profiles, events, and admissions. It was built with user-friendliness and accessibility in mind, ensuring both students and parents can easily access essential resources.
                    </p>

                      <div class="w-full m-4">
                        <div class="text-blue-100 flex items-center flex-wrap gap-2">
                        <div class="text-blue-950 flex items-center flex-wrap gap-2">
                            <span class="rounded-full py-1 px-3 border border-blue-950 font-semibold text-sm">Custom Design</span>
                        </div>
                        <div class="text-blue-950 flex items-center flex-wrap gap-2">
                            <span class="rounded-full py-1 px-3 border border-blue-950 font-semibold text-sm">Responsive</span>
                        </div>
                        <div class="text-blue-950 flex items-center flex-wrap gap-2">
                            <span class="rounded-full py-1 px-3 border border-blue-950 font-semibold text-sm">Custom CMS</span>
                        </div>
                        <div class="text-blue-950 flex items-center flex-wrap gap-2">
                            <span class="rounded-full py-1 px-3 border border-blue-950 font-semibold text-sm">SEO-Optimized</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="pr-4 pl-6 pt-6 pb-4 rounded-tl-full bg-blue-950 w-fit absolute bottom-0 right-0 text-white group">
                    <a href="https://scolasticaschool.sc.tz/" target="_blank"><i class="fa fa-external-link text-xl group-hover:scale-110 transition-transform duration-1000 group-hover:text-blue-200"></i></a>
                </div>
            </div>

           <div
                class="p-4 bg-gradient-to-br from-blue-200 to-blue-100 rounded-lg my-4 hover:shadow-lg shadow-blue-300 transition-all duration-300 relative overflow-hidden">
                <div class="flex flex-col gap-3 mb-4">
                    <div class="w-full h-96 overflow-hidden rounded-lg shadow-md">
                        <img src="{{ asset('images/ghrtcc-project.PNG') }}" alt="design mockup"
                            class="w-full h-full object-cover transition-transform duration-1000 hover:scale-105">
                    </div>
                    <h2
                        class="text-xl tracking-wide text-blue-900 font-bold text-center hover:text-blue-700 transition-colors duration-200">
                        Organization Website</h2>
                    <p class="text-gray-700 text-center text-sm md:text-base">
                        We developed a clean and professional website for an organization specializing in training, research, and consultancy services. The platform highlights their service areas, upcoming training programs, research publications, and a user-friendly contact section. The site was built with a focus on clarity, accessibility, and ease of updates to support ongoing content publishing and engagement with stakeholders.
                    </p>

                      <div class="w-full m-4">
                        <div class="text-blue-100 flex items-center flex-wrap gap-2">
                        <div class="text-blue-950 flex items-center flex-wrap gap-2">
                            <span class="rounded-full py-1 px-3 border border-blue-950 font-semibold text-sm">Custom Design</span>
                        </div>
                        <div class="text-blue-950 flex items-center flex-wrap gap-2">
                            <span class="rounded-full py-1 px-3 border border-blue-950 font-semibold text-sm">Responsive</span>
                        </div>
                        <div class="text-blue-950 flex items-center flex-wrap gap-2">
                            <span class="rounded-full py-1 px-3 border border-blue-950 font-semibold text-sm">Custom CMS</span>
                        </div>
                        <div class="text-blue-950 flex items-center flex-wrap gap-2">
                            <span class="rounded-full py-1 px-3 border border-blue-950 font-semibold text-sm">SEO-Optimized</span>
                        </div>
                        <div class="text-blue-950 flex items-center flex-wrap gap-2">
                            <span class="rounded-full py-1 px-3 border border-blue-950 font-semibold text-sm">Multi-user Support</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="pr-4 pl-6 pt-6 pb-4 rounded-tl-full bg-blue-950 w-fit absolute bottom-0 right-0 text-white group">
                    <a href="https://giftedhandsrtcc.or.tz/" target="_blank"><i class="fa fa-external-link text-xl group-hover:scale-110 transition-transform duration-1000 group-hover:text-blue-200"></i></a>
                </div>
            </div>

            <div class="p-2 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg my-4 hover:shadow-md shadow-blue-200">
                <div class="flex flex-col gap-2">
                    <div class="w-full h-96 overflow-hidden">
                        <img src="{{ asset('images/KANYASI_66.jpg') }}" alt="design mockup"
                            class="w-full h-full object-cover">
                    </div>
                    <h2 class="text-lg tracking-wide text-blue-900 font-semibold text-center">Company Logo</h2>
                </div>
            </div>
            <div class="p-2 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg my-4 hover:shadow-md shadow-blue-200">
                <div class="flex flex-col gap-2">
                    <div class="w-full h-96 overflow-hidden">
                        <img src="{{ asset('images/KANYASI_66.jpg') }}" alt="design mockup"
                            class="w-full h-full object-cover">
                    </div>
                    <h2 class="text-lg tracking-wide text-blue-900 font-semibold text-center">Banner Design</h2>
                </div>
            </div>
        </div>
    </section>

    {{-- Partner Action --}}
    <section
        class="mx-auto p-6 md:p-12 flex flex-col md:flex-row my-12 bg-gradient-to-tr from-blue-900 to-blue-950 rounded-sm shadow-2xl text-white">
        <div class="w-full md:w-1/3 my-4 p-4 space-y-6">
            <i class="fa fa-handshake text-3xl md:text-4xl text-orange-400"></i>
            <h3 class="text-4xl md:text-4xl font-bold leading-tight">Partner With Us</h3>

            <div class="w-fit">
                <button
                    class="py-2 px-3 bg-orange-600 hover:bg-orange-700 text-white rounded-full text-lg md:text-xl font-semibold transition-all duration-500 shadow-lg hover:scale-105">
                    Get In Touch
                </button>
            </div>
        </div>

        <div class="w-full md:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-6 mt-6 md:mt-0">
            <div
                class="flex items-start space-x-4 bg-white bg-opacity-10 border border-orange-500 p-4 rounded-xl shadow-md hover:scale-105 transition-transform duration-500">
                <i class="fa fa-puzzle-piece text-orange-400 text-2xl"></i>
                <span class="text-white text-base md:text-md font-medium">
                    Tailored software and design to meet your unique business needs
                </span>
            </div>
            <div
                class="flex items-start space-x-4 bg-white bg-opacity-10 border border-orange-500 p-4 rounded-xl shadow-md hover:scale-105 transition-transform duration-500">
                <i class="fa fa-clock text-orange-400 text-2xl"></i>
                <span class="text-white text-base md:text-md font-medium">
                    On-time project delivery and ongoing support
                </span>
            </div>
            <div
                class="flex items-start space-x-4 bg-white bg-opacity-10 border border-orange-500 p-4 rounded-xl shadow-md hover:scale-105 transition-transform duration-500">
                <i class="fa fa-users text-orange-400 text-2xl"></i>
                <span class="text-white text-base md:text-md font-medium">
                    We work closely with you to ensure your vision is realized
                </span>
            </div>
            <div
                class="flex items-start space-x-4 bg-white bg-opacity-10 border border-orange-500 p-4 rounded-xl shadow-md hover:scale-105 transition-transform duration-500">
                <i class="fa fa-line-chart text-orange-400 text-2xl"></i>
                <span class="text-white text-base md:text-md font-medium">
                    Delivering solutions that drive measurable business growth
                </span>
            </div>
        </div>
    </section>
    {{-- call to action --}}
    <section class="bg-gray-100">
        <div class="w-full md:w-10/12 mx-auto py-16">
            <div class="w-11/12 md:w-8/12 mx-auto text-center my-4">
                <h2 class="text-orange-500 font-bold mb-4 uppercase tracking-wide text-lg md:text-xl">Ready to Transform and
                    Bring Impact to Your Business?</h2>
                <p class="text-lg md:text-5xl font-extrabold text-gray-800">Let's Discuss Your Project</p>
            </div>
            <div class="w-fit my-8 mx-auto">
                <button class="py-4 px-6 bg-blue-900 text-white rounded-full font-semibold text-lg md:text-xl shadow-lg">
                    Get In Touch
                </button>
            </div>
        </div>
    </section>
@endsection
