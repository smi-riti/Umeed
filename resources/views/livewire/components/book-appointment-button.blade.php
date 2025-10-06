<div>
    <!-- Fixed Book Appointment Button with Constant Pulse -->
    <div class="fixed bottom-6 right-6 z-50">
        <a href="{{ route('booking') }}"
            class="bg-[#a53692] hover:bg-[#8c2b7b] text-white font-medium py-4 px-6 rounded-full shadow-2xl transition-all duration-300 transform hover:scale-105 hover:-translate-y-1 flex items-center justify-center animate-pulse"
            onclick="scrollToAppointment()">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                </path>
            </svg>
            Book Appointment
        </a>
    </div>

    <script>
        function scrollToAppointment() {
            const appointmentSection = document.querySelector('section.bg-\\[\\#a53692\\]');
            if (appointmentSection) {
                appointmentSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    </script>
</div>
