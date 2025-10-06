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
                            <span class="font-bold">{{$doctor->profile->experience ?? '0'}}</span> experience
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
                            {{ $doctor->profile->experience ?? '' }} experience
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
                            <p>{{ $doctor->profile->professional_bio ?? '' }}
                            </p>
                        </div>
                    </div>

                   @if ($doctor->profile && $doctor->profile->special_interest)
                    <!-- Special Interests -->
                    <div class="bg-white rounded-xl p-8 shadow-sm">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Special Interests</h2>
                        <div class="prose flex prose-lg max-w-none text-gray-600">
                             <svg class="w-6 h-6 text-[#a53692] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            <p>{{ $doctor->profile->special_interest }}</p>
                        </div>
                    </div>
                       
                   @endif

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
                                    <p class="text-gray-600">{{ $doctor->profile->achievements ?? '' }}</p>
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
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>{{ $doctor->email ?? '' }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Languages -->
                    @if ($doctor->profile && $doctor->profile->language_spoken)
                        <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Languages Spoken</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach ($doctor->profile->language_spoken as $language)
                                    <span>{{ $language }},</span>
                                @endforeach

                            </div>
                        </div>
                    @endif



                    @if (is_array($doctor->profile->social_media_link ?? '') && count($doctor->profile->social_media_link) > 0)
                        <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Social Media Links</h3>
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
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>

</div>
