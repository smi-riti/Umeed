<div>
    <div class="container mx-auto px-4 py-6">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Edit Doctor</h1>
                <p class="text-gray-600">Update doctor information for Dr. {{ $doctor->user->name }}</p>
            </div>
            <button wire:click="cancel" 
                    class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                Back to List
            </button>
        </div>

        <!-- Flash Messages -->
        @if (session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session()->has('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <!-- Form -->
        <div class="bg-white rounded-lg  border">
            <form wire:submit="save" class="p-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               id="name"
                               wire:model="name" 
                               placeholder="Enter doctor's full name"
                               class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500
                                      @error('name') border-red-500 @enderror">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                            Email Address <span class="text-red-500">*</span>
                        </label>
                        <input type="email" 
                               id="email"
                               wire:model="email" 
                               placeholder="Enter email address"
                               class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500
                                      @error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                            New Password <span class="text-gray-500">(leave blank to keep current)</span>
                        </label>
                        <input type="password" 
                               id="password"
                               wire:model="password" 
                               placeholder="Enter new password"
                               class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500
                                      @error('password') border-red-500 @enderror">
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Confirmation -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">
                            Confirm New Password
                        </label>
                        <input type="password" 
                               id="password_confirmation"
                               wire:model="password_confirmation" 
                               placeholder="Confirm new password"
                               class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                    </div>

                    <!-- Department -->
                    <div>
                        <label for="department_id" class="block text-sm font-medium text-gray-700 mb-1">
                            Department <span class="text-red-500">*</span>
                        </label>
                        <select id="department_id"
                                wire:model="department_id" 
                                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500
                                       @error('department_id') border-red-500 @enderror">
                            <option value="">Select Department</option>
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                        @error('department_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Consultation Fee -->
                    <div>
                        <label for="fee" class="block text-sm font-medium text-gray-700 mb-1">
                            Consultation Fee<span class="text-red-500">*</span>
                        </label>
                        <input type="number" 
                               id="fee"
                               wire:model="fee" 
                               placeholder="500"
                               min="0"
                               step="0.01"
                               class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500
                                      @error('fee') border-red-500 @enderror">
                        @error('fee')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Status -->
                <div>
                    <label class="flex items-center">
                        <input type="checkbox" 
                               wire:model="status" 
                               class="rounded border-gray-300 text-purple-600  focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-50">
                        <span class="ml-2 text-sm text-gray-700">Active Status</span>
                    </label>
                    <p class="mt-1 text-sm text-gray-500">When enabled, the doctor will be available for appointments.</p>
                </div>

                <!-- Form Actions -->
                <div class="flex justify-end space-x-3 pt-6 border-t border-gray-200">
                    <button type="button" 
                            wire:click="cancel"
                            class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition-colors">
                        Cancel
                    </button>
                    <button type="submit" 
                            class="px-4 py-2 border border-transparent rounded-md  text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition-colors">
                        Update Doctor
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
