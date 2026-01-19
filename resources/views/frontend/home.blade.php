<x-frontend-layout>


    <section>
        <div class="container py-20 grid grid-cols-2 items-center gap-5">
            <div>
                <img class="w-full" src="{{ asset('frontend/images/organizer.jpg') }}" alt="Organizer">

            </div>
            <div>
                <form action="" method="post">
                    @csrf
                    <div>
                        <label for="name">Enter Your Name</label>
                        <input type="text" name="name" id="name" class="w-full px-2 py-1 border rounded bg-"  >

                        <label for="email">Your Email</label>
                        <input type="email" name="email" id="email" class="w-full px-2 py-1 border rounded">

                        <label for="contact">Contact Number</label>
                        <input type="phone" name="contact" id="contact" class="w-full px-2 py-1 border rounded">

                        <label for="event_name">Enter Event Name</label>
                        <input type="text" name="event_name" id="event_name" class="w-full px-2 py-1 border rounded">

                        <label for="event_type">Choose an event type</label>
                        <select name="event_type" id="event_type">
                            <option value="concert">Concert</option>
                            <option value="workshop">Workshop</option>
                            <option value="public">Any other public event</option>
                        </select>

                        <input type="submit">

                    </div>

                </form>
            </div>
        </div>
    </section>

</x-frontend-layout>
