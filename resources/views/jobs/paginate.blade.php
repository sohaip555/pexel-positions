<x-layout>
    <div class="space-y-10">


        <div class="mt-6 space-y-6">
            {{$jobs = $jobs->links()}}
                <x-job-card-wide : $jobs/>
        </div>

    </div>
</x-layout>
