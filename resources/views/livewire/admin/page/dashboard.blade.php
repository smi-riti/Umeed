<div class="py-6">
    <div class="px-4 sm:px-6 lg:px-8">
        <!-- Welcome Header -->
        <div class="mb-8">
            <h1 class="text-2xl font-semibold text-gray-900">Welcome to Umeed IVF Admin Dashboard</h1>
            <p class="mt-2 text-sm text-gray-600">{{ now()->format('l, F j, Y') }}</p>
        </div>
        
        <!-- Stats Section -->
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4 mb-8">
            <!-- Total Appointments -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-[#f9f0f7] rounded-md p-3">
                            <svg class="h-6 w-6 text-[#a53692]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Appointments</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">{{ $totalAppointments }}</div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-5 py-3">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-[#a53692] hover:text-[#8c2b7b]">View all</a>
                    </div>
                </div>
            </div>

            <!-- Total Doctors -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-[#f9f0f7] rounded-md p-3">
                            <svg class="h-6 w-6 text-[#a53692]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Doctors</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">{{ $totalDoctors }}</div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-5 py-3">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-[#a53692] hover:text-[#8c2b7b]">View all</a>
                    </div>
                </div>
            </div>

            <!-- Total Patients -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-[#f9f0f7] rounded-md p-3">
                            <svg class="h-6 w-6 text-[#a53692]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Patients</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">{{ $totalPatients }}</div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-5 py-3">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-[#a53692] hover:text-[#8c2b7b]">View all</a>
                    </div>
                </div>
            </div>

            <!-- Pending Appointments -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-[#f9f0f7] rounded-md p-3">
                            <svg class="h-6 w-6 text-[#a53692]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Pending Appointments</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-900">{{ $pendingAppointments }}</div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-5 py-3">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-[#a53692] hover:text-[#8c2b7b]">View all</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Charts Section -->
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 mb-8">
            <!-- Appointments by Status -->
            <div class="bg-white shadow-sm rounded-lg p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Appointments by Status</h2>
                <div class="relative h-60">
                    <div class="flex items-center h-full">
                        <div class="w-full">
                            <div class="flex mb-2">
                                <div class="w-24 text-xs text-gray-500">Pending</div>
                                <div class="flex-1">
                                    <div class="h-5 bg-yellow-100 rounded-md">
                                        <div class="h-5 bg-yellow-400 rounded-md" style="width: {{ max(5, ($appointmentsByStatus['pending'] / max(1, $totalAppointments) * 100)) }}%"></div>
                                    </div>
                                </div>
                                <div class="w-12 text-right text-xs text-gray-500">{{ $appointmentsByStatus['pending'] }}</div>
                            </div>
                            <div class="flex mb-2">
                                <div class="w-24 text-xs text-gray-500">Scheduled</div>
                                <div class="flex-1">
                                    <div class="h-5 bg-blue-100 rounded-md">
                                        <div class="h-5 bg-blue-400 rounded-md" style="width: {{ max(5, ($appointmentsByStatus['scheduled'] / max(1, $totalAppointments) * 100)) }}%"></div>
                                    </div>
                                </div>
                                <div class="w-12 text-right text-xs text-gray-500">{{ $appointmentsByStatus['scheduled'] }}</div>
                            </div>
                            <div class="flex mb-2">
                                <div class="w-24 text-xs text-gray-500">Completed</div>
                                <div class="flex-1">
                                    <div class="h-5 bg-green-100 rounded-md">
                                        <div class="h-5 bg-green-400 rounded-md" style="width: {{ max(5, ($appointmentsByStatus['completed'] / max(1, $totalAppointments) * 100)) }}%"></div>
                                    </div>
                                </div>
                                <div class="w-12 text-right text-xs text-gray-500">{{ $appointmentsByStatus['completed'] }}</div>
                            </div>
                            <div class="flex mb-2">
                                <div class="w-24 text-xs text-gray-500">Cancelled</div>
                                <div class="flex-1">
                                    <div class="h-5 bg-red-100 rounded-md">
                                        <div class="h-5 bg-red-400 rounded-md" style="width: {{ max(5, ($appointmentsByStatus['cancelled'] / max(1, $totalAppointments) * 100)) }}%"></div>
                                    </div>
                                </div>
                                <div class="w-12 text-right text-xs text-gray-500">{{ $appointmentsByStatus['cancelled'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Appointments by Day -->
            <div class="bg-white shadow-sm rounded-lg p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">This Week's Appointments</h2>
                <div class="relative h-60">
                    <div class="flex items-end justify-between h-48 gap-3">
                        @php
                            $days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                            $maxCount = max(1, max($appointmentsByDay->values()->toArray() ?: [1]));
                        @endphp
                        
                        @foreach ($days as $day)
                            <div class="flex flex-col items-center flex-1">
                                @php
                                    $count = $appointmentsByDay[$day] ?? 0;
                                    $heightPercentage = ($count / $maxCount) * 100;
                                    $heightPercentage = max(5, $heightPercentage); // Minimum 5% height for visibility
                                @endphp
                                <div class="w-full bg-[#f9f0f7] rounded-t-md" style="height: {{ $heightPercentage }}%"></div>
                                <div class="mt-2 text-xs text-gray-500">{{ $day }}</div>
                                <div class="text-xs font-medium text-gray-700">{{ $count }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recent Appointments Table -->
        <div class="bg-white shadow-sm rounded-lg overflow-hidden mb-8">
            <div class="px-6 py-5 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900">Recent Appointments</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Patient</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Doctor</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date & Time</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($recentAppointments as $appointment)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $appointment->patient ? $appointment->patient->name : 'Unknown Patient' }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                {{ $appointment->patient ? $appointment->patient->email : 'No Email' }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            Dr. {{ $appointment->doctor && $appointment->doctor->user ? $appointment->doctor->user->name : 'Unknown' }}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{ $appointment->doctor && $appointment->doctor->department ? $appointment->doctor->department->name : 'No Department' }}
                                        </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{ $appointment->appointment_date ? $appointment->appointment_date->format('M d, Y') : 'No Date' }}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{ $appointment->appointment_time ? $appointment->appointment_time->format('h:i A') : 'No Time' }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @php
                                        $statusColors = [
                                            'pending' => 'bg-yellow-100 text-yellow-800',
                                            'scheduled' => 'bg-blue-100 text-blue-800',
                                            'completed' => 'bg-green-100 text-green-800',
                                            'cancelled' => 'bg-red-100 text-red-800',
                                        ];
                                        $statusColor = $statusColors[$appointment->status] ?? 'bg-gray-100 text-gray-800';
                                    @endphp
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusColor }}">
                                        {{ ucfirst($appointment->status) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-[#a53692] hover:text-[#8c2b7b] mr-3">View</a>
                                    <a href="#" class="text-[#a53692] hover:text-[#8c2b7b]">Edit</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">
                                    No recent appointments found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="bg-gray-50 px-6 py-3 border-t border-gray-200">
                <a href="#" class="text-sm font-medium text-[#a53692] hover:text-[#8c2b7b]">
                    View all appointments
                </a>
            </div>
        </div>
        
        <!-- Doctor and Patient Information -->
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
            <!-- Top Doctors -->
            <div class="bg-white shadow-sm rounded-lg overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">Top Doctors</h3>
                </div>
                <ul class="divide-y divide-gray-200">
                    @forelse ($topDoctors as $doctor)
                        <li class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-[#f9f0f7] flex items-center justify-center">
                                    @if ($doctor->image_url)
                                        <img class="h-10 w-10 rounded-full object-cover" 
                                             src="{{ $doctor->image_url }}" 
                                             alt="{{ $doctor->user ? $doctor->user->name : 'Doctor' }}">
                                    @else
                                        @if($doctor->user)
                                            <div class="h-10 w-10 rounded-full flex items-center justify-center text-white font-medium text-sm"
                                                 style="background-color: {{ $doctor->avatar_color }}">
                                                {{ $doctor->initials }}
                                            </div>
                                        @else
                                            <svg class="h-6 w-6 text-[#a53692]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        @endif
                                    @endif
                                </div>
                                <div class="ml-4 flex-1">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h4 class="text-sm font-medium text-gray-900">
                                                Dr. {{ $doctor->user ? $doctor->user->name : 'Unknown Doctor' }}
                                            </h4>
                                            <p class="text-sm text-gray-500">{{ $doctor->department->name ?? 'No Department' }}</p>
                                        </div>
                                        <div class="flex items-center text-sm text-gray-500">
                                            <svg class="h-5 w-5 text-[#a53692] mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            {{ $doctor->appointments_count }} appointments
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @empty
                        <li class="px-6 py-4 text-center text-sm text-gray-500">
                            No doctors found
                        </li>
                    @endforelse
                </ul>
                <div class="bg-gray-50 px-6 py-3 border-t border-gray-200">
                    <a href="#" class="text-sm font-medium text-[#a53692] hover:text-[#8c2b7b]">
                        View all doctors
                    </a>
                </div>
            </div>
            
            <!-- Recent Patients -->
            <div class="bg-white shadow-sm rounded-lg overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">Recent Patients</h3>
                </div>
                <ul class="divide-y divide-gray-200">
                    @forelse ($recentPatients as $patient)
                        <li class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-[#f9f0f7] flex items-center justify-center">
                                    <svg class="h-6 w-6 text-[#a53692]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div class="ml-4 flex-1">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h4 class="text-sm font-medium text-gray-900">{{ $patient->name ?? 'Unknown Patient' }}</h4>
                                            <p class="text-sm text-gray-500">{{ $patient->email ?? 'No Email' }}</p>
                                        </div>
                                        <div>
                                            <a href="#" class="text-sm font-medium text-[#a53692] hover:text-[#8c2b7b]">
                                                View profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @empty
                        <li class="px-6 py-4 text-center text-sm text-gray-500">
                            No recent patients found
                        </li>
                    @endforelse
                </ul>
                <div class="bg-gray-50 px-6 py-3 border-t border-gray-200">
                    <a href="#" class="text-sm font-medium text-[#a53692] hover:text-[#8c2b7b]">
                        View all patients
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
