<div class="max-w-2xl mx-auto p-6">
    <!-- Header Card -->
    <div class="bg-white rounded-lg border border-gray-200 mb-6">
        <div class="border-b border-gray-200">
            <div class="p-4 sm:p-6 flex items-center justify-between">
                <div class="flex items-center">
                    <div class="p-2 mr-4 text-[#a53692]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-gray-900">
                            {{ $isEditing ? 'Edit Department' : 'Create Department' }}
                        </h2>
                        <p class="text-sm text-gray-500">
                            {{ $isEditing ? 'Update department information' : 'Add a new department to your hospital' }}
                        </p>
                    </div>
                   
                </div>
                <button wire:click="cancel" class="p-2 text-gray-400 hover:text-gray-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        @if ($errors->has('general'))
            <div class="mx-6 mt-4 p-4 bg-red-50 border border-red-200 text-red-700 rounded-md">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="ml-1">{{ $errors->first('general') }}</span>
                </div>
            </div>
        @endif

        <div class="p-4 sm:p-6">
            <form wire:submit="save" class="space-y-6">
                <!-- Department Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-[#a53692]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1" />
                        </svg>
                        Department Name <span class="text-red-500 ml-1">*</span>
                    </label>
                    <div class="relative">
                        <input type="text" wire:model.live.debounce.300ms="name" id="name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#a53692] focus:border-[#a53692] transition-colors @error('name') border-red-300 focus:ring-red-500 focus:border-red-500 @enderror"
                            placeholder="e.g. Gynecology, Pediatrics, Cardiology">
                    </div>
                    @error('name')
                        <p class="mt-1.5 text-sm text-red-600 flex items-center">
                            <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                    <p class="mt-1.5 text-xs text-gray-500">
                        The department name will be automatically converted to a slug for URLs.
                    </p>
                </div>

                <!-- Preview Slug -->
                @if ($name)
                    <div class="bg-gray-50 p-3 rounded-md border border-gray-200">
                        <div class="text-xs font-medium text-gray-500 uppercase tracking-wide">Generated Slug</div>
                        <div class="mt-1 text-sm font-mono text-gray-700">{{ \Illuminate\Support\Str::slug($name) }}
                        </div>
                    </div>
                @endif

                <!-- Department Status -->
                <div class="bg-white p-4 rounded-md border border-gray-200">
                    <label class="flex items-center justify-between cursor-pointer">
                        <div class="flex items-center">
                            <div class="mr-3 text-[#a53692]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-sm font-medium text-gray-900">Department Status</span>
                                <p class="text-xs text-gray-500 mt-1">
                                    {{ $status ? 'This department is currently active and visible to patients' : 'This department is currently inactive and hidden from patients' }}
                                </p>
                            </div>
                        </div>
                        <div class="relative">
                            <button type="button" wire:click="$set('status', {{ $status ? 'false' : 'true' }})"
                                class="relative inline-flex h-6 w-11 items-center rounded-full transition-colors focus:outline-none focus:ring-1 {{ $status ? 'bg-[#a53692]' : 'bg-gray-200' }}">
                                <span
                                    class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform {{ $status ? 'translate-x-6' : 'translate-x-1' }}"></span>
                            </button>
                        </div>
                    </label>
                </div>

                <!-- Form Actions -->
                <div
                    class="flex flex-col sm:flex-row justify-end space-y-3 sm:space-y-0 sm:space-x-3 pt-6 border-t border-gray-200">
                    <button type="button" wire:click="cancel"
                        class="px-5 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-1 focus:ring-gray-300 transition-colors">
                        Cancel
                    </button>
                    <button type="submit"
                        class="px-5 py-2 text-sm font-medium text-white bg-[#a53692] rounded-md hover:bg-[#8c2d7c] focus:outline-none focus:ring-1 focus:ring-[#a53692] transition-colors flex items-center justify-center disabled:opacity-50 disabled:cursor-not-allowed"
                        wire:loading.attr="disabled">
                        <span wire:loading.remove class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ $isEditing ? 'Update Department' : 'Create Department' }}
                        </span>
                        <span wire:loading class="flex items-center">
                            <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none"
                                viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                    stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </span>

                    </button>
                </div>


            </form>
        </div>
    </div>

    <!-- Information Card -->
    <div class="bg-blue-50 border border-blue-200 rounded-md p-4 text-sm text-blue-700">
        <div class="flex">
            <svg class="h-5 w-5 text-blue-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                <p class="font-medium mb-1">Department Information</p>
                <p class="text-blue-600">Departments help organize doctors by specialty. Each doctor can be assigned to
                    a department, which helps patients find specialists more easily.</p>
            </div>
        </div>
    </div>
</div>
