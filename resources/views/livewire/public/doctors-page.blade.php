<div>
    @section('title', 'Our Doctors - Umeed IVF Hospital')
    @section('description',
        'Meet our team of experienced fertility specialists, embryologists, and reproductive
        endocrinologists dedicated to helping you achieve your dream of parenthood.')
    @section('keywords',
        'fertility doctors, IVF specialists, reproductive endocrinologists, embryologists, infertility
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
                            <a wire:navigate href="{{ route('view-doctor', $doctor->slug) }}"
                                class="bg-white rounded-lg border overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 block group">
                                <div class="h-64 bg-gray-200 bg-[#f9f0f7] relative overflow-hidden">
                                    @if ($doctor->image)
                                        <img src="{{ asset('storage/' . $doctor->image) }}"
                                            alt="Dr. {{ $doctor->user->name }}"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                            onerror="this.src='https://via.placeholder.com/400x400?text=Dr.{{ urlencode($doctor->user->name) }}';this.onerror='';">
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

                                </div>

                                <div class="p-6">
                                    <span
                                        class="inline-block px-3 py-1 text-xs font-semibold text-[#a53692] bg-[#f9f0f7] rounded-full mb-3">
                                        {{ $doctor->department->name }}
                                    </span>

                                    <h3
                                        class="text-xl font-bold text-gray-900 mb-1 group-hover:text-[#a53692] transition-colors duration-300">
                                        Dr. {{ $doctor->user->name }}
                                    </h3>
                                    <p class="text-[#a53692] font-medium mb-4">{{ $doctor->specialty }}</p>
                                    <p class="text-gray-600 text-sm mb-4">
                                        {{ Str::limit($doctor->profile->professional_bio ?? '', 80) }}
                                    </p>
                                    <p class="text-[#a53692] font-medium mb-4">{{ $doctor->profile->qualification ?? '' }}
                                    </p>

                                    <div class="flex justify-between items-center">
                                        @if (is_array($doctor->profile->social_media_link ?? '') && count($doctor->profile->social_media_link) > 0)
                                            <div class="flex gap-4"
                                                onclick="event.preventDefault(); event.stopPropagation();">
                                                @foreach ($doctor->profile->social_media_link as $link)
                                                    @php
                                                        $platform = '';
                                                        $url = $link;

                                                        if (strpos($link, ':') !== false) {
                                                            [$platform, $url] = explode(':', $link, 2);
                                                            $platform = strtolower(trim($platform));
                                                        } else {
                                                            if (strpos($link, 'facebook') !== false) {
                                                                $platform = 'facebook';
                                                            } elseif (strpos($link, 'instagram') !== false) {
                                                                $platform = 'instagram';
                                                            } elseif (strpos($link, 'linkedin') !== false) {
                                                                $platform = 'linkedin';
                                                            } elseif (
                                                                strpos($link, 'twitter') !== false ||
                                                                strpos($link, 'x.com') !== false
                                                            ) {
                                                                $platform = 'twitter';
                                                            } elseif (strpos($link, 'youtube') !== false) {
                                                                $platform = 'youtube';
                                                            } else {
                                                                $platform = 'website';
                                                            }
                                                        }
                                                    @endphp

                                                    <a href="{{ $url }}" target="_blank" rel="noopener noreferrer"
                                                        class="text-gray-500 hover:text-[#a53692] transition-colors duration-300"
                                                        onclick="event.stopPropagation();">
                                                        <!-- Facebook -->
                                                        @if ($platform === 'facebook')
                                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.2 1.8.2v2h-1c-1 0-1.3.6-1.3 1.2V12h2.3l-.4 3h-1.9v7A10 10 0 0 0 22 12Z" />
                                                            </svg>
                                                        @endif

                                                        <!-- Instagram -->
                                                        @if ($platform === 'instagram')
                                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.6 0 3 1.4 3 3v10c0 1.6-1.4 3-3 3H7c-1.6 0-3-1.4-3-3V7c0-1.6 1.4-3 3-3h10zM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm4.8-2.9a1.1 1.1 0 1 0 0 2.2 1.1 1.1 0 0 0 0-2.2z" />
                                                            </svg>
                                                        @endif

                                                        <!-- LinkedIn -->
                                                        @if ($platform === 'linkedin')
                                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M20.5 2h-17A1.5 1.5 0 0 0 2 3.5v17A1.5 1.5 0 0 0 3.5 22h17a1.5 1.5 0 0 0 1.5-1.5v-17A1.5 1.5 0 0 0 20.5 2zM8.3 19H5.7v-9h2.6v9zM7 8.3a1.5 1.5 0 1 1 0-3.1 1.5 1.5 0 0 1 0 3.1zm12 10.7h-2.6v-4.5c0-1.1 0-2.5-1.6-2.5s-1.9 1.2-1.9 2.5v4.5h-2.6v-9h2.5v1.2h.1c.4-.8 1.4-1.6 2.9-1.6 3.1 0 3.7 2 3.7 4.6V19z" />
                                                            </svg>
                                                        @endif

                                                        <!-- Twitter/X -->
                                                        @if ($platform === 'twitter')
                                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M22.46 6c-.77.35-1.6.58-2.46.69a4.3 4.3 0 0 0 1.9-2.37c-.83.5-1.74.84-2.71 1.03a4.28 4.28 0 0 0-7.3 3.9A12.1 12.1 0 0 1 3.1 4.6a4.28 4.28 0 0 0 1.33 5.72 4.2 4.2 0 0 1-1.94-.54v.05a4.28 4.28 0 0 0 3.44 4.2 4.3 4.3 0 0 1-1.93.07 4.28 4.28 0 0 0 4 3 8.6 8.6 0 0 1-6.3 1.76A12.1 12.1 0 0 0 8.3 21c7.55 0 11.7-6.26 11.7-11.7v-.53c.8-.58 1.5-1.3 2-2.1z" />
                                                            </svg>
                                                        @endif

                                                        <!-- YouTube -->
                                                        @if ($platform === 'youtube')
                                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M19.6 3.2H4.4C3.1 3.2 2 4.3 2 5.6v12.8c0 1.3 1.1 2.4 2.4 2.4h15.2c1.3 0 2.4-1.1 2.4-2.4V5.6c0-1.3-1.1-2.4-2.4-2.4zM10 16V8l6 4-6 4z" />
                                                            </svg>
                                                        @endif

                                                        <!-- Website Fallback -->
                                                        @if ($platform === 'website')
                                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 2c1.4 0 2.7.4 3.8 1.1l-8.7 8.7A8 8 0 0 1 12 4zm0 16a8 8 0 0 1-4.7-1.5l8.7-8.7A8 8 0 0 1 12 20z" />
                                                            </svg>
                                                        @endif
                                                    </a>
                                                @endforeach
                                            </div>
                                        @else
                                            <div></div> <!-- Empty div for flex alignment -->
                                        @endif

                                        <button
                                            onclick="event.preventDefault(); event.stopPropagation(); window.location.href='{{ route('booking') }}';"
                                            class="inline-flex items-center text-[#a53692] font-medium hover:text-[#8c2b7b] transition-colors duration-300">
                                            Book Appointment
                                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        @endforeach
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
                            <a wire:navigate href="{{ route('booking') }}"
                                class="inline-block px-6 py-3 bg-white text-[#a53692] font-medium rounded-md hover:bg-gray-100 transition-colors">
                                Book an Appointment
                            </a>
                        </div>
                    </div>
                </div>
            </section>
    </div>
