
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        <form wire:submit.prevent="login">
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" wire:model.defer="email" class="mt-1 block w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-purple-300" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" wire:model.defer="password" class="mt-1 block w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-purple-300" required>
            </div>
            @if($errors->any())
                <div class="mb-4 text-red-600">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button type="submit" class="w-full bg-purple-600 text-white py-2 rounded-md hover:bg-purple-700 transition">Login</button>
        </form>
    </div>
</div>
