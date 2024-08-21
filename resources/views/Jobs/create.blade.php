{{-- create a new job listing --}}
<x-app-layout>
    <x-slot:heading>
        Create a new job listing
    </x-slot:heading>


    <form method="POST" action={{route('jobs.store')}}>
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Job details</h2>

                <div class="mt-10 grid grid-cols- sm:grid-cols-6 gap-6">
                    <x-form.form-field class="sm:col-span-3">
                        <x-form.form-label for="title">
                            Title
                        </x-form-label>
                        <div class="mt-2">
                            <x-form.form-input type="text" name="title" id="title" placeholder="Full Stack Developer" />
                            <x-form.form-error name="title" />
                        </div>
                    </x-form.form-field>

                    <x-form.form-field class="sm:col-span-3">
                        <x-form.form-label for="salary">
                            Salary
                        </x-form-label>
                        <div class="mt-2">

                            <div class="mt-2">
                                <x-form.form-input type="text" name="salary" id="salary"
                                    placeholder="$120,000 - $140,000 per yeare" />
                                <x-form.form-error name="salary" />
                            </div>
                        </div>
                    </x-form.form-field>

                    <x-form.form-field class="sm:col-span-3">
                        <x-form.form-label for="company">
                            Company
                        </x-form-label>
                        <div class="mt-2">
                            <x-form.form-input type="text" name="company" id="company" placeholder="Google" />
                            <x-form.form-error name="company" />
                        </div>
                    </x-form.form-field>

                    <x-form.form-field class="sm:col-span-3">
                        <label for="location" class="block text-sm font-medium leading-6 text-gray-900">Location</label>
                        <div class="mt-2">
                            <x-form.form-input type="text" name="location" id="location" placeholder="Mountain View, CA" />
                            <x-form.form-error name="location" />
                        </div>
                    </x-form.form-field>

                    <x-form.form-field class="sm:col-span-6">
                        <x-form.form-label for="description">description</x-form-label>
                            <div class="mt-2">
                                <x-form.form-textarea name="description" id="description" placeholder="Job description" />
                                <x-form.form-error name="description" />
                            </div>
                    </x-form.form-field>
                </div>
            </div>



            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('jobs.index')}}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <x-form.form-button type="submit">Save</x-form.form-button>
            </div>
    </form>

</x-app-layout>
