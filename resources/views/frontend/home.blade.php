<x-frontend-layout>


    <div class="min-h-screen bg-gradient-to-b from-gray-50 to-white py-12 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <!-- Left Column - Image Section -->
                    <div class="bg-gradient-to-br from-purple-600 to-indigo-700 p-12 flex flex-col justify-center">
                        <div class="text-center">
                            <div class="mb-8">
                                <div class="w-24 h-24 bg-white/20 rounded-full mx-auto flex items-center justify-center">
                                    <i class="fas fa-calendar-plus text-white text-4xl"></i>
                                </div>
                            </div>
                            <h2 class="text-3xl font-bold text-white mb-4">List Your Event</h2>
                            <p class="text-purple-100 text-lg mb-8">
                                Reach thousands of attendees with our platform. Your event will be live within minutes.
                            </p>
                            <div class="space-y-4">
                                <div class="flex items-center text-purple-100">
                                    <i class="fas fa-check-circle mr-3 text-lg"></i>
                                    <span>Quick approval process</span>
                                </div>
                                <div class="flex items-center text-purple-100">
                                    <i class="fas fa-check-circle mr-3 text-lg"></i>
                                    <span>Secure ticket sales</span>
                                </div>
                                <div class="flex items-center text-purple-100">
                                    <i class="fas fa-check-circle mr-3 text-lg"></i>
                                    <span>Real-time analytics</span>
                                </div>
                                <div class="flex items-center text-purple-100">
                                    <i class="fas fa-check-circle mr-3 text-lg"></i>
                                    <span>24/7 support</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Form Section -->
                    <div class="p-12">
                        <div class="mb-8">
                            <h1 class="text-3xl font-bold text-gray-900 mb-2">Register Your Event</h1>
                            <p class="text-gray-600">Fill in the details below to list your event</p>
                        </div>

                        <form action="{{ route('event_request') }}" method="POST" class="space-y-6">
                            @csrf
                            <!-- Organizer Section -->
                            <div class="space-y-4">
                                <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Organizer Information</h3>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">
                                        Enter Your Name
                                    </label>
                                    <input type="text" name="name"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                        placeholder="John Doe">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">
                                        Your Email
                                    </label>
                                    <input type="email" name="email"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                        placeholder="john@example.com">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">
                                        Contact Number
                                    </label>
                                    <input type="tel" name="contact"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                        placeholder="+1 (555) 123-4567">
                                </div>
                            </div>

                            <!-- Event Section -->
                            <div class="space-y-4 pt-4">
                                <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Event Details</h3>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">
                                        Enter Event Name
                                    </label>
                                    <input type="text" name="event_name"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                        placeholder="Summer Music Festival 2024">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">
                                        Choose an event type
                                    </label>
                                    <div class="relative">
                                        <select name="event_type"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent appearance-none bg-white">
                                            <option value="" disabled selected>Select event type</option>
                                            <option value="concert">Concert</option>
                                            <option value="workshop">Workshop</option>
                                            <option value="conference">Conference</option>
                                            <option value="sports">Sports</option>
                                            <option value="festival">Festival</option>
                                            <option value="seminar">Seminar</option>
                                            <option value="exhibition">Exhibition</option>
                                        </select>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-6">
                                <button type="submit"
                                    class="w-full py-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-medium rounded-lg hover:opacity-90 transition flex items-center justify-center">
                                    <i class="fas fa-paper-plane mr-2"></i>
                                    Submit Event
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-frontend-layout>
