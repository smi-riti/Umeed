<div>
    <div class="container mx-auto px-4 py-6">
        <!-- Header -->
        <div class="bg-white border border-gray-200 rounded-lg mb-8 p-6">
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center">
                <div class="mb-4 lg:mb-0">
                    <h1 class="text-2xl font-bold text-gray-800">Edit Doctor</h1>
                    <p class="text-gray-500 mt-1">Update doctor information for Dr. {{ $doctor->user->name }}</p>
                </div>
                <button wire:click="cancel" 
                        class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-5 py-2 rounded-md font-medium transition-colors flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to List
                </button>
            </div>
        </div>

        <!-- Flash Messages -->
        @if (session()->has('success'))
            <div class="bg-green-50 border border-green-200 p-4 mb-6 rounded-lg">
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-green-400 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        @if (session()->has('error'))
            <div class="bg-red-50 border border-red-200 p-4 mb-6 rounded-lg">
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-red-400 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-sm font-medium text-red-800">{{ session('error') }}</p>
                </div>
            </div>
        @endif

        <!-- Doctor Information Summary Card -->
        <div class="bg-white border border-gray-200 rounded-lg p-5 mb-6">
            <div class="flex flex-col sm:flex-row items-center sm:items-start">
                <div class="w-20 h-20 rounded-full mb-4 sm:mb-0 flex-shrink-0">
                    @if($doctor->image_url)
                        <img class="w-20 h-20 rounded-full object-cover border-2 border-gray-300" 
                             src="{{ $doctor->image_url }}" 
                             alt="{{ $doctor->user->name }}">
                    @else
                        <div class="w-20 h-20 rounded-full flex items-center justify-center text-white font-bold text-xl"
                             style="background-color: {{ $doctor->avatar_color }}">
                            {{ $doctor->initials }}
                        </div>
                    @endif
                </div>
                <div class="sm:ml-5 text-center sm:text-left">
                    <h3 class="text-lg font-medium text-gray-900">Dr. {{ $doctor->user->name }}</h3>
                    <p class="text-sm text-gray-600">{{ $doctor->user->email }}</p>
                    <div class="mt-2 flex flex-wrap gap-2 justify-center sm:justify-start">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                            {{ $doctor->department ? $doctor->department->name : 'No Department' }}
                        </span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $doctor->status ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ $doctor->status ? 'Active' : 'Inactive' }}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form -->
        <div class="bg-white rounded-lg border border-gray-200">
            <form wire:submit="save" class="p-6 space-y-6">
                <div class="mb-6 pb-6 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900 mb-2 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#a53692]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Basic Information
                    </h3>
                    <p class="text-sm text-gray-500">Personal information and account credentials</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Doctor Name <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" 
                                id="name" 
                                wire:model="name" 
                                class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a53692] focus:border-[#a53692] transition-all bg-gray-50 hover:bg-white"
                                placeholder="Enter doctor name">
                        </div>
                        @error('name')
                            <p class="mt-1 text-sm text-red-600 flex items-center">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email Address <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <input type="email" 
                                id="email" 
                                wire:model="email" 
                                class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a53692] focus:border-[#a53692] transition-all bg-gray-50 hover:bg-white"
                                placeholder="doctor@example.com">
                        </div>
                        @error('email')
                            <p class="mt-1 text-sm text-red-600 flex items-center">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            Password <span class="text-gray-500 font-normal">(Leave blank to keep current)</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input type="password" 
                                id="password" 
                                wire:model="password" 
                                autocomplete="new-password"
                                class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a53692] focus:border-[#a53692] transition-all bg-gray-50 hover:bg-white"
                                placeholder="••••••••">
                        </div>
                        @error('password')
                            <p class="mt-1 text-sm text-red-600 flex items-center">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Password Confirmation -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                            Confirm Password
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <input type="password" 
                                id="password_confirmation" 
                                wire:model="password_confirmation" 
                                autocomplete="new-password"
                                class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a53692] focus:border-[#a53692] transition-all bg-gray-50 hover:bg-white"
                                placeholder="••••••••">
                        </div>
                    </div>

                    <!-- Department -->
                    <div>
                        <label for="department_id" class="block text-sm font-medium text-gray-700 mb-2">
                            Department <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <select id="department_id"
                                   wire:model="department_id"
                                   class="w-full pl-10 pr-10 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a53692] focus:border-[#a53692] transition-all bg-gray-50 hover:bg-white appearance-none @error('department_id') border-red-300 ring-red-100 @enderror">
                                <option value="">Select Department</option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                        @error('department_id')
                            <p class="mt-1 text-sm text-red-600 flex items-center">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Consultation Fee -->
                    <div>
                        <label for="fee" class="block text-sm font-medium text-gray-700 mb-2">
                            Consultation Fee <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <input type="number" 
                                id="fee" 
                                wire:model="fee" 
                                step="0.01" 
                                min="0" 
                                placeholder="500"
                                class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a53692] focus:border-[#a53692] transition-all bg-gray-50 hover:bg-white @error('fee') border-red-300 ring-red-100 @enderror">
                        </div>
                        @error('fee')
                            <p class="mt-1 text-sm text-red-600 flex items-center">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <!-- Profile Image -->
                <div class="pt-4">
                    <h4 class="text-md font-medium text-gray-900 mb-3 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#a53692]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Profile Image
                    </h4>
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            @if($image)
                                <img class="h-20 w-20 rounded-full object-cover border-2 border-gray-300" 
                                     src="{{ $image->temporaryUrl() }}" alt="Preview">
                            @elseif($doctor->image_url && !$removeImage)
                                <img class="h-20 w-20 rounded-full object-cover border-2 border-gray-300" 
                                     src="{{ $doctor->image_url }}" alt="{{ $doctor->user->name }}">
                            @else
                                <div class="h-20 w-20 rounded-full flex items-center justify-center text-white font-medium"
                                     style="background-color: {{ $doctor->avatar_color }}">
                                    {{ $doctor->initials }}
                                </div>
                            @endif
                        </div>
                        <div class="flex-1">
                            <input type="file" 
                                   wire:model="image" 
                                   accept="image/*"
                                   class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-[#a53692] file:text-white hover:file:bg-[#8c2d7c] file:cursor-pointer">
                            <p class="mt-1 text-xs text-gray-500">PNG, JPG, GIF up to 2MB</p>
                            
                            @if($doctor->image_url && !$removeImage)
                                <button type="button" 
                                        wire:click="$set('removeImage', true)"
                                        class="mt-2 text-xs text-red-600 hover:text-red-800">
                                    Remove current image
                                </button>
                            @elseif($removeImage)
                                <button type="button" 
                                        wire:click="$set('removeImage', false)"
                                        class="mt-2 text-xs text-blue-600 hover:text-blue-800">
                                    Keep current image
                                </button>
                            @endif
                            
                            @error('image')
                                <p class="mt-1 text-sm text-red-600 flex items-center">
                                    <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Divider -->
                <div class="mb-6 pt-4 border-t border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900 mb-2 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#a53692]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Account Settings
                    </h3>
                    <p class="text-sm text-gray-500">Manage doctor's account status and availability</p>
                </div>

                <!-- Status -->
                <div class="bg-gray-50 p-4 rounded-md border border-gray-200">
                    <label class="flex items-center cursor-pointer">
                        <div class="relative">
                            <input type="checkbox" wire:model="status" class="sr-only">
                            <div class="block bg-gray-300 w-14 h-7 rounded-full transition-colors"></div>
                            <div class="dot absolute left-1 top-1 bg-white w-5 h-5 rounded-full transition-transform transform {{ $status ? 'translate-x-7 bg-[#a53692]' : '' }}"></div>
                        </div>
                        <div class="ml-3">
                            <span class="text-sm font-medium text-gray-900">{{ $status ? 'Active' : 'Inactive' }}</span>
                        </div>
                    </label>
                    <p class="mt-2 text-sm text-gray-500">When enabled, the doctor will be available for appointments and visible to patients.</p>
                </div>

                <!-- Form Actions -->
                <div class="flex flex-col sm:flex-row justify-end space-y-3 sm:space-y-0 sm:space-x-3 pt-6 border-t border-gray-200">
                    <button type="button" 
                            wire:click="cancel"
                            class="px-5 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-1 focus:ring-gray-300 transition-colors">
                        Cancel
                    </button>
                                        <button type="submit" 
                            class="px-5 py-2 text-sm font-medium text-white bg-[#a53692] rounded-md hover:bg-[#8c2d7c] focus:outline-none focus:ring-1 focus:ring-[#a53692] transition-colors flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
