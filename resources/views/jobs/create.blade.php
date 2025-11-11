<x-layouts.layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a New Job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-forms.field>
                        <x-forms.label>Title</x-forms.label>
                        <div class="mt-2">
                            <x-forms.input id="title" name="title" placeholder="Please enter the title" />
                            <x-forms.error name="title" />
                        </div>
                    </x-forms.field>

                    <x-forms.field>
                        <x-forms.label>Salary</x-forms.label>
                        <div class="mt-2">
                            <x-forms.input id="salary" name="salary" placeholder="$50,000 Per Year" />
                            <x-forms.error name="salary" />
                        </div>
                    </x-forms.field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <x-forms.button>Save</x-forms.button>
        </div>
    </form>

</x-layouts.layout>
