<x-layouts.layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>
    {{--
    The N+1 problems refers to database queries executed within a loop, rather
    then making a single query that loads all of the relevant data up front.
    --}}
    <div class="space-y-2">
        @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-4 border border-gray-200 rounded-lg">

            <div class="font-bold text-blue-500">
                {{ $job->employer->name }}
            </div>

            <div>
                <strong>{{ $job['title'] }}</strong> : Pays {{ $job['salary'] }} per year
            </div>
        </a>
        @endforeach
    </div>

    <div class="mt-3">
        {{ $jobs->links() }}
    </div>
</x-layouts.layout>
