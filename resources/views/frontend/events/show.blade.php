<x-frontend-layout>
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Left: Image + Details -->
            <div>
                @if($event->image)
                    <img src="{{ asset('storage/' . $event->image) }}"
                         class="w-full rounded-3xl shadow-xl object-cover h-[500px]">
                @else
                    <div class="w-full h-[500px] bg-gradient-to-br from-purple-600 to-indigo-700 rounded-3xl flex items-center justify-center text-white text-8xl">
                        📅
                    </div>
                @endif

                <div class="mt-8 bg-white rounded-3xl shadow p-8">
                    <h2 class="text-2xl font-bold mb-4">About This Event</h2>
                    <p class="text-gray-600 leading-relaxed">{{ $event->description }}</p>
                </div>
            </div>

            <!-- Right: Booking Card -->
            <div class="lg:sticky lg:top-8 h-fit">
                <div class="bg-white rounded-3xl shadow-xl p-8">
                    <h1 class="text-4xl font-bold">{{ $event->title }}</h1>
                    <p class="text-gray-600 mt-3 text-xl">
                        {{ $event->date->format('d F Y') }} • {{ $event->location ?? 'Kathmandu' }}
                    </p>

                    <div class="my-8 border-t border-b py-6">
                        <p class="text-5xl font-bold text-purple-600">Rs. {{ number_format($event->price ?? 0) }}</p>
                        <p class="text-sm text-gray-500">per ticket</p>
                    </div>

                    @auth
                    <form action="{{ route('booking.store', $event) }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2">Number of Tickets</label>
                            <input type="number" name="quantity" value="1" min="1" max="10"
                                   class="w-full px-6 py-4 border border-gray-300 rounded-2xl text-2xl focus:ring-purple-500">
                        </div>

                        <button type="submit"
                                class="w-full bg-gradient-to-r from-purple-600 to-indigo-700 text-white py-5 rounded-2xl font-semibold text-xl hover:from-purple-700 hover:to-indigo-800 transition">
                            Book Now with Khalti
                        </button>
                    </form>
                    @else
                    <a href="{{ route('login') }}"
                       class="block w-full text-center bg-gradient-to-r from-purple-600 to-indigo-700 text-white py-5 rounded-2xl font-semibold text-xl">
                        Login to Book Ticket
                    </a>
                    @endauth

                    <div class="mt-6 text-center text-sm text-gray-500">
                        Organized by: <strong>{{ $event->organizer->name ?? 'Unknown' }}</strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Events -->
        @if($relatedEvents->count())
        <div class="mt-16">
            <h3 class="text-2xl font-semibold mb-6">More Events by {{ $event->organizer->name ?? '' }}</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($relatedEvents as $related)
                    <a href="{{ route('event.show', $related) }}" class="block bg-white rounded-2xl overflow-hidden shadow hover:shadow-xl transition">
                        <div class="h-48 bg-gray-200 flex items-center justify-center text-4xl">📅</div>
                        <div class="p-5">
                            <h4 class="font-semibold">{{ $related->title }}</h4>
                            <p class="text-sm text-gray-600 mt-1">{{ $related->date->format('d M Y') }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</x-frontend-layout>
