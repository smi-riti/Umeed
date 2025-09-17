<div class="max-w-4xl mx-auto bg-gray-100 rounded-xl overflow-hidden my-8">
    
        <div class="mx-auto w-full px-8 py-4">
            <h2 class="text-2xl font-bold text-gray-700 m">Create Account</h2>
            <p class="text-gray-700 mb-2">Fill in your details to get started</p>
            
            <form wire:submit.prevent="register" class="space-y-4">
                @csrf
                
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                    <input type="text" id="name" wire:model.live="name" 
                           class="w-full px-4 py-2 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-400 focus:border-purple-400 transition"
                           placeholder="e.g Aman Kumar">
                    @error('name') <span class="mt-1 text-sm text-red-600 block">{{ $message }}</span> @enderror
                </div>
                
                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
                    <input type="email" id="email" wire:model.live="email" 
                           class="w-full px-4 py-2 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-400 focus:border-purple-400 transition"
                           placeholder="aman@example.com">
                    @error('email') <span class="mt-1 text-sm text-red-600 block">{{ $message }}</span> @enderror
                </div>
                
                <!-- Password Field -->
                <div class="flex gap-2">
                    <div class="flex-1">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password *</label>
                    <input type="password" id="password" wire:model.live="password" 
                           class="w-full px-4 py-2 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-400 focus:border-purple-400 transition"
                           placeholder="••••••••">
                    @error('password') <span class="mt-1 text-sm text-red-600 block">{{ $message }}</span> @enderror
                </div>
                
                <!-- Password Confirmation Field -->
                <div class="flex-1">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password *</label>
                    <input type="password" id="password_confirmation" wire:model.live="password_confirmation" 
                           class="w-full px-4 py-2 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-400 focus:border-purple-400 transition"
                           placeholder="••••••••">
                    @error('password_confirmation') <span class="mt-1 text-sm text-red-600 block">{{ $message }}</span> @enderror
                </div>
                </div>
                
                <!-- Submit Button -->
                <button type="submit" class="w-full py-3 px-4 bg-purple-500 hover:bg-purple-600 text-white font-medium rounded-lg transition duration-300">
                    Create Account
                </button>
                
                <!-- Login Link -->
                <p class="text-center text-sm text-gray-700 mt-4">
                    Already have an account? 
                    <a wire:navigate href="/login" class="text-purple-500 font-medium hover:underline">Sign in</a>
                </p>
            </form>
        </div>
   
</div>