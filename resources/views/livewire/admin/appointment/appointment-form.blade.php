<div class="max-w-4xl mx-auto p-6">
    <!-- Header -->
    <div class="border-b border-gray-200 px-6 py-4 mb-6">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold text-gray-900">
                    {{ $appointmentId ? 'Edit Appointment' : 'Create New Appointment' }}
                </h2>
                <p class="text-sm text-gray-600">
                    {{ $appointmentId ? 'Update appointment details' : 'Schedule a new patient appointment' }}
                </p>
            </div>
            <a wire:navigate 
               href="{{ route('admin.appointments.list') }}"
               class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-500">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to List
            </a>
        </div>
    </div>

    <!-- Flash Messages -->
    @if (session()->has('message'))
        <div class="mx-6 mb-6 p-4 bg-green-50 border border-green-200 rounded-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800">
                        {{ session('message') }}
                    </p>
                </div>
            </div>
        </div>
    @endif

    <!-- Form -->
    <form wire:submit="save" class="space-y-6">
        <div class="bg-white  px-6 py-6 rounded-lg">
            <!-- Patient Selection Toggle -->
            <div class="mb-6">
                <label class="flex items-center">
                    <input type="checkbox" wire:model.live="use_existing_patient" class="rounded border-gray-300 text-purple-600 focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-50">
                    <span class="ml-2 text-sm text-gray-600">Use existing patient</span>
                </label>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @if($use_existing_patient)
                    <!-- Existing Patient Selection -->
                    <div class="md:col-span-2">
                        <label for="existing_patient_id" class="block text-sm font-medium text-gray-700 mb-2">
                            Select Patient <span class="text-red-500">*</span>
                        </label>
                        <select wire:model="existing_patient_id" 
                                id="existing_patient_id"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('existing_patient_id') border-red-500 @enderror">
                            <option value="">Select a patient...</option>
                            @foreach($patients as $patient)
                                <option value="{{ $patient->id }}">
                                    {{ $patient->name }} - {{ $patient->email }} 
                                    @if($patient->phone) ({{ $patient->phone }}) @endif
                                </option>
                            @endforeach
                        </select>
                        @error('existing_patient_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                @else
                    <!-- New Patient Fields -->
                    <div>
                        <label for="patient_name" class="block text-sm font-medium text-gray-700 mb-2">
                            Patient Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               wire:model="patient_name" 
                               id="patient_name"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('patient_name') border-red-500 @enderror"
                               placeholder="Enter patient name">
                        @error('patient_name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="patient_email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email Address <span class="text-red-500">*</span>
                        </label>
                        <input type="email" 
                               wire:model="patient_email" 
                               id="patient_email"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('patient_email') border-red-500 @enderror"
                               placeholder="Enter email address">
                        @error('patient_email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="patient_phone" class="block text-sm font-medium text-gray-700 mb-2">
                            Phone Number
                        </label>
                        <input type="text" 
                               wire:model="patient_phone" 
                               id="patient_phone"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('patient_phone') border-red-500 @enderror"
                               placeholder="Enter phone number">
                        @error('patient_phone')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="patient_gender" class="block text-sm font-medium text-gray-700 mb-2">
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
                        <label for="patient_age" class="block text-sm font-medium text-gray-700 mb-2">
                            Age
                        </label>
                        <input type="number" 
                               wire:model="patient_age" 
                               id="patient_age"
                               min="1" 
                               max="150"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('patient_age') border-red-500 @enderror"
                               placeholder="Enter age">
                        @error('patient_age')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                @endif
            </div>
        </div>

        <!-- Appointment Details -->
        <div class="bg-white  px-6 py-6 rounded-lg">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Appointment Details</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="doctor_id" class="block text-sm font-medium text-gray-700 mb-2">
                        Doctor
                    </label>
                    <select wire:model="doctor_id" 
                            id="doctor_id"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('doctor_id') border-red-500 @enderror">
                        <option value="">Select a doctor (optional)...</option>
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
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-2">
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
                    <label for="appointment_date" class="block text-sm font-medium text-gray-700 mb-2">
                        Appointment Date <span class="text-red-500">*</span>
                    </label>
                    <input type="date" 
                           wire:model="appointment_date" 
                           id="appointment_date"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('appointment_date') border-red-500 @enderror">
                    @error('appointment_date')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="appointment_time" class="block text-sm font-medium text-gray-700 mb-2">
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
                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-2">
                        Notes
                    </label>
                    <textarea wire:model="notes" 
                              id="notes"
                              rows="3"
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('notes') border-red-500 @enderror"
                              placeholder="Add any additional notes..."></textarea>
                    @error('notes')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex items-center justify-end space-x-3 pt-6 border-t border-gray-200">
            <a wire:navigate 
               href="{{ route('admin.appointments.list') }}"
               class="px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-500">
                Cancel
            </a>
            <button type="submit" 
                    class="px-4 py-2 bg-purple-600 text-white text-sm font-medium rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 disabled:opacity-50 disabled:cursor-not-allowed"
                    wire:loading.attr="disabled">
                <span wire:loading.remove>
                    {{ $appointmentId ? 'Update Appointment' : 'Create Appointment' }}
                </span>
                <span wire:loading>
                    <svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Processing...
                </span>
            </button>
        </div>
    </form>

    @if(!$use_existing_patient)
        <div class="mt-6 p-4 bg-purple-50 border border-purple-200 rounded-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-purple-800">
                        New Patient Information
                    </h3>
                    <div class="mt-2 text-sm text-purple-700">
                        <p>A new user account will be created for this patient with the role 'patient'. The default password will be 'password123'. Please inform the patient to change their password upon first login.</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>