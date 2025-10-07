<div>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Testimonials Management</h2>
                <p class="mt-1 text-sm text-gray-600">Create and manage patient testimonials.</p>
            </div>

            <!-- Success/Error Messages -->
            @if (session()->has('success'))
                <div class="mb-4 p-4 bg-green-50 border border-green-200 rounded-md">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            @if (session()->has('error'))
                <div class="mb-4 p-4 bg-red-50 border border-red-200 rounded-md">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-red-800">{{ session('error') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Create Form -->
                <div class="lg:col-span-1">
                    <div class="bg-white shadow-sm rounded-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Create New Testimonial</h3>
                            <form wire:submit.prevent="save" class="space-y-4">
                                <!-- Patient Name -->
                                <div>
                                    <label for="patient_name" class="block text-sm font-medium text-gray-700">Patient Name *</label>
                                    <input 
                                        type="text" 
                                        id="patient_name"
                                        wire:model="patient_name"
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('patient_name') border-red-300 @enderror"
                                        placeholder="Enter patient name"
                                    >
                                    @error('patient_name')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Patient Location -->
                                <div>
                                    <label for="patient_location" class="block text-sm font-medium text-gray-700">Patient Location *</label>
                                    <input 
                                        type="text" 
                                        id="patient_location"
                                        wire:model="patient_location"
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('patient_location') border-red-300 @enderror"
                                        placeholder="Enter patient location"
                                    >
                                    @error('patient_location')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Rating -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Rating *</label>
                                    <div class="flex items-center space-x-1">
                                        @for($i = 1; $i <= 5; $i++)
                                            <button 
                                                type="button"
                                                wire:click="$set('rating', {{ $i }})"
                                                class="focus:outline-none"
                                            >
                                                <svg 
                                                    class="h-6 w-6 {{ $i <= $rating ? 'text-yellow-400' : 'text-gray-300' }}" 
                                                    fill="currentColor" 
                                                    viewBox="0 0 20 20"
                                                >
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                            </button>
                                        @endfor
                                    </div>
                                    @error('rating')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Treatment Type -->
                                <div>
                                    <label for="treatment_type" class="block text-sm font-medium text-gray-700">Treatment Type</label>
                                    <input 
                                        type="text" 
                                        id="treatment_type"
                                        wire:model="treatment_type"
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                        placeholder="Enter treatment type"
                                    >
                                </div>

                                <!-- Review Content -->
                                <div>
                                    <label for="review" class="block text-sm font-medium text-gray-700">Review Content *</label>
                                    <textarea 
                                        id="review"
                                        wire:model="review"
                                        rows="4"
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('review') border-red-300 @enderror"
                                        placeholder="Write the patient's testimonial..."
                                    ></textarea>
                                    @error('review')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Status -->
                                <div>
                                    <label class="flex items-center">
                                        <input 
                                            type="checkbox" 
                                            wire:model="status"
                                            class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                                        >
                                        <span class="ml-2 text-sm text-gray-600">Active testimonial</span>
                                    </label>
                                </div>

                                <!-- Submit Button -->
                                <div>
                                    <button 
                                        type="submit"
                                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                    >
                                        Create Testimonial
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Reviews List -->
                <div class="lg:col-span-2">
                    <div class="bg-white shadow-sm rounded-lg">
                        <div class="p-6">
                            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
                                <h3 class="text-lg font-medium text-gray-900 mb-4 sm:mb-0">All Testimonials</h3>
                                
                                <!-- Search and Filter -->
                                <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2 w-full sm:w-auto">
                                    <input 
                                        type="text" 
                                        wire:model.debounce.300ms="search"
                                        placeholder="Search testimonials..."
                                        class="block w-full sm:w-48 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                    >
                                    <select 
                                        wire:model="statusFilter"
                                        class="block w-full sm:w-32 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                    >
                                        <option value="">All Status</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Reviews Table -->
                            <div class="overflow-hidden">
                                @if($testimonials->count() > 0)
                                    <div class="space-y-4">
                                        @foreach($testimonials as $testimonial)
                                            <div class="border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                                                <div class="flex justify-between items-start mb-2">
                                                    <div>
                                                        <h4 class="font-medium text-gray-900">{{ $testimonial->patient_name }}</h4>
                                                        <p class="text-sm text-gray-600">{{ $testimonial->patient_location }}</p>
                                                    </div>
                                                    <div class="flex items-center space-x-2">
                                                        <!-- Status Badge -->
                                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $testimonial->status ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                            {{ $testimonial->status ? 'Active' : 'Inactive' }}
                                                        </span>
                                                        
                                                        <!-- Rating -->
                                                        <div class="flex items-center">
                                                            @for($i = 1; $i <= 5; $i++)
                                                                <svg 
                                                                    class="h-4 w-4 {{ $i <= $testimonial->rating ? 'text-yellow-400' : 'text-gray-300' }}" 
                                                                    fill="currentColor" 
                                                                    viewBox="0 0 20 20"
                                                                >
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                                </svg>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>

                                                @if($testimonial->treatment_type)
                                                    <p class="text-sm text-blue-600 mb-2">
                                                        Treatment: {{ $testimonial->treatment_type }}
                                                    </p>
                                                @endif

                                                <p class="text-gray-700 text-sm mb-3">{{ $testimonial->review }}</p>

                                                <div class="flex justify-between items-center text-xs text-gray-500">
                                                    <span>Created: {{ $testimonial->created_at->format('M d, Y') }}</span>
                                                    
                                                    <div class="flex space-x-2">
                                                        <!-- Toggle Status Button -->
                                                        <button 
                                                            wire:click="toggleStatus({{ $testimonial->id }})"
                                                            class="text-blue-600 hover:text-blue-800 text-sm font-medium"
                                                        >
                                                            {{ $testimonial->status ? 'Deactivate' : 'Activate' }}
                                                        </button>
                                                        
                                                        <!-- Delete Button -->
                                                        <button 
                                                            wire:click="deleteTestimonial({{ $testimonial->id }})"
                                                            wire:confirm="Are you sure you want to delete this testimonial?"
                                                            class="text-red-600 hover:text-red-800 text-sm font-medium"
                                                        >
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Pagination -->
                                    <div class="mt-6">
                                        {{ $testimonials->links() }}
                                    </div>
                                @else
                                    <div class="text-center py-8">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                        </svg>
                                        <h3 class="mt-2 text-sm font-medium text-gray-900">No testimonials</h3>
                                        <p class="mt-1 text-sm text-gray-500">Get started by creating a new testimonial.</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>