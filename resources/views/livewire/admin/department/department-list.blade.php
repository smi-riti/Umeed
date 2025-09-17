<div class="max-w-7xl mx-auto p-6">
        <!-- Header -->
        <div class="bg-white border-b border-gray-200 px-6 py-5 mb-6 rounded-lg">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">Departments</h2>
                    <p class="text-gray-500">Manage hospital departments and specialties</p>
                </div>
                <a wire:navigate 
                   href="{{ route('admin.departments.add') }}"
                   class="inline-flex items-center px-4 py-2 bg-[#a53692] text-white text-sm font-medium rounded-md hover:bg-[#8c2d7c] focus:outline-none focus:ring-2 focus:ring-[#a53692] transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Add Department
                </a>
            </div>
        </div>

        <!-- Search and Filters -->
        <div class="bg-white border border-gray-200 rounded-lg mb-6 p-4">
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                <div class="sm:col-span-3">
                    <div class="relative">
                        <input type="text" 
                               wire:model.live.debounce.300ms="search"
                               placeholder="Search departments..."
                               class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#a53692] focus:border-[#a53692] transition-colors">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Status Filter -->
                <div>
                    <select wire:model.live="statusFilter" 
                            class="w-full pl-3 pr-10 py-2.5 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#a53692] focus:border-[#a53692]">
                        <option value="">All Statuses</option>
                        <option value="1">Active Only</option>
                        <option value="0">Inactive Only</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Flash Messages -->
        @if (session()->has('message'))
            <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="font-medium">{{ session('message') }}</span>
                </div>
            </div>
        @endif

        @if (session()->has('error'))
            <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="font-medium">{{ session('error') }}</span>
                </div>
            </div>
        @endif

        <!-- Table -->
        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th wire:click="sortBy('name')" 
                                class="px-6 py-3.5 text-left text-xs font-medium text-gray-600 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                <div class="flex items-center space-x-1">
                                    <span>Department Name</span>
                                    @if ($sortField === 'name')
                                        <svg class="w-4 h-4 text-[#a53692] {{ $sortDirection === 'asc' ? 'transform rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                        </svg>
                                    @endif
                                </div>
                            </th>
                            <th class="px-6 py-3.5 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Slug</th>
                            <th wire:click="sortBy('status')" 
                                class="px-6 py-3.5 text-left text-xs font-medium text-gray-600 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                <div class="flex items-center space-x-1">
                                    <span>Status</span>
                                    @if ($sortField === 'status')
                                        <svg class="w-4 h-4 text-[#a53692] {{ $sortDirection === 'asc' ? 'transform rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                        </svg>
                                    @endif
                                </div>
                            </th>
                            <th class="px-6 py-3.5 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Doctors</th>
                            <th class="px-6 py-3.5 text-right text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($departments as $department)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10 flex items-center justify-center rounded-full bg-[#f3e8f3]">
                                            <svg class="h-5 w-5 text-[#a53692]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1" />
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $department->name }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{ $department->slug }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button wire:click="toggleStatus({{ $department->id }})"
                                            class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium transition-colors {{ $department->status ? 'bg-green-100 text-green-800 hover:bg-green-200' : 'bg-red-100 text-red-800 hover:bg-red-200' }}">
                                        <span class="flex-shrink-0 h-1.5 w-1.5 rounded-full {{ $department->status ? 'bg-green-500' : 'bg-red-500' }} mr-1.5"></span>
                                        {{ $department->status ? 'Active' : 'Inactive' }}
                                    </button>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm">
                                        <span class="bg-blue-100 text-blue-800 px-2.5 py-0.5 rounded-full text-xs font-medium">
                                            {{ $department->doctors_count }}
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex items-center justify-end space-x-3">
                                        <a wire:navigate 
                                           href="{{ route('admin.departments.edit', $department->id) }}"
                                           class="text-[#a53692] hover:text-[#8c2d7c] transition-colors p-1 rounded-full hover:bg-[#f3e8f3]">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </a>
                                        <button wire:click="confirmDelete({{ $department->id }})"
                                                class="text-red-600 hover:text-red-800 transition-colors p-1 rounded-full hover:bg-red-50">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center">
                                        <div class="w-20 h-20 rounded-full bg-[#f3e8f3] flex items-center justify-center mb-4">
                                            <svg class="w-10 h-10 text-[#a53692]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                            </svg>
                                        </div>
                                        <h3 class="text-lg font-medium text-gray-900 mb-2">No departments found</h3>
                                        <p class="text-gray-500 mb-5 max-w-sm text-center">Get started by creating your first department to organize doctors by specialty.</p>
                                        <a wire:navigate 
                                           href="{{ route('admin.departments.add') }}"
                                           class="inline-flex items-center px-5 py-2.5 bg-[#a53692] text-white text-sm font-medium rounded-lg hover:bg-[#8c2d7c] focus:outline-none focus:ring-2 focus:ring-[#a53692] focus:ring-offset-2 transition-colors shadow-sm">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                            </svg>
                                            Add Department
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        @if ($departments->hasPages())
            <div class="px-6 py-4 mt-4 bg-white border border-gray-200 rounded-lg">
                {{ $departments->links() }}
            </div>
        @endif

    <!-- Department Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
        <div class="bg-white p-4 rounded-lg border border-gray-200">
            <div class="flex items-center">
                <div class="flex-shrink-0 p-3 rounded-full bg-[#f3e8f3] mr-4">
                    <svg class="h-6 w-6 text-[#a53692]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <div>
                    <div class="text-sm font-medium text-gray-500">Total Departments</div>
                    <div class="text-2xl font-semibold text-gray-800">{{ $departments->total() }}</div>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-4 rounded-lg border border-gray-200">
            <div class="flex items-center">
                <div class="flex-shrink-0 p-3 rounded-full bg-green-50 mr-4">
                    <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <div class="text-sm font-medium text-gray-500">Active Departments</div>
                    <div class="text-2xl font-semibold text-gray-800">{{ $activeCount ?? 0 }}</div>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-4 rounded-lg border border-gray-200">
            <div class="flex items-center">
                <div class="flex-shrink-0 p-3 rounded-full bg-blue-50 mr-4">
                    <svg class="h-6 w-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <div>
                    <div class="text-sm font-medium text-gray-500">Doctors Assigned</div>
                    <div class="text-2xl font-semibold text-gray-800">{{ $totalDoctors ?? 0 }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Component -->
    @livewire('components.delete-confirmation')
</div>