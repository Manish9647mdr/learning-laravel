<x-layouts.layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>
    <p>
        This job pay {{ $job->salary }} per year.
    </p>

    <p class="mt-6">
        <x-forms.button href="/jobs/{{ $job->id }}/edit">Edit Job</x-forms.button>
    </p>
</x-layouts.layout>
