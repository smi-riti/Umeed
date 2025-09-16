<div>
    @section('title', 'Umeed IVF Hospital - Leading Fertility Care')
    @section('description', 'Leading fertility care with advanced technology, experienced doctors, and compassionate support. We\'re here to help make your dream of parenthood a reality.')
    @section('keywords', 'IVF, fertility treatment, reproductive health, pregnancy, infertility, egg freezing, male infertility, embryo transfer, Umeed IVF Hospital')

    <!-- Hero Section -->
    <section class="bg-[#f9f0f7] pb-20 relative overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-25">
            <svg class="w-full h-full text-[#e9c3df]" fill="currentColor" viewBox="0 0 1000 1000" preserveAspectRatio="none">
                <path d="M0,0 L1000,0 L1000,1000 L0,1000 Z" fill-opacity="0.05"></path>
                <path d="M0,0 C300,150 700,50 1000,300 L1000,1000 L0,1000 Z" fill-opacity="0.1"></path>
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="py-0">
                    <h1 class="text-5xl md:text-6xl font-bold text-gray-900 leading-tight mb-6">
                        Your Journey to<br>
                        <span class="text-[#a53692] relative inline-block">
                            Parenthood Begins
                            <svg class="absolute -bottom-2 w-full" height="6" viewBox="0 0 200 6" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 3 C 50 -1, 150 7, 200 3 L 200 6 L 0 6 Z" fill="rgba(165, 54, 146, 0.3)"></path>
                            </svg>
                        </span><br>
                        Here
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-xl">
                        Leading fertility care with advanced technology, experienced doctors, and compassionate support. 
                        We're here to help make your dream of parenthood a reality.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="bg-[#a53692] text-white px-8 py-4 rounded-md hover:bg-[#8c2b7b] font-medium text-lg transition-all transform hover:-translate-y-1 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Book Consultation
                        </button>
                        <button class="border-2 border-[#a53692] text-[#a53692] px-8 py-4 rounded-md hover:bg-[#a53692] hover:text-white font-medium text-lg transition-all transform hover:-translate-y-1">
                            Learn More
                        </button>
                    </div>
                </div>
                <div class="flex justify-center items-center relative">
                    <div class="absolute w-32 h-32 bg-[#f4e1ef] rounded-full opacity-70 top-48 right-72"></div>
                    <div class="absolute w-40 h-40 bg-[#e9c3df] rounded-full opacity-70 -bottom-10 -left-10"></div>
                    <img src="{{ asset("cover.png") }}" alt="Umeed IVF Hospital" class="relative z-10 max-w-full rounded-lg" />
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-16 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="p-6 relative group overflow-hidden rounded-lg bg-white border border-gray-100 hover:border-purple-200 transition-all duration-300 hover:shadow-md">
                    <div class="absolute inset-0 bg-[#f9f0f7] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="text-5xl font-bold text-[#a53692] mb-2 relative z-10 flex items-center">
                        <span class="mr-2">5000</span>
                        <span class="text-[#bc4fa1]">+</span>
                    </div>
                    <div class="text-gray-600 font-medium relative z-10 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                        </svg>
                        Happy Families
                    </div>
                </div>
                <div class="p-6 relative group overflow-hidden rounded-lg bg-white border border-gray-100 hover:border-purple-200 transition-all duration-300 hover:shadow-md">
                    <div class="absolute inset-0 bg-[#f9f0f7] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="text-5xl font-bold text-[#a53692] mb-2 relative z-10 flex items-center">
                        <span class="mr-2">85</span>
                        <span class="text-[#bc4fa1]">%</span>
                    </div>
                    <div class="text-gray-600 font-medium relative z-10 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                        Success Rate
                    </div>
                </div>
                <div class="p-6 relative group overflow-hidden rounded-lg bg-white border border-gray-100 hover:border-purple-200 transition-all duration-300 hover:shadow-md">
                    <div class="absolute inset-0 bg-[#f9f0f7] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="text-5xl font-bold text-[#a53692] mb-2 relative z-10 flex items-center">
                        <span class="mr-2">15</span>
                        <span class="text-[#bc4fa1]">+</span>
                    </div>
                    <div class="text-gray-600 font-medium relative z-10 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                        </svg>
                        Years Experience
                    </div>
                </div>
                <div class="p-6 relative group overflow-hidden rounded-lg bg-white border border-gray-100 hover:border-purple-200 transition-all duration-300 hover:shadow-md">
                    <div class="absolute inset-0 bg-[#f9f0f7] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="text-5xl font-bold text-[#a53692] mb-2 relative z-10 flex items-center">
                        <span class="mr-2">10000</span>
                        <span class="text-[#bc4fa1]">+</span>
                    </div>
                    <div class="text-gray-600 font-medium relative z-10 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/>
                        </svg>
                        IVF Cycles
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-gray-50 relative">
        <div class="absolute inset-0 opacity-50 overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-20 bg-white bg-opacity-100"></div>
            <div class="absolute bottom-0 left-0 w-full h-20 bg-white bg-opacity-100"></div>
            <svg class="absolute right-0 top-0 h-64 w-64 text-[#f4e1ef] transform translate-x-1/3 -translate-y-1/4" fill="currentColor" viewBox="0 0 200 200">
                <path d="M45,-78.1C58.3,-71.3,69.3,-59.1,75.9,-45C82.5,-31,84.7,-15.5,83.9,-0.4C83.2,14.6,79.6,29.2,71.7,41.2C63.8,53.2,51.7,62.5,38.7,68.9C25.7,75.3,12.8,78.8,-0.2,79.1C-13.1,79.5,-26.2,76.7,-40.4,72C-54.6,67.3,-69.8,60.6,-79.7,48.9C-89.6,37.2,-94.2,20.6,-93.8,4.3C-93.5,-12,-88.2,-24,-81.6,-36.3C-75,-48.6,-67,-61.3,-54.9,-68.5C-42.8,-75.7,-26.4,-77.5,-10.6,-74.9C5.1,-72.3,31.6,-85.3,45,-78.1Z" transform="translate(100 100)" />
            </svg>
            <svg class="absolute left-0 bottom-0 h-64 w-64 text-[#f4e1ef] transform -translate-x-1/3 translate-y-1/4" fill="currentColor" viewBox="0 0 200 200">
                <path d="M45,-78.1C58.3,-71.3,69.3,-59.1,75.9,-45C82.5,-31,84.7,-15.5,83.9,-0.4C83.2,14.6,79.6,29.2,71.7,41.2C63.8,53.2,51.7,62.5,38.7,68.9C25.7,75.3,12.8,78.8,-0.2,79.1C-13.1,79.5,-26.2,76.7,-40.4,72C-54.6,67.3,-69.8,60.6,-79.7,48.9C-89.6,37.2,-94.2,20.6,-93.8,4.3C-93.5,-12,-88.2,-24,-81.6,-36.3C-75,-48.6,-67,-61.3,-54.9,-68.5C-42.8,-75.7,-26.4,-77.5,-10.6,-74.9C5.1,-72.3,31.6,-85.3,45,-78.1Z" transform="translate(100 100)" />
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-block">
                    <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Expert Care</span>
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mt-2 mb-4">Our Specialized Services</h2>
                </div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Comprehensive fertility treatments tailored to your unique needs using cutting-edge technology and compassionate care</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-10">
                <!-- IVF Treatment -->
                <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 group">
                    <div class="relative">
                        <div class="w-20 h-20 bg-[#f9f0f7] rounded-full flex items-center justify-center mx-auto mb-8 transform transition-all duration-500 group-hover:scale-110">
                            <svg class="w-10 h-10 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="absolute inset-0 bg-[#a53692] rounded-full opacity-0 transition-opacity duration-500 group-hover:opacity-10 w-20 h-20 mx-auto"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-purple-700 transition-colors duration-300">IVF Treatment</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Advanced In Vitro Fertilization with consistently high success rates, tailored to your specific needs.</p>
                    <div class="space-y-3">
                        <div class="flex items-center bg-pink-50 rounded-lg p-3 transition-transform duration-300 hover:translate-x-1">
                            <span class="flex-shrink-0 w-5 h-5 bg-pink-500 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </span>
                            <span class="text-gray-700 font-medium">Intracytoplasmic Sperm Injection (ICSI)</span>
                        </div>
                        <div class="flex items-center bg-pink-50 rounded-lg p-3 transition-transform duration-300 hover:translate-x-1">
                            <span class="flex-shrink-0 w-5 h-5 bg-pink-500 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </span>
                            <span class="text-gray-700 font-medium">Advanced Blastocyst Culture</span>
                        </div>
                        <div class="flex items-center bg-pink-50 rounded-lg p-3 transition-transform duration-300 hover:translate-x-1">
                            <span class="flex-shrink-0 w-5 h-5 bg-pink-500 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </span>
                            <span class="text-gray-700 font-medium">Precision Embryo Transfer</span>
                        </div>
                    </div>
                    <div class="mt-8 text-right">
                        <a href="#" class="inline-flex items-center text-[#a53692] font-medium hover:text-[#8c2b7b] transition-colors">
                            Learn more
                            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Male Infertility -->
                <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 group">
                    <div class="relative">
                        <div class="w-20 h-20 bg-[#f9f0f7] rounded-full flex items-center justify-center mx-auto mb-8 transform transition-all duration-500 group-hover:scale-110">
                            <svg class="w-10 h-10 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="absolute inset-0 bg-[#a53692] rounded-full opacity-0 transition-opacity duration-500 group-hover:opacity-10 w-20 h-20 mx-auto"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-[#a53692] transition-colors duration-300">Male Infertility</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Comprehensive diagnosis and treatment addressing all aspects of male fertility challenges.</p>
                    <div class="space-y-3">
                        <div class="flex items-center bg-blue-50 rounded-lg p-3 transition-transform duration-300 hover:translate-x-1">
                            <span class="flex-shrink-0 w-5 h-5 bg-blue-500 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </span>
                            <span class="text-gray-700 font-medium">TESA/PESA Procedures</span>
                        </div>
                        <div class="flex items-center bg-blue-50 rounded-lg p-3 transition-transform duration-300 hover:translate-x-1">
                            <span class="flex-shrink-0 w-5 h-5 bg-blue-500 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </span>
                            <span class="text-gray-700 font-medium">Advanced Sperm Analysis</span>
                        </div>
                        <div class="flex items-center bg-blue-50 rounded-lg p-3 transition-transform duration-300 hover:translate-x-1">
                            <span class="flex-shrink-0 w-5 h-5 bg-blue-500 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </span>
                            <span class="text-gray-700 font-medium">Personalized Hormone Therapy</span>
                        </div>
                    </div>
                    <div class="mt-8 text-right">
                        <a href="#" class="inline-flex items-center text-[#a53692] font-medium hover:text-[#8c2b7b] transition-colors">
                            Learn more
                            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Egg Freezing -->
                <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 group">
                    <div class="relative">
                        <div class="w-20 h-20 bg-[#f9f0f7] rounded-full flex items-center justify-center mx-auto mb-8 transform transition-all duration-500 group-hover:scale-110">
                            <svg class="w-10 h-10 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="absolute inset-0 bg-[#a53692] rounded-full opacity-0 transition-opacity duration-500 group-hover:opacity-10 w-20 h-20 mx-auto"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-purple-700 transition-colors duration-300">Egg Freezing</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Preserve your fertility options for the future with state-of-the-art cryopreservation technology.</p>
                    <div class="space-y-3">
                        <div class="flex items-center bg-purple-50 rounded-lg p-3 transition-transform duration-300 hover:translate-x-1">
                            <span class="flex-shrink-0 w-5 h-5 bg-purple-500 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </span>
                            <span class="text-gray-700 font-medium">Rapid Vitrification Technique</span>
                        </div>
                        <div class="flex items-center bg-purple-50 rounded-lg p-3 transition-transform duration-300 hover:translate-x-1">
                            <span class="flex-shrink-0 w-5 h-5 bg-purple-500 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </span>
                            <span class="text-gray-700 font-medium">Secure Long Term Storage</span>
                        </div>
                        <div class="flex items-center bg-purple-50 rounded-lg p-3 transition-transform duration-300 hover:translate-x-1">
                            <span class="flex-shrink-0 w-5 h-5 bg-purple-500 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </span>
                            <span class="text-gray-700 font-medium">Industry-Leading Success Rates</span>
                        </div>
                    </div>
                    <div class="mt-8 text-right">
                        <a href="#" class="inline-flex items-center text-[#a53692] font-medium hover:text-[#8c2b7b] transition-colors">
                            Learn more
                            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="mt-16 text-center">
                <a href="#" class="inline-flex items-center px-8 py-3 border-2 border-[#a53692] text-[#a53692] rounded-full font-medium hover:bg-[#a53692] hover:text-white transition-all duration-300">
                    View All Services
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-[#f9f0f7] relative overflow-hidden">
        <div class="absolute inset-0 opacity-70">
            <div class="absolute right-0 top-0 w-1/2 h-full bg-white opacity-60 transform -skew-x-12 translate-x-1/4"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Patient Stories</span>
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mt-2 mb-4">What Our Patients Say</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Real experiences from families who trusted us with their fertility journey</p>
            </div>
            
            <div class="grid lg:grid-cols-3 gap-10">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-xl p-8 shadow-sm relative transform transition-all duration-500 hover:-translate-y-1 hover:shadow-md">
                    <div class="absolute top-0 right-0 transform translate-x-2 -translate-y-2">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" class="text-purple-100">
                            <path d="M34.0874 23.2498C38.0666 17.7935 35.2137 10.0935 28.9244 8.25726C24.4819 6.93226 19.3397 8.38601 16.4842 12.0935C13.5782 15.8623 13.4551 21.1873 16.1855 25.0685C18.6624 28.5873 23.1279 30.551 27.6214 29.9248C28.824 37.2498 24.4449 44.5373 17.5937 46.9935C18.1811 47.186 18.8915 47.1373 19.5017 46.8623C30.2052 42.6185 33.0322 30.626 34.0879 23.2498H34.0874Z" fill="currentColor"/>
                            <path d="M68.9243 23.2498C72.9035 17.7935 70.0506 10.0935 63.7613 8.25726C59.3188 6.93226 54.1766 8.38601 51.3211 12.0935C48.4151 15.8623 48.292 21.1873 51.0224 25.0685C53.4993 28.5873 57.9648 30.551 62.4583 29.9248C63.6609 37.2498 59.2818 44.5373 52.4306 46.9935C53.018 47.186 53.7284 47.1373 54.3386 46.8623C65.0421 42.6185 67.8691 30.626 68.9248 23.2498H68.9243Z" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="flex items-center mb-6">
                        <div class="flex text-yellow-400 mr-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                        <span class="text-gray-500 text-sm ml-1">5.0</span>
                    </div>
                    <p class="text-gray-600 mb-8 italic leading-relaxed">"After years of trying and multiple failed attempts elsewhere, Umeed IVF gave us hope again. Dr. Sharma's expertise and the entire team's compassionate care made our journey so much easier. Today, we're blessed with twins, and we couldn't be more grateful."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-purple-200 flex items-center justify-center mr-4">
                            <span class="text-purple-700 font-bold text-lg">RS</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Raj & Sunita Patel</h4>
                            <p class="text-sm text-gray-500">Parents of twins • Delhi</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white rounded-xl p-8 shadow-sm relative transform transition-all duration-500 hover:-translate-y-1 hover:shadow-md lg:mt-6">
                    <div class="absolute top-0 right-0 transform translate-x-2 -translate-y-2">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" class="text-purple-100">
                            <path d="M34.0874 23.2498C38.0666 17.7935 35.2137 10.0935 28.9244 8.25726C24.4819 6.93226 19.3397 8.38601 16.4842 12.0935C13.5782 15.8623 13.4551 21.1873 16.1855 25.0685C18.6624 28.5873 23.1279 30.551 27.6214 29.9248C28.824 37.2498 24.4449 44.5373 17.5937 46.9935C18.1811 47.186 18.8915 47.1373 19.5017 46.8623C30.2052 42.6185 33.0322 30.626 34.0879 23.2498H34.0874Z" fill="currentColor"/>
                            <path d="M68.9243 23.2498C72.9035 17.7935 70.0506 10.0935 63.7613 8.25726C59.3188 6.93226 54.1766 8.38601 51.3211 12.0935C48.4151 15.8623 48.292 21.1873 51.0224 25.0685C53.4993 28.5873 57.9648 30.551 62.4583 29.9248C63.6609 37.2498 59.2818 44.5373 52.4306 46.9935C53.018 47.186 53.7284 47.1373 54.3386 46.8623C65.0421 42.6185 67.8691 30.626 68.9248 23.2498H68.9243Z" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="flex items-center mb-6">
                        <div class="flex text-yellow-400 mr-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                        <span class="text-gray-500 text-sm ml-1">5.0</span>
                    </div>
                    <p class="text-gray-600 mb-8 italic leading-relaxed">"The egg freezing process at Umeed IVF was so well explained and executed. As a career-focused woman, I wanted to preserve my options for the future. The staff was professional, the facility is state-of-the-art, and I felt empowered throughout my journey."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-pink-200 flex items-center justify-center mr-4">
                            <span class="text-pink-700 font-bold text-lg">MK</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Meera Khanna</h4>
                            <p class="text-sm text-gray-500">Technology Executive • Mumbai</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white rounded-xl p-8 shadow-sm relative transform transition-all duration-500 hover:-translate-y-1 hover:shadow-md">
                    <div class="absolute top-0 right-0 transform translate-x-2 -translate-y-2">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" class="text-purple-100">
                            <path d="M34.0874 23.2498C38.0666 17.7935 35.2137 10.0935 28.9244 8.25726C24.4819 6.93226 19.3397 8.38601 16.4842 12.0935C13.5782 15.8623 13.4551 21.1873 16.1855 25.0685C18.6624 28.5873 23.1279 30.551 27.6214 29.9248C28.824 37.2498 24.4449 44.5373 17.5937 46.9935C18.1811 47.186 18.8915 47.1373 19.5017 46.8623C30.2052 42.6185 33.0322 30.626 34.0879 23.2498H34.0874Z" fill="currentColor"/>
                            <path d="M68.9243 23.2498C72.9035 17.7935 70.0506 10.0935 63.7613 8.25726C59.3188 6.93226 54.1766 8.38601 51.3211 12.0935C48.4151 15.8623 48.292 21.1873 51.0224 25.0685C53.4993 28.5873 57.9648 30.551 62.4583 29.9248C63.6609 37.2498 59.2818 44.5373 52.4306 46.9935C53.018 47.186 53.7284 47.1373 54.3386 46.8623C65.0421 42.6185 67.8691 30.626 68.9248 23.2498H68.9243Z" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="flex items-center mb-6">
                        <div class="flex text-yellow-400 mr-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                        <span class="text-gray-500 text-sm ml-1">5.0</span>
                    </div>
                    <p class="text-gray-600 mb-8 italic leading-relaxed">"As someone dealing with male factor infertility, I was apprehensive about treatment. Dr. Kumar at Umeed IVF approached my case with such expertise and sensitivity. Their team understood our concerns and guided us through every step. Today, we're proud parents to a beautiful baby girl."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-blue-200 flex items-center justify-center mr-4">
                            <span class="text-blue-700 font-bold text-lg">AV</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Ankit & Vidya Singh</h4>
                            <p class="text-sm text-gray-500">First-time Parents • Bangalore</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-16 flex justify-center">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-[#a53692] text-[#a53692] rounded-md font-medium hover:bg-[#a53692] hover:text-white transition-all duration-300">
                    Read More Success Stories
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Doctors Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-16">
                <div>
                    <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Expert Team</span>
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mt-2 mb-4">Meet Our Specialists</h2>
                    <p class="text-xl text-gray-600">World-class fertility experts dedicated to your care</p>
                </div>
                <a href="#" class="hidden md:flex items-center px-6 py-3 border-2 border-[#a53692] text-[#a53692] rounded-full font-medium hover:bg-[#a53692] hover:text-white transition-all duration-300">
                    View All Doctors 
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                @if($doctors->count() > 0)
                    @foreach($doctors as $doctor)
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                        <div class="h-64 bg-gray-200 flex items-center justify-center">
                            <div class="w-32 h-32 bg-gray-300 rounded-full flex items-center justify-center">
                                <svg class="w-16 h-16 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm text-gray-500">15+ Years</span>
                                <div class="flex items-center">
                                    <span class="text-yellow-400">★</span>
                                    <span class="text-sm text-gray-600 ml-1">4.9 (195)</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $doctor->name }}</h3>
                            <p class="text-[#a53692] font-medium mb-2">{{ $doctor->department->name ?? 'Fertility Specialist' }}</p>
                            <p class="text-gray-600 text-sm mb-4">{{ $doctor->specialization ?? 'IVF & Reproductive Endocrinology' }}</p>
                            
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs">IVF</span>
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs">ICSI</span>
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs">Egg Freezing</span>
                            </div>
                            
                            <div class="flex gap-2">
                                <button class="flex-1 bg-purple-600 text-white py-2 px-4 rounded-md hover:bg-purple-700 text-sm font-medium">
                                    Book Now
                                </button>
                                <button class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 text-sm">
                                    View Profile
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <!-- Default doctors if none in database -->
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                        <div class="h-64 bg-gray-200 flex items-center justify-center">
                            <div class="w-32 h-32 bg-gray-300 rounded-full flex items-center justify-center">
                                <svg class="w-16 h-16 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm text-gray-500">15+ Years</span>
                                <div class="flex items-center">
                                    <span class="text-yellow-400">★</span>
                                    <span class="text-sm text-gray-600 ml-1">4.9 (195)</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Priya Sharma</h3>
                            <p class="text-[#a53692] font-medium mb-2">Senior Fertility Specialist</p>
                            <p class="text-gray-600 text-sm mb-4">IVF & Reproductive Endocrinology</p>
                            
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs">IVF</span>
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs">ICSI</span>
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs">Egg Freezing</span>
                            </div>
                            
                            <div class="flex gap-2">
                                <button class="flex-1 bg-purple-600 text-white py-2 px-4 rounded-md hover:bg-purple-700 text-sm font-medium">
                                    Book Now
                                </button>
                                <button class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 text-sm">
                                    View Profile
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                        <div class="h-64 bg-gray-200 flex items-center justify-center">
                            <div class="w-32 h-32 bg-gray-300 rounded-full flex items-center justify-center">
                                <svg class="w-16 h-16 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm text-gray-500">12+ Years</span>
                                <div class="flex items-center">
                                    <span class="text-yellow-400">★</span>
                                    <span class="text-sm text-gray-600 ml-1">4.8 (280)</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Rajesh Kumar</h3>
                            <p class="text-purple-600 font-medium mb-2">Reproductive Endocrinologist</p>
                            <p class="text-gray-600 text-sm mb-4">Male Infertility & Andrology</p>
                            
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs">Male Infertility</span>
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs">TESA/PESA</span>
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs">Varicocele Surgery</span>
                            </div>
                            
                            <div class="flex gap-2">
                                <button class="flex-1 bg-purple-600 text-white py-2 px-4 rounded-md hover:bg-purple-700 text-sm font-medium">
                                    Book Now
                                </button>
                                <button class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 text-sm">
                                    View Profile
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                        <div class="h-64 bg-gray-200 flex items-center justify-center">
                            <div class="w-32 h-32 bg-gray-300 rounded-full flex items-center justify-center">
                                <svg class="w-16 h-16 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm text-gray-500">18+ Years</span>
                                <div class="flex items-center">
                                    <span class="text-yellow-400">★</span>
                                    <span class="text-sm text-gray-600 ml-1">4.9 (160)</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Anjali Patel</h3>
                            <p class="text-purple-600 font-medium mb-2">Clinical Embryologist</p>
                            <p class="text-gray-600 text-sm mb-4">Embryology & Laboratory Sciences</p>
                            
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs">IVF Laboratory</span>
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs">Embryo Culture</span>
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs">Genetic Testing</span>
                            </div>
                            
                            <div class="flex gap-2">
                                <button class="flex-1 bg-purple-600 text-white py-2 px-4 rounded-md hover:bg-purple-700 text-sm font-medium">
                                    Book Now
                                </button>
                                <button class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 text-sm">
                                    View Profile
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
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
                <path fill="rgba(255,255,255,0.1)" fill-opacity="1" d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,85.3C672,75,768,85,864,122.7C960,160,1056,224,1152,218.7C1248,213,1344,139,1392,101.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Content Side -->
                <div class="text-center lg:text-left">
                    <div class="inline-block mb-3">
                        <span class="bg-white/20 text-white px-4 py-1 rounded-full text-sm font-semibold uppercase tracking-wider">Limited Time Offer</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">Begin Your Parenthood Journey Today</h2>
                    <p class="text-xl text-purple-100 mb-8 leading-relaxed">
                        Schedule a consultation with our fertility experts and receive a comprehensive fertility assessment worth ₹15,000 completely free. Take the first confident step towards building your family.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 lg:justify-start justify-center mb-8">
                        <a href="#" class="bg-white text-[#a53692] px-8 py-4 rounded-lg hover:bg-purple-50 font-medium text-lg inline-flex items-center justify-center transition-all transform hover:-translate-y-1">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Book Free Consultation
                        </a>
                        <a href="tel:+919876543210" class="border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-[#a53692] font-medium text-lg inline-flex items-center justify-center transition-all">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Call +91 9876 543210
                        </a>
                    </div>
                    
                    <!-- Trust Indicators -->
                    <div class="flex flex-wrap justify-center lg:justify-start gap-6 items-center">
                        <div class="flex items-center">
                            <div class="bg-white/10 p-2 rounded-full">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-white ml-2 text-sm">Confidential Process</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-white/10 p-2 rounded-full">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                                </svg>
                            </div>
                            <span class="text-white ml-2 text-sm">5000+ Happy Families</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-white/10 p-2 rounded-full">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
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
                        <form class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                                <input type="text" id="name" name="name" placeholder="Enter your full name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            </div>
                            <div>
                                <label for="service" class="block text-sm font-medium text-gray-700 mb-1">Service Interested In</label>
                                <select id="service" name="service" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option value="">Select a service</option>
                                    <option value="ivf">IVF Treatment</option>
                                    <option value="male-infertility">Male Infertility Treatment</option>
                                    <option value="egg-freezing">Egg Freezing</option>
                                    <option value="general">General Consultation</option>
                                </select>
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Any Specific Questions</label>
                                <textarea id="message" name="message" rows="3" placeholder="Let us know any specific concerns or questions" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent"></textarea>
                            </div>
                            <div class="pt-2">
                                <button type="submit" class="w-full bg-[#a53692] hover:bg-[#8c2b7b] text-white font-medium py-3 px-4 rounded-lg transition-all transform hover:-translate-y-1">
                                    Request Callback
                                </button>
                                <p class="text-xs text-gray-500 mt-3 text-center">By submitting this form, you agree to our privacy policy and terms of service.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

</div>