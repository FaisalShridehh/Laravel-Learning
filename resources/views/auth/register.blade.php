<x-app-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
    <div class="bg-white px-4 py-6 shadow sm:p-6 sm:rounded-lg max-w-2xl mx-auto">
        <div class="flex items-center justify-center">
            <img src="https://api.dicebear.com/9.x/shapes/svg?seed=Peanut" class="h-16 w-16" alt="Peanut">
        </div>
        
        <form action="{{ route('auth.store.register') }}" method="POST" class="space-y-4  ">
            @csrf
            <x-form.form-field>
                <x-form.form-label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name
                </x-form.form-label>
                <x-form.form-input id="name"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-2"
                    type="text" name="name"  autofocus />
                <x-form.form-error name="name" />
            </x-form.form-field>

            <x-form.form-field>
                <x-form.form-label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address
                </x-form.form-label>
                <x-form.form-input id="email"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-2"
                    type="email" name="email"  />
                <x-form.form-error name="email" />
            </x-form.form-field>

            <x-form.form-field>
                <x-form.form-label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password
                </x-form.form-label>
                <x-form.form-input id="password"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-2"
                    type="password" name="password"  autocomplete="new-password" />
                <x-form.form-error name="password" />
            </x-form.form-field>

            <x-form.form-field>
                <x-form.form-label for="password_confirmation"
                    class="block text-sm font-medium leading-6 text-gray-900">
                    Confirm password</x-form.form-label>
                <x-form.form-input id="password_confirmation"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-2"
                    type="password" name="password_confirmation"  />

                <x-form.form-error name="password_confirmation" />
            </x-form.form-field>

            {{-- <x-form.form-field>
            <x-form.form-label class="block text-sm font-medium leading-6 text-gray-900">
                <x-form.form-checkbox name="terms" id="terms" />
                <span class="ml-2">I agree to the <a href="#" class="underline text-sm font-medium text-gray-900">Terms
                        and Conditions</a></span>
            </x-form.form-label>
        </x-form.form-field> --}}

            <x-form.form-button type="submit">Register</x-form.form-button>
        </form>
    </div>
</x-app-layout>
