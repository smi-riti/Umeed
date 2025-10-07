<div>
    @section('title', 'Umeed IVF Hospital - Leading Fertility Care')
    @section('description',
        'Leading fertility care with advanced technology, experienced doctors, and compassionate
        support. We\'re here to help make your dream of parenthood a reality.')
    @section('keywords',
        'IVF, fertility treatment, reproductive health, pregnancy, infertility, egg freezing, male
        infertility, embryo transfer, Umeed IVF Hospital')

        <!-- Hero Section -->
        <section class="bg-[#f9f0f7] pb-12 pt-8 relative overflow-hidden">
            <div class="absolute inset-0 z-0 opacity-25">
                <svg class="w-full h-full text-[#e9c3df]" fill="currentColor" viewBox="0 0 1000 1000"
                    preserveAspectRatio="none">
                    <path d="M0,0 L1000,0 L1000,1000 L0,1000 Z" fill-opacity="0.05"></path>
                    <path d="M0,0 C300,150 700,50 1000,300 L1000,1000 L0,1000 Z" fill-opacity="0.1"></path>
                </svg>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
                    <!-- Image for mobile (shown first on small screens) -->
                    <div class="flex justify-center items-center relative md:hidden order-1 ">
                        <div class="absolute w-24 h-24 bg-[#f4e1ef] rounded-full opacity-70 top-1/4 right-1/4"></div>
                        <div class="absolute w-32 h-32 bg-[#e9c3df] rounded-full opacity-70 -bottom-6 -left-6"></div>
                        <img src="{{ asset('cover.png') }}" alt="Umeed IVF Hospital"
                            class="relative z-10 w-full max-w-md h-auto rounded-lg" />
                    </div>

                    <!-- Text Content -->
                    <div class="py-0 order-2 md:order-1">
                        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 leading-tight mb-4 sm:mb-6">
                            Your Journey to<br>
                            <span class="text-[#a53692] relative inline-block">
                                Parenthood Begins
                                <svg class="absolute -bottom-2 w-full" height="6" viewBox="0 0 200 6"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 3 C 50 -1, 150 7, 200 3 L 200 6 L 0 6 Z" fill="rgba(165, 54, 146, 0.3)">
                                    </path>
                                </svg>
                            </span><br>
                            Here
                        </h1>
                        <p class="text-lg sm:text-xl text-gray-600 mb-6 sm:mb-8 leading-relaxed max-w-xl">
                            Leading fertility care with advanced technology, experienced doctors, and compassionate support.
                            We're here to help make your dream of parenthood a reality.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button
                                class="bg-[#a53692] text-white px-6 sm:px-8 py-3 sm:py-4 rounded-md hover:bg-[#8c2b7b] font-medium text-base sm:text-lg transition-all transform hover:-translate-y-1 flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                Book Consultation
                            </button>
                            <button
                                class="border-2 border-[#a53692] text-[#a53692] px-6 sm:px-8 py-3 sm:py-4 rounded-md hover:bg-[#a53692] hover:text-white font-medium text-base sm:text-lg transition-all transform hover:-translate-y-1">
                                Learn More
                            </button>
                        </div>
                    </div>

                    <!-- Image for tablet and up (hidden on small screens) -->
                    <div class="hidden md:flex justify-center items-center relative order-2">
                        <div class="absolute w-32 h-32 bg-[#f4e1ef] rounded-full opacity-70 top-1/3 right-1/4"></div>
                        <div class="absolute w-40 h-40 bg-[#e9c3df] rounded-full opacity-70 -bottom-10 -left-10"></div>
                        <img src="{{ asset('cover.png') }}" alt="Umeed IVF Hospital"
                            class="relative z-10 w-full max-w-md lg:max-w-lg h-auto rounded-lg " />
                    </div>
                </div>
            </div>
        </section>
        <!-- Fixed Book Appointment Button -->
        <livewire:components.book-appointment-button>
            <!-- Statistics Section -->
            <section class="py-20 bg-white relative overflow-hidden">
                <!-- Background decorative elements -->
                <div class="absolute inset-0 overflow-hidden">
                    <svg class="absolute -bottom-40 -left-40 text-[#f9f0f7] opacity-30 w-96 h-96" viewBox="0 0 200 200"
                        fill="currentColor">
                        <path
                            d="M45,-78.1C58.3,-71.3,69.3,-59.1,75.9,-45C82.5,-31,84.7,-15.5,83.9,-0.4C83.2,14.6,79.6,29.2,71.7,41.2C63.8,53.2,51.7,62.5,38.7,68.9C25.7,75.3,12.8,78.8,-0.2,79.1C-13.1,79.5,-26.2,76.7,-40.4,72C-54.6,67.3,-69.8,60.6,-79.7,48.9C-89.6,37.2,-94.2,20.6,-93.8,4.3C-93.5,-12,-88.2,-24,-81.6,-36.3C-75,-48.6,-67,-61.3,-54.9,-68.5C-42.8,-75.7,-26.4,-77.5,-10.6,-74.9C5.1,-72.3,31.6,-85.3,45,-78.1Z"
                            transform="translate(100 100)" />
                    </svg>
                    <svg class="absolute -top-40 -right-40 text-[#f9f0f7] opacity-30 w-96 h-96" viewBox="0 0 200 200"
                        fill="currentColor">
                        <path
                            d="M45,-78.1C58.3,-71.3,69.3,-59.1,75.9,-45C82.5,-31,84.7,-15.5,83.9,-0.4C83.2,14.6,79.6,29.2,71.7,41.2C63.8,53.2,51.7,62.5,38.7,68.9C25.7,75.3,12.8,78.8,-0.2,79.1C-13.1,79.5,-26.2,76.7,-40.4,72C-54.6,67.3,-69.8,60.6,-79.7,48.9C-89.6,37.2,-94.2,20.6,-93.8,4.3C-93.5,-12,-88.2,-24,-81.6,-36.3C-75,-48.6,-67,-61.3,-54.9,-68.5C-42.8,-75.7,-26.4,-77.5,-10.6,-74.9C5.1,-72.3,31.6,-85.3,45,-78.1Z"
                            transform="translate(100 100)" />
                    </svg>
                </div>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                    <div class="text-center mb-12">
                        <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Our Impact</span>
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-4">Making a Difference in Numbers
                        </h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Our dedication to excellence and cutting-edge
                            fertility treatments has helped thousands of families worldwide</p>
                    </div>

                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-10">
                        <!-- Happy Families -->
                        <div
                            class="p-8 relative group rounded-xl bg-white border border-gray-100 hover:border-[#a53692] transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
                            <div
                                class="absolute -top-4 -right-4 w-16 h-16 bg-[#f9f0f7] rounded-full opacity-50 group-hover:bg-[#a53692] group-hover:opacity-10 transition-all duration-300">
                            </div>

                            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-[#f9f0f7] mb-4">
                                <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>

                            <div class="font-bold text-5xl text-[#a53692] mb-1">5000<span class="text-[#bc4fa1]">+</span>
                            </div>
                            <div class="text-lg font-medium text-gray-800">Happy Families</div>
                            <p class="mt-2 text-gray-600 text-sm">New lives brought into loving homes through our treatments
                            </p>
                        </div>

                        <!-- Success Rate -->
                        <div
                            class="p-8 relative group rounded-xl bg-white border border-gray-100 hover:border-[#a53692] transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
                            <div
                                class="absolute -top-4 -right-4 w-16 h-16 bg-[#f9f0f7] rounded-full opacity-50 group-hover:bg-[#a53692] group-hover:opacity-10 transition-all duration-300">
                            </div>

                            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-[#f9f0f7] mb-4">
                                <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>

                            <div class="font-bold text-5xl text-[#a53692] mb-1">85<span class="text-[#bc4fa1]">%</span>
                            </div>
                            <div class="text-lg font-medium text-gray-800">Success Rate</div>
                            <p class="mt-2 text-gray-600 text-sm">Industry-leading pregnancy success rates across all age
                                groups
                            </p>
                        </div>

                        <!-- Years Experience -->
                        <div
                            class="p-8 relative group rounded-xl bg-white border border-gray-100 hover:border-[#a53692] transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
                            <div
                                class="absolute -top-4 -right-4 w-16 h-16 bg-[#f9f0f7] rounded-full opacity-50 group-hover:bg-[#a53692] group-hover:opacity-10 transition-all duration-300">
                            </div>

                            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-[#f9f0f7] mb-4">
                                <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>

                            <div class="font-bold text-5xl text-[#a53692] mb-1">15<span class="text-[#bc4fa1]">+</span>
                            </div>
                            <div class="text-lg font-medium text-gray-800">Years Experience</div>
                            <p class="mt-2 text-gray-600 text-sm">Decades of specialized fertility expertise and innovation
                            </p>
                        </div>

                        <!-- IVF Cycles -->
                        <div
                            class="p-8 relative group rounded-xl bg-white border border-gray-100 hover:border-[#a53692] transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
                            <div
                                class="absolute -top-4 -right-4 w-16 h-16 bg-[#f9f0f7] rounded-full opacity-50 group-hover:bg-[#a53692] group-hover:opacity-10 transition-all duration-300">
                            </div>

                            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-[#f9f0f7] mb-4">
                                <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
                                </svg>
                            </div>

                            <div class="font-bold text-5xl text-[#a53692] mb-1">10K<span class="text-[#bc4fa1]">+</span>
                            </div>
                            <div class="text-lg font-medium text-gray-800">IVF Cycles</div>
                            <p class="mt-2 text-gray-600 text-sm">Successful procedures performed with care and precision
                            </p>
                        </div>
                    </div>

                    <!-- Horizontal bar with achievement highlights -->
                    <div
                        class="mt-16 py-6 px-8 bg-[#f9f0f7] rounded-xl flex flex-wrap md:flex-nowrap justify-between items-center gap-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-[#a53692]">RANKED #1</div>
                                <div class="text-gray-800">Top Fertility Clinic</div>
                            </div>
                        </div>

                        <div class="h-10 w-px bg-[#e9c3df] hidden md:block"></div>

                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-[#a53692]">CERTIFIED</div>
                                <div class="text-gray-800">ISO 9001:2015</div>
                            </div>
                        </div>

                        <div class="h-10 w-px bg-[#e9c3df] hidden md:block"></div>

                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-[#a53692]">PUBLISHED</div>
                                <div class="text-gray-800">200+ Research Papers</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services Section -->
            <section class="py-24 relative bg-gradient-to-b from-white to-gray-50">
                <!-- Decorative elements -->
                <div class="absolute inset-0 overflow-hidden pointer-events-none">
                    <svg class="absolute right-0 top-40 h-80 w-80 text-[#f9f0f7] opacity-70" viewBox="0 0 200 200"
                        fill="currentColor">
                        <path
                            d="M45,-78.1C58.3,-71.3,69.3,-59.1,75.9,-45C82.5,-31,84.7,-15.5,83.9,-0.4C83.2,14.6,79.6,29.2,71.7,41.2C63.8,53.2,51.7,62.5,38.7,68.9C25.7,75.3,12.8,78.8,-0.2,79.1C-13.1,79.5,-26.2,76.7,-40.4,72C-54.6,67.3,-69.8,60.6,-79.7,48.9C-89.6,37.2,-94.2,20.6,-93.8,4.3C-93.5,-12,-88.2,-24,-81.6,-36.3C-75,-48.6,-67,-61.3,-54.9,-68.5C-42.8,-75.7,-26.4,-77.5,-10.6,-74.9C5.1,-72.3,31.6,-85.3,45,-78.1Z"
                            transform="translate(100 100)" />
                    </svg>
                    <svg class="absolute left-0 bottom-40 h-80 w-80 text-[#f9f0f7] opacity-70" viewBox="0 0 200 200"
                        fill="currentColor">
                        <path
                            d="M45,-78.1C58.3,-71.3,69.3,-59.1,75.9,-45C82.5,-31,84.7,-15.5,83.9,-0.4C83.2,14.6,79.6,29.2,71.7,41.2C63.8,53.2,51.7,62.5,38.7,68.9C25.7,75.3,12.8,78.8,-0.2,79.1C-13.1,79.5,-26.2,76.7,-40.4,72C-54.6,67.3,-69.8,60.6,-79.7,48.9C-89.6,37.2,-94.2,20.6,-93.8,4.3C-93.5,-12,-88.2,-24,-81.6,-36.3C-75,-48.6,-67,-61.3,-54.9,-68.5C-42.8,-75.7,-26.4,-77.5,-10.6,-74.9C5.1,-72.3,31.6,-85.3,45,-78.1Z"
                            transform="translate(100 100)" />
                    </svg>
                </div>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                    <div class="text-center mb-16">
                        <span
                            class="inline-block px-4 py-1 bg-[#f9f0f7] rounded-full text-[#a53692] text-sm font-semibold tracking-wider uppercase mb-4">Expert
                            Care</span>
                        <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Our Specialized Services</h2>
                        <div class="w-24 h-1.5 bg-[#a53692] mx-auto rounded-full mb-6"></div>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Comprehensive fertility treatments tailored to
                            your
                            unique needs using cutting-edge technology and compassionate care</p>
                    </div>

                    <!-- Services Slider/Tabs -->
                    <div class="grid lg:grid-cols-3 gap-8 lg:gap-12">
                        <!-- IVF Treatment -->
                        <div
                            class="group relative bg-white rounded-2xl overflow-hidden transform transition-all duration-300 hover:-translate-y-2">
                            <!-- Top color accent -->
                            <div class="h-2 bg-[#a53692] w-full"></div>

                            <!-- Image section -->
                            <div class="h-56 bg-[#f9f0f7] relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div
                                        class="w-32 h-32 rounded-full bg-white/80 flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-16 h-16 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- Decorative circles -->
                                <div class="absolute top-6 right-6 w-20 h-20 rounded-full bg-white opacity-20"></div>
                                <div class="absolute bottom-6 left-6 w-12 h-12 rounded-full bg-white opacity-20"></div>
                            </div>

                            <!-- Content section -->
                            <div class="p-8">
                                <div class="flex items-center justify-between mb-4">
                                    <h3
                                        class="text-2xl font-bold text-gray-900 group-hover:text-[#a53692] transition-colors">
                                        IVF Treatment</h3>
                                    <span
                                        class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-[#f9f0f7] text-[#a53692]">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <p class="text-gray-600 mb-6">Advanced In Vitro Fertilization with consistently high
                                    success
                                    rates, tailored to your specific needs and circumstances.</p>

                                <div class="space-y-3 mb-6">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-gray-700">Intracytoplasmic Sperm Injection</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-gray-700">Advanced Blastocyst Culture</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-gray-700">Precision Embryo Transfer</span>
                                    </div>
                                </div>

                                <div class="pt-4 border-t border-gray-100">
                                    <a href="#"
                                        class="inline-flex items-center text-[#a53692] font-medium hover:text-[#8c2b7b] transition-colors">
                                        Learn more about IVF
                                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Male Infertility -->
                        <div
                            class="group relative bg-white rounded-2xl overflow-hidden transform transition-all duration-300 hover:-translate-y-2">
                            <!-- Top color accent -->
                            <div class="h-2 bg-[#a53692] w-full"></div>

                            <!-- Image section -->
                            <div class="h-56 bg-[#f9f0f7] relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div
                                        class="w-32 h-32 rounded-full bg-white/80 flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-16 h-16 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- Decorative circles -->
                                <div class="absolute top-6 right-6 w-20 h-20 rounded-full bg-white opacity-20"></div>
                                <div class="absolute bottom-6 left-6 w-12 h-12 rounded-full bg-white opacity-20"></div>
                            </div>

                            <!-- Content section -->
                            <div class="p-8">
                                <div class="flex items-center justify-between mb-4">
                                    <h3
                                        class="text-2xl font-bold text-gray-900 group-hover:text-[#a53692] transition-colors">
                                        Male Infertility</h3>
                                    <span
                                        class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-[#f9f0f7] text-[#a53692]">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <p class="text-gray-600 mb-6">Comprehensive diagnosis and treatment addressing all aspects
                                    of
                                    male fertility challenges with specialized expertise.</p>

                                <div class="space-y-3 mb-6">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-gray-700">TESA/PESA Procedures</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-gray-700">Advanced Sperm Analysis</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-gray-700">Personalized Hormone Therapy</span>
                                    </div>
                                </div>

                                <div class="pt-4 border-t border-gray-100">
                                    <a href="#"
                                        class="inline-flex items-center text-[#a53692] font-medium hover:text-[#8c2b7b] transition-colors">
                                        Learn more about male treatments
                                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Egg Freezing -->
                        <div
                            class="group relative bg-white rounded-2xl overflow-hidden transform transition-all duration-300 hover:-translate-y-2">
                            <!-- Top color accent -->
                            <div class="h-2 bg-[#a53692] w-full"></div>

                            <!-- Image section -->
                            <div class="h-56 bg-[#f9f0f7] relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div
                                        class="w-32 h-32 rounded-full bg-white/80 flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-16 h-16 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- Decorative circles -->
                                <div class="absolute top-6 right-6 w-20 h-20 rounded-full bg-white opacity-20"></div>
                                <div class="absolute bottom-6 left-6 w-12 h-12 rounded-full bg-white opacity-20"></div>
                            </div>

                            <!-- Content section -->
                            <div class="p-8">
                                <div class="flex items-center justify-between mb-4">
                                    <h3
                                        class="text-2xl font-bold text-gray-900 group-hover:text-[#a53692] transition-colors">
                                        Egg Freezing</h3>
                                    <span
                                        class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-[#f9f0f7] text-[#a53692]">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <p class="text-gray-600 mb-6">Preserve your fertility options for the future with
                                    state-of-the-art cryopreservation technology and expert care.</p>

                                <div class="space-y-3 mb-6">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-gray-700">Rapid Vitrification Technique</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-gray-700">Secure Long Term Storage</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-gray-700">Industry-Leading Success Rates</span>
                                    </div>
                                </div>

                                <div class="pt-4 border-t border-gray-100">
                                    <a href="#"
                                        class="inline-flex items-center text-[#a53692] font-medium hover:text-[#8c2b7b] transition-colors">
                                        Learn more about egg freezing
                                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Services Preview -->
                    <div class="mt-16 grid md:grid-cols-2 gap-8">
                        <div
                            class="bg-white p-8 rounded-xl border border-gray-100 hover:border-[#a53692] transition-all duration-300 flex items-center gap-6 group">
                            <div
                                class="flex-shrink-0 w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="text-xl font-bold text-gray-900 mb-2 group-hover:text-[#a53692] transition-colors">
                                    Embryo Genetic Testing</h4>
                                <p class="text-gray-600 mb-3">Comprehensive genetic screening for healthier pregnancies</p>
                                <a href="#"
                                    class="text-[#a53692] font-medium hover:text-[#8c2b7b] inline-flex items-center">
                                    Learn more
                                    <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div
                            class="bg-white p-8 rounded-xl border border-gray-100 hover:border-[#a53692] transition-all duration-300 flex items-center gap-6 group">
                            <div
                                class="flex-shrink-0 w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="text-xl font-bold text-gray-900 mb-2 group-hover:text-[#a53692] transition-colors">
                                    Donor Programs</h4>
                                <p class="text-gray-600 mb-3">Egg, sperm, and embryo donor solutions with rigorous
                                    screening
                                </p>
                                <a href="#"
                                    class="text-[#a53692] font-medium hover:text-[#8c2b7b] inline-flex items-center">
                                    Learn more
                                    <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <div class="mt-16 text-center">
                        <a href="#"
                            class="inline-flex items-center bg-white px-8 py-4 border-2 border-[#a53692] text-[#a53692] rounded-full font-medium hover:bg-[#a53692] hover:text-white transition-all duration-300 transform hover:-translate-y-1">
                            Explore All Our Fertility Services
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
            <!-- Testimonials Section -->
            <section class="py-20 bg-[#f9f0f7] relative overflow-hidden">
                <div class="absolute inset-0 opacity-70">
                    <div
                        class="absolute right-0 top-0 w-1/2 h-full bg-white opacity-60 transform -skew-x-12 translate-x-1/4">
                    </div>
                </div>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                    <div class="text-center mb-16">
                        <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Patient Stories</span>
                        <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mt-2 mb-4">What Our Patients Say</h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Real experiences from families who trusted us
                            with
                            their fertility journey</p>
                    </div>

                    <div class="grid lg:grid-cols-3 gap-10">
                        @forelse($testimonials as $index => $testimonial)
                            <div
                                class="bg-white rounded-xl p-8 shadow-sm relative transform transition-all duration-500 hover:-translate-y-1 hover:shadow-md {{ $index == 1 ? 'lg:mt-6' : '' }}">
                                <div class="absolute top-0 right-0 transform translate-x-2 -translate-y-2">
                                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                                        class="text-purple-100">
                                        <path
                                            d="M34.0874 23.2498C38.0666 17.7935 35.2137 10.0935 28.9244 8.25726C24.4819 6.93226 19.3397 8.38601 16.4842 12.0935C13.5782 15.8623 13.4551 21.1873 16.1855 25.0685C18.6624 28.5873 23.1279 30.551 27.6214 29.9248C28.824 37.2498 24.4449 44.5373 17.5937 46.9935C18.1811 47.186 18.8915 47.1373 19.5017 46.8623C30.2052 42.6185 33.0322 30.626 34.0879 23.2498H34.0874Z"
                                            fill="currentColor" />
                                        <path
                                            d="M68.9243 23.2498C72.9035 17.7935 70.0506 10.0935 63.7613 8.25726C59.3188 6.93226 54.1766 8.38601 51.3211 12.0935C48.4151 15.8623 48.292 21.1873 51.0224 25.0685C53.4993 28.5873 57.9648 30.551 62.4583 29.9248C63.6609 37.2498 59.2818 44.5373 52.4306 46.9935C53.018 47.186 53.7284 47.1373 54.3386 46.8623C65.0421 42.6185 67.8691 30.626 68.9248 23.2498H68.9243Z"
                                            fill="currentColor" />
                                    </svg>
                                </div>
                                <div class="flex items-center mb-6">
                                    <div class="flex text-yellow-400 mr-2">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                        @endfor
                                    </div>
                                    <span
                                        class="text-gray-500 text-sm ml-1">{{ number_format($testimonial->rating, 1) }}</span>
                                </div>
                                <p class="text-gray-600 mb-8 italic leading-relaxed">"{{ $testimonial->review }}"</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-purple-200 flex items-center justify-center mr-4">
                                        @php
                                            $initials = '';
                                            $names = explode(' ', $testimonial->patient_name);
                                            foreach ($names as $name) {
                                                $initials .= strtoupper(substr($name, 0, 1));
                                            }
                                            $initials = substr($initials, 0, 2);

                                            // Different background colors based on index
                                            $bgColors = ['bg-purple-200', 'bg-pink-200', 'bg-blue-200'];
                                            $textColors = ['text-purple-700', 'text-pink-700', 'text-blue-700'];
                                            $bgClass = $bgColors[$index % count($bgColors)] ?? 'bg-purple-200';
                                            $textClass = $textColors[$index % count($textColors)] ?? 'text-purple-700';
                                        @endphp
                                        <span class="{{ $textClass }} font-bold text-lg">{{ $initials }}</span>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">{{ $testimonial->patient_name }}</h4>
                                        <p class="text-sm text-gray-500">
                                            @if ($testimonial->treatment_type)
                                                {{ $testimonial->treatment_type }} •
                                            @endif
                                            {{ $testimonial->patient_location }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <!-- Fallback testimonials if none in database -->
                            <div class="lg:col-span-3 text-center py-8">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                                <h3 class="mt-2 text-sm font-medium text-gray-900">No testimonials yet</h3>
                                <p class="mt-1 text-sm text-gray-500">Check back soon for patient stories.</p>
                            </div>
                        @endforelse
                    </div>

                </div>
            </section>

            <!-- Doctors Section -->
            <section class="py-20 bg-[#f9f0f7]/30 relative overflow-hidden">
                <!-- Decorative background elements -->
                <div class="absolute inset-0 overflow-hidden pointer-events-none">
                    <svg class="absolute -right-24 -bottom-24 h-64 w-64 text-[#f9f0f7] opacity-70" viewBox="0 0 200 200"
                        fill="currentColor">
                        <path
                            d="M45,-78.1C58.3,-71.3,69.3,-59.1,75.9,-45C82.5,-31,84.7,-15.5,83.9,-0.4C83.2,14.6,79.6,29.2,71.7,41.2C63.8,53.2,51.7,62.5,38.7,68.9C25.7,75.3,12.8,78.8,-0.2,79.1C-13.1,79.5,-26.2,76.7,-40.4,72C-54.6,67.3,-69.8,60.6,-79.7,48.9C-89.6,37.2,-94.2,20.6,-93.8,4.3C-93.5,-12,-88.2,-24,-81.6,-36.3C-75,-48.6,-67,-61.3,-54.9,-68.5C-42.8,-75.7,-26.4,-77.5,-10.6,-74.9C5.1,-72.3,31.6,-85.3,45,-78.1Z"
                            transform="translate(100 100)" />
                    </svg>
                    <svg class="absolute -left-24 -top-24 h-64 w-64 text-[#f9f0f7] opacity-70" viewBox="0 0 200 200"
                        fill="currentColor">
                        <path
                            d="M45,-78.1C58.3,-71.3,69.3,-59.1,75.9,-45C82.5,-31,84.7,-15.5,83.9,-0.4C83.2,14.6,79.6,29.2,71.7,41.2C63.8,53.2,51.7,62.5,38.7,68.9C25.7,75.3,12.8,78.8,-0.2,79.1C-13.1,79.5,-26.2,76.7,-40.4,72C-54.6,67.3,-69.8,60.6,-79.7,48.9C-89.6,37.2,-94.2,20.6,-93.8,4.3C-93.5,-12,-88.2,-24,-81.6,-36.3C-75,-48.6,-67,-61.3,-54.9,-68.5C-42.8,-75.7,-26.4,-77.5,-10.6,-74.9C5.1,-72.3,31.6,-85.3,45,-78.1Z"
                            transform="translate(100 100)" />
                    </svg>
                </div>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                    <div class="text-center mb-16">
                        <span
                            class="inline-block px-4 py-1 bg-[#f9f0f7] rounded-full text-[#a53692] text-sm font-semibold tracking-wider uppercase mb-4">Expert
                            Team</span>
                        <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Meet Our Specialists</h2>
                        <div class="w-24 h-1.5 bg-[#a53692] mx-auto rounded-full mb-6"></div>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">World-class fertility experts dedicated to
                            providing
                            you with personalized care</p>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8">
                        @foreach ($doctors as $doctor)
                            <div
                                class="group bg-white border border-gray-100 hover:border-[#a53692] rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 transform hover:-translate-y-2">
                                <div class="h-64 bg-[#f9f0f7] relative overflow-hidden">
                                    <!-- Doctor image placeholder with decorative elements -->
                                    @if ($doctor->image)
                                        <div class="h-64 bg-gray-200">
                                            <img src="{{ asset('storage/' . $doctor->image) }}"
                                                alt="Dr. {{ $doctor->name }}" class="w-full h-full object-cover"
                                                onerror="this.src='https://via.placeholder.com/400x400?text=Dr.{{ urlencode($doctor->name) }}';this.onerror='';">
                                        </div>
                                    @else
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <div
                                                class="w-32 h-32 rounded-full bg-white/80 flex items-center justify-center backdrop-blur-sm">
                                                <svg class="w-16 h-16 text-[#a53692]" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </div>
                                    @endif
                                    <!-- Decorative circles -->
                                    <div class="absolute top-6 right-6 w-20 h-20 rounded-full bg-white opacity-20"></div>
                                    <div class="absolute bottom-6 left-6 w-12 h-12 rounded-full bg-white opacity-20"></div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm text-[#a53692]/70">{{ $doctor->profile->experience ?? '0' }}
                                            Experience</span>
                                        <div class="flex items-center">
                                            <span class="text-yellow-400">★</span>
                                            <span class="text-sm text-gray-600 ml-1">4.9 (195)</span>
                                        </div>
                                    </div>
                                    <h3
                                        class="text-xl font-bold text-gray-900 mb-2 group-hover:text-[#a53692] transition-colors">
                                        {{ $doctor->name }}</h3>
                                    <p class="text-[#a53692] font-medium mb-2">
                                        {{ $doctor->department->name ?? 'Fertility Specialist' }}</p>
                                    <p class="text-gray-600 text-sm mb-4">
                                        Special Interest :- {{ $doctor->profile->special_interest ?? 'Nothing' }}</p>



                                    <div class="flex gap-2">
                                        <a href="{{ route('booking') }}"
                                            class="flex-1 bg-[#a53692] text-white py-2 px-4 rounded-md hover:bg-[#8c2b7b] text-sm font-medium transition-colors">
                                            Book Now
                                        </a>
                                        <a href="{{ route('view-doctor', $doctor->slug) }}"
                                            class="px-4 py-2 border border-gray-300 text-gray-700 rounded-md hover:bg-[#f9f0f7] hover:border-[#a53692] hover:text-[#a53692] text-sm transition-colors">
                                            View Profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        <!-- CTA Button -->
                        <div class="mt-12 text-center">
                            <a href="#"
                                class="inline-flex items-center px-6 py-3 border-2 border-[#a53692] text-[#a53692] rounded-full font-medium hover:bg-[#a53692] hover:text-white transition-all duration-300">
                                Meet All Our Specialists
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
            </section>

            <!-- CTA Section -->
            <section class="py-24 bg-[#a53692] relative overflow-hidden">
                <!-- Background Elements -->
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-white"></div>
                    <div class="absolute -bottom-24 -left-24 w-96 h-96 rounded-full bg-white"></div>
                    <svg class="absolute h-full w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="rgba(255,255,255,0.1)" fill-opacity="1"
                            d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,85.3C672,75,768,85,864,122.7C960,160,1056,224,1152,218.7C1248,213,1344,139,1392,101.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                        </path>
                    </svg>
                </div>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <!-- Content Side -->
                        <div class="text-center lg:text-left">
                            <div class="inline-block mb-3">
                                <span
                                    class="bg-white/20 text-white px-4 py-1 rounded-full text-sm font-semibold uppercase tracking-wider">Limited
                                    Time Offer</span>
                            </div>
                            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">Begin Your Parenthood
                                Journey Today</h2>
                            <p class="text-xl text-purple-100 mb-8 leading-relaxed">
                                Schedule a consultation with our fertility experts and receive a comprehensive fertility
                                assessment worth ₹15,000 completely free. Take the first confident step towards building
                                your
                                family.
                            </p>

                            <div class="flex flex-col sm:flex-row gap-4 lg:justify-start justify-center mb-8">
                                <a href="#"
                                    class="bg-white text-[#a53692] px-8 py-4 rounded-lg hover:bg-purple-50 font-medium text-lg inline-flex items-center justify-center transition-all transform hover:-translate-y-1">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    Book Free Consultation
                                </a>
                                <a href="tel:+919876543210"
                                    class="border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-[#a53692] font-medium text-lg inline-flex items-center justify-center transition-all">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                    Call +91 9876 543210
                                </a>
                            </div>

                            <!-- Trust Indicators -->
                            <div class="flex flex-wrap justify-center lg:justify-start gap-6 items-center">
                                <div class="flex items-center">
                                    <div class="bg-white/10 p-2 rounded-full">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-white ml-2 text-sm">Confidential Process</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="bg-white/10 p-2 rounded-full">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span class="text-white ml-2 text-sm">5000+ Happy Families</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="bg-white/10 p-2 rounded-full">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-white ml-2 text-sm">Same Day Appointments</span>
                                </div>
                            </div>
                        </div>

                        <!-- Form Side -->
                        <div>
                            <div class="bg-white p-8 rounded-xl shadow-2xl">
                                <h3 class="text-2xl font-bold text-gray-900 mb-6">Request a Callback</h3>
                                <form wire:submit.prevent="save" class="space-y-6">
                                    <div class="flex gap-16">
                                        <div class="">
                                            <label for="name"
                                                class="block text-sm font-medium text-gray-700 mb-1">Your
                                                Name
                                                *</label>
                                            <input type="text" id="name" wire:model="name"
                                                class="w-full px-8 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                            @error('name')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="">
                                            <label for="contact"
                                                class="block text-sm font-medium text-gray-700 mb-1">Phone
                                                Number *</label>
                                            <input type="tel" id="contact" wire:model="contact"
                                                class="w-full px-8 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                            @error('contact')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="mb-6">
                                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email
                                            Address *</label>
                                        <input type="email" id="email" wire:model="email"
                                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                        @error('email')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-6">
                                        <label for="service" class="block text-sm font-medium text-gray-700 mb-1">Service
                                            Interested In *</label>
                                        <select id="service" wire:model="subject"
                                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                            <option value="">Select a service</option>
                                            <option value="ivf">IVF Treatment</option>
                                            <option value="male-infertility">Male Infertility Treatment</option>
                                            <option value="egg-freezing">Egg Freezing</option>
                                            <option value="general">General Consultation</option>
                                        </select>
                                        @error('subject')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-6">
                                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Any
                                            Specific Questions</label>
                                        <textarea id="message" wire:model="message" rows="3"
                                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent"></textarea>
                                        @error('message')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-6">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="rounded text-purple-600 focus:ring-purple-600">
                                            <span class="ml-2 text-sm text-gray-600">
                                                I agree to the privacy policy and terms of service.
                                            </span>
                                        </label>

                                    </div>

                                    <div>
                                        <button type="submit"
                                            class="w-full bg-[#a53692] hover:bg-[#8c2b7b] text-white font-medium py-3 px-4 rounded-lg transition-all transform hover:-translate-y-1">
                                            Request Callback
                                        </button>
                                    </div>

                                    @if (session()->has('success'))
                                        <div class="mt-4 p-3 bg-green-100 text-green-700 rounded-md">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>



    </div>
