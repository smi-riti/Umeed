<div>
    @section('title', 'Our Doctors - Umeed IVF Hospital')
    @section('description', 'Meet our team of experienced fertility specialists, embryologists, and reproductive
        endocrinologists dedicated to helping you achieve your dream of parenthood.')
    @section('keywords', 'fertility doctors, IVF specialists, reproductive endocrinologists, embryologists, infertility
        experts, fertility care team')

        <!-- Hero Section -->
        <section class="bg-[#f9f0f7] pt-24 pb-16 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Our Experienced Doctors</h1>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Meet our team of world-class fertility specialists who combine expertise, compassion, and
                        cutting-edge techniques to provide you with the best possible care.
                    </p>
                </div>
            </div>
        </section>

        <!-- Department Filter Section -->
        <section class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Specialized Expertise</span>
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">Our Departments</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Each of our specialists focuses on specific areas of
                        fertility care to provide you with expert treatment</p>
                </div>

                <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-6 mb-12">
                    @foreach ($departments as $department)
                        <div
                            class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 hover:border-[#a53692] transition-colors text-center">
                            <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-[#a53692]" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $department->name }}</h3>
                            <p class="text-gray-600 text-sm mb-4">{{ Str::limit($department->description, 100) }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <livewire:components.book-appointment-button>


            <!-- Doctors List Section -->
            <section class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Meet Our Team</span>
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">Our Fertility Specialists</h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                            Experts dedicated to providing personalized care throughout your fertility journey
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-8">
                        @foreach ($doctors as $doctor)
                            <div class="bg-white rounded-lg overflow-hidden">
                                <div class="h-64 bg-gray-200">
                                    <img src="{{ asset('storage/' . $doctor->image) }}" alt="Dr. {{ $doctor->name }}"
                                        class="w-full h-full object-cover"
                                        onerror="this.src='https://via.placeholder.com/400x400?text=Dr.{{ urlencode($doctor->name) }}';this.onerror='';">
                                </div>
                                <div class="p-6">
                                    <span
                                        class="inline-block px-3 py-1 text-xs font-semibold text-[#a53692] bg-[#f9f0f7] rounded-full mb-3">
                                        {{ $doctor->department->name }}
                                    </span>
                                    <h3 class="text-xl font-bold text-gray-900 mb-1">Dr. {{ $doctor->name }}</h3>
                                    <p class="text-[#a53692] font-medium mb-4">{{ $doctor->specialty }}</p>
                                    <p class="text-gray-600 text-sm mb-4">{{ Str::limit($doctor->bio, 120) }}</p>

                                    <div class="flex justify-between items-center">
                                        <div class="flex space-x-3">
                                            <a href="#" class="text-gray-400 hover:text-[#a53692]">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                                                </svg>
                                            </a>
                                            <a href="#" class="text-gray-400 hover:text-[#a53692]">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M22.23 0H1.77C.8 0 0 .77 0 1.72v20.56C0 23.23.8 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.72V1.72C24 .77 23.2 0 22.23 0zM7.27 20.1H3.65V9.24h3.62V20.1zM5.47 7.76h-.03c-1.22 0-2-.83-2-1.87 0-1.06.8-1.87 2.05-1.87 1.24 0 2 .8 2.02 1.87 0 1.04-.78 1.87-2.05 1.87zM20.34 20.1h-3.63v-5.8c0-1.45-.52-2.45-1.83-2.45-1 0-1.6.67-1.87 1.32-.1.23-.11.55-.11.88v6.05H9.28s.05-9.82 0-10.84h3.63v1.54a3.6 3.6 0 0 1 3.26-1.8c2.39 0 4.18 1.56 4.18 4.89v6.21z" />
                                                </svg>
                                            </a>
                                        </div>

                                        <a href="{{ route('booking') }}"
                                            class="inline-flex items-center text-[#a53692] font-medium">
                                            Book Appointment
                                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- Testimonials Section -->
            <section class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Success Stories</span>
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">Patient Testimonials</h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                            Real stories from patients who have transformed their lives with our doctors
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Testimonial 1 -->
                        <div class="bg-gray-50 p-8 rounded-lg relative">
                            <div
                                class="absolute top-0 right-0 -mt-4 -mr-4 w-12 h-12 bg-[#a53692] rounded-full flex items-center justify-center text-white text-3xl">
                                "
                            </div>
                            <p class="text-gray-600 mb-6 italic">
                                "Dr. Sharma's expertise and caring approach made our IVF journey so much easier. After years
                                of trying, we're finally expecting twins! The entire team was amazing throughout the
                                process."
                            </p>
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-gray-300 rounded-full mr-4">
                                    <img src="{{ asset('images/patient1.jpg') }}"
                                        class="w-full h-full rounded-full object-cover"
                                        onerror="this.src='https://via.placeholder.com/100x100?text=Patient';this.onerror='';">
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Priya & Raj Malhotra</h4>
                                    <p class="text-[#a53692] text-sm">IVF Treatment</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="bg-gray-50 p-8 rounded-lg relative">
                            <div
                                class="absolute top-0 right-0 -mt-4 -mr-4 w-12 h-12 bg-[#a53692] rounded-full flex items-center justify-center text-white text-3xl">
                                "
                            </div>
                            <p class="text-gray-600 mb-6 italic">
                                "Dr. Kumar diagnosed my condition correctly after years of misdiagnosis elsewhere. His
                                treatment plan was effective and his staff was so supportive. We now have a beautiful baby
                                boy!"
                            </p>
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-gray-300 rounded-full mr-4">
                                    <img src="{{ asset('images/patient2.jpg') }}"
                                        class="w-full h-full rounded-full object-cover"
                                        onerror="this.src='https://via.placeholder.com/100x100?text=Patient';this.onerror='';">
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Anjali & Vikram Sinha</h4>
                                    <p class="text-[#a53692] text-sm">ICSI Treatment</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="bg-gray-50 p-8 rounded-lg relative">
                            <div
                                class="absolute top-0 right-0 -mt-4 -mr-4 w-12 h-12 bg-[#a53692] rounded-full flex items-center justify-center text-white text-3xl">
                                "
                            </div>
                            <p class="text-gray-600 mb-6 italic">
                                "After multiple failed IVF attempts elsewhere, we came to Dr. Patel who completely changed
                                our approach. Her embryology expertise was crucial in our success. We're forever grateful."
                            </p>
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-gray-300 rounded-full mr-4">
                                    <img src="{{ asset('images/patient3.jpg') }}"
                                        class="w-full h-full rounded-full object-cover"
                                        onerror="this.src='https://via.placeholder.com/100x100?text=Patient';this.onerror='';">
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Meera & Arjun Kapoor</h4>
                                    <p class="text-[#a53692] text-sm">IVF with PGT</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Awards & Recognitions -->
            <section class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Excellence in
                            Care</span>
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">Awards & Recognitions</h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                            Our doctors have been recognized for their contributions to reproductive medicine
                        </p>
                    </div>

                    <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-6">
                        <!-- Award 1 -->
                        <div class="bg-white p-6 rounded-lg text-center">
                            <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Best Fertility Clinic</h3>
                            <p class="text-gray-600 text-sm">National Healthcare Excellence Awards, 2023</p>
                        </div>

                        <!-- Award 2 -->
                        <div class="bg-white p-6 rounded-lg text-center">
                            <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Top Rated Doctors</h3>
                            <p class="text-gray-600 text-sm">Medical Association of Reproductive Medicine, 2024</p>
                        </div>

                        <!-- Award 3 -->
                        <div class="bg-white p-6 rounded-lg text-center">
                            <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Research Excellence</h3>
                            <p class="text-gray-600 text-sm">International Fertility Research Conference, 2024</p>
                        </div>

                        <!-- Award 4 -->
                        <div class="bg-white p-6 rounded-lg text-center">
                            <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 005 10a6 6 0 0012 0c0-.352-.035-.696-.1-1.028a4.96 4.96 0 00-1.535-2.587 5 5 0 00-3.365-1.385z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Patient Care Award</h3>
                            <p class="text-gray-600 text-sm">Healthcare Service Excellence Awards, 2025</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="py-16 bg-[#a53692]">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="mb-6 md:mb-0 md:w-2/3">
                            <h2 class="text-3xl font-bold text-white mb-4">Ready to Meet Our Specialists?</h2>
                            <p class="text-lg text-white opacity-90">Schedule a consultation with one of our expert
                                fertility doctors to discuss your unique situation.</p>
                        </div>
                        <div>
                            <a href="{{ route('booking') }}"
                                class="inline-block px-6 py-3 bg-white text-[#a53692] font-medium rounded-md hover:bg-gray-100 transition-colors">
                                Book an Appointment
                            </a>
                        </div>
                    </div>
                </div>
            </section>
    </div>
