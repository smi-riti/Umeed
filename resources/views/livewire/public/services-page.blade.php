<div>
    @section('title', 'Our Services - Umeed IVF Hospital')
    @section('description', 'Explore our comprehensive range of fertility treatments and services including IVF, ICSI, egg freezing, male infertility treatments, and more.')
    @section('keywords', 'IVF treatment, egg freezing, fertility preservation, male infertility, surrogacy, genetic testing, fertility consultation')

    <!-- Hero Section -->
    <section class="bg-[#f9f0f7] pt-24 pb-16 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Our Fertility Services</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Comprehensive fertility treatments and services tailored to your unique needs, using the latest advancements in reproductive medicine.
                </p>
            </div>
        </div>
    </section>
        <livewire:components.book-appointment-button>


    <!-- Main Services Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Comprehensive Solutions</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">Our Core Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We offer a wide range of advanced fertility treatments to address diverse reproductive challenges
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- IVF Treatment -->
                <div class="bg-white p-8 rounded-lg border border-gray-100 hover:border-[#a53692] transition-colors">
                    <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">In Vitro Fertilization (IVF)</h3>
                    <p class="text-gray-600 mb-6">Our state-of-the-art IVF treatment combines eggs and sperm in a laboratory setting to create embryos that are then transferred to the uterus.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-[#a53692] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Advanced embryo culture techniques</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-[#a53692] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Personalized stimulation protocols</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-[#a53692] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Blastocyst transfer options</span>
                        </li>
                    </ul>
                    <a href="{{ route('booking') }}" class="inline-flex items-center text-[#a53692] font-medium">
                        Learn More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                
                <!-- ICSI Treatment -->
                <div class="bg-white p-8 rounded-lg border border-gray-100 hover:border-[#a53692] transition-colors">
                    <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Intracytoplasmic Sperm Injection (ICSI)</h3>
                    <p class="text-gray-600 mb-6">A specialized form of IVF where a single sperm is directly injected into an egg, ideal for male factor infertility cases.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-[#a53692] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Expert embryology team</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-[#a53692] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Precision micromanipulation</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-[#a53692] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">High success rates for male infertility</span>
                        </li>
                    </ul>
                    <a href="{{ route('booking') }}" class="inline-flex items-center text-[#a53692] font-medium">
                        Learn More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                
                <!-- Egg Freezing -->
                <div class="bg-white p-8 rounded-lg border border-gray-100 hover:border-[#a53692] transition-colors">
                    <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a8 8 0 00-8 8c0 1.892.402 3.13 1.5 4.5 1.016 1.27 2.071 2.6 3.81 5.064a.5.5 0 00.868 0c1.738-2.964 3.156-4.536 4.11-5.5 2.124-2.124 2.12-5.664-1-8.786-1.12-1.12-3.242-1.414-5-1.07l-.288.036a2.645 2.645 0 00-1.736 4.496c.501.5 1.5 1 2.518.369A2.5 2.5 0 1110 11.217"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Egg Freezing</h3>
                    <p class="text-gray-600 mb-6">Preserve your fertility for the future with our advanced egg freezing technology, giving you reproductive options when the time is right.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-[#a53692] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Vitrification technology</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-[#a53692] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Long-term storage options</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-[#a53692] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Medical and social freezing programs</span>
                        </li>
                    </ul>
                    <a href="{{ route('booking') }}" class="inline-flex items-center text-[#a53692] font-medium">
                        Learn More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Services Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Complete Care</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">Specialized Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Additional treatments and services to complement your fertility journey
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Male Infertility -->
                <div class="bg-white p-8 rounded-lg flex">
                    <div class="mr-6">
                        <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Male Infertility Treatments</h3>
                        <p class="text-gray-600 mb-4">Comprehensive diagnosis and treatment of male fertility issues, including sperm extraction techniques, hormonal treatments, and surgical solutions.</p>
                        <a href="{{ route('booking') }}" class="inline-flex items-center text-[#a53692] font-medium">
                            Learn More
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Genetic Testing -->
                <div class="bg-white p-8 rounded-lg flex">
                    <div class="mr-6">
                        <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13.6,2.3C12.2,0.9,9.6,0.9,8.2,2.3L6.9,3.6l1.4,1.4l1.3-1.3c0.8-0.8,2.2-0.8,3.1,0c0.8,0.8,0.8,2.2,0,3.1l-1.3,1.3l1.4,1.4l1.3-1.3C15.5,7,15.5,4.4,13.6,2.3z M10.1,7.3L7.3,10.1L3.6,6.4c-0.8-0.8-0.8-2.2,0-3.1c0.8-0.8,2.2-0.8,3.1,0L10.1,7.3z M16.4,13.6c0.8,0.8,0.8,2.2,0,3.1c-0.8,0.8-2.2,0.8-3.1,0l-3.3-3.3l2.8-2.8L16.4,13.6z M6.4,16.4L3.3,13.3c-1.9-1.9-1.9-5.1,0-7l0.9-0.9l1.4,1.4l-0.9,0.9c-1.1,1.1-1.1,3,0,4.2l3.1,3.1c0.6,0.6,1.3,0.8,2.1,0.8c0.8,0,1.5-0.3,2.1-0.8l0.9-0.9l1.4,1.4l-0.9,0.9C10.2,18.5,7.7,18.5,6.4,16.4z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Genetic Testing (PGT)</h3>
                        <p class="text-gray-600 mb-4">Preimplantation Genetic Testing to screen embryos for chromosomal abnormalities and genetic conditions before transfer, increasing success rates and healthy pregnancies.</p>
                        <a href="{{ route('booking') }}" class="inline-flex items-center text-[#a53692] font-medium">
                            Learn More
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Surrogacy -->
                <div class="bg-white p-8 rounded-lg flex">
                    <div class="mr-6">
                        <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 3.636a1 1 0 010 1.414 7 7 0 000 9.9 1 1 0 11-1.414 1.414 9 9 0 010-12.728 1 1 0 011.414 0zm9.9 0a1 1 0 011.414 0 9 9 0 010 12.728 1 1 0 11-1.414-1.414 7 7 0 000-9.9 1 1 0 010-1.414zM7.879 6.464a1 1 0 010 1.414 3 3 0 000 4.243 1 1 0 11-1.414 1.414 5 5 0 010-7.07 1 1 0 011.414 0zm4.242 0a1 1 0 011.414 0 5 5 0 010 7.072 1 1 0 01-1.414-1.415 3 3 0 000-4.242 1 1 0 010-1.415zM10 9a1 1 0 011 1v.01a1 1 0 11-2 0V10a1 1 0 011-1z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Surrogacy Program</h3>
                        <p class="text-gray-600 mb-4">Our ethical surrogacy program provides comprehensive support for intended parents and surrogates, including legal guidance, medical care, and emotional counseling.</p>
                        <a href="{{ route('booking') }}" class="inline-flex items-center text-[#a53692] font-medium">
                            Learn More
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Fertility Preservation -->
                <div class="bg-white p-8 rounded-lg flex">
                    <div class="mr-6">
                        <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Fertility Preservation for Cancer Patients</h3>
                        <p class="text-gray-600 mb-4">Specialized rapid-response fertility preservation options for patients facing cancer treatment, including egg freezing, sperm banking, and embryo cryopreservation.</p>
                        <a href="{{ route('booking') }}" class="inline-flex items-center text-[#a53692] font-medium">
                            Learn More
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Treatment Process -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Your Journey</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">The Treatment Process</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Understanding what to expect during your fertility treatment journey
                </p>
            </div>
            
            <div class="relative">
                <!-- Timeline line -->
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-gray-200"></div>
                
                <div class="space-y-12">
                    <!-- Step 1 -->
                    <div class="relative">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class="md:w-1/2 md:pr-12 mb-6 md:mb-0 md:text-right">
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Initial Consultation</h3>
                                <p class="text-gray-600">Meet with one of our specialists to discuss your medical history, fertility goals, and treatment options. We'll perform preliminary tests and create a personalized plan.</p>
                            </div>
                            
                            <div class="flex items-center justify-center z-10 w-12 h-12 bg-[#a53692] rounded-full text-white font-bold">1</div>
                            
                            <div class="md:w-1/2 md:pl-12">
                                <img src="{{ asset('images/consultation.jpg') }}" alt="Initial Consultation" class="rounded-lg w-full" onerror="this.src='https://via.placeholder.com/600x400?text=Initial+Consultation';this.onerror='';">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="relative">
                        <div class="flex flex-col md:flex-row-reverse items-center">
                            <div class="md:w-1/2 md:pl-12 mb-6 md:mb-0 md:text-left">
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Diagnostic Testing</h3>
                                <p class="text-gray-600">Comprehensive fertility testing to determine the exact cause of infertility, including hormone assessments, ultrasounds, and specialized procedures as needed.</p>
                            </div>
                            
                            <div class="flex items-center justify-center z-10 w-12 h-12 bg-[#a53692] rounded-full text-white font-bold">2</div>
                            
                            <div class="md:w-1/2 md:pr-12">
                                <img src="{{ asset('images/testing.jpg') }}" alt="Diagnostic Testing" class="rounded-lg w-full" onerror="this.src='https://via.placeholder.com/600x400?text=Diagnostic+Testing';this.onerror='';">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="relative">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class="md:w-1/2 md:pr-12 mb-6 md:mb-0 md:text-right">
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Treatment Plan</h3>
                                <p class="text-gray-600">Based on your test results, we'll develop a customized treatment protocol specifically designed for your unique situation, with clear timelines and expectations.</p>
                            </div>
                            
                            <div class="flex items-center justify-center z-10 w-12 h-12 bg-[#a53692] rounded-full text-white font-bold">3</div>
                            
                            <div class="md:w-1/2 md:pl-12">
                                <img src="{{ asset('images/treatment-plan.jpg') }}" alt="Treatment Plan" class="rounded-lg w-full" onerror="this.src='https://via.placeholder.com/600x400?text=Treatment+Plan';this.onerror='';">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="relative">
                        <div class="flex flex-col md:flex-row-reverse items-center">
                            <div class="md:w-1/2 md:pl-12 mb-6 md:mb-0 md:text-left">
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Treatment Cycle</h3>
                                <p class="text-gray-600">Undergo your personalized treatment with our expert team providing support at every step, from medication management to procedures and follow-up care.</p>
                            </div>
                            
                            <div class="flex items-center justify-center z-10 w-12 h-12 bg-[#a53692] rounded-full text-white font-bold">4</div>
                            
                            <div class="md:w-1/2 md:pr-12">
                                <img src="{{ asset('images/treatment.jpg') }}" alt="Treatment Cycle" class="rounded-lg w-full" onerror="this.src='https://via.placeholder.com/600x400?text=Treatment+Cycle';this.onerror='';">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 5 -->
                    <div class="relative">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class="md:w-1/2 md:pr-12 mb-6 md:mb-0 md:text-right">
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Pregnancy Monitoring</h3>
                                <p class="text-gray-600">Once pregnancy is achieved, we provide close monitoring during the critical early stages, ensuring everything progresses normally before transitioning to regular obstetrical care.</p>
                            </div>
                            
                            <div class="flex items-center justify-center z-10 w-12 h-12 bg-[#a53692] rounded-full text-white font-bold">5</div>
                            
                            <div class="md:w-1/2 md:pl-12">
                                <img src="{{ asset('images/monitoring.jpg') }}" alt="Pregnancy Monitoring" class="rounded-lg w-full" onerror="this.src='https://via.placeholder.com/600x400?text=Pregnancy+Monitoring';this.onerror='';">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Rates -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Proven Results</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">Our Success Rates</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We're proud of our consistently high success rates across all fertility treatments
                </p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-6 mb-8">
                <!-- IVF Success -->
                <div class="bg-white p-6 rounded-lg text-center">
                    <div class="text-[#a53692] text-5xl font-bold mb-2">62%</div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">IVF Success Rate</h3>
                    <p class="text-gray-600 text-sm">For women under 35</p>
                </div>
                
                <!-- ICSI Success -->
                <div class="bg-white p-6 rounded-lg text-center">
                    <div class="text-[#a53692] text-5xl font-bold mb-2">58%</div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">ICSI Success Rate</h3>
                    <p class="text-gray-600 text-sm">For severe male infertility</p>
                </div>
                
                <!-- Egg Freezing -->
                <div class="bg-white p-6 rounded-lg text-center">
                    <div class="text-[#a53692] text-5xl font-bold mb-2">90%</div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Egg Survival Rate</h3>
                    <p class="text-gray-600 text-sm">After thawing process</p>
                </div>
                
                <!-- FET Success -->
                <div class="bg-white p-6 rounded-lg text-center">
                    <div class="text-[#a53692] text-5xl font-bold mb-2">51%</div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">FET Success Rate</h3>
                    <p class="text-gray-600 text-sm">Frozen Embryo Transfers</p>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-lg">
                <p class="text-gray-600 text-center text-sm">
                    Note: Success rates vary based on individual circumstances including age, diagnosis, and medical history.
                    These statistics represent our clinic's average success rates for the past year.
                </p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-[#a53692]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div class="mb-6 md:mb-0 md:w-2/3">
                    <h2 class="text-3xl font-bold text-white mb-4">Ready to Begin Your Treatment?</h2>
                    <p class="text-lg text-white opacity-90">Schedule a consultation with our fertility specialists to discuss which treatment is right for you.</p>
                </div>
                <div>
                    <a href="{{ route('booking') }}" class="inline-block px-6 py-3 bg-white text-[#a53692] font-medium rounded-md hover:bg-gray-100 transition-colors">
                        Book a Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>