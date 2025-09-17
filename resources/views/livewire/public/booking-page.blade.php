<div>
    @section('title', 'Book an Appointment - Umeed IVF Hospital')
    @section('description', 'Schedule a consultation with Umeed IVF Hospital\'s fertility specialists. Book your appointment online for IVF, fertility treatments, and reproductive services.')
    @section('keywords', 'fertility appointment, book IVF consultation, schedule fertility doctor, IVF treatment booking, fertility clinic appointment')

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
                    Complete the form below and we'll contact you within 24 hours to confirm your appointment
                </p>
            </div>
            
            <div class="bg-white rounded-lg p-8">
                <form class="space-y-6">
                    <!-- Personal Information -->
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Personal Information</h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">First Name *</label>
                                <input type="text" id="first_name" name="first_name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]" required>
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Last Name *</label>
                                <input type="text" id="last_name" name="last_name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address *</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]" required>
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]" required>
                            </div>
                            <div>
                                <label for="dob" class="block text-sm font-medium text-gray-700 mb-1">Date of Birth *</label>
                                <input type="date" id="dob" name="dob" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]" required>
                            </div>
                            <div>
                                <label for="gender" class="block text-sm font-medium text-gray-700 mb-1">Gender *</label>
                                <select id="gender" name="gender" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]" required>
                                    <option value="">Select</option>
                                    <option value="female">Female</option>
                                    <option value="male">Male</option>
                                    <option value="other">Other</option>
                                    <option value="prefer_not_to_say">Prefer not to say</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Appointment Details -->
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Appointment Details</h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="department" class="block text-sm font-medium text-gray-700 mb-1">Select Department *</label>
                                <select id="department" name="department" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]" required>
                                    <option value="">Select Department</option>
                                    @foreach($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="doctor" class="block text-sm font-medium text-gray-700 mb-1">Select Doctor (Optional)</label>
                                <select id="doctor" name="doctor" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]">
                                    <option value="">Any Available Doctor</option>
                                    @foreach($doctors as $doctor)
                                        <option value="{{ $doctor->id }}">Dr. {{ $doctor->name }} ({{ $doctor->department->name }})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="appointment_type" class="block text-sm font-medium text-gray-700 mb-1">Appointment Type *</label>
                                <select id="appointment_type" name="appointment_type" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]" required>
                                    <option value="">Select Type</option>
                                    <option value="new_patient">New Patient Consultation</option>
                                    <option value="followup">Follow-up Visit</option>
                                    <option value="treatment">Treatment Session</option>
                                    <option value="second_opinion">Second Opinion</option>
                                    <option value="emergency">Urgent Care</option>
                                </select>
                            </div>
                            <div>
                                <label for="preferred_date" class="block text-sm font-medium text-gray-700 mb-1">Preferred Date *</label>
                                <input type="date" id="preferred_date" name="preferred_date" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]" required>
                            </div>
                            <div>
                                <label for="preferred_time" class="block text-sm font-medium text-gray-700 mb-1">Preferred Time *</label>
                                <select id="preferred_time" name="preferred_time" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]" required>
                                    <option value="">Select Time</option>
                                    <option value="morning">Morning (9:00 AM - 12:00 PM)</option>
                                    <option value="afternoon">Afternoon (12:00 PM - 3:00 PM)</option>
                                    <option value="evening">Evening (3:00 PM - 6:00 PM)</option>
                                </select>
                            </div>
                            <div>
                                <label for="alternate_date" class="block text-sm font-medium text-gray-700 mb-1">Alternate Date</label>
                                <input type="date" id="alternate_date" name="alternate_date" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Medical Information -->
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Medical Information</h3>
                        <div class="space-y-6">
                            <div>
                                <label for="reason" class="block text-sm font-medium text-gray-700 mb-1">Reason for Visit *</label>
                                <textarea id="reason" name="reason" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]" required></textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Have you been to our clinic before? *</label>
                                <div class="mt-2 space-x-6">
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="previous_visit" value="yes" class="text-[#a53692] focus:ring-[#a53692]" required>
                                        <span class="ml-2">Yes</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="previous_visit" value="no" class="text-[#a53692] focus:ring-[#a53692]">
                                        <span class="ml-2">No</span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Do you have medical records to share?</label>
                                <div class="mt-2 space-x-6">
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="has_records" value="yes" class="text-[#a53692] focus:ring-[#a53692]">
                                        <span class="ml-2">Yes</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="has_records" value="no" class="text-[#a53692] focus:ring-[#a53692]">
                                        <span class="ml-2">No</span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <label for="additional_info" class="block text-sm font-medium text-gray-700 mb-1">Additional Information</label>
                                <textarea id="additional_info" name="additional_info" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#a53692] focus:border-[#a53692]" placeholder="Please share any additional information that might be helpful for our team."></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Terms and Submit -->
                    <div>
                        <div class="mb-6">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="rounded text-[#a53692] focus:ring-[#a53692]" required>
                                <span class="ml-2 text-sm text-gray-600">I agree to the <a href="#" class="text-[#a53692] hover:underline">terms and conditions</a> and <a href="#" class="text-[#a53692] hover:underline">privacy policy</a>.</span>
                            </label>
                        </div>
                        
                        <button type="submit" class="w-full bg-[#a53692] text-white px-6 py-3 rounded-md hover:bg-[#8c2b7b] font-medium transition-colors">
                            Request Appointment
                        </button>
                        
                        <p class="text-sm text-gray-500 mt-4 text-center">
                            This is an appointment request form. Our team will contact you to confirm your appointment.
                        </p>
                    </div>
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