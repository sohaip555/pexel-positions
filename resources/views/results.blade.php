<x-layout>
    <x-page-heading class="font-bold  text-4xl">Results</x-page-heading>

    <div class="mt-6 space-y-6">
        @foreach($jobs as $job)
            <x-job-card-wide :$job/>
        @endforeach
    </div>

</x-layout>
