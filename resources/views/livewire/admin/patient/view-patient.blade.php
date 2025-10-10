<div class="py-4 md:py-6">
    <div class="max-w-7xl mx-auto px-3 sm:px-4 md:px-6 lg:px-8">
        <!-- Header with Breadcrumb -->
        <div class="mb-4 md:mb-6">
            <nav class="sm:hidden">
                <a wire:navigate href="{{ route('admin.patients') }}" class="flex items-center text-sm text-gray-500 hover:text-gray-700 mb-3 md:mb-4">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Back to Patients
                </a>
            </nav>
            <nav class="hidden sm:flex items-center space-x-2 text-sm text-gray-500 mb-3 md:mb-4">
                <a wire:navigate href="{{ route('admin.dashboard') }}" class="hover:text-gray-700">Dashboard</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <a wire:navigate href="{{ route('admin.patients') }}" class="hover:text-gray-700">Patients</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-gray-900">View Patient</span>
            </nav>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <div class="mb-3 sm:mb-0">
                    <h1 class="text-xl sm:text-2xl font-bold text-gray-900">Patient Details</h1>
                    <p class="text-gray-600 mt-1 text-sm sm:text-base">Patient ID: #{{ $patient->id }}</p>
                </div>
                <div class="mt-2 sm:mt-0 flex space-x-2 sm:space-x-3">
                    <button wire:click="deletePatient" 
                            wire:confirm="Are you sure you want to delete this patient? This action cannot be undone."
                            class="inline-flex items-center px-3 py-2 sm:px-4 sm:py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 transition-colors w-full sm:w-auto justify-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                        Delete Patient
                    </button>
                </div>
            </div>
        </div>

        <!-- Flash Messages -->
        @if (session()->has('message'))
            <div class="mb-4 md:mb-6 p-3 md:p-4 bg-green-50 border border-green-200 rounded-md">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-green-800">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
        @endif

        @if($patient)
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 md:gap-6">
            <!-- Sidebar -->
            <div class="lg:col-span-1 space-y-4 md:space-y-6">
                <!-- Patient Profile Card -->
                <div class="bg-white shadow-sm rounded-lg border border-gray-200">
                    <div class="p-4 md:p-6">
                        <div class="flex flex-col items-center text-center">
                            <div class="h-16 w-16 md:h-20 md:w-20 bg-indigo-100 rounded-full flex items-center justify-center mb-3 md:mb-4">
                                <span class="text-indigo-600 font-medium text-lg md:text-xl">
                                    {{ strtoupper(substr($patient->name, 0, 1)) }}
                                </span>
                            </div>
                            <h2 class="text-base md:text-lg font-bold text-gray-900">{{ $patient->name }}</h2>
                            <p class="text-gray-500 text-xs md:text-sm mt-1">Patient</p>
                            
                            <div class="mt-3 md:mt-4 w-full space-y-2">
                                <div class="flex justify-between text-xs md:text-sm">
                                    <span class="text-gray-500">Patient ID:</span>
                                    <span class="text-gray-900 font-medium">#{{ $patient->id }}</span>
                                </div>
                                <div class="flex justify-between text-xs md:text-sm">
                                    <span class="text-gray-500">Total Appointments:</span>
                                    <span class="text-gray-900 font-medium">{{ $appointmentsCount }}</span>
                                </div>
                                <div class="flex justify-between text-xs md:text-sm">
                                    <span class="text-gray-500">Member Since:</span>
                                    <span class="text-gray-900">{{ $patient->created_at->format('M Y') }}</span>
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
                        @if($patient->email)
                        <div class="flex items-center text-xs md:text-sm">
                            <svg class="w-4 h-4 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-gray-900 break-all">{{ $patient->email }}</span>
                        </div>
                        @endif

                        @if($patient->phone)
                        <div class="flex items-center text-xs md:text-sm">
                            <svg class="w-4 h-4 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span class="text-gray-900">{{ $patient->phone }}</span>
                        </div>
                        @endif

                        @if($patient->gender)
                        <div class="flex items-center text-xs md:text-sm">
                            <svg class="w-4 h-4 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span class="text-gray-900 capitalize">{{ $patient->gender }}</span>
                        </div>
                        @endif

                        @if($patient->age)
                        <div class="flex items-center text-xs md:text-sm">
                            <svg class="w-4 h-4 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="text-gray-900">{{ $patient->age }} years old</span>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="bg-white shadow-sm rounded-lg border border-gray-200">
                    <div class="px-4 py-3 md:px-6 md:py-4 border-b border-gray-200">
                        <h3 class="text-base md:text-lg font-medium text-gray-900">Quick Stats</h3>
                    </div>
                    <div class="p-4 md:p-6 space-y-4">
                        <div class="text-center">
                            <div class="text-xl md:text-2xl font-bold text-indigo-600">{{ $appointmentsCount }}</div>
                            <div class="text-xs md:text-sm text-gray-500">Total Appointments</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl md:text-2xl font-bold text-green-600">{{ $upcomingAppointments->count() }}</div>
                            <div class="text-xs md:text-sm text-gray-500">Upcoming Appointments</div>
                        </div>
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
                            <button wire:click="setActiveTab('appointments')"
                                    class="@if($activeTab === 'appointments') border-indigo-500 text-indigo-600 @else border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 @endif whitespace-nowrap py-3 md:py-4 px-4 md:px-6 border-b-2 font-medium text-xs md:text-sm flex-1 sm:flex-none text-center">
                                Appointments ({{ $appointmentsCount }})
                            </button>
                        </nav>
                    </div>

                    <!-- Tab Content -->
                    <div class="p-4 md:p-6">
                        <!-- Overview Tab -->
                        @if($activeTab === 'overview')
                        <div class="space-y-4 md:space-y-6">
                            <!-- Upcoming Appointments -->
                            @if($upcomingAppointments->count() > 0)
                            <div>
                                <h3 class="text-base md:text-lg font-medium text-gray-900 mb-3 md:mb-4">Upcoming Appointments</h3>
                                <div class="space-y-2 md:space-y-3">
                                    @foreach($upcomingAppointments as $appointment)
                                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between p-3 md:p-4 bg-gray-50 rounded-lg border border-gray-200">
                                        <div class="mb-2 sm:mb-0">
                                            <div class="flex flex-wrap items-center gap-2">
                                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                                    @if($appointment->status === 'pending') bg-yellow-100 text-yellow-800
                                                    @elseif($appointment->status === 'scheduled') bg-purple-100 text-purple-800
                                                    @else bg-gray-100 text-gray-800
                                                    @endif">
                                                    {{ ucfirst($appointment->status) }}
                                                </span>
                                                @if($appointment->doctor)
                                                <span class="text-sm text-gray-900">Dr. {{ $appointment->doctor->user->name }}</span>
                                                @endif
                                            </div>
                                            <div class="mt-1 text-xs md:text-sm text-gray-500">
                                                {{ $appointment->appointment_date->format('F j, Y') }}
                                                @if($appointment->appointment_time)
                                                    at {{ $appointment->appointment_time->format('h:i A') }}
                                                @endif
                                            </div>
                                        </div>
                                        <a href="{{ route('admin.appointments.view', $appointment->id) }}" 
                                           class="text-indigo-600 hover:text-indigo-900 text-sm font-medium self-start sm:self-center mt-2 sm:mt-0">
                                            View
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @else
                            <div class="text-center py-6 md:py-8">
                                <svg class="mx-auto h-10 w-10 md:h-12 md:w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <h3 class="mt-2 text-sm font-medium text-gray-900">No upcoming appointments</h3>
                                <p class="mt-1 text-xs md:text-sm text-gray-500">This patient has no scheduled appointments.</p>
                            </div>
                            @endif

                            <!-- Patient Information -->
                            <div>
                                <h3 class="text-base md:text-lg font-medium text-gray-900 mb-3 md:mb-4">Patient Information</h3>
                                <div class="bg-gray-50 rounded-lg p-4 md:p-6">
                                    <dl class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-4 text-xs md:text-sm">
                                        <div>
                                            <dt class="font-medium text-gray-500">Full Name</dt>
                                            <dd class="text-gray-900 mt-1">{{ $patient->name }}</dd>
                                        </div>
                                        <div>
                                            <dt class="font-medium text-gray-500">Patient ID</dt>
                                            <dd class="text-gray-900 mt-1">#{{ $patient->id }}</dd>
                                        </div>
                                        @if($patient->email)
                                        <div>
                                            <dt class="font-medium text-gray-500">Email Address</dt>
                                            <dd class="text-gray-900 mt-1 break-all">{{ $patient->email }}</dd>
                                        </div>
                                        @endif
                                        @if($patient->phone)
                                        <div>
                                            <dt class="font-medium text-gray-500">Phone Number</dt>
                                            <dd class="text-gray-900 mt-1">{{ $patient->phone }}</dd>
                                        </div>
                                        @endif
                                        @if($patient->gender)
                                        <div>
                                            <dt class="font-medium text-gray-500">Gender</dt>
                                            <dd class="text-gray-900 mt-1 capitalize">{{ $patient->gender }}</dd>
                                        </div>
                                        @endif
                                        @if($patient->age)
                                        <div>
                                            <dt class="font-medium text-gray-500">Age</dt>
                                            <dd class="text-gray-900 mt-1">{{ $patient->age }} years old</dd>
                                        </div>
                                        @endif
                                        <div>
                                            <dt class="font-medium text-gray-500">Member Since</dt>
                                            <dd class="text-gray-900 mt-1">{{ $patient->created_at->format('F j, Y') }}</dd>
                                        </div>
                                        <div>
                                            <dt class="font-medium text-gray-500">Last Updated</dt>
                                            <dd class="text-gray-900 mt-1">{{ $patient->updated_at->format('F j, Y') }}</dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Appointments Tab -->
                        @if($activeTab === 'appointments')
                        <div>
                            @if($appointments->count() > 0)
                            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-lg">
                                <div class="overflow-x-auto">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date & Time</th>
                                                <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Doctor</th>
                                                <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                                <th class="px-4 md:px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach($appointments as $appointment)
                                            <tr class="hover:bg-gray-50">
                                                <td class="px-4 md:px-6 py-4 whitespace-nowrap">
                                                    <div class="text-xs md:text-sm text-gray-900">{{ $appointment->appointment_date->format('M j, Y') }}</div>
                                                    @if($appointment->appointment_time)
                                                    <div class="text-xs md:text-sm text-gray-500">{{ $appointment->appointment_time->format('h:i A') }}</div>
                                                    @endif
                                                </td>
                                                <td class="px-4 md:px-6 py-4 whitespace-nowrap">
                                                    @if($appointment->doctor)
                                                    <div class="text-xs md:text-sm text-gray-900">Dr. {{ $appointment->doctor->user->name }}</div>
                                                    <div class="text-xs md:text-sm text-gray-500">{{ $appointment->doctor->department->name }}</div>
                                                    @else
                                                    <span class="text-xs md:text-sm text-gray-400">Not assigned</span>
                                                    @endif
                                                </td>
                                                <td class="px-4 md:px-6 py-4 whitespace-nowrap">
                                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                                        @if($appointment->status === 'pending') bg-yellow-100 text-yellow-800
                                                        @elseif($appointment->status === 'scheduled') bg-purple-100 text-purple-800
                                                        @elseif($appointment->status === 'completed') bg-green-100 text-green-800
                                                        @elseif($appointment->status === 'cancelled') bg-red-100 text-red-800
                                                        @else bg-gray-100 text-gray-800
                                                        @endif">
                                                        {{ ucfirst($appointment->status) }}
                                                    </span>
                                                </td>
                                                <td class="px-4 md:px-6 py-4 whitespace-nowrap text-right text-xs md:text-sm font-medium">
                                                    <a href="{{ route('admin.appointments.view', $appointment->id) }}" 
                                                       class="text-indigo-600 hover:text-indigo-900">View</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <div class="mt-3 md:mt-4">
                                {{ $appointments->links() }}
                            </div>
                            @else
                            <div class="text-center py-6 md:py-8">
                                <svg class="mx-auto h-10 w-10 md:h-12 md:w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <h3 class="mt-2 text-sm font-medium text-gray-900">No appointments found</h3>
                                <p class="mt-1 text-xs md:text-sm text-gray-500">This patient has no appointment history.</p>
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
            <h3 class="mt-2 text-sm font-medium text-gray-900">Patient not found</h3>
            <p class="mt-1 text-xs md:text-sm text-gray-500">The patient you're looking for doesn't exist.</p>
            <div class="mt-4 md:mt-6">
                <a wire:navigate href="{{ route('admin.patients') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    Back to Patients
                </a>
            </div>
        </div>
        @endif
    </div>
</div>