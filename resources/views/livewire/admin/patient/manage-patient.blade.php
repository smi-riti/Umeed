<div class="p-4 sm:p-6">
    {{-- Header --}}
    <div class="mb-4 sm:mb-6">
        <h2 class="text-xl sm:text-2xl font-bold text-gray-800">Patient Management</h2>
        <p class="text-gray-600 text-sm sm:text-base">Manage all patient records in the system</p>
    </div>

    {{-- Flash Message --}}
    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 text-sm">
            {{ session('message') }}
        </div>
    @endif

    {{-- Patients Table --}}
    <div class="bg-white rounded-lg shadow overflow-hidden">
        {{-- Desktop Table (hidden on mobile) --}}
        <div class="hidden md:block overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Patient ID
                        </th>
                        <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                        </th>
                        <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Phone
                        </th>
                        <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Gender
                        </th>
                        <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Age
                        </th>
                        <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($patientsList as $patient)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 lg:px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                #{{ $patient->id }}
                            </td>
                            <td class="px-4 lg:px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $patient['name'] }}
                            </td>
                            <td class="px-4 lg:px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $patient['email'] }}
                            </td>
                            <td class="px-4 lg:px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $patient['phone'] ?? 'N/A' }}
                            </td>
                            <td class="px-4 lg:px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                    {{ $patient['gender'] == 'male' ? 'bg-blue-100 text-blue-800' : 
                                       ($patient['gender'] == 'female' ? 'bg-pink-100 text-pink-800' : 'bg-gray-100 text-gray-800') }}">
                                    {{ ucfirst($patient['gender']) }}
                                </span>
                            </td>
                            <td class="px-4 lg:px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $patient['age'] }} years
                            </td>
                            <td class="px-4 lg:px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="{{ route('admin.patients.view',  $patient->id) }}" 
                                        class="text-indigo-600 hover:text-indigo-900 mr-3">
                                    View
                                </a>
                                <button wire:click="deletePatient({{ $patient['id'] }})" 
                                        class="text-red-600 hover:text-red-900"
                                        onclick="return confirm('Are you sure you want to delete this patient?')">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 lg:px-6 py-4 text-center text-sm text-gray-500">
                                No patients found in the system.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Tablet Layout (shown on md) --}}
        <div class="hidden sm:block md:hidden overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Patient
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Contact
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Details
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($patientsList as $patient)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">#{{ $patient['id'] }}</div>
                                <div class="text-sm text-gray-900">{{ $patient['name'] }}</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-500">{{ $patient['email'] }}</div>
                                <div class="text-sm text-gray-500">{{ $patient['phone'] ?? 'N/A' }}</div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                    {{ $patient['gender'] == 'male' ? 'bg-blue-100 text-blue-800' : 
                                       ($patient['gender'] == 'female' ? 'bg-pink-100 text-pink-800' : 'bg-gray-100 text-gray-800') }}">
                                    {{ ucfirst($patient['gender']) }}
                                </span>
                                <div class="text-sm text-gray-500 mt-1">{{ $patient['age'] }} years</div>
                            </td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex flex-col space-y-1">
                                    <button wire:click="showPatientDetails({{ $patient['id'] }})" 
                                            class="text-indigo-600 hover:text-indigo-900 text-left">
                                        View Details
                                    </button>
                                    <button wire:click="deletePatient({{ $patient['id'] }})" 
                                            class="text-red-600 hover:text-red-900 text-left"
                                            onclick="return confirm('Are you sure you want to delete this patient?')">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-4 text-center text-sm text-gray-500">
                                No patients found in the system.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Mobile Cards (shown on mobile) --}}
        <div class="sm:hidden divide-y divide-gray-200">
            @forelse($patientsList as $patient)
                <div class="p-4 hover:bg-gray-50">
                    {{-- Header --}}
                    <div class="flex justify-between items-start mb-3">
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">{{ $patient['name'] }}</h3>
                            <p class="text-xs text-gray-500">#{{ $patient['id'] }}</p>
                        </div>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                            {{ $patient['gender'] == 'male' ? 'bg-blue-100 text-blue-800' : 
                               ($patient['gender'] == 'female' ? 'bg-pink-100 text-pink-800' : 'bg-gray-100 text-gray-800') }}">
                            {{ ucfirst($patient['gender']) }}
                        </span>
                    </div>

                    {{-- Details --}}
                    <div class="space-y-2 text-sm mb-3">
                        <div class="flex justify-between">
                            <span class="text-gray-500">Email:</span>
                            <span class="text-gray-900 truncate ml-2">{{ $patient['email'] }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-500">Phone:</span>
                            <span class="text-gray-900">{{ $patient['phone'] ?? 'N/A' }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-500">Age:</span>
                            <span class="text-gray-900">{{ $patient['age'] }} years</span>
                        </div>
                    </div>

                    {{-- Actions --}}
                    <div class="flex justify-end space-x-3 pt-2 border-t border-gray-100">
                        <button wire:click="" 
                                class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">
                            View
                        </button>
                        <button wire:click="deletePatient({{ $patient['id'] }})" 
                                class="text-red-600 hover:text-red-900 text-sm font-medium"
                                onclick="return confirm('Are you sure you want to delete this patient?')">
                            Delete
                        </button>
                    </div>
                </div>
            @empty
                <div class="p-8 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                    </svg>
                    <h3 class="mt-2 text-sm font-medium text-gray-900">No patients found</h3>
                    <p class="mt-1 text-sm text-gray-500">No patients are currently in the system.</p>
                </div>
            @endforelse
        </div>
 
</div>