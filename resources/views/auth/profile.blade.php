@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Update Profile') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="/profile/{{ Auth::id() }}">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Name') }}:
                        </label>

                        <input id="name" type="text" class="bg-gray-50 form-input w-full @error('name')  border-red-500 @enderror"
                            name="name" required autocomplete="name" autofocus  value="{{ Auth::user()->name }}">

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="username" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Username') }}:
                        </label>
                        <input id="username" type="text" class="bg-gray-50 form-input w-full @error('username')  border-red-500 @enderror"
                            name="username" value="{{ Auth::user()->username }}" autocomplete="username">

                        @error('username')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="bg-gray-50 form-input w-full @error('email') border-red-500 @enderror" name="email"
                            required autocomplete="email"  value="{{ Auth::user()->email }}">

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="bg-gray-50 form-input w-full @error('password') border-red-500 @enderror" name="password">

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="password-confirm" type="password" class="bg-gray-50 form-input w-full"
                            name="password_confirmation">
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none mb-8 font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            {{ __('Save Changes') }}
                        </button>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
