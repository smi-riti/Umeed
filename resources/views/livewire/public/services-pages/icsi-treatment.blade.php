<div class="min-h-screen bg-gray-50">
    <!-- SEO Meta Tags -->
    @section('title', 'ICSI Treatment in Patna | Intracytoplasmic Sperm Injection | Umeed IVF')
    @section('description', 'Advanced ICSI treatment in Patna for male infertility. Umeed IVF offers high-success ICSI with expert embryologists and state-of-the-art technology.')
    @section('keywords', 'ICSI treatment Patna, intracytoplasmic sperm injection, male infertility treatment, ICSI IVF, Umeed IVF Patna')

   

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-[#a53692] to-[#8c2b7b] text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">ICSI Treatment in Patna</h1>
                    <p class="text-xl mb-8 opacity-90 leading-relaxed">
                        Advanced Intracytoplasmic Sperm Injection for male infertility cases. 
                        High success rates with precision technology at Umeed IVF Patna.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('booking') }}" 
                           class="bg-white text-[#a53692] px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-300 text-center">
                            Book Free Consultation
                        </a>
                        <a href="tel:+919876543210" 
                           class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-[#a53692] transition-colors duration-300 text-center">
                            📞 +91 98765 43210
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="ICSI Treatment" 
                         class="rounded-lg shadow-2xl">
                    <div class="absolute -bottom-6 -left-6 bg-white text-[#a53692] p-6 rounded-lg shadow-lg">
                        <div class="text-3xl font-bold">75%+</div>
                        <div class="text-sm font-semibold">Success Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="text-3xl font-bold text-[#a53692] mb-2">70-80%</div>
                    <div class="text-gray-600">Fertilization Rate</div>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="text-3xl font-bold text-[#a53692] mb-2">50%+</div>
                    <div class="text-gray-600">Higher than Conventional IVF</div>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="text-3xl font-bold text-[#a53692] mb-2">1000+</div>
                    <div class="text-gray-600">Successful ICSI Cycles</div>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="text-3xl font-bold text-[#a53692] mb-2">24/7</div>
                    <div class="text-gray-600">Embryology Lab</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">What is ICSI Treatment?</h2>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                        Intracytoplasmic Sperm Injection (ICSI) is an advanced assisted reproductive technology 
                        where a single sperm is directly injected into an egg to achieve fertilization. This 
                        revolutionary technique has transformed treatment for severe male factor infertility.
                    </p>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                        At Umeed IVF Patna, our expert embryologists perform ICSI with precision and care, 
                        offering hope to couples facing male infertility challenges.
                    </p>
                    
                    <div class="bg-[#f8f5f7] p-6 rounded-lg border-l-4 border-[#a53692]">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Why Choose ICSI?</h3>
                        <p class="text-gray-600">
                            ICSI is particularly beneficial when sperm quality or quantity is a concern. 
                            It requires only one healthy sperm per egg, making it ideal for cases of low 
                            sperm count, poor motility, or abnormal morphology.
                        </p>
                    </div>
                </div>
                <div class="space-y-6">
                    <div class="bg-gradient-to-br from-[#a53692] to-[#8c2b7b] text-white p-6 rounded-lg">
                        <h3 class="text-xl font-bold mb-3">ICSI vs Conventional IVF</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span>Fertilization Method</span>
                                <div class="flex gap-4">
                                    <span class="text-sm bg-white/20 px-2 py-1 rounded">IVF: Natural</span>
                                    <span class="text-sm bg-white/30 px-2 py-1 rounded">ICSI: Direct Injection</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Sperm Required</span>
                                <div class="flex gap-4">
                                    <span class="text-sm bg-white/20 px-2 py-1 rounded">IVF: 50,000+</span>
                                    <span class="text-sm bg-white/30 px-2 py-1 rounded">ICSI: 1 per egg</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Success Rate</span>
                                <div class="flex gap-4">
                                    <span class="text-sm bg-white/20 px-2 py-1 rounded">IVF: 40-50%</span>
                                    <span class="text-sm bg-white/30 px-2 py-1 rounded">ICSI: 70-80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ICSI Process Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">The ICSI Treatment Process</h2>
            
            <div class="grid md:grid-cols-5 gap-6 mb-12">
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#a53692] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4">1</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Ovarian Stimulation</h3>
                    <p class="text-gray-600 text-xs">Medications to produce multiple eggs</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-[#a53692] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4">2</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Egg Retrieval</h3>
                    <p class="text-gray-600 text-xs">Minimal discomfort procedure</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-[#a53692] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4">3</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Sperm Collection</h3>
                    <p class="text-gray-600 text-xs">Fresh or frozen sperm sample</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-[#a53692] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4">4</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">ICSI Procedure</h3>
                    <p class="text-gray-600 text-xs">Single sperm injection into each egg</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-[#a53692] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4">5</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Embryo Transfer</h3>
                    <p class="text-gray-600 text-xs">Transfer of healthy embryos</p>
                </div>
            </div>

            <!-- Detailed ICSI Procedure -->
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">The ICSI Laboratory Process</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#a53692] rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <span class="text-white font-semibold">1</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Egg Preparation</h4>
                                <p class="text-gray-600 text-sm">Mature eggs are identified and prepared for injection under high-powered microscope</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#a53692] rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <span class="text-white font-semibold">2</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Sperm Selection</h4>
                                <p class="text-gray-600 text-sm">Healthiest sperm selected based on morphology and motility</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#a53692] rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <span class="text-white font-semibold">3</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Microinjection</h4>
                                <p class="text-gray-600 text-sm">Single sperm injected directly into egg cytoplasm using fine glass needle</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Post-ICSI Development</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#8c2b7b] rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <span class="text-white font-semibold">4</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Fertilization Check</h4>
                                <p class="text-gray-600 text-sm">16-18 hours post-injection to confirm normal fertilization</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#8c2b7b] rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <span class="text-white font-semibold">5</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Embryo Culture</h4>
                                <p class="text-gray-600 text-sm">3-5 days monitoring embryo development in specialized incubators</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#8c2b7b] rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <span class="text-white font-semibold">6</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Embryo Transfer</h4>
                                <p class="text-gray-600 text-sm">Best quality embryos selected for transfer to uterus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Who Needs ICSI Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Who Should Consider ICSI Treatment?</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="w-12 h-12 bg-[#a53692] rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Severe Male Infertility</h3>
                    <ul class="text-gray-600 text-sm space-y-2">
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-[#a53692] rounded-full mr-3"></div>
                            Low sperm count
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-[#a53692] rounded-full mr-3"></div>
                            Poor sperm motility
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-[#a53692] rounded-full mr-3"></div>
                            Abnormal sperm morphology
                        </li>
                    </ul>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="w-12 h-12 bg-[#8c2b7b] rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Previous IVF Failure</h3>
                    <ul class="text-gray-600 text-sm space-y-2">
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-[#8c2b7b] rounded-full mr-3"></div>
                            Poor fertilization in previous IVF
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-[#8c2b7b] rounded-full mr-3"></div>
                            Unexplained infertility
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-[#8c2b7b] rounded-full mr-3"></div>
                            Recurrent implantation failure
                        </li>
                    </ul>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="w-12 h-12 bg-[#a53692] rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Special Cases</h3>
                    <ul class="text-gray-600 text-sm space-y-2">
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-[#a53692] rounded-full mr-3"></div>
                            Frozen sperm samples
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-[#a53692] rounded-full mr-3"></div>
                            Surgical sperm retrieval
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-[#a53692] rounded-full mr-3"></div>
                            Genetic testing requirements
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Rates & Benefits -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">ICSI Success Rates & Benefits</h2>
            
            <div class="grid lg:grid-cols-2 gap-12">
                <div>
                    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Success Rates at Umeed IVF Patna</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Fertilization Rate</span>
                                <span class="font-bold text-[#a53692]">70-80%</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Embryo Development Rate</span>
                                <span class="font-bold text-[#a53692]">60-70%</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Clinical Pregnancy Rate</span>
                                <span class="font-bold text-[#a53692]">50-60%</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Live Birth Rate</span>
                                <span class="font-bold text-[#a53692]">45-55%</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="bg-gradient-to-br from-[#a53692] to-[#8c2b7b] text-white p-8 rounded-lg shadow-xl">
                        <h3 class="text-2xl font-bold mb-6">Benefits of ICSI at Umeed IVF</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Overcomes severe male factor infertility
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                High fertilization rates
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Can use surgically retrieved sperm
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Compatible with genetic testing
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Expert embryology team
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <!-- Final CTA Section -->
    <section class="py-16 bg-gradient-to-r from-[#a53692] to-[#8c2b7b] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">Start Your ICSI Journey Today</h2>
            <p class="text-xl mb-8 opacity-90 max-w-3xl mx-auto">
                Overcome male infertility challenges with advanced ICSI treatment at Umeed IVF Patna. 
                Our expert team is here to help you achieve your dream of parenthood.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('booking') }}" 
                   class="bg-white text-[#a53692] px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-300">
                    Book ICSI Consultation
                </a>
                <a href="tel:+919876543210" 
                   class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-[#a53692] transition-colors duration-300">
                    📞 +91 98765 43210
                </a>
            </div>
        </div>
    </section>
</div>