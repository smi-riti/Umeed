<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header with Breadcrumb -->
        <div class="mb-6">
            <nav class="sm:hidden">
                <a href="" class="flex items-center text-sm text-gray-500 hover:text-gray-700 mb-4">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Back to Appointments
                </a>
            </nav>
            <nav class="hidden sm:flex items-center space-x-2 text-sm text-gray-500 mb-4">
                <a href="{{ route('admin.dashboard') }}" class="hover:text-gray-700">Dashboard</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <a href="{{ route('admin.appointments.list') }}" class="text-gray-900">Appointment List</a>
                 <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>

                <span class="hover:text-gray-700 text-purple-600"> View Appointments</span>
               
            </nav>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Appointment Details</h1>
                    <p class="text-gray-600 mt-1">Appointment ID: #{{ $appointment->id }}</p>
                </div>
                <div class="mt-4 sm:mt-0 flex space-x-3">
                    <button wire:click="deleteAppointment" 
                            wire:confirm="Are you sure you want to delete this appointment?"
                            class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                        Delete Appointment
                    </button>
                </div>
            </div>
        </div>

        <!-- Flash Messages -->
        <div class="mb-6">
            @if (session()->has('message'))
                <div class="p-4 bg-green-50 border border-green-200 rounded-md">
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
        </div>

        @if($appointment)
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Appointment Information Card -->
                <div class="bg-white shadow-sm rounded-lg border border-gray-200">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Appointment Information</h3>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-500">Status</label>
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full mt-1
                                        @if($appointment->status === 'pending') bg-yellow-100 text-yellow-800
                                        @elseif($appointment->status === 'scheduled') bg-purple-100 text-purple-800
                                        @elseif($appointment->status === 'completed') bg-green-100 text-green-800
                                        @elseif($appointment->status === 'cancelled') bg-red-100 text-red-800
                                        @else bg-gray-100 text-gray-800
                                        @endif">
                                        {{ ucfirst($appointment->status) }}
                                    </span>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-500">Appointment Date</label>
                                    <p class="text-sm text-gray-900 mt-1">{{ $appointment->appointment_date->format('F j, Y') }}</p>
                                    @if($appointment->original_date)
                                        <p class="text-xs text-gray-500 mt-1">
                                            Originally scheduled for: {{ $appointment->original_date->format('F j, Y') }}
                                        </p>
                                    @endif
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-500">Appointment Time</label>
                                    <p class="text-sm text-gray-900 mt-1">
                                        {{ $appointment->appointment_time ? $appointment->appointment_time->format('h:i A') : 'Not specified' }}
                                    </p>
                                </div>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-500">Assigned Doctor</label>
                                    <p class="text-sm text-gray-900 mt-1">
                                        @if($appointment->doctor)
                                            Dr. {{ $appointment->doctor->user->name }}
                                            <span class="text-gray-500 block text-xs">{{ $appointment->doctor->department->name }}</span>
                                        @else
                                            <span class="text-gray-400">Not assigned</span>
                                        @endif
                                    </p>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-500">Created By</label>
                                    <p class="text-sm text-gray-900 mt-1">
                                        {{ $appointment->createdBy->name ?? 'System' }}
                                    </p>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-500">Created On</label>
                                    <p class="text-sm text-gray-900 mt-1">{{ $appointment->created_at->format('F j, Y g:i A') }}</p>
                                </div>
                            </div>
                        </div>

                        @if($appointment->notes)
                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <label class="block text-sm font-medium text-gray-500 mb-2">Notes</label>
                            <p class="text-sm text-gray-700 bg-gray-50 p-4 rounded-md">{{ $appointment->notes }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Patient Information Card -->
                <div class="bg-white shadow-sm rounded-lg border border-gray-200">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Patient Information</h3>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-12 w-12 bg-indigo-100 rounded-full flex items-center justify-center">
                                <span class="text-indigo-600 font-medium text-sm">
                                    {{ strtoupper(substr($appointment->patient->name, 0, 1)) }}
                                </span>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-gray-900">{{ $appointment->patient->name }}</h4>
                                <div class="flex flex-wrap gap-4 mt-1 text-sm text-gray-500">
                                    @if($appointment->patient->email)
                                        <span class="flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                            {{ $appointment->patient->email }}
                                        </span>
                                    @endif
                                    @if($appointment->patient->phone)
                                        <span class="flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                            </svg>
                                            {{ $appointment->patient->phone }}
                                        </span>
                                    @endif
                                    @if($appointment->patient->gender)
                                        <span class="capitalize">{{ $appointment->patient->gender }}</span>
                                    @endif
                                    @if($appointment->patient->age)
                                        <span>{{ $appointment->patient->age }} years old</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Quick Actions -->
                <div class="bg-white shadow-sm rounded-lg border border-gray-200">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Quick Actions</h3>
                    </div>
                    <div class="p-6 space-y-3">
                        <a href="" 
                           class="w-full flex items-center justify-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            View Patient Profile
                        </a>

                        <a href="" 
                           class="w-full flex items-center justify-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            Back to Appointments
                        </a>
                    </div>
                </div>

                <!-- Appointment History -->
                <div class="bg-white shadow-sm rounded-lg border border-gray-200">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Appointment History</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-2 w-2 bg-green-500 rounded-full mt-2"></div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">Appointment Created</p>
                                    <p class="text-sm text-gray-500">{{ $appointment->created_at->format('M j, Y g:i A') }}</p>
                                </div>
                            </div>
                            
                            @if($appointment->original_date)
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-2 w-2 bg-blue-500 rounded-full mt-2"></div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">Appointment Rescheduled</p>
                                    <p class="text-sm text-gray-500">
                                        From {{ $appointment->original_date->format('M j, Y') }} to {{ $appointment->appointment_date->format('M j, Y') }}
                                    </p>
                                </div>
                            </div>
                            @endif
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-2 w-2 bg-purple-500 rounded-full mt-2"></div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">Last Updated</p>
                                    <p class="text-sm text-gray-500">{{ $appointment->updated_at->format('M j, Y g:i A') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Status Information -->
                <div class="bg-white shadow-sm rounded-lg border border-gray-200">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Status Information</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-500">Current Status:</span>
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full
                                    @if($appointment->status === 'pending') bg-yellow-100 text-yellow-800
                                    @elseif($appointment->status === 'scheduled') bg-purple-100 text-purple-800
                                    @elseif($appointment->status === 'completed') bg-green-100 text-green-800
                                    @elseif($appointment->status === 'cancelled') bg-red-100 text-red-800
                                    @else bg-gray-100 text-gray-800
                                    @endif">
                                    {{ ucfirst($appointment->status) }}
                                </span>
                            </div>
                            
                            @if($appointment->status === 'scheduled')
                            <div class="bg-blue-50 border border-blue-200 rounded-md p-3">
                                <p class="text-sm text-blue-800">
                                    This appointment is scheduled for 
                                    <strong>{{ $appointment->appointment_date->format('F j, Y') }}</strong>
                                    @if($appointment->appointment_time)
                                        at <strong>{{ $appointment->appointment_time->format('h:i A') }}</strong>
                                    @endif
                                </p>
                            </div>
                            @endif

                            @if($appointment->status === 'completed')
                            <div class="bg-green-50 border border-green-200 rounded-md p-3">
                                <p class="text-sm text-green-800">
                                    This appointment was completed successfully.
                                </p>
                            </div>
                            @endif

                            @if($appointment->status === 'cancelled')
                            <div class="bg-red-50 border border-red-200 rounded-md p-3">
                                <p class="text-sm text-red-800">
                                    This appointment has been cancelled.
                                </p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="bg-white shadow-sm rounded-lg border border-gray-200 p-8 text-center">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            <h3 class="mt-2 text-sm font-medium text-gray-900">Appointment not found</h3>
            <p class="mt-1 text-sm text-gray-500">The appointment you're looking for doesn't exist.</p>
            <div class="mt-6">
                <a href="" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    Back to Appointments
                </a>
            </div>
        </div>
        @endif
    </div>
</div>

<script>
document.addEventListener('livewire:initialized', () => {
    Livewire.on('appointment-deleted', (event) => {
        // Redirect happens in the component
        alert(event.message);
    });
});
</script>