@props(['event'])
{{-- <a href="{{ route('product', $product->id) }}"
    class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-[1.02]"> --}}
<!-- Event Images (using first image from JSON array) -->
<div class="relative h-48 bg-gray-200">
    <img src="{{ asset(Storage::url($event->images[0])) }}" alt="Event Image" class="w-full h-full object-cover">
</div>

<div class="p-4">
    <div class="flex justify-between items-start mb-2">
        <h3 class="font-bold text-lg truncate">{{ $event->event_name }}</h3>
        <!-- Event Info -->
        <div class="flex-shrink-0 ml-2">
            <div class="flex items-center">
                <div class="w-6 h-6 rounded-full overflow-hidden">
                    {{-- <img src="{{ asset(Storage::url($event->organizer->profile_image)) }}"
                        alt="{{ $event->organizer->name }}" class="w-full h-full object-cover"> --}}
                </div>
                {{-- <span class="ml-1 text-xs text-gray-600">{{ $event->organizer->name }}</span> --}}
            </div>
        </div>
    </div>

    <div class="text-gray-600 text-sm mb-3 line-clamp-2">
        {!! $event->description !!}
    </div>

    <div class="pb-6">
        <div>

            <span class="text-lg font-bold text-gray-900">
               <p><b>Get Your Ticket@NRs. {{ $event->ticket_price }}</b></p>
            </span>
        </div>
        <button
            class="float-center bg-purple-500 text-white px-3 py-1 rounded-full text-sm transition-colors duration-300">
            Add to Cart
        </button>
    </div>
</div>
</a>
