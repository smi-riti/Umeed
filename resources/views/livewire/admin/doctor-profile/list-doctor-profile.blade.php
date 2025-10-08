<div>
    <!-- Delete Confirmation Modal -->
    <livewire:components.delete-confirmation />

    <div class="container mx-auto ">
        <!-- Header -->
        <div class="bg-white border border-gray-200 rounded-lg mb-8 p-6">
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center">
                <div class="mb-4 lg:mb-0">
                    <h1 class="text-2xl font-bold text-gray-800">Doctor Profiles</h1>
                    <p class="text-gray-500 mt-1">Manage detailed profiles for doctors</p>
                </div>
                <a href="{{ route('admin.doctor-profiles.add') }}"
                    class="bg-[#a53692] hover:bg-[#8c2d7c] text-white px-5 py-2 rounded-md font-medium transition-colors flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Add New Profile
                </a>
            </div>
        </div>

        <!-- Flash Messages -->
        @if (session()->has('success'))
            <div class="bg-green-50 border border-green-200 p-4 mb-6 rounded-lg">
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-green-400 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        @if (session()->has('error'))
            <div class="bg-red-50 border border-red-200 p-4 mb-6 rounded-lg">
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-red-400 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-sm font-medium text-red-800">{{ session('error') }}</p>
                </div>
            </div>
        @endif

        <!-- Filters and Search -->
        <div class="bg-white rounded-lg border border-gray-200 mb-6 p-4">
            <div class="flex flex-col md:flex-row gap-4">
                <!-- Search -->
                <div class="flex-1">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input type="text" wire:model.live.debounce.300ms="search"
                            placeholder="Search by name, qualification, or special interest..."
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#a53692] focus:border-[#a53692]">
                    </div>
                </div>

                <!-- Per Page -->
                <div class="flex items-center space-x-2">
                    <label class="text-sm text-gray-600">Show:</label>
                    <select wire:model.live="perPage"
                        class="border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#a53692] focus:border-[#a53692]">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Profiles Table -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
            <!-- Desktop Table (hidden on mobile) -->
            <div class="hidden lg:block overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th wire:click="sortBy('name')"
                                class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                <div class="flex items-center space-x-1">
                                    <span>Doctor Name</span>
                                    @if ($sortBy === 'name')
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            @if ($sortDirection === 'asc')
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 15l7-7 7 7" />
                                            @else
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" />
                                            @endif
                                        </svg>
                                    @endif
                                </div>
                            </th>
                            <th wire:click="sortBy('qualification')"
                                class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                <div class="flex items-center space-x-1">
                                    <span>Qualification</span>
                                    @if ($sortBy === 'qualification')
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            @if ($sortDirection === 'asc')
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 15l7-7 7 7" />
                                            @else
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" />
                                            @endif
                                        </svg>
                                    @endif
                                </div>
                            </th>
                            <th
                                class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Special Interest</th>
                            <th
                                class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Social Media</th>
                            <th
                                class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Languages</th>
                            <th wire:click="sortBy('created_at')"
                                class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                <div class="flex items-center space-x-1">
                                    <span>Created</span>
                                    @if ($sortBy === 'created_at')
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            @if ($sortDirection === 'asc')
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 15l7-7 7 7" />
                                            @else
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" />
                                            @endif
                                        </svg>
                                    @endif
                                </div>
                            </th>
                            <th
                                class="px-4 xl:px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($profiles as $profile)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-4 xl:px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $profile->doctor->user->name ?? 'N/A' }}</div>
                                    @if ($profile->membership)
                                        <div class="text-xs text-gray-500">{{ $profile->membership }}</div>
                                    @endif
                                </td>
                                <td class="px-4 xl:px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $profile->qualification ?: 'N/A' }}</div>
                                </td>
                                <td class="px-4 xl:px-6 py-4">
                                    <div class="text-sm text-gray-900 line-clamp-2">
                                        {{ $profile->special_interest ?: 'N/A' }}</div>
                                </td>
                                <td class="px-4 xl:px-6 py-4">
                                    @if (is_array($profile->social_media_link) && count($profile->social_media_link) > 0)
                                        <div class="flex flex-wrap gap-1">
                                            @foreach ($profile->social_media_link as $link)
                                                @php
                                                    $platform = '';
                                                    $url = $link;

                                                    if (strpos($link, ':') !== false) {
                                                        [$platform, $url] = explode(':', $link, 2);
                                                        $platform = strtolower(trim($platform));
                                                    } else {
                                                        if (strpos($link, 'facebook') !== false) {
                                                            $platform = 'facebook';
                                                        } elseif (strpos($link, 'instagram') !== false) {
                                                            $platform = 'instagram';
                                                        } elseif (strpos($link, 'linkedin') !== false) {
                                                            $platform = 'linkedin';
                                                        } elseif (
                                                            strpos($link, 'twitter') !== false ||
                                                            strpos($link, 'x.com') !== false
                                                        ) {
                                                            $platform = 'twitter';
                                                        } elseif (strpos($link, 'youtube') !== false) {
                                                            $platform = 'youtube';
                                                        } else {
                                                            $platform = 'website';
                                                        }
                                                    }
                                                @endphp

                                                <a href="{{ $url }}" target="_blank"
                                                    class="text-[#a53692] hover:text-[#8c2d7c] px-2 py-1 rounded-md bg-gray-100 hover:bg-gray-200 transition-colors text-xs"
                                                    title="{{ $url }}">
                                                    @if ($platform == 'facebook')
                                                        FB
                                                    @elseif($platform == 'instagram')
                                                        IG
                                                    @elseif($platform == 'linkedin')
                                                        LI
                                                    @elseif($platform == 'twitter')
                                                        TW
                                                    @elseif($platform == 'youtube')
                                                        YT
                                                    @else
                                                        Web
                                                    @endif
                                                </a>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="text-sm text-gray-900">N/A</div>
                                    @endif
                                </td>
                                <td class="px-4 xl:px-6 py-4">
                                    @if (is_array($profile->language_spoken) && count($profile->language_spoken) > 0)
                                        <div class="text-sm text-gray-900 line-clamp-2">
                                            {{ implode(', ', $profile->language_spoken) }}</div>
                                    @else
                                        <div class="text-sm text-gray-900">{{ $profile->language_spoken ?: 'N/A' }}
                                        </div>
                                    @endif
                                </td>
                                <td class="px-4 xl:px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $profile->created_at->format('M j, Y') }}
                                </td>
                                <td class="px-4 xl:px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex items-center justify-end space-x-2">
                                        <a href="{{ route('admin.doctor-profiles.edit', $profile) }}"
                                            class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-3 py-1 rounded-md text-xs font-medium transition-colors">
                                            Edit
                                        </a>
                                        <button wire:click="confirmDelete({{ $profile->id }})"
                                            class="bg-red-100 hover:bg-red-200 text-red-700 px-3 py-1 rounded-md text-xs font-medium transition-colors">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center">
                                        <svg class="w-12 h-12 text-gray-400 mb-4" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        <h3 class="text-lg font-medium text-gray-900 mb-1">No doctor profiles found
                                        </h3>
                                        <p class="text-gray-500 mb-4">Get started by creating your first doctor
                                            profile.</p>
                                        <a href="{{ route('admin.doctor-profiles.add') }}"
                                            class="bg-[#a53692] hover:bg-[#8c2d7c] text-white px-4 py-2 rounded-md font-medium transition-colors">
                                            Add Doctor Profile
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Tablet Layout (shown on md and lg) -->
            <div class="hidden md:block lg:hidden overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th wire:click="sortBy('name')"
                                class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                <div class="flex items-center space-x-1">
                                    <span>Doctor</span>
                                    @if ($sortBy === 'name')
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            @if ($sortDirection === 'asc')
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 15l7-7 7 7" />
                                            @else
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" />
                                            @endif
                                        </svg>
                                    @endif
                                </div>
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Qualification</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Special Interest</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Languages</th>
                            <th
                                class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($profiles as $profile)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-4 py-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $profile->doctor->name ?? 'N/A' }}</div>
                                    @if ($profile->membership)
                                        <div class="text-xs text-gray-500">{{ $profile->membership }}</div>
                                    @endif
                                    @if (is_array($profile->social_media_link) && count($profile->social_media_link) > 0)
                                        <div class="flex flex-wrap gap-1 mt-2">
                                            @foreach (array_slice($profile->social_media_link, 0, 3) as $link)
                                                @php
                                                    $platform = '';
                                                    $url = $link;

                                                    if (strpos($link, ':') !== false) {
                                                        [$platform, $url] = explode(':', $link, 2);
                                                        $platform = strtolower(trim($platform));
                                                    } else {
                                                        if (strpos($link, 'facebook') !== false) {
                                                            $platform = 'facebook';
                                                        } elseif (strpos($link, 'instagram') !== false) {
                                                            $platform = 'instagram';
                                                        } elseif (strpos($link, 'linkedin') !== false) {
                                                            $platform = 'linkedin';
                                                        } elseif (
                                                            strpos($link, 'twitter') !== false ||
                                                            strpos($link, 'x.com') !== false
                                                        ) {
                                                            $platform = 'twitter';
                                                        } elseif (strpos($link, 'youtube') !== false) {
                                                            $platform = 'youtube';
                                                        } else {
                                                            $platform = 'website';
                                                        }
                                                    }
                                                @endphp

                                                <a href="{{ $url }}" target="_blank"
                                                    class="text-[#a53692] hover:text-[#8c2d7c] px-1.5 py-0.5 rounded bg-gray-100 hover:bg-gray-200 transition-colors text-xs"
                                                    title="{{ $url }}">
                                                    @if ($platform == 'facebook')
                                                        FB
                                                    @elseif($platform == 'instagram')
                                                        IG
                                                    @elseif($platform == 'linkedin')
                                                        LI
                                                    @elseif($platform == 'twitter')
                                                        TW
                                                    @elseif($platform == 'youtube')
                                                        YT
                                                    @else
                                                        Web
                                                    @endif
                                                </a>
                                            @endforeach
                                            @if (count($profile->social_media_link) > 3)
                                                <span
                                                    class="text-xs text-gray-500 px-1">+{{ count($profile->social_media_link) - 3 }}</span>
                                            @endif
                                        </div>
                                    @endif
                                </td>
                                <td class="px-4 py-4">
                                    <div class="text-sm text-gray-900 line-clamp-2">
                                        {{ $profile->qualification ?: 'N/A' }}</div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="text-sm text-gray-900 line-clamp-2">
                                        {{ $profile->special_interest ?: 'N/A' }}</div>
                                </td>
                                <td class="px-4 py-4">
                                    @if (is_array($profile->language_spoken) && count($profile->language_spoken) > 0)
                                        <div class="text-sm text-gray-900 line-clamp-2">
                                            {{ implode(', ', array_slice($profile->language_spoken, 0, 3)) }}</div>
                                        @if (count($profile->language_spoken) > 3)
                                            <div class="text-xs text-gray-500">
                                                +{{ count($profile->language_spoken) - 3 }} more</div>
                                        @endif
                                    @else
                                        <div class="text-sm text-gray-900">{{ $profile->language_spoken ?: 'N/A' }}
                                        </div>
                                    @endif
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex flex-col space-y-1 items-end">
                                        <div class="text-xs text-gray-500 mb-1">
                                            {{ $profile->created_at->format('M j, Y') }}</div>
                                        <div class="flex space-x-1">
                                            <a href="{{ route('admin.doctor-profiles.edit', $profile) }}"
                                                class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-2 py-1 rounded text-xs font-medium transition-colors">
                                                Edit
                                            </a>
                                            <button wire:click="confirmDelete({{ $profile->id }})"
                                                class="bg-red-100 hover:bg-red-200 text-red-700 px-2 py-1 rounded text-xs font-medium transition-colors">
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center">
                                        <svg class="w-12 h-12 text-gray-400 mb-4" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        <h3 class="text-lg font-medium text-gray-900 mb-1">No doctor profiles found
                                        </h3>
                                        <p class="text-gray-500 mb-4">Get started by creating your first doctor
                                            profile.</p>
                                        <a href="{{ route('admin.doctor-profiles.add') }}"
                                            class="bg-[#a53692] hover:bg-[#8c2d7c] text-white px-4 py-2 rounded-md font-medium transition-colors">
                                            Add Doctor Profile
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Mobile Cards (shown on mobile) -->
            <div class="md:hidden divide-y divide-gray-200">
                @forelse($profiles as $profile)
                    <div class="p-4 hover:bg-gray-50 transition-colors">
                        <!-- Header Section -->
                        <div class="flex justify-between items-start mb-3">
                            <div class="flex-1 min-w-0">
                                <h3 class="text-sm font-medium text-gray-900 mb-1">
                                    {{ $profile->doctor->name ?? 'N/A' }}</h3>
                                @if ($profile->membership)
                                    <div class="text-xs text-gray-500 mb-2">{{ $profile->membership }}</div>
                                @endif
                                <div class="text-xs text-gray-500">{{ $profile->created_at->format('M j, Y') }}</div>
                            </div>
                            <div class="flex space-x-1 ml-2">
                                <a href="{{ route('admin.doctor-profiles.edit', $profile) }}"
                                    class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-2 py-1 rounded text-xs font-medium transition-colors">
                                    Edit
                                </a>
                                <button wire:click="confirmDelete({{ $profile->id }})"
                                    class="bg-red-100 hover:bg-red-200 text-red-700 px-2 py-1 rounded text-xs font-medium transition-colors">
                                    Delete
                                </button>
                            </div>
                        </div>

                        <!-- Details Section -->
                        <div class="space-y-2 text-sm mb-3">
                            <div>
                                <div class="text-xs text-gray-500 mb-1">Qualification</div>
                                <div class="text-gray-900">{{ $profile->qualification ?: 'N/A' }}</div>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 mb-1">Special Interest</div>
                                <div class="text-gray-900 line-clamp-2">{{ $profile->special_interest ?: 'N/A' }}
                                </div>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 mb-1">Languages</div>
                                <div class="text-gray-900">
                                    @if (is_array($profile->language_spoken) && count($profile->language_spoken) > 0)
                                        {{ implode(', ', array_slice($profile->language_spoken, 0, 3)) }}
                                        @if (count($profile->language_spoken) > 3)
                                            <span
                                                class="text-gray-500 text-xs">+{{ count($profile->language_spoken) - 3 }}
                                                more</span>
                                        @endif
                                    @else
                                        {{ $profile->language_spoken ?: 'N/A' }}
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Social Media Links -->
                        @if (is_array($profile->social_media_link) && count($profile->social_media_link) > 0)
                            <div class="pt-2 border-t border-gray-100">
                                <div class="text-xs text-gray-500 mb-2">Social Media</div>
                                <div class="flex flex-wrap gap-1">
                                    @foreach ($profile->social_media_link as $link)
                                        @php
                                            $platform = '';
                                            $url = $link;

                                            if (strpos($link, ':') !== false) {
                                                [$platform, $url] = explode(':', $link, 2);
                                                $platform = strtolower(trim($platform));
                                            } else {
                                                if (strpos($link, 'facebook') !== false) {
                                                    $platform = 'facebook';
                                                } elseif (strpos($link, 'instagram') !== false) {
                                                    $platform = 'instagram';
                                                } elseif (strpos($link, 'linkedin') !== false) {
                                                    $platform = 'linkedin';
                                                } elseif (
                                                    strpos($link, 'twitter') !== false ||
                                                    strpos($link, 'x.com') !== false
                                                ) {
                                                    $platform = 'twitter';
                                                } elseif (strpos($link, 'youtube') !== false) {
                                                    $platform = 'youtube';
                                                } else {
                                                    $platform = 'website';
                                                }
                                            }
                                        @endphp

                                        <a href="{{ $url }}" target="_blank"
                                            class="text-[#a53692] hover:text-[#8c2d7c] px-2 py-1 rounded bg-gray-100 hover:bg-gray-200 transition-colors text-xs"
                                            title="{{ $url }}">
                                            @if ($platform == 'facebook')
                                                Facebook
                                            @elseif($platform == 'instagram')
                                                Instagram
                                            @elseif($platform == 'linkedin')
                                                LinkedIn
                                            @elseif($platform == 'twitter')
                                                Twitter
                                            @elseif($platform == 'youtube')
                                                YouTube
                                            @else
                                                Website
                                            @endif
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                @empty
                    <div class="p-8 text-center">
                        <div class="flex flex-col items-center">
                            <svg class="w-12 h-12 text-gray-400 mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <h3 class="text-base font-medium text-gray-900 mb-1">No doctor profiles found</h3>
                            <p class="text-gray-500 mb-4 text-sm">Get started by creating your first doctor profile.
                            </p>
                            <a href="{{ route('admin.doctor-profiles.add') }}"
                                class="bg-[#a53692] hover:bg-[#8c2d7c] text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                                Add Doctor Profile
                            </a>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if ($profiles->hasPages())
                <div class="bg-white px-4 py-3 border-t border-gray-200">
                    {{ $profiles->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
