<x-layouts.auth>
    <x-slot name="header">Sign in to your account</x-slot>
    <x-slot name="title">Login</x-slot>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        @if (isset($message))
            <h1 class="p-3 my-2 text-green-800 bg-green-400 rounded-md">Pendaftaran Berhasil</h1>
        @endif
        <form class="space-y-6" action="{{ route('user.login') }}" method="POST" novalidate>
            @csrf
            <div>
                <label for="email" class="block font-medium text-gray-900 text-sm/6">Email address</label>
                <div class="mt-2">
                    <input type="email" name="email" id="email" autocomplete="email" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    @error('email')
                        <span class="mt-2 font-semibold text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block font-medium text-gray-900 text-sm/6">Password</label>
                    <div class="text-sm">
                        <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot
                            password?</a>
                    </div>
                </div>
                <div class="mt-2">
                    <input type="password" name="password" id="password" autocomplete="current-password" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    @error('password')
                        <span class="mt-2 font-semibold text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div>
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                    in</button>
            </div>
        </form>

        <p class="mt-10 text-center text-gray-500 text-sm/6">
            Not a member?
            <a href="/register" class="font-semibold text-indigo-600 hover:text-indigo-500">Register</a>
        </p>
    </div>
</x-layouts.auth>
