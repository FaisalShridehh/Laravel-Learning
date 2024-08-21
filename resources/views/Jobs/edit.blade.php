{{-- create a new job listing --}}
<x-app-layout>
    <x-slot:heading>
        Edit {{$job->title}} Job Listing
    </x-slot:heading>


    <form method="POST" action={{route('jobs.update', $job->id)}}>
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Job details</h2>
                <div class="mt-10 grid grid-cols- sm:grid-cols-6 gap-6">
                    <div class="sm:col-span-3">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <input type="text" name="title" id="title"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-2"
                                placeholder="Full Stack Developer" value="{{$job->title}}">

                            @error('title')
                            <p class="text-sm text-red-600 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                        <div class="mt-2">
                            <input type="text" name="salary" id="salary"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-2"
                                placeholder="$120,000 - $140,000 per yeare" value="{{$job->salary}}">
                            @error('salary')
                            <p class="text-sm text-red-600 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="company" class="block text-sm font-medium leading-6 text-gray-900">Company</label>
                        <div class="mt-2">
                            <input type="text" name="company" id="company"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-2"
                                placeholder="Google" value="{{$job->company}}">
                            @error('company')
                            <p class="text-sm text-red-600 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="location" class="block text-sm font-medium leading-6 text-gray-900">Location</label>
                        <div class="mt-2">
                            <input type="text" name="location" id="location"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-2"
                                placeholder="Mountain View, CA" value="{{$job->location}}">
                            @error('location')
                            <p class="text-sm text-red-600 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-6">
                        <label for="description"
                            class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="3"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-2 resize-none"
                                placeholder="Description...">{{ old('description', $job->description) }}</textarea>
                            @error('description')
                            <p class="text-sm text-red-600 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>



            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a type="button" class="text-sm font-semibold leading-6 text-gray-900"
                    href="{{ route('jobs.show', $job->id) }}">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
    </form>

</x-app-layout>
