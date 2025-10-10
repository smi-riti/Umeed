<div>
    <!-- Delete Confirmation Modal -->
    <livewire:components.delete-confirmation />
    
    <div class="container mx-auto px-4 py-6">
        <!-- Header -->
        <div class="bg-white border border-gray-200 rounded-lg mb-8 p-6">
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center">
                <div class="mb-4 lg:mb-0">
                    <h1 class="text-2xl font-bold text-gray-800">Publications</h1>
                    <p class="text-gray-500 mt-1">Manage research publications and academic papers</p>
                </div>
                <a href="{{ route('admin.publications.add') }}" 
                   class="bg-[#a53692] hover:bg-[#8c2d7c] text-white px-5 py-2 rounded-md font-medium transition-colors flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Add New Publication
                </a>
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

        <!-- Filters and Search -->
        <div class="bg-white rounded-lg border border-gray-200 mb-6 p-4">
            <div class="flex flex-col md:flex-row gap-4">
                <!-- Search -->
                <div class="flex-1">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input type="text" 
                               wire:model.live.debounce.300ms="search" 
                               placeholder="Search by title, authors, journal, or doctor..."
                               class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#a53692] focus:border-[#a53692]">
                    </div>
                </div>

                <!-- Doctor Filter -->
                <div class="md:w-64">
                    <select wire:model.live="filterDoctorId" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-[#a53692] focus:border-[#a53692]">
                        <option value="">All Doctors</option>
                        @foreach($doctors as $doctor)
                            <option value="{{ $doctor['id'] }}">{{ $doctor['name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Per Page -->
                <div class="flex items-center space-x-2">
                    <label class="text-sm text-gray-600">Show:</label>
                    <select wire:model.live="perPage" class="border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#a53692] focus:border-[#a53692]">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Publications Table -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
            <!-- Desktop Table (hidden on mobile) -->
            <div class="hidden lg:block overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th wire:click="sortBy('title')" class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                <div class="flex items-center space-x-1">
                                    <span>Title</span>
                                    @if($sortBy === 'title')
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            @if($sortDirection === 'asc')
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            @else
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            @endif
                                        </svg>
                                    @endif
                                </div>
                            </th>
                            <th wire:click="sortBy('doctor_name')" class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                <div class="flex items-center space-x-1">
                                    <span>Doctor</span>
                                    @if($sortBy === 'doctor_name')
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            @if($sortDirection === 'asc')
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            @else
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            @endif
                                        </svg>
                                    @endif
                                </div>
                            </th>
                            <th class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Authors</th>
                            <th class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Journal</th>
                            <th wire:click="sortBy('publication_year')" class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                <div class="flex items-center space-x-1">
                                    <span>Year</span>
                                    @if($sortBy === 'publication_year')
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            @if($sortDirection === 'asc')
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            @else
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            @endif
                                        </svg>
                                    @endif
                                </div>
                            </th>
                            <th class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Link</th>
                            <th class="px-4 xl:px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($publications as $publication)
                            <tr class="hover:bg-gray-50 transition-colors cursor-pointer" wire:click="viewPublication({{ $publication->id }})">
                                <td class="px-4 xl:px-6 py-4">
                                    <div class="text-sm font-medium text-gray-900 line-clamp-2">{{ $publication->title }}</div>
                                </td>
                                <td class="px-4 xl:px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{ $publication->doctor->user->name ?? 'N/A' }}
                                    </div>
                                </td>
                                <td class="px-4 xl:px-6 py-4">
                                    <div class="text-sm text-gray-900 line-clamp-2">{{ $publication->authors ?: 'N/A' }}</div>
                                </td>
                                <td class="px-4 xl:px-6 py-4">
                                    <div class="text-sm text-gray-900 line-clamp-2">{{ $publication->journal ?: 'N/A' }}</div>
                                </td>
                                <td class="px-4 xl:px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $publication->publication_year ?: 'N/A' }}</div>
                                </td>
                                <td class="px-4 xl:px-6 py-4 whitespace-nowrap">
                                    @if($publication->link)
                                        <a href="{{ $publication->link }}" target="_blank" class="text-[#a53692] hover:text-[#8c2d7c] text-sm font-medium" onclick="event.stopPropagation()">
                                            <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                            </svg>
                                        </a>
                                    @else
                                        <span class="text-gray-400 text-sm">N/A</span>
                                    @endif
                                </td>
                                <td class="px-4 xl:px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex items-center justify-end space-x-2" onclick="event.stopPropagation()">
                                        <button wire:click="viewPublication({{ $publication->id }})" 
                                                class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1 rounded-md text-xs font-medium transition-colors">
                                            View
                                        </button>
                                        <a href="{{ route('admin.publications.edit', $publication) }}" 
                                           class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-3 py-1 rounded-md text-xs font-medium transition-colors">
                                            Edit
                                        </a>
                                        <button wire:click="confirmDelete({{ $publication->id }})"
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
                                        <svg class="w-12 h-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        <h3 class="text-lg font-medium text-gray-900 mb-1">No publications found</h3>
                                        <p class="text-gray-500 mb-4">Get started by adding your first publication.</p>
                                        <a href="{{ route('admin.publications.add') }}" 
                                           class="bg-[#a53692] hover:bg-[#8c2d7c] text-white px-4 py-2 rounded-md font-medium transition-colors">
                                            Add Publication
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
                            <th wire:click="sortBy('title')" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                <div class="flex items-center space-x-1">
                                    <span>Title</span>
                                    @if($sortBy === 'title')
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            @if($sortDirection === 'asc')
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            @else
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            @endif
                                        </svg>
                                    @endif
                                </div>
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Doctor</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Journal</th>
                            <th wire:click="sortBy('publication_year')" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                <div class="flex items-center space-x-1">
                                    <span>Year</span>
                                    @if($sortBy === 'publication_year')
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            @if($sortDirection === 'asc')
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            @else
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            @endif
                                        </svg>
                                    @endif
                                </div>
                            </th>
                            <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($publications as $publication)
                            <tr class="hover:bg-gray-50 transition-colors cursor-pointer" wire:click="viewPublication({{ $publication->id }})">
                                <td class="px-4 py-4">
                                    <div class="text-sm font-medium text-gray-900 line-clamp-2">{{ $publication->title }}</div>
                                    <div class="text-xs text-gray-500 mt-1 line-clamp-1">{{ $publication->authors ?: 'N/A' }}</div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $publication->doctor->user->name ?? 'N/A' }}</div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="text-sm text-gray-900 line-clamp-2">{{ $publication->journal ?: 'N/A' }}</div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $publication->publication_year ?: 'N/A' }}</div>
                                    @if($publication->link)
                                        <a href="{{ $publication->link }}" target="_blank" class="text-[#a53692] hover:text-[#8c2d7c] text-xs font-medium block mt-1" onclick="event.stopPropagation()">
                                            View Link
                                        </a>
                                    @endif
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex flex-col space-y-1 items-end" onclick="event.stopPropagation()">
                                        <button wire:click="viewPublication({{ $publication->id }})" 
                                                class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-2 py-1 rounded text-xs font-medium transition-colors w-12 text-center">
                                            View
                                        </button>
                                        <a href="{{ route('admin.publications.edit', $publication) }}" 
                                           class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-2 py-1 rounded text-xs font-medium transition-colors w-12 text-center">
                                            Edit
                                        </a>
                                        <button wire:click="confirmDelete({{ $publication->id }})"
                                                class="bg-red-100 hover:bg-red-200 text-red-700 px-2 py-1 rounded text-xs font-medium transition-colors w-12 text-center">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center">
                                        <svg class="w-12 h-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        <h3 class="text-lg font-medium text-gray-900 mb-1">No publications found</h3>
                                        <p class="text-gray-500 mb-4">Get started by adding your first publication.</p>
                                        <a href="{{ route('admin.publications.add') }}" 
                                           class="bg-[#a53692] hover:bg-[#8c2d7c] text-white px-4 py-2 rounded-md font-medium transition-colors">
                                            Add Publication
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
                @forelse($publications as $publication)
                    <div class="p-4 hover:bg-gray-50 transition-colors cursor-pointer" wire:click="viewPublication({{ $publication->id }})">
                        <!-- Header Section -->
                        <div class="flex justify-between items-start mb-3">
                            <div class="flex-1 min-w-0">
                                <h3 class="text-sm font-medium text-gray-900 line-clamp-2 mb-1">{{ $publication->title }}</h3>
                                <div class="flex items-center space-x-3 text-xs text-gray-500">
                                    <span class="font-medium">{{ $publication->doctor->user->name ?? 'N/A' }}</span>
                                    <span>{{ $publication->publication_year ?: 'N/A' }}</span>
                                </div>
                            </div>
                            @if($publication->link)
                                <a href="{{ $publication->link }}" target="_blank" class="text-[#a53692] hover:text-[#8c2d7c] ml-2 flex-shrink-0" onclick="event.stopPropagation()">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                            @endif
                        </div>
                        
                        <!-- Details Section -->
                        <div class="space-y-2 text-sm mb-3">
                            <div>
                                <div class="text-xs text-gray-500 mb-1">Authors</div>
                                <div class="text-gray-900 line-clamp-2">{{ $publication->authors ?: 'N/A' }}</div>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 mb-1">Journal</div>
                                <div class="text-gray-900 line-clamp-2">{{ $publication->journal ?: 'N/A' }}</div>
                            </div>
                        </div>
                        
                        <!-- Actions -->
                        <div class="flex justify-end space-x-2 pt-3 border-t border-gray-100" onclick="event.stopPropagation()">
                            <button wire:click="viewPublication({{ $publication->id }})" 
                                    class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1.5 rounded text-xs font-medium transition-colors">
                                View
                            </button>
                            <a href="{{ route('admin.publications.edit', $publication) }}" 
                               class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-3 py-1.5 rounded text-xs font-medium transition-colors">
                                Edit
                            </a>
                            <button wire:click="confirmDelete({{ $publication->id }})"
                                    class="bg-red-100 hover:bg-red-200 text-red-700 px-3 py-1.5 rounded text-xs font-medium transition-colors">
                                Delete
                            </button>
                        </div>
                    </div>
                @empty
                    <div class="p-8 text-center">
                        <div class="flex flex-col items-center">
                            <svg class="w-12 h-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <h3 class="text-base font-medium text-gray-900 mb-1">No publications found</h3>
                            <p class="text-gray-500 mb-4 text-sm">Get started by adding your first publication.</p>
                            <a href="{{ route('admin.publications.add') }}" 
                               class="bg-[#a53692] hover:bg-[#8c2d7c] text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                                Add Publication
                            </a>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($publications->hasPages())
                <div class="bg-white px-4 py-3 border-t border-gray-200">
                    {{ $publications->links() }}
                </div>
            @endif
        </div>
    </div>

    <!-- View Publication Modal -->
    @if($showViewModal && $viewingPublication)
        <!-- Modal Backdrop -->
        <div class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4" wire:click="closeViewModal">
            <!-- Modal Container -->
            <div class="bg-white rounded-lg shadow-xl max-w-4xl w-full max-h-[90vh] overflow-hidden" wire:click.stop>
                <!-- Modal Header -->
                <div class="flex items-center justify-between p-6 border-b border-gray-200">
                    <div>
                        <h2 class="text-xl font-bold text-gray-900">Publication Details</h2>
                        <p class="text-sm text-gray-500 mt-1">ID: #{{ $viewingPublication->id }}</p>
                    </div>
                    <button wire:click="closeViewModal" class="text-gray-400 hover:text-gray-600 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Modal Content -->
                <div class="p-6 overflow-y-auto max-h-[calc(90vh-140px)]">
                    <div class="space-y-6">
                        <!-- Title -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                            <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                                <p class="text-gray-900 text-lg font-medium">{{ $viewingPublication->title }}</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Doctor -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Doctor</label>
                                <div class="bg-gray-50 rounded-lg p-3 border border-gray-200">
                                    <p class="text-gray-900">{{ $viewingPublication->doctor->user->name ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <!-- Publication Year -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Publication Year</label>
                                <div class="bg-gray-50 rounded-lg p-3 border border-gray-200">
                                    <p class="text-gray-900">{{ $viewingPublication->publication_year ?: 'N/A' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Authors -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Authors</label>
                            <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                                <p class="text-gray-900 whitespace-pre-line">{{ $viewingPublication->authors ?: 'N/A' }}</p>
                            </div>
                        </div>

                        <!-- Journal -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Journal/Conference</label>
                            <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                                <p class="text-gray-900">{{ $viewingPublication->journal ?: 'N/A' }}</p>
                            </div>
                        </div>

                        <!-- Link -->
                        @if($viewingPublication->link)
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Publication Link</label>
                            <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                                <a href="{{ $viewingPublication->link }}" target="_blank" class="text-[#a53692] hover:text-[#8c2d7c] break-all">
                                    {{ $viewingPublication->link }}
                                </a>
                            </div>
                        </div>
                        @endif

                        <!-- Additional Information -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Volume -->
                            @if($viewingPublication->volume)
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Volume</label>
                                <div class="bg-gray-50 rounded-lg p-3 border border-gray-200">
                                    <p class="text-gray-900">{{ $viewingPublication->volume }}</p>
                                </div>
                            </div>
                            @endif

                            <!-- Issue -->
                            @if($viewingPublication->issue)
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Issue</label>
                                <div class="bg-gray-50 rounded-lg p-3 border border-gray-200">
                                    <p class="text-gray-900">{{ $viewingPublication->issue }}</p>
                                </div>
                            </div>
                            @endif
                        </div>

                        <!-- Pages -->
                        @if($viewingPublication->pages)
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Pages</label>
                            <div class="bg-gray-50 rounded-lg p-3 border border-gray-200">
                                <p class="text-gray-900">{{ $viewingPublication->pages }}</p>
                            </div>
                        </div>
                        @endif

                        <!-- Publisher -->
                        @if($viewingPublication->publisher)
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Publisher</label>
                            <div class="bg-gray-50 rounded-lg p-3 border border-gray-200">
                                <p class="text-gray-900">{{ $viewingPublication->publisher }}</p>
                            </div>
                        </div>
                        @endif

                        <!-- DOI -->
                        @if($viewingPublication->doi)
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">DOI</label>
                            <div class="bg-gray-50 rounded-lg p-3 border border-gray-200">
                                <p class="text-gray-900 font-mono text-sm">{{ $viewingPublication->doi }}</p>
                            </div>
                        </div>
                        @endif

                        <!-- Abstract -->
                        @if($viewingPublication->abstract)
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Abstract</label>
                            <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                                <p class="text-gray-900 whitespace-pre-line">{{ $viewingPublication->abstract }}</p>
                            </div>
                        </div>
                        @endif

                        <!-- Keywords -->
                        @if($viewingPublication->keywords)
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Keywords</label>
                            <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                                <p class="text-gray-900">{{ $viewingPublication->keywords }}</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="flex flex-col sm:flex-row justify-between items-center p-6 border-t border-gray-200 bg-gray-50 gap-4">
                    <div class="text-sm text-gray-500">
                        Created: {{ $viewingPublication->created_at->format('M j, Y') }}
                        @if($viewingPublication->created_at != $viewingPublication->updated_at)
                            • Updated: {{ $viewingPublication->updated_at->format('M j, Y') }}
                        @endif
                    </div>
                    <div class="flex space-x-3">
                        <a href="{{ route('admin.publications.edit', $viewingPublication) }}" 
                           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                            Edit Publication
                        </a>
                        <button wire:click="closeViewModal" 
                                class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded-md text-sm font-medium transition-colors">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>