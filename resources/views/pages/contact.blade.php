@extends('layouts.guest-layout')
@section('content')
    <div class="w-11/12 md:w-3/5 mx-auto">
        <div class="my-10 text-center">
            <h2 class="text-2xl font-heading font-bold tracking-wider text-blue-900 uppercase">
                Contact Us
            </h2>
            <p class="text-2xl my-2 text-gray-700">Ready to transform and bring impact to your business?</p>

            <div
                class="w-fit mx-auto flex flex-col md:flex-row md:items-center md:space-x-6 space-y-4 md:space-y-0 text-md my-6">
                <a href="mailto:info@seswarenexus.com" class="hover:text-blue-600 transition-colors duration-300">
                    <div
                        class="w-full flex items-center space-x-4 p-3 bg-white rounded-lg shadow-md transition-transform transform hover:scale-105">
                        <i class="fa fa-envelope text-blue-600 border border-gray-300 rounded-full p-2"></i>
                        <span class="text-gray-800">info@seswarenexus.com</span>
                    </div>
                </a>
                <a href="tel:0712345678" class="hover:text-blue-600 transition-colors duration-300">
                    <div
                        class="w-full flex items-center space-x-4 p-3 bg-white rounded-lg shadow-md transition-transform transform hover:scale-105">
                        <i class="fa fa-phone text-blue-600 border border-gray-300 rounded-full p-2"></i>
                        <span class="text-gray-800">0712345678</span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <section class="w-11/12 mx-auto flex flex-col md:flex-row gap-8 my-8 py-12">
        <!-- Contact Form -->
        <div class="w-full md:w-1/2 p-8 rounded-3xl bg-white shadow-2xl">
            <h3 class="mb-6 text-blue-900 text-2xl font-extrabold">Tell Us About Your Project</h3>
            <form action="" class="flex flex-col space-y-6">
                <div class="flex flex-col space-y-1">
                    <label for="name" class="text-md font-semibold text-gray-800">Full Name</label>
                    <input type="text" placeholder="Enter your full name"
                        class="w-full p-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-orange-300 transition duration-200" />
                </div>

                <div class="flex flex-col space-y-1">
                    <label for="email" class="text-md font-semibold text-gray-800">Email</label>
                    <input type="email" placeholder="Enter your email"
                        class="w-full p-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-orange-300 transition duration-200" />
                </div>

                <div class="flex flex-col space-y-1">
                    <label for="company" class="text-md font-semibold text-gray-800">Company</label>
                    <input type="text" placeholder="Company name"
                        class="w-full p-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-orange-300 transition duration-200" />
                </div>

                <div class="flex flex-col space-y-1">
                    <label for="description" class="text-md font-semibold text-gray-800">Project Description</label>
                    <textarea rows="6" placeholder="Describe your project (Optional)"
                        class="w-full p-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-orange-300 transition duration-200"></textarea>
                </div>

                <button
                    class="mt-6 bg-orange-600 hover:bg-orange-700 text-white py-2 px-4 rounded-sm font-semibold transition duration-300 ease-in-out shadow-lg w-fit">
                    Send Message
                </button>
            </form>
        </div>

        <!-- FAQs -->
        <div class="w-full md:w-1/2 p-8 rounded-3xl bg-gradient-to-r from-blue-50 to-white shadow-xl">
            <h3 class="mb-6 text-blue-900 text-2xl font-extrabold text-center">Frequently Asked Questions</h3>

            <div class="space-y-6 text-gray-800">
                <div class="p-4 bg-white rounded-lg shadow-md transition-shadow hover:shadow-xl">
                    <h4 class="text-lg font-semibold text-orange-700">What does Sesware Nexus do?</h4>
                    <p class="text-gray-600 text-md">We build custom software tailored to your business needs — from web platforms
                        to intelligent systems.</p>
                </div>

                <div class="p-4 bg-white rounded-lg shadow-md transition-shadow hover:shadow-xl">
                    <h4 class="text-lg font-semibold text-orange-700">What services do you offer?</h4>
                    <p class="text-gray-600 text-md">We specialize in full-stack development, APIs, UI/UX, system integration, and
                        more.</p>
                </div>

                <div class="p-4 bg-white rounded-lg shadow-md transition-shadow hover:shadow-xl">
                    <h4 class="text-lg font-semibold text-orange-700">What are your pricing models?</h4>
                    <p class="text-gray-600 text-md">Pricing depends on project scope — we offer fixed, hourly, and retainer-based
                        models.</p>
                </div>

                <div class="p-4 bg-white rounded-lg shadow-md transition-shadow hover:shadow-xl">
                    <h4 class="text-lg font-semibold text-orange-700">Do you provide ongoing support?</h4>
                    <p class="text-gray-600 text-md">Absolutely! We offer post-launch support, maintenance, and scaling services as
                        needed.</p>
                </div>
            </div>
        </div>

    </section>

    {{-- Partner Action --}}
    <section
        class="mx-auto p-6 md:p-12 flex flex-col md:flex-row my-12 bg-gradient-to-tr from-blue-900 to-blue-950 rounded-sm shadow-2xl text-white">
        <div class="w-full md:w-1/3 my-4 p-4 space-y-6">
            <i class="fa fa-handshake text-2xl md:text-4xl text-orange-400"></i>
            <h3 class="text-2xl md:text-4xl font-bold leading-tight">Partner With Us</h3>

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
