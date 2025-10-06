<div>
    @section('title', 'About Us - Umeed IVF Hospital')
    @section('description', 'Learn about Umeed IVF Hospital\'s mission, values, advanced fertility treatments, and our expert team dedicated to making parenthood dreams come true.')
    @section('keywords', 'about Umeed IVF, fertility hospital history, IVF clinic story, best fertility center, fertility treatment team')

    <!-- Hero Section -->
    <section class="bg-[#f9f0f7] pt-24 pb-16 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">About Umeed IVF Hospital</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    A leading fertility care center committed to helping couples realize their dreams of parenthood through advanced technology, compassionate care, and personalized treatment plans.
                </p>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Our Story</span>
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">Turning Dreams Into Reality Since 2010</h2>
                    <div class="prose prose-lg text-gray-600">
                        <p>Founded by Dr. Priya Sharma in 2010, Umeed IVF Hospital began with a simple yet profound mission: to provide hope to couples struggling with infertility.</p>
                        <p class="mt-4">What started as a small clinic has now grown into one of the country's most respected fertility treatment centers, having helped over 5,000 couples achieve their dream of parenthood.</p>
                        <p class="mt-4">Our journey has been defined by continuous innovation, personalized care, and an unwavering commitment to excellence. We combine cutting-edge reproductive technology with compassionate support to provide the highest standard of fertility care.</p>
                    </div>
                </div>
                <div class="relative">
                    <div class="w-full h-96 bg-gray-200 rounded-lg overflow-hidden">
                        <img src="{{ asset("umeed.png") }}" alt="Umeed IVF Hospital" class="w-full h-full object-cover" onerror="this.src='https://via.placeholder.com/600x400?text=Umeed+Hospital+Building';this.onerror='';">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-[#a53692] rounded-lg p-6 text-white shadow-lg">
                        <div class="text-4xl font-bold">15+</div>
                        <div class="text-sm uppercase tracking-wider">Years of Excellence</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <livewire:components.book-appointment-button>
    <!-- Mission & Values -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Why Choose Us</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">Our Mission & Values</h2>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Mission -->
                <div class="bg-white p-8 rounded-lg border border-gray-100">
                    <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Our Mission</h3>
                    <p class="text-gray-600">To provide accessible, compassionate, and personalized fertility care using the latest advancements in reproductive medicine, helping couples fulfill their dream of building a family.</p>
                </div>
                
                <!-- Vision -->
                <div class="bg-white p-8 rounded-lg border border-gray-100">
                    <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Our Vision</h3>
                    <p class="text-gray-600">To be the leading fertility care provider known for innovative treatments, exceptional success rates, and holistic approach to reproductive health and family building.</p>
                </div>
                
                <!-- Values -->
                <div class="bg-white p-8 rounded-lg border border-gray-100">
                    <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Our Values</h3>
                    <p class="text-gray-600">We believe in empathy, integrity, excellence, innovation, and respect for every individual's journey. These core values guide our approach to fertility care and patient relationships.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Approach -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Our Approach</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">How We Support Your Journey</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">We understand that each fertility journey is unique, which is why we take a personalized approach to your care.</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <div class="space-y-8">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-md bg-[#a53692] text-white">
                                    <span class="text-xl font-bold">1</span>
                                </div>
                            </div>
                            <div class="ml-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Comprehensive Assessment</h3>
                                <p class="text-gray-600">We begin with a thorough evaluation to understand your unique situation, medical history, and fertility challenges.</p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-md bg-[#a53692] text-white">
                                    <span class="text-xl font-bold">2</span>
                                </div>
                            </div>
                            <div class="ml-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Personalized Treatment Plan</h3>
                                <p class="text-gray-600">Our specialists develop a customized fertility treatment plan tailored specifically to your needs and circumstances.</p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-md bg-[#a53692] text-white">
                                    <span class="text-xl font-bold">3</span>
                                </div>
                            </div>
                            <div class="ml-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Advanced Treatment</h3>
                                <p class="text-gray-600">Using cutting-edge technology and proven techniques, we implement your treatment plan with precision and care.</p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-md bg-[#a53692] text-white">
                                    <span class="text-xl font-bold">4</span>
                                </div>
                            </div>
                            <div class="ml-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Continuous Support</h3>
                                <p class="text-gray-600">Throughout your journey, our compassionate team provides emotional support, guidance, and answers to all your questions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="grid grid-cols-2 gap-6">
                    <div class="rounded-lg overflow-hidden">
                        <img src="{{ asset('images/consultation.jpg') }}" alt="Fertility Consultation" class="w-full h-full object-cover" onerror="this.src='https://via.placeholder.com/300x400?text=Consultation';this.onerror='';">
                    </div>
                    <div class="rounded-lg overflow-hidden mt-12">
                        <img src="{{ asset('images/lab-work.jpg') }}" alt="Laboratory Work" class="w-full h-full object-cover" onerror="this.src='https://via.placeholder.com/300x400?text=Lab+Work';this.onerror='';">
                    </div>
                    <div class="rounded-lg overflow-hidden">
                        <img src="{{ asset('images/doctor-patient.jpg') }}" alt="Doctor with Patient" class="w-full h-full object-cover" onerror="this.src='https://via.placeholder.com/300x400?text=Doctor-Patient';this.onerror='';">
                    </div>
                    <div class="rounded-lg overflow-hidden mt-12">
                        <img src="{{ asset('images/family.jpg') }}" alt="Happy Family" class="w-full h-full object-cover" onerror="this.src='https://via.placeholder.com/300x400?text=Happy+Family';this.onerror='';">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Leadership -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Leadership Team</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">Meet Our Leaders</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Led by world-class fertility specialists with decades of combined experience</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Founder -->
                <div class="bg-white rounded-lg overflow-hidden">
                    <div class="h-64 bg-gray-200">
                        <img src="{{ asset('images/founder.jpg') }}" alt="Dr. Priya Sharma" class="w-full h-full object-cover" onerror="this.src='https://via.placeholder.com/400x400?text=Dr.+Priya+Sharma';this.onerror='';">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Dr. Priya Sharma</h3>
                        <p class="text-[#a53692] font-medium mb-4">Founder & Chief Fertility Specialist</p>
                        <p class="text-gray-600 text-sm mb-4">With over 20 years of experience, Dr. Sharma is internationally recognized for her pioneering work in IVF treatments and reproductive endocrinology.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-[#a53692]">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-[#a53692]">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M16.98 0a6.9 6.9 0 0 1 5.08 1.98A6.94 6.94 0 0 1 24 7.02v9.96c0 2.08-.68 3.87-1.98 5.13A7.14 7.14 0 0 1 16.94 24H7.06a7.06 7.06 0 0 1-5.03-1.89A6.96 6.96 0 0 1 0 16.94V7.02C0 2.8 2.8 0 7.02 0h9.96zm.05 2.23H7.06c-1.45 0-2.7.43-3.53 1.25a4.82 4.82 0 0 0-1.3 3.54v9.92c0 1.5.43 2.7 1.3 3.58a5 5 0 0 0 3.53 1.25h9.88a5 5 0 0 0 3.53-1.25 4.73 4.73 0 0 0 1.4-3.54V7.02a5 5 0 0 0-1.3-3.49 4.82 4.82 0 0 0-3.54-1.3zM12 5.76c3.39 0 6.2 2.8 6.2 6.2a6.2 6.2 0 0 1-12.4 0 6.2 6.2 0 0 1 6.2-6.2zm0 2.22a3.99 3.99 0 0 0-3.97 3.97A3.99 3.99 0 0 0 12 15.92a3.99 3.99 0 0 0 3.97-3.97A3.99 3.99 0 0 0 12 7.98z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-[#a53692]">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.23 0H1.77C.8 0 0 .77 0 1.72v20.56C0 23.23.8 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.72V1.72C24 .77 23.2 0 22.23 0zM7.27 20.1H3.65V9.24h3.62V20.1zM5.47 7.76h-.03c-1.22 0-2-.83-2-1.87 0-1.06.8-1.87 2.05-1.87 1.24 0 2 .8 2.02 1.87 0 1.04-.78 1.87-2.05 1.87zM20.34 20.1h-3.63v-5.8c0-1.45-.52-2.45-1.83-2.45-1 0-1.6.67-1.87 1.32-.1.23-.11.55-.11.88v6.05H9.28s.05-9.82 0-10.84h3.63v1.54a3.6 3.6 0 0 1 3.26-1.8c2.39 0 4.18 1.56 4.18 4.89v6.21z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Medical Director -->
                <div class="bg-white rounded-lg overflow-hidden">
                    <div class="h-64 bg-gray-200">
                        <img src="{{ asset('images/medical-director.jpg') }}" alt="Dr. Rajesh Kumar" class="w-full h-full object-cover" onerror="this.src='https://via.placeholder.com/400x400?text=Dr.+Rajesh+Kumar';this.onerror='';">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Dr. Rajesh Kumar</h3>
                        <p class="text-[#a53692] font-medium mb-4">Medical Director</p>
                        <p class="text-gray-600 text-sm mb-4">An expert in male infertility and andrologist with 15+ years of experience leading advanced reproductive medicine programs.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-[#a53692]">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-[#a53692]">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M16.98 0a6.9 6.9 0 0 1 5.08 1.98A6.94 6.94 0 0 1 24 7.02v9.96c0 2.08-.68 3.87-1.98 5.13A7.14 7.14 0 0 1 16.94 24H7.06a7.06 7.06 0 0 1-5.03-1.89A6.96 6.96 0 0 1 0 16.94V7.02C0 2.8 2.8 0 7.02 0h9.96zm.05 2.23H7.06c-1.45 0-2.7.43-3.53 1.25a4.82 4.82 0 0 0-1.3 3.54v9.92c0 1.5.43 2.7 1.3 3.58a5 5 0 0 0 3.53 1.25h9.88a5 5 0 0 0 3.53-1.25 4.73 4.73 0 0 0 1.4-3.54V7.02a5 5 0 0 0-1.3-3.49 4.82 4.82 0 0 0-3.54-1.3zM12 5.76c3.39 0 6.2 2.8 6.2 6.2a6.2 6.2 0 0 1-12.4 0 6.2 6.2 0 0 1 6.2-6.2zm0 2.22a3.99 3.99 0 0 0-3.97 3.97A3.99 3.99 0 0 0 12 15.92a3.99 3.99 0 0 0 3.97-3.97A3.99 3.99 0 0 0 12 7.98z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-[#a53692]">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.23 0H1.77C.8 0 0 .77 0 1.72v20.56C0 23.23.8 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.72V1.72C24 .77 23.2 0 22.23 0zM7.27 20.1H3.65V9.24h3.62V20.1zM5.47 7.76h-.03c-1.22 0-2-.83-2-1.87 0-1.06.8-1.87 2.05-1.87 1.24 0 2 .8 2.02 1.87 0 1.04-.78 1.87-2.05 1.87zM20.34 20.1h-3.63v-5.8c0-1.45-.52-2.45-1.83-2.45-1 0-1.6.67-1.87 1.32-.1.23-.11.55-.11.88v6.05H9.28s.05-9.82 0-10.84h3.63v1.54a3.6 3.6 0 0 1 3.26-1.8c2.39 0 4.18 1.56 4.18 4.89v6.21z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Chief Embryologist -->
                <div class="bg-white rounded-lg overflow-hidden">
                    <div class="h-64 bg-gray-200">
                        <img src="{{ asset('images/embryologist.jpg') }}" alt="Dr. Anjali Patel" class="w-full h-full object-cover" onerror="this.src='https://via.placeholder.com/400x400?text=Dr.+Anjali+Patel';this.onerror='';">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Dr. Anjali Patel</h3>
                        <p class="text-[#a53692] font-medium mb-4">Chief Embryologist</p>
                        <p class="text-gray-600 text-sm mb-4">Dr. Patel specializes in advanced embryo culture techniques and has contributed to some of our highest IVF success rates.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-[#a53692]">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-[#a53692]">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M16.98 0a6.9 6.9 0 0 1 5.08 1.98A6.94 6.94 0 0 1 24 7.02v9.96c0 2.08-.68 3.87-1.98 5.13A7.14 7.14 0 0 1 16.94 24H7.06a7.06 7.06 0 0 1-5.03-1.89A6.96 6.96 0 0 1 0 16.94V7.02C0 2.8 2.8 0 7.02 0h9.96zm.05 2.23H7.06c-1.45 0-2.7.43-3.53 1.25a4.82 4.82 0 0 0-1.3 3.54v9.92c0 1.5.43 2.7 1.3 3.58a5 5 0 0 0 3.53 1.25h9.88a5 5 0 0 0 3.53-1.25 4.73 4.73 0 0 0 1.4-3.54V7.02a5 5 0 0 0-1.3-3.49 4.82 4.82 0 0 0-3.54-1.3zM12 5.76c3.39 0 6.2 2.8 6.2 6.2a6.2 6.2 0 0 1-12.4 0 6.2 6.2 0 0 1 6.2-6.2zm0 2.22a3.99 3.99 0 0 0-3.97 3.97A3.99 3.99 0 0 0 12 15.92a3.99 3.99 0 0 0 3.97-3.97A3.99 3.99 0 0 0 12 7.98z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-[#a53692]">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.23 0H1.77C.8 0 0 .77 0 1.72v20.56C0 23.23.8 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.72V1.72C24 .77 23.2 0 22.23 0zM7.27 20.1H3.65V9.24h3.62V20.1zM5.47 7.76h-.03c-1.22 0-2-.83-2-1.87 0-1.06.8-1.87 2.05-1.87 1.24 0 2 .8 2.02 1.87 0 1.04-.78 1.87-2.05 1.87zM20.34 20.1h-3.63v-5.8c0-1.45-.52-2.45-1.83-2.45-1 0-1.6.67-1.87 1.32-.1.23-.11.55-.11.88v6.05H9.28s.05-9.82 0-10.84h3.63v1.54a3.6 3.6 0 0 1 3.26-1.8c2.39 0 4.18 1.56 4.18 4.89v6.21z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-[#a53692]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div class="mb-6 md:mb-0 md:w-2/3">
                    <h2 class="text-3xl font-bold text-white mb-4">Begin Your Fertility Journey Today</h2>
                    <p class="text-lg text-white opacity-90">Take the first step towards parenthood with a consultation at Umeed IVF Hospital. Our team is ready to support you.</p>
                </div>
                <div>
                    <a href="{{ route('booking') }}" class="inline-block px-6 py-3 bg-white text-[#a53692] font-medium rounded-md hover:bg-gray-100 transition-colors">
                        Schedule a Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>