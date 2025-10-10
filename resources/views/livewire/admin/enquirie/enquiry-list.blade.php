<div>
    <div class="">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4 sm:mb-6">
                <div class="p-4 sm:p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-3">
                        <div>
                            <h2 class="text-xl sm:text-2xl font-bold text-gray-800">Enquiry Management</h2>
                            <p class="text-gray-600 mt-1 text-sm sm:text-base">Manage and view all patient enquiries</p>
                        </div>
                        <div class="text-sm text-gray-500">
                            Total: {{ $enquiries->total() }} enquiries
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search and Filters -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4 sm:mb-6">
                <div class="p-4 sm:p-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <!-- Search -->
                        <div class="flex-1">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-4 w-4 sm:h-5 sm:w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input 
                                    wire:model.debounce.300ms="search"
                                    type="text" 
                                    class="block w-full pl-8 sm:pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-purple-500 focus:border-purple-500 text-sm sm:text-sm"
                                    placeholder="Search enquiries..."
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Enquiries Table -->
            <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden">
                @if($enquiries->count() > 0)
                    <!-- Desktop Table (hidden on mobile) -->
                    <div class="hidden lg:block overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" wire:click="sortBy('name')">
                                        <div class="flex items-center">
                                            Name
                                            @if($sortField === 'name')
                                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                                </svg>
                                            @endif
                                        </div>
                                    </th>
                                    <th scope="col" class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact</th>
                                    <th scope="col" class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" wire:click="sortBy('subject')">
                                        <div class="flex items-center">
                                            Subject
                                            @if($sortField === 'subject')
                                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                                </svg>
                                            @endif
                                        </div>
                                    </th>
                                    <th scope="col" class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" wire:click="sortBy('created_at')">
                                        <div class="flex items-center">
                                            Date
                                            @if($sortField === 'created_at')
                                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                                </svg>
                                            @endif
                                        </div>
                                    </th>
                                    <th scope="col" class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($enquiries as $enquiry)
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-4 xl:px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-8 w-8 sm:h-10 sm:w-10 bg-purple-100 rounded-full flex items-center justify-center">
                                                    <span class="text-purple-600 font-medium text-xs sm:text-sm">
                                                        {{ strtoupper(substr($enquiry->name, 0, 1)) }}
                                                    </span>
                                                </div>
                                                <div class="ml-3 sm:ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $enquiry->name }}</div>
                                                    <div class="text-xs sm:text-sm text-gray-500 truncate max-w-[120px] xl:max-w-none">{{ $enquiry->email }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 xl:px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $enquiry->contact }}</div>
                                        </td>
                                        <td class="px-4 xl:px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                                @if($enquiry->subject === 'ivf') bg-purple-100 text-purple-800
                                                @elseif($enquiry->subject === 'male-infertility') bg-blue-100 text-blue-800
                                                @elseif($enquiry->subject === 'egg-freezing') bg-pink-100 text-pink-800
                                                @else bg-gray-100 text-gray-800
                                                @endif">
                                                {{ ucfirst(str_replace('-', ' ', $enquiry->subject)) }}
                                            </span>
                                        </td>
                                        <td class="px-4 xl:px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <div class="hidden xl:block">{{ $enquiry->created_at->format('M j, Y g:i A') }}</div>
                                            <div class="xl:hidden">{{ $enquiry->created_at->format('M j, Y') }}</div>
                                        </td>
                                        <td class="px-4 xl:px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex space-x-2">
                                                <button 
                                                    wire:click="viewEnquiry({{ $enquiry->id }})"
                                                    class="text-indigo-600 hover:text-indigo-900 transition-colors duration-150"
                                                    title="View Details">
                                                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                    </svg>
                                                </button>
                                                <button  wire:confirm='Are you sure you want to delete this enquiry?'
                                                      wire:click="deleteEnquiry({{ $enquiry->id }})"
                                                    class="text-red-600 hover:text-red-900 transition-colors duration-150"
                                                    title="Delete">
                                                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Tablet Layout (shown on md and lg) -->
                    <div class="hidden md:block lg:hidden overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Enquiry</th>
                                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subject & Date</th>
                                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($enquiries as $enquiry)
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-4 py-4">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-8 w-8 bg-purple-100 rounded-full flex items-center justify-center">
                                                    <span class="text-purple-600 font-medium text-xs">
                                                        {{ strtoupper(substr($enquiry->name, 0, 1)) }}
                                                    </span>
                                                </div>
                                                <div class="ml-3">
                                                    <div class="text-sm font-medium text-gray-900">{{ $enquiry->name }}</div>
                                                    <div class="text-xs text-gray-500">{{ $enquiry->email }}</div>
                                                    <div class="text-xs text-gray-500">{{ $enquiry->contact }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4">
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                                @if($enquiry->subject === 'ivf') bg-purple-100 text-purple-800
                                                @elseif($enquiry->subject === 'male-infertility') bg-blue-100 text-blue-800
                                                @elseif($enquiry->subject === 'egg-freezing') bg-pink-100 text-pink-800
                                                @else bg-gray-100 text-gray-800
                                                @endif">
                                                {{ ucfirst(str_replace('-', ' ', $enquiry->subject)) }}
                                            </span>
                                            <div class="text-xs text-gray-500 mt-1">{{ $enquiry->created_at->format('M j, Y') }}</div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex space-x-2">
                                                <button 
                                                    wire:click="viewEnquiry({{ $enquiry->id }})"
                                                    class="text-indigo-600 hover:text-indigo-900 transition-colors duration-150"
                                                    title="View Details">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                    </svg>
                                                </button>
                                                <button 
                                                    wire:click="deleteEnquiry({{ $enquiry->id }})"
                                                    onclick="return confirm('Are you sure you want to delete this enquiry?')"
                                                    class="text-red-600 hover:text-red-900 transition-colors duration-150"
                                                    title="Delete">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Mobile Cards (shown on mobile) -->
                    <div class="md:hidden divide-y divide-gray-200">
                        @foreach($enquiries as $enquiry)
                            <div class="p-4 hover:bg-gray-50 transition-colors duration-150">
                                <!-- Header -->
                                <div class="flex justify-between items-start mb-3">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10 bg-purple-100 rounded-full flex items-center justify-center">
                                            <span class="text-purple-600 font-medium text-sm">
                                                {{ strtoupper(substr($enquiry->name, 0, 1)) }}
                                            </span>
                                        </div>
                                        <div class="ml-3">
                                            <h3 class="text-sm font-medium text-gray-900">{{ $enquiry->name }}</h3>
                                            <p class="text-xs text-gray-500">{{ $enquiry->email }}</p>
                                        </div>
                                    </div>
                                    <div class="flex space-x-1">
                                        <button 
                                            wire:click="viewEnquiry({{ $enquiry->id }})"
                                            class="text-indigo-600 hover:text-indigo-900 transition-colors duration-150 p-1"
                                            title="View Details">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </button>
                                        <button 
                                            wire:click="deleteEnquiry({{ $enquiry->id }})"
                                            onclick="return confirm('Are you sure you want to delete this enquiry?')"
                                            class="text-red-600 hover:text-red-900 transition-colors duration-150 p-1"
                                            title="Delete">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 text-sm mb-3">
                                    <div class="flex justify-between">
                                        <span class="text-gray-500 text-xs">Contact:</span>
                                        <span class="text-gray-900 text-xs">{{ $enquiry->contact }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-500 text-xs">Subject:</span>
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                            @if($enquiry->subject === 'ivf') bg-purple-100 text-purple-800
                                            @elseif($enquiry->subject === 'male-infertility') bg-blue-100 text-blue-800
                                            @elseif($enquiry->subject === 'egg-freezing') bg-pink-100 text-pink-800
                                            @else bg-gray-100 text-gray-800
                                            @endif">
                                            {{ ucfirst(str_replace('-', ' ', $enquiry->subject)) }}
                                        </span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-500 text-xs">Date:</span>
                                        <span class="text-gray-900 text-xs">{{ $enquiry->created_at->format('M j, Y') }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="bg-white px-4 py-3 border-t border-gray-200">
                        {{ $enquiries->links() }}
                    </div>
                @else
                    <!-- Empty State -->
                    <div class="text-center py-8 sm:py-12">
                        <svg class="mx-auto h-10 w-10 sm:h-12 sm:w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No enquiries</h3>
                        <p class="mt-1 text-sm text-gray-500">
                            @if($search)
                                No enquiries found for "{{ $search }}". 
                                <button wire:click="$set('search', '')" class="text-indigo-600 hover:text-indigo-500">Clear search</button>
                            @else
                                Get started by creating a new enquiry.
                            @endif
                        </p>
                    </div>
                @endif
            </div>

            <!-- Success Message -->
            @if (session()->has('message'))
                <div class="mt-4 p-3 sm:p-4 bg-green-50 border border-green-200 rounded-md">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-4 w-4 sm:h-5 sm:w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-green-800">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- View Enquiry Modal -->
    @if($showModal && $selectedEnquiry)
        <div class="fixed inset-0 overflow-y-auto z-50">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75" wire:click="closeModal"></div>
                </div>

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6 w-full max-w-md mx-auto">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Enquiry Details</h3>
                            <button wire:click="closeModal" class="text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>

                        <div class="space-y-4">
                            <!-- Personal Information -->
                            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg">
                                <h4 class="text-sm font-medium text-gray-900 mb-2">Personal Information</h4>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm">
                                    <div>
                                        <span class="font-medium text-gray-500">Name:</span>
                                        <p class="text-gray-900 mt-1">{{ $selectedEnquiry->name }}</p>
                                    </div>
                                    <div>
                                        <span class="font-medium text-gray-500">Email:</span>
                                        <p class="text-gray-900 mt-1 break-all">{{ $selectedEnquiry->email }}</p>
                                    </div>
                                    <div>
                                        <span class="font-medium text-gray-500">Contact:</span>
                                        <p class="text-gray-900 mt-1">{{ $selectedEnquiry->contact }}</p>
                                    </div>
                                    <div>
                                        <span class="font-medium text-gray-500">Subject:</span>
                                        <p class="text-gray-900 mt-1 capitalize">{{ str_replace('-', ' ', $selectedEnquiry->subject) }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Message -->
                            <div>
                                <h4 class="text-sm font-medium text-gray-900 mb-2">Message</h4>
                                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg max-h-40 overflow-y-auto">
                                    <p class="text-sm text-gray-700 whitespace-pre-wrap">{{ $selectedEnquiry->message }}</p>
                                </div>
                            </div>

                            <!-- Timestamp -->
                            <div class="text-sm text-gray-500">
                                Submitted on {{ $selectedEnquiry->created_at->format('F j, Y \a\t g:i A') }}
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 sm:mt-6">
                        <button 
                            type="button" 
                            wire:click="closeModal"
                            class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>