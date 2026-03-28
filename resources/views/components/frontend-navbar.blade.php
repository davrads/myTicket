<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white p-2 rounded-lg">
                    <img src="{{ asset(Storage::url($company->logo)) }}" class="h-10" alt="$company->name">
                </div>
                <span class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">
                    MyTicket
                </span>
            </div>

             <!-- Search Bar -->
            <div class="hidden md:block flex-1 max-w-xl mx-8">
                <form class="relative">
                    <input
                        type="text"
                        placeholder="Search events, concerts, workshops"
                        class="w-full px-4 py-2 pl-10 pr-12 border text-center text-purple-600 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent placeholder-gray-500"
                    >
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    <button type="submit" class="absolute right-2 top-1.5 text-purple-600 hover:text-purple-800">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </form>
            </div>



            <!-- Auth Buttons -->
            <div class="flex items-center space-x-4">
                <!-- Login Dropdown -->
                <div class="relative group">
                    <button class="px-5 py-2 border border-purple-600 text-purple-600 rounded-lg font-medium hover:bg-purple-50 transition flex items-center">
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        Login
                        <i class="fas fa-chevron-down ml-2 text-sm"></i>
                    </button>

                    <!-- Dropdown Menu -->
                    <div class="absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-lg py-2 z-50 border opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <!-- Audience Login -->
                        <a href="" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 border-b">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center text-white mr-3">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <p class="font-medium">Audience</p>
                            </div>
                        </a>
                        {{-- Admin Login --}}
                            <a href="/admin" target="_blank" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-green-500 to-green-600 flex items-center justify-center text-white mr-3">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div>
                                    <p class="font-medium">Admin</p>
                                </div>
                            </a>

                        <!-- Organizer Login -->
                        <a href="/organizer" target="_blank" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-r from-green-500 to-green-600 flex items-center justify-center text-white mr-3">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div>
                                <p class="font-medium">Organizer</p>
                            </div>
                        </a>
                    </div>
                </div>
        </div>

        <!-- Mobile Search Bar -->
        <div class="md:hidden mt-4">
            <div class="relative">
                <input
                    type="text"
                    placeholder="Search events, concerts, workshops..."
                    class="w-full px-4 py-2 pl-10 pr-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                >
                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
            </div>
        </div>
    </div>
</nav>
