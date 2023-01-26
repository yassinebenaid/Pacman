@props(['projects'])

<div class="grid gap-4 lg:grid-cols-2">

    {{-- projects cards --}}
    @foreach ($projects as $project)
        <div class="p-5 transition-all bg-white rounded-lg shadow-default hover:shadow-door">
            <div class="flex items-center justify-between p-1 text-sm font-bold text-yellow-1">
                {{ $project->type }}
            </div>
            <a href="{{ route('project.show', $project->definer) }}"
                class="max-w-full p-2 text-xl font-bold break-words cursor-pointer w-max hover:text-primary hover:underline">
                {{ $project->name }}
            </a>

            <div class="py-3 text-sm text-gray-3">{{ $project->description }}</div>

            <div class="flex gap-4 p-1 text-gray-3">
                <span>{{ $project->created_at }}</span>
                <span><i class="bi bi-people"></i> {{ $project->members_count }}</span>
                <span><i class="bi bi-clipboard-data"></i> 12</span>
            </div>
        </div>
    @endforeach

    {{-- create project card --}}
    <div
        class="grid p-5 transition-all bg-white rounded-lg cursor-pointer place-content-center shadow-default hover:shadow-door">

        <div class="flex flex-col items-center py-5 text-center">
            <div class="rounded-[50%] bg-primary w-12 h-12 grid place-content-center text-white">
                <i class="text-2xl bi bi-plus"></i>
            </div>
            <div class="py-2 font-semibold text-primary">Create Project</div>
        </div>
    </div>
</div>
