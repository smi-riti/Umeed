<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg ">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-semibold text-gray-900">
            {{ $isEditing ? 'Edit Department' : 'Create Department' }}
        </h2>
        <button wire:click="cancel" 
                class="text-gray-400 hover:text-gray-600 transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    @if ($errors->has('general'))
        <div class="mb-4 p-4 bg-red-50 border border-red-200 text-red-700 rounded-md">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                {{ $errors->first('general') }}
            </div>
        </div>
    @endif

    <form wire:submit="save" class="space-y-6">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                Department Name <span class="text-red-500">*</span>
            </label>
            <input type="text" 
                   wire:model.live.debounce.300ms="name" 
                   id="name" 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-colors @error('name') border-red-300 focus:ring-red-500 focus:border-red-500 @enderror"
                   placeholder="Enter department name">
            @error('name') 
                <p class="mt-1 text-sm text-red-600 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
            <div class="flex items-center space-x-3">
                <button type="button" 
                        wire:click="$set('status', {{ $status ? 'false' : 'true' }})"
                        class="relative inline-flex h-6 w-11 items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 {{ $status ? 'bg-purple-600' : 'bg-gray-200' }}">
                    <span class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform {{ $status ? 'translate-x-6' : 'translate-x-1' }}"></span>
                </button>
                <span class="text-sm font-medium {{ $status ? 'text-purple-600' : 'text-gray-500' }}">
                    {{ $status ? 'Active' : 'Inactive' }}
                </span>
            </div>
        </div>

        <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
            <button type="button" 
                    wire:click="cancel"
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-500 transition-colors">
                Cancel
            </button>
            <button type="submit" 
                    class="px-4 py-2 text-sm font-medium text-white bg-purple-600 rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 transition-colors disabled:opacity-50 disabled:cursor-not-allowed"
                    wire:loading.attr="disabled">
                <span wire:loading.remove>{{ $isEditing ? 'Update Department' : 'Create Department' }}</span>
                <span wire:loading class="flex items-center">
                    <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Processing...
                </span>
            </button>
        </div>
    </form>
</div>
