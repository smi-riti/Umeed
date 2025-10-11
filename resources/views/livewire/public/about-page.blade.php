<div>
    @section('title', 'About Us - Umeed IVF Hospital')
    @section('description',
        'Learn about Umeed IVF Hospital\'s mission, values, advanced fertility treatments, and our
        expert team dedicated to making parenthood dreams come true.')
    @section('keywords',
        'about Umeed IVF, fertility hospital history, IVF clinic story, best fertility center,
        fertility treatment team')

        <!-- Hero Section -->
        <section class="bg-[#f9f0f7] pt-24 pb-16 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">About Umeed IVF Hospital</h1>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        A leading fertility care center committed to helping couples realize their dreams of parenthood
                        through advanced technology, compassionate care, and personalized treatment plans.
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
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">Turning Dreams Into Reality Since
                            2010</h2>
                        <div class="prose prose-lg text-gray-600">
                            <p>Founded by Dr. Priya Sharma in 2010, Umeed IVF Hospital began with a simple yet profound
                                mission: to provide hope to couples struggling with infertility.</p>
                            <p class="mt-4">What started as a small clinic has now grown into one of the country's most
                                respected fertility treatment centers, having helped over 5,000 couples achieve their dream
                                of parenthood.</p>
                            <p class="mt-4">Our journey has been defined by continuous innovation, personalized care, and
                                an unwavering commitment to excellence. We combine cutting-edge reproductive technology with
                                compassionate support to provide the highest standard of fertility care.</p>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="w-full h-96 bg-gray-200 rounded-lg overflow-hidden">
                            <img src="{{ asset('umee.jpeg') }}" alt="Umeed IVF Hospital" class="w-full h-full object-cover"
                                onerror="this.src='https://via.placeholder.com/600x400?text=Umeed+Hospital+Building';this.onerror='';">
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
                                    <path fill-rule="evenodd"
                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Our Mission</h3>
                            <p class="text-gray-600">To provide accessible, compassionate, and personalized fertility care
                                using the latest advancements in reproductive medicine, helping couples fulfill their dream
                                of building a family.</p>
                        </div>

                        <!-- Vision -->
                        <div class="bg-white p-8 rounded-lg border border-gray-100">
                            <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Our Vision</h3>
                            <p class="text-gray-600">To be the leading fertility care provider known for innovative
                                treatments, exceptional success rates, and holistic approach to reproductive health and
                                family building.</p>
                        </div>

                        <!-- Values -->
                        <div class="bg-white p-8 rounded-lg border border-gray-100">
                            <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Our Values</h3>
                            <p class="text-gray-600">We believe in empathy, integrity, excellence, innovation, and respect
                                for every individual's journey. These core values guide our approach to fertility care and
                                patient relationships.</p>
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
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">We understand that each fertility journey is
                            unique, which is why we take a personalized approach to your care.</p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-12">
                        <div>
                            <div class="space-y-8">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 rounded-md bg-[#a53692] text-white">
                                            <span class="text-xl font-bold">1</span>
                                        </div>
                                    </div>
                                    <div class="ml-6">
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Comprehensive Assessment</h3>
                                        <p class="text-gray-600">We begin with a thorough evaluation to understand your
                                            unique situation, medical history, and fertility challenges.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 rounded-md bg-[#a53692] text-white">
                                            <span class="text-xl font-bold">2</span>
                                        </div>
                                    </div>
                                    <div class="ml-6">
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Personalized Treatment Plan</h3>
                                        <p class="text-gray-600">Our specialists develop a customized fertility treatment
                                            plan tailored specifically to your needs and circumstances.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 rounded-md bg-[#a53692] text-white">
                                            <span class="text-xl font-bold">3</span>
                                        </div>
                                    </div>
                                    <div class="ml-6">
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Advanced Treatment</h3>
                                        <p class="text-gray-600">Using cutting-edge technology and proven techniques, we
                                            implement your treatment plan with precision and care.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 rounded-md bg-[#a53692] text-white">
                                            <span class="text-xl font-bold">4</span>
                                        </div>
                                    </div>
                                    <div class="ml-6">
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Continuous Support</h3>
                                        <p class="text-gray-600">Throughout your journey, our compassionate team provides
                                            emotional support, guidance, and answers to all your questions.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="rounded-lg overflow-hidden">
                                <img src="{{ asset('Fertility.jpeg') }}" alt="Fertility Consultation"
                                    class="w-full h-[30vh] object-cover"
                                    onerror="this.src='https://via.placeholder.com/300x400?text=Consultation';this.onerror='';">
                            </div>
                            <div class="rounded-lg overflow-hidden mt-12">
                                <img src="{{ asset('Laboratory.jpeg') }}" alt="Laboratory Work"
                                    class="w-full h-full object-cover"
                                    onerror="this.src='https://via.placeholder.com/300x400?text=Lab+Work';this.onerror='';">
                            </div>
                            <div class="rounded-lg overflow-hidden">
                                <img src="{{ asset('doctorp.jpeg') }}" alt="Doctor with Patient"
                                    class="w-full h-full object-cover"
                                    onerror="this.src='https://via.placeholder.com/300x400?text=Doctor-Patient';this.onerror='';">
                            </div>
                            <div class="rounded-lg overflow-hidden mt-12">
                                <img src="{{ asset('happy.jpeg') }}" alt="Happy Family"
                                    class="w-full h-full object-cover"
                                    onerror="this.src='https://via.placeholder.com/300x400?text=Happy+Family';this.onerror='';">
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
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Led by world-class fertility specialists with
                            decades of combined experience</p>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8">
                        @foreach ($doctors as $doctor)
                            <!-- Founder -->
                            <div class="bg-white rounded-lg overflow-hidden">
                                <div class="h-64 bg-gray-200">
                                    <div class="h-64 bg-gray-200 flex items-center justify-center">
                                        @if ($doctor->image)
                                            <img src="{{ asset('storage/' . $doctor->image) }}"
                                                alt="Dr. {{ $doctor->name }}" class="w-full h-full object-cover"
                                                onerror="this.src='https://via.placeholder.com/400x400?text=Dr.+{{ urlencode($doctor->name) }}';this.onerror='';">
                                        @else
                                            <div class="flex items-center justify-center w-full h-full">
                                                <svg class="w-24 h-24 text-gray-600" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                                <div class="p-6">
                                    <span
                                        class="inline-block px-3 py-1 text-xs font-semibold text-[#a53692] bg-[#f9f0f7] rounded-full mb-3">
                                        {{ $doctor->department->name }}
                                    </span>
                                    <h3 class="text-xl font-bold text-gray-900 mb-1">Dr. {{ $doctor->user->name }}</h3>
                                    <p class="text-[#a53692] font-medium mb-4">{{ $doctor->specialty }}</p>
                                    @if ($doctor->profile && $doctor->profile->qualification)
                                        <p class="text-gray-600 text-sm font-semibold mb-4">Qualification :- <span
                                                class="text-green-600 font-semibold">{{ Str::limit($doctor->profile->qualification ?? '', 50) }}</span>
                                        </p>
                                    @endif
                                    @if (is_array($doctor->profile->social_media_link ?? '') && count($doctor->profile->social_media_link) > 0)
                                        <div class="flex gap-6">
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

                                                <a href="{{ $url }}" target="_blank"
                                                    class="text-gray-500 hover:text-[#a53692] transition-colors">
                                                    {{-- Facebook --}}
                                                    @if ($platform === 'facebook')
                                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                            <path
                                                                d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.2 1.8.2v2h-1c-1 0-1.3.6-1.3 1.2V12h2.3l-.4 3h-1.9v7A10 10 0 0 0 22 12Z" />
                                                        </svg>
                                                    @endif

                                                    {{-- Instagram --}}
                                                    @if ($platform === 'instagram')
                                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                            <path
                                                                d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.6 0 3 1.4 3 3v10c0 1.6-1.4 3-3 3H7c-1.6 0-3-1.4-3-3V7c0-1.6 1.4-3 3-3h10zM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm4.8-2.9a1.1 1.1 0 1 0 0 2.2 1.1 1.1 0 0 0 0-2.2z" />
                                                        </svg>
                                                    @endif

                                                    {{-- LinkedIn --}}
                                                    @if ($platform === 'linkedin')
                                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                            <path
                                                                d="M20.5 2h-17A1.5 1.5 0 0 0 2 3.5v17A1.5 1.5 0 0 0 3.5 22h17a1.5 1.5 0 0 0 1.5-1.5v-17A1.5 1.5 0 0 0 20.5 2zM8.3 19H5.7v-9h2.6v9zM7 8.3a1.5 1.5 0 1 1 0-3.1 1.5 1.5 0 0 1 0 3.1zm12 10.7h-2.6v-4.5c0-1.1 0-2.5-1.6-2.5s-1.9 1.2-1.9 2.5v4.5h-2.6v-9h2.5v1.2h.1c.4-.8 1.4-1.6 2.9-1.6 3.1 0 3.7 2 3.7 4.6V19z" />
                                                        </svg>
                                                    @endif

                                                    {{-- Twitter/X --}}
                                                    @if ($platform === 'twitter')
                                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                            <path
                                                                d="M22.46 6c-.77.35-1.6.58-2.46.69a4.3 4.3 0 0 0 1.9-2.37c-.83.5-1.74.84-2.71 1.03a4.28 4.28 0 0 0-7.3 3.9A12.1 12.1 0 0 1 3.1 4.6a4.28 4.28 0 0 0 1.33 5.72 4.2 4.2 0 0 1-1.94-.54v.05a4.28 4.28 0 0 0 3.44 4.2 4.3 4.3 0 0 1-1.93.07 4.28 4.28 0 0 0 4 3 8.6 8.6 0 0 1-6.3 1.76A12.1 12.1 0 0 0 8.3 21c7.55 0 11.7-6.26 11.7-11.7v-.53c.8-.58 1.5-1.3 2-2.1z" />
                                                        </svg>
                                                    @endif

                                                    {{-- YouTube --}}
                                                    @if ($platform === 'youtube')
                                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                            <path
                                                                d="M19.6 3.2H4.4C3.1 3.2 2 4.3 2 5.6v12.8c0 1.3 1.1 2.4 2.4 2.4h15.2c1.3 0 2.4-1.1 2.4-2.4V5.6c0-1.3-1.1-2.4-2.4-2.4zM10 16V8l6 4-6 4z" />
                                                        </svg>
                                                    @endif

                                                    {{-- Website Fallback --}}
                                                    @if ($platform === 'website')
                                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                            <path
                                                                d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 2c1.4 0 2.7.4 3.8 1.1l-8.7 8.7A8 8 0 0 1 12 4zm0 16a8 8 0 0 1-4.7-1.5l8.7-8.7A8 8 0 0 1 12 20z" />
                                                        </svg>
                                                    @endif
                                                </a>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="py-16 bg-[#a53692]">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="mb-6 md:mb-0 md:w-2/3">
                            <h2 class="text-3xl font-bold text-white mb-4">Begin Your Fertility Journey Today</h2>
                            <p class="text-lg text-white opacity-90">Take the first step towards parenthood with a
                                consultation at Umeed IVF Hospital. Our team is ready to support you.</p>
                        </div>
                        <div>
                            <a wire:navigate href="{{ route('booking') }}"
                                class="inline-block px-6 py-3 bg-white text-[#a53692] font-medium rounded-md hover:bg-gray-100 transition-colors">
                                Schedule a Consultation
                            </a>
                        </div>
                    </div>
                </div>
            </section>
    </div>
