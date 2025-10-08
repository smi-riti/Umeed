<div>
    @section('title', 'Book an Appointment - Umeed IVF Hospital')
    @section('description', 'Schedule a consultation with Umeed IVF Hospital\'s fertility specialists. Book your appointment online for IVF, fertility treatments, and reproductive services.')

    <!-- Hero Section -->
    <section class="bg-[#f9f0f7] pt-24 pb-16 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Book an Appointment</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Schedule a consultation with our fertility specialists to begin your journey toward parenthood.
                </p>
            </div>
        </div>
    </section>

    <!-- Booking Options Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">How to Book</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">Choose Your Booking Method</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We offer multiple convenient ways to schedule your appointment with our fertility specialists
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Online Booking -->
                <div class="bg-gray-50 p-8 rounded-lg text-center">
                    <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Online Booking</h3>
                    <p class="text-gray-600 mb-6">Complete our secure online booking form to schedule your appointment at your convenience, 24/7.</p>
                    <a href="#booking-form" class="inline-block px-6 py-3 bg-[#a53692] text-white font-medium rounded-md hover:bg-[#8c2b7b] transition-colors">
                        Book Online
                    </a>
                </div>
                
                <!-- Phone Booking -->
                <div class="bg-gray-50 p-8 rounded-lg text-center">
                    <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Call Us</h3>
                    <p class="text-gray-600 mb-6">Speak directly with our patient coordinators to schedule your appointment and ask any questions.</p>
                    <a href="tel:+15551234567" class="inline-block px-6 py-3 bg-[#a53692] text-white font-medium rounded-md hover:bg-[#8c2b7b] transition-colors">
                        Call (555) 123-4567
                    </a>
                </div>
                
                <!-- Email Booking -->
                <div class="bg-gray-50 p-8 rounded-lg text-center">
                    <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Email Request</h3>
                    <p class="text-gray-600 mb-6">Send us an email with your preferred dates and times, and we'll contact you to confirm your appointment.</p>
                    <a href="mailto:appointments@umeedivf.com" class="inline-block px-6 py-3 bg-[#a53692] text-white font-medium rounded-md hover:bg-[#8c2b7b] transition-colors">
                        Email Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Online Booking Form -->
    <section id="booking-form" class="py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Schedule Now</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">Online Appointment Request</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Complete the steps below and we'll contact you within 24 hours to confirm your appointment
                </p>
            </div>
            
            <div class="bg-white rounded-lg p-8 shadow-md">
                <!-- Progress Steps -->
                <div class="mb-10 relative">
                    <!-- Progress Bar -->
                    <div class="h-1 bg-gray-200 absolute top-5 left-0 w-full z-0">
                        <div class="h-1 bg-[#a53692] transition-all duration-500" style="width: {{ $currentStep == 1 ? '0%' : '100%' }};"></div>
                    </div>
                    
                    <!-- Step Circles -->
                    <div class="flex justify-between relative z-10">
                        <!-- Step 1 -->
                        <div class="text-center">
                            <div class="{{ $currentStep >= 1 ? 'bg-[#a53692] text-white' : 'bg-white text-gray-500 border border-gray-300' }} w-10 h-10 rounded-full flex items-center justify-center mx-auto mb-2 transition-all duration-300">
                                @if($currentStep > 1)
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                @else
                                    <span>1</span>
                                @endif
                            </div>
                            <div class="text-sm font-medium {{ $currentStep >= 1 ? 'text-[#a53692]' : 'text-gray-500' }}">Personal Info</div>
                        </div>
                        
                        <!-- Step 2 -->
                        <div class="text-center">
                            <div class="{{ $currentStep >= 2 ? 'bg-[#a53692] text-white' : 'bg-white text-gray-500 border border-gray-300' }} w-10 h-10 rounded-full flex items-center justify-center mx-auto mb-2 transition-all duration-300">
                                <span>2</span>
                            </div>
                            <div class="text-sm font-medium {{ $currentStep >= 2 ? 'text-[#a53692]' : 'text-gray-500' }}">Appointment Details</div>
                        </div>
                    </div>
                </div>
                
                <form wire:submit.prevent="submitForm" class="space-y-6">
                    <!-- Step 1: Personal Information -->
                    @if($currentStep == 1)
                    <div class="space-y-6">
                        <div class="flex items-center mb-6">
                            <div class="bg-[#f9f0f7] w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 ml-4">Personal Information</h3>
                        </div>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                                <input type="text" id="name" wire:model="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]">
                                @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number *</label>
                                <input type="tel" id="phone" wire:model="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]">
                                @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address *</label>
                                <input type="email" id="email" wire:model="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]">
                                @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        
                        <div class="flex justify-end">
                            <button type="button" wire:click="nextStep" class="bg-[#a53692] text-white px-6 py-3 rounded-md hover:bg-[#8c2b7b] font-medium transition-colors flex items-center">
                                Next Step
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    @endif
                    
                    <!-- Step 2: Appointment Details -->
                    @if($currentStep == 2)
                    <div class="space-y-6">
                        <div class="flex items-center mb-6">
                            <div class="bg-[#f9f0f7] w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 ml-4">Appointment Details</h3>
                        </div>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="appointment_date" class="block text-sm font-medium text-gray-700 mb-1">Preferred Date *</label>
                                <input type="date" id="appointment_date" wire:model="appointment_date" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]">
                                @error('appointment_date') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Additional Notes (Optional)</label>
                                <textarea id="notes" wire:model="notes" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]" placeholder="Please describe the reason for your visit, any symptoms, medical history, or other information that might be helpful for our team."></textarea>
                                @error('notes') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                <p class="text-sm text-gray-500 mt-1">Maximum 1000 characters.</p>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label class="inline-flex items-center">
                                <input type="checkbox" wire:model="terms_accepted" class="rounded text-[#a53692] focus:ring-[#a53692]">
                                <span class="ml-2 text-sm text-gray-600">I agree to the <a href="#" class="text-[#a53692] hover:underline">terms and conditions</a> and <a href="#" class="text-[#a53692] hover:underline">privacy policy</a>.</span>
                            </label>
                            @error('terms_accepted') <span class="block text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="flex justify-between">
                            <button type="button" wire:click="previousStep" class="border border-gray-300 bg-white text-gray-700 px-6 py-3 rounded-md hover:bg-gray-50 font-medium transition-colors flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                                </svg>
                                Previous
                            </button>
                            
                            <button type="submit" class="bg-[#a53692] text-white px-6 py-3 rounded-md hover:bg-[#8c2b7b] font-medium transition-colors flex items-center">
                                Submit Appointment Request
                                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        
                        <p class="text-sm text-gray-500 mt-4 text-center">
                            This is an appointment request form. Our team will contact you within 24 hours to confirm your appointment.
                        </p>
                    </div>
                    @endif
                    
                    <!-- Success Message (after form submission) -->
                    @if($currentStep == 3)
                    <div class="text-center py-12">
                        <div class="w-20 h-20 bg-[#f9f0f7] rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Appointment Request Submitted!</h3>
                        <p class="text-gray-600 mb-8">
                            Thank you for submitting your appointment request. We've sent a confirmation email to <span class="font-medium">{{ $email }}</span>. 
                            Our team will contact you within 24 hours to confirm your appointment details.
                        </p>
                        <div class="border-t border-gray-200 pt-6">                            
                            <a wire:navigate href="{{ route('home') }}" class="inline-block px-6 py-3 bg-[#a53692] text-white font-medium rounded-md hover:bg-[#8c2b7b] transition-colors">
                                Return to Homepage
                            </a>
                        </div>
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </section>

    <!-- What to Expect -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Prepare for Your Visit</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">What to Expect</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Here's what you can expect during your first visit to Umeed IVF Hospital
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Before Your Visit -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Before Your Visit</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Complete your registration forms online (sent via email after booking)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Gather your medical records, especially any previous fertility tests or treatments</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Make a list of questions you'd like to ask your doctor</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Prepare a list of current medications and supplements</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">If possible, bring your partner to the appointment</span>
                        </li>
                    </ul>
                </div>
                
                <!-- During Your Visit -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 005 10a6 6 0 0012 0c0-.352-.035-.696-.1-1.028a4.96 4.96 0 00-1.535-2.587 5 5 0 00-3.365-1.385z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">During Your Visit</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Comprehensive discussion of your medical history and fertility concerns</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Physical examination and possibly initial diagnostic tests</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Discussion of potential treatment options tailored to your situation</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Meeting with a financial counselor to discuss coverage and payment options</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Opportunity to ask questions and express concerns</span>
                        </li>
                    </ul>
                </div>
                
                <!-- After Your Visit -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <div class="w-16 h-16 bg-[#f9f0f7] rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#a53692]" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">After Your Visit</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">You'll receive a personalized treatment plan via our patient portal</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Schedule any recommended diagnostic tests</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Our nursing team will follow up within 48 hours to answer any questions</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Access to our online patient resources and educational materials</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Begin your personalized fertility journey with our full support</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Insurance & Payment -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-sm font-semibold text-[#a53692] tracking-wider uppercase">Financial Information</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">Insurance & Payment Options</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We strive to make fertility treatments accessible through various payment and insurance options
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Insurance Coverage</h3>
                    <p class="text-gray-600 mb-6">
                        We work with many major insurance providers to maximize your coverage for fertility treatments.
                        Our financial counselors will verify your benefits before treatment begins and explain your coverage in detail.
                    </p>
                    
                    <h4 class="text-lg font-semibold text-gray-900 mb-3">In-Network Providers:</h4>
                    <ul class="grid grid-cols-2 gap-3 mb-6">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-[#a53692] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Aetna</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-[#a53692] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Blue Cross Blue Shield</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-[#a53692] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Cigna</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-[#a53692] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">United Healthcare</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-[#a53692] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Humana</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-[#a53692] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">And more...</span>
                        </li>
                    </ul>
                    
                    <p class="text-gray-600">
                        We also accept out-of-network benefits and will help file claims on your behalf.
                    </p>
                </div>
                
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Payment Options</h3>
                    <p class="text-gray-600 mb-6">
                        We understand that fertility treatments represent a significant investment.
                        That's why we offer multiple payment options to make your care more accessible:
                    </p>
                    
                    <ul class="space-y-4 mb-6">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <span class="font-medium text-gray-900">IVF Treatment Packages</span>
                                <p class="text-gray-600 text-sm mt-1">Bundled services at reduced rates for comprehensive treatment cycles</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <span class="font-medium text-gray-900">Financing Options</span>
                                <p class="text-gray-600 text-sm mt-1">Low-interest payment plans through our financing partners</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <span class="font-medium text-gray-900">Multi-Cycle Discounts</span>
                                <p class="text-gray-600 text-sm mt-1">Save on subsequent treatment cycles with our loyalty program</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#a53692] mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <span class="font-medium text-gray-900">Fertility Grants</span>
                                <p class="text-gray-600 text-sm mt-1">Our financial counselors can guide you through fertility grant applications</p>
                            </div>
                        </li>
                    </ul>
                    
                    <a href="#" class="inline-flex items-center text-[#a53692] font-medium">
                        Download our financial information packet
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-[#a53692]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div class="mb-6 md:mb-0 md:w-2/3">
                    <h2 class="text-3xl font-bold text-white mb-4">Ready to Take the First Step?</h2>
                    <p class="text-lg text-white opacity-90">Schedule your appointment today and begin your journey toward building your family.</p>
                </div>
                <div>
                    <a href="#booking-form" class="inline-block px-6 py-3 bg-white text-[#a53692] font-medium rounded-md hover:bg-gray-100 transition-colors">
                        Book Now
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>