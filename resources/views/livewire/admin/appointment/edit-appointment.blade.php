<div class="max-w-4xl mx-auto p-6">
    <!-- Header -->
    <div class="border-b border-gray-200 pb-4 mb-6">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">Edit Appointment</h2>
                <p class="text-sm text-gray-600 mt-1">Update appointment and patient details</p>
            </div>
            <a wire:navigate 
               href="{{ route('admin.appointments.list') }}" 
               class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-500">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Appointments
            </a>
        </div>
    </div>

    <!-- Current Appointment Info -->
    <div class="bg-purple-50 border border-purple-200 rounded-lg p-4 mb-6">
        <h3 class="text-lg font-medium text-purple-900 mb-2">Current Appointment Details</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
            <div>
                <span class="font-medium text-purple-700">Patient:</span>
                <span class="text-purple-600">{{ $appointment->patient->name }}</span>
            </div>
            <div>
                <span class="font-medium text-purple-700">Doctor:</span>
                <span class="text-purple-600">{{ $appointment->doctor ? $appointment->doctor->name : 'Not assigned' }}</span>
            </div>
            <div>
                <span class="font-medium text-purple-700">Status:</span>
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
        </div>
    </div>

    <!-- Form -->
    <form wire:submit="save" class="space-y-6">
        <!-- Patient Information -->
        <div class="bg-white border border-gray-200 rounded-lg p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Patient Information</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="patient_name" class="block text-sm font-medium text-gray-700 mb-1">
                        Patient Name
                    </label>
                    <input type="text" 
                           wire:model="patient_name" 
                           id="patient_name"
                           placeholder="Enter patient name"
                           readonly
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 bg-gray-100 cursor-not-allowed @error('patient_name') border-red-500 @enderror">
                    @error('patient_name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="patient_email" class="block text-sm font-medium text-gray-700 mb-1">
                        Email Address <span class="text-red-500">*</span>
                    </label>
                    <input type="email" 
                           wire:model="patient_email" 
                           id="patient_email"
                           placeholder="Enter email address"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('patient_email') border-red-500 @enderror">
                    @error('patient_email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="patient_phone" class="block text-sm font-medium text-gray-700 mb-1">
                        Phone Number
                    </label>
                    <input type="text" 
                           wire:model="patient_phone" 
                           id="patient_phone"
                           placeholder="Enter phone number"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('patient_phone') border-red-500 @enderror">
                    @error('patient_phone')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="patient_gender" class="block text-sm font-medium text-gray-700 mb-1">
                        Gender
                    </label>
                    <select wire:model="patient_gender" 
                            id="patient_gender"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('patient_gender') border-red-500 @enderror">
                        <option value="">Select gender...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    @error('patient_gender')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="patient_age" class="block text-sm font-medium text-gray-700 mb-1">
                        Age
                    </label>
                    <input type="number" 
                           wire:model="patient_age" 
                           id="patient_age"
                           placeholder="Enter age"
                           min="1" 
                           max="150"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('patient_age') border-red-500 @enderror">
                    @error('patient_age')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Appointment Details -->
        <div class="bg-white border border-gray-200 rounded-lg p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Appointment Details</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="doctor_id" class="block text-sm font-medium text-gray-700 mb-1">
                        Assign Doctor
                    </label>
                    <select wire:model="doctor_id" 
                            id="doctor_id"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('doctor_id') border-red-500 @enderror">
                        <option value="">Select a doctor...</option>
                        @foreach($doctors as $doctor)
                            <option value="{{ $doctor->id }}">
                                {{ $doctor->name }} - {{ $doctor->department->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('doctor_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">
                        Status <span class="text-red-500">*</span>
                    </label>
                    <select wire:model="status" 
                            id="status"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('status') border-red-500 @enderror">
                        <option value="pending">Pending</option>
                        <option value="scheduled">Scheduled</option>
                        <option value="completed">Completed</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                    @error('status')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="appointment_date" class="block text-sm font-medium text-gray-700 mb-1">
                        Appointment Date <span class="text-red-500">*</span>
                    </label>
                    <input type="date" 
                           wire:model="appointment_date" 
                           id="appointment_date"
                           min="{{ now()->format('Y-m-d') }}"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('appointment_date') border-red-500 @enderror">
                    @error('appointment_date')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="appointment_time" class="block text-sm font-medium text-gray-700 mb-1">
                        Appointment Time
                    </label>
                    <input type="time" 
                           wire:model="appointment_time" 
                           id="appointment_time"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('appointment_time') border-red-500 @enderror">
                    @error('appointment_time')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:col-span-2">
                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">
                        Notes
                    </label>
                    <textarea wire:model="notes" 
                              id="notes"
                              rows="3"
                              placeholder="Enter any additional notes..."
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('notes') border-red-500 @enderror"></textarea>
                    @error('notes')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Form Actions -->
        <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
            <a wire:navigate 
               href="{{ route('admin.appointments.list') }}" 
               class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-md transition-colors focus:outline-none focus:ring-2 focus:ring-gray-300">
                Cancel
            </a>
            <button type="submit" 
                    class="px-6 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md transition-colors focus:outline-none focus:ring-2 focus:ring-purple-500">
                <span wire:loading.remove>Update Appointment</span>
                <span wire:loading class="flex items-center">
                    <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Updating...
                </span>
            </button>
        </div>
    </form>
</div>