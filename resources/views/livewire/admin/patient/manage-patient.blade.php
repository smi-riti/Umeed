<div class="p-6">
    {{-- Header --}}
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Patient Management</h2>
        <p class="text-gray-600">Manage all patient records in the system</p>
    </div>

    {{-- Flash Message --}}
    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    {{-- Patients Table --}}
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Patient ID
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Phone
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Gender
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Age
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($patientsList as $patient)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                #{{ $patient['id'] }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $patient['name'] }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $patient['email'] }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $patient['phone'] ?? 'N/A' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                    {{ $patient['gender'] == 'male' ? 'bg-blue-100 text-blue-800' : 
                                       ($patient['gender'] == 'female' ? 'bg-pink-100 text-pink-800' : 'bg-gray-100 text-gray-800') }}">
                                    {{ ucfirst($patient['gender']) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $patient['age'] }} years
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button wire:click="showPatientDetails({{ $patient['id'] }})" 
                                        class="text-indigo-600 hover:text-indigo-900 mr-3">
                                    View
                                </button>
                                <button wire:click="deletePatient({{ $patient['id'] }})" 
                                        class="text-red-600 hover:text-red-900"
                                        onclick="return confirm('Are you sure you want to delete this patient?')">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-4 text-center text-sm text-gray-500">
                                No patients found in the system.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Patient Details Modal --}}
    @if($showDetails && $selectedPatient)
        <div class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
            <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
                {{-- Modal Header --}}
                <div class="flex justify-between items-center pb-3">
                    <h3 class="text-xl font-bold text-gray-800">Patient Details</h3>
                    <button wire:click="closeDetails" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                {{-- Modal Body --}}
                <div class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Patient ID</label>
                            <p class="mt-1 text-sm text-gray-900">#{{ $selectedPatient->id }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Full Name</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $selectedPatient->name }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $selectedPatient->email }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Phone</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $selectedPatient->phone ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Gender</label>
                            <p class="mt-1 text-sm text-gray-900 capitalize">{{ $selectedPatient->gender }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Age</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $selectedPatient->age }} years</p>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">User Account</label>
                        <p class="mt-1 text-sm text-gray-900">
                            Registered: {{ $selectedPatient->user->created_at->format('M d, Y') }}
                        </p>
                    </div>
                </div>

                {{-- Modal Footer --}}
                <div class="flex justify-end pt-4 mt-4 border-t">
                    <button wire:click="closeDetails" 
                            class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition">
                        Close
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>