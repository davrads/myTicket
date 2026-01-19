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
                <a href="#" class="px-5 py-2 border border-purple-600 text-purple-600 rounded-lg font-medium hover:bg-purple-50 transition">
                    Login
                </a>
                <a href="#" class="px-5 py-2 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-lg font-medium hover:opacity-90 transition">
                    Sign Up
                </a>
                
                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="md:hidden p-2 text-gray-700 hover:text-purple-600">
                    <i class="fas fa-bars text-xl"></i>
                </button>
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

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden hidden mt-4 border-t pt-4">
            <div class="flex flex-col space-y-3">
                <a href="#" class="px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg font-medium">
                    Events
                </a>
                <a href="#" class="px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg font-medium">
                    Features
                </a>
                <a href="#" class="px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg font-medium">
                    Dashboard
                </a>
                <div class="border-t pt-4">
                    <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg font-medium">
                        Login
                    </a>
                    <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg font-medium">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>