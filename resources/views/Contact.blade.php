<x-app-layout>
    <x-slot:heading>
        Contact Us
    </x-slot:heading>
    <div class="">
        <form class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name"
                    class="block w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:ring-indigo-500"
                    placeholder="John Doe">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email"
                    class="block w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:ring-indigo-500"
                    placeholder="name@example.com">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea name="message" id="message" rows="4" class="block w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:ring-indigo-500"></textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="px-4 py-2 text-white bg-indigo-500 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-600">Send
                    Message</button>
        </form>
    </div>

</x-app-layout>
