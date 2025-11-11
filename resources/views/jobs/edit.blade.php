<x-layouts.layout>
    <x-slot:heading>
        Edit Job : {{ $job->title }}
    </x-slot:heading>
    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-forms.field>
                        <x-forms.label>Title</x-forms.label>
                        <div class="mt-2">
                            <x-forms.input id="title" name="title" placeholder="Please enter the title" value="{{ $job->title }}" />
                            <x-forms.error name="title" />
                        </div>
                    </x-forms.field>


                    <x-forms.field>
                        <x-forms.label>Salary</x-forms.label>
                        <div class="mt-2">
                            <x-forms.input id="salary" name="salary" placeholder="$50,000 Per Year" value="{{ $job->salary }}" />
                            <x-forms.error name="salary" />
                        </div>
                    </x-forms.field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
            </div>

            <div class="flex items-center gap-x-6">
                <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <div>
                    <x-forms.button>Update</x-forms.button>
                </div>
            </div>
        </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layouts.layout>
