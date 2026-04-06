<x-frontend-layout>
    <div class="min-h-screen bg-gradient-to-b from-gray-50 to-white flex items-center justify-center py-12 px-4">
        <div class="max-w-md w-full">
            <div class="bg-white rounded-3xl shadow-xl p-8">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-gray-900">Reset Password</h1>
                    <p class="text-gray-600 mt-2">Enter your email to receive reset link</p>
                </div>

                <form action="{{ route('password.email') }}" method="POST" class="space-y-6">
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

                    <button type="submit"
                            class="w-full bg-gradient-to-r from-purple-600 to-indigo-700 text-white py-4 rounded-2xl font-semibold text-lg hover:from-purple-700 hover:to-indigo-800 transition">
                        Send Reset Link
                    </button>
                </form>

                <div class="text-center mt-6 text-sm text-gray-600">
                    <a href="{{ route('login') }}" class="text-purple-600 font-semibold hover:underline">← Back to Login</a>
                </div>
            </div>
        </div>
    </div>
</x-frontend-layout>
