<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-8">
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Manage Your Appointments</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Find your existing appointments or schedule a new one
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Book New Appointment -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl border p-6 sticky top-8">
                    <!-- Book New Appointment Card -->
                    <div class="bg-[#a53692] rounded-xl p-6 text-white mb-6">
                        <h2 class="text-2xl font-bold mb-2">Book a New Appointment</h2>
                        <h3 class="text-lg font-semibold mb-4 opacity-90">Schedule Your Visit for Tomorrow</h3>
                        <p class="text-blue-100 mb-6 text-sm leading-relaxed">
                            Take the first step towards better health by booking an appointment with our specialists.
                        </p>
                        <a wire:navigate href="{{ route('booking') }}" class="w-full bg-white text-blue-600 font-semibold py-3 px-4 rounded-lg hover:bg-blue-50 transition-colors duration-200 flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <span>Book Appointment</span>
                        </a>
                    </div>

                    <!-- Why Choose Us Section -->
                    <div class="border-t pt-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Why Choose Healing Touch Hospital?</h3>
                        <div class="space-y-3">
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="text-sm text-gray-600">Expert medical professionals</p>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="text-sm text-gray-600">State-of-the-art facilities</p>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="text-sm text-gray-600">24/7 emergency care</p>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="text-sm text-gray-600">Patient-centered approach</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Search and Results -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl border p-6">
                    <!-- Search Section -->
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">Find Your Appointments</h2>
                        <p class="text-gray-600 mb-6">Enter your email or phone number to view your scheduled appointments</p>
                        
                        <form wire:submit.prevent="searchAppointments" class="space-y-4">
                            @csrf
                            <div>
                                <label for="search" class="block text-sm font-medium text-gray-700 mb-2">
                                    Email or Phone Number *
                                </label>
                                <input
                                    type="text"
                                    id="search"
                                    wire:model="search"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                    placeholder="Enter your email address or phone number"
                                    required
                                >
                                <p class="mt-2 text-sm text-gray-500">
                                    Enter either your registered email address or phone number to find your appointments
                                </p>
                                @error('search')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Buttons -->
                            <div class="flex space-x-4">
                                <button
                                    type="submit"
                                    class="px-8 py-3 bg-[#a53692] text-white font-medium rounded-lg hover:bg-[#8c2b7b] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200 flex items-center space-x-2"
                                >
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                    <span>Find My Appointments</span>
                                </button>
                                
                                @if($showResults || $noResults)
                                    <button
                                        type="button"
                                        wire:click="resetSearch"
                                        class="px-6 py-3 bg-gray-500 text-white font-medium rounded-lg hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors duration-200"
                                    >
                                        New Search
                                    </button>
                                @endif
                            </div>
                        </form>
                    </div>

                    <!-- Search Type Indicator -->
                    @if($searchType)
                        <div class="mb-6 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                            <p class="text-sm text-blue-700 flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path>
                                </svg>
                                Searching by: <span class="font-medium capitalize">{{ $searchType }}</span>
                            </p>
                        </div>
                    @endif

                    <!-- No Results Message -->
                    @if($noResults)
                        <div class="text-center py-12 border-2 border-dashed border-gray-300 rounded-xl bg-gray-50">
                            <div class="text-gray-500 mb-4">
                                @if(!$patient)
                                    <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <p class="font-medium text-lg mb-2">No patient found</p>
                                    <p class="text-sm">
                                        We couldn't find any patient with the provided 
                                        <span class="font-medium">{{ $searchType === 'email' ? 'email address' : 'phone number' }}</span>.
                                    </p>
                                @else
                                    <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <p class="font-medium text-lg mb-2">No appointments found</p>
                                    <p class="text-sm">We found your information but there are no appointments scheduled.</p>
                                @endif
                            </div>
                        </div>
                    @endif

                    <!-- Results Section -->
                    @if($showResults && $patient)
                        <!-- Patient Information -->
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 rounded-xl p-6 mb-6">
                            <h3 class="text-lg font-semibold text-blue-800 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                                Patient Information
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 text-sm">
                                <div>
                                    <span class="font-medium text-blue-700">Full Name:</span>
                                    <p class="text-blue-900">{{ $patient->name }}</p>
                                </div>
                                <div>
                                    <span class="font-medium text-blue-700">Email:</span>
                                    <p class="text-blue-900">{{ $patient->email }}</p>
                                </div>
                                <div>
                                    <span class="font-medium text-blue-700">Phone:</span>
                                    <p class="text-blue-900">{{ $patient->phone }}</p>
                                </div>
                                @if($patient->gender)
                                <div>
                                    <span class="font-medium text-blue-700">Gender:</span>
                                    <p class="text-blue-900">{{ ucfirst($patient->gender) }}</p>
                                </div>
                                @endif
                                @if($patient->age)
                                <div>
                                    <span class="font-medium text-blue-700">Age:</span>
                                    <p class="text-blue-900">{{ $patient->age }} years</p>
                                </div>
                                @endif
                            </div>
                        </div>

                        <!-- Appointments List -->
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-6 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                Your Appointments ({{ $appointments->count() }})
                            </h3>
                            
                            @if($appointments->count() > 0)
                                <div class="space-y-4">
                                    @foreach($appointments as $appointment)
                                        <div class="border border-gray-200 rounded-xl p-6 hover:shadow-md transition-all duration-200 bg-white">
                                            <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between">
                                                <!-- Appointment Details -->
                                                <div class="flex-1 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-4 lg:mb-0">
                                                    <div>
                                                        <span class="block text-sm font-medium text-gray-500 mb-1">Appointment Date</span>
                                                        <span class="text-lg font-semibold text-gray-800">
                                                            {{ \Carbon\Carbon::parse($appointment->appointment_date)->format('F j, Y') }}
                                                        </span>
                                                    </div>
                                                    
                                                    <div>
                                                        <span class="block text-sm font-medium text-gray-500 mb-1">Time</span>
                                                        <span class="text-lg font-semibold text-gray-800">
                                                            {{ $appointment->appointment_time ? \Carbon\Carbon::parse($appointment->appointment_time)->format('h:i A') : 'To be scheduled' }}
                                                        </span>
                                                    </div>
                                                    
                                                    <div>
                                                        <span class="block text-sm font-medium text-gray-500 mb-1">Status</span>
                                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium 
                                                            @if($appointment->status === 'scheduled') bg-green-100 text-green-800
                                                            @elseif($appointment->status === 'completed') bg-blue-100 text-blue-800
                                                            @elseif($appointment->status === 'cancelled') bg-red-100 text-red-800
                                                            @else bg-yellow-100 text-yellow-800 @endif">
                                                            {{ ucfirst($appointment->status) }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Additional Information -->
                                            @if($appointment->doctor)
                                                <div class="mt-4 pt-4 border-t border-gray-100">
                                                    <span class="block text-sm font-medium text-gray-500 mb-1">Assigned Doctor</span>
                                                    <p class="text-gray-800 font-medium">
                                                        {{ $appointment->doctor->user->name ?? 'Doctor information not available' }}
                                                    </p>
                                                </div>
                                            @endif

                                            @if($appointment->notes)
                                                <div class="mt-3">
                                                    <span class="block text-sm font-medium text-gray-500 mb-1">Notes</span>
                                                    <p class="text-gray-700 text-sm bg-gray-50 p-3 rounded-lg">{{ $appointment->notes }}</p>
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="text-center py-12 border-2 border-dashed border-gray-300 rounded-xl bg-gray-50">
                                    <p class="text-gray-500">No appointments found for your account.</p>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>