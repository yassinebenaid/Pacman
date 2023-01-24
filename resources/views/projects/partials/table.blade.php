@props(['projects' => $projects])
<div class="min-w-max">

    <div class="bg-white rounded-lg shadow-default">
        <table class="w-full ">
            <thead class="border-b bg-gray border-gray-2">
                <tr class="grid grid-cols-5 px-4">
                    <td class="p-2 text-xs font-medium text-gray-3">Project Name</td>
                    <td class="p-2 text-xs font-medium text-gray-3">type</td>
                    <td class="p-2 text-xs font-medium text-gray-3">members</td>
                    <td class="p-2 text-xs font-medium text-gray-3">tasks</td>
                    <td class="p-2 text-xs font-medium text-gray-3">creation date</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($projects as $project)
                    <tr class="grid grid-cols-5 px-4 border-b cursor-pointer border-gray-2 hover:bg-gray">
                        <div x-on:click="redirect('{{ route('project.show', $project->definer) }}')">

                            <td class="grid items-center font-semibold">
                                <a class="py-4" href="{{ route('project.show', $project->definer) }}">
                                    {{ $project->name }}
                                </a>
                            </td>

                            <td class="grid items-center font-semibold">
                                <a class="py-4 " href="{{ route('project.show', $project->definer) }}">
                                    {{ $project->type }}
                                </a>
                            </td>

                            <td class="grid items-center font-semibold">
                                <a class="py-4" href="{{ route('project.show', $project->definer) }}">
                                    {{ $project->members_count }}
                                </a>
                            </td>

                            <td class="grid items-center font-semibold">
                                <a class="py-4" href="{{ route('project.show', $project->definer) }}">
                                    14
                                </a>
                            </td>
                            <td class="grid items-center font-semibold">
                                <a class="py-4" href="{{ route('project.show', $project->definer) }}">
                                    {{ $project->created_at }}
                                </a>
                            </td>
                        </div>
                    </tr>
                @endforeach

                <tr class="grid grid-cols-6 px-4 cursor-pointer hover:bg-gray">
                    <td class="flex items-center gap-2 py-4 font-semibold ">
                        <span class="grid px-2 py-1 text-white rounded-full w-max place-content-center bg-primary"><i
                                class="text-2xl bi bi-plus"></i></span>
                        <span class="text-primary">Create project</span>
                    </td>

                </tr>

            </tbody>



        </table>

    </div>
</div>
