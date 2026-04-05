<x-frontend-layout>
<section class="bg-gray-50 py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-900">Featured Organizers</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($organizers as $organizer)
                {{-- <a href="{{ route('', $shop->id) }}"
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                    <div class="relative h-48 bg-gray-200"> --}}
                        <!-- Shop Image -->
                        <img src="{{ asset(Storage::url($organizer->profile_image)) }}" alt="{{ $organizer->name }}"
                            class="w-full h-full object-cover">
                        <!-- Shop Type Badge -->

                    </div>

                    <div class="p-6">
                        <div class="space-y-2">
                            <div class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 mr-2 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>{{ $organizer->address }}</span>
                            </div>

                            <div class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 mr-2 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                <span>{{ $organizer->contact }}</span>
                            </div>

                            <div class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 mr-2 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span>{{ $organizer->email }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
    <div class="min-h-screen bg-gradient-to-b from-gray-50 to-white py-12 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <!-- Left Column - Image Section -->
                    <div class="bg-gradient-to-br from-purple-600 to-indigo-700 p-12 flex flex-col justify-center">
                        <div class="text-center">
                            <div class="mb-8">
                                <div
                                    class="w-24 h-24 bg-white/20 rounded-full mx-auto flex items-center justify-center">
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
                                        Your Name
                                    </label>
                                    <input type="text" name="name"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                        placeholder="Enter Your Name">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">
                                        Your Email
                                    </label>
                                    <input type="email" name="email"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                        placeholder="Enter Your Email Address">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">
                                        Contact Number
                                    </label>
                                    <input type="tel" name="contact"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                        placeholder="Enter Your Contact Number">
                                </div>
                            </div>

                            <!-- Event Section -->
                            <div class="space-y-4 pt-4">
                                <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Event Details</h3>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">
                                        Event Name
                                    </label>
                                    <input type="text" name="event_name"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                        placeholder="Enter Your Event Name">
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
