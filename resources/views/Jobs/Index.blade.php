{{-- show a list of jobs --}}
<x-app-layout>
    <x-slot:heading>
        Job listing
    </x-slot:heading>
    <div class="bg-white shadow-lg rounded-lg p-6">

        <ul class="divide-y divide-gray-200">
            @foreach ($jobs as $job)
            <li class="py-4">
                <a href="{{ route('jobs.show', $job['id']) }}"
                    class="flex items-center justify-between hover:bg-indigo-50 rounded-md p-2 transition duration-150 ease-in-out">
                    <div class="flex items-center">
                        <div
                            class="bg-indigo-600 text-white rounded-full h-8 w-8 flex items-center justify-center mr-3">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">{{ $job['title'] }}</h3>
                            <p class="text-gray-500 text-sm ">Employer: {{ $job->employer->name }}</p>
                            <p class="text-gray-700">Pays {{ $job['salary'] }} per year</p>
                        </div>
                    </div>
                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </li>
            @endforeach
        </ul>
        {{ $jobs->links() }}

    </div>
</x-app-layout>
