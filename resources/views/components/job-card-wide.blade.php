@props(['job'])
<x-panel class="flex gap-x-6 border">
    <div >
        <x-employer-logo :width="90"/>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-500">{{$job->employer->name}}</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">
            <a href="{{$job->url}}" target="_blank">
                {{$job->title}}
            </a>
        </h3>
        <p class="text-sm text-gray-500 mt-auto">Full Time - from ${{$job->salary}}</p>
    </div>

    <div>
        @foreach($job->tags as $tag)
            <x-tag size="small" :$tag />
        @endforeach
    </div>
</x-panel>

