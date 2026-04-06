<x-frontend-layout>
    <div class="min-h-screen bg-gradient-to-b from-gray-50 to-white flex items-center justify-center py-12 px-4">
        <div class="max-w-md w-full">
            <div class="bg-white rounded-3xl shadow-xl p-8">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-gray-900">Welcome Back</h1>
                    <p class="text-gray-600 mt-2">Sign in to book tickets</p>
                </div>

                <!-- Regular Login -->
                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" name="email" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-2xl focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none"
                               placeholder="you@example.com"
                               value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" name="password" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-2xl focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none"
                               placeholder="••••••••">
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between text-sm">
                        <label class="flex items-center">
                            <input type="checkbox" name="remember" class="w-4 h-4 text-purple-600 rounded">
                            <span class="ml-2 text-gray-600">Remember me</span>
                        </label>
                        <a href="#" class="text-purple-600 hover:underline">Forgot password?</a>
                    </div>

                    <button type="submit"
                            class="w-full bg-gradient-to-r from-purple-600 to-indigo-700 text-white py-4 rounded-2xl font-semibold text-lg hover:from-purple-700 hover:to-indigo-800 transition">
                        Sign In
                    </button>
                </form>

                <!-- Google Login -->
                <div class="mt-6">
                    <a href="{{ route('google.login') }}"
                       class="flex items-center justify-center gap-3 w-full border border-gray-300 hover:border-gray-400 py-4 rounded-2xl font-medium transition">
                        <img src="https://www.google.com/images/branding/googleg/1x/googleg_standard_color_128dp.png"
                             alt="Google" width="22">
                        Continue with Google
                    </a>
                </div>

                <div class="text-center mt-8
