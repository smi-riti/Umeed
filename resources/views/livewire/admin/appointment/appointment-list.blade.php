<div class="max-w-7xl mx-auto p-6">
    <!-- Header -->
    <div class="bg-white border border-gray-200 rounded-lg px-6 py-6 mb-6">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Appointment Management</h2>
                <p class="text-gray-500 mt-1">Schedule and manage patient appointments</p>
            </div>
          
        </div>
    </div>

    <!-- Search and Filters -->
    <div class="bg-white border border-gray-200 rounded-lg px-6 py-5 mb-6">
        <h3 class="text-lg font-medium text-gray-700 mb-4 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#a53692]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
            </svg>
            Filter Appointments
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-4">
            <!-- Search -->
            <div class="lg:col-span-2">
                <input wire:model.live="search" 
                       type="text" 
                       placeholder="Search patients..."
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#a53692] focus:border-[#a53692] transition-colors">
            </div>
            
            <!-- Status Filter -->
            <div>
                <select wire:model.live="status" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#a53692] focus:border-[#a53692] transition-colors">
                    <option value="">All Status</option>
                    <option value="pending">Pending</option>
                    <option value="scheduled">Scheduled</option>
                    <option value="completed">Completed</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>
            
            <!-- Doctor Filter -->
            <div>
                <select wire:model.live="doctor_id" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#a53692] focus:border-[#a53692] transition-colors">
                    <option value="">All Doctors</option>
                    @foreach($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <!-- Date From -->
            <div>
                <input wire:model.live="date_from" 
                       type="date" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#a53692] focus:border-[#a53692] transition-colors">
            </div>
            
            <!-- Date To -->
            <div>
                <input wire:model.live="date_to" 
                       type="date" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#a53692] focus:border-[#a53692] transition-colors">
            </div>
        </div>
        
        <!-- Reset Filters -->
        <div class="mt-4">
            <button wire:click="resetFilters" 
                    class="text-sm text-[#a53692] hover:text-[#8c2d7c] transition-colors flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
                Reset Filters
            </button>
        </div>
    </div>

    <!-- Flash Messages -->
    @if (session()->has('message'))
        <div class="mx-6 mb-6 p-4 bg-green-50 border border-green-200 rounded-lg">
            <div class="flex items-center">
                <svg class="h-5 w-5 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <p class="text-sm font-medium text-green-800">
                    {{ session('message') }}
                </p>
            </div>
        </div>
    @endif

    @if (session()->has('error'))
        <div class="mx-6 mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
            <div class="flex items-center">
                <svg class="h-5 w-5 text-red-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                </svg>
                <p class="text-sm font-medium text-red-800">
                    {{ session('error') }}
                </p>
            </div>
        </div>
    @endif

    <!-- Appointments Table -->
    <div class="px-6">
        <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Patient</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Doctor</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date & Time</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($appointments as $appointment)
                        <tr class="hover:bg-gray-50">
                            <!-- Patient Info -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $appointment->patient->name }}</div>
                                        <div class="text-sm text-gray-500">{{ $appointment->patient->email }}</div>
                                        @if($appointment->patient->phone)
                                            <div class="text-sm text-gray-500">{{ $appointment->patient->phone }}</div>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            
                            <!-- Doctor Info -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($appointment->doctor)
                                    <div class="text-sm font-medium text-gray-900">{{ $appointment->doctor->name }}</div>
                                    <div class="text-sm text-gray-500">{{ $appointment->doctor->department->name }}</div>
                                @else
                                    <span class="text-sm text-gray-400">Not assigned</span>
                                @endif
                            </td>
                            
                            <!-- Date & Time -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $appointment->appointment_date->format('M d, Y') }}</div>
                                @if($appointment->appointment_time)
                                    <div class="text-sm text-gray-500">{{ $appointment->appointment_time->format('h:i A') }}</div>
                                @endif
                            </td>
                            
                            <!-- Status -->
                            <td class="px-6 py-4 whitespace-nowrap">
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
                         
                            
                            <!-- Actions -->
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex items-center justify-end space-x-2">
                                    <!-- Status Update Dropdown -->
                                    <div class="relative inline-block text-left">
                                        <select onchange="@this.updateStatus({{ $appointment->id }}, this.value)"
                                                class="text-xs border border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-1 focus:ring-[#a53692]">
                                            <option value="pending" {{ $appointment->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="scheduled" {{ $appointment->status === 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                                            <option value="completed" {{ $appointment->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                            <option value="cancelled" {{ $appointment->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                        </select>
                                    </div>
                                    
                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.appointments.edit', $appointment->id) }}" 
                                       wire:navigate
                                       class="text-indigo-600 hover:text-indigo-900 text-sm">
                                        Edit
                                    </a>
                                    
                                    <!-- Delete Button -->
                                    <button wire:click="deleteAppointment({{ $appointment->id }})" 
                                            class="text-red-600 hover:text-red-900 text-sm">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center">
                                <div class="text-gray-500">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a1 1 0 011-1h6a1 1 0 011 1v4m-9 4h12m-6 0v8"/>
                                    </svg>
                                    <h3 class="mt-2 text-sm font-medium text-gray-900">No appointments found</h3>
                                    <p class="mt-1 text-sm text-gray-500">Get started by creating a new appointment.</p>
                                    <div class="mt-6">
                                        <a wire:navigate href="{{ route('admin.appointments.add') }}" 
                                           class="inline-flex items-center px-4 py-2 border border-transparent  text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700">
                                            Add Appointment
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    @if($appointments->hasPages())
        <div class="px-6 py-4">
            {{ $appointments->links() }}
        </div>
    @endif

    <!-- Delete Confirmation Modal -->
    <livewire:components.delete-confirmation />
</div>