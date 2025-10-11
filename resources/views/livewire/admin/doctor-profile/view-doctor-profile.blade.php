<div class="py-4 md:py-6">
    <div class="max-w-7xl mx-auto px-3 sm:px-4 md:px-6 lg:px-8">
        <!-- Header with Breadcrumb -->
        <div class="mb-4 md:mb-6">
            <nav class="sm:hidden">
                <a wire:navigate href="" class="flex items-center text-sm text-gray-500 hover:text-gray-700 mb-3 md:mb-4">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Back to Doctors
                </a>
            </nav>
            <nav class="hidden sm:flex items-center space-x-2 text-sm text-gray-500 mb-3 md:mb-4">
                <a wire:navigate href="{{ route('admin.dashboard') }}" class="hover:text-gray-700">Dashboard</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <a wire:navigate href="{{ route('admin.doctor-profiles.list') }}" class="hover:text-gray-700">Doctors</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-gray-900">View Doctor</span>
            </nav>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <div class="mb-3 sm:mb-0">
                    <h1 class="text-xl sm:text-2xl font-bold text-gray-900">Doctor Profile</h1>
                    <p class="text-gray-600 mt-1 text-sm sm:text-base">Doctor ID: #{{ $doctor->id }}</p>
                </div>
                <div class="mt-2 sm:mt-0 flex space-x-2 sm:space-x-3">
                    <a wire:navigate href="{{ route('admin.doctor-profiles.edit', $doctor->id) }}" 
                            class="inline-flex items-center px-3 py-2 sm:px-4 sm:py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 transition-colors w-full sm:w-auto justify-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        Edit Profile
                    </a>
                </div>
            </div>
        </div>

        @if($doctor)
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 md:gap-6">
            <!-- Sidebar -->
            <div class="lg:col-span-1 space-y-4 md:space-y-6">
                <!-- Doctor Profile Card -->
                <div class="bg-white shadow-sm rounded-lg border border-gray-200">
                    <div class="p-4 md:p-6">
                        <div class="flex flex-col items-center text-center">
                            @if($doctor->image)
                                <img src="{{ asset('storage/' . $doctor->image) }}" alt="{{ $doctor->user->name }}" 
                                     class="h-16 w-16 md:h-20 md:w-20 rounded-full object-cover mb-3 md:mb-4">
                            @else
                                <div class="h-16 w-16 md:h-20 md:w-20 bg-indigo-100 rounded-full flex items-center justify-center mb-3 md:mb-4">
                                    <span class="text-indigo-600 font-medium text-lg md:text-xl">
                                        {{ strtoupper(substr($doctor->user->name, 0, 1)) }}
                                    </span>
                                </div>
                            @endif
                            <h2 class="text-base md:text-lg font-bold text-gray-900">Dr. {{ $doctor->user->name }}</h2>
                            <p class="text-gray-500 text-xs md:text-sm mt-1">
                                {{ $doctor->department->name ?? 'No Department' }}
                            </p>
                            
                            <!-- Status Badge -->
                            <div class="mt-2">
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                    @if($doctor->status) bg-green-100 text-green-800 
                                    @else bg-red-100 text-red-800 @endif">
                                    {{ $doctor->status ? 'Active' : 'Inactive' }}
                                </span>
                            </div>
                            
                            <div class="mt-3 md:mt-4 w-full space-y-2">
                                <div class="flex justify-between text-xs md:text-sm">
                                    <span class="text-gray-500">Doctor ID:</span>
                                    <span class="text-gray-900 font-medium">#{{ $doctor->id }}</span>
                                </div>
                                <div class="flex justify-between text-xs md:text-sm">
                                    <span class="text-gray-500">Consultation Fee:</span>
                                    <span class="text-gray-900 font-medium">₹{{ $doctor->fee }}</span>
                                </div>
                                <div class="flex justify-between text-xs md:text-sm">
                                    <span class="text-gray-500">Member Since:</span>
                                    <span class="text-gray-900">{{ $doctor->created_at->format('M Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="bg-white shadow-sm rounded-lg border border-gray-200">
                    <div class="px-4 py-3 md:px-6 md:py-4 border-b border-gray-200">
                        <h3 class="text-base md:text-lg font-medium text-gray-900">Contact Information</h3>
                    </div>
                    <div class="p-4 md:p-6 space-y-3">
                        <div class="flex items-center text-xs md:text-sm">
                            <svg class="w-4 h-4 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-gray-900 break-all">{{ $doctor->user->email }}</span>
                        </div>
                        
                     
                            <!-- Languages -->
                    @if ($doctor->profile && $doctor->profile->language_spoken)
                        <div class="flex items-start text-xs md:text-sm">
                           <svg class="w-4 h-4 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                            </svg>
                            <div class="flex flex-wrap gap-2">
                                @foreach ($doctor->profile->language_spoken as $language)
                                    <span>{{ $language }},</span>
                                @endforeach

                            </div>
                        </div>
                    @endif
                    </div>
                </div>

                <!-- Professional Details -->
                <div class="bg-white shadow-sm rounded-lg border border-gray-200">
                    <div class="px-4 py-3 md:px-6 md:py-4 border-b border-gray-200">
                        <h3 class="text-base md:text-lg font-medium text-gray-900">Professional Details</h3>
                    </div>
                    <div class="p-4 md:p-6 space-y-3">
                        @if($doctor->doctorProfile && $doctor->doctorProfile->qualification)
                        <div class="flex items-start text-xs md:text-sm">
                            <svg class="w-4 h-4 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" opacity=".5"/>
                            </svg>
                            <span class="text-gray-900">{{ $doctor->doctorProfile->qualification }}</span>
                        </div>
                        @endif
                        
                        @if($doctor->doctorProfile && $doctor->doctorProfile->experience)
                        <div class="flex items-center text-xs md:text-sm">
                            <svg class="w-4 h-4 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="text-gray-900">{{ $doctor->doctorProfile->experience }} experience</span>
                        </div>
                        @endif
                        
                        @if($doctor->doctorProfile && $doctor->doctorProfile->membership)
                        <div class="flex items-start text-xs md:text-sm">
                            <svg class="w-4 h-4 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                            <span class="text-gray-900">{{ $doctor->doctorProfile->membership }}</span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-3 space-y-4 md:space-y-6">
                <!-- Tabs Navigation -->
                <div class="bg-white shadow-sm rounded-lg border border-gray-200">
                    <div class="border-b border-gray-200 overflow-x-auto">
                        <nav class="flex -mb-px min-w-max">
                            <button wire:click="setActiveTab('overview')"
                                    class="@if($activeTab === 'overview') border-indigo-500 text-indigo-600 @else border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 @endif whitespace-nowrap py-3 md:py-4 px-4 md:px-6 border-b-2 font-medium text-xs md:text-sm flex-1 sm:flex-none text-center">
                                Overview
                            </button>
                            <button wire:click="setActiveTab('professional')"
                                    class="@if($activeTab === 'professional') border-indigo-500 text-indigo-600 @else border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 @endif whitespace-nowrap py-3 md:py-4 px-4 md:px-6 border-b-2 font-medium text-xs md:text-sm flex-1 sm:flex-none text-center">
                                Professional Info
                            </button>
                            <button wire:click="setActiveTab('social')"
                                    class="@if($activeTab === 'social') border-indigo-500 text-indigo-600 @else border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 @endif whitespace-nowrap py-3 md:py-4 px-4 md:px-6 border-b-2 font-medium text-xs md:text-sm flex-1 sm:flex-none text-center">
                                Social Media
                            </button>
                        </nav>
                    </div>

                    <!-- Tab Content -->
                    <div class="p-4 md:p-6">
                        <!-- Overview Tab -->
                        @if($activeTab === 'overview')
                        <div class="space-y-4 md:space-y-6">
                            <!-- Professional Bio -->
                            @if($doctor->doctorProfile && $doctor->doctorProfile->professional_bio)
                            <div>
                                <h3 class="text-base md:text-lg font-medium text-gray-900 mb-3 md:mb-4">Professional Biography</h3>
                                <div class="bg-gray-50 rounded-lg p-4 md:p-6">
                                    <p class="text-sm text-gray-700 leading-relaxed">
                                        {{ $doctor->doctorProfile->professional_bio }}
                                    </p>
                                </div>
                            </div>
                            @endif

                            <!-- Special Interest -->
                            @if($doctor->doctorProfile && $doctor->doctorProfile->special_interest)
                            <div>
                                <h3 class="text-base md:text-lg font-medium text-gray-900 mb-3 md:mb-4">Special Interests</h3>
                                <div class="bg-gray-50 rounded-lg p-4 md:p-6">
                                    <p class="text-sm text-gray-700">{{ $doctor->doctorProfile->special_interest }}</p>
                                </div>
                            </div>
                            @endif

                            <!-- Doctor Information -->
                            <div>
                                <h3 class="text-base md:text-lg font-medium text-gray-900 mb-3 md:mb-4">Doctor Information</h3>
                                <div class="bg-gray-50 rounded-lg p-4 md:p-6">
                                    <dl class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-4 text-xs md:text-sm">
                                        <div>
                                            <dt class="font-medium text-gray-500">Full Name</dt>
                                            <dd class="text-gray-900 mt-1">Dr. {{ $doctor->user->name }}</dd>
                                        </div>
                                        <div>
                                            <dt class="font-medium text-gray-500">Doctor ID</dt>
                                            <dd class="text-gray-900 mt-1">#{{ $doctor->id }}</dd>
                                        </div>
                                        <div>
                                            <dt class="font-medium text-gray-500">Email Address</dt>
                                            <dd class="text-gray-900 mt-1 break-all">{{ $doctor->user->email }}</dd>
                                        </div>
                                        <div>
                                            <dt class="font-medium text-gray-500">Department</dt>
                                            <dd class="text-gray-900 mt-1">{{ $doctor->department->name ?? 'Not assigned' }}</dd>
                                        </div>
                                        <div>
                                            <dt class="font-medium text-gray-500">Consultation Fee</dt>
                                            <dd class="text-gray-900 mt-1">₹{{ $doctor->fee }}</dd>
                                        </div>
                                        <div>
                                            <dt class="font-medium text-gray-500">Status</dt>
                                            <dd class="mt-1">
                                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                                    @if($doctor->status) bg-green-100 text-green-800 
                                                    @else bg-red-100 text-red-800 @endif">
                                                    {{ $doctor->status ? 'Active' : 'Inactive' }}
                                                </span>
                                            </dd>
                                        </div>
                                        <div>
                                            <dt class="font-medium text-gray-500">Member Since</dt>
                                            <dd class="text-gray-900 mt-1">{{ $doctor->created_at->format('F j, Y') }}</dd>
                                        </div>
                                        <div>
                                            <dt class="font-medium text-gray-500">Last Updated</dt>
                                            <dd class="text-gray-900 mt-1">{{ $doctor->updated_at->format('F j, Y') }}</dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Professional Info Tab -->
                        @if($activeTab === 'professional')
                        <div class="space-y-4 md:space-y-6">
                            @if($doctor->doctorProfile)
                                <!-- Qualification -->
                                @if($doctor->doctorProfile->qualification)
                                <div>
                                    <h3 class="text-base md:text-lg font-medium text-gray-900 mb-3 md:mb-4">Qualifications</h3>
                                    <div class="bg-gray-50 rounded-lg p-4 md:p-6">
                                        <p class="text-sm text-gray-700">{{ $doctor->doctorProfile->qualification }}</p>
                                    </div>
                                </div>
                                @endif

                                <!-- Experience -->
                                @if($doctor->doctorProfile->experience)
                                <div>
                                    <h3 class="text-base md:text-lg font-medium text-gray-900 mb-3 md:mb-4">Experience</h3>
                                    <div class="bg-gray-50 rounded-lg p-4 md:p-6">
                                        <p class="text-sm text-gray-700">{{ $doctor->doctorProfile->experience }}</p>
                                    </div>
                                </div>
                                @endif

                                <!-- Membership -->
                                @if($doctor->doctorProfile->membership)
                                <div>
                                    <h3 class="text-base md:text-lg font-medium text-gray-900 mb-3 md:mb-4">Professional Memberships</h3>
                                    <div class="bg-gray-50 rounded-lg p-4 md:p-6">
                                        <p class="text-sm text-gray-700">{{ $doctor->doctorProfile->membership }}</p>
                                    </div>
                                </div>
                                @endif

                                <!-- Achievements -->
                                @if($doctor->profile && $doctor->profile->achievements)
                                 <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Achievements & Awards</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach ($doctor->profile->achievements as $achievement)
                                    <span>{{ $achievement }},</span>
                                @endforeach

                            </div>
                        </div>
                                @endif

                                <!-- Languages -->
                                {{-- @if($doctor->doctorProfile->language_spoken)
                                <div>
                                    <h3 class="text-base md:text-lg font-medium text-gray-900 mb-3 md:mb-4">Languages Spoken</h3>
                                    <div class="bg-gray-50 rounded-lg p-4 md:p-6">
                                        <p class="text-sm text-gray-700">{{ $doctor->doctorProfile->language_spoken }}</p>
                                    </div>
                                </div>
                                @endif --}}
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

                            </div>
                        </div>
                    @endif
                            @else
                                <div class="text-center py-8">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                    <h3 class="mt-2 text-sm font-medium text-gray-900">No professional information</h3>
                                    <p class="mt-1 text-xs md:text-sm text-gray-500">This doctor hasn't added their professional details yet.</p>
                                </div>
                            @endif
                        </div>
                        @endif

                        <!-- Social Media Tab -->
                        @if($activeTab === 'social')
                        <div>
                            @if($doctor->doctorProfile && $doctor->doctorProfile->social_media_link)
                                @php
                                    $socialLinks = json_decode($doctor->doctorProfile->social_media_link, true);
                                @endphp
                                @if($socialLinks && count($socialLinks) > 0)
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    @foreach($socialLinks as $platform => $url)
                                    @if($url)
                                    <div class="flex items-center p-4 bg-gray-50 rounded-lg border border-gray-200">
                                        <div class="flex-shrink-0">
                                            @switch(strtolower($platform))
                                                @case('facebook')
                                                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                                    </svg>
                                                    @break
                                                @case('twitter')
                                                    <svg class="w-6 h-6 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                                    </svg>
                                                    @break
                                                @case('linkedin')
                                                    <svg class="w-6 h-6 text-blue-700" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                                    </svg>
                                                    @break
                                                @case('instagram')
                                                    <svg class="w-6 h-6 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987 6.62 0 11.987-5.367 11.987-11.987C24.014 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.323-1.297C4.24 14.865 3.75 13.714 3.75 12.417s.49-2.448 1.376-3.323c.875-.807 2.026-1.297 3.323-1.297s2.448.49 3.323 1.297c.886.875 1.376 2.026 1.376 3.323s-.49 2.448-1.376 3.323c-.875.807-2.026 1.297-3.323 1.297z"/>
                                                    </svg>
                                                    @break
                                                @default
                                                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                                                    </svg>
                                            @endswitch
                                        </div>
                                        <div class="ml-4 flex-1">
                                            <p class="text-sm font-medium text-gray-900 capitalize">{{ $platform }}</p>
                                            <a href="{{ $url }}" target="_blank" class="text-xs text-indigo-600 hover:text-indigo-900 break-all">
                                                {{ $url }}
                                            </a>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                                @else
                                <div class="text-center py-8">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                                    </svg>
                                    <h3 class="mt-2 text-sm font-medium text-gray-900">No social media links</h3>
                                    <p class="mt-1 text-xs md:text-sm text-gray-500">This doctor hasn't added any social media links yet.</p>
                                </div>
                                @endif
                            @else
                            <div class="text-center py-8">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                                </svg>
                                <h3 class="mt-2 text-sm font-medium text-gray-900">No social media links</h3>
                                <p class="mt-1 text-xs md:text-sm text-gray-500">This doctor hasn't added any social media links yet.</p>
                            </div>
                            @endif
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="bg-white shadow-sm rounded-lg border border-gray-200 p-6 md:p-8 text-center">
            <svg class="mx-auto h-10 w-10 md:h-12 md:w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
            </svg>
            <h3 class="mt-2 text-sm font-medium text-gray-900">Doctor not found</h3>
            <p class="mt-1 text-xs md:text-sm text-gray-500">The doctor you're looking for doesn't exist.</p>
            <div class="mt-4 md:mt-6">
                <a wire:navigate href="{{ route('admin.doctor-profiles.list') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    Back to Doctors
                </a>
            </div>
        </div>
        @endif
    </div>
</div>