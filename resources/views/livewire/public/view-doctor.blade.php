<div>
    <!-- Hero Section -->
    <section class="bg-[#f9f0f7] py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8 items-center">
                <!-- Doctor Image -->
                <div class="md:col-span-1 flex justify-center">
                    <div class="relative">
                        @if ($doctor->image)
                            <div class="w-64 h-64 rounded-full overflow-hidden bg-gray-200">
                                <img src="{{ asset('storage/' . $doctor->image) }}" alt="Dr. {{ $doctor->name }}"
                                    class="w-full h-full object-cover"
                                    onerror="this.src='https://via.placeholder.com/400x400?text=Dr.{{ urlencode($doctor->name) }}';this.onerror='';">
                            </div>
                        @else
                            <div
                                class="w-64 h-64 rounded-full bg-[#a53692] bg-opacity-10 flex items-center justify-center">
                                <svg class="w-32 h-32 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        @endif


                        <!-- Experience Badge -->
                        <div class="absolute -bottom-4 -right-4 bg-[#a53692] text-white px-4 py-2 rounded-full">
                            <span class="font-bold">15+</span> Years
                        </div>
                    </div>
                </div>

                <!-- Doctor Info -->
                <div class="md:col-span-2 text-center md:text-left">
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">{{ $doctor->name }}</h1>
                    <p class="text-xl text-[#a53692] font-medium mb-4">
                        {{ $doctor->department->name }}
                    </p>
                    <p class="text-gray-600 mb-6 max-w-2xl">
                        {{ $doctor->profile->professional_bio ?? 'Experienced fertility specialist dedicated to helping families achieve their dreams of parenthood.' }}
                    </p>

                    <div class="flex flex-wrap gap-4 justify-center md:justify-start">
                        <!-- Rating -->
                        <div class="flex items-center">
                            <div class="flex text-yellow-400 mr-2">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>
                            <span class="text-gray-700 font-medium">4.9 (195 reviews)</span>
                        </div>

                        <!-- Experience -->
                        <div class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 mr-2 text-[#a53692]" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            15+ Years Experience
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">
                <!-- Left Column - Doctor Details -->
                <div class="lg:col-span-2 space-y-12">
                    <!-- About Section -->
                    <div class="bg-white rounded-xl p-8 shadow-sm">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">About Dr. {{ $doctor->name }}</h2>
                        <div class="prose prose-lg max-w-none text-gray-600">
                            <p>{{ $doctor->profile->professional_bio ?? 'Dr. ' . $doctor->name . ' is a highly experienced fertility specialist with extensive expertise in reproductive medicine. With a compassionate approach and commitment to patient care, Dr. ' . $doctor->name . ' has helped numerous couples achieve their dream of parenthood.' }}
                            </p>
                        </div>
                    </div>

                    <!-- Specializations -->
                    <div class="bg-white rounded-xl p-8 shadow-sm">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Areas of Expertise</h2>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">IVF Treatment</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">ICSI</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Egg Freezing</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Male Infertility</span>
                            </div>
                        </div>
                    </div>

                    <!-- Qualifications & Achievements -->
                    <div class="bg-white rounded-xl p-8 shadow-sm">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Qualifications & Achievements</h2>
                        <div class="space-y-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">Education & Qualifications</h3>
                                <p class="text-gray-600">
                                    {{ $doctor->profile->qualification ?? 'MD - Obstetrics & Gynaecology, Fellowship in Reproductive Medicine' }}
                                </p>
                            </div>
                            @if ($doctor->profile && $doctor->profile->achievements)
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Achievements</h3>
                                    <p class="text-gray-600">{{ $doctor->profile->achievements }}</p>
                                </div>
                            @endif
                            @if ($doctor->profile && $doctor->profile->membership)
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Professional Memberships</h3>
                                    <p class="text-gray-600">{{ $doctor->profile->membership }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Right Column - Booking & Contact -->
                <div class="space-y-6">
                    <!-- Appointment Card -->
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Book an Appointment</h3>
                        <div class="space-y-4">
                            <div class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 mr-3 text-[#a53692]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>30 min consultation</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 mr-3 text-[#a53692]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>In-person or Online</span>
                            </div>
                            <a href="{{ route('booking', ['doctor_id' => $doctor->id]) }}"
                                class="w-full bg-[#a53692] hover:bg-[#8c2b7b] text-white font-medium py-3 px-4 rounded-lg transition-all transform hover:-translate-y-1 flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Book Appointment
                            </a>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Contact Information</h3>
                        <div class="space-y-3">
                            <div class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 mr-3 text-[#a53692]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span>+91 98765 43210</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 mr-3 text-[#a53692]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>contact@umeedivf.com</span>
                            </div>
                        </div>
                    </div>

                    <!-- Languages -->
                    @if ($doctor->profile && $doctor->profile->language_spoken)
                        <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Languages Spoken</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach (explode(',', $doctor->profile->language_spoken) as $language)
                                    <span class="bg-[#f9f0f7] text-[#a53692] px-3 py-1 rounded-full text-sm">
                                        {{ trim($language) }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

</div>
