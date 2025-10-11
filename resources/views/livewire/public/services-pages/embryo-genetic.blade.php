<div class="min-h-screen bg-gray-50">
    <!-- SEO Meta Tags -->
    @section('title', 'Embryo Genetic Testing in Patna | PGT-A & PGT-M | Umeed IVF Hospital')
    @section('description', 'Advanced embryo genetic testing (PGT) in Patna for chromosomal abnormalities and genetic disorders. Ensure healthy pregnancy with Umeed IVF\'s expert genetic screening.')
    @section('keywords', 'embryo genetic testing Patna, PGT-A, PGT-M, genetic screening, chromosomal testing, Umeed IVF Patna, preimplantation genetic testing')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-[#a53692] to-[#8c2b7b] text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Embryo Genetic Testing in Patna</h1>
                    <p class="text-xl mb-8 opacity-90 leading-relaxed">
                        Advanced PGT-A & PGT-M testing to ensure healthy embryos and maximize your chances of successful pregnancy.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('booking') }}" 
                           class="bg-white text-[#a53692] px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-300 text-center">
                            Book Genetic Consultation
                        </a>
                        <a href="tel:+919876543210" 
                           class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-[#a53692] transition-colors duration-300 text-center">
                            📞 Call for Details
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Embryo Genetic Testing" 
                         class="rounded-lg shadow-2xl">
                    <div class="absolute -bottom-6 -left-6 bg-white text-[#a53692] p-6 rounded-lg shadow-lg">
                        <div class="text-3xl font-bold">99%</div>
                        <div class="text-sm font-semibold">Accuracy Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">What is Embryo Genetic Testing?</h2>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                        Embryo Genetic Testing, also known as Preimplantation Genetic Testing (PGT), is an advanced reproductive technology 
                        that allows us to examine embryos for chromosomal abnormalities and genetic disorders before implantation.
                    </p>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                        At Umeed IVF Patna, we use state-of-the-art genetic screening technologies to identify the healthiest embryos, 
                        significantly increasing your chances of successful pregnancy and reducing the risk of genetic disorders.
                    </p>
                    
                    <div class="bg-[#f8f5f7] p-6 rounded-lg border-l-4 border-[#a53692]">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Why Choose Genetic Testing?</h3>
                        <p class="text-gray-600">
                            Genetic testing helps identify embryos with the correct number of chromosomes, reducing miscarriage rates 
                            and increasing implantation success. It's particularly beneficial for couples with recurrent pregnancy loss, 
                            advanced maternal age, or known genetic conditions.
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-gradient-to-br from-[#a53692] to-[#8c2b7b] text-white p-6 rounded-lg text-center">
                        <div class="text-3xl font-bold mb-2">70%</div>
                        <div class="text-sm">Higher Success Rate</div>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg text-center">
                        <div class="text-3xl font-bold text-[#a53692] mb-2">50%</div>
                        <div class="text-sm text-gray-600">Reduced Miscarriage Risk</div>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg text-center">
                        <div class="text-3xl font-bold text-[#a53692] mb-2">99%</div>
                        <div class="text-sm text-gray-600">Detection Accuracy</div>
                    </div>
                    <div class="bg-gradient-to-br from-[#8c2b7b] to-[#a53692] text-white p-6 rounded-lg text-center">
                        <div class="text-3xl font-bold mb-2">24-48h</div>
                        <div class="text-sm">Results Time</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <livewire:components.book-appointment-button>

    <!-- Types of Genetic Testing -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Types of Genetic Testing We Offer</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- PGT-A -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="h-2 bg-[#a53692]"></div>
                    <div class="p-6">
                        <div class="w-12 h-12 bg-[#a53692] rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">PGT-A</h3>
                        <p class="text-gray-600 mb-4">
                            Preimplantation Genetic Testing for Aneuploidy - Screens for chromosomal abnormalities and ensures embryos have the correct number of chromosomes.
                        </p>
                        <ul class="space-y-2 text-gray-600 text-sm">
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-[#a53692] rounded-full mr-3"></div>
                                Detects extra or missing chromosomes
                            </li>
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-[#a53692] rounded-full mr-3"></div>
                                Reduces miscarriage risk
                            </li>
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-[#a53692] rounded-full mr-3"></div>
                                Increases implantation rates
                            </li>
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-[#a53692] rounded-full mr-3"></div>
                                Ideal for advanced maternal age
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- PGT-M -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform scale-105">
                    <div class="h-2 bg-[#8c2b7b]"></div>
                    <div class="p-6">
                        <div class="w-12 h-12 bg-[#8c2b7b] rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">PGT-M</h3>
                        <p class="text-gray-600 mb-4">
                            Preimplantation Genetic Testing for Monogenic Disorders - Tests for specific inherited genetic conditions like cystic fibrosis, sickle cell anemia, etc.
                        </p>
                        <ul class="space-y-2 text-gray-600 text-sm">
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-[#8c2b7b] rounded-full mr-3"></div>
                                Screens for specific genetic diseases
                            </li>
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-[#8c2b7b] rounded-full mr-3"></div>
                                Prevents inheritance of genetic disorders
                            </li>
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-[#8c2b7b] rounded-full mr-3"></div>
                                Family history of genetic conditions
                            </li>
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-[#8c2b7b] rounded-full mr-3"></div>
                                Customized genetic probes
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- PGT-SR -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="h-2 bg-[#a53692]"></div>
                    <div class="p-6">
                        <div class="w-12 h-12 bg-[#a53692] rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">PGT-SR</h3>
                        <p class="text-gray-600 mb-4">
                            Preimplantation Genetic Testing for Structural Rearrangements - For couples with chromosomal rearrangements like translocations.
                        </p>
                        <ul class="space-y-2 text-gray-600 text-sm">
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-[#a53692] rounded-full mr-3"></div>
                                Detects chromosomal rearrangements
                            </li>
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-[#a53692] rounded-full mr-3"></div>
                                For balanced translocation carriers
                            </li>
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-[#a53692] rounded-full mr-3"></div>
                                Reduces abnormal pregnancy risk
                            </li>
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-[#a53692] rounded-full mr-3"></div>
                                Prevents inherited structural issues
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- The Process Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">The Genetic Testing Process</h2>
            
            <div class="grid md:grid-cols-5 gap-6 mb-12">
                <!-- Step 1 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#a53692] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4">1</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">IVF Cycle</h3>
                    <p class="text-gray-600 text-xs">Egg retrieval and fertilization</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#a53692] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4">2</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Embryo Culture</h3>
                    <p class="text-gray-600 text-xs">5-6 days development to blastocyst</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#a53692] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4">3</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Biopsy</h3>
                    <p class="text-gray-600 text-xs">Safe removal of few cells</p>
                </div>

                <!-- Step 4 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#a53692] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4">4</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Genetic Analysis</h3>
                    <p class="text-gray-600 text-xs">Advanced laboratory testing</p>
                </div>

                <!-- Step 5 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#a53692] text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4">5</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Embryo Transfer</h3>
                    <p class="text-gray-600 text-xs">Transfer of healthy embryos</p>
                </div>
            </div>

            <!-- Detailed Process -->
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-gray-50 p-8 rounded-lg">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Embryo Biopsy Process</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#a53692] rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <span class="text-white font-semibold">1</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Day 5-6 Blastocyst Development</h4>
                                <p class="text-gray-600 text-sm">Embryos are cultured until they reach blastocyst stage with 100-150 cells</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#a53692] rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <span class="text-white font-semibold">2</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Trophectoderm Biopsy</h4>
                                <p class="text-gray-600 text-sm">5-10 cells are carefully removed from the outer layer that becomes placenta</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#a53692] rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <span class="text-white font-semibold">3</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Laser-Assisted Technique</h4>
                                <p class="text-gray-600 text-sm">Precise laser technology ensures minimal impact on embryo development</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-8 rounded-lg">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Genetic Analysis</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#8c2b7b] rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <span class="text-white font-semibold">4</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Next-Generation Sequencing (NGS)</h4>
                                <p class="text-gray-600 text-sm">Most advanced technology for comprehensive chromosomal screening</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#8c2b7b] rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <span class="text-white font-semibold">5</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Rapid Results</h4>
                                <p class="text-gray-600 text-sm">Comprehensive results within 24-48 hours for timely decision making</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#8c2b7b] rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <span class="text-white font-semibold">6</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Expert Interpretation</h4>
                                <p class="text-gray-600 text-sm">Board-certified genetic counselors review and explain all results</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Who Should Consider Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Who Should Consider Embryo Genetic Testing?</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="w-12 h-12 bg-[#a53692] rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Advanced Maternal Age</h3>
                    <p class="text-gray-600 text-sm">Women aged 35+ with increased risk of chromosomal abnormalities</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="w-12 h-12 bg-[#8c2b7b] rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Recurrent Pregnancy Loss</h3>
                    <p class="text-gray-600 text-sm">Couples with 2 or more miscarriages</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="w-12 h-12 bg-[#a53692] rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Genetic Carriers</h3>
                    <p class="text-gray-600 text-sm">Known carriers of genetic disorders or chromosomal rearrangements</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="w-12 h-12 bg-[#8c2b7b] rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Failed IVF Cycles</h3>
                    <p class="text-gray-600 text-sm">Previous unsuccessful IVF attempts</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Benefits of Embryo Genetic Testing</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Higher Success Rates</h3>
                    <p class="text-gray-600">Up to 70% increase in pregnancy rates by transferring genetically normal embryos</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Reduced Miscarriage Risk</h3>
                    <p class="text-gray-600">50% reduction in miscarriage risk by avoiding chromosomally abnormal embryos</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Single Embryo Transfer</h3>
                    <p class="text-gray-600">Confidence in single embryo transfer, reducing multiple pregnancy risks</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Genetic Disorder Prevention</h3>
                    <p class="text-gray-600">Prevent inheritance of serious genetic diseases and chromosomal disorders</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Faster Time to Pregnancy</h3>
                    <p class="text-gray-600">Reduce time and emotional toll of multiple failed cycles</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Peace of Mind</h3>
                    <p class="text-gray-600">Confidence knowing you're transferring the healthiest possible embryos</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cost Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Genetic Testing Cost in Patna</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-[#a53692] text-white p-6 text-center">
                        <h3 class="text-xl font-bold">PGT-A Testing</h3>
                        <div class="text-3xl font-bold mt-2">₹25,000*</div>
                        <div class="text-sm opacity-90 mt-1">per embryo</div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Chromosomal screening
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Aneuploidy detection
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                24-48 hour results
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden border-2 border-[#a53692] transform scale-105">
                    <div class="bg-[#8c2b7b] text-white p-6 text-center">
                        <h3 class="text-xl font-bold">PGT-M Testing</h3>
                        <div class="text-3xl font-bold mt-2">₹50,000*</div>
                        <div class="text-sm opacity-90 mt-1">probe development + testing</div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-[#8c2b7b] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Custom genetic probe
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-[#8c2b7b] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Single gene disorder testing
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-[#8c2b7b] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Family genetic counseling
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-[#a53692] text-white p-6 text-center">
                        <h3 class="text-xl font-bold">Comprehensive Package</h3>
                        <div class="text-3xl font-bold mt-2">₹1,50,000*</div>
                        <div class="text-sm opacity-90 mt-1">complete cycle</div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                IVF Cycle + PGT-A
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Up to 8 embryos tested
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Genetic counseling included
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <p class="text-gray-600 text-sm">*Prices may vary based on specific requirements and number of embryos</p>
                <p class="text-gray-600 text-sm">EMI options and insurance consultations available</p>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-16 bg-gradient-to-r from-[#a53692] to-[#8c2b7b] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">Ensure a Healthy Pregnancy with Genetic Testing</h2>
            <p class="text-xl mb-8 opacity-90 max-w-3xl mx-auto">
                Take the next step towards a healthy pregnancy with our advanced embryo genetic testing services at Umeed IVF Patna.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a wire:navigate href="{{ route('booking') }}" 
                   class="bg-white text-[#a53692] px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-300">
                    Book Genetic Consultation
                </a>
                <a href="tel:+919876543210" 
                   class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-[#a53692] transition-colors duration-300">
                    📞 +91 98765 43210
                </a>
            </div>
        </div>
    </section>
</div>